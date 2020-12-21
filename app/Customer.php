<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/* ^^^ important, please include it  */
class Customer extends Model
{
 
protected $table= 'orders';
 
//  protected $primaryKey = 'orderNumber';
public $timestamps = false;
    //


 /* All three functions are for query building method */   
function get_data(){
return DB::table('customers')->avg('');
}



function insert($data){
    return DB::table('employees')->insert($data);
    }


function delete_data($id) {
    return DB::table('employees')->where('employeeNumber', $id)->delete();

}

 /* All three functions are for query building method */ 


}
