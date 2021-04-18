<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postcontroller extends Controller
{
    function dashboard()
    {
        if(!session()->has('user'))
        {
            return redirect('login');
        }
        $count=DB::table('posts')->where('name',session('user'))->count();
        
        return view('dashboard',compact('count'));
    }


    function addpost(Request $req)
    {
        $req->validate([
            'title'=>'required|regex:/^[a-zA-Z0-9 ]+$/',
            'body'=>'required',
        ]);
        DB::table('posts')->insert([
            'title'=>$req->title,
            'body'=>$req->body,
            'name'=>session('user'),
        ]);
        echo "<script>
        alert('Post Added Successfully');
        window.location='/vposts';
        </script>";
    }

    function allposts()
    {   $posts=DB::table('posts')->get()->where('name',session('user'));
          
       return view('vposts',compact('posts'));
          
        
        
    }
     
    function viewposts($id)
    {
        $posts=DB::table('posts')->get()->where('id',$id);

        return view('viewposts',compact('posts'));
    }


    public function editpost($id)
    {
        $posts = DB::table('posts')->where('id',$id)->first();
        return view('editpost', compact('posts'));
    }

    public function updatepost(Request $req)
    {
        $req->validate([
            'title'=>'required|regex:/^[a-zA-Z0-9 ]+$/',
            'body'=>'required',
        ]);

        DB::table('posts')->where('id',$req->id)->update([
            'title'=>$req->title,
            'body'=>$req->body,
        ]);
        echo "<script>alert('Post Updated Successfully.');</script>";
    return redirect('/vposts');

        
    
    }

    public function deletepost($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return redirect('/vposts');
    }
}
