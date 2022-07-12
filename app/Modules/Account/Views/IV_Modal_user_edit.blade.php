<div class="modal fade" id="edit_account_{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <form action="{{asset('admin/account/edit/'.$val->id)}}" method="post" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      {{-- <input type="hidden" name="parent_id" value="{{$val->parent_id}}"> --}}
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalCenterTitle">Sửa account</h5>
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

                    <div class="form-group">
                        <label>Tiền cọc đã nộp</label>
                            <input type="number" name="money" class="form-control money" id="money" disabled value="{{$val->money}}">
                        <?php
             
                        ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  id="changedepo_{{$val->id}}" name="changedep">
                            <label class="form-check-label" for="changedepo_{{$val->id}}">
                               Sửa tiền nộp
                            </label>
                                <script>
                                    $(document).ready(function(){
                                        $("#changedepo_{{$val->id}}").change(function(){
                                    if($(this).is(":checked")){
                                        $(".money").removeAttr('disabled');  
                                    }else {
                                        $(".money").attr('disabled','');
                                            }
                                        });
                                    });
                                            
                                </script>
                        </div>
                    </div>
                    <!-- Tien coc thanh vien -->
                    <div class="form-group">
                        
                            <label>Thêm tiền cọc(*)</label>
                            <input type="number" class="form-control " placeholder="Tiền cọc" id="deposit" name="money_add" value="0" >     

                    </div>

                    
                    
                    {{-- <div class="form-group">
                        <label for="">Loại tài khoản</label>
                        <select name="account_type" class="form-control">
                            <option value="person" @if($val->account_type == 'person') selected @endif>Cá nhân</option>
                            <option value="sale" @if($val->account_type == 'sale') selected @endif>Nhân viên Sale</option>
                            <option value="org" @if($val->account_type == 'org') selected @endif>Tổ chức</option>
                        </select>
                    </div> --}}
                    
               </div>
               <div class="col-md-6">
                   
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
