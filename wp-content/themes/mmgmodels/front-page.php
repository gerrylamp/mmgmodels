<?php get_header(); ?>

<section id="banner" class="section_con">
	<figure class="bnr_vid">
		<video width="320" height="240" autoplay muted loop>
			<source src="<?php echo get_template_directory_uri(); ?>/videos/bnr-vid.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video> 
	</figure>
	<div class="wrapper">
		<div class="bnr_con">

		</div>
	</div>
</section>

<section id="models" class="section_con">
	<div class="wrapper">
		<div class="models_con">

			<div class="models_info wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
				<h2 class="headingStyle1"><small class="subHead1">High Rated Girls </small> Top Models </h2>
			</div>

			<div class="model_categories">
				<button class="btnStyle1 active">All</button>
				<button class="btnStyle1">Fasion</button>
				<button class="btnStyle1">Session</button>
				<button class="btnStyle1">Studio</button>
				<button class="btnStyle1">Top Model</button>
			</div>

			<div class="models_carousel owl-carousel">
				<div class="grid grid-cols-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
					<?php
					$args = array(
						'post_type'      => 'model',
						'posts_per_page' => 5,
						'orderby'        => 'date',
						'order'          => 'DESC',
					);
					$models = new WP_Query( $args );

					if ( $models->have_posts() ) :
						while ( $models->have_posts() ) : $models->the_post();
							$parameters = get_field('parameters');

							echo "<a href='" . get_permalink() . "' class='model_card bg-black p-4 rounded-lg shadow-lg'>";
								if ( has_post_thumbnail() ) {
									echo "<div class='model-image'>";
										the_post_thumbnail( 'large', ['class' => 'w-full h-70dvh object-cover'] );
									echo "</div>";
								}

								echo "<div class='model_card_info'>";
									echo "<h2 class='model-name text-xl text-white mb-2 uppercase'>" . get_the_title() . "</h2>";

									if ($parameters) {
										$fields = [
											'height' => 'Height',
											'bust'   => 'Bust',
											'waist'  => 'Waist',
											'hips'   => 'Hips',
											'shoe'   => 'Shoe',
											'eyes'   => 'Eyes',
										];

										echo "<ul class='model-parameters mb-2'>";
											foreach ( $fields as $key => $label ) :
												if ( !empty( $parameters[$key] ) ) : ?>
													<li>
														<strong class="parameter-title text-white"><?php echo $label; ?></strong>
														<span class="parameter-value color-darkgrey"><?php echo esc_html( $parameters[$key] ); ?></span>
													</li>
												<?php endif;
											endforeach;
										echo "</ul>";
									}
								echo "</div>";
							echo "</a>";
						endwhile;
						wp_reset_postdata();
					else :
						echo '<p>No models found.</p>';
					endif;
					?>
				</div>
			</div>

			<!-- <div class="text-center mt-6">
				<a href="<?php echo site_url('/models'); ?>" class="btn bg-blue-600 text-white px-4 py-2 rounded-lg">
					View All Models
				</a>
			</div> -->
		</div>
	</div>
</section>

<section id="main_area" class="section_con">
	<div class="wrapper">
		<div class="main_con">

			<main class="home_main">
				<h1 class="headingStyle1 wow fadeInRight" data-wow-duration="1.5s"><small class="subHead1">Welcome to </small>MMG Models </h1>
				<p class="wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque vero eveniet, facilis libero eius maiores nesciunt ipsam iure harum aliquam perspiciatis ullam provident corrupti debitis non pariatur recusandae! Beatae, porro.</p>
				<a href="/about-us" class="btnStyle1 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1.2s">About Us</a>
			</main>

		</div>
	</div>
</section>

<section id="book_cta" class="section_con">
	<div class="wrapper">
		<div class="book_cta_con">

			<div class="book_cta_info wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
				<h2 class="headingStyle1"><small class="subHead1">International Modelling Agency</small>Book a Model for Your Event </h2>
				<div class="book_cta_btn">
					<a href="/models" class="btnStyle1">View Models</a>
					<a href="/contact" class="btnStyle1">Book Now</a>
				</div>
			</div>

		</div>
	</div>
</section>



<?php get_footer(); ?>