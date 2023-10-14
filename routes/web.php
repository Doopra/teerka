<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminController\BookingsController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\AdminController\OrdersController;
use App\Http\Controllers\AdminController\ProductController;
use App\Http\Controllers\AdminController\CategoryController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/register', [UserManagementController::class, 'register'])->name('registerUser'); // for view
Route::post('/register', [UserManagementController::class, 'registerPost'])->name('register'); // To register
Route::get('/login', [UserManagementController::class, 'login'])->name('login'); // To register
Route::post('/login', [UserManagementController::class, 'loginPost'])->name('login'); // To register
Route::DELETE('/logout', [UserManagementController::class, 'logout'])->name('logout'); // To logout



Route::get('/redirect', [AdminController::class, 'redirec']);

// ->middleware('auth','verified');



//  category route
Route::get('/view_category', [CategoryController::class, 'view_category'])->name('category');
Route::post('/add_category', [CategoryController::class, 'add_category']);
Route::get('/delete_category/{id}', [CategoryController::class, 'delete_category']);


//product route

Route::get('/view_product', [ProductController::class, 'view_product'])->name('admin.add_product');
Route::post('/add_product', [ProductController::class, 'add_product']);
Route::get('/product_details/{id}', [HomeController::class, 'product_details']);
Route::get('/show_product', [ProductController::class, 'show_product'])->name('admin.show_product');
Route::get('/delete_product/{id}', [ProductController::class, 'delete_product']);


//Order product route
Route::get('/order', [OrdersController::class, 'order']);
Route::get('/delivered/{id}', [OrdersController::class, 'delivered']);
Route::get('/show_order', [HomeController::class, 'show_order']);
Route::get('/cancel_order/{id}', [HomeController::class, 'cancel_order']);

// Email route
Route::get('send_email/{id}', [AdminController::class, 'send_email']);
Route::post('send_user_email/{id}', [AdminController::class, 'send_user_email']);
Route::get('search/', [AdminController::class, 'searchdata']);


// pdf route
Route::get('print_pdf/{id}', [OrdersController::class, 'print_pdf']);

// cart route
Route::post('/add_cart/{id}', [HomeController::class, 'add_cart']);
Route::get('/show_cart', [HomeController::class, 'show_cart']);
Route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);
Route::get('/cash_order', [HomeController::class, 'cash_order']);

// payment route
Route::get('/stripe/{totalprice}', [HomeController::class, 'stripe']);
Route::post('stripe/{totalprice}', [HomeController::class, 'stripePost'])->name('stripe.post');

// search route
Route::get('/search', [HomeController::class, 'searchdata']);

// property route
Route::get('/property/{property}', [HomeController::class, 'property']);
Route::get('/similar_property', [HomeController::class, 'similar_property']);
Route::get('/listing/{city}', [HomeController::class, 'city_listing']);


//bookings route
Route::get('/bookings', [BookingsController::class, 'bookings'])->name('admin.all_bookings');
Route::post('/bookings', [BookingsController::class, 'allBookings'])->name('admin.all_bookings');






