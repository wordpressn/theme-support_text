<?php
/* add title tag support */
		add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

	/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
add_theme_support( 'post-formats', array(

		) );
	// Support for elementor header and footer
		if ( class_exists( 'Header_Footer_Elementor' ) ) {
			add_theme_support( 'header-footer-elementor' );
		}

add_theme_support( 'woocommerce' );
