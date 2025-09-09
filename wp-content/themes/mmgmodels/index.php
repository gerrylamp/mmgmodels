<?php get_header(); ?>

<section class="section_con nh_breadcrumbs">
    <?php if(!is_front_page()) { ?>
        <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>
    <?php }?>
</section>

<section id="nh_main_content" class="section_con">
	<div class="wrapper">
		<div class="nh_main_con">

            <main>

                <?php the_content(); ?>

            </main>

        </div>
    </div>

</section>


<?php get_footer(); ?>