<?php
      echo '</section>';
      echo '<footer>';
      // Categories
      $cats = get_the_category();
      if ( ! empty( $cats ) ) {
        echo '<p class="categories meta">';
        if ( 1 == count( $cats ) ) {
          echo 'Category: ';
          the_category( ', ' );
          the_terms( $id, 'music_cat', '', ', ' );
        } else {
          echo 'Categories: ';
          the_category( ', ' );
          the_terms( $id, 'music_cat', '', ', ' );
        }
        echo '</p>';
      }
      // Tags
      $tags = get_the_tags();
      if ( ! empty( $tags ) ) {
        echo '<p class="tags meta">';
        if ( 1 == count( $tags ) ) {
          echo 'Tagged: ';
          the_tags( '' );
          the_terms( $id, 'music_tag', '', ', ' );
        } else {
          the_tags();
          the_terms( $id, 'music_tag', 'Tags: ', ', ' );
        }
        echo '</p>';
      }
      // Credits
      if ( is_single() || is_page() ) {
        if ( get_post( get_post_thumbnail_id() )->post_excerpt ) {
          echo 'Top image: ' . get_post( get_post_thumbnail_id() )->post_excerpt;
        }
      }
      echo '</footer>';
    ?>
  </header>
</article>