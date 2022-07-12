<div class="modal fade" id="new_buy" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <form action="{{asset('admin/accountant/buy/new')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Thêm phiếu mua sách</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tìm đơn hàng</label>
                                <input type="text" class="form-control" name="order_id" id="order_id" autocomplete="off">
                                <ul id="result_order">

                                </ul>

                                  <script>
                                    $('#order_id').keyup(function () {
                                        var order_id = $('#order_id').val();
                                        if(order_id){
                                            $('#result_order').css('display','');
                                            $.get("{{asset('admin/order/ajax_search_id')}}/" + order_id, function (data) {
                                                $("#result_order").html(data);
                                                $('.select_order').click(function(){
                                                    var order_id = $(this).data('order_id');
                                                    var user_id = $(this).data('user_id');
                                                    var user_name = $(this).data('user_name');
                                                    var user_tel = $(this).data('user_tel');
                                                    var book_name = $(this).data('book_name');
                                                    var book_price = $(this).data('price');
                                                    $('#order_id').val(order_id);
                                                    $('.user_id').html(user_id);
                                                    $('.user_name').html(user_name);
                                                    $('.user_tel').html(user_tel);
                                                    $('.book_name').html(book_name);
                                                    $('.book_price').html(book_price).simpleMoneyFormat();;
                                                });

                                            });
                                        }else{
                                            $('#result_order').css('display','none');
                                        }
                                    });

                                </script>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <ul id="result_user">
                                <li>Mã thành viên: <span class="user_id"></span></li>
                                <li>Họ tên: <span class="user_name"></span></li>
                                <li>Số điện thoại: <span class="user_tel"></span></li>
                            </ul>
                            <hr>
                             <ul id="result_order">
                                <li>Tên sách: <span class="book_name"></span></li>
                                <li>Giá tiền: <span class="book_price">0</span> đ</li>
                            </ul>
                             
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </div>
            </div>

        </div>
    </form>
</div>
