<div class="col-lg-3">
    <!-- <div class="card-body">
        <h4>Barra lateral</h4>
        <hr>
        <img src="img/vertical.jpg" alt="" class="img-fluid">
    </div> -->
    <?php if ( is_active_sidebar( 'k-widgets' ) ) : ?>
        <?php dynamic_sidebar( 'k-widgets' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
</div>