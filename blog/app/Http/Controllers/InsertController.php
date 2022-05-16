<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{
    function onInsert(){
        
    $result= DB::table('students')->insert(['name'=>'Rafi','class'=>'One','roll'=>'1200','city'=>'Feni']);
    
    if($result==true){
    
        return "Insert Success";
    
    }else{
    
        return "Insert Failed";
    }
    
    }
    
    function insertRows(){
        
        $result= DB::table('students')->insertOrIgnore(
        
        [
            ['id'=>'4','name'=>'nancy','class'=>'two','roll'=>'1','city'=>'Dhaka'],
            ['id'=>'5','name'=>'mukta','class'=>'three','roll'=>'2','city'=>'Dhaka'],
            ['id'=>'6','name'=>'rikta','class'=>'four','roll'=>'3','city'=>'Dhaka'],
        ]
        
        );
        
        if($result==true){
        
            return "Insert Success";
        
        }else{
        
            return "Insert Failed";
        }
        
        }
}
