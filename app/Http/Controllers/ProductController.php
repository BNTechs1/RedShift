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


    //show create form 
    public function create()
    {
        return view('products.create');
    } 

     public function edit($id)
    {   
        $product = Product::find($id);
        return view('products.edit', ['product'=>$product]);
    }

    public function detail($id)
    {   
        $product = Product::find($id);
        return view('pages.detailproduct',['product'=>$product]);
    } 
    
    public function manage()
    {
        return view('products.manage');
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.products',
        ['products' => Product::latest()->filter(request(['search']))->paginate(5)]);
    }

    public function show(Product $product)
    {
        return Product::find($product);
    }   

    public function store(Request $request)
    {    
        // dd($request->image);
        $formFields = $request->validate([
            'name' => 'required',
            'model' => 'required',   
            'price' => 'required',
            'wheels' => 'required',
            'transmission' => 'required',
            'type' => 'required',
            'description' => 'required',

        ]);

        if($request->hasFile('image')){
            // $formFields['image'] = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
            $formFields['image'] = $request->file('image')->store('images','public');
        }else{
            return 'no image';
        }
        Product::create($formFields);

        // session::flash('message', 'Product created Successfully');
        return redirect('/manageProduct')->with('message', 'Product created Successfully'); 
    }
   

  
    public function update(Request $request, Product $product)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'model' => 'required',   
            'price' => 'required',
            'wheels' => 'required',
            'transmission' => 'required',
            'type' => 'required',
            'description' => 'required',

        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images','public');
        }

        $product->update($formFields);

        return redirect('/manageProduct')->with('message', 'Product Updated Successfully'); 
    }

    
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/manageProduct')->with('message','Product Deleted succssfully');
    }
}
