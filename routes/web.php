<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ProfileController;

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
Route::post('/create-staff', [StaffController::class, 'addMembers']);

Route::post('/apply/fixed-deposit', [ApplicationController::class, 'fixedDeposit']);


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



//CUSTOMERS

Route::get('/customers', [CustomerController::class, 'index'])->name( 'customers');



Route::get('pending-applications', [ApplicationController::class, 'index'])->name('pending-applications');


Route::get('/staff', [MembersController::class, 'index'])->name('staff');
require __DIR__.'/auth.php';
