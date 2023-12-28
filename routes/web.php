<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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
//     return view('welcome');
// });
Route::get("/",[HomeController::class,"index"]);
Route::get("/user",[Admincontroller::class,"user"]);
Route::get("/foodmenu",[Admincontroller::class,"foodmenu"]);
Route::post("/uploadfood",[Admincontroller::class,"upload"]);
Route::get("/deletemenu/{id}",[Admincontroller::class,"deletemenu"]);
Route::get("/deleteuser/{id}",[Admincontroller::class,"deleteuser"]);
Route::get("/updateview/{id}",[Admincontroller::class,"updateview"]);
Route::post("/update/{id}",[Admincontroller::class,"update"]); 
Route::post("/reservation",[Admincontroller::class,"reservation"]);
Route::get("/viewreservation",[Admincontroller::class,"viewreservation"]);
Route::get("/viewchef",[AdminController::class,"viewchef"]);
Route::post("/uploadchef",[Admincontroller::class,"uploadchef"]);



Route::get("/redirects",[HomeController::class,"redirects"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
