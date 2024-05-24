<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class OrderController extends Controller
{
    public function create($id)
    {
        // Logic untuk membuat pesanan dan menampilkan invoice
        $product = Product::findOrFail($id);
        return view('product.invoice', compact('product'));
    }
}
