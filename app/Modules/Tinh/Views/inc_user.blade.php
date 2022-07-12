@foreach($user_list as $val)
    <li class="dd-item  dd3-item" data-id="<?php echo $val->id ?>">
            <div class="dd-handle dd3-handle"></div>
            <div class="dd3-content">
                <?php echo html_entity_decode( $val -> icon);?>
                <span class="menu-name">
                    <a class="@if(isset($lop_id)) @if($lop_id == $val->id) text-primary @else text-dark @endif @else text-dark @endif" href="#">
                        <?php  echo $val-> name; ?>
                    </a>
                </span>
                <!-- action  -->
                <span class="menu-ac">
                    
                    <!-- sua  -->
                    <a href="{{asset('admin/user/'.$val->user_type_id.'/parent/'.$val->parent_id.'/edit/'.$val->id)}}"target="_blank" class="edit_local">
                        <i class="fa fa-edit"></i>
                    </a>
                    <!-- model edit menu custome -->
                    
                </span>
                <!-- ket thuc xoa  -->
            </div>
        
    </li>
@endforeach