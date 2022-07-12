@extends('V_backend.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh sách quyền thành viên

        </h1>
        <div>
            @if(isset($parent->parent_id))
            <small><a href="{{asset('admin/user/type/'.$parent->parent_id)}}" class="btn btn-danger btn-sm">Quay
                    lại</a></small> |
            @endif

            <small><a href="" data-toggle="modal" data-target="#new_role" class="btn btn-primary btn-sm">Thêm mới nhóm
                    quyền</a></small>
            <small><a href="{{asset('admin/user/permission')}}" class="btn btn-success btn-sm">Danh sách
                    quyền</a></small> |
            {{-- <small><a href="{{asset('admin/org/0')}}" class="btn btn-primary btn-sm">Cơ quan</a></small> --}}
            <small><a href="{{asset('admin/position')}}" class="btn btn-primary btn-sm">Chức danh</a></small>
  

        </div>
    </section>
    @include('AdminUser::IV_Modal_role_new')
    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-tools">

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th scope="col" width="6%">STT</th>
                                <th scope="col" width="">Tên nhóm quyền</th>

                                <th class="text-center"></th>
                                <th class="text-center"></th>
                                <th class="text-center"></th>
                                <th></th>
                                <th></th>

                            </tr>
                            @if(count($user_type) != 0)
                            @foreach($user_type as $key => $val)
                            <tr>
                                <td> {{$key+1}} </td>
                                <td class="font-weight-bold">
                                    {{$val->name}}
                                </td>

                                <td class="text-center">
                                    {{$val -> job}}
                                </td>
                                <td>
                                    <a href="{{asset('admin/user/role/'.$val->id.'/permission')}}">Phân quyền</a>
                                </td>
                                <td>
                                    <a href="{{asset('admin/user/'.$val->id.'/parent/0')}}">Thành viên</a>
                                </td>
                                <!-- sua -->
                                <td class="text-center">
                                   
                                    <a href="#" data-toggle="modal" data-target="#edit_role_{{$val->id}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    @include('AdminUser::IV_Modal_role_edit')
                                    <!-- xoa -->

                                    <a href="" data-toggle="modal" data-target="#call_del_{{$val -> id}}">
                                        <i class="fa fa-trash text-danger"></i>
                                    </a>


                                    <!-- form xoa -->
                                    <div class="modal fade" id="call_del_{{$val -> id}}" tabindex="-1" role="dialog"
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
                                                    <input type="hidden" name="id" value="{{$val -> id}}">
                                                    <b>Thông tin xóa: </b> <?php echo $val -> name?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary"
                                                        data-dismiss="modal">Đóng</button>
                                                    <a href="<?php echo asset('admin/user/role/del/'.$val -> id)?>"
                                                        role="button" class="btn btn-danger">Ok Xóa</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>
                                     {{$val->id}}
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
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
