<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;
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
    return redirect('/dashboard');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource("/categories", CategoryController::class)->middleware('auth');

Route::get('/tasks',[TaskController::class, 'index'])->middleware('auth');
Route::get('/tasks/create',[TaskController::class, 'create'])->middleware('auth');
Route::post('/tasks',[TaskController::class, 'store'])->middleware('auth');
Route::get('/tasks/{id}/edit',[TaskController::class, 'edit'])->middleware('auth');
Route::put('/tasks/{id}',[TaskController::class, 'update'])->middleware('auth');
Route::delete('/tasks/{id}',[TaskController::class, 'destroy'])->middleware('auth');

require __DIR__.'/auth.php';
