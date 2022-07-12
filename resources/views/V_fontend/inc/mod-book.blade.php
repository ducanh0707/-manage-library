 <div class="infor_book">
    <div class="row">
        <div class="col-3">
            <div class="infor-left">
                <a href="{{asset($item->url.'.html')}}">
                    @if($item->img)
                    <img class="img-left " src="{{asset('/source/book/'.$item->img)}}" />
                    @else
                    <img class="img-left" src="{{asset('img_webux/noimg.jpg')}}" />
                    @endif
                </a>
            </div>
        </div>
        <div class="col-6">
            <div class="infor-between">
                <div class="name_book">{{$item->name}}</div>
                <div class="infor_detail">
                    <p> Nhà xuất bản: @if(isset($item ->f_company)){{$item ->f_company->name}}@endif</p>
                    <p> Số Trang: {{$item -> num_pages}}</p>
                    <p>Giá Bán: {{number_format($item ->price)}} đ</p>
                    <p>Số lượng:
                    @php
                     echo $item->soluong -$item->so_luong_waiting      
                    @endphp    
                    </p>
                    <p> <i>{{$item ->des}}</i></p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="infor-right">
                <div class="detail_book">
                    <a href="{{asset($item->url.'.html')}}"> <button type="button"  class="btn btn-success">Chi Tiết</button></a>
                </div>
                <div class="buy_book">
                    <button type="button" data-toggle="modal" data-target="@if(Auth::user()){{'#muonModel'}} @else{{'#LoginModal '}}  @endif"  class="btn btn-primary muonngay" data-type="mua" data-bookId="{{$item->id}}" data-img="{{$item->img}}"  data-cat1="@if(isset($item ->f_cat)){{$item ->f_cat->first()->name}}@endif" data-comp="@if(isset($item->f_company)){{$item->f_company->name}}@endif" data-name="{{$item->name}}" data-price="{{$item->price}}" data-des="{{$item->des}}">Mua Ngay</button>
                </div>
                <div class="rent_book">
                    <button type="button" data-toggle="modal" data-target="@if(Auth::user()){{'#muonModel'}} @else{{'#LoginModal '}}  @endif"  class="btn btn-danger muonngay"  data-type="thue" data-bookId="{{$item->id}}" data-img="{{$item->img}}"  data-cat1="@if(isset($item ->f_cat)){{$item ->f_cat->first()->name}}@endif" data-comp="@if(isset($item->f_company)){{$item->f_company->name}}@endif" data-name="{{$item->name}}" data-price="{{$item->price}}" data-des="{{$item->des}}">Thuê ngay    </button>
                </div>
            </div>

             <script>

                $('.muonngay').click(function(){
                    var type = $(this).data('type');
                    if(type == 'mua'){
                        $('.row-coupon').css('display','');
                        $('.buttonActionthue').css('display','none');
                        $('.buttonActionmua').css('display','');
                    }else{
                         $('.row-coupon').css('display','none');
                        $('.buttonActionthue').css('display','');
                        $('.buttonActionmua').css('display','none');
                    }

                    
                });
            </script>

        </div>  
    </div>
</div>