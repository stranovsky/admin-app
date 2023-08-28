<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){   
        $category_response = Category::latest('categories.created_at')->filter(request(['userID','search']))->paginate(5);
        if($category_response)
            return response()->json([ 'result' => 'sucess', 'category' => $category_response]);
        else
            return response()->json([ 'result' => 'failure', 'category' => null]);

    }   

    public function show(Category $category){
        
        return response()->json($category->toJson());
    }

    public function create(){
        return view('categories.create');
    }
    public function edit(Category $category){
        return view('categories.edit',['Category' => $category]);
    }

    public function store (Request $request){
        $formFields = $request->validate([
            'categoryName' => 'required',
            'description'=>'required'
        ]);

        $formFields['slug'] = Category::generate_slug($formFields['categoryName']);
        $formFields['idUser'] = auth()->user()->id;
        $Category = Category::create($formFields);

        dd($Category->query);
        return redirect('./categories')->with('success','Category updated successfully');
    }

    public function update (Request $request, Category $category){
        $formFields = $request->validate([
            'categoryName' => 'required',
            'description'=>'required'
        ]);

        $formFields['slug'] = Category::generate_slug($formFields['categoryName']);
        $category->update($formFields);

        return redirect('./categories/'.$category->id)->with('success','Category updated successfully');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect('./categories')->with('success','Category deleted successfully');
    }
    /*
            $table->string('categoryName');
            $table->string('slug')->unique();
            $table->foreignId('idUser')->constrained(table:'users')->onDelete('cascade');*/
}
