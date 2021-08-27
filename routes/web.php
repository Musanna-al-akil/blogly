<?php

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

Auth::routes();
Route::get('/', 'PageController@index')->name('home');

Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact/new', 'PageController@contactSubmit')->name('contactSubmit');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/privacy_policy', 'PageController@privacy')->name('privacy');
Route::get('/disclaimer', 'PageController@disclaimer')->name('disclaimer');

Route::get('/Tech', 'PageController@tech')->name('tech');
Route::get('/Development','PageController@development')->name('dev');
Route::get('/Game', 'PageController@game')->name('game');
Route::get('/Food', 'PageController@food')->name('food');
Route::get('/All_Post', 'PageController@allPost')->name('allPost');

Route::get('/post/{slug}', 'PageController@singlePost')->name('singlePost');
Route::post('post/new','Pagecontroller@comment')->name('postComment');

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::prefix('user')->group(function(){
    Route::get('dashboard','UserController@dashboard')->name('userDashboard');
    Route::get('comments','UserController@comments')->name('userComments');
    Route::post('comments/{id}/delete','UserController@deleteComments')->name('deleteComments');
    Route::get('setting','UserController@setting')->name('userProfiles');
    Route::post('setting','UserController@settingPost')->name('userProfilePost');
    Route::get('profile','UserController@profiles')->name('userProfile');
    Route::get('apply_for_author','UserController@applyAuthor')->name('applyAuthor');
    Route::post('apply_for','UserController@applyPost')->name('applyPost');
    });

Route::prefix('author')->group(function(){
    Route::get('/dashboard','AuthorController@dashboard')->name('authorDashboard');
    Route::get('/comments','AuthorController@comments')->name('authorComments');
    Route::get('/posts','AuthorController@posts')->name('authorPosts');
    Route::get('/post/{id}/edit','AuthorController@editPosts')->name('editPosts');
    Route::post('/post/{id}/edit','AuthorController@postEditPosts')->name('postEditPosts');
    Route::post('/post/{id}/delete','AuthorController@postDelete')->name('postDelete');
    Route::get('/post/new','AuthorController@newPost')->name('authorNewPost');
    Route::post('/post/new','AuthorController@createPost')->name('createNewPost');
    });

Route::prefix('admin')->group(function(){
    Route::get('/dashboard','AdminController@dashboard')->name('AdminDashboard');
     Route::get('/massage','AdminController@massage')->name('AdminMassage');
    Route::get('/posts','AdminController@posts')->name('AdminPosts');
    Route::get('/post/{id}/edit','AdminController@editPosts')->name('adminEditPosts');
    Route::post('/post/{id}/edit','AdminController@postEditPosts')->name('adminPostEditPosts');
    Route::post('/post/{id}/delete','AdminController@postDelete')->name('adminPostDelete');
    Route::get('/comments','AdminController@comments')->name('AdminComments');
    Route::post('comments/{id}/delete','AdminController@deleteComments')->name('adminDeleteComments');
    Route::get('/user','AdminController@users')->name('AdminUsers');
    Route::get('/user/{id}/edit','AdminController@editUser')->name('adminEditUser');
    Route::post('/user/{id}/edit','AdminController@userEditUser')->name('adminUsertEditUser');
    Route::post('/user/{id}/delete','AdminController@userDelete')->name('adminUSerDelete');
    Route::resource('category','CategoryController',['except'=>['update']]);
    Route::post('/category/update','CategoryController@update')->name('CategoryUpdate');
    Route::resource('tag','TagController',['except'=>['create']]);
    Route::post('/category/{id}/edit','CategoryController@update')->name('categoryEdit');
   
});

?>