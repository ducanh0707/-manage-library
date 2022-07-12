<div class="modal fade" id="new_store" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <form action="{{asset('admin/store/new')}}" method="post" enctype="multipart/form-data">
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
                                <label for="name_store">Tên Kho</label>
                                <input type="text" class="form-control" id="name" placeholder="Bạn điền tên kho"
                                    name="name" onkeyup="ChangeToSlug_store();" value="{{old('name')}}">
                            </div>


                            <div class="form-group">
                                <label for="name_store">Tên Quản Lý</label>
                                <input type="text" class="form-control" id="manage" placeholder="Người quản lý"
                                    name="manage" value="{{old('manage')}}">
                            </div>
                            <div class="form-group">
                                <label for="name_store">SĐT</label>
                                <input type="text" class="form-control" id="phone" placeholder="SĐT Quản Lý"
                                    name="phone" value="{{old('phone')}}">
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address_store">Loại</label>
                                <select class="form-control" name="type">
                                    <option value="">Thể loại</option>
                                    <option value="mam-non">TV Mầm non</option>
                                    <option value="tieu-hoc">TV tiểu học</option>
                                    <option value="thcs">TV THCS</option>
                                    <option value="cafe">Cafe</option>
                                    <option value="chung-cu">Chung cư</option>
                
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address_store">Địa chỉ kho </label>
                                <select class="form-control" name="tinh_id" id="tinh">
                                    <option value="">Tỉnh</option>
                                    @foreach($list_tinh as $tinh_r)
                                        <option value="{{$tinh_r->id}} ">{{$tinh_r->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address_store">Huyện </label>
                                <select class="form-control" name="huyen_id" id="huyen" >
                                  </select>
                            </div>
                            <script>
                                $('#tinh').change(function () {
                                    var tinh_id = $('#tinh').val();
                                    $.get("{{asset('app/local/huyen')}}/" + tinh_id, function (data) {
                                        $("#huyen").html(data);

                                    });
                                });

                            </script>
                             <div class="form-group">
                                <label for="">Trường</label>
                                <select name="truong_id" id="truong" class="form-control border-radius">
                                    <option value="">Trống</option>

                                </select>
                                <script>
                                    $('#huyen').change(function () {
                                        var huyen_id = $('#huyen').val();
                                        $.get("{{asset('app/local/truong')}}/" + huyen_id, function (data) {
                                            $("#truong").html(data);

                                        });
                                    });

                                </script>
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
