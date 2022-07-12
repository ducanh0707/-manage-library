@extends('V_backend.index')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
                Sửa: {{$user->name}}
        </h1>
        <a href="{{asset('admin/user/'.$type_id.'/parent/'.$user->parent_id)}}" class="btn btn-primary btn-sm">Quay lại</a>
    </section>
    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
        <form action="{{asset('admin/user/'.$type_id.'/parent/'.$user_parent_id.'/edit/'.$user->id)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="parent_id" value="{{$user->parent_id}}">
            <div class="row">
                <div class="col-md-6">
                    <!-- tên đây đủ -->
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" class="form-control" id="name" placeholder="Họ tên" name="name" value="{{$user->name}}" >
                    </div>
                    <!-- tên co quan-->
                    <div class="form-group">
                        <label>Tên cơ quan</label>
                        <input type="text" class="form-control"  placeholder="Tên cơ quan" name="org_name" value="{{$user->org_name}}">
                    </div>
                    <!-- so dien thoai -->
                    <div class="form-group">
                            <label>Số điện thoại (*)</label>
                            <input type="text" class="form-control" placeholder="Điện thoại" name="tel" value="{{$user->tel}}" required>
                        </div>
                    <!-- email thanh vien -->
                    <div class="form-group">
                        <label>Email của bạn (*)</label>
                        <input type="email" class="form-control" placeholder="Email thành viên" name="email" value="{{$user->email}}" required>
                    </div>   
                    
                    {{-- dia diem   --}}
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="">Tỉnh thành</label>
                            <select name="tinh_id" id="tinh" class="form-control">
                                <option value="">Trống</option>
                                @foreach($tinh_list as $tinh)
                                    <option value="{{$tinh->id}}" @if($user->tinh_id == $tinh->id) selected @endif>{{$tinh->name}}</option>
                                @endforeach
                            </select>
                            
                        </div>
                        <div class="col-md-6">
                            <label for="">Huyện</label>
                            <select name="huyen_id" id="huyen" class="form-control">
                                <option value="">Trống</option>
                                @if(count($huyen_list)>1)
                                    @foreach($huyen_list as $huyen)
                                        <option value="{{$huyen->id}}" @if($user->huyen_id == $huyen->id) selected @endif>{{$huyen->name}}</option>
                                    @endforeach
                                @endif
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
                                @if(count($truong_list)>1)
                                    @foreach($truong_list as $truong)
                                        <option value="{{$truong->id}}" @if($user->truong_id == $truong->id) selected @endif>{{$truong->name}}</option>
                                    @endforeach
                                @endif
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
                        {{-- lop  --}}
                        <div class="col-md-6">
                            <label for="">Lớp</label>
                            <select name="lop_id" id="lop" class="form-control"> 
                                <option value="">Trống</option>
                                @if(count($lop_list)>1)
                                    @foreach($lop_list as $lop)
                                        <option value="{{$lop->id}}" @if($user->lop_id == $lop->id) selected @endif>{{$lop->name}}</option>
                                    @endforeach
                                @endif
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
                                        <option value="{{$level->id}}" @if($user->level_id == $level->id) selected @endif>{{$level->name}}</option>
                                    @endforeach
                                </select>
                            
                        </div>
                        {{-- <div class="col-md-6">
                            <label for="">Cơ quan</label>
                            <select name="org_id" class="form-control">
                                <option value="">Trống</option>
                                @foreach($org_list as $org)
                                        <option value="{{$org->id}}" @if($user->org_id == $org->id) selected @endif>{{$org->name}}</option>
                                    @endforeach
                            </select>
                       
                        </div> --}}
                        <div class="col-md-6">
                            <label for="">Chức danh</label>
                            <select name="position_id" id="position" class="form-control">
                                <option value="">Trống</option>
                                @foreach($position_list as $position)
                                    <option value="{{$position->id}}" @if($user->position_id == $position->id) selected @endif>{{$position->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row phu_huynh" @if($user->position_id != 10)style="display:none" @endif>
                        <div class="col-md-6">
                            <label for="">Họ tên bố</label>
                            <input type="type" class="form-control"  name="name_parent" value="{{$user->name_parent}}" >
                            <label for="">Số điện thoại bố</label>
                            <input type="type" class="form-control"  name="tel_parent" value="{{$user->tel_parent}}" >
                        </div>
                        <div class="col-md-6">
                            <label for="">Họ tên mẹ</label>
                            <input type="type" class="form-control"  name="name_mother" value="{{$user->name_mother}}" >
                            <label for="">Số điện thoại mẹ</label>
                            <input type="type" class="form-control"  name="tel_mother" value="{{$user->tel_mother}}" >
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
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <textarea class="form-control"  name="address">{{$user->address}}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                        <!-- coupon -->
                    <div class="form-group">
                        <label class="text-danger font-weight-bold">Coupon</label>
                        <input type="text" class="form-control" placeholder="Mã giảm giá" name="coupon" value="{{$user->coupon}}">
                    </div>      
                    <div class="form-group">
                        <label><i class="fa fa-user-secret"></i> <b>Mật khẩu(*)</b></label>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="on" id="changepass_{{$user->id}}" name="changepass">
                        <label class="form-check-label" for="changepass_{{$user->id}}">
                            Đổi mật khẩu
                        </label>
                        </div>
                        <input type="password" class="form-control pass" placeholder="******" name="password" disabled>
                    </div>
                    <!-- nhap lai mat khau -->
                    <div class="form-group">
                        <label>Nhập lại mật khẩu(*)</label>
                        <input type="password" class="form-control pass" placeholder="******" name="password_again" disabled>
                    </div>
                    <script>
                        $(document).ready(function(){
                            $("#changepass_{{$user->id}}").change(function(){
                            if($(this).is(":checked")){
                                $(".pass").removeAttr('disabled');  
                            }
                            else {
                                $(".pass").attr('disabled','');
                            }
                            });
                        });
                    </script>
                   

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label class="font-weight-bold">Ngày sinh </label> <br />
                            <input type='text' class="form-control" id="datepicker" value="<?php echo date_format(date_create($user->birthday),'d-m-Y'); ?>"  name="birthday" autocomplete="off" >
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Loại tài khoản</label>
                                <select name="account_type" class="form-control">
                                    <option value="person" @if($user->account_type == 'person') selected @endif>Cá nhân</option>
                                    <option value="sale" @if($user->account_type == 'sale') selected @endif>Nhân viên Sale</option>
                                    <option value="org" @if($user->account_type == 'org') selected @endif>Tổ chức</option>
                                </select>
                            </div>
                        </div>
                       
                    </div>
                    <!-- anh dại diện  -->
                    <div class="form-group">
                        <b>Trạng thái: </b>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="status" id="inlineRadio1_{{$user->id}}" value="on" <?php if($user->status == 'on'){echo 'checked';} ?>>
                            <label class="form-check-label" for="inlineRadio1_{{$user->id}}">Công khai</label>
                        </div>
                     
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="status" id="inlineRadio2_{{$user->id}}" value="off" <?php if($user->status == 'off'){echo 'checked';} ?>>
                          <label class="form-check-label" for="inlineRadio2_{{$user->id}}">Khóa</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <b>Chế độ đại lý </b>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="mode_agency" id="mode_agency_on" value="on" <?php if($user->mode_agency == 'on'){echo 'checked';} ?>>
                            <label class="form-check-label" for="mode_agency_on">Bật</label>
                        </div>
                     
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="mode_agency" id="mode_agency_off" value="off" <?php if($user->mode_agency == 'off'){echo 'checked';} ?>>
                          <label class="form-check-label" for="mode_agency_off">Tắt</label>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="font-weight-bold">Phương thức thanh toán hoa hồng cho đại lý </label><br>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="method_pay_agency" id="method_pay_agency_payhand" value="payhand" <?php if($user->method_pay_agency == 'payhand'){echo 'checked';} ?>>
                            <label class="form-check-label" for="method_pay_agency_payhand">Thủ công</label>
                        </div>
                     
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="method_pay_agency" id="method_pay_agency_payout" value="payout" <?php if($user->method_pay_agency == 'payout'){echo 'checked';} ?>>
                          <label class="form-check-label" for="method_pay_agency_payout">Thanh toán tự động Payout (OnePay)</label>
                        </div>
                        <br>
                        @if(count($user->f_bank)<1)
                            <a class="text-danger mb-2" href="{{asset('admin/pay/bank/'.$user->id)}}">
                                Cập nhật tài khoản ngân hàng tại đây
                            </a>
                        @endif
                    </div> 
                   
                    <!-- anh dại diện  -->
                    <div class="form-group">
                    <label><i class="fa fa-image"></i> <b>Ảnh đại diện</b></label>
                    {{F_input_image($user -> img,'img',$user ->id,asset('source/user'))}}
                    </div>
                    
                 
                    <div class="form-group">
                        <label>Ghi chú (ghi lại tên cũ của đại lý)</label>
                        <textarea class="form-control"  name="note">{{$user->note}}</textarea>
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