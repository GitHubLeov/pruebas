<?php /* Template Name: Animaciones */ ?>
<!-- <?php get_header() ?> -->
<p>esto es page_animaciones.php</p>

        <div id=contenido-principal class="fila">
            <div class="col-12-movil">
            <?php if ( have_posts() ) :
                 while ( have_posts() ) : the_post();
                the_title( '<h2>', '</h2>' );
                the_content();
            endwhile; 
else:
              _e( 'Sorry, no pages matched your criteria.', 'textdomain' );
            endif; ?>
            </div>           
        </div>
<?php get_footer() ?>    