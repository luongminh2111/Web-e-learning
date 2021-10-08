<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function register(){
        return view('auth.register');
    }
    public function check_validate(Request $request){
        $request->validate([
            'id' => ['required','numeric','min:8'],
            'email' => 'required|email',
            'phone' => 'required|numeric|min:10',
            'name' => 'required|string|min:1|max:30',
            'password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password'=>'required|min:6'
        ]);
        return $request->input();
    }
    public function post_register(Request $request)
    {
        $this->check_validate($request);
        User::create([
            'student_id'=>$request['id'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'name'=>$request['name'],
            'password'=>bcrypt($request['password'])
        ]);
        return redirect()->route('login');
    }
    public function login(){
        return view('auth.login');
    }
    public function getAuthLogin(){

    }
    public function postAuthLogin(Request $request){
        $arr = [
            'name' =>$request['name'],
            'password' => $request['password']
        ];
        if(Auth::attempt($arr)){
            return redirect()->route('home');
        }
        else{
            return redirect()->route('login');
        }
    }
}
