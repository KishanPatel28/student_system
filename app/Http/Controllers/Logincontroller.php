<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class Logincontroller extends Controller
{
    public function index(Request $request){
        return view('login');
    }

    public function login_action(Request $request){
        $user = $request->email;
        $pass = $request->pass;
        $result = DB::table('users')->where('email',$user)->where('is_admin','1')->first();

        if ($result!= ''){

            if(!Hash::check($pass,$result->password))
            {
                return redirect()->route('login')->with('message','Username or password Invalid');
            }else{
                session()->put('admin',$result);
                return redirect()->route('dashboard');
            }
        }else{
            $result = DB::table('users')->where('email',$user)->where('email_verified_at','1')->first();

            if ($result!= ''){

                if(!Hash::check($pass,$result->password))
                {
                    return redirect()->route('login')->with('message','Username or password Invalid');
                }else{
                    session()->put('student',$result);
                    return redirect()->route('student');
                }
            }else{
                alert("Admin will verify your detail soon");
                return redirect()->route('login');
            }
                session()->flash('message','Invalid Id  Or Password');
                return redirect()->route('login');
        }  
    }

    public function register(Request $request){
        return view('register');
    }

    public function login_student(Request $request){
        print_r($request->hasFile('file'));die();
        if($request->hasFile('file'))
        {
            $fileNameExt = $request->hasFile('file')->getClientOriginalName();
            $fileName = pathinfo($fileNameExt, PATHINFO_FILENAME);
            $fileExt = $request->hasFile('file')->getClientOriginalExtension();
            $fileNameToStore = time().'.'.$fileExt;
            $pathToStore = $request->hasFile('file')->storeAs('public/image',$fileNameToStore);
            $array['photo'] = $fileNameToStore;
        }
        $pass = Hash::make($request->password);
        $array['name'] = $request->name;
        $array['dob'] = $request->dob;
        $array['address'] = $request->address;
        $array['email'] = $request->email;
        $array['password'] = $pass;

        $result = DB::table('student')->insert($array);

        $array2['name'] = $request->name;
        $array2['email'] = $request->email;
        $array2['password'] = $pass;

        $result2 = DB::table('users')->insert($array2);
        return redirect()->route('login');

    }

    public function logout(Request $request){
        session()->pull('admin');
        return redirect()->route('login');

    }
}

