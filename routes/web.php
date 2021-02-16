<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','dashboard');


Route::resource('LaravelCrud', LaravelCrudController::class);

Route::get('/deleted_users','LaravelCrudController@deleted_user_view')->name('deleteduser');

Route::get('deleted_users/restoreuser/{id}', 
        'LaravelCrudController@restoreDeletedUser')
        ->name('restoreDeletedUser');

Route::get('deleted_users/deleteduser/{id}', 
        'LaravelCrudController@permanantDeletedUser')
        ->name('DeltedUser.destroy');

        
Route::get('/LaravelCrud_demo/{id}','PostController@index');

Route::post('/AddPost','PostController@AddPost')->name('AddPost');

