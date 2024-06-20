<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_season;
use App\Models\Season;

class ProductController extends Controller
{
    public function showIndex() {
        $products = Product::Paginate(6);
        return view('index', compact('products'));
    }

    public function showRegister() {
        return view('register');
    }

    public function showDetail($id) {
        $product = Product::find($id);
        $seasons = Product_season::where('product_id', $product->id)->get();
        return view('detail',compact('product','seasons'));
    }
}
