@extends('V_backend.index')
@section('content')
<div class="content-wrapper">
    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
        <div class="row mt-3">
            <div class="col-md-12">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#new_multi">Thêm nội dung</a>
            </div>
        </div>
        <div class="modal fade" id="new_multi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <form action="{{asset('admin/comment/content_comment')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Thêm mới</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name_cat">Mỗi nội dung 1 dòng</label>
                                <textarea name="name" class="form-control"></textarea>
                            </div>
                        
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                        </div>
                    </div>
                </div>
           
            </form>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Nội dung bình luận </h3>
                        <div class="box-tools">
                            
                        </div>
                    </div>
                    <div class="box-body table-responsive no-padding">
                  
                            <table class="table table-hover">
                                <tr>
                                   
                                    <th>STT</th>
                                    <th>Nội dung</th>
                                    <th class="text-center">Ngày</th>
                                    <th class="text-center"></th>
                                    <th class="text-center">ID</th>
                                </tr>
                                @if(count($content_comment_list) != 0)
                                @foreach($content_comment_list as $key => $val)
                                <tr>
                                  
                                   
                                    <td>
                                        {{$key+1}}
                                    </td>
                                    <!-- cot tieu de -->
                                    <td class="">
                                        {{$val->name}}
                                    </td>
                                    <!-- cot ngay dang  -->
                                    <td class="text-center">
                                        <?php 
                                        $date = date_create($val -> created_at);
                                        echo date_format($date,'d/m/Y').'<br />';
                                        echo date_format($date,'H:i:s');
                                    ?>
                                    </td>
                                    <td class="text-center">
                                       
                                        <!-- xoa -->
                                        <a href="" data-toggle="modal" data-target="#call_del_{{$val -> id}}">
                                            <i class="fa fa-trash text-danger"></i>
                                        </a>    
                                        <div class="modal fade" id="call_del_{{$val -> id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"><i class="fa fa-trash text-danger"></i> Bạn có chắc chắn muốn xóa?</h5>
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
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                                                        <a href="<?php echo url()->current().'/del/'.$val->id; ?>" role="button" class="btn btn-danger">Ok Xóa</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- sua  --}}
                                        <a href="" data-toggle="modal" data-target="#call_edit_{{$val -> id}}">
                                            <i class="fa fa-edit text-primary"></i>
                                        </a>    
                                       
                                      
                                    </td>
                                    <td class="text-center">{{$val-> id}}</td>
                                </tr>

                                 {{-- popup sua  --}}
                                    <div class="modal fade" id="call_edit_{{$val -> id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <form action="{{asset('admin/comment/content_comment/edit/'.$val->id)}}" method="POST" enctype="multipart/form-data" id="c_form">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"><i class="fa fa-edit text-primary"></i> Sửa bình luận</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-left">
                                                        <div class="form-group">
                                                            <label for="name_cat">Mỗi nội dung 1 dòng</label>
                                                            <textarea name="name" class="form-control">{{$val->name}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                                                        <button type="submit" class="btn btn-primary">Sửa</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                                @else
                                <tr>
                                    <td colspan="9" class="text-center">
                                        <h6>Không có bài viết đủ điều kiện lọc</h6>
                                    </td>
                                </tr>
                                @endif
                            </table>
                      
                    </div>
                   
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        {{$content_comment_list->appends(request()->input()) ->links()}}
                    </div>
                  
                </div>

                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
