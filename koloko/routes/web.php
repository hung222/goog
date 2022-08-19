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
Route::get('/tgh', function ()    {
     return view('tgh', ['name' => 'test']);
});
Route::get('call-view', function () {
   return view('home');
});
Route::get('/', function () {
    DB::table('table_tgh')->where('column', '<>', 'filter')->get();

    print_r($data);
});
$collection = collect([1, 2, 3, 4, 5, 6, 7]);

$chunks = $collection->chunk(4);

$chunks->toArray();
//output [[1, 2, 3, 4], [5, 6, 7]]