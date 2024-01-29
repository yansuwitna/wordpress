<?php 

//Foto
function foto(){
	register_sidebar(array(
		'name' 			=> 'FOTO',
		'id'			=> 'foto',
		'before_widget'	=> '<div class="widget-right-sidebar">',
		'after_widget'	=> '</div>',
		'before_title' 	=> '<h2>',
		'after_title'	=> '</h2>',
	));
}

add_action('widgets_init', 'foto');


//Sisi Kanan
function kanan(){
	register_sidebar(array(
		'name' 			=> 'KANAN',
		'id'			=> 'kanan',
		'before_widget'	=> '<div class="widget-right-sidebar">',
		'after_widget'	=> '</div>',
		'before_title' 	=> '<h2>',
		'after_title'	=> '</h2>',
	));
}

add_action('widgets_init', 'kanan');

//Untuk Menampilkan Menu
function menuku() {
    register_nav_menu('sidebar_menu', 'Sidebar Menu');
}
add_action('after_setup_theme', 'menuku');


?>