<div class="modal fade" id="new_company" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <form action="{{asset('admin/company/new')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Thêm mới danh mục</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- ten danh muc -->
                            <div class="form-group">
                                <label for="name_company">Mã NXB   </label>
                                <input type="text" class="form-control" id="code" placeholder="Bạn điền mã NXB"
                                    name="code" onkeyup="ChangeToSlug_cat();" value="{{old('code')}}">
                            </div>
                            <div class="form-group">
                                <label for="name_company_seo">Mô tả ngắn</label>
                                <textarea class="form-control" name="des">{{old('des')}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- ten danh muc -->
                            <div class="form-group">
                                <label for="name_company">Tên NXB</label>
                                <input type="text" class="form-control" id="name" placeholder="Bạn điền tên danh mục"
                                    name="name" onkeyup="ChangeToSlug_cat();" value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <label for="name_company_seo">Địa chỉ</label>
                                <textarea class="form-control" name="address">{{old('address')}}</textarea>
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
