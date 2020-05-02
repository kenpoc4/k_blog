<h5>Comentarios... <?php comments_number( '(Sin comentarios)', '(1 Comentario)', '(% Comentarios)' ); ?></h5>
<hr>

<!-- Formulario comentario nuevo -->
<?php comment_form();?>
<!-- Fin comentario -->

<!-- Impresión de los comentarios -->
<?php
    wp_list_comments(array(
        'callback'  =>  function($comment, $args, $depth){ ?>
            <div class="media">
                <!-- Avatar del usuario -->
                <div class="mr-3">
                    <?php
                        if ( $args['avatar_size'] != 0 ) {
                            echo get_avatar( $comment, $args['avatar_size'] ); 
                        } 
                    ?>
                </div>
                <!-- Fin avatar -->

                <div class="media-body mb-3">
                    <!-- Nombre del usuario -->
                    <h5 class="mt-0">
                        <?php
                            printf( __( '<cite>%s</cite> <span>Dice:</span>' ), get_comment_author_link() );
                        ?>
                    </h5>
                    <!-- Fin nombre -->

                    <!-- Funcion para aprovación de comentario -->
                    <?php 
                        if ( $comment->comment_approved == '0' ) { ?>
                            <em><?php _e( 'Comentario en espera de aprovación' ); ?></em><br/><?php 
                        } 
                    ?>
                    <!-- Fin aprovación -->

                    <!-- Contenido del comentario -->
                    <?php comment_text(); ?>
                    <!-- Fin contenido -->

                    <!-- Responder comentarios -->
                    <span>
                        <?php 
                            comment_reply_link( 
                                array_merge( 
                                    $args, 
                                    array( 
                                        'reply_text' => 'Responder', 
                                        'depth'     => $depth, 
                                        'max_depth' => $args['max_depth'] 
                                    ) 
                                ) 
                            ); 
                        ?>
                    </span>
                    <!-- Fin responder -->

                    <!-- Editar comentarios -->
                    <span>
                        <?php edit_comment_link( __( 'Editar' ), '  ', '' ); ?>
                    </span>
                    <!-- Fin editar -->
                </div>
            </div>

        <?php   }
    ));
?>
<!-- FIn impresión -->
