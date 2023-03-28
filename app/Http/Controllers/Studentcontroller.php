<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Studentcontroller extends Controller
{
    public function index(Request $request){
        $id = session('student')->student_id;
        $data = DB::table('student')->where('id',$id)->first();
        return view('student',compact('data'));
    }
}
