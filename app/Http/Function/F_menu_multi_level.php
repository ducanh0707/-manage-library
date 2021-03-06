<?php 
function F_menu_multi_level_ui($data,$type_id,$row_list,$cat_list,$parent = 0,$str = ""){
   foreach ($data as $key => $val){
     $id_menu = $val -> id;
     $type_menu = $val -> menu_type;     
     if($val -> parent_id== $parent){
?>
     <!-- ten menu -->

         <li class="dd-item  dd3-item" data-id="<?php echo $id_menu ?>">
            <div class="dd-handle dd3-handle"></div>
            <div class="dd3-content">
               <?php echo html_entity_decode( $val -> icon);?>
               <?php if($val->img != ''){ ?>
               <img height="15px" src="<?php echo asset('source/menu/'.$val->img) ?>">
               <?php } ?>
                  <span class="menu-name">
                     <?php
                        if($type_menu == 'custome'){ 
                           echo $val-> name;
                        }
                     ?>
                  </span>
                  <!-- action  -->
                  <span class="menu-ac">
                     <!-- trang thai  -->
                     <?php if($val->status == 'off'){ ?>
                        <a href="<?php echo url()->current().'/status/'.$val->id; ?>">
                           <i class="fa fa-exclamation-circle text-danger"></i>
                        </a>
                     <?php }elseif($val->status == 'on'){ ?>
                        <a href="<?php echo url()->current().'/status/'.$val->id; ?>">
                           <i class="fa fa-check-circle text-success"></i>
                        </a>
                     <?php } ?>
                     <!-- xoa  -->
                     <a  href="" data-toggle="modal" data-target="#call_del_<?php echo $id_menu ?>">
                        <i class="fa fa-trash text-danger"></i>
                     </a>
                     <div class="modal fade" id="call_del_<?php echo $id_menu ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">   
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title"><i class="fa fa-trash text-danger"></i> B???n c?? ch???c ch???n mu???n x??a?</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                           
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-primary" data-dismiss="modal">????ng</button>
                                 <a  href="<?php echo asset('admin/menu/type/'.$val->menu_type_id.'/del/'.$val->id) ?>" role="button" class="btn btn-danger">Ok X??a</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- sua  -->
                     <a href="#" data-toggle="modal" data-target="#edit_menu_<?php echo $val -> id ?>">
                        <i class="fa fa-edit"></i>
                     </a>
                     <!-- model edit menu custome -->
                     <div class="modal fade" id="edit_menu_<?php echo $val -> id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <form action="<?php echo asset('admin/menu/type/'.$val -> menu_type_id.'/edit/'.$val -> id) ?>" method="post"  enctype="multipart/form-data">
                           <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                           <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">S???a Menu (<?php echo $val->id ?>)</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <!-- ten menu -->
                                       <div class="form-group">
                                          <label><i class="fa fa-list"></i> T??n menu (b???t bu???c)</label>
                                          <input type="text" id="name_menu_<?php echo $val->id ?>" value="<?php echo $val ->name ?>" class="form-control" placeholder="B???n ??i???n menu" name="name">
                                       </div>
                                      
                                       <!-- link menu -->
                                       <div class="form-group">
                                          <label><i class="fa fa-link"></i> Link menu</label>
                                          <input type="text" id="url_menu_<?php echo $val->id ?>" value="<?php echo $val->url?>" class="form-control" placeholder="B???n ??i???n link menu" name="url">
                                       </div>
                                       
                                       <hr>
                                       <label class="font-weight-bold">Th??m nhanh</label>
                                     
                                       <div class="form-group">
                                          <label>Menu tr??? ?????n danh m???c</label>
                                          <select id="select_cat_<?php echo $val->id ?>" class="form-control form-control-sm">
                                             <option value="">Tr???ng</option>
                                             <?php foreach ($cat_list as $cat){ ?>
                                                <option data-name="<?php echo $cat->name ?>" value="<?php echo $cat->url ?>" <?php if($cat->url == $val->url){echo 'selected'; } ?>><?php echo $cat->name ?></option>
                                             <?php  } ?>
                                          </select>
                                       </div>

                                       <script>
                                          $('#select_row_<?php echo $val->id ?>').change(function(){
                                             var row = $(this ).val();
                                             var name_row = $('#select_row_<?php echo $val->id ?> option:selected').data('name');
                                             $('#url_menu_<?php echo $val->id ?>').val(row);
                                             $('#name_menu_<?php echo $val->id ?>').val(name_row);
                                          });
                                          $('#select_cat_<?php echo $val->id ?>').change(function(){
                                             var cat = $(this).val();
                                             var name_cat = $('#select_cat_<?php echo $val->id ?> option:selected').data('name');
                                             $('#url_menu_<?php echo $val->id ?>').val(cat);
                                             $('#name_menu_<?php echo $val->id ?>').val(name_cat);
                                          });
                                       </script>

                                    </div>
                                    <div class="col-md-6">
                                       <label> <b>CSS vs ID (li)</b></label>
                                       <div class="form-group row">
                                          <div class="col-md-6">
                                             <input type="text" class="form-control" name="class_li" placeholder="class li" value="<?php echo $val -> class_li ?>">
                                          </div>
                                          <!--  id -->
                                          <div class="col-md-6">
                                             <input type="text" class="form-control" name="id_li" placeholder="id li" value="<?php echo $val -> id_li ?>">
                                          </div>
                                       </div>
                                       <!-- class + id a   -->
                                       <label> <b>CSS vs ID (a)</b></label>
                                       <div class="form-group row">
                                          <div class="col-md-6">
                                             <input type="text" class="form-control" name="class_a" placeholder="css a" value="<?php echo $val -> class_a ?>">
                                          </div>
                                          <!--  id -->
                                          <div class="col-md-6">
                                             <input type="text" class="form-control" name="id_a" placeholder="id a" value="<?php echo $val -> id_a ?>">
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label> <b>Thu???c t??nh th??? a</b></label>
                                          <input type="text" class="form-control" name="attri" value="<?php echo $val -> attri ?>">
                                       </div>
                                                                              <!-- menu icon -->
                                       <div class="form-group">
                                          <label><i class="fa fa-icons"></i> Bi???u t?????ng </label>
                                          <input type="text" value="<?php echo htmlentities($val -> icon) ?>" class="form-control" placeholder="V?? d???: <i class='fa fa-user'></i>" name="icon">
                                          B???n copy m?? bi???u t?????ng  <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_bank">t???i ????y</a>
                                       </div>
                                       
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">????ng</button>
                              <button type="submit" class="btn btn-primary">G???i</button>
                              </div>
                           </div>
                        </div>
                        </form>
                     </div>
                  </span>
                  <!-- ket thuc xoa  -->
               </div>
        
<?php
      if($val -> f_child){
          echo '<ol class="'.$str.'">'; 
            F_menu_multi_level_ui($data,$type_id,$row_list,$cat_list,$id_menu,$str."dd-list");//de quuy danh muc
          echo '</ol>';         

        echo ' </li>';
      }  
     }//end if parent
  }//end foreach data
}//end funcito