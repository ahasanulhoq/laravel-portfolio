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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('contact/us','user\UserController@contact')->name('contact');
Route::get('about page','user\UserController@about')->name('about');

Route::get('write/post','user\UserController@writePost')->name('write.post');
Route::get('add/catagory','user\UserController@AddCategory')->name('add.category');
Route::get('all/catagory','user\UserController@AllCategory')->name('all.category');
Route::post('store/catagory','user\UserController@StoreCategory')->name('store.category');

Route::get('view/x/{id}','user\UserController@ViewCategory');
Route::get('delete/x/{id}','user\UserController@DeleteCategory');



// Route::get('/contact', 'user\UserController@cont')-> name ('contact');
// Route::get(md5('/blogdfgfggfgf'), 'user\UserController@blo')-> name('blog');

// Route::get('/contact', function(){
//       return view ('pages.contact');
// })->middleware('new');
