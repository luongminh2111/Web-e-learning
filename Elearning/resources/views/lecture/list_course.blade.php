@extends('main')
@section('list-course')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <div class="container" style="margin: 5% 0">
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <p class="list-group-item list-group-item-action bg-success text-white " >Quản lí khóa học</p>
                    <a href="{{route('list_course')}}" class="list-group-item list-group-item-action active ">Danh sách khóa học</a>
                    <a href="" class="list-group-item list-group-item-action">Cập nhật khóa học</a>
                    <a href="{{route('upload_course')}}" class="list-group-item list-group-item-action">Thêm mới</a>

                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Danh sách khóa học</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{route('change_profile')}}" method="post" enctype="multipart/form-data">
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
                                        <label for="username" class="col-4 col-form-label">Tài khoản *</label>
                                        <div class="col-8">
                                            <input name="username" placeholder="Tài khoản" class="form-control here" type="text" value="<?php echo auth()->user()->username?>">
                                            <span style="color: red">@error('username'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Email *</label>
                                        <div class="col-8">
                                            <input id="username" name="email" placeholder="Email" class="form-control here" type="text" value="<?php echo auth()->user()->email?>">
                                            <span style="color: red">@error('email'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-4 col-form-label">Phone </label>
                                        <div class="col-8">
                                            <input id="username" name="phone" placeholder="Email" class="form-control here" type="text" value="<?php echo auth()->user()->phone?>">
                                            <span style="color: red">@error('phone'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="first_name" class="col-4 col-form-label">Họ tên đệm</label>
                                        <div class="col-8">
                                            <input id="name" name="first_name"  class="form-control here"  type="text">
                                            <span style="color: red">@error('first_name'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="last_name" class="col-4 col-form-label">Tên</label>
                                        <div class="col-8">
                                            <input id="lastname" name="last_name" class="form-control here" type="text">
                                            <span style="color: red">@error('last_name'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="age" class="col-4 col-form-label">Tuổi </label>
                                        <div class="col-8">
                                            <input id="text" name="age" class="form-control here" type="text">
                                            <span style="color: red">@error('age'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="degree" class="col-4 col-form-label">Học vấn</label>
                                        <div class="col-8">
                                            <select name="degree"  class="custom-select">
                                                <option value=""></option>
                                                <option value="Cử nhân">Cử nhân</option>
                                                <option value="Thạc sĩ">Thạc sĩ</option>
                                                <option value="Tiến sĩ">Tiến sĩ</option>
                                                <option value="Phó giáo sư">Phó giáo sư</option>
                                                <option value="Giáo sư">Giáo sư</option>
                                            </select>
                                            <span style="color: red">@error('degree'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="level_id" class="col-4 col-form-label">Khối giảng dạy</label>
                                        <div class="col-8">
                                            <select  name="level_id"  class="custom-select">
                                                <option value=""></option>
                                                <option value="Tiền tiểu học">Tiền tiểu học</option>
                                                <option value="Tiểu học">Tiểu học</option>
                                                <option value="Trung học">Trung học</option>
                                                <option value="Phổ thông">Phổ thông</option>
                                                <option value="Đại học">Đại học</option>
                                            </select>
                                            <span style="color: red">@error('level_id'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="subject_id" class="col-4 col-form-label">Phụ trách môn học</label>
                                        <div class="col-8">
                                            <select  name="subject_id"  class="custom-select">
                                                <option value=""></option>
                                                <option value="Toán">Toán</option>
                                                <option value="Văn">Văn</option>
                                                <option value="Tiếng anh">Tiếng anh</option>
                                                <option value="Vật lý">Vật lý</option>
                                                <option value="Hóa học">Hóa học</option>
                                                <option value="Sinh học">Sinh học</option>
                                            </select>
                                            <span style="color: red">@error('subject_id'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="course_id" class="col-4 col-form-label">Phụ trách khóa học </label>
                                        <div class="col-8">
                                            <input id="text" name="course_id" class="form-control here" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="work_address" class="col-4 col-form-label">Nơi công tác </label>
                                        <div class="col-8">
                                            <input id="text" name="work_address" class="form-control here" type="text">
                                            <span style="color: red">@error('work_address'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="work" class="col-4 col-form-label">Nghề nghiệp</label>
                                        <div class="col-8">
                                            <select name="work"  class="custom-select">
                                                <option value="lecture">Giáo viên, Giảng viên</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8" style="margin-top:1% ">
                                            <button name="submit" type="submit" class="btn btn-primary">Cập nhật</button>
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
