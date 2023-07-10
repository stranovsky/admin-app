<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){        
        return view('products.index',[
            'heading' => 'wtf',
            'products'=> Product::latest('products.created_at')->filter(request(['categoryID','search']))->get()
        ]);
    }

    public function show(Product $product){
        return view('products.show',[
            'heading' => 'wtf',
            'product'=> $product
        ]);
    }
}
