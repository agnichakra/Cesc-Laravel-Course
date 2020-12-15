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
    $data['title'] = "Home  | CESC Course";
    return view('welcome', $data);
});

/* Handling a view through route*/
Route::get('/about', function () {
  $data['title'] = "CESC | About"; 
    $data['test'] = "<h1>Today is friday</h1>";
    return view('about',$data);



});

Route::post('/getfromController', 'Frontend@getFormdata');


/* Handling a view through controller*/
/*
Route::get('/about', 'Frontend@showabout');
*/

/*
Route::view('about', 'about');
Dont use it in laravel 8 */

// Route::get('/first/{id1?}/{id2?}', function ($id1='' , $id2='') {
    
//     echo $id1."   ".$id2;
//     return view('welcome');
// })->where('id1', '[0-9]+');

Route::get('/getallcust', 'Frontend@showCustomerdata');