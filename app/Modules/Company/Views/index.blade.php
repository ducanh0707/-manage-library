@extends('V_backend.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh mục NXB
            <small><a href="#" data-toggle="modal" data-target="#new_company" class="btn btn-primary btn-sm">Thêm
                    mới</a></small>
            {{-- <small><a href="#" data-toggle="modal" data-target="#new_multi" class="btn btn-danger  btn-sm">Thêm nhiều</a></small> --}}
        </h1>
    </section>
    @include('Company::IV_modal_company_new')
    @include('Company::IV_modal_company_multi')
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
                                <th>Mã NXB</th>
                                <th>Tên NXB</th>
                                <th>Địa chỉ</th>
                                <th>Mô tả</th>
                                <th>Trạng thái</th>

                                <th></th>
                                <th>id</th>
                            </tr>
                            @if(count($company) != 0)
                            @foreach($company as $key => $val)

                            <tr>
                                <td class="">
                                    {{$key+1}}
                                </td>
                                <td class="">
                                    {{$val->code}}
                                    </b>
                                </td>
                                <td class="">
                                    <b data-toggle="modal" data-target="#edit_company_{{$val->id}}">
                                        {{$val->name}}
                                    </b>

                                </td>
                                <td class="">

                                    {{$val->address}}

                                </td>
                                <td class="">

                                    {{$val->des}}

                                </td>
                                <td class="">

                                    {{$val->status}}

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
                                    <!-- xem -->
                                    <a target="_blank" href="<?php echo asset($val->url); ?>" target="_blank">
                                        <i class="fa fa-eye text-success"></i>
                                    </a>
                                    <div class="modal fade" id="edit_company_{{$val->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <form action="<?php echo asset('admin/company/edit/'.$val->id) ?>" method="post"
                                            enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                                            <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Sửa danh
                                                            mục</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <!-- mã NXB -->
                                                                <div class="form-group">
                                                                    <label for="name_company">Tên NXB</label>
                                                                    <input value="<?php echo $val -> code ?>"
                                                                        type="text" class="form-control " id="code"
                                                                        placeholder="Bạn điền tên danh mục" name="code"
                                                                        onkeyup="ChangeToSlug_store();">
                                                                </div>
                                                                <!-- Dịa chỉ NXB -->
                                                                <div class="form-group">
                                                                    <label for="name_company">Địa chỉ</label>
                                                                    <input value="<?php echo $val -> address ?>"
                                                                        type="text" class="form-control " id="address"
                                                                        placeholder="Bạn điền tên danh mục"
                                                                        name="address" onkeyup="ChangeToSlug_store();">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <!-- tên NXB -->
                                                                <div class="form-group">
                                                                    <label for="name_company">Tên NXB</label>
                                                                    <input value="<?php echo $val -> name ?>" type="text"
                                                                        class="form-control " id="name"
                                                                        placeholder="Bạn điền tên danh mục" name="name"
                                                                        onkeyup="ChangeToSlug_store();">
                                                                </div>
                                                                <!-- mô tả danh muc -->

                                                                <div class="form-group">
                                                                    <label for="name_company_seo">Mô tả ngắn</label>
                                                                    <textarea class="form-control"
                                                                        name="des"><?php echo $val->des; ?></textarea>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Đóng</button>
                                                        <button type="submit" class="btn btn-primary">Gửi</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </td>

                                <td class="">

                                    {{$val->id}}

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
