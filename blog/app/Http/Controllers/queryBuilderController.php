<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class queryBuilderController extends Controller
{

//Query Builder Retrieve Data

   function showAllRows(){
   
       $result= DB::table('students')->get();
       return json_encode($result);
   }
   
   function showOneRows(){
    $result= DB::table('students')->where('name','=','jesmin')->first();
    return json_encode($result);
    } 
       
   function selectOneCol(){
    $result= DB::table('students')->pluck('name');
    return json_encode($result);
    }
    
    function selectmultiCol(){
        $result= DB::table('students')->pluck('name','city');
        return json_encode($result);
    }
        
    function specificData(){
        $result= DB::table('students')->where('id', '=', '1')->value('name');
        return json_encode($result);
    }
    
//	Query Builder Selects

    function selectUnique(){
    
        $result= DB::table('students')->distinct()->get();
        return $result;
    
    }
    function singleselectColumn(){
    
        $result= DB::table('students')->select('name')->get();
        return $result;
    
    }
    function multiselectColumn(){
    
        $result= DB::table('students')->select('name','roll')->get();
        return $result;
    
    }
}
