@extends('V_fontend.index')
@section('content')

    <div class=" bg-organ">
        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="text-center font40 grenza-bold"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">


        @if (Auth::user())
            <div class="row">
                {{-- sidebaxr --}}

                {{-- info --}}
                <div class="col-md-12">
                    <div class="bookByCatTitle">
                        <div class="title-mod-sm">
                            Sách đã thuê
                        </div>
                        <div>
                            Số lượng sách thuê trong tháng <?php echo $month = date('n') ?>: <?php echo $received_count_month ?> quyển sách
                            
                        </div>
                        <div>
                            Đánh giá: 
                            <?php
                                if($received_count_month == 0 ){
                                    echo '<i class="fa-solid fa-star text-warning"></i>';
                                }elseif($received_count_month < 8){
                                    echo '<i class="fa-solid fa-star text-warning"></i>';
                                    echo '<i class="fa-solid fa-star text-warning"></i>';
                                    echo '<i class="fa-solid fa-star text-warning"></i>';
                                    echo '<i class="fa-solid fa-star text-warning"></i>';
                                }else{
                                    echo '<i class="fa-solid fa-star text-warning"></i>';
                                    echo '<i class="fa-solid fa-star text-warning"></i>';
                                    echo '<i class="fa-solid fa-star text-warning"></i>';
                                    echo '<i class="fa-solid fa-star text-warning"></i>';
                                    echo '<i class="fa-solid fa-star text-warning"></i>';
                                }
                            ?>
                        </div>
                        <div class=" py-3">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                        role="tab" aria-controls="pills-home" aria-selected="true">Sách đang thuê ({{$received->count()}}) </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                        href="#pills-profile" role="tab" aria-controls="pills-profile"
                                        aria-selected="false">Sách chờ thuê ({{$waiting->count()}}) </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                                        href="#pills-contact" role="tab" aria-controls="pills-contact"
                                        aria-selected="false">Lịch sử thuê ({{$returned->count()}}) </a>
                                </li>
                                {{-- <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Lịch sử thuê</a>
                          </li> --}}
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    @if ($received)
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">STT</th>
                                                            <th scope="col">Ảnh</th>
                                                            <th scope="col">Tên</th>
                                                            <th scope="col" class="text-center">Chủ đề<br> Yêu thích</th>
                                                            <th scope="col" class="text-center">Ngày đặt<br> hàng</th>
                                                            <th scope="col">Ngày nhận</th>
                                                            <th scope="col">Thời hạn</th>
                                                            <th scope="col">Ngày trả</th>
                                                            <th scope="col">Bình luận</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($received as $key => $order)
                                                            @php $item = $order->f_book @endphp
                                                            <tr>
                                                                <th scope="row">{{ $key + 1 }}</th>
                                                                <td>
                                                                    <a href="@if(isset($order->f_book)){{ asset($order->f_book->url . '.html') }}@endif">
                                                                        <img height="50px"
                                                                            src="@if(isset($order->f_book)){{ asset('source/book/' . $order->f_book->img) }}@endif"
                                                                            alt="">
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    {{$order->f_book->name }}
                                                                </td>
                                                                <td>
                                                                    @if(isset($order->f_book->f_cat)){{$order->f_book->f_cat->first()->name }}@endif
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    if($order->created_at){
                                                                        $date_order = date_create($order->created_at);
                                                                        echo date_format($date_order, 'd/m/Y') . '<br />';
                                                                        echo date_format($date_order, 'H:i:s');
                                                                    }
                                                                    ?>
                                                                </td>
                                                                 <td>
                                                                    <?php
                                                                    if($order->rent_date){
                                                                        $date_order = date_create($order->rent_date);
                                                                        echo date_format($date_order, 'd/m/Y') . '<br />';
                                                                        echo date_format($date_order, 'H:i:s');
                                                                    }
                                                                    ?>
                                                                </td>
                                                                 <td class="date_thoi_han">
                                                                    <?php

                                                                        if($order->time_rent){
                                                                            $time_rent = date_create($order->time_rent);
                                                                                echo date_format($time_rent, 'd/m/Y') . '<br />';
                                                                                //echo date_format($time_rent, 'H:i:s');
                                                                            //bao dong ngay
                                                                            $time_rent_date = date_format($time_rent, 'd/m/Y');
                                                                            $time_now = date("d/m/Y");
                                                                           
                                                                            if($time_rent_date >=  $time_now  ) {
                                                                                echo '!!Đến hạn!!';
                                                                                echo '<script>$(".date_thoi_han").css("color","red")</script>';
                                                                            }

                                                                        }
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    if($order->pay_date){
                                                                        $date_order = date_create($order->pay_date);
                                                                        echo date_format($date_order, 'd/m/Y') . '<br />';
                                                                        echo date_format($date_order, 'H:i:s');
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <a href="{{asset($order->f_book->url.'.html#comment_list')}}">Đánh giá</a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    @endif
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    @if ($waiting)
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">STT</th>
                                                            <th scope="col">Ảnh</th>
                                                            <th scope="col">Tên</th>
                                                            <th scope="col">Ngày</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($waiting as $order)
                                                            @php $item = $order->f_book @endphp
                                                            <tr>
                                                                <th scope="row">{{ $key + 1 }}</th>
                                                                <td>
                                                                    <a href="@if(isset($order->f_book)){{ asset($order->f_book->url . '.html') }}@endif">
                                                                        <img height="50px"
                                                                            src="@if(isset($order->f_book)){{ asset('source/book/' . $order->f_book->img) }}@endif"
                                                                            alt="">
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    {{$order->f_book->name }}
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    $date_order = date_create($order->created_at);
                                                                    echo date_format($date_order, 'd/m/Y') . '<br />';
                                                                    echo date_format($date_order, 'H:i:s');
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">STT</th>
                                                <th scope="col">Ảnh</th>
                                                <th scope="col">Tên</th>
                                                <th scope="col">Ngày</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($returned)
                                                @foreach ($returned as $key => $item)
                                                    <tr>
                                                        <th scope="row">{{ $key + 1 }}</th>
                                                        <td>
                                                            <a href="{{ asset($item->f_book->url . '.html') }}">
                                                                <img height="50px"
                                                                    src="{{ asset('source/book/' . $item->f_book->img) }}"
                                                                    alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            {{ $item->f_book->name }}
                                                        </td>
                                                        <td>
                                                            <?php
                                                            $date = date_create($item->created_at);
                                                            echo date_format($date, 'd/m/Y') . '<br />';
                                                            echo date_format($date, 'H:i:s');
                                                            ?>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection('content')
