<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
 
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */
Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/about', [HomeController::class, 'about'])->name('about');
 Route::get('/login', [HomeController::class, 'index'])->name('login');
Route::middleware(['web'])->group(function () {
    
    // Dashboard Routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    
    // Profile Routes
    Route::get('/users', [UserController::class, 'index'])->name('users');
    // Admissions
    
    // Enroll
    Route::get('/about', function(){
        return Inertia::render('About');
    })->name('about');
    
    
    Route::get('/services', function(){
        return Inertia::render('Service');
    })->name('services');
    
    Route::get('/contact', function(){
        return Inertia::render('Contact');
    })->name('contact');
    Route::get('/clients', function(){
        return Inertia::render('Client');
    })->name('clients');
});

// Product Routes
Route::get('/productA/details', [ProductController::class, 'ext_productA_details'])->name('productA.details');
Route::get('/productB/details', [ProductController::class, 'ext_productB_details'])->name('productB.details');
Route::get('/productC/details', [ProductController::class, 'ext_productC_details'])->name('productC.details');
Route::get('/service/details', [ServiceController::class, 'service_details'])->name('service.details');