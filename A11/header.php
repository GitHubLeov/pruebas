<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confección y publicación págians web</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <div id="principal">
        <header class="fila">
                <div class="col-12-movil col-12-tablet-vertical col-12-tablet-horizontal col-12-escritorio col-12-escritorio-xl">
                    <h1><?php bloginfo( 'name' ); ?></h1>
                    <p class="descripcion-sitio"><?php bloginfo( 'description' ); ?></p>
                </div>
                <div class="col-12-movil col-12-tablet-vertical col-12-tablet-horizontal col-12-escritorio col-12-escritorio-xl">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
                </div>

                <div  id=logo class="col-12-movil col-12-tablet-vertical col-12-tablet-horizontal col-12-escritorio col-12-escritorio-xl">
                  <a href="<?php site_url(); ?>"><?php if ( function_exists( 'the_custom_logo' ) ) {
	the_custom_logo();
} ?></a>  
            </div>
        </header>
        <!-- no se cierra porque esta en category.php -->


        