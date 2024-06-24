<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_season;
use App\Models\Season;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateRequest;
class ProductController extends Controller
{
    // 商品一覧ページ表示
    public function showIndex() {
        $products = Product::Paginate(6);
        return view('index', compact('products'));
    }

    // 商品登録ページ表示
    public function showRegister() {
        return view('register');
    }

    // 商品登録機能
    public function store(RegisterRequest $request) {

        $file_name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public' , $file_name);

        $new_product = Product::create([
            "name" => $request->input("name"),
            "price" => $request->input("price"),
            "image" => $file_name,
            "description" => $request->input("description")
        ]);


        $new_product->seasons()->sync($request->season);

        $products = Product::Paginate(6);
        return redirect('/products');
    }

    // 商品詳細ページ表示
    public function showDetail($id) {
        $product = Product::find($id);
        $seasons = Product_season::where('product_id', $id)->get();
        return view('detail',compact('product','seasons'));
    }


    public function updateShow() {
        return redirect('/products');
    }
    // 商品更新機能
    public function update(UpdateRequest $request) {

        $file_name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public' , $file_name);

        $update = Product::find($request->id)->update([
            "name" => $request->input("name"),
            "price" => $request->input("price"),
            "image" => $file_name,
            "description" => $request->input("description")
        ]);

        // これだと、アップデートし続けてしまうため、最後にアップデートした値のみが登録されてしまう。
        foreach($request->seasons as $season) {
            $season_update = Product_season::where('product_id',$request->id)->update([
            "product_id" => $request->input('id'),
            "season_id" => $season + 1
        ]);
        }

        return redirect('/products');
    }

    // 検索機能
    

    // 並び替え機能
    
}
