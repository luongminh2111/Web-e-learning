@extends('library.main_library')
<link rel="stylesheet" href="/css/library/library_store.css" type="text/css">
@section('grade_5')

    <div class="row">
        <div class="image">
            <img src="/image/demo.jpg" alt="demo">
        </div>
    </div>
    <div class="row">
        <div class="title">
            <p>TOÁN</p>
            <a href="">Xem tất cả</a>
        </div>
        <div class="contents">
            <?php use Illuminate\Support\Facades\DB;
            $data =DB::table('libraries')
                ->where('subject_name','=','Toán')
                ->where('grade','=','5')
                ->get();?>
            @foreach($data as $item)
                <div class="item">
                    <p class="titles">{{$item->title}}</p>
                    <p><i class="fas fa-folder-open"></i> {{$item->subject_name}} {{$item->grade}}</p>
                    <p>Tác giả: {{$item->author}}</p>
                    <a href="{{route('views',$item->slug)}}">Đọc online</a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="title">
            <p>TIẾNG ANH</p>
            <a href="">Xem tất cả</a>
        </div>
        <div class="contents">
            <?php
            $data =DB::table('libraries')
                ->where('subject_name','=','Tiếng anh')
                ->where('grade','=','5')
                ->get();?>
            @foreach($data as $item)
                <div class="item">
                    <p class="titles">{{$item->title}}</p>
                    <p><i class="fas fa-folder-open"></i> {{$item->subject_name}} {{$item->grade}}</p>
                    <p>Tác giả: {{$item->author}}</p>
                    <a href="{{route('views',$item->slug)}}">Đọc online</a>
                </div>
            @endforeach

        </div>
    </div>
    <div class="row">
        <div class="title">
            <p>NGữ VĂN</p>
            <a href="">Xem tất cả</a>
        </div>
        <div class="contents">
            <?php
            $data =DB::table('libraries')
                ->where('subject_name','=','Văn')
                ->where('grade','=','5')
                ->get();?>
            @foreach($data as $item)
                <div class="item">
                    <p class="titles">{{$item->title}}</p>
                    <p><i class="fas fa-folder-open"></i> {{$item->subject_name}} {{$item->grade}}</p>
                    <p>Tác giả: {{$item->author}}</p>
                    <a href="{{route('views',$item->slug)}}">Đọc online</a>
                </div>
            @endforeach
        </div>
    </div>

@endsection

