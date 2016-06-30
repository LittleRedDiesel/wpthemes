      </div>
      <div id="wrap-footer" class="wrap-footer">
        <footer id="colophon" class="site-footer" role="contentinfo">
          <ul>
            <li><a href="https://www.crossfit.com/" target="_blank"><img src="<?php bloginfo('template_directory');  ?>/images/crossfit-logo.png" alt="CrossFit Logo" title="" /></a></li>
            <li><a href="http://journal.crossfit.com/" target="_blank"><img src="<?php bloginfo('template_directory');  ?>/images/crossfit-journal-logo.png" alt="CrossFit Journal Logo" title="" /></a></li>
          </ul>
        	<p>&copy;Momentum Training 2016</p>
          <a href="" class="icon icon-arrow_up js-back-to-top"><span>Return to top</span></a>
          <nav class="site-footer-navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'menu-footer', 'menu_class' => 'menu-inline' ) ); ?>
          </nav>
        </footer>
      </div>
    </div>
  <?php wp_footer(); ?>
  </body>
</html>