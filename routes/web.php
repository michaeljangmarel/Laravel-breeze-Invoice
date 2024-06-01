<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MovieController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// login ဝင်ပြီး မှ ရမယ်  auth middleware ကကာထားတယ်
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('data',  function () {
        return view('hi.blade.php');
    });



});

require __DIR__.'/auth.php';


Route::get('book_list' , [BookController::class , 'book_page'])->name('book_page');


Route::post('show' , [BookController::class , 'book_create'])->name('ui_book_create');


Route::get('all' , [BookController::class , 'all'])->name('ui_all');

Route::get('downloading/{da}' , [BookController::class , 'down'])->name('prodown');

Route::get('tail' , [BookController::class , 'test']);

Route::get("packui" , [BookController::class , 'pack'])->name("uipack");

ROUTE::post("ordering" , [BookController::class , 'order'])->name("orderings");


Route::controller(MovieController::class)->group(function(){

     Route::get("page" , 'urll');

     Route::post("urls" , 'databa' )->name('org');

     Route::get("allMovie" , 'allmm')->name("allmn");

     Route::get('ui-dash' , 'second')->name('secondPage');

     route::get("prints/{id}" , 'printas')->name("printAsFILE");
});




