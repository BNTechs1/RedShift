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

//route to submit registration 
Route::post('/users', [UserController::Class, 'store']);

//Route to Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::post('/user/login', [UserController::class, 'authenticate']);

//Route for user registration 
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Route for user login 
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');




// To be moved to api.php or api endpoint for testing 
Route::get('/product', [ProductController::class, 'index']);
// Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store'])->middleware('auth');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->middleware('auth');;
Route::put('/products/{product}', [ProductController::class, 'update'])->middleware('auth');;
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::get('/products/{product}', [ProductController::class, 'destroy'])->middleware('auth');;


