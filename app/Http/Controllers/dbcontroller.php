<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbcontroller extends Controller
{

    function registeruser(Request $req)
 {
    $req->validate([
        'name'=>'required|regex:/^[a-zA-Z ]+$/',
        'email'=>'required|regex:/^[a-z]{2,}[.]?[0-9]*@[a-z]+[.][a-z]{2,3}(.[a-z]{2})?$/',
        'password'=>'required|regex:/^(?=.*[0-9])(?=.*[A-Z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]*$/',
        'cpassword'=>'required|same:password',
    ]);
    
    
    $data = array(
        'name'=>$req->name,
        'email'=>$req->email,
        'password'=>$req->password,
        );
        DB::table('signup')->insert($data);
        
        return redirect('login');    
 }






  function loginuser(Request $request)
  {
    $users = DB::table('signup')->get();
    $flag=0;
        foreach ($users as $user) {
                $name=$user->name;
                $password=$user->password;

        if(($name==$request->input('name'))&&($password==$request->input('password')))
        {          
            $request->session()->put('user',$request->input('name'));
   
            if($request->session()->has('user'))
            {
                return redirect('dashboard');
            }
            
            $flag=1;
            break;
         }  
        else
        { 

        $flag=2;
        }  
    }

    if($flag==2)
    {
        echo "<script>
        alert('Invalid Username and Password');
        window.location='login';
     </script>";
    }
}


}

