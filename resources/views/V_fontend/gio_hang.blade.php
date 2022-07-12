@extends('V_fontend.index')
@section('content')
<?php  date_default_timezone_set('Asia/Krasnoyarsk'); ?>
<div class='container'>
    @include('V_backend/alert')
    <form action="{{asset('_thanh_toan_.html5')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class='row shopping-cart'>
            <div class='col-md-12 text-center'>
                <div class="shopping-cart-title">
                    <h2>Giỏ hàng</h2>
                </div>
                <div class="feature_divider"></div>
            </div>
            <div class='col-md-12'>
                <h3>Sản phẩm đã chọn</h3>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ảnh</th>
                            <th>Sản phẩm</th>
                            <th width="100px">Đơn giá</th>
                            <th class="text-center">Số lượng</th>
                            <th width="100px"> Giảm giá</th>
                            <th width="130px">Thành tiền</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($book_list))
                            @if(count($book_list)>0)
                                @foreach($book_list as $key => $book_list_r)
                                    <tr id="p_{{$key}}">
                                        <th scope="row">{{$key+1}}</th>
                                        <td>
                                            <img src="{{asset('source/post/'.$book_list_r->img)}}" width="50px">
                                        </td>
                                        <td>
                                            <a target="_blank"
                                                href="{{asset($book_list_r->url.'.html')}}"
                                                class="text-dark">
                                                {{$book_list_r->title}}
                                            </a>

                                        </td>

                                        <td>
                                            @if($book_list_r -> price_km != '' or $book_list_r -> price_km != 0)
                                                @php $book_list_r -> price = $book_list_r -> price_km @endphp
                                            @endif
                                            @if($book_list_r->price)<span style="display: flex;">
                                                <span class="money">{{$book_list_r->price}}</span>
                                                <script>
                                                    $(document).ready(function () {
                                                        $('#xoa_{{$book_list_r->id}}').attr('data-dongia',
                                                            '{{$book_list_r->price}}');
                                                    });

                                                </script>
                                                @else 0
                                                <script>
                                                    $(document).ready(function () {
                                                        $('#xoa_{{$book_list_r->id}}').attr('data-dongia', 0);
                                                    });

                                                </script>
                                                @endif đ
                                            </span>

                                        </td>
                                        <td class="text-center">
                                            <div style="display:flex;justify-content: center;">
                                                <span id="giam_{{$book_list_r->id}}"
                                                    class="border pt-1 px-2 font-weight-bold bg-white" style="cursor: pointer;"> -
                                                </span>
                                                <input name="so_luong[{{$book_list_r->id}}]" style="width:50px" type="text" min="1" max="100000000" value="1" class="form-control form-control-sm bg-white text-center" id="so_luong_{{$book_list_r->id}}">
                                                <span id="tang_{{$book_list_r->id}}"
                                                    class="border pt-1 px-2 font-weight-bold bg-white" style="cursor: pointer;"> +
                                                </span>
                                            </div>
                                          
                                        </td>
                                        {{-- giam gia  --}}
                                        <td>
                                            @if(isset($book_list_r->f_gift_code))
                                                {{-- neu giam gia bang tien  --}}
                                                @if($book_list_r->f_gift_code -> type == 'price')
                                                    <span style="display: flex;"><span class="money"
                                                            id="giamgia_{{$book_list_r->id}}">{{$book_list_r->f_gift_code ->price}}</span>
                                                        đ</span>
                                                    <script>
                                                        //add tien vao gia giam
                                                        $(document).ready(function () {
                                                            var giamgia_t = '{{$book_list_r->f_gift_code ->price}}';
                                                            var tonggiamgia_t = $('#i_giamgia').val();
                                                            var tongiamgia_add = parseInt(giamgia_t) + parseInt(tonggiamgia_t)
                                                            $('#i_giamgia').val(tongiamgia_add);
                                                            //add giam gia vao nut xoa
                                                            $('#xoa_{{$book_list_r->id}}').attr('data-giamgia', giamgia_t);
                                                        });

                                                    </script>
                                                    <input type="hidden" id="i_giam_gia_one_{{$book_list_r->id}}" value="{{$book_list_r->f_gift_code ->price}}">
                                                    {{-- //neu giam gia bang phan tram  --}}
                                                @elseif($book_list_r->f_gift_code -> type == 'percent')
                                                    <?php $price_per = $book_list_r->price/100*$book_list_r->f_gift_code->percent  ?>
                                                    <span style="display: flex;"> <span class="money"
                                                            id="giamgia_{{$book_list_r->id}}">{{$price_per}}</span> đ <br></span>
                                                    (- {{$book_list_r->f_gift_code ->percent}} %)
                                                    <script>
                                                        //add tien vao gia giam
                                                        $(document).ready(function () {
                                                            var giamgia_t = '{{$price_per}}';
                                                            var tonggiamgia_t = $('#i_giamgia').val();
                                                            var tongiamgia_add = parseInt(giamgia_t) + parseInt(tonggiamgia_t)
                                                            $('#i_giamgia').val(tongiamgia_add);
                                                            //add giam gia vao nut xoa
                                                            $('#xoa_{{$book_list_r->id}}').attr('data-giamgia', giamgia_t);
                                                        });

                                                    </script>
                                                    <input type="hidden" id="i_giam_gia_one_{{$book_list_r->id}}" value="{{$price_per}}">
                                                @endif
                                            @else
                                                0 đ
                                                <script>
                                                    $(document).ready(function () {
                                                        $('#xoa_{{$book_list_r->id}}').attr('data-giamgia', 0);
                                                    });

                                                </script>
                                                <input type="hidden" id="i_giam_gia_one_{{$book_list_r->id}}" value="0">
                                            @endif

                                        </td>
                                        {{-- thanh tien  --}}
                                        <td>
                                            @if($book_list_r->price)
                                            @if(isset($book_list_r->f_gift_code))
                                            @if($book_list_r->f_gift_code -> type == 'price')
                                            <span style="display: flex;">
                                                <span class="money"
                                                    id="thanhtien_{{$book_list_r->id}}">{{$book_list_r->price - $book_list_r->f_gift_code ->price}}</span>
                                                đ
                                            </span>
                                            <script>
                                                //add tien vào tong tien
                                                $(document).ready(function () {
                                                    var thanhtien_t =
                                                        '{{$book_list_r->price - $book_list_r->f_gift_code ->price}}';
                                                    var tongtien_t = $('#i_tongtien').val();
                                                    var tongtien_add = parseInt(thanhtien_t) + parseInt(tongtien_t)
                                                    $('#i_tongtien').val(tongtien_add);
                                                    $('#i_tongtien_first').val(tongtien_add);
                                                    $('#ic_tongtien').val(tongtien_add * 100);
                                                    //add tong tien vao nut xoa
                                                    $('#xoa_{{$book_list_r->id}}').attr('data-thanhtien', thanhtien_t);
                                                });

                                            </script>
                                            @elseif($book_list_r->f_gift_code -> type == 'percent')
                                            <span style="display: flex;"> <span class="money"
                                                    id="thanhtien_{{$book_list_r->id}}">{{$book_list_r->price - $price_per}}</span> đ
                                                <br></span>
                                            <script>
                                                //add tien vào tong tien
                                                $(document).ready(function () {
                                                    var thanhtien_t = '{{$book_list_r->price - $price_per}}';
                                                    var tongtien_t = $('#i_tongtien').val();
                                                    var tongtien_add = parseInt(thanhtien_t) + parseInt(tongtien_t)
                                                    $('#i_tongtien').val(tongtien_add);
                                                    $('#i_tongtien_first').val(tongtien_add);
                                                    $('#ic_tongtien').val(tongtien_add * 100);
                                                    //add tong tien vao nut xoa
                                                    $('#xoa_{{$book_list_r->id}}').attr('data-thanhtien', thanhtien_t);
                                                });

                                            </script>
                                            @endif
                                            @else
                                            <span style="display: flex;"> <span class="money"
                                                    id="thanhtien_{{$book_list_r->id}}">{{$book_list_r->price}}</span> đ</span>
                                            <script>
                                                //add tien vào tong tien
                                                $(document).ready(function () {
                                                    var thanhtien_t = '{{$book_list_r->price}}';
                                                    var tongtien_t = $('#i_tongtien').val();
                                                    var tongtien_add = parseInt(thanhtien_t) + parseInt(tongtien_t)
                                                    $('#i_tongtien').val(tongtien_add);
                                                    $('#i_tongtien_first').val(tongtien_add);
                                                    $('#ic_tongtien').val(tongtien_add * 100);
                                                    //add tong tien vao nut xoa
                                                    $('#xoa_{{$book_list_r->id}}').attr('data-thanhtien', thanhtien_t);
                                                });

                                            </script>
                                            @endif
                                            @else
                                            0 đ
                                            <script>
                                                $(document).ready(function () {
                                                    $('#xoa_{{$book_list_r->id}}').attr('data-thanhtien', 0);
                                                });

                                            </script>
                                            @endif

                                        </td>

                                        <td>
                                            <span data-thanhtien="" data-giamgia="" id="xoa_{{$book_list_r->id}}"
                                                class="btn btn-danger btn-sm del_cart" data-key="{{$key}}"
                                                data-productdelid="{{$book_list_r->id}}" style="cursor:pointer">Xóa</span>
                                        </td>
                                    </tr>

                                    <script>
                                        // giam so luong         
                                        $('#giam_{{$book_list_r->id}}').click(function () {
                                            var count_val = $('#so_luong_{{$book_list_r->id}}').val();
                                            if (count_val > 1) {
                                                $('#so_luong_{{$book_list_r->id}}').val(parseInt(count_val) - 1);
                                                //tinh gia giam
                                                var soluong = $('#so_luong_{{$book_list_r->id}}').val();
                                                var giftprice = $('#i_giam_gia_one_{{$book_list_r->id}}').val();
                                                var giamgia = soluong * giftprice;
                                                $('#giamgia_{{$book_list_r->id}}').html(giamgia).simpleMoneyFormat();
                                                //tinh thanh tien 
                                                var price = '{{$book_list_r->price}}';
                                                var thanhtien = price * soluong - giamgia;
                                                $('#thanhtien_{{$book_list_r->id}}').html(thanhtien).simpleMoneyFormat();
                                                //ad thanh tien nut xoa
                                                $('#xoa_{{$book_list_r->id}}').attr('data-thanhtien', thanhtien);
                                                $('#xoa_{{$book_list_r->id}}').attr('data-giamgia', giamgia);

                                                if (price != 0) {
                                                    //tinh tong gia chua giam
                                                    var i_tamtinh = $('#i_tamtinh').val();
                                                    var tong_tamtinh = parseInt(i_tamtinh) - parseInt(price);
                                                    $('#tam_tinh').html(tong_tamtinh).simpleMoneyFormat();
                                                    $('#i_tamtinh').val(tong_tamtinh);

                                                    //tih tong gia giam
                                                    var i_giamgia = $('#i_giamgia').val();
                                                    var tong_giamgia = parseInt(i_giamgia) - parseInt(giftprice);
                                                    $('#giam_gia').html(tong_giamgia).simpleMoneyFormat();
                                                    $('#i_giamgia').val(tong_giamgia);

                                                    //tinh tong gia 
                                                    var tong_tien_tang = parseInt(tong_tamtinh) - parseInt(tong_giamgia);
                                                    $('#tong_tien').html(tong_tien_tang).simpleMoneyFormat();
                                                    $('#i_tongtien').val(tong_tien_tang);
                                                    $('#i_tongtien_first').val(tong_tien_tang);
                                                    $('#ic_tongtien').val(tong_tien_tang * 100);
                                                }
                                            }
                                        });

                                        // tang so luong 
                                        $('#tang_{{$book_list_r->id}}').click(function () {
                                            // tang goa luong 
                                            var count_val = $('#so_luong_{{$book_list_r->id}}').val();
                                            $('#so_luong_{{$book_list_r->id}}').val(parseInt(count_val) + 1);

                                            //tinh gia giam
                                            var soluong = $('#so_luong_{{$book_list_r->id}}').val();
                                            var giftprice = $('#i_giam_gia_one_{{$book_list_r->id}}').val();
                                            var giamgia = soluong * giftprice;
                                            $('#giamgia_{{$book_list_r->id}}').html(giamgia).simpleMoneyFormat();
                                            //tinh thanh tien 
                                            var price = '{{$book_list_r->price}}';
                                            var thanhtien = price * soluong - giamgia;
                                            $('#thanhtien_{{$book_list_r->id}}').html(thanhtien).simpleMoneyFormat();
                                            //ad thanh tien nut xoa
                                            $('#xoa_{{$book_list_r->id}}').attr('data-thanhtien', thanhtien);
                                            $('#xoa_{{$book_list_r->id}}').attr('data-giamgia', giamgia);

                                            if (price != 0) {
                                                //tinh tong gia chua giam
                                                var i_tamtinh = $('#i_tamtinh').val();
                                                var tong_tamtinh = parseInt(price) + parseInt(i_tamtinh);
                                                $('#tam_tinh').html(tong_tamtinh).simpleMoneyFormat();
                                                $('#i_tamtinh').val(tong_tamtinh);

                                                //tih tong gia giam
                                                var i_giamgia = $('#i_giamgia').val();
                                                var tong_giamgia = parseInt(giftprice) + parseInt(i_giamgia);
                                                $('#giam_gia').html(tong_giamgia).simpleMoneyFormat();
                                                $('#i_giamgia').val(tong_giamgia);

                                                //tinh tong gia 
                                                var tong_tien_tang = parseInt(tong_tamtinh) - parseInt(tong_giamgia);
                                                $('#tong_tien').html(tong_tien_tang).simpleMoneyFormat();
                                                $('#i_tongtien').val(tong_tien_tang);
                                                $('#i_tongtien_first').val(tong_tien_tang);
                                                $('#ic_tongtien').val(tong_tien_tang * 100);
                                            }
                                        });

                                    </script>
                                @endforeach
                                    {{-- id product  --}}
                                @foreach($book_list as $book_list_id_r)
                                    {{-- @php $book_list_id_a[] =  -> id @endphp --}}
                                    <?php $book_list_id_a[] = $book_list_id_r->id ?>
                                @endforeach

                                <input type="hidden" name="vpc_k_product_id" id="list_order" value="{{json_encode($book_list_id_a)}}">
                              
                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        $('.money').simpleMoneyFormat();
                                    });

                                </script>
                                <tr class="bg-white font-weight-bold">
                                    <td colspan="6" class="text-right">Tạm tính</td>
                                    <td colspan="2">
                                        <span class="money" id="tam_tinh">{{$book_list->sum('price')}}</span> đ
                                        <input type="hidden" id="i_tamtinh" value="{{$book_list->sum('price')}}">

                                    </td>
                                </tr>
                                <tr class="bg-white font-weight-bold">
                                    <td colspan="6" class="text-right">Mã giảm giá</td>
                                    <td colspan="2">
                                        <input type="text" class="form-control form-control-sm" name="i_magiamgia_code"
                                            id="i_magiamgia">
                                        <input type="hidden" id="i_price_ma_giam" value="0">
                                        <span id="noti_ma_km" class="text-danger" style="display:none"><span
                                                id="price_ma_km"></span> đ</span>
                                        <span id="noti_ma_km_loi" class="text-danger"></span>
                                    </td>
                                    <script>
                                        $('#i_magiamgia').change(function () {
                                            var token = '{{ csrf_token() }}';
                                            var code = $('#i_magiamgia').val();
                                            if (code != '') {
                                                var tong_tien_ma = $('#i_tongtien_first').val();
                                                $.get("{{asset('app/ma')}}/" + code + "/" + tong_tien_ma, function (
                                                    data) {
                                                    var intRegex = /^\d+$/;
                                                    var floatRegex = /^((\d+(\.\d *)?)|((\d*\.)?\d+))$/;
                                                    //neu la so 
                                                    if (intRegex.test(data) || floatRegex.test(data)) {
                                                        $('#noti_ma_km_loi').html('');
                                                        $("#i_price_ma_giam").val(data);
                                                        $("#price_ma_km").html(data).simpleMoneyFormat();
                                                        $("#noti_ma_km").css('display', 'unset');
                                                        /// cong vao giam gia 
                                                        var i_giamgia = $('#i_giamgia').val();
                                                        var price_giam_add = 0 + parseInt(
                                                            data);
                                                        $('#i_giamgia').val(price_giam_add);
                                                        $('#giam_gia').html(price_giam_add).simpleMoneyFormat();

                                                        var i_tongtien = $('#i_tongtien_first').val();
                                                        var price_tong_add = parseInt(i_tongtien) - parseInt(
                                                            data);
                                                        //tru vao tong gia
                                                        $('#i_tongtien').val(price_tong_add);
                              
                                                        $('#ic_tongtien').val(price_tong_add * 100);
                                                        $('#tong_tien').html(price_tong_add)
                                                            .simpleMoneyFormat();html
                                                        
                                                    } else {
                                                        // neu sai khong lai tien
                                                        var tt_las = $('#i_tongtien_first').val();
                                                        $('#i_tongtien').val(tt_las);
                                                        $('#tong_tien').html(tt_las).simpleMoneyFormat();
                                                        $('#giam_gia').html('');
                                                        $("#noti_ma_km_loi").html(data);
                                                        $("#price_ma_km").html('');
                                                    }

                                                });
                                            } else {
                                                //tru gia giam
                                                var i_price_ma_giam = $("#i_price_ma_giam").val();
                                                var i_giamgia = $('#i_giamgia').val();
                                                var price_giam_add = parseInt(i_giamgia) - parseInt(i_price_ma_giam);
                                                $('#i_giamgia').val(price_giam_add);
                                                $('#giam_gia').html(price_giam_add).simpleMoneyFormat();

                                                //cong tong gia
                                                var i_tongtien = $('#i_tongtien').val();
                                                var price_tong_add = parseInt(i_tongtien) + parseInt(i_price_ma_giam);
                                                //tru vao tong gia
                                                $('#i_tongtien').val(price_tong_add);
                                        
                                                $('#ic_tongtien').val(price_tong_add * 100);
                                                $('#tong_tien').html(price_tong_add).simpleMoneyFormat();
                                                $("#i_price_ma_giam").val(0);
                                                $('#noti_ma_km_loi').html('');
                                                        $("#price_ma_km").html('');
                                            }
                                        });

                                    </script>
                                </tr>
                                <tr class="bg-white font-weight-bold">
                                    <td colspan="6" class="text-right">Giảm giá</td>
                                    <td colspan="2">
                                        <span class="money" id="giam_gia"></span> đ
                                        <input name="vpc_k_giamgia" type="hidden" id="i_giamgia" value="0">
                                    </td>
                                </tr>
                                <tr class="bg-white font-weight-bold">
                                    <td colspan="6" class="text-right">Tổng tiền <span class="va_tt" style="display:none">(VAT 10%)</span></td>
                                    <td colspan="2">
                                        <span id="tong_tien">0</span> đ
                                        <input type="hidden">
                                        <input type="hidden" id="i_tongtien" value="0" size="20" maxlength="20" />
                                        <input type="hidden" id="i_tongtien_first" value="0" size="20" maxlength="20" />
                                        {{-- tong tien chua vat  --}}
                                        <input type="hidden" id="i_tongtien_0vat" value="0" />
                                    </td>
                                </tr>
                            @endif
                        @else
                            Ban chưa có sản phẩm trong giỏi hàng
                        @endif
                    </tbody>
                    <script>
                        // tong tien
                        $(document).ready(function () {
                            // hien thi tong tien giam gia tu in put
                            var thanhtien_giam = $('#i_giamgia').val();
                            $('#giam_gia').html(thanhtien_giam).simpleMoneyFormat();

                            // hien thi tong tien tun in put
                            var thanhtien = $('#i_tongtien').val();
                            $('#i_tongtien').val(thanhtien);
                            $('#i_tongtien_first').val(thanhtien);
                            $('#tong_tien').html(thanhtien).simpleMoneyFormat();
                        });

                    </script>
                </table>
                <script>
                    // xoa san pham 
                    $(document).ready(function () {
                        $('.del_cart').click(function () {
                            var token = '{{ csrf_token() }}';
                            var product_id = $(this).data('productdelid');
                            $.ajax({
                                type: "POST",
                                url: '{{asset('')}}_del_gio_hang_',
                                dataType: "json",
                                data: {
                                    post_id: product_id,
                                    _token: token
                                },
                            });
                            var key = $(this).data('key');
                            $('#p_' + key).remove();
                            //tinh lai gia
                            //tinh gia tam tinh
                            var d_i_tamtinh = $('#i_tamtinh').val();
                            var d_dongia = $(this).data('dongia');
                            var d_tam_tinh = parseInt(d_i_tamtinh) - parseInt(d_dongia);
                            $('#i_tamtinh').val(d_tam_tinh);
                            $('#tam_tinh').html(d_tam_tinh).simpleMoneyFormat();

                            //tinh giam giam
                            var d_i_giamgia = $('#i_giamgia').val();
                            var d_giamgia = $(this).data('giamgia');
                            var d_giamgia = d_i_giamgia - d_giamgia;
                            $('#i_giamgia').val(d_giamgia);
                            $('#giam_gia').html(d_giamgia).simpleMoneyFormat();

                            //tinh lai tong tien
                            var d_tongtien = d_tam_tinh - d_giamgia;
                            $('#i_tongtien').val(d_tongtien);
                            $('#i_tongtien_first').val(d_tongtien);
                            $('#ic_tongtien').val(d_tongtien * 100);
                            $('#tong_tien').html(d_tongtien).simpleMoneyFormat();
                            //cap nhat id
                            jsonObj = [];
                            $('.del_cart').each(function(){
                                var prod = $(this).data('productdelid');
                                jsonObj.push(prod);
                                
                            });
                            $('#list_order').val('['+jsonObj+']');

                        });


                    });

                </script>

                
            </div>
        </div>
        <div class="row">
            {{-- thong tin  --}}
            <div class='col-md-6'>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Thông tin khách hàng</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Họ tên (*)</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Số điện thoại (*)</label>
                            <input type="number" class="form-control" name="vpc_Customer_Phone" maxlength="10" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Địa chỉ email(*)</label>
                            <input type="email" class="form-control" name="vpc_Customer_Email" maxlength="255" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tỉnh thành (*)</label>
                            <select name="vpc_SHIP_City" id="tinh" class="form-control">
                                <option value="">Trống</option>
                                @foreach($tinh_list as $tinh)
                                <option value="{{$tinh->id}}">{{$tinh->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Huyện (*)</label>
                            <select name="vpc_SHIP_Provice" id="huyen" class="form-control">
                                <option value="">Trống</option>
                            </select>
                        </div>
                    </div>
                    <script>
                        $('#tinh').change(function () {
                            var tinh_id = $('#tinh').val();
                            $.get("{{asset('app/local/huyen')}}/" + tinh_id, function (data) {
                                $("#huyen").html(data);

                            });
                        });

                    </script>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Địa chỉ nhận hàng(*)</label>
                            <input type="text" class="form-control" name="vpc_SHIP_Street01" required>
                        </div>
                    </div>

                </div>

            </div>
            {{-- dieu khoan  --}}
            <div class="col-md-6">
                <div class="thanh_toan">
                    {{-- hinh thuc thanh toan  --}}
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Hình thức thanh toán</h4>
                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="hinh-thuc-tt">
                                {{-- cod  --}}
                                <div class="form-check">
                                    <input class="form-check-input pp_tt" type="radio" name="vpc_CardList" id="cod" value="cod" checked>
                                    <label class="form-check-label" for="cod">
                                        Thanh toán khi nhận hàng (COD)<br>
                                        <i>Nhân viên chúng tôi sẽ liên hệ với quý khách trong thời gian sớm nhất.</i>
                                    </label>
                                </div>
                                {{-- noi dia  --}}
                                <div class="form-check">
                                    <input class="form-check-input pp_tt" type="radio" name="vpc_CardList" id="atm"
                                        value="970407,970423,970415,970441,970427,970426,970431,970443,970437,970436,970406,970422,970428,970440,970414,970418,970409,970432,970419,970405,970429,970403,970425,970412,970454">
                                    <label class="form-check-label" for="atm">
                                        Thanh toán bằng thẻ ATM nội địa<br>
                                    </label>
                                </div>
                                {{--  visa   --}}
                                <div class="form-check">
                                    <input class="form-check-input pp_tt" type="radio" name="vpc_CardList" id="visa"
                                        value="VC,MC,JC,AE,CUP">
                                    <label class="form-check-label" for="visa">
                                        Thanh toán bằng thẻ Quốc Tế (Visa, MasterCard, JCB)<br>
                                    </label>
                                </div>
                                <script>

                                </script>
                                {{-- cchuyen khoan   --}}
                                <div class="form-check">
                                    <input class="form-check-input pp_tt" type="radio" name="vpc_CardList"
                                        id="chuyenkhoan" value="chuyenkhoan">
                                    <label class="form-check-label" for="chuyenkhoan">
                                        Chuyển khoản Ngân hàng<br>
                                        <i>Áp dụng cho khách hàng muốn chuyển khoản trực tiếp qua ngân hàng.</i>
                                    </label>
                                </div>
                                {{-- tra gop  --}}
                                {{-- <div class="form-check">
                                    <input class="form-check-input pp_tt" type="radio" name="vpc_CardList" id="tragop"
                                        value="tragop">
                                    <label class="form-check-label" for="tragop">
                                        Trả góp qua ngân hàng (số tiền phải trên 3 triệu)<br>
                                    </label>
                                </div> --}}

                                <div class="form-group">
                                    <label>Ghi chú</label>
                                    <textarea name="note" class="form-control"></textarea>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input xuat_hd" type="radio" value="hoa_don_ban_le" name="bill" id="hoa_don_ban_le" checked>
                                    <label class="form-check-label" for="hoa_don_ban_le">
                                        Xuất hóa đơn bán lẻ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input xuat_hd" type="radio" value="hoa_don_doanh_nghiep"
                                        name="bill" id="hoa_don_doanh_nghiep">
                                    <label class="form-check-label" for="hoa_don_doanh_nghiep">
                                        Xuất hóa đơn doanh nghiệp
                                    </label>
                                    <div><i>Xuất hóa đơn khách hàng vui lòng thanh toán 10% giá trị hàng hóa</i></div>
                                </div>
                                <div class="form-group row_company mt-2" style="display:none">
                                    <div class=" border p-2 bg-light">
                                        <div class=" row">
                                            <div class="col-md-12">
                                                <label>Tên công ty</label>
                                                <input type="text" class="form-control" name="company">
                                            </div>
                                            <div class="col-md-12">
                                                <label>Mã số thuế</label>
                                                <input type="text" class="form-control" name="MST">
                                            </div>

                                            <div class="col-md-12">
                                                <label>Địa chỉ</label>
                                                <input type="text" class="form-control" name="company_address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    $('.xuat_hd').click(function(){
                                        var bill = $('input[name=bill]:checked').val();
                                        if(bill == 'hoa_don_doanh_nghiep'){
                                            $('.row_company').css('display','')
                                            // them 10% vao tong tien 
                                            var tong_tien =  $('#i_tongtien').val();
                                            var tong_tien_vat = parseInt((tong_tien/100*10))+ parseInt(tong_tien);
                                            $('#tong_tien').html(tong_tien_vat).simpleMoneyFormat();
                                            $('#i_tongtien').val(tong_tien_vat);
                                            $('#i_tongtien_first').val(tong_tien_vat);
                                            $('#i_tongtien_0vat').val(tong_tien);
                                            $('#ic_tongtien').val(tong_tien_vat * 100);
                                            $('.va_tt').css('display','');
                                        }else{
                                            var tong_tien =  $('#i_tongtien_0vat').val();
                                            var tong_tien_vat =  parseInt(tong_tien) ;
                                            $('#tong_tien').html(tong_tien_vat).simpleMoneyFormat();
                                            $('#i_tongtien').val(tong_tien_vat);
                                            $('#i_tongtien_first').val(tong_tien_vat);
                                            $('#ic_tongtien').val(tong_tien_vat * 100);

                                            $('.row_company').css('display','none')
                                            $('input[name=company]').val('');
                                            $('input[name=MST]').val('');
                                            $('input[name=company_address]').val('');
                                            $('.va_tt').css('display','none');
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-12">
            <input type="hidden" name="Title" value="VPC 3-Party" />
            {{-- cong thanh toan  --}}
            <input type="hidden" name="virtualPaymentClientURL" size="63" value="https://onepay.vn/paygate/vpcpay.op"
                maxlength="250" />
            {{-- Merchant ID --}}
            <input id="Merchant_ID" type="hidden" name="vpc_Merchant" value="OP_LONG" size="20" maxlength="16" />
            {{-- Merchant AccessCode --}}
            <input id="Merchant_AccessCode" type="hidden" name="vpc_AccessCode" value="E3007B01" size="20"
                maxlength="8" />
            {{-- Merchant Transaction Reference --}}
            <input type="hidden" name="vpc_MerchTxnRef" value="<?php echo date('YmdHis') . rand(); ?>" size="20"
                maxlength="40" />
            {{-- Transaction OrderInfo --}}
            {{-- js chuyen doi tra gop  --}}
            <script>
                $('.pp_tt').click(function () {
                    var pp = $(this).val();
                    if (pp == 'tragop') {
                        $('#Merchant_ID').val('OP_LONGTG');
                        $('#Merchant_AccessCode').val('E3007B02');
                        var tg_tong_tieng = $('#i_tongtien').val();
                        if (tg_tong_tieng <= 3000000) {
                            alert('Tổng hóa đơn của bạn phải trên 3 triệu đồng')
                            this.checked = false;
                        }
                    } else {
                        $('#Merchant_ID').val('OP_LONG');
                        $('#Merchant_AccessCode').val('E3007B01');
                    }
                });

            </script>
            {{-- Receipt ReturnURL --}}
            <input type="hidden" name="vpc_ReturnURL" size="45" value="{{asset('_thanh_toan_thanh_cong_.html5')}}"
                maxlength="250" />
            {{-- VPC Version --}}
            <input type="hidden" name="vpc_Version" value="2" size="20" maxlength="8" />
            {{-- Command Type  --}}
            <input type="hidden" name="vpc_Command" value="pay" size="20" maxlength="16" />
            {{-- Payment Server Display Language Locale  --}}
            <input type="hidden" name="vpc_Locale" value="vn" size="20" maxlength="5" />
            <input type="hidden" name="vpc_Currency" value="VND" size="20" maxlength="5" />
            <input type="hidden" name="vpc_OrderInfo" value="Thanh toán online" size="20" maxlength="5" />
            {{-- IP khách hàng  --}}
            <input type="hidden" name="vpc_TicketNo" maxlength="15" value="<?php echo $_SERVER ['REMOTE_ADDR'];  ?>" />

            {{-- tong tien thanh toan Purchase Amount --}}
            <input id="ic_tongtien" type="hidden" name="vpc_Amount" size="20" maxlength="10" />
            <input type="hidden" name="vpc_SHIP_Country" value="Viet Nam" size="20" maxlength="50" />
            {{-- hoa don  --}}

        </div>
        <div class="col-md-12 text-center my-4">
            <button id="ic_submit" type="submit" class="btn btn-primary">Đặt hàng</button>
        </div>
    </form>
</div>

@endsection('content')
