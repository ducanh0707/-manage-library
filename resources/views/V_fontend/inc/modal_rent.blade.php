  {{-- model mượn --}}
  <div class="modal fade" id="muonModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
        <form action="{{asset('form/dat-hang')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
            <input type="hidden" name="urlCurrent" value={{url()->current()}}>
            <input type="hidden" name="book_id" id="muonModelId">
            <input type="hidden" name="type"  value="rent">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="muonModalCenterTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <span id="muonImg"></span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <ul>
                                                    <li>
                                                        <label>Giá Thuê</label>: <span id="muonPrice"></span> đ
                                                    </li>
                                                    <li>
                                                        <label>Thể loại</label>: <span id="muonCat"></span>
                                                    </li>
                                                    <li>
                                                        <label>Nhà Xuất Bản</label>: <span id="muonComp"></span>
                                                    </li>
                                                
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        @if(Auth::user())
                                            <ul>
                                                <li>
                                                    <label>Họ tên</label> : <span>{{Auth::user()->name}} </span>
                                                </li>
                                                <li>
                                                    <label>SĐT</label> : <span> {{Auth::user()->tel}}</span>
                                                </li>
                                            </ul>

                                        @endif

                                    </div>
                                </div>
                                <div class="row font-weight-bold">
                                    <div class="col-md-12">
                                         <div class="form-group">
                                             <label>Địa chỉ nhận hàng</label>
                                             <input class="form-control" name="address" placeholder="Địa chỉ nhận " type="text">
                                         </div>
                                    </div>
                                 </div>
                                <div class="row row-coupon">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Mã giới thiệu</label>
                                            <input class="form-control" name="coupon" type="text">
                                        </div>
                                   </div>
                                </div>
                                
                            </div>
                            
                        </div>
                      <div class="modal-footer justify-content-center">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                          
                          <button type="submit" name="type" value="mua" class="btn btn-primary buttonActionmua">Mua ngay</button>
                            <button type="submit" name="type" value="thue" class="btn btn-danger buttonActionthue">Thuê ngay</button>
                      </div>
                  </div>
              </div>
          </div>
      </form>

  </div>


  <script>
      

    $('.muonngay').click(function(){
        var bookId = $(this).attr('data-bookid');
        var name = $(this).attr('data-name');
        var price = $(this).attr('data-price');
        var des = $(this).attr('data-des');
        var cat = $(this).attr('data-cat');
        var comp = $(this).attr('data-comp');
        var img = $(this).attr('data-img');
        var urlImg = '{{asset("source/book/")}}/'+img;
        $('#muonModelId').val(bookId);
        $('#muonModalCenterTitle').html(name);
        $('#muonPrice').html(price).simpleMoneyFormat();
        $('#muonDes').html(des);
        $('#muonCat').html(cat);
        $('#muonComp').html(comp);
        $('#muonImg').html('<img  src="'+urlImg+'"  alt="" >');
    });
</script>