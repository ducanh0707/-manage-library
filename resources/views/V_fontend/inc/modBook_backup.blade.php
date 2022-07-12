<div class="col-md-4">
    <div class="modCsss">
        <div class="row">
            {{-- iamge  --}}
            <div class="col-5">
                <div class="mod-img">
                    <a href="{{asset($item->url.'.html')}}">
                        @if($item->img)
                            <img class="img-left  w-100" src="{{asset('/source/book/'.$item->img)}}" />
                            @else
                            <img class="img-left w-100" src="{{asset('img_webux/noimg.jpg')}}" />
                        @endif
                    </a>
                </div>
            </div>
            {{-- thong tin  --}}
            <div class="col-7">
                <div class="mod-info">
                    <div class="name_book font-weight-bold pb-1"><a href="{{asset($item->url.'.html')}}" class="text-dark">{{$item->name}}</a></div>
                    <div class="infor_detail  pb-2">
                        <span> Nhà xuất bản: {{$item ->F_company->name}}</span>
                    </div>
                    <div class="mod-rent">
                        <div class="rent_book">
                            <button type="button" data-toggle="modal" data-target="@if(Auth::user()){{'#muonModel'}} @else{{'#LoginModal '}}  @endif"  class="btn btn-sm px-3 btn-organ2 border-radius muonngay" data-bookId1="{{$item->id}}" data-img1="{{$item->img}}"  data-cat1="{{$item->f_cat->first()->name}}" data-name1="{{$item->name}}" data-price1="{{$item->price}}" data-des1="{{$item->des}}">Thuê ngay    </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>