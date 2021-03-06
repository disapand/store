@extends('layouts.master')

@section('商店后台', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="container" style="margin-top: 70px;">
        <div class="row">
            <div class="col-md-6">
                <a href="{{ url('/admin/product/new') }}" class="btn btn-primary">新增商品</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <td>名称</td>
                        <td>价格</td>
                        <td>文件</td>
                        <td>操作</td>
                    </thead>
                    <tbody>
                    @foreach( $products as $product)
                        <tr>
                            <td>{{ $product -> product_name }}</td>
                            <td>￥{{ $product -> product_price }}</td>
                            <td>{{ $product -> file -> original_filename }}</td>
                            <td><a href="{{ url('/admin/product/destroy/' . $product -> id) }}"> <button class="btn btn-danger">删除商品</button> </a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection