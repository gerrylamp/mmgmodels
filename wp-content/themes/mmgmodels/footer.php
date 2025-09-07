		<footer class="text-white py-12 main-font">
			<div class="container mx-auto px-24">
				<div class="flex justify-between gap-20">
					<div class="site-footer-logo flex-1">
						<div class="bg-white mb-8">
							<?php 
								if ( function_exists( 'the_custom_logo' ) ) {
									the_custom_logo();
								}
							?>
						</div>
						<p class="text-sm" style="color: #999999">MMG Models was founded in Dubai in 2008. Since then, it has become the fastest growing, most respected modeling agency not only in the UAE, but also across the entire Gulf region. MMG Models is operated and managed by a team of professionals that have lived and breathed the industry and therefore are able to use their experience to offer a personal touch and a high level of quality to service the most discerning clients.</p>
					</div>
					<div class="flex-1">
						<h2 class="mb-4">Navigation</h2>
						<nav class="leading-6 color-main">
							<?php
								wp_nav_menu(array(
									'theme_location' => 'footerMenuLocationOne'
								))
							?>
						</nav>
					</div>
					<div class="flex-1">
						<h2 class="mb-4">Userful Links</h2>
						<nav class="leading-6 color-main">
							<?php
								wp_nav_menu(array(
									'theme_location' => 'footerMenuLocationTwo'
								))
							?>
						</nav>
					</div>
					<div class="flex-1">
						<img src=" <?php echo get_theme_file_uri() ?>/assets/img/contact.jpg" alt="contact">
					</div>
				</div>
			</div>
		</footer>

		<!-- .page_footer -->
		<section class="text-center py-6 uppercase">
			<p>Copyright &copy;MMG Models. All rights reserved. <a href="mailto: info@mmgmodels.com" class="underline">info@mmgmodels.com</a></p>
		</section>
			
		<?php wp_footer(); ?>
	</body>
</html>
