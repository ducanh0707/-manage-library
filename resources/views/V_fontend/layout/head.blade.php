<header id="masthead" class="site-header has-logo has-title-and-tagline has-menu" role="banner">
	
	<nav class="navbar navbar-expand-lg  navbar-cam bg-pin" aria-label="Eighth navbar example">
		<div class="container">
			<div class="logo-bg-left">
				<div class="white-background">
					<a class="navbar-brand  white-background" href="{{asset('')}}">
						<img src="{{asset('source/theme/'.$row->img)}}" alt="">
					</a>
				</div>
			</div>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsExample07">
				<ul class="navbar-nav mr-auto menu-main">
                    {{FF_nav_multi_level($row->f_menu)}}
                </ul>
            </div>				
            <div class="login ml-0">
                @if(!Auth::user())
                    <a href="#" data-toggle="modal" data-target="#LoginModal" class="text-white font-weight-bold mr-3">Đăng Nhập </a>
                    <a href="{{asset('auth/regis')}}" class="text-white font-weight-bold">Đăng ký </a>
                @else
                    <div class="dropdown mr-5">
                        <a class="dropdown-toggle text-white font-weight-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(Auth::user()->img)
                                <img class="border100 mr-3" width="40px" src="{{asset('source/user/'.Auth::user()->img)}}">
                            @else 
                                <img class=" border100 mr-3"  width="40px"  src="{{asset('theme/user.png')}}">
                            @endif 
                            {{Auth::user()->name}} 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{asset('info/thong-tin')}}"> Cá nhân</a>
                            <a class="dropdown-item" href="{{asset('info/thong-tin-thue')}}"> Sách thuê</a>
                            <a class="dropdown-item" href="{{asset('info/thong-tin-mua')}}"> Sách mua</a>
                            <a class="dropdown-item" href="{{asset('info/hoa-hong')}}"> Hoa hồng</a>
                            <a class="dropdown-item" href="{{asset('admin/logout')}}">Thoát</a>
                        </div>
                    </div>
               
                @endif
            </div>
		</div>
	</nav>
</header>

  {{-- modal đănh nhập --}}
    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <form action="{{asset('admin/webux')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
            <input type="hidden" name="urlCurrent" value={{url()->current()}}>

            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Đăng Nhập </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Số điện thoại:</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Mật khẩu:</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot_pass"> <a href="#" class="mr-5">Quên mật khẩu</a></div>
                        <div class=" register">
                            <a href="{{asset('regis/dangky')}}" >Đăng ký
                                ngay</a>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Đăng Nhập </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
        {{-- model dang ky --}}

<style>
.menu-main  li a {
    color : #fff;
    font-size: 15px;
    font-weight: bold;
}
.navbar-brand {
     display: unset !important;

}
    .navbar-cam {
    padding-top: unset !important;
    padding-bottom: unset !important;
}


.logo-bg-left {
    position: relative;
}
.white-background::before {
    left: -999em;
    background: #fff;
    position: absolute;
    width: 999em;
    top: 0;
    bottom: 0;
    content: '';
    display: block;
}

.navbar-brand {
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    text-decoration: none;
    white-space: nowrap;
}
.white-background::before {
    left: -999em;
    background: #fff;
    position: absolute;
    width: 999em;
    top: 0;
    bottom: 0;
    content: '';
    display: block;
}
.navbar-brand img {
    height: 60px;
    width: auto;
}

</style>