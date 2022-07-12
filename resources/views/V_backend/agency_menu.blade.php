@can('agency_dashboard_view')
    <li class="<?php if(Request::segment(1) == 'agency' and Request::segment(2) == 'dashboard'){echo 'active';} ?>">
    <a href="{{asset('agency/dashboard')}}">
        <i class="fa fa-home"></i> <span>Trang chủ</span>
    </a>
    </li>
@endcan
@can('agency_order_view')
    <li class="<?php if(Request::segment(1) == 'agency' and Request::segment(2) == 'order'){echo 'active';} ?>">
    <a href="{{asset('agency/order')}}">
        <i class="fas fa-shopping-cart"></i> <span>Đơn hàng</span>
    </a>
    </li>
@endcan
@can('agency_course_view')
    <li class="<?php if(Request::segment(1) == 'agency' and Request::segment(2) == 'order'){echo 'active';} ?>">
    <a href="{{asset('agency/course')}}">
        <i class="fas fa-book-reader"></i> <span>Khóa học</span>
    </a>
    </li>
@endcan
@can('agency_percen_view')
    <li class="<?php if(Request::segment(1) == 'agency' and Request::segment(2) == 'coupon_info'){echo 'active';} ?>">
    <a href="{{asset('agency/coupon_info')}}">
        <i class="fas fa-spa"></i> <span>Hoa hồng</span>
    </a>
    </li>
@endcan

@can('agency_percen_view')
    <li class="<?php if(Request::segment(1) == 'agency' and Request::segment(2) == 'bill'){echo 'active';} ?>">
    <a href="{{asset('agency/bill')}}">
        <i class="fas fa-dollar-sign"></i> <span>Thanh toán</span>
    </a>
    </li>
@endcan
@can('agency_faq_view')
    <li class="<?php if(Request::segment(1) == 'agency' and Request::segment(2) == 'faq'){echo 'active';} ?>">
    <a href="{{asset('agency/faq')}}">
        <i class="fas fa-question-circle"></i> <span>Hỏi đáp</span>
    </a>
    </li>
@endcan
@can('agency_tut_view')
    <li class="<?php if(Request::segment(1) == 'agency' and Request::segment(2) == 'tut'){echo 'active';} ?>">
        <a href="{{asset('agency/tut/video')}}">
            <i class="fas fa-book"></i> <span>Hướng dẫn</span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php if(Request::segment(4) == 'theme'){echo 'active';} ?>">
                <a href="{{asset('agency/tut/video')}}">
                     <span>Video</span>
                </a>
            </li>
            <li class="<?php if(Request::segment(4) == 'theme'){echo 'active';} ?>">
                <a href="{{asset('agency/tut/sales')}}">
                     <span>Cách bán hàng</span>
                </a>
            </li>
            <li class="<?php if(Request::segment(4) == 'theme'){echo 'active';} ?>">
                <a href="{{asset('agency/tut/file')}}">
                     <span>Tài liệu hướng dẫn</span>
                </a>
            </li>
        </ul>
    </li>
@endcan
@can('agency_view')
    <li class="<?php if(Request::segment(1) == 'agency' and Request::segment(2) == 'policy'){echo 'active';} ?>">
    <a href="{{asset('agency/policy')}}">
        <i class="fas fa-portrait"></i> <span>Điều khoản</span>
    </a>
    </li>

    <li class="<?php if(Request::segment(1) == 'agency' and Request::segment(2) == 'noti'){echo 'active';} ?>">
    <a href="{{asset('agency/noti')}}">
        <i class="fas fa-info-circle"></i> <span>Thông báo</span>
    </a>
    </li>
@endcan