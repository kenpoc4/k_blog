<?php get_header();?>

<!-- Body -->
    <div class="container">
        <h2 class="my-5 text-center text-primary">Titulo Blog</h2>
        <hr>
        <div class="row">
            <!-- Columna principal -->
                <div class="col-lg-9">
                    <h3 class="bg-primary text-white py-3 mb-5">Resultado de Búsqueda</h3>

                    <?php 
                        get_header();
                        if ( have_posts() ) : 
                            while ( have_posts() ) : the_post();    ?> 
                                <!-- Entrada -->
                                    <div class="card-body">
                                        <a href="<?php the_permalink();?>">
                                            <h2><?php the_title(); ?></h2>
                                        </a>

                                        <!-- <img src="img/horizontal.jpg" alt="" class="img-fluid mb-3"> -->
                                        <?php the_excerpt(); ?>

                                        <a href="<?php the_permalink();?>" class="btn btn-primary pl-4 pr-4">Ver</a>
                                    </div>
                                <!-- Fin entrada -->
                            <?php   endwhile;   ?>
                        <?php else:?>
                        <h5>
                            No se encontró el termino: 
                            <?php printf(esc_html('%s'), get_search_query());?>    
                        </h5>
                        <?php get_search_form();?>
                        <?php   endif; 
                    ?>
                    

                    <!-- Paginación -->
                        <div class="card-body">
                            <?php get_template_part( 'template-parts/content', 'paginacion' )?>
                        </div>
                    <!-- Fin paginación -->

                </div>
            <!-- Fin columna principal -->

            <!-- Barra lateral -->
               <?php get_sidebar();?>
            <!-- Fin Barra lateral -->

        </div>
    </div>
<!-- Fin body -->

<?php get_footer();?>