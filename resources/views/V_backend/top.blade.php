<header class="main-header">
    <!-- Logo -->
    <a href="{{asset('')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
         <img src="{{asset('img_webux/icon.png')}}" height="30px">
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
         <img src="{{asset('img_webux/logo.png')}}" height="30px">
      </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
         Mở menu
        <span class="sr-only">Toggle navigation</span>
      </a>
      
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
         <nav class="my-2 my-md-0 mr-md-3">
            <div class="btn-group px-2">
               @if(isset($web_id))
                  <a class="mx-2 text-white" href="{{'http://'.$web->domain}}" target="_blank">
                     {{$web->domain}}
                  </a>
                  <a class="text-white">
                     {{$web->f_user -> email}}
                  </a>
               @endif
            </div>
           
            <!-- user -->
            <div class="btn-group px-2">
               @if(Auth::user()->avatar !='')
                  <img class="mr-2" height="20px" src="{{asset('upload/user/'.Auth::user()->avatar)}}"> 
               @endif
               <a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo Auth::user()->name ?>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                 
                  <a href="{{asset('agency/user')}}" class="dropdown-item">Cá nhân</a>
                  <a href="{{asset('/agency/bill')}}" class="dropdown-item">Thanh toán</a>
                  <a href="{{asset('admin/logout')}}" class="dropdown-item">Thoát</a>
               </div>
               
            </div>
         </nav>
      </div>
    </nav>
</header>