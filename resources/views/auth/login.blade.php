@extends('layouts.master')

@section('sidebar')
    @parent
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
                <div class="row">
                    <label for="email" class="col-md-3 control-label">邮箱</label>
                    <div class="col-md-9">
                        <input type="email" class="form-control" placeholder="请输入邮箱" required>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
