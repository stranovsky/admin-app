<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['categoryName','slug','idUser'];

    public function scopeFilter($query, array $filters){
        //use this filter when selecting from nav bar
        if($filters['userID'] ?? false){
            $query->where('idUser','like', '%'. request('userID') .'%');
        }
        //use this filter when using search bar
        if($filters['search'] ?? false){
            $query  ->join('users', 'idUser', '=', 'users.id')
                    ->where('categoryName','like', '%'. request('search') .'%')
                    ->orWhere('userName','like', '%'. request('search') .'%');
        }
    }

    public function user(){
        return $this->belongsTo(User::class, 'idUser');
    }

    public function products(){
        return $this->hasMany(Product::class, 'idCategory');
    }
}
