
<div class="modal fade" id="new_tinh" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <form action="<?php echo asset('admin/tinh/new') ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
      <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
         <h5 class="modal-title" id="exampleModalCenterTitle">Thêm tỉnh</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
         </div>
         <div class="modal-body">
            <!-- ten vi tri menu -->
            <div class="form-group row">
                <div class="col-md-12">
                    <label><i class="fa fa-th"></i> <b>Tên tỉnh</b></label>
                    <input type="text" class="form-control form-control-sm" name="name">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label> <b>Mã</b></label>
                    <input type="text" class="form-control form-control-sm" name="code">
                </div>
        
                <div class="col-md-6">
                    <label> <b>Trạng thái</b></label>
                    <select class="form-control form-control-sm" name="status">
                        <option value="on">Bật</option>
                        <option value="off">Tắt</option>
                    </select>
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