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


Route::get('/viewReport', function () {
/*  $query = DB::table('report')->where('status','=','pending')
          ->orderBy('emergencyLevel','desc')
          ->get();*/
  $query = App\report::all();
  return view('supervisorHomePage',compact('query'));
});



Route::get('/viewReport/{query}', function ($id) {
  $query = DB::table('report')->find($id);

  return view('supervisorViewCase.show',compact('query'));
});
