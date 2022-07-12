<section id="main">
    <div class="container">
    <div class="row">
        <div class="col-md-3">
            

            <div class="sidebar-left bg-pin-transform radius20 py-2">
                <div class="text-center">
                    <div class="title-mod-sm pb-3">Hệ thống thư viện</div>
                </div>
                <div class="">
                    <ul class="menu-left">
                        @if($_menu_httv)
                            @if($_menu_httv->F_menu)
                                @foreach($_menu_httv->F_menu as $menu)
                                    <li id="" class="nav-item monkey-nav-item ">
                                        <a class="nav-link nav-link-monkey distance-center" href="{{$menu->url}}">
                                            {{$menu->name}}
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        @endif
                    </ul>
                    
                </div>
            </div>

            <div class="sidebar-left bg-pin-transform radius20 py-2 mt-3">
                <div class="text-center">
                    <div class="title-mod-sm pb-3">Danh sách PGD</div>
                </div>
                <div class="">
                    <ul class="menu-left">
                        @if($_menu_pgd)
                            @if($_menu_pgd->F_menu)
                                @foreach($_menu_pgd->F_menu as $menu)
                                    <li id="" class="nav-item monkey-nav-item ">
                                        <a class="nav-link nav-link-monkey distance-center" href="{{$menu->url}}">
                                            {{$menu->name}}
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        @endif
                    </ul>
                </div>

            </div>

            <div class="sidebar-left bg-pin-transform radius20 py-2 mt-3">
                <div class="text-center">
                    <div class="title-mod-sm pb-3">Danh sách trường</div>
                </div>
                <div class="">
                    <ul class="menu-left">
                        @if($_menu_truong)
                            @if($_menu_truong->F_menu)
                                @foreach($_menu_truong->F_menu as $menu)
                                    <li id="" class="nav-item monkey-nav-item ">
                                        <a class="nav-link nav-link-monkey distance-center" href="{{$menu->url}}">
                                            {{$menu->name}}
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        @endif
                    </ul>
                </div>
                
            </div>

            <div class="sidebar-left bg-pin-transform radius20 py-2 mt-3">
                <div class="text-center">
                        {{-- {{FF_nav_multi_level($row->title)}} --}}
                    <div class="title-mod-sm pb-3">Danh mục sách</div>
                </div>
                <div class="">
                    <ul class="menu-left">
                        @if($_menu_dms)
                            @if($_menu_dms->F_menu)
                                @foreach($_menu_dms->F_menu as $menu)
                                    <li id="" class="nav-item monkey-nav-item ">
                                        <a class="nav-link nav-link-monkey distance-center" href="{{$menu->url}}">
                                            {{$menu->name}}
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        @endif
                    </ul>
                </div>
            </div>
        </div>
 
        <div class="col-md-9">
            <div class="main-content">
                @foreach ($book_list as $item)
                    @include('V_fontend/inc/mod-book')
                @endforeach
                
            </div>
        </div>
    </div>
</div>

</section>
