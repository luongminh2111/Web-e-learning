<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index(){
        return view('profile.profile');
    }
    public function check_validate(Request $request){
        $request->validate([
            'name' => 'required|string|min:1|max:30',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:10',
            'first_name'=>'required|string|min:1|max:30',
            'last_name'=>'required|string|min:1|max:15',
            'age'=>'required|numeric',
            'level'=>"required"
        ]);
        return $request->input();
    }
    public function update_profile(){
        return view('profile.update_profile');
    }
    public function change_profile(Request $request){
        $this->check_validate($request);
        $current_user = auth()->user();
        $current_user->update([
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'age'=>$request->age,
                'level'=>$request->level
        ]);
        return redirect()->back()->with('success','Cập nhật thành công');
    }
    public function change_password(){
        return view('profile.change_password');
    }
    public function update_password(Request $request){
        $request->validate([
            'old_password' => ['required','min:6'],
            'new_password' => 'required|min:6',
            'confirm_password' => 'min:6|required_with:new_password|same:new_password',
        ]);
        $current_user = auth()->user();
        if (Hash::check($request->old_password,$current_user->password)){
            $current_user->update([
                'password'=>bcrypt($request->new_password)
            ]);
            return redirect()->back()->with('success','Password successfully changed');
        }
        else{
            return redirect()->back()->with('error','old password does not matched.');
        }
    }
}
