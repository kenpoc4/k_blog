<?php get_header();?>

<!-- Body -->
    <div class="container">
        <h2 class="my-5 text-center text-primary">Titulo Blog</h2>
        <hr>
        <div class="row">
            <!-- Columna principal -->
                <div class="col-lg-9">
                    <?php 
                        get_header();
                        if ( have_posts() ) : 
                            while ( have_posts() ) : the_post();    ?> 
                                <!-- Entrada -->
                                    <div class="card-body">
                                        <a href="<?php the_permalink();?>">
                                            <h2><?php the_title(); ?></h2>
                                        </a>
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
                                        <?php the_excerpt(); ?>

                                        <a href="<?php the_permalink();?>" class="btn btn-primary pl-4 pr-4">Ver</a>
                                    </div>
                                <!-- Fin entrada -->
                            <?php   endwhile; 
                        endif; 
                    ?>
                    

                    <!-- Paginación -->
                        <div class="card-body">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                                </ul>
                                </nav>
                        </div>
                    <!-- Fin paginación -->

                </div>
            <!-- Fin columna principal -->

            <!-- Barra lateral -->
                <div class="col-lg-3">
                    <div class="card-body">
                        <h4>Barra lateral</h4>
                        <hr>
                        <img src="img/vertical.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            <!-- Fin Barra lateral -->

        </div>
    </div>
<!-- Fin body -->

<?php get_footer();?>