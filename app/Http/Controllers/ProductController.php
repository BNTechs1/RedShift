<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
//Common Resource Routes 
//index - show all products 
//show - show single product
//create - show create form
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
        return Product::latest()->filter(request(['tag','search']))->paginate(5);
    }

    public function show(Product $product)
    {
        return Product::find($product);
    }
   
    //show create form 
    public function create()
    {
        return 'Creating form';
    } 

   
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'tag' => 'required',   
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images','public');
        }

        

        Product::create($formFields);

        return 'Hello World'; 
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
