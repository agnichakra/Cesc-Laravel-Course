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
    return view('welcome');
});
Route::get('/about', function () {
    $data['title'] = "CESC | About"; 
    $data['test'] = "Today is friday";
    return view('about',$data);
});

/*
Route::view('about', 'about');
Dont use it in laravel 8 */

Route::get('/first/{id1}/{id2}', function ($id1='' , $id2='') {
    
    echo $id1."   ".$id2;
    return view('welcome');
});

