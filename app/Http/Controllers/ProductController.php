<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index',['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $product = new Product;

        $product->name = $request->name;
        $product->image = $request->image;       

        $product->save();

        return redirect('/produtos')->with('msg', 'Produto criado com sucesso');
    }
}
