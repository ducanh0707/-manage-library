@extends('V_backend.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh sách SGD - PGD - Trường - Lớp
        </h1>
        <h5 class="text-center">
            {{$title}}
        </h5>
    </section>
    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">

        <div class="row">
            <!-- danh sach widget -->
            <div class="col-md-2">
                <select class="form-control" id="tinh_select">
                    @if(count($tinh_list) != 0)
                        @foreach($tinh_list as $val)
                            <option value="{{asset('admin/tinh/'.$val->id)}}" @if($tinh_id == $val->id) selected @endif>{{$val->name}}</option>
                        @endforeach
                    @endif
                </select>
                <script>
                    $(function(){
                      // bind change event to select
                      $('#tinh_select').on('change', function () {
                          var url = $(this).val(); // get selected value
                          if (url) { // require a URL
                              window.location = url; // redirect
                          }
                          return false;
                      });
                    });
                </script>

            

                <!-- Modal them moi widget -->
                @include('Tinh::IV_Modal_tinh_new')
            </div>
            <div class="col-md-4">
                <a href="#" class="btn btn-primary mb-2" data-toggle="modal" data-target="#new_tinh">Thêm SGD Tỉnh</a>
            </div>
            <!-- ket thuc danh sach widget -->
            <!-- danh sach widget -->
            <div class="col-md-12">
                <div class="box box-primary">
                    @if($tinh_id != 0)
                    <div class="box-header with-border">
                        <div class="box-title">
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#new_huyen">
                                Thêm PGD - Quận/huyện
                            </button>
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#new_multi">
                                Thêm nhiều - Quận/huyện
                            </button>
                            @if(isset($truong_list))
                                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#new_truong_multi">
                                    Thêm nhiều trường
                                </button>
                                @if(isset($truong_id))
                                    @if($truong_id != '')
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#new_lop_multi">
                                        Thêm nhiều lớp
                                    </button>
                                    @endif
                                @endif
                            @endif
                        </div>
                        @include('Tinh::IV_Modal_huyen_new')
                        @include('Tinh::IV_Modal_huyen_new_multi')
                        @include('Tinh::IV_Modal_truong_new_multi')
                        @include('Tinh::IV_Modal_lop_new_multi')
                        @include('Tinh::inc_edit_local')
                        
                    </div>
                    <div class="box-body">
                        <div class="text-center">
                            <h5>
                                {{$tinh -> name}}
                                <!-- sua widget -->
                                <a href="#" data-toggle="modal" data-target="#edit_widget">
                                    <i class="fa fa-edit text-primary small"></i>
                                </a>
                                <!-- xoa widget -->
                                <a href="#" data-toggle="modal" data-target="#del_widget">
                                    <i class="fa fa-trash text-danger small"></i>
                                </a>
                                <!-- status -->
                                <a href="{{asset('admin/tinh/status/'.$tinh->id)}}">
                                    <i class="fa fa-chevron-circle-down small @if($tinh->status == 'on') {{'text-success'}} @else {{'text-danger'}} @endif"></i>
                                </a>
                               
                                @if($tinh-> def == 'on') <i class="fa fa-shield-alt text-primary"></i> @endif
                            </h5>
                            <!-- xoa wigdet  -->
                            <div>
                                <i>{{$tinh->des}}</i>
                            </div>
                        </div>
                        <!-- MOdel widget edit  -->
                        @include('Tinh::IV_Modal_tinh_edit')
                        <!-- xoa widget -->
                        @include('Tinh::IV_Modal_tinh_del')
                    </div>

                    {{-- menu sort  --}}
                    <div class="row">
                        <div class="col-md-4" style="@if($page == 'lop') display:none @endif">
                            <label>PGD Quận/Huyện</label>
                            <div class="cf nestable-lists">
                                <div class="dd" id="nestable3" style="width:100%">
                                    <ol class="dd-list">
                                        @include('Tinh::inc_huyen')
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5" style="@if($page == 'tinh') display:none @endif">
                            <label>Trường</label>
                            @if(isset($truong_list))
                                <div class="truong">
                                    <div class="cf nestable-lists">
                                        <div class="px" id="nestable4" style="width:100%">
                                            <ol class="dd-list">
                                                @include('Tinh::inc_truong')
                                            </ol>

                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-3" style="@if($page == 'tinh' or $page == 'huyen') display:none @endif">
                            <label>Lớp</label>
                            @if(isset($lop_list))
                                <div class="lop">
                                    <div class="cf nestable-lists">
                                        <div class="" id="nestable4" style="width:100%">
                                            <ol class="dd-list">
                                                @include('Tinh::inc_lop')
                                            </ol>

                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-4" style="@if($page == 'tinh' or $page == 'huyen') display:none @endif">
                            <label>Học sinh</label>
                            @if(isset($user_list))
                                <div class="user">
                                    <div class="cf nestable-lists">
                                        <div class="" id="nestable4" style="width:100%">
                                            <ol class="dd-list">
                                                @include('Tinh::inc_user')
                                            </ol>

                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                    <script>
                        $('.edit_local').click(function(){ 
                            var name = $(this).data('name');
                            var url = $(this).data('url');
                            var tinh_id = $(this).data('tinh_id');
                            var huyen_id = $(this).data('huyen_id');
                            var place_name = $(this).data('place_name');
                            var orderby = $(this).data('orderby');
                            var code = $(this).data('code');
                            
                            var email = $(this).data('email');
                            var tel = $(this).data('tel');
                            var tel_2 = $(this).data('tel_2');
                            var address = $(this).data('address');
                            var type = $(this).data('type');
                            var website = $(this).data('website');
                          
                            var local_type = $(this).data('local_type');
              
                            if(local_type == 'truong'){
                                $('.type').css('display','');
                            }else{
                                $('.type').css('display','none');
                            }
                            if(local_type == 'lop'){
                                $('.info').css('display','none');
                            }else{
                                $('.info').css('display','');
                            }

                            $('#url_edit').val(url);
                            $('#name_edit').val(name);
                            $('#local_type_edit').val(local_type);
                            $('#tinh_id_edit').val(tinh_id);
                            $('#huyen_id_edit').val(huyen_id);

                            $('#email').val(email);
                            $('#tel').val(tel);
                            $('#tel_2').val(tel_2);
                            $('#address').val(address);
                            $('#type').val(type);
                            $('#website').val(website);
                        
                            $('#orderby_edit').val(orderby);
                            $('#code_edit').val(code);
                            if(local_type == 'huyen'){
                                $('#a_del').attr('href','{{asset("admin/tinh/")}}/'+tinh_id+'/del/'+huyen_id);
                            }else if(local_type == 'truong'){
                                var truong_id = $(this).data('truong_id');
                                $('#truong_id_edit').val(truong_id);
                                $('#a_del').attr('href','{{asset("admin/tinh/")}}/'+tinh_id+'/huyen/'+huyen_id+'/truong/del/'+truong_id);
                            }else if(local_type == 'lop'){
                                var truong_id = $(this).data('truong_id');
                                var lop_id = $(this).data('lop_id');
                                $('#truong_id_edit').val(truong_id);
                                $('#lop_id_edit').val(lop_id);
                                $('#a_del').attr('href','{{asset("admin/tinh/")}}/'+tinh_id+'/huyen/'+huyen_id+'/truong/'+truong_id+'/del/'+lop_id);
                            }
                        });
                    </script>
                    <script>
                        // sap sep thu tu 
                        $(document).ready(function () {
                            var updateOutput = function (e) {
                                var list = e.length ? e : $(e.target),
                                    output = list.data('output');
                                var token = '{{ csrf_token() }}';
                                var type_id = '{{$tinh -> id}}';

                                $.ajax({
                                    method: "POST",
                                    url: '{{asset('')}}admin/tinh/' + type_id + '/edit_ajax',
                                    data: {
                                        list: list.nestable('serialize'),
                                        _token: token
                                    }
                                }).fail(function (jqXHR, textStatus, errorThrown) {
                                    alert("Unable to save new list order: " + errorThrown);
                                });
                            };

                            $('.dd').nestable({
                                group: 1,
                                maxDepth: 7,
                            }).on('change', updateOutput);

                         
                        });

                    </script>

                </div>
                @else
                Bạn menu trống
                @endif
            </div>
        </div>
        <!-- ket thuc danh sach  -->
</div>

</section>
</div>
@endsection
