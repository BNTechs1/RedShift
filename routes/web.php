<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route for Home page
Route::get('/',function(){
    return view('pages.index');
});

//Route for About Page
Route::get('/about',function(){
    return view('pages.about');
});

//Route for Service
Route::get('/service',function(){
    return view('pages.service');
});

//Route for Products
Route::get('/products',function(){
    return view('pages.products');
});

//Route for Portfolio
Route::get('/portfolio',function(){
    return view('pages.portfolio');
});

//Route for Contact
Route::get('/contact',function(){
    return view('pages.contact');
});

Route::get('/creatproduct',function(){
    return view('products.create');
});



//Route for user registration 
Route::get('/register', [UserController::class, 'create']);


// To be moved to api.php or api endpoint for testing 
Route::get('/product', [ProductController::class, 'index']);
// Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
Route::put('/products/{product}', [ProductController::class, 'update']);
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::get('/products/{product}', [ProductController::class, 'destroy']);


