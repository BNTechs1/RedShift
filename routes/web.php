<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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



/*
|--------------------------------------------------------------------------
|Pages Routes
|--------------------------------------------------------------------------
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


/*
|--------------------------------------------------------------------------
|Admin Routes
|--------------------------------------------------------------------------
*/

//Route to Admin Dashboard
Route::get('/dashborad', [RouteController::class, 'dashboard'])->middleware('auth');

// Route::get('/dashborad',function(){
//     return view('Admin.dashboard');
// });


/*
|--------------------------------------------------------------------------
|Products Routes
|--------------------------------------------------------------------------
*/



//Route to  Manage products Page
Route::get('/manageProduct',  [ProductController::class, 'manage'])->middleware('auth');

//Route to Create Products page
Route::get('/createproducts', [ProductController::class, 'create'])->middleware('auth');

//Route to get all Products 
Route::get('/product', [ProductController::class, 'index']);

//Route to post new products to the DB
Route::post('/products', [ProductController::class, 'store'])->middleware('auth');

//Route to edit product pag
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->middleware('auth');

//Route to update product
Route::put('/products/update/{product}', [ProductController::class, 'update'])->middleware('auth');

//Route to Delete Product
Route::get('/products/delete/{product}', [ProductController::class, 'destroy'])->middleware('auth');


//Route to Show single Product
Route::get('/products/{product}', [ProductController::class, 'show']);

/*
|--------------------------------------------------------------------------
|Authentication Routes
|--------------------------------------------------------------------------
*/

//Route for user registration 
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Route for user login 
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//route to submit registration 
Route::post('/users', [UserController::Class, 'store']);


//Route to submit Login
Route::post('/user/login', [UserController::class, 'authenticate']);

//Route to Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');



/*
|--------------------------------------------------------------------------
|Services Routes
|--------------------------------------------------------------------------
*/



//Route to  Manage services Page
Route::get('/manageService',  [ServiceController::class, 'manage'])->middleware('auth');

//Route to Create services page
Route::get('/createservices', [ServiceController::class, 'create'])->middleware('auth');

//Route to get all services 
Route::get('/service', [ServiceController::class, 'index']);

//Route to post new services to the DB
Route::post('/services', [ServiceController::class, 'store'])->middleware('auth');


//Route to edit service pag
Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->middleware('auth');

//Route to update service
Route::put('/services/update/{service}', [ServiceController::class, 'update'])->middleware('auth');

//Route to Delete service
Route::get('/services/delete/{service}', [ServiceController::class, 'destroy'])->middleware('auth');


//Route to Show single service
Route::get('/services/{service}', [ServiceController::class, 'show']);




















// To be moved to api.php or api endpoint for testing 
// Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->middleware('auth');
// Route::get('/creatproduct',function(){
//     return view('products.create');
// });

// Route::get('/createProduct',function(){
//     return view('products.create');
// });

