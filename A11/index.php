<?php get_header() ?>
        <div id=contenido-principal class="fila">
            <div class="col-8-movil">
            <?php if ( have_posts() ) :
                 while ( have_posts() ) : the_post();
                the_title( '<h2>', '</h2>' );
                the_content();
            endwhile; else:
              _e( 'Sorry, no pages matched your criteria.', 'textdomain' );
            endif; ?>
            </div>
            <div class="col-4-movil">
            <?php get_sidebar() ?>
            </div>
        </div>
<?php get_footer() ?>    



