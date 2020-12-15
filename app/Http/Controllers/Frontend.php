<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Customer;
class Frontend extends Controller
{


function getFormdata(Request $request, Customer $cust) {

 $request->validate([
  'name' => 'required',
  'age'  => 'required|numeric|min:18',
  'email'  => 'required|email'
   

], [
 'name.required' => 'Your name is required',
 'age.min' => 'You are not adult'
]);   

$data = array(

'firstName' => $request->name,
'email' => $request->post('email'),
'employeeNumber' =>$request->age


);

$cust->insert($data);

return back()->with('success', 'User created successfully.');

}


function showabout (){
    return view('about');

}

function showCustomerdata(Customer $cust){
  $data['title'] = "CESC | Customer data";
$data['customer'] = $cust->get_data();

return view('customerdata' , $data);

}



}
