@extends('V_fontend.index')
@section('content')

<div class=" bg-organ">
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="text-center font40 grenza-bold"></div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-3">


    @if(Auth::user())
    <div class="row">
        {{-- sidebaxr --}}
        <div class="col-md-3">
            <div class="bookByCatTitle">
                <div class="title-mod-sm">
                    Thông tin bạn đọc
                </div>
            </div>
            <div class="info-left">
                <div class="">Họ và tên: {{Auth::user()->name}}</div>
                <div class="">Địa chỉ: {{Auth::user()->adress}}</div>
                <div class="">Họ tên Phụ huynh: {{Auth::user()->parentName}}</div>
                <div class="">SĐT Phụ huynh: {{Auth::user()->parentTel}}</div>
                <div class="">Khoản tiền cọc: {{Auth::user()->price}}</div>
                <div class="">Ngày hết hạn: 1/7/2023</div>
            </div>

            <div class="text-center mt-3">
                <span class="bg-pin text-white border-radius py-1 px-3"><a class="text-white"
                        href="{{asset('admin/logout')}}">Đăng xuất</a></span>
            </div>
        </div>

        <div class="col-md-9">
            @include('V_backend/alert')
            <form action="{{asset('info/thong-tin/')}}" method="post" enctype="multipart/form-data">
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
                                    <label>Tên đăng nhập:</label>
                                    {{Auth::user()->email}}
                                </div>
                                <!-- tên đây đủ -->
                                <div class="form-group">
                                    <label>Tên người dùng:</label>
                                    {{Auth::user()->name}}
                                </div>
                                <!-- sdt thanh vien -->
                                <div class="form-group">
                                    <label>Số điện thoại của bạn</label>
                                    <input type="texty" class="form-control" placeholder="SĐT thành viên" name="tel"
                                        value="{{Auth::user()->tel}}  " required="">
                                </div>
                                 <!-- Số tiền  -->
                                 <div class="form-group">
                                    <label>Số tiền đã đóng</label>
                                    <input type="email" class="form-control" placeholder="Tiền đóng" name="money"
                                        value="{{Auth::user()->money}}  " disabled>
                                </div>
                                <!-- Mat khau  -->
                                <div class="form-group">
                                    <label><i class="fa fa-user-secret"></i> <b>Mật khẩu(*)</b></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="on"
                                            id="changepass_{{Auth::user()->id}}" name="changepass">
                                        <label class="form-check-label" for="changepass_{{Auth::user()->id}}">
                                            Đổi mật khẩu
                                        </label>
                                    </div>
                                    <input type="password" class="form-control pass" placeholder="******"
                                        name="password" disabled>
                                </div>
                                <!-- nhap lai mat khau -->
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu(*)</label>
                                    <input type="password" class="form-control pass" placeholder="******"
                                        name="password_again" disabled>
                                </div>
                                <script>
                                    $(document).ready(function () {
                                        $("#changepass_{{Auth::user()->id}}").change(function () {
                                            if ($(this).is(":checked")) {
                                                $(".pass").removeAttr('disabled');
                                            } else {
                                                $(".pass").attr('disabled', '');
                                            }
                                        });
                                    });

                                </script>
                                <!-- Ngày lập tk -->
                                <div class="form-group">
                                    <label>Ngày tạo tài khoản :</label>
                                    {{Auth::user()->created_at}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label><i class="fa fa-image"></i> <b>Ảnh đại diện</b></label>
                                    {{F_input_image(Auth::user() -> img,'img',Auth::user()  ->id,'upload/user/')}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Đồng ý</button>
                    </div>
                </div>
            </form>
        </div>
      
        {{-- @include('V_backend/alert') --}}
        {{-- info --}}
    
    </div>
    @endif
</div>
@endsection('content')
