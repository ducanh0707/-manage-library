@extends('V_backend.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý sách
            <small><a href="{{asset('admin/book/new')}}" class="btn btn-primary btn-sm">Thêm
                    mới</a></small>
            <small><a href="#" data-toggle="modal" data-target="#new_multi" class="btn btn-danger  btn-sm">Thêm
                    nhiều</a></small>
        </h1>
    </section>
    @include('Book::IV_modal_book_multi')
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
                                <th>Mã</th>
                                <th>Hình ảnh</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Nhà xuất bản </th>
                                <th>Thể loại </th>
                                <th></th>
                                <th>id</th>
                            </tr>
                            @if(count($book) != 0)
                            @foreach($book as $key => $val)
                            <tr>
                                <td class="">
                                    {{$key+1}}
                                </td>
                                <td class="">
                                    {{$val->code}}
                                </td>
                                <td class="">
                                    @if($val->img)
                                    <img width="30px" src="{{asset('/source/book/'.$val->img)}}" />
                                    @else
                                    <img width="30px" src="{{asset('img_webux/noimg.jpg')}}" />
                                    @endif
                                </td>
                                <td class="">
                                    <a href="{{asset('admin/book/edit/'.$val->id)}}" class="text-dark font-weight-bold">
                                        {{$val->name}}
                                    </a>
                                </td>
                                <td class="">
                                    {{$val->price}}
                                </td>

                                <td class="">
                                    @if(isset($val->F_company->name))
                                    {{$val->F_company->name}}
                                    @endif
                                </td>
                                <td class="">
                                    <?php
                                    if(isset($val -> f_cat)){
                                        foreach($val -> f_cat as $k => $cat_r){
                                            if($k > 0){echo ', ';}echo $cat_r->name;
                                        }
                                    }
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
                                    <div class="modal fade " id="edit_book_{{$val->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <form action="<?php echo asset('admin/book/edit/'.$val->id) ?>" method="post"
                                            enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Sửa danh
                                                            mục</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body modal-xl">


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
