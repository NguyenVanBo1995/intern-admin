<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    // get login
    public function getLogin()
    {
        $user = Auth::user();
        if($user){
            redirect('/admin/home');
        }
        return view('user/login');
    }

    public function postLogin(Request $request)
    {
//        $email = $request->get('email');
//        $password = $request->get('password');
        $rules = array(
            'email' => 'required|email',
            'password' => 'required|min:2'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('login')
                ->withErrors($validator)
                ->withInput();
        }

        $userdata = array(
            'email'     => Input::get('email'),
            'password'  => Input::get('password'),
            'role' => 0
        );
//        dd($userdata);
        if(Auth::attempt($userdata)){
            return redirect('/home');
        }
       return redirect('demo');
    }
}
