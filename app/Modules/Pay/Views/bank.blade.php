@extends('V_backend.index')
@section('content')
    <div class="content-wrapper">

    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                
                @include('Pay::inc_menu')
                
            </div>
        </div>
        <div class="row">
       
        <div class="col-md-12 mt-3">
          <div class="box">
            <div class="box-header">
               <h3 class="box-title">Danh sách thành viên</h3>
               <div class="box-tools">
           
                    <form action="{{asset('admin/bank/')}}" method="Get">
                        @csrf
                        <div class="row">
                            <div class="col-md-5">
                                <input type="text" name="search" class="form-control pull-right" value="@if(isset($_GET['search'])) {{$_GET['search']}} @endif" placeholder="Tìm kiếm">
                            </div>
                            <div class="col-md-4">
                                <select name="search_feild"  class="form-control">
                                    <option value="email" @if(isset($_GET['email'])) {{'selected'}} @endif>Email</option>
                                    <option value="tel" @if(isset($_GET['tel'])) {{'selected'}} @endif>Số điện thoại</option>
                                    <option value="name" @if(isset($_GET['name'])) {{'selected'}} @endif>Tên</option>
                                    <option value="coupon" @if(isset($_GET['coupon'])) {{'selected'}} @endif>Coupon</option>
                                </select>
                               
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-sm btn-primary" type="submit">Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
              
               </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                       <th scope="col">TT</th>
                       <th scope="col">Tên thành viên</th>
                       <th scope="col">Ngân hàng</th>
                       <th scope="col" class="text-center">Số tài khoản</th>
                       <th scope="col" class="text-center">Tên tài khoản</th>
                       <th scope="col" class="text-center">Chi nhánh</th>
                       <th scope="col" class="text-center">Thẻ chính</th>
                       <th scope="col" class="text-center">Trạng thái</th>
                       <th scope="col" class="text-center"></th>
                      
                    </tr>
                    @if(count($bank) != 0)
                        @foreach($bank as $key => $val)
                            
                                <tr>
                                    <td class="">
                                        {{$key+1}}
                                    </td>
                                    <!-- thong  -->
                                    <td class="">
                                        <b>
                                            @if(isset($val->f_user->user_type_id))
                                                <a target="_blank" href="{{asset('admin/user/'.$val->f_user->user_type_id.'?search='.$val->f_user->coupon.'&search_feild=coupon')}}">
                                                {{$val->f_user->name}}
                                                </a>
                                            @endif
                                        </b>
                                    </td>
                                    {{-- ngan hang  --}}
                                    <td>
                                        {{$val->ngan_hang}}
                                    </td>
                                    {{-- tai khoang --}}
                                    <td class="text-center">
                                        {{$val->so_tai_khoan}} 
                                    </td>
                                    {{-- ten tai khoan  --}}
                                    <td class="text-center">
                                        {{$val->ten_tai_khoan}}
                                    </td>
                                   
                                    {{-- chi nhanh --}}
                                    <td class="text-center">
                                        {{$val->chi_nhanh}}
                                    </td>
                                    
                                    <td class="text-center">
                                        @if($val->main == 'on')
                                        <span class="text-success">Thẻ chính </span>
                                        @else 
                                            Thẻ phụ
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($val->status == 'on')
                                            <span class="text-success">   Bật </span>
                                        @else 
                                            <span class="">Tắt</span>
                                        @endif
                                      
                                    </td>
                                    <!-- thanh toan -->
                                    <td class="text-center">
                                        {{-- xoa   --}}
                                        <a  class="btn btn-sm btn-danger text-white" style="cursor:pointer" data-toggle="modal" data-target="#call_del_bank_{{$val -> id}}">
                                            Xóa
                                        </a>
                                        {{-- modal xoa --}}
                                        <div class="modal fade" id="call_del_bank_{{$val -> id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">   
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title" id="exampleModalCenterTitle">Xóa tài khoản</h6>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-left">
                                                        Bạn có chắc chắn muốn xóa không ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Đóng</button>
                                                        <a href="{{asset('admin/pay/bank/del/'.$val->id)}}" class="btn btn-sm btn-danger">Xóa tài khoản</a>
                                                    </div>
                                                </div>
                                            </div>    
                                        </div>

                                        {{-- sua    --}}
                                        <a  class="btn btn-sm btn-primary text-white" style="cursor:pointer" data-toggle="modal" data-target="#call_edit_bank_{{$val -> id}}">
                                            Sửa
                                        </a>
                                        {{-- modal sua --}}
                                        <div class="modal fade" id="call_edit_bank_{{$val -> id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">   
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title" id="exampleModalCenterTitle">Thêm tài khoản ngân hàng</h6>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-left">
                                                        <form action="{{asset('admin/pay/bank/edit/'.$val->f_user->id.'/'.$val->id)}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="user_id" value="{{$val->f_user->id}}">
                                                            <div class="form-group">
                                                                <label for="">Số tài khoản</label>
                                                                <input type="text" name="so_tai_khoan" class="form-control" value="{{$val->so_tai_khoan}}">
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-6">
                                                                    <label for="">Tên tài khoản</label>
                                                                    <input type="text" name="ten_tai_khoan" class="form-control" value="{{$val->ten_tai_khoan}}">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="">Ngân hàng</label>
                                                                    <input type="text" name="ngan_hang" class="form-control" value="{{$val->ngan_hang}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Chi nhánh</label>
                                                                <input type="text" name="chi_nhanh" class="form-control" value="{{$val->chi_nhanh}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Ghi chú</label>
                                                                <textarea type="text" name="ghi_chu" class="form-control">{{$val->ghi_chu}}</textarea>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <label for="">Tài khoản chính</label>
                                                                    <select name="main" class="form-control">
                                                                        <option value="" @if($val->main != 'on') selected @endif>Tài khoản phụ</option>
                                                                        <option value="on" @if($val->main == 'on') selected @endif>Tài khoản chính</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="">Trạng thái</label>
                                                                    <select name="status" class="form-control">
                                                                        <option value="on" @if($val->status == 'on') selected @endif>Bật</option>
                                                                        <option value="off" @if($val->status == 'off') selected @endif>Tắt</option>
                                                                    </select>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Đóng</button>
                                                                <button type="submit" class="btn btn-sm btn-primary">Sửa tài khoản</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                   
                                                </div>
                                            </div>    
                                        </div>
                                        {{-- them them   --}}
                                        <a  class="btn btn-sm btn-primary text-white" style="cursor:pointer" data-toggle="modal" data-target="#call_add_bank_{{$val -> id}}">
                                            Thêm tài khoản
                                        </a>
                                        {{-- modal them --}}
                                        <div class="modal fade" id="call_add_bank_{{$val -> id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">   
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title" id="exampleModalCenterTitle">Thêm tài khoản ngân hàng Đại lý : {{$val->f_user->name}}</h6>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-left">
                                                        <form action="{{asset('admin/pay/bank/add/'.$val->f_user->id)}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="user_id" value="{{$val->f_user->id}}">
                                                            
                                                            <div class="form-group">
                                                                <label for="">Số tài khoản</label>
                                                                <input type="text" name="so_tai_khoan" class="form-control" >
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-6">
                                                                    <label for="">Tên tài khoản</label>
                                                                    <input type="text" name="ten_tai_khoan" class="form-control">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="">Ngân hàng</label>
                                                                    <input type="text" name="ngan_hang" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Chi nhánh</label>
                                                                <input type="text" name="chi_nhanh" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Ghi chú</label>
                                                                <textarea type="text" name="ghi_chu" class="form-control"></textarea>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <label for="">Tài khoản chính</label>
                                                                    <select name="main" class="form-control">
                                                                        <option value="">Tài khoản phụ</option>
                                                                        <option value="on">Tài khoản chính</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="">Trạng thái</label>
                                                                    <select name="status" class="form-control">
                                                                        <option value="on">Bật</option>
                                                                        <option value="off">Tắt</option>
                                                                    </select>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Đóng</button>
                                                                <button type="submit" class="btn btn-sm btn-primary">Thêm tài khoản</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                   
                                                </div>
                                            </div>    
                                        </div>
                                    </td>
                            </tr>
                        
                       @endforeach
                    @else
                       <tr>
                          <td colspan="9" class="text-center">
                             <h6>Không có dữ liệu đủ điều kiện lọc</h6>
                          </td>
                       </tr>
                    @endif
                 </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                {{$bank->appends(request()->input()) ->links()}}
            </div>
           
          </div>
  
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection