<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Dashboardcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $result = DB::table('student')->get();
        $count = count($result);
        return view('admin.dashboard',compact('count'));
    }

    public function student_list(Request $request)
    {
        $data = DB::table('student')->get();
        return view('admin.student',compact('data'));
    }

     public function edit($id)
    {
        $data = DB::table('student')->where('id',$id)->first();
        return view('admin.edit_student',compact('data'));
    }

    public function update(Request $request)
    {
        
        if($request->hasFile('photo'))
        {
            $fileNameExt = $request->file('photo')->getClientOriginalName();
            $fileName = pathinfo($fileNameExt, PATHINFO_FILENAME);
            $fileExt = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore = time().'.'.$fileExt;
            $pathToStore = $request->file('photo')->storeAs('public/image',$fileNameToStore);
            $data['photo'] = $fileNameToStore;
        }
        $data['name'] = $request->name;
        $data['dob'] = $request->dob;
        $data['address'] = $request->address;
        $data['email'] = $request->email;  
        $result = DB::table('studnet')->where('id',$request->id)->update($data);
        return redirect()->route('student');
    }

    public function delete($id)
    {
        $result = DB::table('student')->where('id',$student->id)->delete();
        return redirect()->route('student');
    }
}
