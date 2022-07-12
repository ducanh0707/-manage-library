@extends('V_backend.index')
@section('content')
    <div class="content-wrapper">

    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                
                
            </div>
        </div>
      <!-- /.row -->
      <div class="row">
       
        <div class="col-md-12 mt-3">
          <div class="box">
            <div class="box-header">
               <h3 class="">
                Thông tin tài khoản
               </h3>
            </div>
            <div class="box-body">
               
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Thông tin cá nhân</h5>
                        <div class="ml-3">
                            
                            <div class="mb-3">
                                <b>Họ tên:</b> {{$user->name}}
                            </div>
                            <div class=" mb-3">
                                <b>Email:</b> {{$user->email}}
                            </div>
                            <div class="mb-3">
                                <b>Điện thoại:</b> {{$user->tel}}
                            </div>
                            <div class=" mb-3">
                                <b class="text-danger">Mã Coupon:</b> {{$user->coupon}}
                            </div>
                            <div class=" mb-3">
                                <b>Ngày đăng ký:</b> <?php 
                                $date = date_create($user -> created_at);
                                echo date_format($date,'d/m/Y').' | ';
                                echo date_format($date,'H:i:s');
                                ?>
                            </div>
                            <div class=" mb-3">
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#user_change_pass">Thay đổi mật khẩu</button>

                                <div class="modal fade" id="user_change_pass" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <form action="{{asset('agency/user/change_pass')}}" method="post" enctype="multipart/form-data">
                                       <input type="hidden" name="_token" value="{{csrf_token()}}">
                                       <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Thay đổi mật khẩu</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                             <div class="row">
                                               
                                                <div class="col-md-12">
                                                    <!-- Mat khau  -->
                                                    <div class="form-group">
                                                        <label class="form-check-label">Nhập mật khẩu mới(*) </label>
                                                        <input type="password" class="form-control pass" placeholder="******" name="password" required>
                                                     </div>
                                                     <!-- nhap lai mat khau -->
                                                     <div class="form-group">
                                                         <label>Nhập lại mật khẩu mới(*)</label>
                                                         <input type="password" class="form-control pass" placeholder="******" name="password_again"  required>
                                                     </div>
                                                   
                                 
                                                </div>
                                             </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                            <button type="submit" class="btn btn-primary">Thay đổi</button>
                                          </div>
                                        </div>
                                    
                                    </div>
                                    </form>
                                 </div>
                                 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5>Tài khoản ngân hàng </h5>
                        
                        <div class="ml-3">
                            
                            @foreach($user->f_bank as $bank)
                                <div class=""><b>Ngân hàng:</b> {{$bank->ngan_hang}}</div>
                                <div class=""><b>Số tài khoản:</b> {{$bank->so_tai_khoan}}</div>
                                <div class=""><b>Chủ tài khoản:</b> {{$bank->ten_tai_khoan}}</div>
                                <div class=""><b>Chi nhánh:</b> {{$bank->chi_nhanh}}</div>
                                <div class="text-primary">@if($bank->main == 'on') Tài khoản chính @endif</div>
                                <hr>
                            @endforeach
                        </div>
                        <div>
                            <a href="{{asset('agency/bill/bank')}}">Sửa thông tin ngân hàng</a> 
                        </div>
                    </div>
                </div>
            </div>
           
          </div>
  
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection