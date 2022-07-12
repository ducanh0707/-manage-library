@extends('V_backend.index')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
                Danh sách thành viên: 
             
        </h1>
        <div class="mt-3">
      
            <a  data-toggle="modal" data-target="#new_account"  class="btn btn-danger btn-sm">Thêm mới</a>
            <a class="btn btn-sm btn-primary" href="{{asset('admin/account/export')}}">Tải file </a>
            <a class="btn btn-sm btn-success" href="{{asset('admin/account/import')}}">Nhập file</a>


        </div>
        <div class="mt-3">
            
        </div>
        @include('Account::IV_Modal_user_new')
         </section>
    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
                {{-- bo loc  --}}
                Danh sách
                
                <div class="box-tools">
              
                        <form action="{{asset('admin/account')}}" method="Get">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" name="search" class="form-control form-control-sm pull-right" value="@if(isset($_GET['search'])) {{$_GET['search']}} @endif" placeholder="Tìm kiếm">
                                </div>
                                <div class="col-md-4">
                                    <select name="search_feild"  class="form-control form-control-sm">
                                        <option value="email" @if(isset($_GET['email'])) {{'selected'}} @endif>Email</option>
                                        <option value="tel" @if(isset($_GET['tel'])) {{'selected'}} @endif>Số điện thoại</option>
                                        <option value="name" @if(isset($_GET['name'])) {{'selected'}} @endif>Tên</option>
                                        <option value="coupon" @if(isset($_GET['coupon'])) {{'selected'}} @endif>Coupon</option>
                                    </select>
                                   
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-sm btn-primary" type="submit">Tìm</button>
                                </div>
                            </div>
                        </form>
                  
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                     <tr>
                        <th scope="col" width="">Thông tin</th>
                   
                        <th scope="col">Địa chỉ</th>
                        <th scope="col" width="">Số tiền cọc</th>
                     </tr>
                     @if(count($user) != 0)
                           @foreach($user as $val)
                            
                                
                                <!-- thong tin  -->
                                <td class="">
                                   
                                    {{$val -> name}}<br>
                                    {{$val -> tel}}
                                </td>
                            
                               {{-- co quan  --}}
                               <td > 
                                   @if(isset($val->f_tinh))
                                   {{$val->f_tinh->name}}
                                   @endif
                                   -
                                   @if(isset($val->F_huyen))
                                   {{$val->F_huyen->name}}
                                   @endif
                                   @if(isset($val->F_truong))
                                  - {{$val->F_truong->name}}
                                   @endif

                                </td>
                                {{-- ma  --}}
                                <td class="">
                                    {{$val ->money}}
                                </td>
                                
                                <!-- action -->
                                <td class="text-center">
                                    
                                    {{-- <a href="{{asset('admin/account/edit/'.$val->id)}}"  class="btn btn-sm btn-primary">Sửa</a> --}}
                                    <button data-toggle="modal" data-target="#edit_account_{{$val ->id}}"  class="btn btn-sm btn-primary">Sửa</button>

                                    <?php if($val ->id != '1'){ ?>
                                        {{-- Xoa  --}}
                                        <a  href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#del_account_{{$val -> id}}">
                                            Xóa
                                        </a> 
                                      
                                    <?php } ?>
                                  
                                </td>
                                <th scope="col" width="1%">
                                    {{ F_change_status($val)}}    
                                    {{$val->id}}
                                </th>
                            </tr>
                           @include('Account::IV_Modal_user_edit')
                           @include('Account::IV_Modal_user_del')
                           {{$user->appends(request()->input()) ->links()}}
                       </div>
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
            <div class="box-footer clearfix">
                <div class="total_name text-bold">
                    TỔNG CỌC:<span> {{number_format($sum,0,',','.')}} </span>
                </div>
               {{$user->appends(request()->input()) ->links()}}
           </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection