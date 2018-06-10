<?php get_header(); ?>

<?php while( have_posts() ): the_post(); ?>

  <div class="container">
    <div class="row">
      <h1><?php the_title(); ?></h1>
    </div>

    <div class="row">
      <div class="col-4">
        <dl>
          <?php
            $meta = get_post_meta( $post->ID );

            $t = $meta["wpcf-date-of-birth"];
            if( !empty( $t )) {
              $meta["wpcf-age"] = array( floor((time() - $t[0]) / (60*60*24*365)) );
            }

            foreach( array( "age" ) as $key ) {
              $v = $meta["wpcf-" . $key];
              if( !empty( $v )) {
                switch( $key ) {
                  case "age":
                    echo "<dt>Age:</dt>";
                    break;
                }
                echo "<dd>" . $v[0] . "</dd>";
              }
            }
          ?>
        </dl>
      </div> <!-- .div-4 -->
      <div class="col-8">
        <?php
          $thumb_id = get_post_thumbnail_id( $post->ID );
          if( $thumb_id ) {
            $imgurl_full = wp_get_attachment_image_src( $thumb_id, "full" );
            ?>
            <img src="<?php echo $imgurl_full[0]; ?>" alt="<?php the_title(); ?>" class="img-fluid"/>
            <?php 
          }
        ?>
      </div> <!-- .col-8 -->
    </div> <!-- .row -->

    <?php
      if( class_exists('Dynamic_Featured_Image') ) {
        global $dynamic_featured_image;
        $featured_images = $dynamic_featured_image->get_featured_images();
        foreach( $featured_images as $img ) {
          if( $i == 0 ) {
            echo '<div class="row">';
          }
          ?>
            <div class="col-4">
              <img src="<?php echo $img["full"]; ?>" alt="<?php the_title(); ?>" class="img-fluid"/>
            </div>
          <?php
          if( ++$i == 2 ) {
            echo '</div>';
            $i = 0;
          }
        }
        if( $i > 0 ) {
          echo '</div>';
        }
      }
    ?>
  </div>

<?php endwhile; ?>

<?php get_footer(); ?>
