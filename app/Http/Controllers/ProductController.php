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

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")). "." . $extension;
            $requestImage->move(public_path('prod'), $imageName);

            $product->image = $imageName;
        }
              

        $product->save();

        return redirect('/produtos')->with('msg', 'Produto criado com sucesso');
    }

    public function edit($id){

        $product = Product::findOrFail($id);

        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request,$id){
        $product = Product::findOrFail($id);

        $product->name = $request->name; 
        
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")). "." . $extension;
            $requestImage->move(public_path('prod'), $imageName);

            $product->image = $imageName;
        }

        $product->save();   
        
        return redirect('/produtos')->with('msg', 'Produto atualizado com sucesso');

    }

    public function delete($id){

        $product = Product::findOrFail($id);

        return view('products.delete', ['product' => $product]);
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        unlink(public_path('prod'). DIRECTORY_SEPARATOR. $product->image);
        $product->delete();   
        
        return redirect('/produtos')->with('msg', 'Produto removido com sucesso');

    }

}
