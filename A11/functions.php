<?php
// Registrar menú de navegación //
	function register_my_menus() {
  		register_nav_menus(
   		 array(
      		'header-menu' => __( 'Header Menu' ),
      		// 'extra-menu' => __( 'Extra Menu' )
    	 )
   		);
 		}
 	add_action( 'init', 'register_my_menus' );

// Añadir capacidad para gestionar las imagenes destacada en las entradas //

  add_theme_support( 'post-thumbnails' );

// Añadir logo personalizado desde Apariencia > personalizar > identidad del sitio

	function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

//Añadir widget (barra lateral)//

function themename_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'barra lateral derecha', 'theme_name' ),
		'id'            => 'sidebar-derecha',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( ' barra lateral izquierda', 'theme_name' ),
		'id'            => 'sidebar-izquierda',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'inicio contenido destacado', 'theme_name' ),
		'id'            => 'home-destacado',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '<section',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'inicio contenido servicios', 'theme_name' ),
		'id'            => 'home-servicio',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '<section',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'themename_widgets_init' );
