@extends('layouts.master')

@section('sidebar')

@endsection

@section('content')

    <div class="container" style="margin-top: 70px;">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">
                    注册
                </div>
            </div>

            <div class="panel-body">
                <div class="row">
                    <form action="{{ url('/auth/register') }}" class="form-horizontal">
                        {!! csrf_field() !!}

                        <div class="row form-group {{ $errors->has('name')?' has-error':' ' }}">
                            <label for="name" class="control-label col-md-3">
                                姓名：
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="请输入用户名" required>
                            </div>
                            @if($errors->has('name'))
                                <div class="col-md-6 col-md-offset-3 text-danger">{{ $errors -> first('name') }}</div>
                            @endif
                        </div>

                        <div class="row form-group {{ $errors->has('email')?' has-error':' ' }}">
                            <label for="email" class="control-label col-md-3">
                                邮箱：
                            </label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="请输入邮箱" required>
                            </div>
                            @if($errors->has('email'))
                                <div class="col-md-6 col-md-offset-3 text-danger">{{ $errors -> first('email') }}</div>
                            @endif
                        </div>

                        <div class="row form-group {{ $errors -> has('password')?' has-error':' ' }}">
                            <label for="password" class="control-label col-md-3">
                                密码：
                            </label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" placeholder="请输入密码" required>
                            </div>
                            @if($errors->has('password'))
                                <div class="col-md-6 col-md-offset-3 text-danger">{{ $errors -> first('password') }}</div>
                            @endif
                        </div>

                        <div class="row form-group {{ $errors -> has('password_confirmation') }}">
                            <label for="password_confirmation" class="control-label col-md-3">
                                确认密码：
                            </label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="请再次输入密码" required>
                            </div>
                            @if($errors->has('password_confirmation'))
                                <div class="col-md-6 col-md-offset-3 text-danger">{{ $errors -> first('password_confirmation') }}</div>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <button class="btn btn-primary btn-block">注册</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection