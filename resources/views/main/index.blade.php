@extends('layouts.master')

@section('content')
    <div class="container" style="margin-top: 70px;">
        <div class="row">
            <div class="col-md-12">
                @foreach($products as $product)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{{ $product -> product_img_url }}" alt="">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>{{ $product -> product_name }}</h3>
                                    </div>
                                    <div class="col-md-6 col-xs-6 price">
                                        <h3><label for="">￥{{ $product->product_price }}</label></h3>
                                    </div>
                                </div>
                                <p>{{ $product -> product_desc }}</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{ url('/addProduct/' . $product->id) }}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span>购买</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection