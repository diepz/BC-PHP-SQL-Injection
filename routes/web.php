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

Route::get('/', function (\Illuminate\Http\Request $request) {
    if (!empty($request->value)) {
        $customers = DB::table('customer')->where('id', $request->value)->get();
    }
    dump('SELECT * FROM customer WHERE id = ' . $request->value);
    dd($customers);
    return view('welcome');
});