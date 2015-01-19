<section class="sites">
  <?php
    if ( have_rows( 'sites' ) ) {
      while ( have_rows( 'sites' ) ) {
        the_row();
        echo '<div class="site">';
          echo '<a href="' . get_sub_field('link') . '" title="' . get_sub_field('title') . '" class="site--image-link" target="_blank">';
            $img = wp_get_attachment_image_src( get_sub_field('screenshot'), 'iamg-tiny' );
            echo '<img src=' . $img[0] . ' alt="' . get_sub_field('title') . '" />';
          echo '</a>';
          echo '<h2><a href="' . get_sub_field('link') . '" title="' . get_sub_field('title') . '" target="_blank">' . get_sub_field('title') . '</a></h2>';
          echo '<div class="site--description">' . apply_filters( 'the_content', get_sub_field('description') ) . '</div>';
        echo '</div>';
      }
    }
  ?>
</section>
