<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mycontroller extends Controller
{
    public function signup(){

       return view("signup");

    }
    public function process(request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $mobile = $request->input('mobile');

       // echo $name.','.$email.','.$password.','.$mobile;

        Session::put("name", $name);
        Session::put("email", $email);
        Session::put("password", $password);
        Session::put("mobile", $mobile);

        echo "Signup successfully. ";
    }

    public function signin(){

        return view("signin");

    }
    public function login(request $request){

        $email = $request->input("email");
        $password = $request->input("password");

        if(Session::has("email")){

            $semail = Session::get("email", $email);
            $spwd =  Session::get("password", $password);

            if($email == $semail && $password == $spwd){

                $k = Session::get("name");
                return view('home',["sessionmsg" => $k]);

            }else{
                echo "invalid email and password";
            }
        }else{
            return redirect('/signin');
        }
    }
    public function home(request $request){


            if(Session::has("email")){

                $k = Session::get("name");
                return view('home',["sessionmsg" => $k]);

            }else{
                return redirect("/signin");
            }
    }
    public function destroySession(){

        Session::flush();
        return redirect('/signin');

    }
    public function changepasswordform(){

        return view("changepassword");

    }
    public function changepassword(request $request){

        $old =  $request->input('oldpassword');
        $new = $request->input('newpassword');
        $confirm = $request->input('cpassword');

        //echo $old.','.$new.','.$confirm;
        Session::put("password", $old);
        //Session::put('cpassword');
        $sold =  Session::get("password",$old);
        // echo $sold;
        if($old == $sold){

            if($new == $confirm){

                Session::put('newpassword',$new);
                $snew = Session::get('newpassword',$new);
                 echo "Password Changed Successfully";
            }else{
                echo "password not match";
            }

        }
    }
    public function forgotpasswordform(){

        return view("forgotpassword");

    }
    public function forgotpassword(request $request){

        $email = $request->input("email");
        $semail = Session::get("email", $email);
       
        if($email == $semail){

            $pwd = Session::get("newpassword");
            echo "Your Password is ".$pwd;
        }else{
			echo "Email doesn't Match";
		}
    }
}
