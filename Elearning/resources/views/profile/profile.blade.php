@extends('main')
@section('profile')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <div class="container" style="margin: 3% auto">
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <a href="{{route('profile')}}" class="list-group-item list-group-item-action active">PROFILE</a>
                    <a href="{{route('update_profile')}}" class="list-group-item list-group-item-action">Cập nhật thông tin</a>
                    <a href="{{route('change_password')}}" class="list-group-item list-group-item-action">Thay đổi mật khẩu</a>
                    <a href="#" class="list-group-item list-group-item-action">New</a>
                    <a href="#" class="list-group-item list-group-item-action">Comments</a>
                    <a href="#" class="list-group-item list-group-item-action">Settings</a>

                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Your Profile</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label for="username" class="col-4 col-form-label">Tài khoản </label>
                                    <div class="col-8">
                                        <input class="form-control here" type="text" value="<?php if (isset(auth()->user()->name)) {
                                            echo auth()->user()->name;
                                        }?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="username" class="col-4 col-form-label">Email </label>
                                    <div class="col-8">
                                        <input class="form-control here" type="text" value="<?php if (!empty(auth()->user()->email)) {
                                            echo auth()->user()->email;
                                        }?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="username" class="col-4 col-form-label">Phone </label>
                                    <div class="col-8">
                                        <input class="form-control here" type="text" value="<?php if (!empty(auth()->user()->phone)) {
                                            echo auth()->user()->phone;
                                        }?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-4 col-form-label">Họ tên đệm</label>
                                    <div class="col-8">
                                        <input id="name" class="form-control here" value="<?php if (isset(auth()->user()->first_name)) {
                                            echo auth()->user()->first_name;
                                        }?>" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lastname" class="col-4 col-form-label">Tên</label>
                                    <div class="col-8">
                                        <input id="lastname" value="<?php if (isset(auth()->user()->last_name)) {
                                            echo auth()->user()->last_name;
                                        }?>" class="form-control here" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="text" class="col-4 col-form-label">Tuổi </label>
                                    <div class="col-8">
                                        <input id="text" class="form-control here" value="<?php if (!empty(auth()->user()->age)) {
                                            echo auth()->user()->age;
                                        }?>" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="text" class="col-4 col-form-label">Học vấn </label>
                                    <div class="col-8">
                                        <input id="text" class="form-control here" value="<?php if (isset(auth()->user()->level)){
                                            echo auth()->user()->level;
                                        }?>" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="text" class="col-4 col-form-label"> Các chứng chỉ</label>
                                    <div class="col-8">
                                        <input id="text" placeholder="Chưa có" class="form-control here"  value="" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

