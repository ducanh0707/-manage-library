@extends('V_backend.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a href="{{asset('admin/book')}}" class="btn btn-sm btn-primary">Quay lại</a>
        <h1>
            {{$title}}
        </h1>
    </section>
    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">


        <form action="new" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                <!-- left column -->
                <div class="col-md-9">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nội dung chính</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Mã sách -->
                                    <div class="form-group">
                                        <label for="name_book">Mã sách</label>
                                        <input type="text" class="form-control" id="code" placeholder="Bạn điền mã sách"
                                            name="code" value="{{old('code')}}">
                                    </div>
                                    <!-- ten sách -->
                                    <div class="form-group">
                                        <label for="name_book">Tên sách</label>
                                        <input type="text" onkeyup="ChangeToSlug()" class="form-control" id="title_book"
                                            placeholder="Bạn điền tên sách" name="name" value="{{old('name')}}">
                                    </div>
                                    <!-- diện tích -->
                                    <div class="form-group">
                                        <label>Khổ </label>
                                        <input type="text" class="form-control" id="dientich"
                                            placeholder="Nhập diện tích " name="dientich" value="{{old('dientich')}}">
                                    </div>
                                    <!-- số lượng  -->
                                    <div class="form-group">
                                        <label>Số lượng </label>
                                        <input type="text" class="form-control" id="soluong"
                                            placeholder="Nhập số lượng " name="soluong" value="{{old('soluong')}}">
                                    </div>
                                    <!-- Số trang -->
                                    <div class="form-group">
                                        <label>Số trang </label>
                                        <input type="number" class="form-control" id="num_pages"
                                            placeholder="Nhập số trang " name="num_pages" value="{{old('num_pages')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- giá -->
                                    <div class="form-group">
                                        <label for="price_book">Giá</label>
                                        <input type="number" class="form-control" id="price" placeholder="giá tiền"
                                            name="price" value="{{old('price')}}">
                                    </div>
                                    <!-- tác giả  -->
                                    <div class="form-group">
                                        <label>Tên tác giả</label>
                                        <input type="text" class="form-control" id="author"
                                            placeholder="Nhập tên tác giả" name="author" value="{{old('author')}}">
                                    </div>
                                    <!-- CII  -->
                                    <div class="form-group">
                                        <label>CII</label>
                                        <input type="text" class="form-control" id="CII" placeholder="Nhập CII"
                                            name="CII" value="{{old('CII')}}">
                                    </div>

                                    <!-- Phát Hành  -->
                                    <div class="form-group">
                                        <label>Phát hành</label>
                                        <input type="date" class="form-control" id="release"
                                            placeholder="Ngày phát hành" name="release">
                                    </div>
                                    <!-- NXB-->
                                    <div class="form-group">
                                        <label for="name_book_seo">Nhà xuất bản</label>
                                        <select class="form-control" name="company_id">
                                            @foreach ($company as $val)
                                            <option value="{{$val->id}}">{{$val->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="">Tỉnh thành</label>
                                            <select name="tinh_id" id="tinh" class="form-control border-radius">
                                                <option value="">Trống</option>
                                                @foreach($list_tinh as $tinh)
                                                <option value="{{$tinh->id}}">{{$tinh->name}}</option>
                                                @endforeach
                                            </select>
        
                                        </div>
                                        <div class="col-md-6">
        
                                            <label for="">Huyện</label>
                                            <select name="huyen_id" id="huyen" class="form-control border-radius">
        
                                            </select>
        
                                        </div>
                                        <script>
                                            $('#tinh').change(function () {
                                                var tinh_id = $('#tinh').val();
                                                $.get("{{asset('app/local/huyen')}}/" + tinh_id, function (data) {
                                                    $("#huyen").html(data);
        
                                                });
                                            });
        
                                        </script>
                                        <div class="col-md-12">
                                            <label for="">Kho</label>
                                            <select name="store_id" id="store" class="form-control border-radius">
                                                <option value="">Trống</option>
        
                                            </select>
                                            <script>
                                                $('#huyen').change(function () {
                                                    var huyen_id = $('#huyen').val();
                                                    $.get("{{asset('app/local/store')}}/" + huyen_id, function (data) {
                                                        $("#store").html(data);
        
                                                    });
                                                });
        
                                            </script>
                                        </div>
                                    </div>
                                  
                                 

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Mô tả-->
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea type="text" class="form-control" id="des" placeholder="Mô tả"
                                            name="des">{{old('des')}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <textarea type="text" class="form-control" id="content"
                                            name="content">{{old('content')}}</textarea>
                                        {{F_tinymce('content')}}
                                    </div>
                                    <!-- Url-->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">{{asset('')}}</div>
                                            </div>
                                            <input type="text" class="form-control" id="url_book" name="url"
                                                value="{{old('url')}}" maxlength="500">
                                        </div>
                                    </div>

                                    <script>
                                        function ChangeToSlug() {
                                            var title, slug;
                                            //Lấy text từ thẻ input title_news
                                            title = document.getElementById("title_book").value;
                                            //Đổi chữ hoa thành chữ thường
                                            slug = title.toLowerCase();
                                            //Đổi ký tự có dấu thành không dấu
                                            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                                            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                                            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                                            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                                            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                                            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                                            slug = slug.replace(/đ/gi, 'd');
                                            //Xóa các ký tự đặt biệt
                                            slug = slug.replace(
                                                /\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi,
                                                '');
                                            //Đổi khoảng trắng thành ký tự gạch ngang
                                            slug = slug.replace(/ /gi, "-");
                                            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                                            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                                            slug = slug.replace(/\-\-\-\-\-/gi, '-');
                                            slug = slug.replace(/\-\-\-\-/gi, '-');
                                            slug = slug.replace(/\-\-\-/gi, '-');
                                            slug = slug.replace(/\-\-/gi, '-');
                                            //Xóa các ký tự gạch ngang ở đầu và cuối
                                            slug = '@' + slug + '@';
                                            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                                            //In slug ra textbox có id “url_news”
                                            document.getElementById('url_book').value = slug;
                                            $('.google_url').html(slug);
                                            $('.google_title').html(title);
                                        }

                                    </script>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- seo bai viet -->
                    @include('Book::IV_seo_book_new')
                </div>
                <!-- cot phai -->
                <div class="col-md-3">
                    <!-- duyet -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><label><b>Ngày: </b></label>
                                <?php $ldate = new DateTime(); echo $ldate->format('d-m-Y H:i'); ?>
                            </h3>
                        </div>
                        <div class="box-body">
                            <!-- trang thai -->
                            <div class="">
                                <!-- trang thai -->
                                <div class="form-group">
                                    <b>Trạng thái: </b> <br />
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" type="radio" name="status" id="on" value="on" checked
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="on">Công khai</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" type="radio" name="status" id="off" value="off"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="off">Khóa</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- danh muc sách -->
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thể loại</h3>
                        </div>
                        <div class="box-body">
                            <?php F_checkbox_cat_multi_level($cat,'',$book=''); ?>
                        </div>
                    </div>
                    <!-- địa chỉ kho -->
                    {{-- <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Kho</h3>
                        </div>
                        <div class="box-body">
                            <?php F_checkbox_cat_multi_level($cat,'',$book =''); ?>
                        </div>
                    </div> --}}
                    <!-- Ảnh đại diện -->
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Ảnh đại diện</h3>
                        </div>
                        <div class="box-body">
                            {{F_input_image('','img','new_news','')}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="button_action">
                <button type="submit" name="save_list" class="btn btn-primary" value="on">
                    Lưu
                </button>
                <button type="submit" name="save_new" class="btn" value="on">
                    Lưu và thêm mới
                </button>
                <button type="submit" name="save_edit" class="btn" value="on">
                    Lưu và xem lại
                </button>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>

@endsection
