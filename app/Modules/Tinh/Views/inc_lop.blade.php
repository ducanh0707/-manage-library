@foreach($lop_list as $val)
    <li class="dd-item  dd3-item" data-id="<?php echo $val->id ?>">
            <div class="dd-handle dd3-handle"></div>
            <div class="dd3-content">
                <?php echo html_entity_decode( $val -> icon);?>
                <span class="menu-name">
                    <a class="@if(isset($lop_id)) @if($lop_id == $val->id) text-primary @else text-dark @endif @else text-dark @endif" href="<?php echo asset('admin/tinh/'.$tinh_id.'/huyen/'.$huyen_id.'/truong/'.$truong_id.'/lop/'.$val->id) ?>">
                        <?php  echo $val-> name; ?>
                    </a>
                </span>
                <!-- action  -->
                <span class="menu-ac">
                    <!-- trang thai  -->
                    @if($val->status != 'on')
                        <a href="{{asset('admin/tinh/'.$tinh_id.'/huyen/'.$huyen_id.'/truong/'.$truong_id.'/status/'.$val->id)}}">
                            <i class="fa fa-exclamation-circle text-danger"></i>
                        </a>
                    @else
                        <a href="{{asset('admin/tinh/'.$tinh_id.'/huyen/'.$huyen_id.'/truong/'.$truong_id.'/status/'.$val->id)}}">
                            <i class="fa fa-check-circle text-success"></i>
                        </a>
                    @endif
              
                    <!-- sua  -->
                    <a href="#" class="edit_local" 
                        data-orderby="{{$val->orderby}}" data-place_name="{{$val->place_name}}"  data-local_type="lop" data-truong_id="{{$val->truong_id}}" data-lop_id="{{$val->id}}" data-url="{{$val->url}}" data-name="{{$val->name}}" data-tinh_id="{{$val->tinh_id}}" data-huyen_id="{{$val->huyen_id}}"  data-toggle="modal" data-target="#edit_local">
                        <i class="fa fa-edit"></i>
                    </a>
                    <!-- model edit menu custome -->
                    
                </span>
                <!-- ket thuc xoa  -->
            </div>
        
    </li>
@endforeach