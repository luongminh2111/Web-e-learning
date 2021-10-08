<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function show()
    {
        return view("auth.register");
    }

    public function rule(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'id' => 'required|size:8|numeric',
                'email' => 'required|email',
                'phone' => 'required|size:10|numeric',
                'name' => 'required|min:1|max:30|alpha',
                'password' => 'required|confirmed|min:6|'
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
        }
    }
}


