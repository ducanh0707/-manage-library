<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
            {{-- @include('V_backend/agency_menu') --}}
         <!-- trang chu admin-->
            @can('dashboard_view')
               <li class="<?php if(Request::segment(2) == 'dashboard'){echo 'active';} ?>">
                  <a href="{{asset('admin/dashboard')}}">
                     <i class="fa fa-home"></i> <span> Trang chủ</span>
                  </a>
               </li>
            @endcan
            @can('post_view')
               @foreach($_post_type as $post_type_r)
                  <li class="<?php if(Request::segment(2) == 'post'){echo 'active';} ?>">
                     <a href="{{asset('admin/post/'.$post_type_r -> url)}}">
                        <?php echo html_entity_decode($post_type_r->icon) ?> <span>{{$post_type_r -> name}}</span>
                     </a>
                  </li>
               @endforeach
            @endcan
            @can('category_view')
            <li class="<?php if(Request::segment(2) == 'cat'){echo 'active';} ?>">
               <a href="{{asset('admin/cat')}}">
                  <i class="fa fa-book"></i> <span> Danh mục</span>
               </a>
            </li>
         @endcan
            @can('store_view')
               <li class="<?php if(Request::segment(2) == 'store'){echo 'active';} ?>">
                  <a href="{{asset('admin/store')}}">
                     <i class="fa fa-warehouse"></i> <span> Quản lý thư viện</span>
                  </a>
               </li>
              
            @endcan  
            @can('company_view')
               <li class="<?php if(Request::segment(2) == 'company'){echo 'active';} ?>">
                  <a href="{{asset('admin/company')}}">
                     <i class="fa fa-upload"></i> <span> Nhà xuất bản</span>
                  </a>
               </li>
            @endcan 
            @can('comment_edit')
            <li class="<?php if(Request::segment(2) == 'comment'){echo 'active';} ?>">
               <a href="{{asset('admin/comment')}}">
                  <i class="fa fa-comment"></i> <span> Bình luận</span>
               </a>
            </li>
         @endcan 
            @can('book_view')
                <li class="<?php if(Request::segment(2) == 'book'){echo 'active';} ?>">
                <a href="{{asset('admin/book')}}">
                    <i class="fa fa-book"></i><span> Quản lý sách</span>
                </a>
                </li>
            @endcan 
            @can('admin_tinh_view')
               <li class="<?php if(Request::segment(2) == 'tinh'){echo 'active';} ?>">
                    <a href="{{asset('admin/tinh/27')}}">
                     <i class="fas fa-barcode"></i> <span> Trường học</span>
                    </a>
               </li>
            @endcan

            @can('order_view')
               <li class="<?php if(Request::segment(2) == 'order'){echo 'active';} ?>">
                  <a href="{{asset('admin/order')}}">
                     <i class="fas fa-shopping-cart"></i> <span>Đơn hàng</span>
                  </a>
               </li>
            @endcan    
            {{-- @can('coupon_view')
               <li class="<?php if(Request::segment(2) == 'coupon'){echo 'active';} ?>">
                  <a href="{{asset('admin/coupon/')}}">
                     <i class="fas fa-spa"></i> <span>Hoa hồng</span>
                  </a>
               </li>
            @endcan --}}
            {{-- @can('pay_view')
               <li class="<?php if(Request::segment(2) == 'pay'){echo 'active';} ?>">
                    <a href="{{asset('admin/pay/')}}">
                        <i class="fas fa-dollar-sign"></i> <span>Thanh toán</span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php if(Request::segment(2) == 'pay_history'){echo 'active';} ?>">
                            <a href="{{asset('admin/pay/')}}">
                                <i class="fas fa-dollar-sign"></i> <span>Thanh toán</span>
                            </a>
                        </li>
                      
                        <li class="<?php if(Request::segment(2) == 'pay_history'){echo 'active';} ?>">
                            <a href="{{asset('admin/pay/history')}}">
                                <i class="fas fa-history"></i> <span>Lịch sử thanh toán</span>
                            </a>
                        </li>
                        <li class="<?php if(Request::segment(2) == 'pay_history'){echo 'active';} ?>">
                            <a href="{{asset('admin/pay/bank')}}">
                                <i class="fas fa-money-check-alt"></i> <span>Ngân hàng</span>
                            </a>
                        </li>
                      
                    </ul>
               </li>
            @endcan --}}

            @can('admin_user_view')
               {{-- <li class="<?php if(Request::segment(2) == 'user'){echo 'active';} ?>">
                    <a href="{{asset('admin/user/'.$_user_type_agency->id)}}">
                        <i class="fas fa-store"></i> <span>Đại lý</span>
                    </a>
               </li> --}}
         
               <li class="<?php if(Request::segment(2) == 'user'){echo 'active';} ?>">
                    <a href="{{asset('admin/user/type/0')}}">
                        <i class="fa fa-user"></i> <span>Thành viên</span>
                    </a>
               </li>
               
            @endcan
               
            @can('accountant_view')
               {{-- <li class="<?php if(Request::segment(2) == 'accountant'){echo 'active';} ?>">
                    <a href="{{asset('admin/user/'.$_user_type_agency->id)}}">
                        <i class="fas fa-store"></i> <span>Đại lý</span>
                    </a>
               </li> --}}
         
               <li class="<?php if(Request::segment(2) == 'accountant'){echo 'active';} ?>">
                    <a href="{{asset('admin/accountant')}}">
                     <i class="fas fa-hand-holding-usd"></i> <span>Kế toán</span>
                    </a>
               </li>
               
            @endcan
            @can('report_view')
               {{-- <li class="<?php if(Request::segment(2) == 'report'){echo 'active';} ?>">
                    <a href="{{asset('admin/user/'.$_user_type_agency->id)}}">
                        <i class="fas fa-store"></i> <span>Đại lý</span>
                    </a>
               </li> --}}
         
               <li class="tree view <?php if(Request::segment(2) == 'report'){echo 'active';} ?>">
                    <a href="{{asset('admin/report')}}">
                        <i class="fa fa-store"></i> <span>Báo cáo</span>
                        <span class="pull-right-container"><i class="fa fa-arrow-circle-down pull-right"></i></span>
                    </a>
                     <ul class="treeview-menu">
                        @can('report_view')
                            <li class="<?php if(Request::segment(2) == 'report_user'){echo 'active';} ?>">
                                <a href="{{asset('admin/report/report_user_sgd')}}">
                                    <span>Sở giáo dục</span>
                                </a>
                            </li>
                            <li class="<?php if(Request::segment(2) == 'report_user'){echo 'active';} ?>">
                                <a href="{{asset('admin/report/report_user_pgd')}}">
                                    <span>Phòng giáo dục</span>
                                </a>
                            </li>
                            <li class="<?php if(Request::segment(2) == 'report_user'){echo 'active';} ?>">
                                <a href="{{asset('admin/report/report_user_truong')}}">
                                    <span>Trường học</span>
                                </a>
                            </li>
                            <li class="<?php if(Request::segment(2) == 'report_user'){echo 'active';} ?>">
                                <a href="{{asset('admin/report/report_user_gv')}}">
                                    <span>Giáo viên</span>
                                </a>
                            </li>
                            <li class="<?php if(Request::segment(2) == 'report_user'){echo 'active';} ?>">
                                <a href="{{asset('admin/report/report_user')}}">
                                    <span>Báo cáo thành viên</span>
                                </a>
                            </li>
                        @endcan
                       
                    </ul>
               </li>
               
            @endcan
            @can('account_view')
               <li class="<?php if(Request::segment(2) == 'account'){echo 'active';} ?>">
                     <a href="{{asset('admin/account')}}">
                        <i class="fa fa-user"></i> <span>Tài khoản</span>
                     </a>
               </li>
               @endcan
            @can('theme_view')
                <li class="treeview <?php if( Request::segment(2) == 'gift'){echo 'active';} ?>">
                    <a href="#">
                        <i class="fa fa-palette"></i> <span>Giao diện website</span>
                        <span class="pull-right-container"><i class="fa fa-arrow-circle-down pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('theme_view')
                            <li class="<?php if(Request::segment(2) == 'theme'){echo 'active';} ?>">
                                <a href="{{asset('admin/theme/info')}}">
                                <i class="fa fa-palette text-danger"></i> <span>Sửa giao diện</span>
                                </a>
                            </li>
                        @endcan
                        @can('menu_view')
                            <li class="<?php if(Request::segment(2) == 'menu'){echo 'active';} ?>">
                                <a href="{{asset('admin/menu/0')}}">
                                <i class="fa fa-list"></i> <span>Menu</span>
                                </a>
                            </li>
                        @endcan   
                        @can('slide_view')
                            <li class="<?php if(Request::segment(2) == 'slide'){echo 'active';} ?>">
                                <a href="{{asset('admin/slide')}}">
                                <i class="fa fa-photo-video"></i> <span>Slide</span>
                                </a>
                            </li>
                        @endcan   
                        
                    </ul>
                </li>
            @endcan
          
         
      </ul>
   </section>
</aside>
