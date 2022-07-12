<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('create-show',[CrudController::class,'showCreate']);// this is show create page

Route::post('show-read',[CrudController::class,'crudInsert']);

// show all read data 
Route::get ('show-read',[CrudController::class,'showRead'])->name('crud.read');

Route::get('edit-page/{id}',[CrudController::class,'editPage']);

Route::get('delete-page/{id}',[CrudController::class,'delete'])->name('deleting');

// Route::get('/delete-page',[CrudController::class,'deletePage']);    

Route::post('update-post',[CrudController::class,'updatePage'])->name('update.post');