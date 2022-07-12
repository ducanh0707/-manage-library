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
                    <div class="box-header">
                        <h2 class="box-title text-white">{{$title}} </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form clas="form-inline" action="{{url()->current()}}" method="get">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="text-white">Từ ngày</label>
                                    <input type="text" class="form-control" name="starTime" id="starTime" autocomplete="off" value="@if(isset($_GET['starTime'])){{$_GET['starTime']}}@endif">
                                    <script>
                                        $('#starTime').datepicker({
                                            format: 'dd-mm-yyyy',
                                            autoclose: true
                                        });
                                    </script>
                                </div>
                                <div class="col-md-2">
                                    <label class="text-white">Đến ngày</label>
                                    <input type="text" class="form-control" name="endTime" id="endTime" autocomplete="off" value="@if(isset($_GET['endTime'])){{$_GET['endTime']}}@endif">
                                    <script>
                                        $('#endTime').datepicker({
                                            format: 'dd-mm-yyyy',
                                            autoclose: true
                                        });
                                    </script>
                                </div>
                                <div class="col-md-2">
                                   <br>
                                     <button class="btn  btn-primary  mt-2" type="submit">Lọc ngày</button>
                                    <a href="{{asset('admin/report')}}" class="btn btn-light mt-2">Xóa lọc</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-8">
                        <a href="{{asset('admin/report/')}}" class="btn btn-info btn-sm">Tất cả</a>
                        <a href="{{asset('admin/report/?status=returned&type=thue')}}" class="btn btn-success btn-sm">Đã thuê</a>
                        <a href="{{asset('admin/report/?status=done&type=mua')}}" class="btn btn-primary btn-sm">Đã mua</a>


                    </div>
                    <div class="col-md-4">
                        <form action="{{asset('admin/report')}}" method="Get">
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
                        @if( Auth::user()->user_type_id=='1')
                            <h3 class="box-title">Tổng số {{count($report)}} đơn hàng | Tổng giá trị: <span
                                class="text-danger">{{number_format($report->where('status','done')->sum('price_total'))}} đ</span></h3>
                        
                        @elseif( Auth::user()->user_type_id= '2' or Auth::user()->user_type_id= '4' or Auth::user()->user_type_id= '5' or Auth::user()->user_type_id= '6' )
                            <h3 class="box-title">Tổng số {{count($report)}} đơn hàng | Hoa hồng đại lí: <span
                                class="text-danger">{{number_format($report->where('status','done')->sum('price_total'))}} đ</span></h3>
                        
                        @endif
                        
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <form action="{{asset('admin/report/action')}}" method="POST">
                            <table class="table table-hover">
                                <tr>
                                    <th>Mã đơn</th>
                                    <th>Họ tên</th>
                                    <th>ĐT khách </th>
                                    <th>Loại</th>
                                    <th>Giá</th>
                                    <th>Ngày</th>

                                </tr>
                                @if(count($report) != 0)
                                    @foreach($report as $key => $val)
                                        <tr>
                                            <td class="">
                                                M_{{$val->id}}
                                            </td>
                                             <td class="">
                                                @if(isset($val->F_user)){{$val->F_user->name}}@endif
                                            </td>
                                            <td class="">
                                                @if(isset($val->F_user)){{$val->F_user->tel}}@endif
                                            </td>
                                            
                                            <td class="">
                                                @if($val->type == 'thue')
                                                    <span class="text-success"> Đã Thuê</span> 

                                                       
                                                @else
                                                    <span class="text-primary"> Đã Mua</span>
                                                @endif
                                            </td>
                                            <td> 
                                                @if($val->type == 'mua')
                                                     {{number_format($val->price_total)}} đ
                                                
                                                @endif
                                               
                                            </td>
                                            <td> 
                                                    <?php 
                                                        $date = date_create($val -> created_at);
                                                        echo date_format($date,'d/m/Y').'<br />';
                                                        echo date_format($date,'H:i:s');
                                                    ?>
                                               
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
                        </form>
                    </div>
                </div>
            </div>
        
            </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
            {{$report->appends(request()->input()) ->links()}}
        </div>
</div>
</section>
<!-- /.content -->
</div>
@endsection
