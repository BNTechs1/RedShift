<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
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
        return (['products' => Product::latest()->filter(request(['tag','search']))->paginate(5)]);
    }

    public function adminindex()
    {
        $products  = Product::latest()->filter(request(['tag','search']))->paginate(5);  
        
        View::share('products', $products);

        return  $products;
    }

    public function show(Product $product)
    {
        return Product::find($product);
    }
   
    // show create form 
    // public function create()
    // {
    //     return view('products.create');
    // } 

   
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

        // session::flash('message', 'Product created Successfully');
        return redirect('/')->with('message', 'Product created Successfully'); 
    }
    // public function edit(Product $product)
    // {
    //     return view('products.edit');
    // }

  
    public function update(Request $request, Product $product)
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

        $product->update($formFields);

        return 'Product updated successfully'; 
    }

    
    public function destroy(Product $product)
    {
        $product->delete();
        return 'Deleted succsfully';
    }
}
