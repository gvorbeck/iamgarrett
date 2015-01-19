<?php
/* START GETTING THEME FUNCTIONALITY SET UP */
// Add theme support for Post Formats.
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
// Add theme support for Post Thumbnails.
add_theme_support( 'post-thumbnails' );
// Add theme support for Automatic Feeds Links
add_theme_support( 'automatic-feed-links' );
// Add theme support 
add_theme_support( 'title-tag' );
add_theme_support( 'html5', array(
  'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
) );
// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
  'primary' => __( 'Primary Menu',      'iamgarrett' ),
  'social'  => __( 'Social Links Menu', 'iamgarrett' ),
) );

// Define SITE_URL global variable for dev purposes.
define('SITE_URL', $_SERVER['HTTP_HOST']);

add_image_size( 'iamg-tiny', 300 );
add_image_size( 'iamg-small', 475 );
add_image_size( 'iamg-medium', 750 );
add_image_size( 'iamg-large', 1000 );

// Register Custom Menus
if ( function_exists( 'register_nav_menus' ) ) {
  register_nav_menus( );
}

// Fonts and Styles
function iamgarrett_scripts() {
  // Load our main stylesheet.
  wp_enqueue_style( 'iamgarrett-style', get_stylesheet_uri() );
  
  //wp_register_script( 'script-picturefill', get_template_directory_uri() . '/javascripts/site.min.js', array(), '1.0.0', true );
  //wp_enqueue_script( 'script-picturefill', get_template_directory_uri() . '/javascripts/site.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'iamgarrett_scripts' );

function iamgarrett_paginate() {
  global $wp_query, $wp_rewrite;
  $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
  
  $pagination = array(
    'base' => @add_query_arg('page','%#%'),
    'format' => '',
    'total' => $wp_query->max_num_pages,
    'current' => $current,
    'show_all' => true,
    'type' => 'list',
    'next_text' => '&#9654;',
    'prev_text' => '&#9664;'
    );
  
  if( $wp_rewrite->using_permalinks() )
    $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
  
  if( !empty($wp_query->query_vars['s']) )
    $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
  
  echo paginate_links( $pagination );
}

// $context = pt (post thumbnail)
// $context = acf (acf content)
// $alt = {string} (only used when $context = "content"
function iamgarrett_image_builder($context = "pt", $pid = '1', $id = '1', $alt = '' ) {
  if ( 'pt' == $context ) {
    $id = get_post_thumbnail_id($pid);
    $alt = get_the_title();
  }
  $tiny   = wp_get_attachment_image_src( $id, 'iamg-tiny' );
  $small  = wp_get_attachment_image_src( $id, 'iamg-small' );
  $medium = wp_get_attachment_image_src( $id, 'iamg-medium' );
  $large  = wp_get_attachment_image_src( $id, 'iamg-large' );
  return '<img class="wp-post-image" src="' . $tiny[0] . '"
srcset="' . $large[0] . ' 1000w, ' . $medium[0] . ' 750w, ' . $small[0] . ' 450w, ' . $tiny[0] . ' 300w"
alt="' . $alt . '" />';
}

function iamgarrett_svg_skills() {
  return '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><path d="M87.001 77.233L61.35 51.582c-0.24-0.241-0.497-0.455-0.761-0.655l4.543-4.784c0.232-0.234 0.452-0.48 0.654-0.733 c6.031 2.3 13.1 1 17.956-3.851c3.536-3.537 5.319-8.428 4.888-13.42c-0.047-0.565-0.421-1.053-0.953-1.246 c-0.534-0.195-1.131-0.062-1.533 0.338l-8.22 8.22L69.6 33.353l-2.36-8.586l8.219-8.219c0.403-0.402 0.535-1 0.341-1.533 c-0.194-0.534-0.682-0.905-1.248-0.955c-4.992-0.43-9.883 1.352-13.42 4.889c-4.844 4.844-6.126 11.917-3.854 17.9 c-0.247 0.209-0.493 0.431-0.734 0.669l-6.687 6.422L37.578 31.708c-0.153-0.154-0.317-0.289-0.485-0.416 c0.144-0.253 0.284-0.513 0.415-0.783c2.593 0.5 7.334-4.551 11.36-8.576l-11.73-11.731c-5.245 5.246-9.075 8.767-8.578 11.4 c-1.199 0.586-2.268 1.302-3.028 2.063l-1.652 1.652c-1.073 1.074-1.72 2.41-1.951 3.802c-0.16 0.183-0.323 0.376-0.485 0.6 l-0.616 0.774c-0.017 0.019-0.07 0.095-0.085 0.115l-0.558 0.781c-0.349 0.466-0.654 0.972-0.949 1.5 c-0.109 0.181-0.22 0.363-0.333 0.544c-0.018 0.031-0.036 0.062-0.052 0.093l-0.248 0.467c-0.3 0.562-0.611 1.144-0.877 1.8 l-0.043 0.102c-0.314 0.746-0.639 1.518-0.866 2.336l-0.11 0.354c-0.09 0.291-0.181 0.582-0.265 0.929l-0.228 1.1 c-0.17 0.706-0.227 1.402-0.277 2.019l-0.033 0.405c-0.084 0.64-0.06 1.243-0.037 1.775c0.008 0.2 0 0.4 0 0.6 c0.006 0.1 0 0.2 0 0.288c0.006 0.2 0 0.5 0.1 0.792l0.143 0.916c0.031 0.2 0.1 0.3 0.1 0.5 c0.055 0.4 0.1 0.8 0.2 1.122l0.6 2.082c0.185 0.6 0.8 1.1 1.4 1.006c0.348-0.024 0.661-0.175 0.894-0.408 c0.208-0.208 0.352-0.482 0.396-0.79l0.311-2.117c0.023-0.168 0.095-0.414 0.17-0.674c0.053-0.181 0.105-0.365 0.145-0.522 l0.221-0.79c0.027-0.107 0.079-0.211 0.125-0.318c0.044-0.099 0.088-0.201 0.127-0.302c0.074-0.168 0.144-0.336 0.213-0.508 c0.136-0.338 0.265-0.656 0.462-0.968c0.085-0.144 0.165-0.287 0.246-0.433c0.205-0.367 0.4-0.714 0.631-1.001 c0.015-0.017 0.028-0.036 0.043-0.056l0.522-0.72c0.107-0.135 0.227-0.263 0.344-0.392c0.083-0.091 0.166-0.182 0.271-0.302 c0.308-0.371 0.67-0.694 1.019-1.012l0.187-0.168c0.259-0.24 0.558-0.466 0.873-0.705c0.129-0.096 0.255-0.192 0.379-0.286 c0.159-0.103 0.313-0.206 0.465-0.308c0.284-0.192 0.53-0.358 0.814-0.506l0.619-0.352l0.626-0.307 c0.218-0.113 0.433-0.2 0.631-0.28c0.118-0.049 0.234-0.096 0.342-0.143c0.11-0.038 0.216-0.079 0.316-0.116 c0.134-0.049 0.25-0.096 0.407-0.137l0.169-0.038c0.184 0.3 0.4 0.6 0.7 0.84l12.146 12.146L17.289 75.3 c-0.01 0.011-0.02 0.021-0.029 0.03c-3.227 3.227-3.752 7.952-0.525 11.179c3.227 3.2 7.7 2.4 10.878-0.826 c0.014-0.013 0.026-0.026 0.039-0.041l22.874-24.086c0.134 0.2 0.3 0.3 0.4 0.467l25.649 25.6 c2.874 2.9 7.5 2.9 10.4 0C89.874 84.8 89.9 80.1 87 77.233z M24.265 82.991c-1.188 1.19-3.115 1.19-4.304 0 c-1.188-1.188-1.188-3.114 0-4.303c1.188-1.187 3.115-1.188 4.3 0C25.452 79.9 25.5 81.8 24.3 82.991z"/></svg>';
}

function iamgarrett_svg_work() {
  return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 6h-4V4l-2-2h-4L8 4v2H4C2.9 6 2 6.9 2 8l0 11c0 1.1 0.9 2 2 2h16c1.1 0 2-0.9 2-2V8C22 6.9 21.1 6 20 6z M14 6h-4V4h4V6z"/></svg>';
}

function iamgarrett_svg_education() {
  return '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve"><g><path d="M7.248 17.461v4.5c0 0 3.8 4.2 9.2 4.219c6.753 0 9.184-4.219 9.184-4.219v-4.882l-7.929 4.6 c-0.566 0.331-1.264 0.354-1.851 0.059L7.248 17.461z"/><path d="M16.631 12.104c-0.991 0-1.978-0.207-2.511-0.637l-9.533 3.302L15.9 20.432c0.585 0.3 1.3 0.3 1.844-0.06 l13.183-7.684c0.615-0.358 0.984-1.025 0.962-1.737c-0.021-0.712-0.434-1.354-1.07-1.672L17.167 2.4 c-0.585-0.293-1.279-0.271-1.844 0.059L2.14 10.189c-0.615 0.358-0.984 1.025-0.962 1.737c0.023 0.7 0.4 1.4 1.1 1.7 L2.22 20.574c-0.682 0.24-1.17 0.892-1.17 1.654c0 0.6 0.3 1.1 0.7 1.39c-0.132 0.963-0.581 1.657-1.113 2.2 c-0.426 0.396-0.651 0.963-0.614 1.545c0.037 0.6 0.3 1.1 0.8 1.453l0.242 0.174c0.449 0.3 1 0.4 1.6 0.3 s1-0.465 1.269-0.945c0.928-1.658 0.478-3.811 0.171-4.844c0.317-0.316 0.514-0.755 0.514-1.238c0-0.758-0.482-1.406-1.157-1.65 l0.028-6.661l10.349-3.584c0.09-0.439 0.533-0.843 0.533-0.843c-0.034 0.1 0 1.6 2.2 1.6 c1.258 0 2.275-0.401 2.275-1.221c0-0.15-0.035-0.313-0.099-0.481c0.354 0.4 0.6 0.9 0.6 1.3 C19.277 11.6 18.1 12.1 16.6 12.104z"/></g></svg>';
}

function iamgarrett_svg_award() {
  return '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 18.8 23.4" xml:space="preserve"><path d="M12.3 15.2c0.4-0.7 1.1-1.1 1.9-1.1s1.3-0.4 1.3-1.3c0-0.9 0.4-1.5 1.1-1.9 0.7-0.4 0.9-1 0.5-1.8 -0.4-0.7-0.4-1.5 0-2.2 0.4-0.7 0.3-1.3-0.5-1.8 -0.7-0.4-1.1-1.1-1.1-1.9 0-0.9-0.4-1.3-1.3-1.3 -0.9 0-1.5-0.4-1.9-1.1 -0.4-0.7-1-0.9-1.8-0.5 -0.7 0.4-1.5 0.4-2.2 0C7.6-0.2 7 0 6.5 0.7 6.1 1.4 5.5 1.8 4.6 1.8c-0.9 0-1.3 0.4-1.3 1.3C3.3 4 2.9 4.6 2.2 5.1c-0.7 0.4-0.9 1-0.5 1.8 0.4 0.7 0.4 1.5 0 2.2 -0.4 0.7-0.3 1.3 0.5 1.8 0.7 0.4 1.1 1.1 1.1 1.9 0 0.9 0.4 1.3 1.3 1.3 0.9 0 1.5 0.4 1.9 1.1 0.4 0.7 1 0.9 1.8 0.5 0.7-0.4 1.5-0.4 2.2 0C11.3 16.1 11.9 15.9 12.3 15.2zM9.4 12.6c-2.6 0-4.7-2.1-4.7-4.7 0-2.6 2.1-4.7 4.7-4.7 2.6 0 4.7 2.1 4.7 4.7C14.1 10.5 12 12.6 9.4 12.6zM4.5 14.7c-0.9 0-1-0.4-1-0.4L0 21.2l2.8-0.3 1.6 2.3c0 0 3.2-6.8 3.2-6.7C5.9 16.5 6.6 14.8 4.5 14.7zM15.3 14.6c-2.6 0.3-2 0.9-2.6 1.4 -0.7 0.7-1.5 0.6-1.5 0.6l4 6.8 1-2.5 2.8 0.4L15.3 14.6z"/><polygon points="10.4 6.9 9.4 4.9 8.4 6.9 6.3 7.2 7.8 8.8 7.5 11 9.4 9.9 11.4 11 11 8.8 12.6 7.2 "/></svg>';
}
