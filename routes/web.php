<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\UserController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');


Route::prefix("user")->group(function(){

	Route::get('logout', [AdminController::class, 'logout'])->name('user.logout');

	Route::get('list', [UserController::class, 'userView'])->name('user_list');

	Route::get('create', [UserController::class, 'userCreate'])->name('create_user');

	Route::post('store', [UserController::class, 'userStore'])->name('store_user');
	Route::get('edit/{id}', [UserController::class, 'userEdit'])->name('user_edit');
	Route::post('update/{id}', [UserController::class, 'userUpdate'])->name('update_user');
	Route::get('delete/{id}', [UserController::class, 'userDelete'])->name('user_delete');

});
