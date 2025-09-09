<?php get_header(); ?>

<section class="section_con nh_breadcrumbs">
    <?php if(!is_front_page()) { ?>
        <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>
    <?php }?>
</section>

<section class="section_con nh_main_content">
	<div class="wrapper">
		<div class="nh_main_con">

            <div class="nh_sidebar">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="nh_banner">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <main>

                <h1 class="nh_title"><?php the_title(); ?></h1>

                <?php the_content(); ?>

            </main>

        </div>
    </div>

</section>


<?php get_footer(); ?>