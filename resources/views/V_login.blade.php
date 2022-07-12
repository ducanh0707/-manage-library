
<!doctype html>
<html lang="en" style="height: 100%;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <title>Đăng nhập</title>
   <link rel="stylesheet" href="{{ asset('style/backend/css/style_login.css') }}">
   <link rel="stylesheet" href="{{ asset('style/fontend/css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('style/backend/bootstrap-4-3-1/css/bootstrap.min.css') }}">


</head>

    <body style="height: 100%;display: flex;-ms-flex-align: center;align-items: center;padding-top: 40px;padding-bottom: 40px; background-color: #fff;">
        <form class="form-signin" action="{{asset('admin/webux')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="text-center mb-4">
            <img class="mb-4" src="{{ asset('theme/logo-clb.jpg') }}" alt="">
        </div>
        @include('V_backend/alert')
        <div class="form-group">
            <input name="email" type="text" class="form-control grenza border-radius" placeholder="Tên đăng nhập">
        </div>

        <div class="form-group">
            <input name="password" type="password"  class="form-control grenza border-radius" placeholder="Mật khẩu">
        </div>
        <div class="form-group text-right">
            <a href="" class="text-dark grenza">Quên mật khẩu ?</a>
        </div>
     
        <button class="btn btn-lg btn-organ btn-block border-radius grenza-blod text-uppercase" type="submit">Đăng nhập</button>
        <div class="mt-2 text-center">
            <span class=" grenza-blod font16 text-dark">Bạn chưa có tài khoản?</span> <a href="{{asset('auth/regis')}}" class="text-blue-clb grenza-blod font16">Đăng ký ngay</a></span>
        </div>
            
    </body>
</html>    