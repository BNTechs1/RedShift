<?php
use App\Http\Controllers\ProductController;
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
Route::get('/',function(){
    return view('index');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/service',function(){
    return view('service');
});

Route::get('/products',function(){
    return view('products');
});

Route::get('/portfolio',function(){
    return view('portfolio');
});

Route::get('/contact',function(){
    return view('contact');
});




// To be moved to api.php or api endpoint for testing 
Route::get('/product', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{product}', [ProductController::class, 'show']);

