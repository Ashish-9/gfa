<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
});

Route::match(['get', 'post'], '/registration', [RegistrationController::class, 'store'])->name('registeration');

// Route::get('/register',function(){
//     return view('register-index');
// })->name('register');
Route::get('/home', [HomeController::class,'index'])->name('admin.dashboard');
Route::match(['get', 'post'], '/admin/login', [HomeController::class, 'login'])->name('admin.login');
Route::get('/admin/print', [HomeController::class, 'printAll'])->name('admin.print');

Auth::routes(['/register' => false]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
