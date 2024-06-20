<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function showIndex() {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function showRegister() {
        return view('register');
    }

    public function showDetail($id) {
        $product = Product::find($id);
        return view('detail',compact('product'));
    }
}
