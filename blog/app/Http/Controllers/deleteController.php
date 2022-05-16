<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class deleteController extends Controller
{
    function onDelete(){
    
        // $result= DB::table('students')->where('name', '=', 'mukta')->delete();
        
        // $result= DB::table('students')->delete();
        
       $result= DB::table('students')->truncate();
        
        if($result==true){
    
            return "Delete Success";
        
        }else{
        
            return "Delete Failed";
        }
    }
}
