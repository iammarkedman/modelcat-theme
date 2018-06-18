<?php get_header(); ?>

<?php $_store_mainimg = null; ?>

<?php while( have_posts() ): the_post(); ?>

  <?php
    $names = preg_split("/[\ ]+/", $post->post_title);
    if( count($names) < 2 ) {
      $model_name = $names[0];
    } else {
      $model_name = $names[0] . " " . substr($names[count($names)-1], 0, 1);
    }
  ?>

  <div class="container model-page">
    <div class="row d-block d-md-none">
      <div class="col">
        <h1><?php echo $model_name; ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-1 polaroid">
        <?php
          $thumb_id = get_post_thumbnail_id( $post->ID );
          if( $thumb_id ) {
            $imgurl_full = wp_get_attachment_image_src( $thumb_id, "model-polaroid" );
            $_store_mainimg = $imgurl_full[0];
            ?>
            <img src="<?php echo $imgurl_full[0]; ?>" alt="<?php echo $model_name; ?>" class="img-fluid"/>
            <?php 
          }
        ?>
        <div class="single-corner"></div>
      </div> <!-- .col-8 -->

      <div class="col-md-3 model-info">
        <h2 class="d-none d-md-block"><?php echo $model_name; ?></h2>
        <div class="single-favorite" data-id="<?php echo $post->ID; ?>"></div>

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

        <?php
          // -------------------------------
          // more featured photos?
          //
          if( class_exists('Dynamic_Featured_Image') ) {
            global $dynamic_featured_image;
            $featured_images = $dynamic_featured_image->get_featured_images();
            $first_pic = true;

            foreach( $featured_images as $img ): ?>
              <?php 
                if( $first_pic ) {
                  $thumb_id = get_post_thumbnail_id( $post->ID );
                  if( $thumb_id ) {
                    $imgurl_thumb = wp_get_attachment_image_src( $thumb_id, "model-thumb" );
                    ?>
                      <div class="row no-gutters d-none d-md-block">
                        <div class="col-md-6 polaroid-thumb" data-imgurl="<?php echo $_store_mainimg; ?>">
                          <img src="<?php echo $imgurl_thumb[0]; ?>" alt="<?php echo $model_name; ?>" class="img-fluid"/>
                        </div>
                      </div>
                    <?php 
                  }
                  $first_pic = false;
                }
              ?>

              <div class="row no-gutters">
                <div class="col-md-6 polaroid-thumb d-none d-md-block" data-imgurl="<?php echo $img["full"]; ?>">
                  <img src="<?php echo $img["thumb"]; ?>" alt="<?php echo $model_name; ?>" class="img-fluid"/>
                </div>
                <div class="col d-block d-md-none">
                  <img src="<?php echo $img["full"]; ?>" alt="<?php echo $model_name; ?>" class="img-fluid"/>
                </div>
              </div>
            <?php endforeach;
          }
        ?>
      </div> <!-- .div-4 -->
    </div> <!-- .row -->

  </div>

<?php endwhile; ?>

<?php get_footer(); ?>
