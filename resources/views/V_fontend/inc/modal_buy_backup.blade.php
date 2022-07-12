        {{-- model mua --}}
        <div class="modal fade" id="BuyModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <form action="{{asset('dat-hang')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <input type="hidden" name="urlCurrent" value={{url()->current()}}>
                <input type="hidden" name="book_id" id="rentModelId">
                <input type="hidden" name="type"  value="buy">

                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="rentModalCenterTitle"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5">
                                    @if(Auth::user())
                                    <ul>
                                        <li>
                                            <label>Họ tên</label> : <span>{{Auth::user()->name}} </span>
                                        </li>
                                        <li>
                                            <label>SĐT</label> : <span> {{Auth::user()->tel}}</span>
                                        </li>
                                    </ul>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label>Số điện thoại (*)</label>
                                            <input type="text" class="form-control" placeholder="Điện thoại" name="tel"
                                                value="{{Auth::user()->tel}}">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Địa chỉ nhận hàng</label>
                                            <input type="text" class="form-control" placeholder="Địa chỉ nhận "
                                                name="rent_address" value="{{Auth::user()->address}}">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Ghi Chú</label>
                                            <textarea name="note" class="form-control" placeholder="ghi chú"
                                                cols="43" rows="3"></textarea>
                                        </div>
                                    </div>
                                    @endif

                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-5">
                                            <span id="rentImg"></span>
                                        </div>
                                        <div class="col-7">
                                            <ul>
                                                <li>
                                                    <label>Giá bán</label>: <span id="rentPrice"></span>
                                                </li>
                                                <li>
                                                    <label>Thể loại</label>: <span id="rentCat"></span>
                                                </li>
                                                <li>
                                                    <label>Nhà Xuất Bản</label>: <span id="rentComp"></span>
                                                </li>
                                                <li>
                                                    <label>Mô tả</label>: <span id="rentDes"></span>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-primary buttonRegis">Mua ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>