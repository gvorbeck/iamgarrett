<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header id="site-header">
    <div class="site-header--logo">
      <span class="site-header--dot"></span>
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    </div>
    <nav id="header-navigation" class="main-navigation" role="navigation">
      <?php
        // Primary navigation menu.
        wp_nav_menu( array(
          'menu_class'     => 'nav-menu',
          'theme_location' => 'primary',
        ) );
      ?>
      <div class="menu-social-links-container">
        <ul id="menu-social-links" class="nav-menu">
          <li class="linkedin menu-item menu-item-type-custom menu-item-object-custom menu-item-18">
            <a title="LinkedIn" target="_blank" href="http://lnkd.in/r7wjg5">
              <span>LinkedIn</span>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 100 100" xml:space="preserve"><path d="M87.877 5.608H11.174c-3.673 0-6.65 2.886-6.65 6.448v77.101c0 3.6 3 6.5 6.7 6.5 h76.703c3.673 0 6.646-2.89 6.646-6.451V12.056C94.523 8.5 91.5 5.6 87.9 5.608z M31.809 80.944H18.211V40.31h13.598V80.944z M25.011 34.759H24.92c-4.56 0-7.516-3.119-7.516-7.023c0-3.983 3.043-7.017 7.693-7.017c4.651 0 7.5 3 7.6 7 C32.699 31.6 29.7 34.8 25 34.759z M80.827 80.944H67.233v-21.74c0-5.464-1.97-9.191-6.886-9.191 c-3.761 0-5.993 2.515-6.973 4.942c-0.364 0.868-0.453 2.08-0.453 3.292v22.696H39.329c0 0 0.178-36.823 0-40.634h13.593v5.761 c1.805-2.768 5.029-6.717 12.249-6.717c8.947 0 15.7 5.8 15.7 18.291V80.944z M52.834 46.2 c0.024-0.038 0.056-0.084 0.088-0.128v0.128H52.834z"/></svg>
            </a>
          </li>
          <li class="email menu-item menu-item-type-custom menu-item-object-custom menu-item-21">
            <a title="Email" target="_blank" href="mailto:me+site@iamgarrett.com">
              <span>Email</span>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><polygon points="52.3,56.8 18.9,27.5 85.7,27.5"/><polygon points="39,50.4 15.6,71 15.6,29.9"/><polygon points="42,53.1 52.3,62.1 62.6,53.1 85.7,73.4 18.9,73.4"/><polygon points="65.6,50.4 89,29.9 89,71"/></svg>
            </a>
          </li>
          <li class="facebook menu-item menu-item-type-custom menu-item-object-custom menu-item-8">
            <a title="Facebook" target="_blank" href="http://facebook.com/gvorbeck">
              <span>Facebook</span>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 100 100" xml:space="preserve"><path d="M38.078 22.431c0 2.3 0 12.4 0 12.391H29v15.152h9.078V95h18.649V49.975h12.513 c0 0 1.172-7.265 1.74-15.209c-1.629 0-14.183 0-14.183 0s0-8.815 0-10.36c0-1.548 2.033-3.631 4.043-3.631c2.006 0 6.2 0 10.2 0 c0-2.063 0-9.191 0-15.774c-5.235 0-11.189 0-13.814 0C37.617 5 38.1 20.2 38.1 22.431z"/></svg>
            </a>
          </li>
          <li class="instagram menu-item menu-item-type-custom menu-item-object-custom menu-item-9">
            <a title="Instagram" target="_blank" href="http://instagram.com/gvorbeck">
              <span>Instagram</span>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><path d="M13.804 1.303h72.393c6.875 0 12.5 5.1 12.5 12.5v72.394 c0 7.411-5.625 12.5-12.5 12.5H13.804c-6.877 0-12.501-5.09-12.501-12.5V13.803C1.303 6.4 6.9 1.3 13.8 1.303L13.804 1.303z M72.251 12.124c-2.412 0-4.384 1.972-4.384 4.385v10.495c0 2.4 2 4.4 4.4 4.385h11.008c2.411 0 4.384-1.973 4.384-4.385 V16.509c0-2.413-1.973-4.385-4.384-4.385H72.251L72.251 12.124z M87.69 42.49h-8.573c0.811 2.6 1.2 5.5 1.2 8.4 c0 16.2-13.555 29.332-30.274 29.332c-16.718 0-30.272-13.132-30.272-29.332c0-2.904 0.438-5.708 1.25-8.356h-8.945v41.141 c0 2.1 1.7 3.9 3.9 3.872h67.822c2.129 0 3.872-1.742 3.872-3.872V42.49L87.69 42.49z M50.092 30.8 c-10.802 0-19.56 8.485-19.56 18.953c0 10.5 8.8 19 19.6 18.953c10.803 0 19.562-8.485 19.562-18.953 C69.654 39.3 60.9 30.8 50.1 30.836z"/></svg>
            </a>
          </li>
          <li class="lastfm menu-item menu-item-type-custom menu-item-object-custom menu-item-17">
            <a title="Last.fm" target="_blank" href="http://www.last.fm/user/im_calm">
              <span>Last.fm</span>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="100px" height="56px" viewBox="0 0 100 56" xml:space="preserve"><g><path d="M39.367 40.884c-2.096 1.882-6.121 5.649-12.822 5.649c-7.904 0-15.518-6.928-15.518-18.013 c0-14.203 9.102-18.784 16.09-18.784c10.08 0 12.3 6.1 15 14.512l3.668 11.548C49.484 47 56.4 56 76.2 56 C90.379 56 100 51.6 100 40.068c0-9.354-5.271-14.203-15.121-16.514l-7.33-1.615c-5.041-1.155-6.529-3.234-6.529-6.699 c0-3.926 3.092-6.234 8.133-6.234c5.498 0 8.5 2.1 8.9 7.043l11.453-1.385C98.625 4.3 91.5 0 79.8 0 C69.531 0 59.5 3.9 59.5 16.512c0 7.9 3.8 12.8 13.3 15.127l7.791 1.846c5.842 1.4 7.8 3.8 7.8 7.2 c0 4.271-4.123 6.003-11.912 6.003c-11.568 0-17.379-6.12-20.129-14.55l-3.781-11.545C47.684 5.5 42 0 26.8 0 C13.188 0 0 10.7 0 28.981C0 46.5 12.7 56 26 56c9.625 0 14.514-3.383 16.9-5.117L39.367 40.884z"/></g></svg>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
