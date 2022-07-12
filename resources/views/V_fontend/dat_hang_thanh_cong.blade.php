@extends('V_fontend.index')
@section('content')
    
    <div class="container">
        <div class="row my-5">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Đặt hàng thành công</h4>
                    <p>Tổng đơn hàng: <span class="money">{{$_GET['vpc_Amount']/100}}</span> đ</p>
                    <p>Mã đơn hàng: {{$_GET['code']}}</p>
                    <p>Loại giao dịch: {{$_GET['type']}}</p>
                    <script>$('.money').simpleMoneyFormat();</script>
                    <hr>
                    <p class="mb-0">
                        Nhân viên sẽ xử lý đơn hàng của bạn trong thời gian nhanh nhất ! cảm ơn bạn đã mua hàng !
                    </p>
                    <a href="{{asset('')}}" class="btn btn-primary mt-3"> Tiếp tục mua hàng</a>
                </div>
            </div>
        </div>
    </div>
    
@endsection('content')

