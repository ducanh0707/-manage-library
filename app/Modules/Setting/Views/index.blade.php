@extends('V_backend.index')
@section('content')
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 class="text-center">
                Cài đặt
            </h1>
            <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Trang chủ</a></li>
            </ol>
         
        </section>
        <section class="content-header mt-4">
            <form action="{{asset('admin/setting')}}" method="post">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold">Danh mục hướng dẫn</label>
                            <select name="cat_tut" class="form-control">
                                @foreach($cat_list as $cat)
                                    <option value="{{$cat->id}}" @if($cat_tut_config->value == $cat->id) selected @endif>{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Danh mục thông báo</label>
                            <select name="cat_noti" class="form-control">
                                @foreach($cat_list as $cat)
                                    <option value="{{$cat->id}}" @if($cat_noti_config->value == $cat->id) selected @endif>{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <hr>
                        @if(count($post_tut_setting)> 1)
                            @foreach($post_tut_setting as $tut)
                                <div class="form-group">
                                    <label class="font-weight-bold">{{$tut->title}}</label>
                                    <select name="setting_post[{{$tut->name}}]" class="form-control">
                                        @if(count($post_tut_list) > 0)
                                            @foreach($post_tut_list as $post)
                                                <option value="{{$post->id}}" @if($post->id == $tut->value) selected @endif>{{$post->title}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            @endforeach
                        @endif
                                
                    </div>
                    <div class="col-md-6">
                        
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

