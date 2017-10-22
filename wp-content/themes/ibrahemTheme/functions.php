<?php
	/*
		**Function add my custom Styles
		**Added By ibrahim hamdy
	*/

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
		wp_deregister_script('jquery');//remove the built in  jquery  from  the  system
		wp_register_script('jquery',includes_url('/js/jquery/jquery.js'),false,'',true);//register  A jquery  in the footer   
		wp_enqueue_script('booststrap-js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),false,true);
		wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js',array(),false,true);

		wp_enqueue_script('tml5shiv-js',get_template_directory_uri().'/js/html5shiv.js');
		wp_script_add_data('tml5shiv-js','conditional','lt IE 9');
		wp_enqueue_script('respond.min-js',get_template_directory_uri().'/js/respond.min.js');
		wp_script_add_data('respond.min-js','conditional','lt IE 9');


	}
	/*
		**Add Function 
		**Added By ibrahim hamdy
		**add_action()
	*/

	add_action('wp_enqueue_scripts','add_styles');	
	add_action('wp_enqueue_scripts','add_scripts');	



?>