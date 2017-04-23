@extends('layouts.master')

@section('新增商品', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="panel panel-info" style="margin-top: 70px;">
        <div class="panel-heading">
            <div class="panel-title">新增商品</div>
        </div>

        <div class="panel-body">
            <form action="{{ url('/admin/product/save') }}" method="post" class="form-horizontal" enctype="multipart/form-data" role="form">
                {!! csrf_field() !!}

                <fieldset>
                    <div class="form-group">
                        <label for="product_name" class="col-md-3 control-label">商品名称</label>
                        <div class="col-md-9">
                            <input type="text" id="product_name" name="product_name" placeholder="商品名称" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_desc" class="col-md-3 control-label">商品描述</label>
                        <div class="col-md-9">
                            <textarea id="product_desc" name="product_desc" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_price" class="col-md-3 control-label">价格</label>
                        <div class="col-md-9">
                            <input type="text" id="product_price" name="product_price" placeholder="价格" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product_img_url">图片URL</label>
                        <div class="col-md-9">
                            <input id="product_img_url" name="product_img_url" type="text" placeholder="商品图片链接" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="file">文件</label>
                        <div class="col-md-9">
                            <input id="file" name="file" class="input-file" type="file">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-9">
                            <button id="submit" name="submit" class="btn btn-primary">提交</button>
                        </div>
                    </div>

                </fieldset>

            </form>
        </div>
    </div>
@endsection