<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderTransactionRequest;
use App\Http\Resources\Api\OrderTransactionApiResource;
use App\Models\OrderTransaction;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderTransactionController extends Controller
{
    //
    public function store(StoreOrderTransactionRequest $request)
    {
        try {
            // Validate request data
            $validatedData = $request->validated();

            // Handle file upload
            if ($request->hasFile('proof')) {
                $filePath = $request->file('proof')->store('proofs', 'public');
                $validatedData['proof'] = $filePath;
            }

            // Retrieve products and calculate total quantities and prices
            $products = $request->input('product_ids');
            $totalQuantity = 0;
            $totalPrice = 0;

            $productIds = array_column($products, 'id');
            $productModels = Product::whereIn('id', $productIds)->get();

            foreach ($products as $product) {
                $productModel = $productModels->firstWhere('id', $product['id']);
                $totalQuantity += $product['quantity'];
                $totalPrice += $productModel->price * $product['quantity'];
            }

            // setting pajak
            $tax = 0.11 * $totalPrice;
            $grandTotal = $totalPrice + $tax;

            // Populate booking transaction data
            $validatedData['total_amount'] = $grandTotal;
            $validatedData['total_tax_amount'] = $tax;
            $validatedData['sub_total_amount'] = $totalPrice;
            $validatedData['is_paid'] = false;
            $validatedData['order_trx_id'] = OrderTransaction::generateUniqueTrxId();

            // Save total quantity in booking transactions
            $validatedData['quantity'] = $totalQuantity;

            $orderTransaction = OrderTransaction::create($validatedData);

            // Create transaction details for each product
            foreach ($products as $product) {
                $productModel = $productModels->firstWhere('id', $product['id']);
                $orderTransaction->transactionDetails()->create([
                    'product_id' => $product['id'],
                    'quantity' => $product['quantity'],
                    'price' => $productModel->price,
                ]);
            }

            // Return booking transaction with details
            return new OrderTransactionApiResource($orderTransaction->load(['transactionDetails', 'transactionDetails.product']));
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred', 'error' => $e->getMessage()], 500);
        }
    }

    public function order_details(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'order_trx_id' => 'required|string',
        ]);

        $order = OrderTransaction::where('email', $request->email)
            ->where('order_trx_id', $request->order_trx_id)
            ->with([
                'transactionDetails',
                'transactionDetails.product',
                'transactionDetails.product.brand',
            ])
            ->first();

        if (! $order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        return new OrderTransactionApiResource($order);
    }
}
