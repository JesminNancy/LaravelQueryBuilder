<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MergeController extends Controller
{
    function mergeData(){
    
       $student= DB::table('students')->get();
       $examMarks= DB::table('exam_marks')->get();
       
       $totalData= $student->merge($examMarks);
       return  $totalData;
    }
}
