<?php

// アイキャッチの設定
add_theme_support('post-thumbnails');

//投稿をNewsに変更
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'News';
	$menu[5][0] = $name;
}
add_action( 'admin_menu', 'Change_menulabel' );


$newsShowNum = 12;


?>