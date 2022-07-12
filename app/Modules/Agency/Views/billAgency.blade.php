@extends('V_backend.index')
@section('content')
    <div class="content-wrapper">

    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12"> @include('Agency::inc_menu_bill')
               
            </div>
        </div>
      <!-- /.row -->
      <div class="row">
       
        <div class="col-md-12 mt-3">
          <div class="box">
            <div class="box-header">
                <h3>Thông tin thanh toán</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                       <th scope="col">Thông tin</th>
          
                       <th scope="col" class="text-center">Số đơn</th>
                       <th scope="col" class="text-center">%</th>
                       <th scope="col" class="text-center">Doanh số</th>
                       <th scope="col" class="text-center">Hoa hồng</th>
                       <th scope="col" class="text-center">Đơn</th>
                       <th scope="col" class="text-center">Tổng đơn</th>
                  
                       <th scope="col" class="text-center"></th>
                      
                    </tr>
                    @if($user)
                        @php $val = $user @endphp
                                <tr>
                                
                                    <!-- thong  -->
                                    <td class="">
                                        <b>
                                            <a target="_blank" href="{{asset('admin/user/'.$val->user_type_id.'?search='.$val->coupon.'&search_feild=coupon')}}">
                                                {{$val->name}}</b> | {{$val->coupon}}
                                            </a>
                                        </b>
                                     
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
                                        <a target="_blank" href="{{asset('agency/order?status=payed&status_agency=waiting')}}">Xem</a>
                                    </td>
                                    {{-- don hang  --}}
                                    <td class="text-center">
                                        <a target="_blank" href="{{asset('agency/order')}}">Xem</a>
                                    </td>
                                
                                  
                                
                            </tr>
                        
                     
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
           
          </div>
  
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection