<?php get_header(); ?>

  <div class="container">

    <?php include("elements/search-bar.php"); ?>

    <div id="results">
      <?php
        if( function_exists('modelcat_runsearch')) {
          modelcat_runsearch();
        }
      ?>
    </div>

  </div>

<?php get_footer(); ?>
