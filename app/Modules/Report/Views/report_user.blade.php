@extends('V_backend.index')
@section('content')
<div class="content-wrapper">

    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12 mb-2">
                <div class="row">
                    <div class="box-header">
                        <h2 class="box-title text-white">{{$title}} </h2>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-8">
                   

                    </div>
                    <div class="col-md-4">
                        <form action="{{asset('admin/report')}}" method="Get">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" name="search" class="form-control pull-right"
                                        value="@if(isset($_GET['search'])) {{$_GET['search']}} @endif"
                                        placeholder="Tìm kiếm">
                                </div>
                                <div class="col-md-4">
                                    <select name="search_feild" class="form-control">
                                        <option value="email" @if(isset($_GET['email'])) {{'selected'}} @endif>Email
                                        </option>
                                        <option value="tel" @if(isset($_GET['tel'])) {{'selected'}} @endif>Số điện thoại
                                        </option>
                                        <option value="name" @if(isset($_GET['name'])) {{'selected'}} @endif>Tên
                                        </option>
                                        <option value="coupon" @if(isset($_GET['coupon'])) {{'selected'}} @endif>Coupon
                                        </option>
                                    </select>

                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-sm btn-primary" type="submit">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <div class="box">
                    <div class="box-header">
                   
                        
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <form action="{{asset('admin/report/action')}}" method="POST">
                            <table class="table table-hover">
                                <tr>
                                    <th>Họ tên</th>
                                    <th>Doanh số</th>
                                    <th>Hoa hồng</th>
                                    <th></th>

                                </tr>
                                @if(count($user_list) != 0)
                                    @foreach($user_list as $key => $val)
                                        <tr>
                                          
                                            <td class="">
                                                {{$val->name}} {{$val->tel}}
                                            </td>
                                            
                                            <td class="">
                                               
                                            </td>
                                            
                                            <td> 
                                               
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="9" class="text-center">
                                            <h6>Không có đơn hàng</h6>
                                        </td>
                                    </tr>
                                @endif
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        
            </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
            {{$user_list->appends(request()->input()) ->links()}}
        </div>
</div>
</section>
<!-- /.content -->
</div>
@endsection
