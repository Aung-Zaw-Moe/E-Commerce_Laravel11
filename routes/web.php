<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::middleware(['auth'])->group(function () {
    Route::get('/contacts', [HomeController::class, 'contact'])->name('home.contact');
});

Route::get('/documents', [DocumentController::class, 'home'])->name('documents.home');
// Route::get('/contacts', [HomeController::class, 'contact'])->name('home.contact');
// Route for the contact form submission
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Route for the admin panel to view all contact form submissions
Route::get('/admin/contacts', [ContactController::class, 'index'])->middleware(['auth', 'admin'])->name('admin.contacts');


route::get('/', [HomeController::class, 'home']);
route::get('/dashboard', [HomeController::class, 'login_home'])->middleware(['auth', 'verified'])->name('dashboard');
route::get('/myorders', [HomeController::class, 'myorders'])->middleware(['auth', 'verified']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
// For Category AZM
route::get('admin/dashboard', [HomeController::class, 'index'])->middleware('auth', 'admin');
route::get('view_category', [AdminController::class, 'view_category'])->middleware('auth', 'admin');
route::post('add_category', [AdminController::class, 'add_category'])->middleware('auth', 'admin');
route::get('edit_category/{id}', [AdminController::class, 'edit_category'])->middleware('auth', 'admin');
route::post('update_category/{id}', [AdminController::class, 'update_category'])->middleware('auth', 'admin');
route::get('delete_category/{id}', [AdminController::class, 'delete_category'])->middleware('auth', 'admin');

// For Product AZM Admin Side
route::get('add_product', [AdminController::class, 'add_product'])->middleware('auth', 'admin');
route::post('upload_product', [AdminController::class, 'upload_product'])->middleware('auth', 'admin');
route::get('view_product', [AdminController::class, 'view_product'])->middleware('auth', 'admin');
route::get('update_product/{id}', [AdminController::class, 'update_product'])->middleware('auth', 'admin');
route::post('edit_product/{id}', [AdminController::class, 'edit_product'])->middleware('auth', 'admin');
route::get('delete_product/{id}', [AdminController::class, 'delete_product'])->middleware('auth', 'admin');

route::get('product_search', [AdminController::class, 'product_search'])->middleware('auth', 'admin');
// For Product AZM Home Side or User Side
route::get('product_details/{id}', [HomeController::class, 'product_details']);
route::get('add_cart/{id}', [HomeController::class, 'add_cart'])->middleware(['auth', 'verified']);
route::get('mycart', [HomeController::class, 'my_cart'])->middleware(['auth', 'verified']);
route::get('removecart/{id}', [HomeController::class, 'removecart'])->middleware(['auth', 'verified']);
route::post('comfirm_order', [HomeController::class, 'comfirm_order'])->middleware(['auth', 'verified']);

//Stripe Payment
Route::controller(HomeController::class)->group(function () {
    // Add the following route to ensure the variable $value is passed correctly to the view
    Route::get('stripe/{value}', [HomeController::class, 'stripe']);
    Route::post('stripe/{value}', [HomeController::class, 'stripePost'])->name('stripe.post');
});

// For Order AZM Admin Side
route::get('view_order', [AdminController::class, 'view_order'])->middleware(['auth', 'verified']);
route::get('on_way/{id}', [AdminController::class, 'on_way'])->middleware(['auth', 'admin']);
route::get('delivered/{id}', [AdminController::class, 'delivered'])->middleware(['auth', 'admin']);
route::get('print_pdf/{id}', [AdminController::class, 'print_pdf'])->middleware(['auth', 'admin']);
