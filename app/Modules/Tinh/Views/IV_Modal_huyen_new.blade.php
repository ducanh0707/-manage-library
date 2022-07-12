<div class="modal fade" id="new_huyen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <form action="<?php echo asset('admin/tinh/'.$tinh_id.'/new') ?>" method="post"
        enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Thêm PGD quận/huyện</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- ten menu -->
                    <div class="form-group">
                        <label><i class="fa fa-list"></i> Tên</label>
                        <input type="text" id="name_menu" class="form-control" placeholder="Bạn điền menu" name="name">
                    </div>
                 
                    <div class="form-group row">
                        
                        <div class="col-md-6">
                            <label> <b>Mã</b></label>
                            <input type="text" class="form-control" name="code" value="">
                        </div>
                        <div class="col-md-6">
                            <label> <b>Thứ tự</b></label>
                            <input type="text" class="form-control" name="orderby" value="">
                        </div>
                         {{-- dien thoai  --}}
                        <div class="col-md-6">
                            <label> <b>Số điện thoại </b></label>
                            <input type="text"  class="form-control" name="tel" value="">
                        </div>
                        <div class="col-md-6">
                            <label> <b>Số điện thoại 2</b></label>
                            <input type="text"  class="form-control" name="tel_2" value="">
                        </div>
                        {{-- email  --}}
                        <div class="col-md-6">
                            <label> <b>Email</b></label>
                            <input type="email"  class="form-control" name="email" value="">
                        </div>
                        <div class="col-md-6">
                            <label> <b>Website</b></label>
                            <input type="website"  class="form-control" name="website" value="">
                        </div>
                        {{-- dia chi  --}}
                        <div class="col-md-12">
                            <label for=""> <b>Địa chỉ</b></label>
                            <textarea name="address" class="form-control"></textarea>
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
