@extends('V_backend.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <small><a href="{{asset('admin/accountant')}}" class="btn btn-success btn-sm">Quay lại</a></small>

            <h1>
                Sửa thông tin hóa đơn của
                :{{ $accountant->f_user->name }}</h5>
            </h1>
        </section>
        @include('V_backend/alert')
        <!-- Main content -->
        <section class="content">
            <form action="<?php echo asset('admin/accountant/edit/' . $accountant->id); ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="user_ID" id="userID">
                <input type="hidden" name="type" value="{{ $accountant->type }}">
                <div class="row">
                    <div class="col-md-6">
                        <!-- ten danh muc -->
                        <div class="form-group">
                            <label for="name_accountant font-weight-bold">Tên Khách:</label>
                            {{ $accountant->f_user->name }}
                        </div>
                        <!-- ten sđt -->
                        <div class="form-group">
                            <label for="name_accountant font-weight-bold">Số điện thoại:</label>
                            {{ $accountant->f_user->tel }}
                        </div>
                        <!-- ten sđt -->
                        <div class="form-group">
                            <label for="name_accountant font-weight-bold">Tổng cọc đã nộp:</label>
                            <input type="number" name="total_money" class="form-control " id="total_money" disabled
                                value="{{ $accountant->f_user->money }}">

                        </div>


                        <!-- Tien coc thanh vien -->

                        <div class="form-group">
                            <label>Tiền đã nộp</label>
                            <input type="number" name="money" class="form-control money" id="money"
                                value="{{ $accountant->money }}">
                            <?php
                            
                            ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="changedepo_{{ $accountant->id }}"
                                    name="changedep">
                                <label class="form-check-label" disabled for="changedepo_{{ $accountant->id }}">
                                    Sửa tiền cọc
                                </label>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    $("#changedepo_{{ $accountant->id }}").change(function() {
                                        if ($(this).is(":checked")) {
                                            $(".money").removeAttr('disabled');
                                        } else {
                                            $(".money").attr('disabled', '');
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-md-6" id='time_buy'>
                        <!-- ngay Mua  -->
                        <div class="form-group buyTime">
                            <label>Ngày mua</label>
                            <?php
                            $buyTime = date_create($accountant->buyTime);
                            $buyTime = date_format($buyTime, 'd/m/Y');
                            ?>
                            <input type="text" class="form-control buyTime" name="buyTime"
                                id="buyTime_{{ $accountant->id }}" value="{{ $buyTime }}">
                        </div>
                        <script>
                             $('#buyTime_'   +  {{$accountant->id }}).datepicker({
                            format: 'mm/dd/yyyy',
                        });
                        </script>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Gửi</button>

            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
