@extends('V_backend.index')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
                Thêm mới
        </h1>
        <a href="{{asset('admin/user/'.$type_id.'/parent/'.$user_parent_id)}}" class="btn btn-primary btn-sm">Quay lại</a>
    </section>
    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
        <form action="{{asset('admin/user/'.$type_id.'/parent/'.$user_parent_id.'/new')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
         
            <input type="hidden" name="parent_id" value="{{$user_parent_id}}">
            <div class="row">
                <div class="col-md-6">
                    <!-- tên đây đủ -->
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" class="form-control" id="name" placeholder="Họ tên" name="name" value="{{old('name')}}" >
                    </div>
                    <!-- tên co quan-->
                    <div class="form-group">
                        <label>Tên cơ quan</label>
                        <input type="text" class="form-control"  placeholder="Tên cơ quan" name="org_name" value="{{old('org_name')}}">
                    </div>
                    <!-- so dien thoai -->
                    <div class="form-group">
                            <label>Số điện thoại (*)</label>
                            <input type="text" class="form-control" placeholder="Điện thoại" name="tel" value="{{old('tel')}}" required>
                        </div>
                    <!-- email thanh vien -->
                    <div class="form-group">
                        <label>Email của bạn (*)</label>
                        <input type="email" class="form-control" placeholder="Email thành viên" name="email" value="{{old('email')}}" required>
                    </div>   
                    
                    {{-- dia diem   --}}
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="">Tỉnh thành</label>
                            <select name="tinh_id" id="tinh" class="form-control">
                                <option value="">Trống</option>
                                @foreach($tinh_list as $tinh)
                                <option value="{{$tinh->id}}">{{$tinh->name}}</option>
                                @endforeach
                            </select>
                            
                        </div>
                        <div class="col-md-6">
                            
                            <label for="">Huyện</label>
                            <select name="huyen_id" id="huyen" class="form-control">
                            
                            </select>
                            
                        </div>
                        <script>
                            $('#tinh').change(function () {
                               
                                var tinh_id = $('#tinh').val();
                                $.get("{{asset('app/local/huyen')}}/" + tinh_id, function (data) {
                                    $("#huyen").html(data);

                                });
                            });

                        </script>
                    </div>
                    <div class="form-group row" >
                        <div class="col-md-6">
                            <label for="">Trường</label>
                            <select name="truong_id" id="truong" class="form-control"> 
                                <option value="">Trống</option>
                               
                            </select>
                            <script>
                                $('#huyen').change(function () {
                                   
                                    var huyen_id = $('#huyen').val();
                                    $.get("{{asset('app/local/truong_user')}}/" + huyen_id, function (data) {
                                        $("#truong").html(data);
    
                                    });
                                });
    
                            </script>
                        </div>
                        <div class="col-md-6">
                            <label for="">Lớp</label>
                            <select name="lop_id" id="lop" class="form-control"> 
                                <option value="">Trống</option>
                               
                            </select>
                            <script>
                                $('#truong').change(function () {
                                   
                                    var truong_id = $('#truong').val();
                                    $.get("{{asset('app/local/lop_user')}}/" + truong_id, function (data) {
                                        $("#lop").html(data);
    
                                    });
                                });
    
                            </script>
                        </div>
                      
                    </div>

                    {{-- cap do   --}}
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="">Cấp độ</label>
                                <select name="level_id" class="form-control">
                                    <option value="">Trống</option>
                                    @foreach($level_list as $level)
                                        <option value="{{$level->id}}">{{$level->name}}</option>
                                    @endforeach
                                </select>
                            
                        </div>
                        <div class="col-md-6">
                            <label for="">Chức danh</label>
                            <select name="position_id" id="position" class="form-control">
                                <option value="">Trống</option>
                                @foreach($position_list as $position)
                                        <option value="{{$position->id}}">{{$position->name}}</option>
                                    @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="form-group row phu_huynh" style="display:none">
                        <div class="col-md-6">
                            <label for="">Họ tên bố</label>
                            <input type="type" class="form-control"  name="name_parent">
                            <label for="">Số điện thoại bố</label>
                            <input type="type" class="form-control"  name="tel_parent">
                        </div>
                        <div class="col-md-6">
                            <label for="">Họ tên mẹ</label>
                            <input type="type" class="form-control"  name="name_mother">
                            <label for="">Số điện thoại mẹ</label>
                            <input type="type" class="form-control"  name="tel_mother">
                        </div>
                    </div>
                    <script>
                        $('#position').change(function(){
                            var position = $(this).val();
                            if(position == 10){
                                $('.phu_huynh').css('display','');
                            }else{
                                $('.phu_huynh').css('display','none');
                            }
                        });
                    </script>
                    
                </div>
                <div class="col-md-6">
                        <!-- coupon -->
                    <div class="form-group">
                        <label class="text-danger font-weight-bold">Coupon</label>
                        <input type="text" class="form-control" placeholder="Mã giảm giá" name="coupon" value="{{old('coupon')}}">
                    </div>      
                    <!-- Mat khau  -->
                    <div class="form-group">
                        <label>Mật khẩu(*)</label>
                        <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                    </div>
                    <!-- nhap lai mat khau -->
                    <div class="form-group">
                        <label>Nhập lại mật khẩu(*)</label>
                        <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="password_again">
                    </div>
                   
                    <!-- anh dại diện  -->
                    <div class="form-group">
                        <label class="font-weight-bold">Ngày sinh </label>
                     
                            <input type='text' class="form-control" id="datepicker" value="" name="birthday" autocomplete="off" >
                     
                    </div>

                    <div class="form-group">
                        <b>Trạng thái: </b>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="on" checked>
                            <label class="form-check-label" for="inlineRadio1">Công khai</label>
                        </div>
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="off">
                        <label class="form-check-label" for="inlineRadio2">Khóa</label>
                        </div>
                    </div> 
                    <div class="form-group">
                        <b>Chế độ đại lý </b>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="mode_agency" id="mode_agency_on" value="on" checked>
                            <label class="form-check-label" for="mode_agency_on">Bật</label>
                        </div>
                     
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="mode_agency" id="mode_agency_off" value="off">
                          <label class="form-check-label" for="mode_agency_off">Tắt</label>
                        </div>
                    </div> 
                    <div class="form-group">
                        <b>Phương thức thanh toán hoa hồng cho đại lý </b><br>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="method_pay_agency" id="method_pay_agency_payhand" value="payhand" checked>
                            <label class="form-check-label" for="method_pay_agency_payhand">Thủ công</label>
                        </div>
                     
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="method_pay_agency" id="method_pay_agency_payout" value="payout">
                          <label class="form-check-label" for="method_pay_agency_payout">Thanh toán tự động Payout (OnePay)</label>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label>Ảnh đại diện</label>
                        {{F_input_image('','img','new_user','upload/user')}}
                    </div> 
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <textarea class="form-control"  name="address"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Ghi chú (ghi lại tên cũ của đại lý)</label>
                        <textarea class="form-control"  name="note"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
  </div>
@endsection