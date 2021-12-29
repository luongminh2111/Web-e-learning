@extends('main')
@section('upload-course')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
    <div class="container" style="margin-top: 5%; margin-bottom: 5%">
        <div class="home">
            <p style="font-size: 18px; margin-top: 1%; margin-bottom: 3%"><a href="{{route('home')}}"><i class="fas fa-home"></i>Trang chủ</a> > Thêm khóa học</p>
        </div>
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <p class="list-group-item list-group-item-action bg-success text-white ">Quản lí khóa học</p>
                    <a href="{{route('list_course')}}" class="list-group-item list-group-item-action">Danh sách khóa học</a>
                    <a href="{{route('list_lesson')}}" class="list-group-item list-group-item-action ">Danh sách bài giảng</a>
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
                                <form action="{{route('post_upload_course')}}" method="post" enctype="multipart/form-data">
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
                                    <div class="form-group row">
                                        <label for="course_id" class="col-4 col-form-label">Mã khóa học</label>
                                        <div class="col-8">
                                            <input name="course_id"  class="form-control here" type="text">
                                            <span style="color: red">@error('course_id'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="course_name" class="col-4 col-form-label">Tên khóa học</label>
                                        <div class="col-8">
                                            <input name="course_name" class="form-control here" type="text">
                                            <span style="color: red">@error('course_name'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="subject_name" class="col-4 col-form-label">Môn học </label>
                                        <div class="col-8">
                                            <input  name="subject_name"  class="form-control here" type="text">
                                            <span style="color: red">@error('subject_name'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="grade" class="col-4 col-form-label">Khối lớp</label>
                                        <div class="col-8">
                                            <input  name="grade" class="form-control here" type="text">
                                            <span style="color: red">@error('grade'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="description" class="col-4 col-form-label">Mô tả khóa học </label>
                                        <div class="col-8" >
                                            <textarea class="form-control" class="summary-ckeditor" name="description"></textarea>
                                            <span style="color: red">@error('description'){{$message}}@enderror</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="requirements" class="col-4 col-form-label">Yêu cầu của môn học</label>
                                        <div class="col-8" >
                                            <textarea class="form-control" class="summary-ckeditor" name="requirements"></textarea>
                                            <span style="color: red">@error('requirements'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="outcomes" class="col-4 col-form-label">Kết quả đạt được</label>                                        <div class="col-8" >
                                            <textarea class="form-control" class="summary-ckeditor" name="outcomes"></textarea>
                                            <span style="color: red">@error('outcomes'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="slug" class="col-4 col-form-label">Liên kết</label>
                                        <div class="col-8">
                                            <input  name="slug" class="form-control here" type="text">
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

