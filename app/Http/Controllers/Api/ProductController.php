<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProductApiResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(Request $request)
    {
        $products = Product::with(['brand', 'category']);

        if ($request->has('category_id')) {
            $products->where('category_id', $request->input('category_id'));
        }

        if ($request->has('brand_id')) {
            $products->where('brand_id', $request->input('brand_id'));
        }

        if ($request->has('is_popular')) {
            $products->where('is_popular', $request->input('is_popular'));
        }

        if ($request->has('limit')) {
            $products->limit($request->input('limit'));
        }

        return ProductApiResource::collection($products->get());
    }

    public function show(Product $product)
    {
        $product->load(['category', 'features', 'testimonials', 'photos', 'brand']);

        return new ProductApiResource($product);
    }
}
