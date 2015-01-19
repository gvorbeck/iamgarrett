<?php
get_template_part( 'content', 'header');

the_content();

// Single Posts
if ( is_single() ) {
  get_template_part( 'field', 'album' );
}

// Page
if ( is_page() ) {
  if ( is_page( 'resume' ) ) {
    get_template_part( 'field', 'resume' );
  }
  if ( is_page( 'sites' ) ) {
    get_template_part( 'field', 'site' );
  }
}

get_template_part( 'content', 'footer' );
