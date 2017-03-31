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

//use App\Task;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/delete', 'PostsController@destroy');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::post('/posts/{post}/edit', 'PostsController@update');

Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::post('/comments/{comments}/delete', 'CommentsController@destroy');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');


Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');  //turvallisempi jos post

Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);

//Route::get('/tasks', 'TasksController@index');
//Route::get('/tasks/{task}', 'TasksController@show');

//Route::get('/', function () {
//   $tasks = DB::table('tasks')->get();
//   return view('welcome', compact('tasks'));   //return @tasks


   //$name = 'hskdfj';
   //$age = 31;
   //return view('welcome', compact('name', 'age'));

   // return view('welcome', [      //->with('name', 'World');
   // 	'name' => 'World!'
   // ]);
//});

//Route::get('/tasks', function () {
	//dd($id);
   //$tasks = DB::table('tasks')->latest()->get();
  //TasksController 
//});



//Route::get('/tasks/{task}', function ($id) {

//});


//Route::get('/about', function () {
//    return view('about');
//});
//Auth::routes();

//Route::get('/home', 'HomeController@index');
