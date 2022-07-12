<div class="modal fade" id="new_deposits" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <form action="{{asset('admin/accountant/deposits/new')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Thêm tiền cọc</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- ten danh muc -->
                            <div class="form-group">
                                <label for="name_deposits">Số tiền: </label> <span id="money_preview">0</span> đ
                                <input type="number" class="form-control" id="money" placeholder="Bạn điền tên kho"
                                    min="0" name="money" value="0">
                            </div>
                            <script>
                                $('#money').keyup(function () {
                                    var money = $('#money').val();
                                    $('#money_preview').html(money).simpleMoneyFormat();
                                });
                            </script>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address_deposits">Mã thành viên</label>
                                <input type="number" class="form-control" name="user_id" placeholder="Mã thẻ">
                            </div>
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
