<?php global $wp; ?>

<div class="footerMargin"></div>

<?php if( $wp->request != "selected" ): ?>

  <div id="modelcatSelectedFloater">
    <div class="container">
      <div class="row">
        <div class="col-8">
          Selected: <span class="numSelected">0 models</span>
          <a class="clear-selected" href="#"><i class="fa fa-times-circle"></i> Clear selected</a>
        </div>
        <div class="col-4">
          <a class="view-selected" href="<?php bloginfo('url'); ?>/selected">View selected models <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
  </div>

<?php endif; ?>

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url'); ?>/js/site.js?v=1.0.0"></script>

<script>
  var nav = responsiveNav(".nav-collapse");
</script>

</body>
</html>
