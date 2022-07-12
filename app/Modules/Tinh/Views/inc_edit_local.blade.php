<div class="modal fade" id="edit_local" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <form action="<?php echo asset('admin/tinh/edit/local') ?>" method="post"  enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
        <input type="hidden" id="local_type_edit" name="local_type" value="">
        <input type="hidden" id="tinh_id_edit" name="tinh_id" value="">
        <input type="hidden" id="huyen_id_edit" name="huyen_id" value="">
        <input type="hidden" id="truong_id_edit" name="truong_id" value="">
        <input type="hidden" id="lop_id_edit" name="lop_id" value="">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Sửa </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label><i class="fa fa-list"></i> Tên</label>
                            <input type="text" id="name_edit" value="" class="form-control"  name="name">
                        </div>
                        
                    </div>
                  
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label> <b>Mã</b></label>
                            <input type="text" id="code_edit"  class="form-control" name="code" value="">
                        </div>
                    
                        <div class="col-md-6 type " style="display:none">
                            <label> <b>Loại</b></label>
                            <select name="type" id="type" class="form-control" >
                                <option value="">Trống</option>
                                <option value="cong_lap">Công lập</option>
                                <option value="ban_cong">Bán công</option>
                                <option value="dan_lap">Dân lập</option>
                            </select>
                            
                        </div>
                       
                        
                        {{-- dien thoai  --}}
                        <div class="col-md-6 info">
                            <label> <b>Số điện thoại </b></label>
                            <input type="text" id="tel" class="form-control" name="tel" value="">
                        </div>
                        <div class="col-md-6 info">
                            <label> <b>Số điện thoại 2</b></label>
                            <input type="text" id="tel_2" class="form-control" name="tel_2" value="">
                        </div>
                        {{-- email  --}}
                        <div class="col-md-6 info">
                            <label> <b>Email</b></label>
                            <input type="email" id="email" class="form-control" name="email" value="">
                        </div>
                        <div class="col-md-6 info">
                            <label> <b>Website</b></label>
                            <input type="website" id="website" class="form-control" name="website" value="">
                        </div>
                        <div class="col-md-6">
                            <label> <b>Thứ tự</b></label>
                            <input type="text" id="orderby_edit" class="form-control form-control-sm" name="orderby" value="">
                        </div>
                        {{-- dia chi  --}}
                        <div class="col-md-12 info">
                            <label for=""><b>Địa chỉ</b></label>
                            <textarea id="address" name="address" class="form-control"></textarea>
                        </div>

                        
                        
                    </div>
                </div>
                <div class="modal-footer">
                <a id="a_del" href=""  class="btn btn-danger"> Xóa</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                </div>
            </div>
        </div>
    </form>
</div>