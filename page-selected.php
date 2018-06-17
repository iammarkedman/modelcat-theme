<?php get_header(); ?>

<div class="container selected-models">

  <div class="row">
    <div class="col">
      <h1>Selected models</h1>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <?php while( have_posts() ): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </div>

  <?php
    if( empty($_GET['id']) || !preg_match("/^[0-9,]+$/", $_GET['id'])) {
      include("page-selected-empty.php");
      exit;
    }
    $ids = preg_split("/,/", $_GET['id'] );

    if( function_exists('modelcat_selected')) {
      modelcat_selected($ids);
    }
  ?>

</div> <!-- .container -->

<?php get_footer(); ?>
