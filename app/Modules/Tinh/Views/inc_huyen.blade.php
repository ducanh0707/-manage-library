@foreach($huyen_list as $val) 
    <li class="dd-item  dd3-item" data-id="<?php echo $val->id ?>" >
            <div class="dd-handle dd3-handle"></div>
            <div class="dd3-content  @if(isset($huyen_id)) @if($huyen_id == $val->id) list-group-item-primary @endif @endif">
                <?php echo html_entity_decode( $val -> icon);?>
                <span class="menu-name">
                     <a class=" @if(isset($huyen_id)) @if($huyen_id == $val->id) text-primary @else text-dark @endif @else text-dark @endif" href="<?php echo asset('admin/tinh/'.$tinh_id.'/huyen/'.$val->id) ?>"><?php  echo $val-> name . ' - '.$val->code; ?></a>
                </span>
                <!-- action  -->
                <span class="menu-ac">
                    <!-- trang thai  -->
                    @if($val->status != 'on')
                        <a href="{{asset('admin/tinh/'.$tinh_id.'/status/'.$val->id)}}">
                            <i class="fa fa-exclamation-circle text-danger"></i>
                        </a>
                    @else
                        <a href="{{asset('admin/tinh/'.$tinh_id.'/status/'.$val->id)}}">
                            <i class="fa fa-check-circle text-success"></i>
                        </a>
                    @endif
                    <!-- sua  -->
                    <a class="edit_local" 
                        data-local_type="huyen"
                        data-orderby="{{$val->orderby}}"
                        data-code="{{$val->code}}"
                        data-url="{{$val->url}}"
                        data-name="{{$val->name}}"
                        data-tel="{{$val->tel}}"
                        data-tel_2="{{$val->tel_2}}"
                        data-email="{{$val->email}}"
                        data-website="{{$val->website}}"
                        data-address="{{$val->address}}"

                        data-tinh_id="{{$tinh_id}}"
                        data-huyen_id="{{$val->id}}" href="#" data-toggle="modal" data-target="#edit_local">
                         <i class="fa fa-edit"></i>
                    </a>
                    
                </span>
                <!-- ket thuc xoa  -->
            </div>
        
    </li>
@endforeach
