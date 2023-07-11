<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['productName','description','price','idCategory','idUser'];

    public function scopeFilter($query, array $filters){
        //use this filter when selecting from nav bar
        if($filters['categoryID'] ?? false){
            $query->where('idCategory','like', '%'. request('categoryID') .'%');
        }
        //use this filter when using search bar
        if($filters['search'] ?? false){
            $query  ->join('categories', 'idCategory', '=', 'categories.id')
                    ->join('users', 'idUser', '=', 'users.id')
                    ->where('categoryName','like', '%'. request('search') .'%')
                    ->orWhere('userName','like', '%'. request('search') .'%')
                    ->orWhere('productName','like', '%'. request('search') .'%')
                    ->orWhere('description','like', '%'. request('search') .'%');
        }
    }
}
