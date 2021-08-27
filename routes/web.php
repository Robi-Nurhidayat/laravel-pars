<?php

use App\Http\Controllers\PricingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
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
    return view('home');
});

// Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
// Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store');
// Route::get('/tasks/edit/{task}', [TaskController::class, 'edit'])->name('tasks.edit');
// Route::put('/tasks/update/', [TaskController::class, 'update'])->name('tasks.update');
// Route::get('/tasks/delete/{task}', [TaskController::class, 'destroy'])->name('tasks.delete');


Route::resource('tasks', TaskController::class);

// pricing route

Route::resource('pricing', PricingController::class);

Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register');
