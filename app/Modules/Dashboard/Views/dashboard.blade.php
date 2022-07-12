@extends('V_backend.index')
@section('content')

  <div class="content-wrapper">
        <div class="p-3 text-white">
            <a href="#" class="text-white"><i class="fa fa-home text-white"></i> Trang chủ</a>
        </div>
        <section class="content-header mt-4">
            
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="row">
                        @can('post_view')
                            <div class="col-md-2 col-6 mb-3">
                                <div class="p-2 ">
                                    <div class="text border py-2 px-3 mod-da bg-white">
                                        <a href="{{asset('/admin/post/bai-viet')}}">
                                            <div class="py-2 text-right">
                                                <h6 class="text-dark">Tổng số thư viện</h6>
                                                <div class="text-dark countNumber">{{$store_count}}</div>
                                                <div><a href="{{asset('/admin/store')}}" class="text-dark">Xem thêm</a></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d_icon">
                                        <span class="i_icon icon_store">
                                            <i class="fa fa-store"></i>
                                        </span>
                                    </div>
                        
                                </div>
                            </div>
                        @endcan 

                        @can('order_view')
                           <div class="col-md-2 col-6 mb-3">
                                <div class="p-2 ">
                                    <div class="text border py-2 px-3 mod-da bg-white">
                                        <a href="{{asset('/admin/post/bai-viet')}}">
                                            <div class="py-2 text-right">
                                                <h6 class="text-dark">Tổng số đơn hàng</h6>
                                                <div class="text-dark countNumber">{{$order_count}}</div>
                                                <div><a href="{{asset('/admin/order')}}" class="text-dark">Xem thêm</a></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d_icon">
                                        <span class="i_icon icon_order">
                                            <i class="fas fa-shopping-cart text-white"></i>
                                        </span>
                                    </div>
                        
                                </div>
                            </div>
                        @endcan
                          
                        @can('theme_view')
                            <div class="col-md-2 col-6 mb-3">
                                <div class="p-2 ">
                                    <div class="text border py-2 px-3 mod-da bg-white">
                                        <a href="{{asset('/admin/post/bai-viet')}}">
                                            <div class="py-2 text-right">
                                                <h6 class="text-dark">Nhà xuất bản</h6>
                                                <div class="text-dark countNumber">{{$company_count}}</div>
                                                <div><a href="{{asset('/admin/company')}}" class="text-dark">Xem thêm</a></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d_icon">
                                        <span class="i_icon icon_company">
                                            <i class="fa fa-upload text-white"></i>
                                        </span>
                                    </div>
                        
                                </div>
                            </div>

                        @endcan
                        @can('menu_view')
                             <div class="col-md-2 col-6 mb-3">
                                <div class="p-2 ">
                                    <div class="text border py-2 px-3 mod-da bg-white">
                                        <a href="{{asset('/admin/post/bai-viet')}}">
                                            <div class="py-2 text-right">
                                                <h6 class="text-dark">Quản lý sách</h6>
                                                <div class="text-dark countNumber">{{$book_count}}</div>
                                                <div><a href="{{asset('/admin/book')}}" class="text-dark">Xem thêm</a></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d_icon">
                                        <span class="i_icon icon_book">
                                             <i class="fa fa-book text-white"></i>
                                        </span>
                                    </div>
                        
                                </div>
                            </div>
                        @endcan
                        @can('cat_view')
                             <div class="col-md-2 col-6 mb-3">
                                <div class="p-2 ">
                                    <div class="text border py-2 px-3 mod-da bg-white">
                                        <a href="{{asset('/admin/post/bai-viet')}}">
                                            <div class="py-2 text-right">
                                                <h6 class="text-dark">Danh mục</h6>
                                                <div class="text-dark countNumber">{{$cat_count}}</div>
                                                <div><a href="{{asset('/admin/cat')}}" class="text-dark">Xem thêm</a></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d_icon">
                                        <span class="i_icon icon_cat">
                                            <i class="fas fa-barcode text-white"></i>
                                    </div>
                        
                                </div>
                            </div>
                        @endcan
                        @can('slide_view')
                            <div class="col-md-2 col-6 mb-3">
                                <div class="p-2 ">
                                    <div class="text border py-2 px-3 mod-da bg-white">
                                        <a href="{{asset('/admin/post/bai-viet')}}">
                                            <div class="py-2 text-right">
                                                <h6 class="text-dark">Quản lý sách</h6>
                                                <div class="text-dark countNumber">{{$book_count}}</div>
                                                <div><a href="{{asset('/admin/user/type/0')}}" class="text-dark">Xem thêm</a></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d_icon">
                                        <span class="i_icon icon_user">
                                             <i class="fa fa-users text-white"></i>
                                        </span>
                                    </div>
                        
                                </div>
                            </div>
                        @endcan
                      
                    </div>
                </div>
                
            </div>

            {{-- tintuc  --}}
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="d_post bg-white p-3 radius20 border">
                        <div  class="title-mod-g"><h4>Thông báo mới nhất<h4></div>
                        <ul class="mt-1">
                            @foreach($post_noti as $post)
                                <li class="py-1">
                                    <a class="text-dark post_d_a" href="{{asset('bai-viet/'.$post->url.'.html')}}">{{$post->title}}</a>
                                </li>

                            @endforeach
                        </ul>
                    </div>
                    
                </div>
                {{-- don hang moi  --}}
                <div class="col-md-4">
                    <div class="d_post bg-white p-3 radius20 border">
                        <div  class="title-mod-g"><h4>Đơn hàng mới nhất<h4></div>
                        <ul class="mt-1">
                            @foreach($order_new as $post)
                                <li class="py-1">
                                    <a class="text-dark post_d_a" href="{{asset('admin/order')}}">@if(isset($post->f_user)){{$post->f_user->name}} @endif đã đặt hàng</a>
                                </li>

                            @endforeach
                        </ul>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <img src="{{asset('theme/thu-vien-d.jpg')}}" class="w-100" >
                </div>

            </div>

            {{-- danh sách  --}}
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="d_list">
                        <div class="d_list_title">Danh sách nhà trường</div>
                        <div class="d_list_list">
                            <ul>
                                @foreach($truong_list as $item)
                                    <li>{{$item->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="d_list_view">
                            <a class="text-dark" href="{{asset('admin/tinh/27')}}">Xem tất cả</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d_list">
                        <div class="d_list_title">Danh sách đầu sách</div>
                        <div class="d_list_list">
                            <ul>
                                @foreach($book_list as $item)
                                    <li><a class="text-dark post_d_a" href="{{asset($item->url.'.html')}}">{{$item->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="d_list_view">
                            <a class="text-dark" href="{{asset('admin/book')}}">Xem tất cả</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d_list">
                        <div class="d_list_title">Danh sách tài khoản</div>
                        <div class="d_list_list">
                            <ul>
                                @foreach($user_list as $item)
                                    <li>{{$item->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="d_list_view">
                            <a class="text-dark" href="{{asset('admin/user/type/0')}}">Xem tất cả</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d_list">
                        <div class="d_list_title">Danh sách nhà xuất bản</div>
                        <div class="d_list_list">
                            <ul>
                                @foreach($company_list as $item)
                                    <li>{{$item->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="d_list_view">
                            <a class="text-dark" href="{{asset('admin/company')}}">Xem tất cả</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   </div>
@endsection

