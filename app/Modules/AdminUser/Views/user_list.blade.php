@extends('V_backend.index')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
                Danh sách thành viên: {{$type->name}} 
                @if(isset($user_parent->name)){{$user_parent->name}}
                    -
                    @if($user_parent->account_type == 'org')
                        @if(isset($user_parent->f_level->name))
                            {{$user_parent->f_level->name}}
                        @endif
                        -
                        @if(isset($user_parent->f_tinh->name))
                            @if(isset($user_parent->f_huyen->name))
                                {{$user_parent->f_huyen->name}}
                            - 
                            @endif
                            
                            {{$user_parent->f_tinh->name}}
                        @endif
                    @endif 
                @endif 
        </h1>
        <div class="mt-3">
            
            @if($user_parent_id > 0)
                <a href="{{asset('admin/user/'.$type->id.'/parent/'.$user_parent->parent_id)}}" class="btn btn-info btn-sm">Quay lại cấp trên</a>
            @else 
                <a href="{{asset('admin/user/type/0')}}" class="btn btn-info btn-sm">Quay lại </a>
            @endif
            {{-- <a href="{{asset('admin/user/'.$type->id.'/parent/0')}}" class="btn btn-success btn-sm">Thành viên</a> --}}
            
            <a href="{{asset('admin/user/'.$type->id.'/parent/'.$user_parent_id.'/new')}}" class="btn btn-danger btn-sm">Thêm mới</a>
        </div>
        <div class="mt-3">
            @if($type_id == 5)
                <form clas="form-inline" action="{{url()->current()}}" method="get">
                    <div class="row">
                        {{-- tinh  --}}
                        <div class="col-md-2">
                            <select name="tinh_id" class="form-control form-control-sm"  onchange='this.form.submit();'>
                                <option value="">Tỉnh</option>
                                @foreach($tinh_list as $tinh_f)
                                    <option value="{{$tinh_f->id}}" @if(isset($_GET['tinh_id'])) @if($_GET['tinh_id'] == $tinh_f->id) selected @endif @endif>{{$tinh_f->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- huyen  --}}
                        @if(isset($_GET['tinh_id']))
                            <div class="col-md-2">
                                <select name="huyen_id" id="huyen" class="form-control form-control-sm" onchange='this.form.submit();'>
                                    <option value="">Huyện trống</option>
                                </select>
                                
                            </div>
                            <script>
                                    var tinh_id = "{{$_GET['tinh_id']}}"; 
                                    var huyen_id = "@if(isset($_GET['huyen_id'])){{$_GET['huyen_id']}}@endif";
                                    $.get("{{asset('app/local/huyen')}}/" + tinh_id, function (data) {
                                        $("#huyen").html(data);
                                        $("#huyen").val(huyen_id);
                                    });
                            </script>

                            {{-- truong  --}}
                            @if(isset($_GET['huyen_id']))
                                <div class="col-md-2">
                                    <select name="truong_id" id="truong" class="form-control form-control-sm"  onchange='this.form.submit();'>
                                        <option value="">Trường trống</option>
                                    
                                    </select>
                                    <script>
                                            var huyen_id = "{{$_GET['huyen_id']}}";
                                            var truong_id = "@if(isset($_GET['truong_id'])){{$_GET['truong_id']}}@endif";

                                            $.get("{{asset('app/local/truong_user')}}/" + huyen_id, function (data) {
                                                $("#truong").html(data);
                                                $("#truong").val(truong_id);
                                            });
                                    </script>
                                </div>
                                {{-- lop  --}}
                                @if(isset($_GET['truong_id']))
                                    <div class="col-md-2">
                                        <select name="lop_id" id="lop" class="form-control form-control-sm"  onchange='this.form.submit();'>
                                            <option value="">Lớp trống</option>
                                        
                                        </select>
                                        <script>
                                                var truong_id = "{{$_GET['truong_id']}}";
                                                var lop_id = "@if(isset($_GET['lop_id'])){{$_GET['lop_id']}}@endif";

                                                $.get("{{asset('app/local/lop_user')}}/" + truong_id, function (data) {
                                                    $("#lop").html(data);
                                                    $("#lop").val(lop_id);
                                                });
                                        </script>
                                    </div>
                                @endif
                            @endif
                        @endif
                        
                        {{-- cap do  --}}
                        <div class="col-md-2">
                            <select name="level_id" class="form-control form-control-sm"  onchange='this.form.submit();'>
                                <option value="">Cấp độ</option>
                                @foreach($level_list as $level_f)
                                    <option value="{{$level_f->id}}" @if(isset($_GET['level_id'])) @if($_GET['level_id'] == $level_f->id) selected @endif @endif>{{$level_f->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- chuc danh  --}}
                        <div class="col-md-2">
                            <select name="position_id" class="form-control form-control-sm"  onchange='this.form.submit();'>
                                <option value="">Chức danh</option>
                                @foreach($position_list as $position_f)
                                    <option value="{{$position_f->id}}" @if(isset($_GET['position_id'])) @if($_GET['position_id'] == $position_f->id) selected @endif @endif>{{$position_f->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            @endif
        </div>
        @include('AdminUser::IV_Modal_user_new')
         </section>
    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
                {{-- bo loc  --}}
                @if($user_parent_id == 0)
                    Danh sách
                @else 
                    Đại lý con của: {{$user_parent->name}}
                @endif
                
                <div class="box-tools">
              
                        <form action="{{asset('admin/user/'.$type->id.'/parent/0')}}" method="Get">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" name="search" class="form-control form-control-sm pull-right" value="@if(isset($_GET['search'])) {{$_GET['search']}} @endif" placeholder="Tìm kiếm">
                                </div>
                                <div class="col-md-4">
                                    <select name="search_feild"  class="form-control form-control-sm">
                                        <option value="email" @if(isset($_GET['email'])) {{'selected'}} @endif>Email</option>
                                        <option value="tel" @if(isset($_GET['tel'])) {{'selected'}} @endif>Số điện thoại</option>
                                        <option value="name" @if(isset($_GET['name'])) {{'selected'}} @endif>Tên</option>
                                        <option value="coupon" @if(isset($_GET['coupon'])) {{'selected'}} @endif>Coupon</option>
                                    </select>
                                   
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-sm btn-primary" type="submit">Tìm</button>
                                </div>
                            </div>
                        </form>
                  
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                     <tr>
                        <th scope="col">Ảnh</th>
                        <th scope="col" width="">Thông tin</th>
                        <th scope="col" class="text-center">Cơ quan</th>
                        <th scope="col" class="text-center">Coupon</th>
                        <th scope="col" class="text-center">Đơn hàng</th>
                        <th scope="col" class="text-center">Thanh toán</th>
                        <th scope="col" class="text-center"></th>
                        <th scope="col" class="text-center"><i class="fa fa-edit"></i></th>
                        <th scope="col" width="">ID</th>
                     </tr>
                     @if(count($user) != 0)
                           @foreach($user as $val)
                              <tr>
                                <!-- anh thành vien -->
                                <td>
                                    @if($val->img)
                                        <img width="30px" src="{{asset('source/user/'.$val->img)}}" />
                                    @else
                                        <img class="" width="30px" src="{{asset('img_webux/noimg.jpg')}}" />
                                    @endif
                                </td>
                                
                                <!-- thong tin  -->
                                <td class="">
                                    <a href="{{asset('admin/user/'.$type_id.'/parent/'.$val->id)}}">
                                        {{$val->email}}
                                    </a><br>
                                    {{$val -> name}}<br>
                                    {{$val -> tel}}
                                </td>
                            
                               {{-- co quan  --}}
                               <td >
                                    @if(isset($val->f_position->name))
                                        <b>Cấp bậc:</b> {{$val->f_position->name}}
                                    @endif
                                   {{-- cap truong  --}}
                                    @if(isset($val->f_level->id))
                                        @if($val->f_level->id == '4')
                                            @if(isset($val->f_truong->name))
                                                <br><b>Trường:</b> {{$val->f_truong->name}}
                                                @if(isset($val->f_lop->name))
                                                <br><b>Lớp:</b>  {{$val->f_lop->name}}
                                                @endif
                                            @endif
                                        @endif
                                    @endif
                                </td>
                                {{-- ma  --}}
                                <td class="text-center">
                                    {{$val -> coupon}}
                                </td>
                                
                                {{-- don hang  --}}
                                <td class="text-center">
                                    <a target="_blank" href="{{asset('admin/order/?search='.$val->coupon.'&search_feild=coupon')}}">Xem</a>
                                </td>
                                {{-- ngan hang  --}}
                                <td class="text-center">
                                    <a target="_blank" href="{{asset('admin/pay/?search='.$val->coupon.'&search_feild=coupon')}}">Xem</a>
                                </td>
                                <!-- ngan hang  -->
                                <td class="text-center">
                                    {{-- <a href="{{asset('admin/pay/bank/'.$val->id)}}" class="btn btn-sm btn-info">Ngân hàng</a> --}}
                                </td>
                                <!-- action -->
                                <td class="text-center">
                                    <a href="{{asset('admin/user/commission/'.$val->id)}}" class="btn btn-sm btn-warning">
                                        Hoa hồng
                                    </a>

                                    @if($val->user_type_id == 4)
                                        <a href="{{asset('admin/user/'.$type_id.'/user_tinh/'.$val->id)}}" class="btn btn-sm btn-info">Quản lý</a>
                                    @endif
                                    {{-- sua  --}}
                                    {{-- @if($val->account_type != 'org')
                                        <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit_user_{{$val->id}}">Sửa</a>
                                    @else
                                       
                                    @endif --}}
                                    <a href="{{asset('admin/user/'.$type_id.'/parent/'.$val->parent_id.'/edit/'.$val->id)}}" class="btn btn-sm btn-primary">Sửa</a>
                                    <?php if($val ->id != '1'){ ?>
                                        {{-- Xoa  --}}
                                        <a  href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#del_user_{{$val -> id}}">
                                            Xóa
                                        </a> 
                                      
                                    <?php } ?>
                                  
                                </td>
                                <th scope="col" width="1%">
                                    {{ F_change_status($val)}}    
                                    {{$val->id}}
                                </th>
                            </tr>
                           @include('AdminUser::IV_Modal_user_edit')
                           @include('AdminUser::IV_Modal_user_del')
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
            <div class="box-footer clearfix">
               {{$user->appends(request()->input()) ->links()}}
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