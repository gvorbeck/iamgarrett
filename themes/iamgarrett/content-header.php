<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php
      // Post thumbnail
      if ( has_post_thumbnail() ) {
        if ( ! is_single() && ! is_page() ) {
          echo '<a class="wp-post-image-link" href="' . get_the_permalink() . '" title="' . the_title_attribute( array( 'echo' => false ) ) . '">';
        }
        echo iamgarrett_image_builder('pt', $post->ID);
        if ( ! is_single() && ! is_page() ) {
          echo '</a>';
        }
      }

      // Title
      echo '<h1>';
      if ( ! is_single() && ! is_page() ) {
        echo '<a href="' . get_the_permalink() . '" title="' . the_title_attribute( array( 'echo' => false ) ) . '">';
      }
      the_title();
      if ( ! is_single() && ! is_page() ) {
        echo '</a>';
      }
      echo '</h1>';
      // Date
      echo '<time datetime="' . get_the_date( 'm.d.Y' ) . '">' . get_the_date( 'm.d.Y' ) . '</time>';
      // Edit link
      edit_post_link('Edit');
    echo '</header>';
    // Content
    echo '<section class="post--content">';
