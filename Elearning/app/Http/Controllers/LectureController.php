<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LectureController extends Controller
{
    public function list_course(){
        if (Auth::user()->role== "lecture"){
            return view('lecture.list_course');
        }
        else{
            return redirect()->with('error','error')->route('login');
        }

    }
    public function upload_course(){
        if (Auth::user()->role== "lecture"){
            return view('lecture.upload_course');
        }
        else{
            return redirect()->with('error','error')->route('login');
        }
    }
    public function check_upload_course(Request $request){
        $request->validate([
            'course_id'=>'required|string',
            'course_name'=>'required|string',
            'subject_id'=>'required|string',
            'test'=>'required|string',
            'slug'=>'required'
        ]);
    }
    public function post_upload_course(Request $request){
        $this->check_upload_course($request);
        Course::create([
            'course_id'=>$request->course_id,
            'course_name'=>$request->course_name,
            'subject_id'=>$request->subject_id,
            'video'=>$request->video,
            'test'=>$request->test,
            'description'=>$request->description,
            'requirements'=>$request->requirements,
            'outcomes'=>$request->outcomes,
            'des_image'=>$request->des_image,
            'slug'=>$request->slug,
        ]);
        return redirect()->back()->with('success','Tải lên thành công!');
    }
    public function update_course(){
        if (Auth::user()->role== "lecture"){
            return view('lecture.update_course');
        }
        else{
            return redirect()->with('error','error')->route('login');
        }
    }
    public function check_update_course(Request $request){
        $request->validate([
            'course_id'=>'required|string',
            'course_name'=>'required|string',
            'subject_id'=>'required|string',
            'test'=>'required|string',
            'slug'=>'required'
        ]);
    }
    public function post_update_course(Request $request){
        $this->check_update_course($request);
        Course::update([
            'course_id'=>$request->course_id,
            'course_name'=>$request->course_name,
            'subject_id'=>$request->subject_id,
            'video'=>$request->video,
            'test'=>$request->test,
            'description'=>$request->description,
            'requirements'=>$request->requirements,
            'outcomes'=>$request->outcomes,
            'des_image'=>$request->des_image,
            'slug'=>$request->slug,
        ]);
        return redirect()->back()->with('success','Cập nhật thành công!');
    }
}
