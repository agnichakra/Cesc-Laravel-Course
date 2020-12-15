<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
/* ^^^ important, please include it  */
class Customer extends Model
{
 
 
    //
function get_data(){
return DB::table('customers')->avg('');
}



function insert($data){
    return DB::table('employees')->insert($data);
    }


function delete_data($id) {
    return DB::table('employees')->where('employeeNumber', $id)->delete();

}


}
