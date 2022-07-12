<?php 
//hien thi input 
function F_input_basic($type,$value,$name,$id,$class,$att,$place){
   echo '<input type="'.$type.'" value="'.$value.'" name="'.$name.'" '.(($id != '')? 'id="'.$id.'"':'').' class="'.$class.'" placeholder="'.$place.'"  '.$att.'>';
}

// hien thi textarea 
function F_input_textarea($value,$name,$id,$class,$att,$place){
   echo '<textarea  name="'.$name.'" id="'.$id.'" class="'.$class.'" placeholder="'.$place.'"  '.$att.'>'.$value.'</textarea>';
}