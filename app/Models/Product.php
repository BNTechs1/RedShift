<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = ['name','description','image','wheels','price','transmission','type','model'];

    public function scopeFilter($query, array $filters){
        // dd($filters);
        if($filters['wheels'] ?? false){
            $query->where('wheels','like', '%' . request('wheels') . '%');
        }
        // if($filters['model'] ?? false){
        //     $query->where('model','like', '%' . request('model') . '%');
        // }
        if($filters['transmission'] ?? false){
            $query->where('transmission','like', '%' . request('transmission') . '%');
        }
        if($filters['type'] ?? false){
            $query->where('type','like', '%' . request('type') . '%');
        }
        if($filters['price'] ?? false){
            $query->where('price','like', '%' . request('price') . '%');
        }
        if($filters['search'] ?? false){
            $query->where('name','like', '%' . request('search') . '%')
                ->orWhere('description','like', '%' . request('search') . '%')
               ->orWhere('description','like', '%' . request('search') . '%')
               ->orWhere('wheels','like', '%' . request('search') . '%')
               ->orWhere('price','like', '%' . request('search') . '%')
               ->orWhere('transmission','like', '%' . request('search') . '%')
               ->orWhere('type','like', '%' . request('search') . '%')
               ->orWhere('model','like', '%' . request('search') . '%');

            }
    }
}
