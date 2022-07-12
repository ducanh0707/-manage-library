<div class="modal fade" id="edit_role_{{$val->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <form action="{{asset('admin/user/role/edit/'.$val->id)}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="parent_id" value="{{$parent_id}}">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Sửa nhóm quyền</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-left">
                    <!-- ten dinh dang -->
                    <div class="form-group">
                        <label><i class="fa fa-user-secret"></i> <b>Tên nhóm quyền</b></label>
                        <input type="text" class="form-control" name="name" value="{{$val->name}}">
                    </div>
                    <!-- url -->
                    <div class="form-group">
                        <label><b>URL</b></label>
                        <input type="text" class="form-control" name="url" value="{{$val->url}}">
                    </div>
                     <!-- hoa hong -->
                     <div class="form-group">
                        <label><b>Hoa Hồng</b></label>
                        <input type="text" class="form-control" name="commission" value="{{$val->commission}}">
                    </div>
                    <div class="form-group">
                        <label> <b>Loại quyền</b></label>
                        <select name="type" class="form-control">
                            <option value="admin" @if($val->type == 'admin') selected @endif>Admin</option>
                            <option value="sale" @if($val->type == 'sale') selected @endif>Sale</option>
                            
                            <option value="agency" @if($val->type == 'agency') selected @endif>Đại lý</option>
                        </select>
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
