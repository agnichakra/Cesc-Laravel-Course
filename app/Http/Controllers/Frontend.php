<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend extends Controller
{
    //

function getFormdata(Request $request) {

 //$request->validate([]);   
echo $request->name.'<br/>';
echo $request->post('age');

print_r($request->post());

}


function showabout (){
    return view('about');

}


}
