<?php

use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ApplicationController;

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

// Route::get('/', function () {
//     return view ('frontend.main');
// });
Route::get('/', function () {
    return view ('frontend.welcome');
});

Route::get('/fixed-deposit', function () {
    return view ('frontend.products.fixed-deposit');
})->name('fixed-deposit');


Route::get('/treasury-bill', function () {
    return view ('frontend.products.treasury-bill');
})->name('treasury-bill');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::post('/create-staff', [StaffController::class, 'createStaff']);


Route::post('/apply/fixed-deposit', [ApplicationController::class, 'fixedDeposit']);

Route::post('/apply/treasury-bill', [ApplicationController::class, 'treasuryBill']);


Route::get('/dynamic-page/{page}', [PageController::class, 'renderDynamicPages'])->name('dynamic.page');
Route::get('/customers', [PageController::class, 'index'])->name('customers'); 



Route::get('/about', 'AboutController@index')->name('about');



Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('post', [HomeController::class, 'post'])->middleware(['auth', 'admin']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Customer Only
Route::middleware(['auth', 'customer'])->group(function(){
    Route::get('/investments', [PageController::class, 'investments'])->name('investments');

    Route::get('/pendingApplications', [PageController::class, 'pendingApplications'])->name('pendingApplications');
});


//Admin and Staff
Route::middleware(['auth', 'admin_staff'])->group(function(){

    Route::post('/approve/{application}', [ProductController::class, 'approve'])->name('approve');

    Route::get('/customers', [CustomerController::class, 'index'])->name( 'customers');

    Route::get('pending-applications', [ApplicationController::class, 'index'])->name('pending-applications');

    Route::get('/fixeddeposit', [PageController::class, 'fixedDeposits'])->name('fixeddeposit');

    Route::get('/treasurybills', [PageController::class, 'tBills'])->name('treasurybills');
});


//Admin Only
Route::middleware(['auth', 'admin'])->group(function(){  
    Route::post('/create-staff', [StaffController::class, 'addMembers']); 

    Route::get('/staff', [MembersController::class, 'index'])->name('staff');
});








require __DIR__.'/auth.php';
