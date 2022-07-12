@extends('V_fontend.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="breadcrumbs">
            <div class="row">
                <a href="{{asset('')}}">Trang chủ</a> /
                <a href="{{asset('order/cart')}}">Giỏ hàng</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            {{-- @include('V_fontend/sidebar/') --}}
        </div>
        <div class="col-md-8">
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="img">Hình Ảnh</td>
                            <td class="name">Tên Sách</td>
                            <td class="description">Mô tả</td>
                            <td class="price">Giá </td>
                            <td class="quantity">Số lượng</td>
                            <td class="total">Tổng tiền</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($book as $key => $val)
                        <tr class="cart_product">
                            <td class="">
                                @if($book->img)
                                <img width="30px" src="{{asset('/source/book/'.$book->img)}}" />
                                @else
                                <img width="30px" src="{{asset('img_webux/noimg.jpg')}}" />
                                @endif>
                            </td>
                            <td class="">{{$book->name}}</td>
                            <td class="">{{$book->des}}</td>
                            <td class="">{{$book->price}}</td>
                            <td class="">{{$book->name}}</td>
                            <td class="">{{$book->name}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection('content')
