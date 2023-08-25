<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){   
        return  view('categories.index',[
            'heading' => 'wtf',
            'categories'=> Category::latest('categories.created_at')->filter(request(['userID','search']))->paginate(5)
        ]);
    }
    
    public function create(){
        return view('categories.create');
    }
    public function edit(Category $category){
        return view('categories.edit',['Category' => $category]);
    }

    public function generate_slug(string $title){
        if (static::whereSlug($slug = Str::slug($title))->exists()) {
            $max = static::whereTitle($title)->latest('id')->skip(1)->value('slug');
            if (is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {

                    return $mathces[1] + 1;

                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }

    public function store (Request $request){
        $formFields = $request->validate([
            'categoryName' => 'required'
        ]);

        $formFields['slug'] = $this->generate_slug($formFields['categoryName']);
        $formFields['idUser'] = auth()->id();

        $Category = Category::create($formFields);

        dd($Category->query);
        return redirect('./categories')->with('success','Category updated successfully');
    }

    public function update (Request $request, Category $category){
        $formFields = $request->validate([
            'categoryName' => 'required'
        ]);

        $formFields['slug'] = $this->generate_slug($formFields['categoryName']);
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
