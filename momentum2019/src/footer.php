			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<ul>
					<li><a href="https://www.crossfit.com/" target="_blank"><img src="<?php bloginfo('template_directory');  ?>/img/crossfit-logo.png" alt="CrossFit Logo" title="" /></a></li>
					<li><a href="http://journal.crossfit.com/" target="_blank"><img src="<?php bloginfo('template_directory');  ?>/img/crossfit-journal-logo.png" alt="CrossFit Journal Logo" title="" /></a></li>
				</ul>
				<p>&copy;Momentum Training <?php echo esc_html( date( 'Y' ) ); ?></p>
				<a href="" class="icon icon-arrow_up js-back-to-top"><span>Return to top</span></a>
				<nav class="site-footer-navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'menu-footer', 'menu_class' => 'menu-inline' ) ); ?>
				</nav>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
