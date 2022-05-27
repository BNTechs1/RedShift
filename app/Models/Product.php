<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = ['name','description','image','tag','price'];

    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false){
            $query->where('tag','like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false){
            $query->where('name','like', '%' . request('search') . '%')
                ->orWhere('description','like', '%' . request('search') . '%')
               ->orWhere('description','like', '%' . request('search') . '%')
               ->orWhere('tags','like', '%' . request('search') . '%');
        }
    }
}
