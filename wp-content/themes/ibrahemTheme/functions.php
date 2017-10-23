<?php
	/*
		**Function add my custom Styles
		**Added By ibrahim hamdy
	*/

	require_once 'wp-bootstrap-navwalker.php';

	// Add  featured Image Support
	add_theme_support('post-thumbnails');

	function add_styles()
	{
		wp_enqueue_style('booststrap-css',get_template_directory_uri().'/css/bootstrap.min.css');
		wp_enqueue_style('fontawesome-css',get_template_directory_uri().'/css/font-awesome.min.css');
		wp_enqueue_style('main-css',get_template_directory_uri().'/css/main.css');


	}
	/*
		**Function add my custom script
		**Added By ibrahim hamdy
	*/

	function add_scripts()
	{
		wp_enqueue_script('tether-js',get_template_directory_uri().'/js/tether.min.js',array(),false,true);

		wp_deregister_script('jquery');//remove the built in  jquery  from  the  system

		wp_register_script('jquery',includes_url('/js/jquery/jquery.js'),false,'',true);//register  A jquery  in the footer   
		wp_enqueue_script('jquery');
		wp_enqueue_script('booststrap-js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),false,true);
		wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js',array(),false,true);
		wp_enqueue_script('tml5shiv-js',get_template_directory_uri().'/js/html5shiv.js');
		wp_script_add_data('tml5shiv-js','conditional','lt IE 9');
		wp_enqueue_script('respond',get_template_directory_uri().'/js/respond.min.js');
		wp_script_add_data('respond','conditional','lt IE 9');
	}


	/*
		**Customize The Excerpt Word Length &Read More
		**Added By ibrahim hamdy
	*/

		function excerpt_length()
		{
			return 20;
		}
		add_filter('excerpt_length','excerpt_length');

		function excerpt_dots()
		{
			return ' ....';
		}
		add_filter('excerpt_more','excerpt_dots');



	/*
		**Add Function 
		**Added By ibrahim hamdy
		**add_action()
	*/


	add_action('wp_enqueue_scripts','add_styles');	
	add_action('wp_enqueue_scripts','add_scripts');	



	/*
		**Add a custom Menu Support
		**Added By ibrahim hamdy
		
	*/

		function register_custom_menu()
		{
			register_nav_menus(array('boostrap-menu'=>'Navigation Bar'
									,'footer menu'=>'Footer Menu'));
		}


		function bootstrap_menu()
		{
			wp_nav_menu(array(
				'theme_location'	=>'boostrap-menu',
				'menu_class'		=>'navbar navbar-nav  navbar-right',
				
				'container'			=>'false',

				'depth'				=>2,
				'walker'			=> new wp_bootstrap_navwalker(),
			));
		}
		add_action('init','register_custom_menu')
?>