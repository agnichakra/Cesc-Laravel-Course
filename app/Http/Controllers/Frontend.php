<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Frontend extends Controller
{
    //

function getFormdata(Request $request) {

 $request->validate([
   'name' => 'required',
   'age'  => 'required|min:18'



 ]);   


 echo $request->name.'<br/>';
echo $request->post('age');



// $result = DB::statement("select * from customers");

// echo $result;

}


function showabout (){
    return view('about');

}


}
