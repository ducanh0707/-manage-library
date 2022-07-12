<ul class="list-group mt-2">
    <li class="list-group-item @if(Request::segment(3) == 'sidebar'){{'list-group-item-success'}} @endif">
       <a href="{{asset('admin/theme/sidebar/'.$sidebar_first_id)}}">Sửa sidebar</a>
    </li>
    <li class="list-group-item @if(Request::segment(3) == '1'){{'list-group-item-success'}} @endif ">
      <a href="{{asset('admin/theme/1/row/1')}}">Trang chủ</a>
  </li>
  

    <li class="list-group-item @if(Request::segment(3) == 'info'){{'list-group-item-success'}} @endif">
       <a href="{{asset('admin/theme/info')}}">Cài đặt website</a>
    </li>
    
    
 </ul>


@include('Theme::inc/modal_new_theme')