<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){        
        return view('products.index',[
            'heading' => 'wtf',
            'products'=> Product::latest('products.created_at')->filter(request(['categoryID','search']))->paginate(5)
        ]);
    }

    public function show(Product $product){
        
        return view('products.show',[
            'heading' => 'wtf',
            'product'=> $product
        ]);
    }

    public function create(){
        return view('products.create');
    }
    public function edit(Product $product){
        return view('products.edit',['product' => $product]);
    }

    public function store (Request $request){
        $formFields = $request->validate([
            'productName' => 'required',
            'description'=>'required',
            'price'=>['required','gte:0'],
            'idCategory' =>'required',
            'idUser'=>'required'
        ]);


        $product = Product::create($formFields);

        dd($product->query);
        return redirect('./products')->with('success','Product updated successfully');
    }

    public function update (Request $request, Product $product){
        $formFields = $request->validate([
            'productName' => 'required',
            'description'=>'required',
            'price'=>['required','gte:0'],
            'idCategory' =>'required',
            'idUser'=>'required'
        ]);

        $product->update($formFields);

        return redirect('./products/'.$product->id)->with('success','Product updated successfully');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect('./products')->with('success','Product deleted successfully');
    }
}
