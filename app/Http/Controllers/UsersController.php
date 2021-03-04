<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    public function login(Request $req){
        $user = User::where(['email'=>$req->email,'password'=>$req->password])->first();

        if(!$user){
            return "Username or password is wrong !";
        }
        else{
            $req ->session()->put('user',$user);
            return redirect('product');
        }
    }
}
