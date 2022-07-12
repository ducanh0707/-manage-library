@extends('V_fontend.index')
@section('content')

<div class=" bg-organ">
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="text-center font40 grenza-bold"></div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-3">


    @if(Auth::user())
    <div class="row">
  
        {{-- info --}}
        <div class="col-md-12">
            <div class="bookByCatTitle">
                <div class="title-mod-sm">
                    Sách đã mua
                </div>
                <div class=" py-3">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">Sách đã mua ({{$done->count()}})</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">Sách chờ mua ({{$buy_waiting->count()}})</a>
                        </li>
                            {{-- <div class="row  " style=" ">
                                <div class="col-md-12">
                                    <form clas="form-inline" action="{{url()->current()}}" method="get">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Từ ngày" name="buystart" id="buystart" autocomplete="off" value="@if(isset($_GET['created_at'])){{$_GET['created_at']}}@endif">
                                                <script>
                                                    $('#buystart').datepicker({
                                                        format: 'dd-mm-yyyy',
                                                        // autoclose: true
                                                    });
                                                </script>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Đến ngày" name="buyend" id="buyend" autocomplete="off" value="@if(isset($_GET['created_at'])){{$_GET['created_at']}}@endif">
                                                <script>
                                                    $('#buyend').datepicker({
                                                        format: 'dd-mm-yyyy',
                                                        // autoclose: true
                                                    });
                                                </script>
                                            </div>
                                            <div class="col-md-4">
                                                 <button class="btn  btn-primary  mb-3" type="submit">Lọc ngày</button>
                                                <a href="{{asset('info/thong-tin-mua')}}" class="btn btn-info mb-3">Xóa lọc</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                      
                        {{-- <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Lịch sử mua</a>
                          </li> --}}
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Ảnh</th>
                                        <th scope="col">Tên</th>
                                        <th scope="col">Ngày đặt hàng</th>
                                        <th scope="col">Ngày nhận</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($done)
                                    @foreach($done as $key => $item)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>
                                            <a href="{{asset($item->f_book->url.'.html')}}">
                                                <img height="50px" src="{{asset('source/book/'.$item->f_book->img)}}"
                                                    alt="">
                                            </a>
                                        </td>
                                        <td>
                                            {{$item->f_book->name}}
                                        </td>
                                        <td>
                                            <?php 
                                                if($item -> created_at){
                                                    $date = date_create($item -> created_at);
                                                    echo date_format($date,'d/m/Y').'<br />';
                                                    echo date_format($date,'H:i:s');
                                                }
                                                ?>
                                        </td>
                                        <td>
                                            <?php 
                                                if($item ->pay_date){
                                                        $date = date_create($item -> pay_date);
                                                    echo date_format($date,'d/m/Y').'<br />';
                                                    echo date_format($date,'H:i:s');
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            @if($buy_waiting)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">Ảnh</th>
                                            <th scope="col">Tên</th>
                                            <th scope="col">Ngày đặt hàng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($buy_waiting)
                                        @foreach($buy_waiting as $key => $item)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>
                                                <a href="{{asset($item->f_book->url.'.html')}}">
                                                    <img height="50px" src="{{asset('source/book/'.$item->f_book->img)}}"
                                                        alt="">
                                                </a>
                                            </td>
                                            <td>
                                                {{$item->f_book->name}}
                                            </td>
                                            <td>
                                                <?php 
                                                    if($item -> created_at){
                                                        $date = date_create($item -> created_at);
                                                        echo date_format($date,'d/m/Y').'<br />';
                                                        echo date_format($date,'H:i:s');
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            @endif
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection('content')
