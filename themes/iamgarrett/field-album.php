<?php
if( have_rows( 'album' ) ) {
  echo '<ul class="album-list">';
  while ( have_rows( 'album' ) ) {
    the_row();
    echo '<li class="album-list--album">';
      echo '<img src="' . get_sub_field( 'cover' )['sizes']['thumbnail'] . '" class="album--cover" title="' . get_sub_field( 'album' ) . '">';
      echo '<h2 class="title"><span>' . get_sub_field( 'album' ) . '</span> by <span>' . get_sub_field( 'artist' ) . '</span></h2>';
      if( have_rows('genre_list') ) {
        echo '<div class="genre-list">';
          $i = 0;
          while ( have_rows('genre_list') ) {
            the_row();
            if ( $i > 0 ) {
              echo ', ';
            }
            echo get_sub_field( 'genre' );
            $i++;
          }
        echo '</div>';
        echo '<div class="album-description">';
          $description = get_sub_field( 'description' );
          echo apply_filters( 'the_content', $description );
        echo '</div>';
      }
    echo '</li>';
  }
  echo '</ul>';
}
