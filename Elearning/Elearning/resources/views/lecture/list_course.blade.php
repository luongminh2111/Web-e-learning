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
                    <a href="{{route('update_course')}}" class="list-group-item list-group-item-action">Cập nhật khóa học</a>
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
                            @if(isset($list_course))
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Giảng viên</th>
                                        <th>Mã khóa học</th>
                                        <th>Mã môn học</th>
                                        <th>Tên khóa học</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($list_course) > 0)
                                        @foreach($list_course as $list)
                                            <tr>
                                                <td>{{ $lecture_name }}</td>
                                                <td>{{ $list->course_id }}</td>
                                                <td>{{ $list->subject_id }}</td>
                                                <td>{{ $list->course_name }}</td>
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
