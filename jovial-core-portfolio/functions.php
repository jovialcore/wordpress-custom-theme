<?php




	function boostrap_scripts(){
		
		wp_enqueue_style('b-bin', get_template_directory_uri(). '/assets/css/bootstrap.min.css');

		 wp_enqueue_script( 'b-c',
			get_template_directory_uri(). '/assets/js/bootstrap.js');
 } 
 	add_action( 'wp_enqueue_scripts', 'boostrap_scripts');


 require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

 

 	

 ?> 