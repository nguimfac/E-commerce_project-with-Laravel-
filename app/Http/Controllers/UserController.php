<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
      function login(Request $req)
      {
          $user= User::where(['email'=>$req->email])->first();

            if((Auth::check) && ($req->email=="admin@gmail.com") && ($req->password=="admin"))
            {
                 return redirect('newProduct');
            }

            if(!$user || !Hash::check($req->password,$user->password)){
                   return "Username Or Password is not Macthed";
            }
            else{
                $req->session()->put('user',$user);
                return redirect('/');
            }
      }

      function addUser(Request $req)
      {
           $user = new User();
           $user->name=$req->name;
           $user->email =$req->email;
           $user->password=Hash::make($req->password);
           $user->save();
           return redirect('login');

      }
}
