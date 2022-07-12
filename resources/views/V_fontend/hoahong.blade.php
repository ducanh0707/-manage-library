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
                    Hoa hồng khách hàng
                </div>
                <div class=" py-3">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">Số khách hàng giới thiệu ({{$hoahong->count()}})</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên</th>
                                        <th scope="col">Số điện thoại</th>
                                        <th scope="col">Sách đã mua</th>
                                        <th scope="col">Giá sách</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($hoahong)
                                    @foreach($hoahong as $key => $item)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>
                                           {{$item->f_user->name}}
                                        </td>
                                        <td>
                                            {{$item->f_user->tel}}

                                        </td>
                                        <td>
                                            {{$item->f_book->name}}

                                        </td>
                                        <td>
                                            {{number_format($item->f_book->price)}}
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection('content')
