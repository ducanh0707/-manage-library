<div class="modal fade" id="edit_widget" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <form action="<?php echo asset('admin/tinh/edit/'.$tinh->id) ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Sửa tỉnh</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- ten vi tri menu -->
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label><i class="fa fa-th"></i> <b>Tên tỉnh</b></label>
                            <input type="text" class="form-control form-control-sm" name="name" value="{{$tinh ->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label> <b>Mã</b></label>
                            <input type="text" class="form-control form-control-sm" name="code" value="{{$tinh-> code}}">
                        </div>
                  
                        <div class="col-md-6">
                            <label> <b>Trạng thái</b></label>
                            <select class="form-control form-control-sm" name="status">
                               <option value="on" @if($tinh->status == 'on') selected @endif>Bật</option>
                               <option value="off" @if($tinh->status == 'off') selected @endif>Tắt</option>
                            </select>
                        </div>
                        
                        {{-- dien thoai  --}}
                        <div class="col-md-6">
                            <label> <b>Số điện thoại </b></label>
                            <input type="text"  class="form-control" name="tel" value="{{$tinh->tel}}">
                        </div>
                        <div class="col-md-6">
                            <label> <b>Số điện thoại 2</b></label>
                            <input type="text"  class="form-control" name="tel_2" value="{{$tinh->tel_2}}">
                        </div>
                        {{-- email  --}}
                        <div class="col-md-6">
                            <label> <b>Email</b></label>
                            <input type="email"  class="form-control" name="email" value="{{$tinh->email}}">
                        </div>
                        <div class="col-md-6">
                            <label> <b>Website</b></label>
                            <input type="website"  class="form-control" name="website" value="{{$tinh->website}}">
                        </div>
                         {{-- dia chi  --}}
                         <div class="col-md-12">
                            <label for=""> <b>Địa chỉ</b></label>
                            <textarea name="address" class="form-control">{{$tinh->address}}</textarea>
                        </div>
                   

                        <div class="col-md-6">
                            <label> <b>Thứ tự</b></label>
                             <input type="text" class="form-control form-control-sm" name="orderby" value="{{$tinh->orderby}}">
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
