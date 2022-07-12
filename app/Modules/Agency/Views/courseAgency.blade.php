@extends('V_backend.index')
@section('content')
    <div class="content-wrapper">

    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
       
        <div class="col-md-12 mt-3">
          <div class="box">
            <div class="box-header">
               <h3 class="box-title">Danh sách khóa học</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>Tên</th>
                        <th>Gói mua</th>
                        {{-- <th>Mô tả</th> --}}
                        <th class="text-center">Giá <br>không coupon</th>
                        <th class="text-center">Giá có coupon <br>giảm {{$percen_coupon->value}}%</th>
      
                        <th class="text-center">Hoa hồng <br>được nhận {{$discount_1->value}}%</th>
                        <th class="text-center">Hoa hồng <br>được nhận {{$discount_2->value}}%</th>
                        <th class="text-center">Hoa hồng <br>được nhận {{$discount_3->value}}%</th>
                        <th class="text-center">Hoa hồng <br>được nhận {{$discount_4->value}}%</th>
                  
                    
                </tr>
                @if(count($course_list) != 0)
                    @foreach($course_list as $key => $val)
                        <tr>
                            <td class="">
                                {{$val->title}}<br>
                                <a target="_blank" href="{{asset($val->url.'.html?coupon='.Auth::user()->coupon)}}">
                                    Xem link
                                </a>
                            </td>
                            <td class="">
                                <select class="form-control select_price_{{$val->id}}">
                                    @foreach($val->f_price as $price)
                                        <option value="{{$price->month}}" data-price="{{$price->price}}" data-price_old="{{$price->price_old}}" data-html_price="{{number_format($price->price)}} đ" data-html_price_old="{{number_format($price->price_old)}} đ">
                                            @if($price->month == 0)
                                                Vĩnh viễn
                                            @elseif($price->month  % 12  == 0)
                                               {{$price->month/12}} năm
                                            @else
                                                {{$price->month}} tháng
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                                <script>
                                    $('.select_price_{{$val->id}}').change(function(){
                                        var price = $(this).find(':selected').data('price')
                                        var price_old = $(this).find(':selected').data('price_old')
                                        var price_html = $(this).find(':selected').data('html_price')
                                        var price_old_html = $(this).find(':selected').data('html_price_old')

                                        // gia khong coupon 
                                        $('.price_course_{{$val->id}}').html(price_html);
                                        $('.price_old_course_{{$val->id}}').html(price_old_html);

                                        
                                        // gia co coupon 
                                        var coupon = '{{$percen_coupon->value}}';
                                        var price_coupon =  price_old/100*(100-coupon);
                                        $('.price_coupon_{{$val->id}}').html(price_coupon).simpleMoneyFormat();

                                        //gia giam moc 1
                                        var percen_discount_1 = '{{$discount_1->value}}';
                                        var discount_1 =  price_coupon/100*percen_discount_1;
                                        $('.price_discount_1_{{$val->id}}').html(discount_1).simpleMoneyFormat();

                                        //gia giam moc 2
                                        var percen_discount_2 = '{{$discount_2->value}}';
                                        var discount_2 =  price_coupon/100*percen_discount_2;
                                        $('.price_discount_2_{{$val->id}}').html(discount_2).simpleMoneyFormat();

                                        //gia giam moc 3
                                        var percen_discount_3 = '{{$discount_3->value}}';
                                        var discount_3 =  price_coupon/100*percen_discount_3;
                                        $('.price_discount_3_{{$val->id}}').html(discount_3).simpleMoneyFormat();

                                        //gia giam moc 4
                                        var percen_discount_4 = '{{$discount_4->value}}';
                                        var discount_4 =  price_coupon/100*percen_discount_4;
                                        $('.price_discount_4_{{$val->id}}').html(discount_4).simpleMoneyFormat();

                                    });
                                </script>
                            </td>
                               {{-- giam khi ko coupon  --}}
                            <td class="text-center">
                                <span class="price_course_{{$val->id}} text-danger font-weight-bold">{{number_format($val->f_price->first()->price)}} đ</span> <br>
                                <span class="price_old_course_{{$val->id}}" style="text-decoration: line-through;">{{number_format($val->f_price->first()->price_old)}} đ<span>
                            </td>
                            {{-- giam khi co coupon  --}}
                            <td class="text-center">
                                <?php 
                                    // Giá gôc 
                                    $price = $val->f_price->first()->price_old;
                                    $percen_coupon =  $percen_coupon->value;
                                    $price_coupon = $price/100*(100-$percen_coupon);

                                ?>
                                <span class="price_coupon_{{$val->id}}">{{number_format($price_coupon)}}</span> đ
                            </td>
                            {{-- giam moc 1  --}}
                            <td class="text-center">
                                <?php 
                                    $percen_discount_1 =  $discount_1->value;
                                    $price_discount_1 = $price_coupon/100*$percen_discount_1;
                                ?>
                                <span class="price_discount_1_{{$val->id}}">{{number_format($price_discount_1)}}</span> đ
                            </td>
                            {{-- giam moc 2  --}}
                            <td class="text-center">
                                <?php 
                                    $percen_discount_2 =  $discount_2->value;
                                    $price_discount_2 = $price_coupon/100*$percen_discount_2;
                                ?>
                                <span class="price_discount_2_{{$val->id}}">{{number_format($price_discount_2)}}</span> đ
                            </td>
                            {{-- giam moc 3  --}}
                            <td class="text-center">
                                <?php 
                                    $percen_discount_3 =  $discount_3->value;
                                    $price_discount_3 = $price_coupon/100*$percen_discount_3;
                                ?>
                                <span class="price_discount_3_{{$val->id}}">{{number_format($price_discount_3)}}</span> đ
                            </td>
                            {{-- giam moc 4  --}}
                            <td class="text-center">
                                <?php 
                                    $percen_discount_4 =  $discount_4->value;
                                    $price_discount_4 = $price_coupon/100*$percen_discount_4;
                                ?>
                                <span class="price_discount_4_{{$val->id}}">{{number_format($price_discount_4)}}</span> đ
                            </td>
                        </tr>
                    @endforeach   
                @else
                    <tr>
                        <td colspan="9" class="text-center">
                        <h6>Trống</h6>
                        </td>
                    </tr>
                @endif
            </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              
            </div>
           
          </div>
  
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection