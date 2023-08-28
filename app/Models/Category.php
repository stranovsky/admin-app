<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['categoryName','description','slug','idUser'];

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

    
    public static function generate_slug(string $title){
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
}
