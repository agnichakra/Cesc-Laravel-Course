<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

/* Use the model namespace */
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

//print_r($request->post());
$data = array(

'firstName' => $request->name,
'email' => $request->post('email'),
'employeeNumber' =>$request->age


);

$cust->insert($data);

return back()->with('success', 'User created successfully.');
//return redirect()->route('wes');

}


function showabout (){
    return view('about');

}

/* start of query building */

function showCustomerdata(Customer $cust){
  $data['title'] = "CESC | Customer data";
$data['customer'] = $cust->get_data();

return view('customerdata' , $data);

}

/* end of query building */
function elo_get(){

//return Customer::ALL();
//return Customer::where('orderNumber', '=', 10100)->get();
  Customer::where('orderNumber', '=', 10100)->update(['status' => 'efghtnnnn']);
//  return Customer::where('orderNumber', '=', 10100)->get();
return Customer::where('orderNumber', '=', 10100)->get();
}


function web_service(){
/*
$response->body() : string;
$response->json() : array|mixed;
$response->status() : int;
$response->ok() : bool;
$response->successful() : bool;
$response->failed() : bool;
$response->serverError() : bool;
$response->clientError() : bool;
$response->header($header) : string;
$response->headers() : array;
*/
  $response = Http::get('http://api.plos.org/search?q=title:DNA');
  $data['books'] =  $response;
  $data['title'] =  'Webservice';
 return view('webservice',$data);
}




}
