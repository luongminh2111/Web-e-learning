@extends('main')
@section('update-course')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php use Illuminate\Support\Facades ?>
    <div class="container" style="margin: 5% 0">
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <p class="list-group-item list-group-item-action bg-success text-white ">Quản lí khóa học</p>
                    <a href="{{route('list_course')}}" class="list-group-item list-group-item-action  ">Danh sách khóa học</a>
                    <a href="{{route('update_course')}}" class="list-group-item list-group-item-action active">Cập nhật khóa học</a>
                    <a href="{{route('upload_course')}}" class="list-group-item list-group-item-action ">Thêm mới</a>

                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Tải lên khóa học</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{route('post_update_course')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{session('success')}}
                                        </div>
                                    @endif
                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{session('error')}}
                                        </div>
                                    @endif
                                    <?php $key = ""?>
                                    <div class="form-group row">
                                        <label for="course_id" class="col-4 col-form-label">Mã khóa học</label>
                                        <div class="col-8">
{{--                                            <select name="degree"  class="custom-select">--}}
{{--                                                <option value=""></option>--}}
{{--                                                <?php $temp = Facades\DB::table('courses'); ?>--}}
{{--                                                @foreach(\App\Models\Course::all() as $id)--}}
{{--                                                    <option value="<?php echo $id->value('course_id');?>"></option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
                                            <span style="color: red">@error('degree'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="course_name" class="col-4 col-form-label">Tên khóa học</label>
                                        <div class="col-8">
                                            <input name="course_name" placeholder="tên khóa học" class="form-control here" value="<?php $data = DB::table('courses')->where('course_id',$key)->value('course_name'); echo $data;?>" type="text">
                                            <span style="color: red">@error('course_name'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="subject_id" class="col-4 col-form-label">Mã môn học </label>
                                        <div class="col-8">
                                            <input  name="subject_id" placeholder="mã môn học" class="form-control here" value="<?php $data = DB::table('courses')->where('course_id',$key)->value('subject_id'); echo $data;?>" type="text">
                                            <span style="color: red">@error('subject_id'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="description" class="col-4 col-form-label">Mô tả khóa học </label>
                                        <div class="col-8">
                                            <input  name="description" placeholder="Mô tả" class="form-control here" value="<?php $data = DB::table('courses')->where('course_id',$key)->value('description'); echo $data;?>" type="text" >
                                            <span style="color: red">@error('description'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="requirements" class="col-4 col-form-label">Yêu cầu của môn học</label>
                                        <div class="col-8">
                                            <input  name="requirements" placeholder="Yêu cầu đối với môn học" class="form-control here" value="<?php $data = DB::table('courses')->where('course_id',$key)->value('requirements'); echo $data;?>" type="text">
                                            <span style="color: red">@error('requirements'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="outcomes" class="col-4 col-form-label">Kết quả đạt được</label>
                                        <div class="col-8">
                                            <input  name="outcomes" placeholder="Kết quả đạt được sau môn học" class="form-control here" value="<?php $data = DB::table('courses')->where('course_id',$key)->value('outcomes'); echo $data;?>" type="text">
                                            <span style="color: red">@error('outcomes'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="slug" class="col-4 col-form-label">Liên kết</label>
                                        <div class="col-8">
                                            <input  name="slug" placeholder="link môn học" class="form-control here" value="<?php $data = DB::table('courses')->where('course_id',$key)->value('slug'); echo $data;?>" type="text">
                                            <span style="color: red">@error('slug'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="custom-file ">
                                            <label for="des_image" class="col-4 col-form-label">Chọn ảnh mô tả</label>
                                            <input type="file" name="des_image">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="custom-file ">
                                            <label for="video" class="col-4 col-form-label">Chọn video</label>
                                            <input type="file" name="video" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="slug" class="col-4 col-form-label">Bài kiểm tra</label>
                                        <div class="col-8">
                                            <input  name="test" placeholder="link bài kiểm tra" class="form-control here" value="<?php $data = DB::table('courses')->where('course_id',$key)->value('test'); echo $data;?>" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8" style="margin-top:1% ">
                                            <button name="submit" type="submit" class="btn btn-primary">Tải lên</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
