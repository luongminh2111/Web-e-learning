@extends('main')
@section('list-documents')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <div class="container" style="margin: 5% 0">
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <p class="list-group-item list-group-item-action bg-success text-white ">Quản lí tài liệu</p>
                    <a href="{{route('list_documents')}}" class="list-group-item list-group-item-action active ">Danh sách tài liệu</a>
                    <a href="{{route('update_documents')}}" class="list-group-item list-group-item-action ">Cập nhật tài liệu</a>
                    <a href="{{route('upload_documents')}}" class="list-group-item list-group-item-action ">Thêm mới</a>

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
                            @if(isset($list_documents))
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Giảng viên</th>
                                        <th>Khối lớp</th>
                                        <th>Tên môn học</th>
                                        <th>Tiêu đề</th>
                                        <th>Tác giả</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($list_documents) > 0)
                                        @foreach($list_documents as $list)
                                            <tr>
                                                <td>{{ $lecture_name }}</td>
                                                <td>{{ $list->grade }}</td>
                                                <td>{{ $list->subject_name }}</td>
                                                <td>{{ $list->title }}</td>
                                                <td>{{ $list->author}}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr><td>No result found!</td></tr>
                                    @endif
                                    </tbody>
                                </table>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
