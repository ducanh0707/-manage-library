@extends('V_backend.index')
@section('content')
    <div class="content-wrapper">

    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                @include('Pay::inc_menu')
            </div>
        </div>
        <div class="row">
       
        <div class="col-md-12 mt-3">
          <div class="box">
            <div class="box-header">
               <h3 class="box-title">Danh sách thanh toán</h3>
               <div class="box-tools">
                <form action="{{asset('admin/bank/')}}" method="Get">
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
                                <option value="coupon" @if(isset($_GET['coupon'])) {{'selected'}} @endif>Coupon</option>
                            </select>
                           
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-sm btn-primary" type="submit">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
          
               </div>
            </div>

            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                       <th scope="col">TT</th>
                       <th scope="col">Thông tin</th>
                       <th scope="col">Tài khoản</th>
                       <th scope="col" class="text-center">Số đơn</th>
                       <th scope="col" class="text-center">%</th>
                       <th scope="col" class="text-center">Doanh số</th>
                       <th scope="col" class="text-center">Hoa hồng</th>
                       <th scope="col" class="text-center">Đơn</th>
                       <th scope="col" class="text-center">Tổng đơn</th>
                  
                       <th scope="col" class="text-center"></th>
                      
                    </tr>
                    @if(count($user_list) != 0)
                        @foreach($user_list as $key => $val)
                            <form action="{{asset('admin/pay/payed/'.$val->id)}}" method="post">
                                <tr>
                                    <td class="">
                                        {{$key+1}}
                                    </td>
                                    <!-- thong  -->
                                    <td class="">
                                        <b>
                                            <a target="_blank" href="{{asset('admin/user/'.$val->user_type_id.'?search='.$val->coupon.'&search_feild=coupon')}}">
                                                {{$val->name}}</b> | {{$val->coupon}}
                                            </a>
                                        </b>
                                     
                                    </td>
                                    {{-- ngan hang  --}}
                                    <td>
                                        
                                        <select name="bank_id" class="form-control" style="width:200px">
                                            @foreach($val->f_bank as $bank)
                                                <option value="{{$bank->id}}" @if($bank -> main == 'on') selected @endif>
                                                    {{$bank->ngan_hang}} | {{$bank->so_tai_khoan}} | {{$bank->ten_tai_khoan}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    {{-- số đơn  --}}
                                    <td class="text-center">
                                        {{$val->F_order_agency_waiting->count()}}
                                    </td>
                                    {{-- phan tram  --}}
                                    <td class="text-center">
                                        {{F_get_percen($val->F_order_agency_waiting->count(),$discount)}} %
                                        <input type="hidden" name="percen" value="{{F_get_percen($val->F_order_agency_waiting->count(),$discount)}}">
                                    </td>
                                    {{-- Doanh số  --}}
                                    <td class="text-center">
                                        {{number_format($val->F_order_agency_waiting->sum('price_total'))}} đ

                                    </td>
                                    {{-- hoa hong  --}}
                                    <td class="text-center">
                                        {{F_get_percen_price( $val->F_order_agency_waiting->count(),$discount,$pay_limit,$val->F_order_agency_waiting->sum('price_total'),'html')}}
                                        <input type="hidden" name="price" value="{{F_get_percen_price( $val->F_order_agency_waiting->count(),$discount,$pay_limit,$val->F_order_agency_waiting->sum('price_total'),'value')}}">
                                    </td>
                                    {{-- chua thanh toan  --}}
                                    <td class="text-center">
                                        <a target="_blank" href="{{asset('admin/order/?search='.$val->coupon.'&search_feild=coupon&status=payed&status_agency=waiting')}}">Xem</a>
                                    </td>
                                    {{-- don hang  --}}
                                    <td class="text-center">
                                        <a target="_blank" href="{{asset('admin/order/?search='.$val->coupon.'&search_feild=coupon')}}">Xem</a>
                                    </td>
                                
                                    <!-- thanh toan -->
                                    <td class="text-center">
                                        
                                            <a  class="btn btn-sm btn-danger text-white" style="cursor:pointer" data-toggle="modal" data-target="#call_payed_{{$val -> id}}">
                                                Thanh toán
                                            </a>
                                            {{-- modal  --}}
                                            <div class="modal fade" id="call_payed_{{$val -> id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">   
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle">Xác nhận chuyển khoản</h6>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-left">
                                                            <label for="">Ghi chú thanh toán</label>
                                                            <textarea name="note" class="form-control" ></textarea>
                                                
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Đóng</button>
                                                            <button type="submit" class="btn btn-sm btn-primary">Chuyển khoản</button>
                                                        </div>
                                                    </div>    
                                                </div>    
                                            </div>
                                        
                                    </td>
                                <form>
                            </tr>
                        
                       @endforeach
                    @else
                       <tr>
                          <td colspan="9" class="text-center">
                             <h6>Không có dữ liệu đủ điều kiện lọc</h6>
                          </td>
                       </tr>
                    @endif
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                {{$user_list->appends(request()->input()) ->links()}}
            </div>
           
          </div>
  
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection