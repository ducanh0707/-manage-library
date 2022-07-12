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
                    <h3 class="box-title">Danh sách slide </h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <form action="{{asset('admin/report/action')}}" method="POST">
                            <table class="table table-hover">
                                <tr>
                                    <th>Họ tên</th>
                                    <th>Địa chỉ</th>
                                    <th>Số tài khoản</th>
                                    <th>Doanh số</th>
                                    <th>Hoa hồng</th>
                                    <th></th>

                                </tr>
                                @if(count($user_list) != 0)
                                    @foreach($user_list as $key => $val)
                                        <tr>
                                            <td class="">
                                                {{$val->name}}: {{$val->tel}}
                                            </td>
                                            <td class="">
                                               @if(isset($val->f_level)) {{$val->f_level->name}}@endif<br>
                                               @if(isset($val->f_tinh)) {{$val->f_tinh->name}}@endif - 
                                               @if(isset($val->f_huyen)) {{$val->f_huyen->name}}@endif
                                            </td>
                                            {{-- so luong tai khoan  --}}
                                            <td class="">
                                               <?php 

                                                    $user =  App\Http\Model\User::where('user_type_id',35)->where('tinh_id',$val->tinh_id)->get()->count();
                                                    echo  $user;
                                               ?>
                                            </td>
                                            {{-- doanh so  --}}
                                            <td class="">
                                                <?php 
                                                    $price =  App\Http\Model\M_ke_toan::where('tinh_id',$val->tinh_id)->where('type','service')->get();
                                                    if(count($price)>0){
                                                        echo   number_format($price->sum('money')).' đ';
                                                    }
                                               ?>
                                            </td>
                                        
                                            {{-- hoa hong   --}}
                                            <td> 
                                               <?php
                                                    $total=$price->sum('money');
                                                    $hh = App\Http\Model\M_Commission::where('user_id',$val->id)->get();
                                                    $price =  App\Http\Model\M_ke_toan::where('tinh_id',$val->tinh_id)->where('type','service')->get();
                                                    $price= $price->sum('money');
                                                    foreach ($hh as $key => $val) {
                                                         $min= $val->han_muc_min;
                                                         $max= $val->han_muc_max;
                                                         $com= $val->commission;
                                                    //    echo $min . "<" . $com . "<" . $max . '<br>';
                                                       
                                                        if ($price > $min &&  $price <= $max) {
                                                           
                                                            // echo $min . "<" . $price . "<" . $max . '<br> ';
                                                            $hh_val =  $price/100*$com;
                                                            echo number_format( $hh_val).' đ ('.$com.' %)';
                                                        }else{
                                                            if ($min > $max) {
                                                                if ($price > $min &&  $price > $max) {
                                                                    echo number_format( $price/100*$com).' đ ('.$com.' %)';
                                                                }
                                                            }
                                                                
                                                           
                                                        }
                                                       

                                                    }
                                               ?>
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
