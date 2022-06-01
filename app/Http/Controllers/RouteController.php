<?php

namespace App\Http\Controllers;
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
class RouteController extends Controller
{
    //show dashboard page form 
    public function dashboard()
    {
        return view('Admin.dashboard');
    } 

  

   
}
