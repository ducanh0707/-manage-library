<div class="modal fade" id="edit_user_{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <form action="{{asset('admin/user/'.$type_id.'/parent/'.$user_parent_id.'/edit/'.$val->id)}}" method="post" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="hidden" name="parent_id" value="{{$val->parent_id}}">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalCenterTitle">Sửa tài khoản</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-6">
                  <!-- tên đây đủ -->
                  <div class="form-group">
                        <label>Họ tên(*)</label>
                        <input type="text" class="form-control" id="name_{{$val->id}}" placeholder="Họ tên" name="name" value="{{$val->name}}" onkeyup="ChangeToSlug();">
                     </div>
                     <!-- so dien thoai -->
                     <div class="form-group">
                        <label>Số điện thoại (*)</label>
                        <input type="text" class="form-control" placeholder="Điện thoại" name="tel" value="{{$val->tel}}" required>
                    </div>
                    <!-- email thanh vien -->
                    <div class="form-group">
                        <label>Email của bạn(*)</label>
                        <input type="email" class="form-control" placeholder="Email thành viên" name="email" value="{{$val->email}}" required>
                    </div>                    
                    
                    <div class="form-group">
                        <label for="">Cấp độ</label>
                            <select name="level_id" class="form-control">
                                <option value="">Trống</option>
                                @foreach($level_list as $level)
                                    <option value="{{$level->id}}" @if($val->level_id == $level->id) selected @endif>{{$level->name}}</option>
                                @endforeach
                            </select>
                        
                    </div>

                    {{-- <div class="form-group row">
                        <div class="col-md-6">
                        
                            <label for="">Tỉnh thành (*)</label>
                            <select name="tinh_id" id="tinh_{{$val->id}}" class="form-control">
                                <option value="">Trống</option>
                                @foreach($tinh_list as $tinh)
                                <option value="{{$tinh->id}}" @if($val->tinh_id == $tinh->id) selected @endif>{{$tinh->name}}</option>
                                @endforeach
                            </select>
                            
                        </div>
                        <div class="col-md-6">
                            
                            <label for="">Huyện (*)</label>
                            <select name="huyen_id" id="huyen_{{$val->id}}" class="form-control">
                                <option value="">Trống</option>
                                @if(isset($val->f_tinh->f_huyen))
                                        @foreach($val->f_tinh->f_huyen as $huyen)
                                            <option value="{{$huyen->id}}" @if($val->huyen_id == $huyen->id) selected @endif>{{$huyen->name}}</option>
                                        @endforeach
                                @endif
                            </select>
                                
                        </div>
                        <script>
                            $('#tinh_{{$val->id}}').change(function () {
                                var tinh_id = $('#tinh_{{$val->id}}').val();
                                $.get("{{asset('app/local/huyen')}}/" + tinh_id, function (data) {
                                    $("#huyen_{{$val->id}}").html(data);
                                });
                            });
                        </script>
                    </div> --}}
                    <div class="form-group">
                        <label for="">Loại tài khoản</label>
                        <select name="account_type" class="form-control">
                            <option value="person" @if($val->account_type == 'person') selected @endif>Cá nhân</option>
                            <option value="sale" @if($val->account_type == 'sale') selected @endif>Nhân viên Sale</option>
                            <option value="org" @if($val->account_type == 'org') selected @endif>Tổ chức</option>
                        </select>
                    </div>
                    
               </div>
               <div class="col-md-6">
                    <!-- coupon -->
                    <div class="form-group">
                        <label>Coupon</label>
                        <input type="text" class="form-control" placeholder="Mã giảm giá" name="coupon" value="{{$val->coupon}}">
                    </div>
                   <!-- Mat khau  -->
                   <div class="form-group">
                        <label><i class="fa fa-user-secret"></i> <b>Mật khẩu(*)</b></label>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="on" id="changepass_{{$val->id}}" name="changepass">
                        <label class="form-check-label" for="changepass_{{$val->id}}">
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
                            $("#changepass_{{$val->id}}").change(function(){
                            if($(this).is(":checked")){
                                $(".pass").removeAttr('disabled');  
                            }
                            else {
                                $(".pass").attr('disabled','');
                            }
                            });
                        });
                    </script>

                     <!-- quyền  -->
                     <div class="form-group">
                        <label><i class="fa fa-street-view"></i> <b>Quyền truy cập</b></label>
                        <select name="user_type_id" class="form-control">
                           @foreach($user_type as $user_type_r)
                              <option <?php if($val->user_type_id == $user_type_r->id){echo 'selected';} ?> value="{{$user_type_r->id}}">{{$user_type_r->name}}</option>
                           @endforeach
                        </select>
                     </div>
                     
                  
                    <div class="form-group">
                        <b>Trạng thái: </b>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="status" id="inlineRadio1_{{$val->id}}" value="on" <?php if($val->status == 'on'){echo 'checked';} ?>>
                            <label class="form-check-label" for="inlineRadio1_{{$val->id}}">Công khai</label>
                        </div>
                     
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="status" id="inlineRadio2_{{$val->id}}" value="off" <?php if($val->status == 'off'){echo 'checked';} ?>>
                          <label class="form-check-label" for="inlineRadio2_{{$val->id}}">Khóa</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <b>Chế độ đại lý </b>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="mode_agency" id="mode_agency_on_{{$val->id}}" value="on" <?php if($val->mode_agency == 'on'){echo 'checked';} ?>>
                            <label class="form-check-label" for="mode_agency_on_{{$val->id}}">Bật</label>
                        </div>
                     
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="mode_agency" id="mode_agency_off_{{$val->id}}" value="off" <?php if($val->mode_agency == 'off'){echo 'checked';} ?>>
                          <label class="form-check-label" for="mode_agency_off_{{$val->id}}">Tắt</label>
                        </div>
                    </div> 
                   
                     <!-- anh dại diện  -->
                     <div class="form-group">
                        <label><i class="fa fa-image"></i> <b>Ảnh đại diện</b></label>
                        {{F_input_image($val -> img,'img',$val ->id,asset('source/user'))}}
                     </div>
               </div>
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
