<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LectureController extends Controller
{
    public function list_course(){
        if (Auth::user()->role== "lecture"){
            $current_email = auth()->user()->email;
            $lecture_name = DB::table('lectures')->where('email','LIKE',$current_email)->get()->first();
            $name = $lecture_name->first_name." ".$lecture_name->last_name;
            $list_course = DB::table('courses')
                ->join('lectures', 'courses.lecture_email', '=', 'lectures.email')
                ->get(['course_id','course_name','subject_id'])->all();
            return view('lecture.list_course',['list_course'=>$list_course,'lecture_name'=>$name]);
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
        $video = $request->video;
        $video_name = time().'.'.$video->getClientOriginaleXtension();
        $image = $request->des_image;
        $image_name = time().'.'.$image->getClientOriginaleXtension();
        Course::create([
            'lecture_email'=>$request->lecture_email,
            'course_id'=>$request->course_id,
            'course_name'=>$request->course_name,
            'subject_id'=>$request->subject_id,
            'grade'=>$request->grade,
            'video'=>$video_name,
            'test'=>$request->test,
            'description'=>$request->description,
            'requirements'=>$request->requirements,
            'outcomes'=>$request->outcomes,
            'des_image'=>$image_name,
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
            'slug'=>'required'
        ]);
    }
    public function post_update_course(Request $request){
        $this->check_update_course($request);
        $video = $request->video;
        $video_name = time().'.'.$video->getClientOriginaleXtension();
        $image = $request->des_image;
        $image_name = time().'.'.$image->getClientOriginaleXtension();
        Course::update([
            'course_name'=>$request->course_name,
            'grade'=>$request->grade,
            'video'=>$video_name,
            'test'=>$request->test,
            'description'=>$request->description,
            'requirements'=>$request->requirements,
            'outcomes'=>$request->outcomes,
            'des_image'=>$image_name,
            'slug'=>$request->slug,
        ]);
        return redirect()->back()->with('success','Cập nhật thành công!');
    }
    public function find_course(Request $request){
        $search = $request->input('query');
        $current_email = auth()->user()->email;
        $lecture_name = DB::table('lectures')->where('email','LIKE',$current_email)->get()->first();
        $name = $lecture_name->first_name." ".$lecture_name->last_name;
        $search_course_id = DB::table('courses')
            ->where('course_id','LIKE',$search)->get()->first();
        if($search_course_id != NULL){
            return view('lecture.update_course',['result'=>$search_course_id, 'name'=>$name]);
        }
        else
            return redirect()->back()->with('error','Không tìm thấy!');
    }
}
