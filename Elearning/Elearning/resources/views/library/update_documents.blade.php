@extends('main')
@section('update-documents')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php use Illuminate\Support\Facades ?>
    <div class="container" style="margin: 5% 0">
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <p class="list-group-item list-group-item-action bg-success text-white ">Quản lí tài liệu</p>
                    <a href="{{route('list_documents')}}" class="list-group-item list-group-item-action  ">Danh sách tài liệu</a>
                    <a href="{{route('update_documents')}}" class="list-group-item list-group-item-action active">Cập nhật tài liệu</a>
                    <a href="{{route('upload_documents')}}" class="list-group-item list-group-item-action ">Thêm mới</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Cập nhật tài liệu</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{route('find_documents')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Nhập mã tên tài liệu cần cập nhật</label>
                                        <input type="text" class="form-control" name="query" placeholder="Search here....." value="{{ request()->input('query') }}">
                                        <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{session('error')}}
                                </div>
                            @endif
                            @if(isset($result))
                                <div class="col-md-12" >
                                    <form action="post_update_documents" method="post" enctype="multipart/form-data">
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
                                            <label for="subject_name" class="col-4 col-form-label">Tên môn học </label>
                                            <div class="col-8">
                                                <input class="form-control here" value="{{$result->subject_name}}" type="text">
                                                <span style="color: red">@error('subject_name'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="grade" class="col-4 col-form-label">Khối lớp </label>
                                            <div class="col-8">
                                                <input class="form-control here" value="{{$result->grade}}" type="text">
                                                <span style="color: red">@error('grade'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="title" class="col-4 col-form-label">Tiêu đề </label>
                                            <div class="col-8">
                                                <input  name="title" placeholder="mã môn học" class="form-control here" value="{{$result->title}}" type="text">
                                                <span style="color: red">@error('title'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="custom-file ">
                                                <label for="contents" class="col-4 col-form-label">Chọn tài liệu</label>
                                                <input type="file" name="contents" >
                                                <span style="color: red">@error('contents'){{$message}}@enderror</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="author" class="col-4 col-form-label">Tác giả</label>
                                            <div class="col-8">
                                                <input  name="author" placeholder="Mô tả" class="form-control here" value="{{$result->author}}" type="text" >
                                                <span style="color: red">@error('author'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="slug" class="col-4 col-form-label">Link tài liệu</label>
                                            <div class="col-8">
                                                <input  name="slug" class="form-control here" value="{{$result->slug}}" type="text">
                                                <span style="color: red">@error('slug'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-4 col-8" style="margin-top:1% ">
                                                <button name="submit" type="submit" class="btn btn-primary">Cập nhật</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

