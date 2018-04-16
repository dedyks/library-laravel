<?php

use Illuminate\Http\Request;
use App\Library;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('library', function(){
  return Library::all();
});

Route::get('library/{isbn}', function($isbn){
  return Library::find($isbn);
});


//Route::post('library', 'LibraryController@store');

Route::post('library', function(Request $request){
$library= Library::create($request->all());
return response()->json($library,201);
});

Route::put('library/{isbn}', function(Request $request, $isbn){
  $library = Library::findOrFail($isbn);
  $library->update($request->all());
  return $library;
});

Route::delete('library/{isbn}', function($isbn)
{
  Library::find($isbn)->delete();

  return 204;
});
