@extends('V_backend.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh Mục Sách
                <small><a href="#" data-toggle="modal" data-target="#new_cat" class="btn btn-primary btn-sm">Thêm
                        mới</a></small>
                {{-- <small><a href="#" data-toggle="modal" data-target="#new_multi" class="btn btn-danger btn-sm">Thêm nhiều</a></small> --}}
            </h1>
        </section>
        @include('Cat::IV_modal_cat_new')
        @include('Cat::IV_modal_cat_multi')
        @include('V_backend/alert')
        <!-- Main content -->
        <section class="content">
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Danh mục </h3>
                            <div class="box-tools">

                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <table class="table table-hover">
                                <tr>
                                    <th>Tên</th>
                                    <th>URL</th>
                                    <th>Kiểu</th>
                                    <th>Ảnh</th>
                                    <th></th>
                                    <th>id</th>
                                </tr>
                                <?php F_cat_multi_level($cat); ?>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        {{ $cat->appends(request()->input())->links() }}
                    </div>
                    <script language="JavaScript">
                        function toggle(source) {
                            checkboxes = document.getElementsByName('check[]');
                            for (var i = 0, n = checkboxes.length; i < n; i++) {
                                checkboxes[i].checked = source.checked;
                            }
                        }
                    </script>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
