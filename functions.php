<?php

	add_theme_support( 'post-thumbnails' );
	register_nav_menu('header-menu', 'Header menu');

	// Добавим стили
	add_action("wp_enqueue_scripts","diploma_style");
	
	function diploma_style(){

		wp_enqueue_style("bootstrap", get_template_directory_uri()."/assets/libs/bootstrap.min.css");

		wp_enqueue_style("fonts", get_template_directory_uri()."/assets/fonts/fonts.css");

		wp_enqueue_style("main-css", get_template_directory_uri()."/assets/css/style.css");

		wp_enqueue_style("style-css",     get_stylesheet_uri());
	}

		// Добавим скрипты
	add_action("wp_enqueue_scripts","diploma_scripts");

	function diploma_scripts(){

		wp_deregister_script("jqery");

		wp_register_script("jquery", get_template_directory_uri()."assets/js/jquery.js", null,"1", true);

		wp_enqueue_script("jquery");

		wp_enqueue_script("main-js", get_template_directory_uri()."/assets/js/script.js");
	}

	if(function_exists('acf_add_options_page')) {
		acf_add_options_page();
	}
?>