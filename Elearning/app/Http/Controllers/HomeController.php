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
            'email' => 'required|email',
            'phone' => 'required|numeric|min:10',
            'name' => 'required|string|min:1|max:30',
            'password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password'=>'required|min:6',
            'role'=>'required'
        ]);
        return $request->input();
    }
    public function post_register(Request $request)
    {
        $value = "";
        $this->check_validate($request);
        if($request['role']==1){
            $value = "student";
        }
        else{
            $value ="lecture";
        }
        User::create([
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'name'=>$request['name'],
            'password'=>bcrypt($request['password']),
            'role'=>$value,
        ]);
        return redirect()->route('login');
    }
    public function login(){
        return view('auth.login');
    }
    public function postAuthLogin(Request $request){
        $arr = [
            'name' =>$request['name'],
            'password' => $request['password']
        ];
        if(Auth::attempt($arr)){
            $data = $request->input();
            $request->session()->put('name',$data['name']);
            if($request->session()->has('name')){
                return redirect()->route('home');
            }
            return redirect()->route('home');
        }
        else{
            return redirect()->back()->with('message','Đăng nhập thất bại !');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
