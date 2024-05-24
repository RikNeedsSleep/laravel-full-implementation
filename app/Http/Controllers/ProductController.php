<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function showInvoice($id)
    {
        $product = Product::findOrFail($id);
        return view('product.invoice', compact('product'));
    }
}