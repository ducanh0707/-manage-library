@extends('V_backend.index')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sửa chi tiết danh mục: {{$cat->name}}
      </h1>
    </section>
    
    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- danh sach widget -->
        
            @if(isset($cat))
                <div class="col-md-10">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="box-title">
                                
                            
                            </div>
                        </div>
                        <!-- widget group meta  -->
                        <div class="box-body">
                            <form action="<?php echo asset('admin/cat/theme_edit/'.$cat->id.'/'.$cat->type) ?>" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                        

                                <h4>Đối tác</h4>
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Tiêu đề</label>
                                    <input type="text" name="partner_title" class="form-control" value="{{$cat->partner_title}}">
                                </div>
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Mô tả</label>
                                    <input type="text" name="partner_des" class="form-control" value="{{$cat->partner_des}}">
                                </div>
                                <div class="form-group">
                                    <label><i class="fa fa-columns"></i> Chọn slide <a target="_blank" href="{{asset('admin/slide')}}"><i class="fa fa-chevron-circle-right"></i></a></label>
                                       <select class="form-control" name="partner_slide_id">
                                          <option value="0">Trống</option>
                                          @foreach($slide_list as $slide)
                                             <option value="{{$slide -> id}}" @if($cat->partner_slide_id == $slide->id) selected @endif>{{$slide -> name}}</option>   
                                          @endforeach
                                       </select>
                                 </div>

                                <hr>
                                <h4>Dự án</h4>
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Tiêu đề</label>
                                    <input type="text" name="project_title" class="form-control" value="{{$cat->project_title}}">
                                </div>
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Tên nút bấm</label>
                                    <input type="text" name="project_button" class="form-control" value="{{$cat->project_button}}">
                                </div>

                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Link</label>
                                    <input type="text" name="project_link" class="form-control" value="{{$cat->project_link}}">
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <?php F_input_image_bg($cat->project_img,'project_img','edit_cat_project_'.$cat->id,asset('source/cat')) ?>
                                </div> 
                                <hr>
                                <h4>Testimonials</h4>
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Tiêu đề</label>
                                    <input type="text" name="test_title" class="form-control" value="{{$cat->test_title}}">
                                </div>

                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Tiêu đề 2</label>
                                    <input type="text" name="test_title_2" class="form-control" value="{{$cat->test_title_2}}">
                                </div>
                                <div class="form-group">
                                    <label><i class="fa fa-columns"></i> Chọn danh mục <a target="_blank" href="{{asset('admin/cat')}}"><i class="fa fa-chevron-circle-right"></i></a></label>
                                       <select class="form-control" name="test_cat_id">
                                          <option value="0">Trống</option>
                                          <?php F_select_cat_edit_in_row($cat_list,$cat->test_cat_id) ?> 
                                          Hiển thị thông tin danh mục hiện tại 
                                       </select>
                                 </div>
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <?php F_input_image($cat->test_img,'test_img','edit_cat_test_'.$cat->id,asset('source/cat')) ?>
                                </div> 
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <?php F_input_image_2($cat->test_img_2,'test_img_2','edit_cat_test_2_'.$cat->id,asset('source/cat')) ?>
                                </div> 
                                <hr>

                                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                                {{-- ket thuc noi dung  --}}
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-md-2">
               
           
                </div>
            @else
            Danh mục không tồn tại
            @endif
            <!-- ket thuc danh sach  -->
        </div>

    </section>
  </div>
@endsection