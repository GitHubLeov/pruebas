<?php get_header() ?>
        <div id=logo class="fila">
            <div class="col-12-movil col-12-movil col-12-tablet-vertical col-12-tablet-horizontal col-12-escritorio col-12-escritorio-xl">
                <h2>
                <?php single_cat_title('Categoria'); ?>
                </h2>
            </div>
        </div>
        <div id=contenido-central class="fila">
            <div class="col-12-movil col-12-movil col-12-tablet-vertical col-12-tablet-horizontal col-12-escritorio col-12-escritorio-xl">
                <div class="fila">       
                    <?php if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); ?>
                         <div class="col-4-movil col-3-tablet-vertical col-4-tablet-horizontal col-4-escritorio col-4-escritorio-xl">
                                <div class="fila">
                                    <div class="col-12-movil col-12-tablet-vertical col-12-tablet-horizontal col-12-escritorio col-12-escritorio-xl">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    </div>
                                    <div class="col-7-movil col-7-tablet-vertical col-7-tablet-horizontal col-7-escritorio col-7-escritorio-xl">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                <div class="col-5-movil col-5-tablet-vertical col-5-tablet-horizontal col-5-escritorio col-5-escritorio-xl">
                                    <?php the_excerpt(); ?>   
                                </div>
                            </div>
                        </div>
         <?php endwhile; else:
         _e( 'Sorry, no pages matched your criteria.', 'textdomain' );
            endif; ?>
        </div>
            </div>
        </div>
<?php get_footer() ?>
