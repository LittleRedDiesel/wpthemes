			<!-- footer -->
			<footer class="footer bg-black" role="contentinfo">
				<div class="footer-inner">
					<ul class="affiliates">
						<li><a href="https://www.crossfit.com/" target="_blank"><img src="<?php bloginfo('template_directory');  ?>/img/crossfit-logo.png" alt="CrossFit Logo" title="" /></a></li>
						<li><a href="http://journal.crossfit.com/" target="_blank"><img src="<?php bloginfo('template_directory');  ?>/img/crossfit-journal-logo.png" alt="CrossFit Journal Logo" title="" /></a></li>
					</ul>
					<nav class="site-footer-navigation col-md-6">
						<?php wp_nav_menu( array( 'menu' => 'Extra Menu', 'menu_id' => 'menu-footer', 'menu_class' => 'menu-footer' ) ); ?>
					</nav>
					<div class="copyright col-md-6">
						<p><img class="footer-logo-img" src="<?php bloginfo('template_directory');  ?>/img/MMNTM_Logos_Footer2.png" alt="Momentum Training <?php echo esc_html( date( 'Y' ) ); ?>" /></p>
					</div>
				</div>
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
