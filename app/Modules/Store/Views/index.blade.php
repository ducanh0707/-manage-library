@extends('V_backend.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">

            <div class="col-md-8">
                <h2>
                    Danh sách kho - Nhà trường
                    {{-- <small><a href="#" data-toggle="modal" data-target="#new_multi" class="btn btn-danger  btn-sm">Thêm nhiều</a></small> --}}
                </h2>
                <a href="#" data-toggle="modal" data-target="#new_store" class="btn btn-primary btn-sm">Thêm kho</a>
            </div>
            <div class="col-md-4">
                <a class="btn btn-sm btn-success" href="{{asset('admin/store?type=mam-non')}}">TV Mầm non</a>
                <a class="btn btn-sm btn-success" href="{{asset('admin/store?type=tieu-hoc')}}">TV Tiểu học</a>
                <a class="btn btn-sm btn-success" href="{{asset('admin/store?type=thcs')}}">TV THCS</a>
                <a class="btn btn-sm btn-success" href="{{asset('admin/store?type=cafe')}}">TV Cafe</a>
                <a class="btn btn-sm btn-success" href="{{asset('admin/store?type=chung-cu')}}">Chung cứ</a>
            </div>
        </div>

    </section>
    @include('Store::IV_modal_store_new')
    @include('Store::IV_modal_store_multi')
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

                                <th>Quản Lý</th>
                                <th>SĐT</th>


                                <td></td>
                                <th>id</th>
                            </tr>
                            @if(count($store) != 0)
                            @foreach($store as $key => $val)

                            <tr>
                                <td class="">
                                    {{$key+1}}
                                </td>

                                <td class="">
                                    <b data-toggle="modal" data-target="#edit_store_{{$val->id}}">
                                        {{$val->name}}
                                    </b>

                                </td>

                                <td class="">

                                    {{$val->manage}}

                                </td>
                                <td class="">

                                    {{$val->phone}}

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
                                    <div class="modal fade" id="edit_store_{{$val->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <form action="<?php echo asset('admin/store/edit/'.$val->id) ?>" method="post"
                                            enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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
                                                                <!-- ten danh muc -->
                                                                <div class="form-group">
                                                                    <label for="name_store">Tên danh mục</label>
                                                                    <input value="<?php echo $val -> name ?>"
                                                                        type="text" class="form-control " id="name"
                                                                        placeholder="Bạn điền tên danh mục" name="name"
                                                                        onkeyup="ChangeToSlug_store();">
                                                                </div>
                                                                <!-- ten quan lý -->
                                                                <div class="form-group">
                                                                    <label for="manage">Tên quản lý</label>
                                                                    <input value="<?php echo $val -> manage ?>"
                                                                        type="text" class="form-control " id="manage"
                                                                        placeholder="Bạn điền tên danh mục"
                                                                        name="manage" onkeyup="ChangeToSlug_store();">
                                                                </div>
                                                                <!-- sdt quan lý -->
                                                                <div class="form-group">
                                                                    <label for="phone">SĐT Quản Lý</label>
                                                                    <input value="<?php echo $val -> phone ?>"
                                                                        type="text" class="form-control " id="phone"
                                                                        placeholder="Bạn điền tên danh mục"
                                                                        name="phone">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="address_store">Loại</label>
                                                                    <select class="form-control" name="type">
                                                                        <option value="">Thể loại</option>
                                                                        <option value="mam-non" @if($val->type ==
                                                                            'mam-non') selected @endif>TV Mầm non
                                                                        </option>
                                                                        <option value="tieu-hoc" @if($val->type ==
                                                                            'tieu-hoc') selected @endif>TV tiểu học
                                                                        </option>
                                                                        <option value="thcs" @if($val->type == 'thcs')
                                                                            selected @endif>TV THCS</option>
                                                                        <option value="cafe" @if($val->type == 'cafe')
                                                                            selected @endif>Cafe</option>
                                                                        <option value="chung-cu" @if($val->type ==
                                                                            'chung-cu') selected @endif>Chung cư
                                                                        </option>

                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="address_store">Địa chỉ kho </label>
                                                                    <select class="form-control" name="tinh_id"
                                                                        id="tinh_{{$val->id}}">
                                                                        <option value="">Tỉnh</option>
                                                                        @foreach($list_tinh as $tinh_r)
                                                                        <option value="{{$tinh_r->id}} " @if($tinh_r->id
                                                                            == $val->tinh_id) selected
                                                                            @endif>{{$tinh_r->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="address_store">Huyện </label>
                                                                    <select class="form-control" name="huyen_id"
                                                                        id="huyen_{{$val->id}}">
                                                                    </select>
                                                                </div>
                                                                <script>
                                                                    var tinh_id = '{{$val->tinh_id}}';


                                                                    $.get("{{asset('app/local/huyen')}}/" + tinh_id,
                                                                        function (data) {
                                                                            $("#huyen_{{$val->id}}").html(data);
                                                                            var huyen_id = '{{$val->huyen_id}}';
                                                                            $('#huyen_{{$val->id}} option[value=' +
                                                                                huyen_id + ']').attr('selected',
                                                                                'selected');
                                                                        });

                                                                    $('#tinh_{{$val->id}}').change(function () {
                                                                        var tinh_id = $('#tinh_{{$val->id}}')
                                                                            .val();
                                                                        $.get("{{asset('app/local/huyen')}}/" +
                                                                            tinh_id,
                                                                            function (data) {
                                                                                $("#huyen_{{$val->id}}")
                                                                                    .html(data);

                                                                            });
                                                                    });

                                                                </script>
                                                                <div class="form-group">
                                                                    <label for="">Trường</label>
                                                                    <select name="truong_id" id="truong_{{$val->id}}"
                                                                        class="form-control border-radius">
                                                                        <option value="">Trống</option>

                                                                    </select>
                                                                    <script>
                                                                        var huyen_id = '{{$val->huyen_id}}';
                                                                        $.get("{{asset('app/local/truong')}}/" +
                                                                            huyen_id,
                                                                            function (data) {
                                                                                $("#truong_{{$val->id}}").html(
                                                                                data);
                                                                                var truong_id =
                                                                                    '{{$val->truong_id}}';
                                                                                $('#truong_{{$val->id}} option[value=' +
                                                                                    truong_id + ']').attr(
                                                                                    'selected', 'selected');
                                                                            });
                                                                        $('#huyen_{{$val->id}}').change(function () {
                                                                            var huyen_id = $(
                                                                                '#huyen_{{$val->id}}').val();
                                                                            $.get("{{asset('app/local/truong')}}/" +
                                                                                huyen_id,
                                                                                function (data) {
                                                                                    $("#truong_{{$val->id}}")
                                                                                        .html(data);

                                                                                });
                                                                        });

                                                                    </script>
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
