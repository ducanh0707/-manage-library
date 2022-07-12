@extends('V_backend.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                <form clas="form-inline" action="{{url()->current()}}" method="get">
                    <div class="row">
                        <div class="col-md-2">
                            <label class="text-white">Từ ngày</label>
                            <input type="text" class="form-control" name="star_Time"  id="star_Time" autocomplete="off" value="@if(isset($_GET['created_at'])){{$_GET['created_at']}}@endif">
                            <script>
                                $('#star_Time').datepicker({
                                    format: 'dd-mm-yyyy',
                                    autoclose: true
                                });
                            </script>
                        </div>
                        <div class="col-md-2">
                            <label class="text-white">Đến ngày</label>
                            <input type="text" class="form-control" name="end_Time" id="end_Time" autocomplete="off" value="@if(isset($_GET['update_at'])){{$_GET['update_at']}}@endif">
                            <script>
                                $('#end_Time').datepicker({
                                    format: 'dd-mm-yyyy',
                                    autoclose: true
                                });
                            </script>
                        </div>
                        <div class="col-md-2">
                           <br>
                             <button class="btn  btn-primary  mt-2" type="submit">Lọc ngày</button>
                            <a href="{{asset('admin/accountant')}}" class="btn btn-light mt-2">Xóa lọc</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
           
            <div class="col-md-8">
                <h2>
                    Kế toán
                    <small><a href="#" data-toggle="modal" data-target="#new_deposits" class="btn btn-primary  btn-sm">Thêm cọc</a></small>
                    <small><a href="#" data-toggle="modal" data-target="#new_service" class="btn btn-info  btn-sm">Thêm phí dịch vụ</a></small>
                    <small><a href="#" data-toggle="modal" data-target="#new_buy" class="btn btn-success  btn-sm">Thêm mua sách</a></small>
                </h2>
            </div>
          
        </div>

    </section>
    @include('Accountant::IV_modal_deposits_new')
    @include('Accountant::IV_modal_service_new')
    @include('Accountant::IV_modal_buy_new')
    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh mục </h3>
                        <div class="box-tools">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <table class="table table-hover">
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>

                                <th>SĐT</th>
                                <th>Loại</th>
                                <th>Trị giá</th>
                                <th>Ngày tạo</th>
                                <td></td>
                            </tr>
                            @if(count($accountant) != 0)
                            @foreach($accountant as $key => $val)
                            <tr>
                                <td class="">
                                    {{$key+1}}
                                </td>
                                <td class=" ">
                                
                                    <a href="{{asset('admin/accountant/edit/'.$val->id)}}">
                                        {{$val->f_user->name}}
                                    </a>

                                   
                                </td>
                                <td class="">
                                    {{$val->f_user->tel}}
                                </td>
                                {{-- loai  --}}
                                <td class="">
                                    @if($val->type == 'deposits')
                                  
                                    Đặt cọc
                                       
                                    
                                    @elseif($val->type == 'service')
                                        Phí dịch vụ 
                                    @elseif($val->type == 'buy') 
                                        Mua sách
                                    @endif
                                </td>
                                <td class="">
                                    {{$val->money}}
                                </td>
                                <td class="" id="">
                                     <?php 
                                            $date = date_create($val -> created_at);
                                            echo date_format($date,'d/m/Y').'<br />';
                                            echo date_format($date,'H:i:s');
                                        ?>
                                    
                                </td>
                                
                                <td>
                                    <!-- trang thai -->
                                    <?php echo F_change_status($val) ?>
                                    <!-- xoa -->
                                    <a href="" data-toggle="modal" data-target="#call_del_{{$val->id}}">
                                        <i class="fa fa-trash text-danger"></i>
                                    </a>
                                    <!-- modal xoa  -->
                                    <div class="modal fade" id="call_del_{{$val->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><i class="fa fa-trash text-danger"></i> Bạn
                                                        có chắc chắn muốn xóa?</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <!-- id thuoc tinh -->
                                                    <b>Thông tin xóa: </b>{{$val->f_user->name}}
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
                                    <!-- xem -->
                                   
                                        {{-- @include('Accountant::IV_modal_view') --}}
                                   
                                </td>
                            
                            </tr>
                            @endforeach
                            @endif

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
