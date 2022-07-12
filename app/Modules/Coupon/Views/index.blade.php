@extends('V_backend.index')
@section('content')
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 class="text-center">
                Hoa hồng đại lý
            </h1>
            <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Trang chủ</a></li>
            </ol>
         
        </section>
        <section class="content-header mt-4">
            <form action="{{asset('admin/coupon')}}" method="post">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-6">
                    
                        <div class="form-group">
                            <label class="font-weight-bold">Ghi chú</label>
                            <textarea class="form-control" type="text" name="noti_coupon" >{{$noti_coupon->value}}</textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="font-weight-bold">Phần trăm giảm giá cho Coupon (mã khuyến mại) (%)</label>
                            <input class="form-control"  type="number" min="0" max="100" name="percen_coupon" value="{{$percen_coupon->value}}" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Hạn mức thanh toán cho đại lý (đ)</label>
                            <input class="form-control"  type="number" min="0" name="pay_limit" value="{{$pay_limit->value}}"  required>
                        </div>
                       <hr>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="font-weight-bold">Số lượng đơn / tháng</label>
                            </div>
                        </div>
                        {{-- moc 1  --}}
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label class="font-weight-bold">Từ</label>
                                <input class="form-control" type="number" min="0" name="discount_1[from_sp]" value="{{$discount_1->from_sp}}">
                            </div>
                            <div class="col-md-4">
                                <label class="font-weight-bold">Đến</label>
                                <input class="form-control"  type="number" min="0" name="discount_1[to_sp]" value="{{$discount_1->to_sp}}">
                            </div>
                            <div class="col-md-4">
                                <label class="font-weight-bold">Phần trăm cho đại lý (%)</label>
                                <input class="form-control"  type="number" min="0" max="100" name="discount_1[value]" value="{{$discount_1->value}}">
                            </div>
                        </div>
                        {{-- moc 2 --}}
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label class="font-weight-bold">Từ</label>
                                <input class="form-control" type="number" min="0" name="discount_2[from_sp]" value="{{$discount_2->from_sp}}">
                            </div>
                            <div class="col-md-4">
                                <label class="font-weight-bold">Đến</label>
                                <input class="form-control"  type="number" min="0" name="discount_2[to_sp]" value="{{$discount_2->to_sp}}">
                            </div>
                            <div class="col-md-4">
                                <label class="font-weight-bold">Phần trăm cho đại lý (%)</label>
                                <input class="form-control"  type="number" min="0" max="100" name="discount_2[value]" value="{{$discount_2->value}}">
                            </div>
                        </div>
                        {{-- moc 3 --}}
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label class="font-weight-bold">Từ</label>
                                <input class="form-control" type="number" min="0" name="discount_3[from_sp]" value="{{$discount_3->from_sp}}">
                            </div>
                            <div class="col-md-4">
                                <label class="font-weight-bold">Đến</label>
                                <input class="form-control"  type="number" min="0" name="discount_3[to_sp]" value="{{$discount_3->to_sp}}">
                            </div>
                            <div class="col-md-4">
                                <label class="font-weight-bold">Phần trăm cho đại lý (%)</label>
                                <input class="form-control"  type="number" min="0" max="100" name="discount_3[value]" value="{{$discount_3->value}}">
                            </div>
                        </div>
                        {{-- moc 4  --}}
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label class="font-weight-bold">Từ</label>
                                <input class="form-control" type="number" min="0" name="discount_4[from_sp]" value="{{$discount_4->from_sp}}">
                            </div>
                            <div class="col-md-4">
                                <label class="font-weight-bold">Đến</label>
                                <input class="form-control"  type="number" min="0" name="discount_4[to_sp]" value="{{$discount_4->to_sp}}">
                            </div>
                            <div class="col-md-4">
                                <label class="font-weight-bold">Phần trăm cho đại lý (%)</label>
                                <input class="form-control"  type="number" min="0" max="100" name="discount_4[value]" value="{{$discount_4->value}}">
                            </div>
                        </div>

                    
                    </div>
                    <div class="col-md-6">
                         {{-- video  --}}
                         <div class="form-group">
                            <label class="font-weight-bold">Hướng dẫn</label>
                            <textarea class="form-control" id="content_coupon" type="text" name="content_coupon" >{{$content_coupon->value}}</textarea>
                        </div>
                        {{F_tinymce('content_coupon')}}
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button class="btn btn-primary">Lưu thông tin</button>
                        </div>
                    </div>
                    
                </div>
            </form>
        </section>
   </div>
@endsection

