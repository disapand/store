@extends('layouts.master')

@section('sidebar')

@endsection

@section('content')

    <div class="container" style="margin-top: 70px;">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">
                    登陆
                </div>
            </div>

            <div class="panel-body">
                <form action="{{ url('/auth/login') }}" method="post" class="form-horizontal">
                    {!! csrf_field() !!}

                    <div class="row form-group {{ $errors->has('email')?' has-error':' ' }}">
                        <label for="email" class="col-md-4 control-label">邮箱</label>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="请输入邮箱" required>
                        </div>
                        @if($errors -> has('email'))
                            <div class="col-md-6 col-md-offset-4 text-danger">{{ $errors -> first('email') }}</div>
                        @endif
                    </div>


                    <div class="row form-group {{ $errors->has('password')?' has-error':' ' }}">
                        <label for="password" class="control-label col-md-4">密码</label>
                        <div class="col-md-6">
                            <input type="password" name="password" class="form-control" placeholder="请输入密码">
                        </div>
                        @if($errors -> has('password'))
                            <div class="col-md-6 col-md-offset-4 text-danger">{{ $errors -> first('password') }}</div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-4">
                            <button class="btn btn-primary btn-block form-group">登陆</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
