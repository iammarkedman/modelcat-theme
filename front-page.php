<?php get_header(); ?>

  <div class="container">

    <div class="row">
      <div class="col">
        <?php while( have_posts() ): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <h2>Commercial models</h2>
      </div>
    </div>

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
