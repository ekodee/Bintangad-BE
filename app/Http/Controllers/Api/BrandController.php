<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\BrandApiResource;
use App\Models\ProductBrand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function index(Request $request)
    {
        $brands = ProductBrand::withCount(['products']);

        if ($request->has('limit')) {
            $brands->limit($request->input('limit'));
        }

        return BrandApiResource::collection($brands->get());
    }

    public function show(ProductBrand $brand)
    {
        $brand->load(['products', 'popularProducts']);
        $brand->loadCount(['products']);

        return new BrandApiResource($brand);
    }
}
