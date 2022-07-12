@extends('V_fontend.index')
@section('content')

<div class="container">

    <div class="row">
        <a href="{{asset('')}}">Trang chủ</a> /
        <a href=""> Đăng ký</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('V_backend/alert')
        <form action="{{asset('auth/customer/regis')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin tài khoản</h5>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- tên đây đủ -->
                            <div class="form-group">
                                <label>Họ tên:</label>
                                <input type="text" class="form-control" placeholder="Họ và tên" name="name"
                                value=" " required="">
                            </div>
                            <!-- so dien thoai -->
                            <div class="form-group">
                                <label>Số điện thoại (*)</label>
                                <input type="text" class="form-control" placeholder="Điện thoại" name="email"
                                    value=" " required="">
                            </div>
                            

                            <!-- Mat khau  -->
                            <div class="form-group">
                                <label>Mật khẩu(*)</label>
                                <input type="password" class="form-control pass" placeholder="******"
                                    name="password" >
                            </div>
                            <!-- nhap lai mat khau -->
                            <div class="form-group">
                                <label>Nhập lại mật khẩu(*)</label>
                                <input type="password" class="form-control pass" placeholder="******"
                                    name="password_again" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label><i class="fa fa-image"></i> <b>Ảnh đại diện</b></label>
                                {{F_input_image('','img','new_user','upload/user')}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                </div>
            </div>
        </form>
    </div>
    </div>

</div>
@endsection('content')
