@extends('V_backend.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Hoa hồng đại lí
            <small><a href="#" data-toggle="modal" data-target="#commission_new" class="btn btn-primary btn-sm">Thêm
                    mới</a></small>
            {{-- <small><a href="#" data-toggle="modal" data-target="#new_multi" class="btn btn-danger  btn-sm">Thêm nhiều</a></small> --}}
        </h1>
    </section>
    @include('AdminUser::IV_Modal_commission_new')

    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Hạn mức hoa hồng: {{$user->name}} </h3>
                        <div class="box-tools">

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <table class="table table-hover">
                            <tr>
                                <th>STT</th>
                     
                                <th>Doanh số từ</th>
                                <th>Đến</th>
                
                                <th>Hoa hồng</th>
                                <th></th>
                            </tr>
                            {{-- @if(count($comm) != 0) --}}
                            @foreach($comm as $key => $val)
                            <tr>
                                <td class="">
                                    {{$key+1}}
                                </td>
                             

                                  
                                </td>
                                <td class="">
                                    {{number_format($val->han_muc_min)}} đ
                                </td>
                                <td class="">
                                    {{number_format($val->han_muc_max)}} đ
                                </td>
                             
                                <td class="">
                                    {{$val->commission.'%'}}
                                </td>

                           
                                <td>
                                
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
                                                    <b>Thông tin xóa: </b>{{$val->name}}
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
                                
                                    <a href="" data-toggle="modal" data-target="#commission_{{$val->id}}">
                                        <i class="fa fa-edit text-infor"></i>
                                    </a>
                                    @include('AdminUser::IV_Modal_commission')
                                </td>
                            </tr>
                            @endforeach
                            {{-- @endif --}}

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
