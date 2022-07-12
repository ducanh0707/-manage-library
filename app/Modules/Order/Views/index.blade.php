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
                        <a href="{{asset('admin/order/')}}" class="btn btn-primary btn-sm">Tất cả đơn hàng</a>
                        <a href="{{asset('admin/order/?status=waiting&type=thue')}}" class="btn btn-success btn-sm">Đơn chờ nhận sách thuê</a>
                        <a href="{{asset('admin/order/?status=received&type=thue')}}" class="btn btn-success btn-sm text-white&type=thue">Đã nhận sách thuê</a>
                        <a href="{{asset('admin/order/?status=returned&type=thue')}}" class="btn btn-success btn-sm">Đã trả sách thuê</a>

                        <a href="{{asset('admin/order/?status=buy-waiting&type=mua')}}" class="btn btn-info btn-sm">Đơn chờ mua</a>
                        <a href="{{asset('admin/order/?status=done&type=mua')}}" class="btn btn-info btn-sm">Đơn đã mua</a>
                        <a class="btn btn-sm btn-primary" href="{{asset('admin/order/export')}}">Tải file</a>

                    
                    
                    </div>
                    <div class="col-md-4">
                        <form action="{{asset('admin/order')}}" method="Get">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" name="search" class="form-control pull-right"
                                        value="@if(isset($_GET['search'])) {{$_GET['search']}} @endif"
                                        placeholder="Tìm kiếm">
                                </div>
                                <div class="col-md-4">
                                    <select name="search_feild" class="form-control">
                                        <option value="email" @if(isset($_GET['email'])) {{'selected'}} @endif>Email
                                        </option>
                                        <option value="tel" @if(isset($_GET['tel'])) {{'selected'}} @endif>Số điện thoại
                                        </option>
                                        <option value="name" @if(isset($_GET['name'])) {{'selected'}} @endif>Tên
                                        </option>
                                        <option value="coupon" @if(isset($_GET['coupon'])) {{'selected'}} @endif>Coupon
                                        </option>
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
                        <h3 class="box-title">Tổng số {{count($order)}} đơn hàng 
                            {{-- | Tổng giá trị: <span
                                class="text-danger">{{number_format($order->sum('price_total'))}} đ</span> --}}
                            </h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <form action="{{asset('admin/order/action')}}" method="POST">
                            <table class="table table-hover">
                                <tr>
                                    @can('order_edit')
                                    <th scope="col" width="1%"><input type="checkbox" value="" onClick="toggle(this)">
                                    </th>
                                    @endcan
                                    <th>Mã</th>
                                    <th>Thông tin</th>
                                  
                    
                                    <th>Sản phẩm</th>
                                    <th>Địa chỉ</th>
                                    
                                    <th>Ngày nhận</th>
                                    <th>Thời gian mượn</th>
                                    <th>Ngày trả</th>
                                    
                                    <th>Trạng thái</th>
                                    <th class="text-center">Bình luận</th>
                                    <th class="text-center">Ngày</th>
                                    @can('order_edit')
                                    <th class="text-center"></th>
                                    @endcan
                                </tr>
                                @if(count($order) != 0)
                                @foreach($order as $key => $val)
                                <tr>
                                    @can('order_edit')
                                    <td><input type="checkbox" value="{{$val->id}}" name="check[]"></td>
                                    @endcan
                                     <td class="">
                                        M_{{$val->id}}
                                    </td>
                                    <td class="">
                                        {{$val->name}} <br>
                                         {{$val->tel}}
                                    </td>
                                 
                                    <td class="">
                                        {{$val->F_book->name}}
                                    </td>
                                    <td class="">
                                        {{$val->address}}
                                    </td>
                                    {{-- ngay nhan  --}}
                                    <td>
                                     
                                        <?php 
                                            if($val ->rent_date){
                                                $rent_date = date_create($val ->rent_date);
                                                echo date_format($rent_date,'d/m/Y').'<br />';
                                                echo date_format($rent_date,'H:i:s');
                                            }
                                        ?>
                                        
                                    </td> 
                                    <td>
                                        <?php 
                                            if($val ->time_rent){
                                                $time_rent= date_create($val ->time_rent);
                                                echo date_format($time_rent,'d/m/Y').'<br />';
                                                    echo date_format($time_rent,'H:i:s');
                                            }
                                        ?>
                                    </td>
                                    {{-- ngay tra --}}
                                    <td>
                                        <?php 
                                            if($val ->pay_date){
                                                $pay_date= date_create($val ->pay_date);
                                                echo date_format($pay_date,'d/m/Y').'<br />';
                                                    echo date_format($pay_date,'H:i:s');
                                            }
                                        ?>
                                    </td>
                                    {{-- tang thai  --}}
                                    <td class="">
                                        @if($val->status == 'waiting')
                                            <span class="text-danger">Chờ nhận sách</span>
                                        @elseif($val->status == 'received')
                                            <span class="text-warning">Đã nhận sách</span>
                                        @elseif($val->status == 'returned')
                                            <span class="text-success">Đã trả</span>
                                        @elseif($val->status == 'buy-waiting')
                                            <span class="text-success">Chờ mua</span>
                                        @elseif($val->status == 'done')
                                            <span class="text-success">Đã mua</span>
                                       
                                        @endif
                                        
                                        <br>
                                        @can('order_edit')
                                        <select name="" id="change_status_{{$val->id}}" class="">
                                  
                                            @if($val->type == 'thue')
                                                <option value="waiting" @if($val->status == 'waiting') selected @endif>Chờ nhận sách</option>
                                                <option value="received" @if($val->status == 'received') selected @endif>Đã nhận sách</option>
                                                <option value="returned" @if($val->status == 'returned') selected @endif>Đã trả</option>
                                            @else 
                                                <option value="buy-waiting" @if($val->status == 'buy-waiting') selected @endif>Chờ mua</option>
                                                <option value="done" @if($val->status == 'done') selected @endif>Đã mua</option>
                                            @endif


                                        </select>
                                        <script>
                                            $('#change_status_{{$val->id}}').change(function () {
                                                var status = $(this).val();
                                                var id = '{{$val->id}}';
                                                var url = '{{asset("admin/order/status/")}}/' + id + '/' +
                                                    status;
                                                window.location.replace(url);
                                            });

                                        </script>
                                        @endcan

                                    </td>
                                    {{-- binh laun--}}
                                    <td class="text-center">
                                       
                                         <a target="_blank" href="{{asset($val->f_book->url.'.html#comment_list')}}">Xem BL</a>

                                    </td>

                                    <td class="text-center">
                                        <?php 
                                        $date = date_create($val -> created_at);
                                        echo date_format($date,'d/m/Y').'<br />';
                                        echo date_format($date,'H:i:s');
                                    ?>
                                    </td>
                                    <td class="text-center">
                                        @can('order_edit')


                                        <!-- xoa -->
                                        <a href="" data-toggle="modal" data-target="#call_del_{{$val -> id}}">
                                            <i class="fa fa-trash text-danger"></i>
                                        </a>
                                        <div class="modal fade" id="call_del_{{$val -> id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"><i class="fa fa-trash text-danger"></i>
                                                            Bạn có chắc chắn muốn xóa?</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-left">
                                                        <!-- id thuoc tinh -->
                                                        <b>Thông tin xóa: </b> {{$val -> name}}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                            data-dismiss="modal">Đóng</button>
                                                        <a href="<?php echo url()->current().'/del/'.$val->id; ?>"
                                                            role="button" class="btn btn-danger">Ok Xóa</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- sua  -->
                                        <a href="" data-toggle="modal" data-target="#call_edit_{{$val -> id}}">
                                            <i class="fa fa-edit text-primary"></i>
                                        </a>

                                        @endcan
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
                            @can('order_edit')
                        
                            @endcan
                            {{-- model sua  --}}
                            @foreach($order as $key => $val)
                            <div class="modal fade" id="call_edit_{{$val -> id}}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="exampleModalCenterTitle"><i
                                                    class="text-danger fa fa-edit"></i> Sửa thể loại</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-left">
                                            <form action="{{asset('admin/order/edit/'.$val->id)}}" method="POST"
                                                enctype="multipart/form-data">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Họ và tên</label>
                                                            {{F_input_basic('text',$val->name,'name','','form-control','','')}}
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Số điện thoại</label>
                                                            {{F_input_basic('text',$val->tel,'tel','','form-control','','')}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            {{F_input_basic('text',$val->email,'email','','form-control','','')}}
                                                        </div>
                                                    </div>

                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-secondary"
                                                data-dismiss="modal">Đóng</button>
                                            <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                                        </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
            {{$order->appends(request()->input()) ->links()}}
        </div>
        <script language="JavaScript">
            function toggle(source) {
                checkboxes = document.getElementsByName('check[]');
                for (var i = 0, n = checkboxes.length; i < n; i++) {
                    checkboxes[i].checked = source.checked;
                }
            }

        </script>
</div>

</div>
</div>
</section>
<!-- /.content -->
</div>
@endsection
