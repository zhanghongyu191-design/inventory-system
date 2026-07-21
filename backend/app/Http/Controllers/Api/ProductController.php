<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * 商品一覧取得
     */
    public function index()
    {
        $products = Product::all();

        return response()->json($products);
    }


    /**
     * 商品登録
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_code' => 'required|string|max:50',
            'jan_code' => 'nullable|string|max:20',
            'name_jp' => 'required|string|max:255',
            'name_cn' => 'nullable|string|max:255',
            'stock_quantity' => 'required|integer|min:0',
        ]);

        $product = Product::create($validated);

        return response()->json($product, 201);
    }


    /**
     * 商品詳細
     */
    public function show(Product $product)
    {
        //
    }


    /**
     * 商品更新
     */
    public function update(Request $request, Product $product)
    {
        //
    }


    /**
     * 商品削除
     */
    public function destroy(Product $product)
    {
        //
    }
}