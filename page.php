<?php get_header(); ?>

<div class="container">

<?php while( have_posts() ): the_post(); ?>

  <div class="row">
    <div class="col-8 offset-md-2">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="row">
    <div class="col-8 offset-md-2">
      <?php the_content(); ?>
    </div>
  </div>

<?php endwhile; ?>

</div> <!-- .container -->

<?php get_footer(); ?>
