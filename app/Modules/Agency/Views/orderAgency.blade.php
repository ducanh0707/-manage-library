@extends('V_backend.index')
@section('content')
    <div class="content-wrapper">

    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12 mb-2">
            <div class="row">
                <div class="col-md-8">
                    <a href="{{asset('agency/order/')}}" class="btn btn-primary btn-sm">Tất cả đơn hàng</a>
                    <a href="{{asset('agency/order/?status=waiting')}}" class="btn btn-danger btn-sm">Đơn chờ xác minh</a>
                    <a href="{{asset('agency/order/?status=waiting_pay')}}" class="btn btn-warning btn-sm text-white">Đơn chờ thanh toán</a>
                    <a href="{{asset('agency/order/?status=payed')}}" class="btn btn-success btn-sm">Đã mua</a>
                    @if(isset($_GET['status']))
                        @if($_GET['status'] == 'payed')
                            ||
                            <a href="{{asset('agency/order/?status=payed&status_agency=payed')}}" class="btn btn-success btn-sm">Đã thanh toán đại lý</a>
                            <a href="{{asset('agency/order/?status=payed&status_agency=waiting')}}" class="btn btn-warning text-white btn-sm">Chưa thanh toán đại lý</a>
                        @endif
                    @endif
                </div>
                <div class="col-md-4">
                    <form action="{{asset('agency/order')}}" method="Get">
                        @csrf
                        <div class="row">
                            <div class="col-md-5">
                                <input type="text" name="search" class="form-control pull-right" value="@if(isset($_GET['search'])) {{$_GET['search']}} @endif" placeholder="Tìm kiếm">
                            </div>
                            <div class="col-md-4">
                                <select name="search_feild"  class="form-control">
                                    <option value="email" @if(isset($_GET['email'])) {{'selected'}} @endif>Email</option>
                                    <option value="tel" @if(isset($_GET['tel'])) {{'selected'}} @endif>Số điện thoại</option>
                                    <option value="name" @if(isset($_GET['name'])) {{'selected'}} @endif>Tên</option>
                                </select>
                               
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-sm btn-primary" type="submit">Tìm kiếm</button>
                            </div>
                        </div>
                        
                       
                    </form>  
                </div>
            </div>
           

            
        </div>
        <div class="col-md-12 mt-3">
          <div class="box">
            <div class="box-header">
               <h3 class="box-title">Tổng số {{count($order)}} đơn hàng | Tổng giá trị: <span class="text-danger">{{number_format($order->sum('price_total'))}} đ</span></h3>
            </div>
            <div class="box-body table-responsive no-padding">
                
                    <table class="table table-hover">
                            <tr>
                         
                                <th>Tên</th>
                                <th>Điện thoại</th>
                                <th>Email</th>
                                <th>Sản phẩm</th>
                                <th>Giá</th>
              
                                <th>Khách hàng</th>
                                <th class="text-center">Đại lý</th>
                                <th class="text-center">Ngày</th>
                            
                        </tr>
                        @if(count($order) != 0)
                            @foreach($order as $key => $val)
                                <tr>
                              
                                <td class="">
                                    {{$val->name}}
                                </td>
                                <td class="">
                                    {{$val->tel}}
                                </td>
                                <td class="">
                                    {{$val->email}}
                                </td>
                                <td class="">
                                    @if(isset($val->f_post->title))
                                        {{$val->f_post->title}}<br>
                                        {{$val->month}} tháng
                                        
                                    @else 
                                        Đăng ký tư vấn
                                    @endif
                                    </td>
                                    <td class="">
                                        Giá: {{number_format($val->price_total)}} đ
                                    </td>
                                   
                                    {{-- khach hang   --}}
                                    <td class="">
                                        @if($val->status == 'waiting')
                                            <span class="text-danger">Chờ xác minh</span>
                                        @elseif($val->status == 'waiting_pay')
                                            <span class="text-warning">Chờ thanh toán</span>
                                        @elseif($val->status == 'payed')
                                            <span class="text-success">Đã mua</span>
                                           
                                        @endif
                                
                                        
                                    </td>
                                    {{-- dai ly  --}}
                                    <td class="text-center">
                                        @if($val->status == 'payed')
                                            @if($val->status_agency == 'waiting')
                                                <span class="text-warning">Chờ thanh toán</span>
                                            @elseif($val->status_agency == 'payed')
                                                <span class="text-success">Đã thanh toán</span>
                                            @endif

                                            
                                        @endif

                                    </td>
                                    
                                    <td class="text-center">
                                        <?php 
                                        $date = date_create($val -> created_at);
                                        echo date_format($date,'d/m/Y').'<br />';
                                        echo date_format($date,'H:i:s');
                                    ?>
                                    </td>
                                    <td  class="text-center">
                                       
                                </td>
                                </tr>
                            @endforeach   
                        @else
                            <tr>
                                <td colspan="9" class="text-center">
                                <h6>Không có đơn hàng</h6>
                                </td>
                            </tr>
                        @endif
                    </table>
                
               
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
               {{$order->appends(request()->input()) ->links()}}
            </div>
           
          </div>
  
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection