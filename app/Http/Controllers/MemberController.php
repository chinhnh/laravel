<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Login;
use App\MemberModel;
class MemberController extends Controller
{

    public function getadduser()
    {
        return view('adduser');
    }

    public function postadduser()

    {
    	$post=new MemberModel;
    	$post->name=\Request::get('name');
    	$post->email=\Request::get('email');
    	$pass=\Request::get('password');
    	$post->password=bcrypt($pass);
    	$post->save();
    	echo "thành công";

        
    }
}
