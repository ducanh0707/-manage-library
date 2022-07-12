<div class="modal fade" id="new_theme" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <form action="{{asset('admin/theme/new')}}" method="post" enctype="multipart/form-data">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
       
       <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Thêm giao diện</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             {{-- gia tri   --}}
             <div class="row mt-3">
                <div class="col-md-4">
                   <div class="form-group">
                      <label class="font-weight-bold"><i class="fa fa-id-card"></i> Tên giao diện</label>
                      <input type="text" class="form-control" name="title" required>
                   </div>
                  
                </div>
                {{-- kieu dang  --}}
                <div class="col-md-4">
                   <div class="form-group">
                      <label class="font-weight-bold">Tên thư mục giao diện</label>
                      <input type="text" class="form-control" name="folder" required>
                   </div>
                  
                </div>
                <div class="col-md-4">
                   <div class="form-group">
                      <label class="font-weight-bold">Tên file giao diện</label>
                      <input type="text" class="form-control" name="file_name" required>
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