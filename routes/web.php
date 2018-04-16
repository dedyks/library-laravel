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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
  $data = [
    'name' => 'Dedy',
    'age' => '21',

  ];
    return view('about',$data);

});

Route::get('/tasks', function () {
    $tasks = DB::table('tasks')->get();
    return $tasks;
});

Route::get('/angkatan', function () {
    $tasks = DB::table('angkatan')->get();
    return $tasks;
});

Route::get('/view', function () {
   $viewDatabase = DB::table('library')->get();
   $data = json_decode($viewDatabase);
   $varName = 'dedy';
   return view('view', compact('varName', 'viewDatabase', 'data'));
});
Route::get('/json', function () {
    $tasks = DB::table('library')->get();
  //  $json = json_decode($tasks);
   // dd($tasks);
    return $tasks;
});

use App\Task;

Route::get('/hehe','TaskController@index');

Route::get('/tasks','TaskController@index');

Route::get('/tasks/{id}','TaskController@show');

Route::post('/', 'LibraryController@store');
