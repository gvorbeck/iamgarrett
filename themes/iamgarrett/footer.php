    </main>
    <footer id="site-footer">
      <section class="site-footer--prefooter">
        <?php
          $about_me_query = new WP_Query( 'pagename=about-me' );
          if ( $about_me_query->have_posts() ) {
            echo '<div class="site-footer--prefooter_section prefooter--about-me">';
              while ( $about_me_query->have_posts() ) {
                $about_me_query->the_post();
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'full' );
                }
                echo '<h3>' . $post->post_title . '</h3>';
                echo '<div class="prefooter--content">';
                the_content();
                echo '</div>';
              }
            echo '</div>';
          }
          wp_reset_postdata();
        ?>
      </section>
      <nav id="footer-navigation" class="secondary-navigation" role="navigation">
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
              <a title="LinkedIn" target="_blank" href="http://lnkd.in/r7wjg5">LinkedIn</a>
            </li>
            <li class="email menu-item menu-item-type-custom menu-item-object-custom menu-item-21">
              <a title="Email" target="_blank" href="mailto:me+site@iamgarrett.com">Email</a>
            </li>
            <li class="facebook menu-item menu-item-type-custom menu-item-object-custom menu-item-8">
              <a title="Facebook" target="_blank" href="http://facebook.com/gvorbeck">Facebook</a>
            </li>
            <li class="instagram menu-item menu-item-type-custom menu-item-object-custom menu-item-9">
              <a title="Instagram" target="_blank" href="http://instagram.com/gvorbeck">Instagram</a>
            </li>
            <li class="lastfm menu-item menu-item-type-custom menu-item-object-custom menu-item-17">
              <a title="Last.fm" target="_blank" href="http://www.last.fm/user/im_calm">Last.fm</a>
            </li>
          </ul>
        </div>
      </nav>
      <p class="copyright legalese">&copy; <?php echo date('Y'); ?> Garrett Vorbeck.</p>
      <p class="site-credit legalese">Site designed, developed, and maintained by <a href="http://iamgarrett.com" title="iamgarrett">Garrett Vorbeck</a>.</p>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>