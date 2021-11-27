@extends('main')
@section('question-bank')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .upload a{
            text-decoration: none;
            padding: 10px;
            background-color: dodgerblue;
            color: white;
        }
        #search{
            display: none;
        }
    </style>
    <div class="container" style="margin-top: 5%; margin-bottom: 5%">
        <div class="home">
            <p style="font-size: 18px; margin-top: 1%; margin-bottom: 3%"><a href="{{route('home')}}"><i class="fas fa-home"></i>Trang chủ</a> > Ngân hàng câu hỏi</p>
        </div>
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <p class="list-group-item list-group-item-action bg-success text-white " >Quản lí khóa học</p>
                    <a href="{{route('list_course')}}" class="list-group-item list-group-item-action ">Danh sách khóa học</a>
                    <a href="{{route('list_lesson')}}" class="list-group-item list-group-item-action ">Danh sách bài giảng</a>
                    <a href="{{route('question_bank')}}" class="list-group-item list-group-item-action active" >Ngân hàng câu hỏi</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Danh sách câu hỏi</h4>
                            </div>
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-2">
                                <p class="btn-primary text-white text-center" style="padding: 8px"><i class="fas fa-search"></i> Tìm kiếm</p>
                            </div>
                            <hr>
                        </div>
                        <div class="row" id="search">
                            <div class="col-md-12">
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="course_id" class="col-4 col-form-label">Tìm kiếm theo khóa học</label>
                                        <div class="col-4">
                                            <input type="text" class="form-control here" name="course_id">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lesson_id" class="col-4 col-form-label">Tìm kiếm theo môn học</label>
                                        <div class="col-4">
                                            <input type="text" class="form-control here" name="lesson_id">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8" style="margin-top:1% ">
                                            <button name="submit" type="submit" class="btn btn-primary"><i class="fas fa-upload"></i> Thêm</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="form-group row">
                                    <div class="offset-4 col-8" style="margin-top:1% ">
                                        <button class="btn btn-danger" id="btn2" onclick="hiddenLesson()"><i class="fas fa-arrow-up"></i></button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            @if(isset($list_question))
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-center">M-K-H</th>
                                        <th class="text-center">Mã môn học</th>
                                        <th class="text-center">Câu hỏi</th>
                                        <th class="text-center">Xem</th>
                                        <th class="text-center">Thêm</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($list_question) > 0)
                                        @foreach($list_question as $list)
                                            <tr>
                                                <td class="text-center">{{ $list->course_id }}</td>
                                                <td class="text-center">{{ $list->subject_name }}</td>
                                                <td class="text-center">{{ $list->question }}</td>
                                                <td class="text-center"><a href="{{route('question_bank_views_detail',$list->id)}}"><i class="fas fa-eye"></i></a></td>
                                                <td class="text-center"><a href="{{route('insert_question',$list->id)}}">Thêm</a></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-5">
                            </div>
                            <div class="col-2">
                                {{$list_question->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showForm(){
            document.getElementById('search').style.display = "block";
        }
        function hiddenForm(){
            document.getElementById('search').style.display = "none";
        }
    </script>

@endsection
