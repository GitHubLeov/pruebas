<?php get_header() ?>
        <div class="fila">
            <div class="col-12-movil col-12-tablet-vertical col-12-tablet-horizontal col-12-escritorio col-12-escritorio-xl">
            <?php 
            if ( have_posts() ) :
                 while ( have_posts() ) : the_post(); ?>

                 <?php  the_title( '<h2>', '</h2>' ); ?>

                 <?php  the_content(); ?>

                 <?php previous_post_link( '<strong>%link</strong>' ); ?>

                 <?php  next_post_link( '<strong>%link</strong>' ); ?>

         <?php   endwhile; 
else:
              _e( 'Sorry, no pages matched your criteria.', 'textdomain' );
            endif; ?>
            </div>
        </div>
        
<?php get_footer() ?>      







