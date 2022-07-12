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
               <h3 class="box-title">Danh sách thanh toán - tổng {{number_format($pay_history->sum('price'))}} đ</h3>
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
                       <th scope="col" class="text-center">Ngày</th>
                  
                       <th scope="col" class="text-center"></th>
                      
                    </tr>
                    @if(count($pay_history) != 0)
                        @foreach($pay_history as $key => $val)
                            
                                <tr>
                                    <td class="">
                                        {{$key+1}}
                                    </td>
                                    <!-- thong  -->
                                    <td class="">
                                        <b>
                                            <a target="_blank" href="{{asset('admin/user/'.$val->f_user->user_type_id.'?search='.$val->f_user->coupon.'&search_feild=coupon')}}">
                                                {{$val->f_user->name}}
                                            </a>
                                        </b>
                                     
                                    </td>
                                    {{-- ngan hang  --}}
                                    <td>
                                        {{$val->f_bank->ngan_hang}} | {{$val->f_bank->so_tai_khoan}} | {{$val->f_bank->ten_tai_khoan}}
                                    </td>
                                    {{-- số đơn  --}}
                                    <td class="text-center">
                                        {{$val->count_order}}
                                    </td>
                                    {{-- phan tram  --}}
                                    <td class="text-center">
                                        {{$val->percen}} %
                                    </td>
                                    {{-- Doanh số  --}}
                                    <td class="text-center">
                                        {{number_format($val->price_sales)}} đ
                                    </td>
                                    {{-- hoa hong  --}}
                                    <td class="text-center">
                                        {{number_format($val->price)}} đ
                                    </td>
                                    {{-- chua thanh toan  --}}
                                    <td class="text-center">
                                        
                                        <?php 
                                            $date = date_create($val -> created_at);
                                            echo date_format($date,'d/m/Y').'<br />';
                                            echo date_format($date,'H:i:s');
                                        ?>
                                    </td>
                                
                                    <!-- thanh toan -->
                                    <td class="text-center">
                                        
                                            <a  class="btn btn-sm btn-danger text-white" style="cursor:pointer" data-toggle="modal" data-target="#call_payed_{{$val -> id}}">
                                               Xóa Lịch sử
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
                                                        Bạn có chắc chặn muốn xóa không ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Đóng</button>
                                                        <a href="{{asset('admin/pay/del_history/'.$val->id)}}" class="btn btn-sm btn-primary">Xóa lịch sử</a>
                                                    </div>
                                                </div>    
                                            </div>
                                        
                                    </td>
                              
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
                {{$pay_history->appends(request()->input()) ->links()}}
            </div>
           
          </div>
  
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection