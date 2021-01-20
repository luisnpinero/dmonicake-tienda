<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;

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

Route::get('/', function () {
    return view('index');
})->name('main');

Route::get('auto-complete', [GoogleController::class, 'index']);


// vistas del dashboard
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//vistas del dashboard usuarios
Route::get('dashboard/user', 'UserController@index')->name('dashboard.user');
Route::get('dashboard/user/create', 'UserController@create')->name('dashboard.user.create');
Route::get('dashboard/user/{user}', 'UserController@view')->name('dashboard.user.view');
Route::get('dashboard/user/{user}/edit', 'UserController@edit')->name('dashboard.user.edit');
Route::post('dashboard/user', 'UserController@store')->name('dashboard.users.store');
Route::match(['put', 'patch'], 'dashboard/user/{user}', 'UserController@update')->name('dashboard.users.update');
Route::delete('dashboard/user/{user}', 'UserController@destroy')->name('dashboard.users.delete');


//vista dashboard productos
Route::get('dashboard/products', 'ProductController@index')->name('dashboard.products');
Route::get('dashboard/products/create', 'ProductController@create')->name('dashboard.products.create');
Route::get('dashboard/products/{products}', 'ProductController@view')->name('dashboard.products.view');
Route::get('dashboard/products/{products}/edit', 'ProductController@edit')->name('dashboard.products.edit');
Route::post('dashboard/products', 'ProductController@store')->name('dashboard.products.store');
Route::match(['put', 'patch'], 'ProductController@update')->name('dashboard.products.update');
Route::delete('dashboard/products/{products}', 'ProductController@destroy')->name('dashboard.products.delete');


//dashboard ordenes
Route::get('dashboard/orders', 'OrderController@index')->name('dashboard.orders');
Route::get('dashboard/orders/{order}/edit', 'OrderController@edit')->name('dashboard.orders.edit');
Route::get('dashboard/orders/{order}', 'OrderController@view')->name('dashboard.orders.view');
Route::match(['put', 'patch'], 'OrderController@edit')->name('dashboard.orders.update');
Route::delete('dashboard/orders/{order}', 'OrderController@destroy')->name('dashboard.products.delete');


//dashboard de payment methods
Route::get('dashboard/payment-methods', 'PaymentMethodController@index')->name('dashboard.paymentmethods');
Route::get('dashboard/payment-methods/{paymentmethod}/edit', 'PaymentMethodController@edit')->name('dashboard.paymentmethods.edit');
Route::get('dashboard/payment-methods/create', 'PaymentMethodController@create')->name('dashboard.paymentmethods.create');
Route::get('dashboard/payment-methods/{paymentmethod}', 'PaymentMethodController@viex')->name('dashboard.paymentmethods.view');
Route::post('dashboard/payment-methods', 'PaymentMethodController@store')->name('dashboard.paymentmethods.store');
Route::match(['put', 'patch'], 'dashboard/payment-methods/{paymentmethod}', 'PaymentMethodController@update')->name('dashboard.paymentmethods.update');
Route::delete('dashboard/payment-method/{paymentmethod}', 'PaymentMethodController@destroy')->name('dashboard.paymentmethod.delete');


//dashboard roles
Route::get('dashboard/roles','RoleController@index')->name('dashboard.roles');
Route::get('dashboard/roles/create', 'RoleController@create')->name('dashboard.roles.create');
Route::get('dashboard/roles/{role}/edit', 'RoleController@edit')->name('dashboard.roles.edit');
Route::get('dashboard/roles/{role}', 'RoleController@view')->name('dashboard.roles.view');
Route::post('dashboard/roles/create', 'RoleController@store')->name('dashboard.roles.store');


//dashboard categorias
Route::get('dashboard/categories','CategoryController@index')->name('dashboard.categories');
Route::get('dashboard/categories/create', 'CategoryController@create')->name('dashboard.categories.create');
Route::post('dashboard/categories', 'CategoryController@store')->name('dashboard.categories.store');
Route::get('dashboard/categories/{category}/edit', 'CategoryController@edit')->name('dashboard.categories.edit');
Route::get('dashboard/categories/{category}', 'CategoryController@view')->name('dashboard.categories.view');
Route::match(['put', 'patch'], 'dashboard/categories/{category}', 'CategoryController@update')->name('dashboard.categories.update');


//dashboard currencies
Route::get('dashboard/currencies', 'CurrencyController@index')->name('dashboard.currencies');
Route::get('dashboard/currencies/create', 'CurrencyController@create')->name('dashboard.currencies.create');
Route::post('dashboard/currencies', 'CurrencyController@store')->name('dashboard.currencies.store');
Route::get('dashboard/currencies/{currency}/edit', 'CurrencyController@edit')->name('dashboard.currencies.edit');
Route::match(['put', 'patch'], 'dashboard/currencies/{currency}', 'CurrencyController@update')->name('dashboard.currencies.update');
Route::get('dashboard/currencies/{currency}', 'CurrencyController@view')->name('dashboard.currencies.view');


//vista tienda
Route::get('store', 'StoreController@index')->name('store.index');

Route::get('store/{category}', function ($category) {
    return "vista store/categoria {$category}";
    // return view('index');
})->name('store.category');

Route::get('store/{category}/{product}', function ($category, $product) {
    //return "vista store/categoria/producto {$category}/{$product}";
    return view('store.show');
})->name('store.category.product');

//vistas perfil
Route::get('profile/{user}', function ($user) {
    return "vista perfil de {$user}";
    // return view('index');
})->name('profile.user');

Route::get('profile/{user}/edit', function ($user) {
    return "vista editar perfil de {$user}";
    // return view('index');
})->name('profile.user.edit');

// vistas carrito
Route::get('cart', function () {
    return 'vista carrito';
    // return view('index');
})->name('cart.index');

//vistas compras
Route::get('checkout', function () {
    return 'vista confirmar compra';
    // return view('index');
})->name('checkout.index');