<?php
// mở composer.json
//thêm vào đọa "autoload" chuỗi sau:
// "files" : ["app/function/function.php" ]
// chay cmd: composer dumpa
//fondend

//fontend 
	include('FF_nav.php');


//backend
	//hien thi danh sach danh muc 
	include('F_checkbox_cat_multi_level.php');
	include('F_tinymce.php');
	include('change_title_to_url.php');

	//danh muc
	include('F_cat_multi_level.php');
	// select danh sach danh mục da cap: them moi danh muc
	include('F_select_cat_multi_level.php');
	//menu multi nevel
	include('F_menu_multi_level.php');

	//them moi select list
	include('F_select_list_muli_level.php');
	//sua menu: select list menu cha
	include('F_select_list_muli_level_edit.php');

	//them moi menu: select menu cha
	include('F_select_menu_muli_level.php');

	include('F_input_image.php');
	include('F_input.php');
	include('F_change_status.php');

	include('F_get_percen.php');




