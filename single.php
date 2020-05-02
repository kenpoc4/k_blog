<?php get_header();?>

<!-- Single -->
    <div class="container">
        <h2 class="my-5 text-center text-primary">Titulo Blog</h2>
        <hr>
        <div class="row">
            <!-- Columna principal -->
                <div class="col-lg-9">
                    <?php 
                        if ( have_posts() ) : 
                            while ( have_posts() ) : the_post();    ?> 
                                <!-- Entrada -->
                                    <div class="card-body">
                                        <h2><?php the_title(); ?></h2>
                                        <p class="small mb-0">Fecha: <?php the_time('F j, Y'); ?></p>
                                        <p class="small mb-0">Autor: <?php the_author();?></p>
                                        <p class="small">Categoría: <?php the_category( '/') ?> Etiquetas: <?php the_tags('', '/', '');?></p>

                                        <?php
                                            if ( has_post_thumbnail() ) {
                                                the_post_thumbnail('post-thumbnails', array(
                                                    'class' =>  'img-fluid mb-3'
                                                ));
                                            }
                                        ?>
                                        <!-- <img src="img/horizontal.jpg" alt="" class="img-fluid mb-3"> -->
                                        <?php the_content(); ?>

                                        <?php
                                            if ( comments_open() || get_comments_number() ) :
                                                comments_template();
                                            endif;
                                        ?>
                                    </div>
                                <!-- Fin entrada -->
                            <?php   endwhile; 
                        endif; 
                    ?>
                </div>
            <!-- Fin columna principal -->

            <!-- Barra lateral -->
            <?php get_sidebar();?>
            <!-- Fin Barra lateral -->

        </div>
    </div>
<!-- Fin single -->

<?php get_footer();?>