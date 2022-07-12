<hr>
<div class="col-md-12 py-3">
    <div>
        <label class="font-weight-bold"><i class="fas fa-tags"></i> Giá theo tháng</label> <br>
        @if($post->f_price)
            @foreach($post->f_price as $key => $price_val)
                <div class="form-group row price_count @if($key > 0)file_{{$key}}@endif">
                    <div class="col-md-4">
                        <label for="">Tháng @if($key == 0) (0 = trọn đời) @endif</label>
                        <input type="number" min="0" name="price_month[{{$key}}][month]" class="form-control" value="{{$price_val->month}}">
                    </div>
                    <div class="col-md-4">
                        <label for="">Giá bán (khuyến mại)</label>
                        <input type="text" name="price_month[{{$key}}][price]" class="form-control" value="{{$price_val->price}}">
                    </div>
                    <div class="col-md-3">
                        <label for="">Giá cũ</label>
                        <input type="text" name="price_month[{{$key}}][price_old]" class="form-control" value="{{$price_val->price_old}}">
                    </div>
                    @if($key > 0)
                        <div class="col-md-1">
                            <label>Xóa</label><br>
                            <span data-row="file_{{$key}}" id="xoaf" class="xoa_itfe_{{$key}} text-danger cursor"><i class="fa fa-trash"></i></span>
                        </div>
                    @endif
                </div>
                <script>
                      $('.xoa_itfe_{{$key}}').click(function(){
                        
                        $('.file_{{$key}}').remove();
        
                    });
                </script>
            @endforeach
        @else
            <div class="form-group row price_count">
                <div class="col-md-4">
                    <label for="">Tháng (0 = trọn đời)</label>
                    <input type="number" min="0" name="price_month[0][month]" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="">Giá bán (khuyến mại)</label>
                    <input type="text" name="price_month[0][price]" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="">Giá cũ</label>
                    <input type="text" name="price_month[0][price_old]" class="form-control">
                </div>
                
            </div>
        @endif
    </div>

    <div id="add_price"> </div>
    <div class="text-right">
        <span href="#" class="btn btn-sm btn-primary cursor" id="addf">Thêm</span>
    </div>

        <script>
            $('#xoaf').click(function(){
                $('#filef').val('');
            });
            // them anh 
            $('#addf').click(function(e){
                e.preventDefault();
                var count = $('.price_count').length;
                var key = count;
                $('#add_price').append('<div class="form-group row price_count file_'+key+'"> <div class="col-md-4"><label for="">Tháng</label><input type="number" min="0" name="price_month['+key+'][month]" class="form-control"></div><div class="col-md-4"><label for="">Giá bán (khuyến mại)</label><input type="text" name="price_month['+key+'][price]" class="form-control"></div> <div class="col-md-3"> <label for="">Giá cũ</label> <input type="text" name="price_month['+key+'][price_old]" class="form-control"> </div> <div class="col-md-1"><label>Xóa</label><br><span data-row="file_'+key+'" id="xoaf"class="xoa_itf text-danger cursor"><i class="fa fa-trash"></i></span></div></div>');
            });
            //xoa truong vua them
            $('#add_price').on('click', '.xoa_itf',function(e){
                e.preventDefault();
                var it = $(this).data('row');
                $('.'+it).remove();
            });
           
        </script>

</div>