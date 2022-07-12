@extends('V_fontend.index')
@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="bg-white radius20">
                <div class="search text-center regis">
                    <div class="title-mod font-weight-bold mb-3">Đăng ký</div>
                    <div>

                        <form class="form-signin" action="{{asset('auth/regis')}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="text-center mb-4">
                                <img width="200px" class="mb-4" src="{{ asset('theme/logo-clb.jpg') }}" alt="">
                            </div>
                            @include('V_backend/alert')
                            <div class="form-group">
                                <input name="email" type="text" class="form-control grenza border-radius"
                                    placeholder="Tên đăng nhập">
                            </div>
                            <div class="form-group">
                                <input name="name" type="text" class="form-control grenza border-radius"
                                    placeholder="Họ tên">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control grenza border-radius"
                                    placeholder="Mật khẩu">
                            </div>
                            <div class="form-group">
                                <input name="password_again" type="password" class="form-control grenza border-radius"
                                    placeholder="Nhập lại mật khẩu">
                            </div>
                            {{-- dia diem   --}}
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="">Tỉnh thành</label>
                                    <select name="tinh_id" id="tinh" class="form-control border-radius">
                                        <option value="">Trống</option>
                                        @foreach($tinh_list as $tinh)
                                        <option value="{{$tinh->id}}">{{$tinh->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-md-6">

                                    <label for="">Huyện</label>
                                    <select name="huyen_id" id="huyen" class="form-control border-radius">

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
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="">Trường</label>
                                    <select name="truong_id" id="truong" class="form-control border-radius">
                                        <option value="">Trống</option>

                                    </select>
                                    <script>
                                        $('#huyen').change(function () {

                                            var huyen_id = $('#huyen').val();
                                            $.get("{{asset('app/local/truong_user')}}/" + huyen_id, function (
                                                data) {
                                                $("#truong").html(data);

                                            });
                                        });

                                    </script>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Lớp</label>
                                    <select name="lop_id" id="lop" class="form-control border-radius">
                                        <option value="">Trống</option>

                                    </select>
                                    <script>
                                        $('#truong').change(function () {

                                            var truong_id = $('#truong').val();
                                            $.get("{{asset('app/local/lop_user')}}/" + truong_id, function (
                                                data) {
                                                $("#lop").html(data);

                                            });
                                        });

                                    </script>
                                </div>

                            </div>


                            <button class="btn btn-lg btn-pin btn-block border-radius grenza-blod text-uppercase"
                                type="submit">Đăng ký</button>
                            <div class="mt-2 text-center">
                                <span class=" grenza-blod font16 text-dark">Bạn đã có tài khoản?</span> <a
                                    href="{{asset('auth/login')}}" class="text-blue-clb grenza-blod font16">Đăng nhập
                                    ngay</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="hotline">
                <i class="fa fa-phone-volume"></i>Hotline :0987654321
            </div>
        </div>

    </div>

</div>


@endsection('content')
