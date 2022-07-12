@extends('V_fontend.index')
@section('content')
    <div class="container mt-3">

        {{-- anh infor --}}
        <div class="row">

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <img class="w-100" src="{{ asset('/source/book/' . $book->img) }}" />
                    </div>
                    <div class="col-md-7">
                        <div class="book_infor">
                            <h1 class="title_book">{{ $book->name }}</h1>
                            <div class="book-author-share">
                                <p class="author">Tác giả: <span>{{ $book->author }}</span> </p>
                                <p class="">Thể Loại: <span>{{ $cat->name }}</span> </p>
                                <p class="author">Nhà Xuất Bản: <span>{{ $comp->name }}</span> </p>
                                </ul>
                            </div>
                            <div class="des">
                                <p class="author">Mô tả: <span>{{ $book->des }}</span> </p>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-6">
                                    <div class="booktentPrice font20">
                                        Giá Sách: <span class="text-organ">{{ number_format($book->price) }} đ</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6 text-left">
                                    <span class="bookRented border-radius bg-blue text-center py-1 px-3">
                                        Đã mượn {{ $book->count_rent }}/{{ $book->soluong }} quyển
                                    </span>
                                </div>
                            </div>

                            <div class="rent_book mt-3">
                                {{-- <button type="button" data-toggle="modal" data-target="@if (Auth::user()){{'#muonModel'}}
                            @else{{'#LoginModal '}} @endif" class="btn btn-sm px-3 btn-pin border-radius muonngay"
                            data-bookId1="{{$book->id}}" data-img1="{{$book->img}}" data-cat1="{{$cat->name}}"
                            data-name1="{{$book->name}}" data-price1="{{$book->price}}" data-des1="{{$book->des}}">Thuê
                            ngay </button> --}}
                                <button type="button" data-toggle="modal"
                                    data-target="@if (Auth::user()) {{ '#muonModel' }} @else{{ '#LoginModal ' }} @endif"
                                    class="btn btn-sm px-3 btn-primary border-radius muonngay" data-type="mua"
                                    data-bookId="{{ $book->id }}" data-img="{{ $book->img }}"
                                    data-cat="{{ $cat->name }}" data-name="{{ $book->name }}"
                                    data-price="{{ $book->price }}" data-des="{{ $book->des }}">Mua ngay </button>
                                <button type="button" data-toggle="modal"
                                    data-target="@if (Auth::user()) {{ '#muonModel' }} @else{{ '#LoginModal ' }} @endif"
                                    class="btn btn-sm px-3 btn-pin border-radius muonngay"data-type="thue"
                                    data-bookId="{{ $book->id }}" data-img="{{ $book->img }}"
                                    data-cat="{{ $cat->name }}" data-name="{{ $book->name }}"
                                    data-price="{{ $book->price }}" data-des="{{ $book->des }}">Thuê ngay </button>
                            </div>
                
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
        {{-- chi tiet --}}
        <div class="row">
            <div class="content">
                <div class="title_content">
                    <h1>Nội dung sách</h1>
                </div>
                <?php echo html_entity_decode($book->content); ?>
            </div>
        </div>
        {{-- review --}}

        <div class="row">
            <div class="col-md-12">
                <div class="preview">
                    <div class="title-rate">
                        <h2>
                            Đánh Giá
                        </h2>
                    </div>
                    <form action="{{ asset('auth/comment') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                        <input type="hidden" name="review" id="reviewInput" value="0">
                        <div class="preview_rate">
                            <div class="container d-flex justify-content-start">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="stars">
                                            <input class="star star-5" id="star-5" type="radio" name="star" value="5" />
                                            <label class="star star-5" for="star-5"></label>
                                            <input class="star star-4" id="star-4" type="radio" name="star" value="4" />
                                            <label class="star star-4" for="star-4"></label>
                                            <input class="star star-3" id="star-3" type="radio" name="star" value="3" />
                                            <label class="star star-3" for="star-3"></label>
                                            <input class="star star-2" id="star-2" type="radio" name="star" value="2" />
                                            <label class="star star-2" for="star-2"></label>
                                            <input class="star star-1" id="star-1" type="radio" name="star" value="1" />
                                            <label class="star star-1" for="star-1"></label>
                                        </div>
                                        <script>
                                            $('.star').click(function() {
                                                var val = $(this).val();
                                                $('#reviewInput').val(val);
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="preview_comment">
                            <h5>Thêm nhận xét/ câu hỏi</h5>
                            <textarea name="content" id="comment" cols='400' rows='5' class="textarea_comment"></textarea>
                            @if (Auth::user())
                                <button type="submit" class="  btn left-end btn-primary d-flex  muonngay">Đăng </button>
                            @else
                                {{-- <button type="submit"
                        class="  btn left-end btn-primary d-flex  muonngay">Đăng </button> --}}
                                <button type="button" data-toggle="modal"
                                    data-target="@if (Auth::user()) {{ '#muonModel' }} @else{{ '#LoginModal ' }} @endif"
                                    class="btn btn-primary muonngay" data-bookId="{{ $book->id }}"
                                    data-img="{{ $book->img }}"
                                    data-cat1="@if (isset($item->f_cat)) {{ $item->f_cat->first()->name }} @endif"
                                    data-comp="@if (isset($item->f_company)) {{ $item->f_company->name }} @endif"
                                    data-name="{{ $book->name }}" data-price="{{ $book->price }}"
                                    data-des="{{ $book->des }}">Đăng</button>
                            @endif

                        </div>

                        {{-- <div class="comment_list">
                      
                            <div class="stars">
                                @for ($i = 0; $i < $item->review; $i++)
                                    <i class="fa-solid fa-star text-warning"></i>
                                @endfor
                                @php 
                                    $star_yellow = $item->review;
                                    $star_black = 5 - $star_yellow;
                                @endphp
                                @for ($i = 0; $i < $star_black; $i++)
                                    <i class="fa-solid fa-star text-dark"></i>
                                @endfor
                               
                            </div>
                            <hr>
                      
                    </div> --}}
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="comment_list">

                    @foreach ($comment_list as $key => $item)
                        <div class="preview_customer mb-5 mt-5">
                            <div class="ifo_previer d-flex">

                                <div class="ifo_previer_img  justify-content-start">

                                    <img class="mt-1 "
                                        src="https://yt3.ggpht.com/ytc/AKedOLSmErS9ZWagmy-9UQhlnzG8TztmCqqiqbQggSJkgg=s48-c-k-c0x00ffffff-no-rj"
                                        width="50px" alt="">
                                </div>
                                <div class="ifo_previer_name ml-1 ">
                                    <p class="font-weight-bold mt-1 mb-2"> {{ $item->name }}</p>
                                    <span class="ifo_previer_sdt mb-2">
                                        <div class="stars">
                                            @for ($i = 0; $i < $item->review; $i++)
                                                <i class="fa-solid fa-star text-warning"></i>
                                            @endfor
                                            @php
                                                $star_yellow = $item->review;
                                                $star_black = 5 - $star_yellow;
                                            @endphp
                                            @for ($i = 0; $i < $star_black; $i++)
                                                <i class="fa-solid fa-star text-dark"></i>
                                            @endfor
                                        </div>
                                    </span>
                                </div>
                                {{ $item->content }}

                                <hr>
                                {{-- <div class="time_preview w-100 text-right">
                                30 phút trước
                            </div> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection('content')
