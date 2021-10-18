@extends('main')
@section('home')
    <div class="header header-bottom">
        <ul>
            <li><a href="">Giới thiệu</a></li>
            <li><a href="">Giáo viên</a></li>
            <li><a href="">Phòng thi</a></li>
            <li><a href="{{route('show_library')}}">Thư viện</a></li>
            <li><a href="">Hỗ trợ</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="main-content menu">
            <ul>
                <li class="title-cate">
                    <p><i class="fas fa-bars"></i>  Các khóa học</p>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Đại học - Cao đẳng
                    </p>
                    <div class="dropdown-menu" style="margin-left: 28%">
                        <a class="dropdown-item" href="#">Toán Cao Cấp</a>
                        <a class="dropdown-item" href="#">TOEIC</a>
                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Khóa học bổ trợ
                    </p>
                    <div class="dropdown-menu" style="margin-left: 28%">
                        <a class="dropdown-item" href="#">Toán</a>
                        <a class="dropdown-item" href="#">Văn</a>
                        <a class="dropdown-item" href="#">Tiếng Anh</a>
                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Bồi dưỡng học sinh giỏi
                    </p>
                    <div class="dropdown-menu" style="margin-left: 28%">
                        <a class="dropdown-item" href="#">Toán</a>
                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Luyện thi đại học
                    </p>
                    <div class="dropdown-menu" style="margin-left: 28%">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Lớp 10 - Lớp 11 - Lớp 12
                    </p>
                    <div class="dropdown-menu" style="margin-left: 28%">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Luyện thi vào 10
                    </p>
                    <div class="dropdown-menu" style="margin-left: 28%">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Lớp 6 - Lớp 7 - Lớp 8 - Lớp 9
                    </p>
                    <div class="dropdown-menu" style="margin-left: 28%">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Luyện thi vào 6
                    </p>
                    <div class="dropdown-menu" style="margin-left: 28%">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Lớp 1 - Lớp 2 - Lớp 3 - Lớp 4 - Lớp 5
                    </p>
                    <div class="dropdown-menu" style="margin-left: 28%">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Tiền tiểu học
                    </p>
                    <div class="dropdown-menu" style="margin-left: 28%">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="main-content slide-show">
            <!--Carousel Wrapper-->
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="3"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="4"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="5"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="6"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img  src="/image/slide1.png"
                              alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="/image/slide2.jpg"
                             alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="/image/slide3.jpg"
                             alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img src="/image/slide4.png"
                             alt="Four slide">
                    </div>
                    <div class="carousel-item">
                        <img src="/image/slide6.jpg"
                             alt="Five slide">
                    </div>
                    <div class="carousel-item">
                        <img src="/image/slide7.png"
                             alt="Six slide">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->

        </div>

    </div>
    <div class="communication">
        <img src="/image/communication.png" alt="">
    </div>
    <div class="content">
        <div class="content-child high-school">
            <div class="title">
                <a href="">Trung học phổ thông</a>
            </div>
            <div class="advertisement">
                <img src="/image/slide1.png" alt=advertisement"">
            </div>
        </div>
        <div class="content-child secondary-school">
            <div class="title">
                <a href="">Trung học cơ sở</a>
            </div>
            <div class="advertisement">
                <img src="/image/slide4.png" alt=advertisement"">
            </div>
        </div>
        <div class="content-child primary-school">
            <div class="title">
                <a href="">Tiểu học</a>
            </div>
            <div class="advertisement">
                <img src="/image/tieuhoc.gif" alt=advertisement"">
            </div>
        </div>
    </div>
@stop
