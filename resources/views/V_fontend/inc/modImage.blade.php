
<div class="modBookImage text-center">
    <a href="{{asset($item->url.'.html')}}">
        <img src="{{asset('source/book/'.$item->img)}}" alt="">
    </a>
    @if(isset($item->f_orders))
        @if($item->f_orders->status == 'received')
            <span class="text-blue">Đang mượn</span>
        @elseif($item->f_orders->status == 'waiting')
            <span class="text-warning">Đang chờ</span>
        @else
            <div class="">
                <span data-toggle="modal" data-target="@if(Auth::user()){{'#muonModel'}} @else{{'#LoginModal '}}  @endif" class="btn btn-sm px-3 text-organ  muonngay" data-bookId1="{{$item->id}}" data-img1="{{$item->img}}"  data-cat1="{{$cat->name}}" data-name1="{{$item->name}}" data-price1="{{$item->price}}" data-des1="{{$item->des}}">Thuê ngay    </span>
            </div>
        @endif

    @else
        <div class="">
            <span data-toggle="modal" data-target="@if(Auth::user()){{'#muonModel'}} @else{{'#LoginModal '}}  @endif" class="btn btn-sm px-3 text-organ  muonngay" data-bookId1="{{$item->id}}" data-img1="{{$item->img}}"  data-cat1="{{$cat->name}}" data-name1="{{$item->name}}" data-price1="{{$item->price}}" data-des1="{{$item->des}}">Thuê ngay    </span>
        </div>
    @endif
    
   
</div>