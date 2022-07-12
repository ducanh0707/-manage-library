<?php

//hien thi o bang danh sach menu
function FF_nav_multi_level($menu, $parent = 0,$sub=''){
 
   if(isset($menu)){
      foreach ($menu as $key => $val){
         $id_nav = $val->id;
         if($parent == $val->parent_id){
        
?>
           
            <li id="<?php echo $val->id_li ?>" class="nav-item monkey-nav-item <?php echo $val-> class_li;?>">
                <a class="nav-link nav-link-monkey distance-center" href="<?php echo asset($val->url) ?>" >
                    <?php if($val-> icon != ''){echo $val-> icon.' ';} if($val->  img != ''){echo '<img src="'.asset('source/menu/'.$val->img).'" > ';}  echo $val ->name ?>
                    <?php 
                        if(count($val ->f_child) > 0){
                            echo '<span class="icon-caret-down"><i class="icon-monkey-dropdown" aria-hidden="true"></i></span>';
                        }
                    ?>
                </a>
                <?php
                    if(count($val ->f_child) > 0){

                        echo ' <div class="monkey-dropdown-menu">';
                            echo FF_sub($val);
                            
                        echo '</div>';
                    }
                   
                ?>
            </li>
<?php
         }
      }//end if parent
   }//end foreach data
}//end 

function FF_sub($menu){

    foreach($menu ->f_child as $menu_sub){
        echo '<a class="d-block monkey-dropdown-item subsite_menu_course" target="_self"
            href="'.$menu_sub->url.'">';
            echo $menu_sub->name;
        echo '</a>';
    }

}


function FF_nav_a($menu){
   if(isset($menu)){
      foreach ($menu as $key => $val){
?>
     <a class="monkey-color-white mr-lg-3 ml-ld-3 d-flex" href="<?php echo asset($val->url) ?>"  target="_blank">
            <span class="mr-2"> ●</span>
            <span><?php if($val-> icon != ''){echo $val-> icon.' ';} echo $val->name; ?></span>
        </a>

<?php
      }//end if parent
   }//end foreach data
}//end 
