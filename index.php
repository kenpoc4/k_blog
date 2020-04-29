<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>

    <title>Hello, world!</title>
  </head>
  <body>

    <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Blog</a>
                        <a class="nav-item nav-link" href="#">Contacto</a>
                    </div>
                </div>
                
            </div>
        </nav>
    <!-- Fin header -->

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

    <!-- footer -->
    <footer class="container-fluid py-3 text-center text-light bg-dark">
        <h5>Lorem ipsum dolor sit.</h5>
    </footer>
    <!-- Fin footer -->

    <?php wp_footer();?>
  </body>
</html>