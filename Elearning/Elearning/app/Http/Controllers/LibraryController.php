<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
    public function show(){
        return view('library.library_store');
    }
    public function list_documents(){
        if (Auth::user()->role== "lecture"){
            $current_email = auth()->user()->email;
            $lecture_name = DB::table('lectures')->where('email','LIKE',$current_email)->get()->first();
            $name = $lecture_name->first_name." ".$lecture_name->last_name;
            $list_documents = DB::table('libraries')
                ->join('lectures', 'libraries.lecture_email', '=', 'lectures.email')
                ->get(['subject_name','title','author', 'grade'])->all();
            return view('library.list_documents',['list_documents'=>$list_documents,'lecture_name'=>$name]);
        }
        else{
            return redirect()->with('error','error')->route('login');
        }
    }
    public function upload_documents(){
        if (Auth::user()->role== "lecture"){
            return view('library.upload_documents');
        }
        else{
            return redirect()->with('error','error')->route('login');
        }
    }
    public function check_upload_documents(Request $request){
        $request->validate([
            'subject_name'=>'required|string',
            'grade'=>'required|numeric',
            'title'=>'required|string',
            'contents'=>'required',
            'author'=>'required|string',
            'slug'=>'required'
        ]);
    }
    public function post_upload_documents(Request $request){
        $this->check_upload_documents($request);
        $content = $request->contents;
        $file_name = time().'.'.$content->getClientOriginaleXtension();
        $request->contents->move('assets',$file_name);

        Library::create([
            'lecture_email'=>auth()->user()->email,
            'subject_name'=>$request->subject_name,
            'grade'=>$request->grade,
            'title'=>$request->title,
            'content'=>$file_name,
            'author'=>$request->author,
            'slug'=>$request->slug,
        ]);
        return redirect()->back()->with('success','Tải lên thành công!');
    }
    public function update_documents(){
        if (Auth::user()->role== "lecture"){
            return view('library.update_documents');
        }
        else{
            return redirect()->with('error','error')->route('login');
        }
    }
    public function check_update_documents(Request $request){
        $request->validate([
            'subject_name'=>'required|string',
            'grade'=>'required|numeric',
            'title'=>'required|string',
            'contents'=>'required',
            'author'=>'required|string',
            'slug'=>'required'
        ]);
    }
    public function post_update_documents(Request $request){
        $this->check_update_documents($request);
        $content = $request->contents;
        $file_name = time().'.'.$content->getClientOriginaleXtension();

        $request->contents->move('assets',$file_name);
        Library::update([
            'subject_name'=>$request->subject_name,
            'grade'=>$request->grade,
            'title'=>$request->title,
            'content'=>$file_name,
            'author'=>$request->author,
            'slug'=>$request->slug,
        ]);
        return redirect()->back()->with('success','Cập nhật thành công!');
    }
    public function find_documents(Request $request){
        $search = $request->input('query');
        $current_email = auth()->user()->email;
        $lecture_name = DB::table('lectures')->where('email','LIKE',$current_email)->get()->first();
        $name = $lecture_name->first_name." ".$lecture_name->last_name;
        $search_documents = DB::table('libraries')
            ->where('subject_name','LIKE',$search)->get()->first();
        if($search_documents != NULL){
            return view('library.update_documents',['result'=>$search_documents, 'name'=>$name]);
        }
        else
            return redirect()->back()->with('error','Không tìm thấy!');
    }
    public function views($slug){
        $data = Library::find($slug);
        return view('library.library_views',compact('data'));
    }
    public function view_grade_12(){
        return view('library.grade.grade_12');
    }
    public function view_grade_11(){
        return view('library.grade.grade_11');
    }
    public function view_grade_10(){
        return view('library.grade.grade_10');
    }
    public function view_grade_9(){
        return view('library.grade.grade_9');
    }
    public function view_grade_8(){
        return view('library.grade.grade_8');
    }
    public function view_grade_7(){
        return view('library.grade.grade_7');
    }
    public function view_grade_6(){
        return view('library.grade.grade_6');
    }
    public function view_grade_5(){
        return view('library.grade.grade_5');
    }
    public function view_grade_4(){
        return view('library.grade.grade_4');
    }
    public function view_grade_3(){
        return view('library.grade.grade_3');
    }
    public function view_grade_2(){
        return view('library.grade.grade_2');
    }
    public function view_grade_1(){
        return view('library.grade.grade_1');
    }
}
