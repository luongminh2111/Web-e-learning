<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="/css/register.css" media="all">
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="/image/logo.png" alt="Logo"/>
            <h3>HUST E-learning</h3>
            <p>ONE LOVE, ONE FUTURE</p>
            <a href="{{route('login')}}">
                <input type="submit" name="" value="Đăng nhập"/><br/>
            </a>
            <a href="{{route('home')}}">
                <input type="submit" name="" value="Trang chủ"/><br/>
            </a>

        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sinh viên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Giảng viên</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Đăng nhập với vai trò là Sinh viên</h3>
                    <div class="row register-form">
                        <div class="col-md-12">
                            <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Mã số sinh viên" value="" name="id" />
                                    <span style="color: red">@error('id'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" value="" name="email"/>
                                    <span style="color: red">@error('email'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Số liên lạc" value=""  />
                                    <span style="color: red">@error('phone'){{$message}}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Tài khoản" value="" name="name"/>
                                    <span style="color: red">@error('name'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Mật khẩu" value="" name="password" />
                                    <span style="color: red">@error('password'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"  placeholder="Xác nhận mật khẩu" value="" name="confirm_password"/>
                                    <span style="color: red">@error('confirm_password'){{$message}}@enderror</span>
                                </div>
                                <div class="col-md-9">
                                    <input type="submit" class="btnRegister"  value="Đăng ký"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Đăng nhập với vai trò là Giảng viên</h3>
                    <div class="row register-form">
                        <div class="col-md-12">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Mã số thẻ" value="" name="id" />
                                    <span style="color: red">@error('id'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" value="" name="email"/>
                                    <span style="color: red">@error('email'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Số liên lạc" value="" name="phone"/>
                                    <span style="color: red">@error('phone'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Tài khoản" value="" name="name"/>
                                    <span style="color: red">@error('name'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Mật khẩu" value="" name="password"/>
                                    <span style="color: red">@error('password'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Xác nhận mật khẩu" value="" name="confirm_password"/>
                                    <span style="color: red">@error('confirm_password'){{$message}}@enderror</span>
                                </div>
                                <div class="col-md-9">
                                    <input type="submit" class="btnRegister"  value="Đăng ký"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

