<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class updateController extends Controller
{
    function onUpdate(){
    
        $result= DB::table('students')
        ->where('name', '=', 'rikta')
        ->update(['name'=>'Rikta New','class'=>'Eight','roll'=>'7']);
        
        if($result==true){
    
            return "Update Success";
        
        }else{
        
            return "Update Failed";
        }
    }
}
