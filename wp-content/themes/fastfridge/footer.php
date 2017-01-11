
<?php
	if ( function_exists( 'ot_get_option' ) ) {
      $footer_text = ot_get_option( 'global_footer_text' );
	}
?>

<footer class="footer">
              
  <div class="social-menu social-menu_right-arrow">
    <ul class="menu">
      <li class="menu-item"><a href="https://www.facebook.com/">facebook</a></li>
      <li class="menu-item"><a href="https://www.plus.google.com/">google+</a></li>
      <li class="menu-item"><a href="https://www.twitter.com/">twitter</a></li>
      <li class="menu-item"><a href="https://www.youtube.com/">youtube</a></li>
    </ul>
  </div>
</footer>
<!-- /.footer -->

<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
            <?= $footer_text; ?>
      </div>
    </div>
  </div>
</div>
<!-- /.copyright -->

            
<?php wp_footer(); ?>

</body>
</html>
