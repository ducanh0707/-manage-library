@if(isset($truong_id))
  @if($truong_id != '')
      <div class="modal fade" id="new_lop_multi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <form action="{{asset('admin/tinh/'.$tinh_id.'/huyen/'.$huyen_id.'/truong/'.$truong_id.'/new_truong_multi')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Thêm mới nhiều Lớp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                    <label for="name_cat">Mỗi Lớp 1 dòng</label>
                    <textarea name="name" class="form-control"></textarea>
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
    @endif
@endif