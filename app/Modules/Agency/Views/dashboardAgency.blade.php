@extends('V_backend.index')
@section('content')
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 class="text-center">
            Chào mừng bạn đến với hệ thống đại lý Con Sáng Tạo
            </h1>
            <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Trang chủ</a></li>
            </ol>
         
        </section>
        <section class="content-header mt-4">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="">
                        <h6>Tổng số <span class="text-danger">{{$order_count}}</span> đơn hàng và tiền hoa hồng, xem chi tiết <a href="{{asset('admin/order')}}">tại đây</a></h6>
                    </div>
                    <div class="">
                        <table class="table table-hover">
                          
                            <tr>
                                <th>Đã thanh toán</th>
                                <th>
                                    {{number_format($pay_history->sum('price'))}} đ
                                </th>
                            </tr>
                            <tr>
                                <th>Chưa thanh toán</th>
                                <th>
                                    {{number_format($order_pay_waiting->sum('price_total'))}} đ
                                </th>
                            </tr>
                   
                        </table>
                              
                    </div>
                </div>
            </div>
            <hr>
            @can('agency_percen_view')
                <div class="row">
                    <div class="col-md-6">
                        <h3>Menu</h3>
                        <hr>
                        <div class="row">
                            
                            <div class="col-md-3 col-6 mb-3">
                                <a href="{{asset('/agency/order')}}">
                                    <div class="border text-center py-2">
                                        <div class="text-dark" style="font-size:50px"><i class="fas fa-shopping-cart"></i></div>
                                        <h6>Đơn hàng ({{$order_count}})</h6>
                                    </div>
                                </a>
                            </div>
                         
                            <div class="col-md-3 col-6 mb-3">
                                <a href="{{asset('/agency/course')}}">
                                    <div class="border text-center py-2">
                                        <div class="text-dark" style="font-size:50px"><i class="fas fa-book-reader"></i></div>
                                        <h6>Khóa học ({{$course_count}})</h6>
                                    </div>
                                </a>
                            </div>
                          
                            
                            <div class="col-md-3 col-6 mb-3">
                                <a href="{{asset('/agency/coupon_info')}}">
                                    <div class="border text-center py-2">
                                        <div class="text-dark" style="font-size:50px"><i class="fas fa-spa"></i></div>
                                        <h6>Hoa hồng ({{$percen}}%)</h6>
                                    </div>
                                </a>
                            </div>
                         
                            
                            <div class="col-md-3 col-6 mb-3">
                                <a href="{{asset('/agency/bill')}}">
                                    <div class="border text-center py-2">
                                        <div class="text-dark" style="font-size:50px"><i class="fas fa-dollar-sign"></i></div>
                                        <h6>Thanh toán ({{$pay_history_count}})</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <a href="{{asset('/agency/bill/bank')}}">
                                    <div class="border text-center py-2">
                                        <div class="text-dark" style="font-size:50px"><i class="fas fa-money-check-alt"></i></div>
                                        <h6>Ngân hàng</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <a href="{{asset('/agency/bill/history')}}">
                                    <div class="border text-center py-2">
                                        <div class="text-dark" style="font-size:50px"><i class="fas fa-history"></i></div>
                                        <h6>Lịch sử thanh toán</h6>
                                    </div>
                                </a>
                            </div>
                           
                            <div class="col-md-3 col-6 mb-3">
                                <a href="{{asset('/agency/faq')}}">
                                    <div class="border text-center py-2">
                                        <div class="text-dark" style="font-size:50px"><i class="fas fa-question-circle"></i></div>
                                        <h6>Hỏi đáp</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <a href="{{asset('/agency/tut/video')}}">
                                    <div class="border text-center py-2">
                                        <div class="text-dark" style="font-size:50px"><i class="fas fa-play-circle"></i> </div>
                                        <h6>Video Hướng dẫn</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <a href="{{asset('/agency/tut/sales')}}">
                                    <div class="border text-center py-2">
                                        <div class="text-dark" style="font-size:50px"><i class="fas fa-shopping-bag"></i> </div>
                                        <h6>Cách bán hàng</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <a href="{{asset('/agency/tut/file')}}">
                                    <div class="border text-center py-2">
                                        <div class="text-dark" style="font-size:50px"><i class="fas fa-book"></i> </div>
                                        <h6>Tài liệu hướng dẫn</h6>
                                    </div>
                                </a>
                            </div>
                        
                            <div class="col-md-3 col-6 mb-3">
                                <a href="{{asset('/agency/noti')}}">
                                    <div class="border text-center py-2">
                                        <div class="text-dark" style="font-size:50px"><i class="fas fa-info-circle"></i> </div>
                                        <h6>Thông báo ({{$noti_count}})</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <a href="{{asset('/agency/policy')}}">
                                    <div class="border text-center py-2">
                                        <div class="text-dark" style="font-size:50px"><i class="fas fa-portrait"></i> </div>
                                        <h6>Điều khoản</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- thong bao  --}}
                    <div class="col-md-6">
                        <h3>Thông báo</h3>
                        <hr>
                        <div class="">
                            @foreach($noti_list as $val)
                                <div class="">
                                    <a href="{{ asset('agency/noti/'.$val->id)}}">{{$val->title}}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endcan
        </section>
   </div>
@endsection

