<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
//Common Resource Routes 
//index - show all products 
//show - show single product
//create - 
//store -  store new product 
//edit -
//update - update product
//destroy - delete product
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    public function show(Product $product)
    {
        return Product::find($product);
    }
   
    public function create()
    {
        //
    } 

   
    public function store(Request $request)
    {
        //
    }

    
     
   

   
    public function edit(Product $product)
    {
        //
    }

  
    public function update(Request $request, Product $product)
    {
        //
    }

    
    public function destroy(Product $product)
    {
        //
    }
}
