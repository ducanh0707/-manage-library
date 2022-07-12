<div class="modal fade" id="commission_new" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <form action="{{asset('admin/user/commission/'.$user_id.'/new')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hạn mức hoa hồng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label> <b>Doanh số từ:</b></label>
                                <input type="number" class="form-control" name="han_muc_min">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label> <b>đến</b></label>
                                <input type="number" class="form-control" name="han_muc_max">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label> <b>Hoa hồng :</b></label>
                        <input type="number" class="form-control" name="commission">
                    </div>
                    <!-- ten hạn mức -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </div>
            </div>
        </div>
    </form>
</div>
