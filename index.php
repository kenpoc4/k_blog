<?php get_header();?>

<!-- Body -->
    <div class="container">
        <h2 class="my-5 text-center text-primary">Titulo Blog</h2>
        <hr>
        <div class="row">
            <!-- Columna principal -->
            <div class="col-lg-9">
                <!-- Entrada -->
                <div class="card-body">
                    <a href="single.html">
                        <h2>Titulo de la entrada</h2>
                    </a>
                    <p class="small mb-0">Fecha:xx/xx/xx</p>
                    <p class="small mb-0">Autor:nombreAutor</p>
                    <p class="small">Categoría: <a href="#">xxx</a>/<a href="#">xxx</a> Etiquetas: <a href="#">xxx</a> <a href="#">xxx</a> </p>

                    <img src="img/horizontal.jpg" alt="" class="img-fluid mb-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et atque impedit, dolorum quos aut error accusantium corporis blanditiis fugit eius, dolor excepturi earum autem in eaque ducimus odio maxime! Dolorum.</p>
                    
                    <a href="single.html" class="btn btn-primary pl-4 pr-4">Ver</a>
                </div>
                <!-- Fin entrada -->

                <!-- Entrada -->
                <div class="card-body">
                    <a href="single.html">
                        <h2>Titulo de la entrada</h2>
                    </a>
                    <p class="small mb-0">Fecha:xx/xx/xx</p>
                    <p class="small mb-0">Autor:nombreAutor</p>
                    <p class="small">Categoría: <a href="#">xxx</a>/<a href="#">xxx</a> Etiquetas: <a href="#">xxx</a> <a href="#">xxx</a> </p>

                    <img src="img/horizontal2.jpg" alt="" class="img-fluid mb-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et atque impedit, dolorum quos aut error accusantium corporis blanditiis fugit eius, dolor excepturi earum autem in eaque ducimus odio maxime! Dolorum.</p>
                    
                    <a href="single.html" class="btn btn-primary pl-4 pr-4">Ver</a>
                </div>
                <!-- Fin entrada -->

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