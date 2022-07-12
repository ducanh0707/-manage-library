<div class="side-menu-container">
    <h2>Danh mục</h2>

    <nav class="side-nav">
       
         @if(isset($sidebar_r->f_menu))
            <ul class="menu menu-vertical sf-arrows">
                    {{FF_nav_multi_level($sidebar_r->f_menu)}}
            </ul>
        @else
            Bạn chưa chọn danh mục sidebar
        @endif
        {{-- <ul class="menu menu-vertical sf-arrows">
            <li><a href="#" ><i class="icon-sliders"></i>Features</a>
                <ul>
                    <li><a href="#">Header Types</a></li>
                    <li><a href="#">Footer Types</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="icon-cat-gift"></i>Special Offer!</a></li>
            <li><a href="#"><i class="icon-star-empty"></i>Buy Porto!</a></li>
        </ul> --}}
    </nav>
</div><!-- End .side-menu-container -->
