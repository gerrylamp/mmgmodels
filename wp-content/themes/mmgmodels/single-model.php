<?php 
    get_header(); 


    $socials = get_field('socials');
    $parameters = get_field('parameters');
    $contact_info = get_field('contact_info');
?>

<style>
    .single-model .wp-block-gallery-1 {
        margin-top: 0;
        margin-bottom: 4rem
    }
    .single-model .wp-block-gallery-2 {
        margin: auto;
    }
    .single-model .owl-item figure.wp-block-image.size-large {
        height: 80dvh;
        /* opacity: 0.5; */
    }

    @media screen and (max-width: 480px) {
        .single-model .models-social-icons,
        .single-model .model-parameters {
            padding: 0;
        }
    }
</style>

<section class="section_con nh_breadcrumbs">
    <?php if(!is_front_page()) { ?>
        <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>
    <?php }?>
</section>

<section class="single-model bg-main text-main py-8 px-1 pt-1">
    <div class="mb-4">
        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    $blocks = parse_blocks( get_the_content() );
                    
                    foreach ( $blocks as $block ) {
                        if ( $block['blockName'] === 'core/gallery' ) {
                            echo render_block( $block );
                        }
                    }
                endwhile;
            endif;
        ?>
    </div>
    <div class="container mx-auto">
        <div class="flex flex-col sm:grid grid-cols-3 gap-4">
            <?php
                echo "<div class='model-details flex-1 col-span-2 wow fadeInLeft'>";
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post(); ?>
                            <?php the_title( '<h1 class="model-name text-white mb-2">', '</h1>' ); ?>

                                <!-- model socials -->
                            <?php if ($socials) : ?>
                                <div class="models-social-icons">
                                    <span class="social-icons">
                                        <?php if ($socials['facebook']) : ?>
                                            <a href="<?php echo $socials['facebook'] ?>" class="fab fa-facebook-f color-bg-icon"></a>
                                        <?php endif; ?>
                                        <?php if ($socials['x']) : ?>
                                            <a href="<?php echo $socials['x'] ?>" class="fab fa-twitter color-bg-icon"></a>
                                        <?php endif; ?>
                                        <?php if ($socials['youtube']) : ?>
                                            <a href="<?php echo $socials['youtube'] ?>" class="fab fa-youtube color-bg-icon"></a>
                                        <?php endif; ?>
                                        <?php if ($socials['tiktok']) : ?>
                                            <a href="<?php echo $socials['tiktok'] ?>" class="fab fa-tiktok color-bg-icon"></a>
                                        <?php endif; ?>
                                        <?php if ($socials['linkedin']) : ?>
                                            <a href="<?php echo $socials['linkedin'] ?>" class="fab fa-linkedin color-bg-icon"></a>
                                        <?php endif; ?>
                                        <?php if ($socials['pinterest']) : ?>
                                            <a href="<?php echo $socials['pinterest'] ?>" class="fab fa-pinterest color-bg-icon"></a>
                                        <?php endif; ?>
                                        <?php if ($socials['instagram']) : ?>
                                            <a href="<?php echo $socials['instagram'] ?>" class="fab fa-instagram color-bg-icon"></a>
                                        <?php endif; ?>
                                    </span>
                                </div>
                            <?php endif; ?>
                            <!-- model socials -->

                            <hr class="my-2">

                            <!-- model parameters -->
                            <?php if ($parameters) : ?>
                                <ul class="model-parameters no-bullets justify-between mb-4">
                                    <?php if ($parameters['height']) : ?>
                                        <li>
                                            <span class="parameter-title bold">Height</span>
                                            <span class="parameter-value text-white color-darkgrey"><?php echo $parameters['height'] ?></span>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($parameters['bust']) : ?>
                                        <li>
                                            <span class="parameter-title bold">Bust</span>
                                            <span class="parameter-value text-white color-darkgrey"><?php echo $parameters['bust'] ?></span>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($parameters['waist']) : ?>
                                        <li>
                                            <span class="parameter-title bold">Waist</span>
                                            <span class="parameter-value text-white color-darkgrey"><?php echo $parameters['waist'] ?></span>
                                        </li>
                                    <?php endif; ?> 
                                    <?php if ($parameters['hips']) : ?>
                                        <li>
                                            <span class="parameter-title bold">Hips</span>
                                            <span class="parameter-value text-white color-darkgrey"><?php echo $parameters['hips'] ?></span>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($parameters['shoe']) : ?>
                                        <li>
                                            <span class="parameter-title bold">Shoe</span>
                                            <span class="parameter-value text-white color-darkgrey"><?php echo $parameters['shoe'] ?></span>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($parameters['eyes']) : ?>
                                        <li>
                                            <span class="parameter-title bold">Eyes</span>
                                            <span class="parameter-value text-white color-darkgrey"><?php echo $parameters['eyes'] ?></span>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                            <!-- model parameters -->

                        <?php
                            // Get all blocks inside post_content
                            $blocks = parse_blocks( get_the_content() );
                            
                            foreach ( $blocks as $block ) {
                                // Skip galleries here
                                if ( $block['blockName'] === 'core/gallery' ) {
                                    continue;
                                }
                                echo apply_filters( 'the_content', render_block( $block ) );
                            }

                        endwhile;
                    else :
                        echo '<p>No content found</p>';
                    endif;

                echo "</div>";

                echo "<div class='model-image flex-1 col-span-1 p-2 bg-black h-fit wow fadeInRight'>";
                    echo "<h2 class='text-white text-24 bold'>Contact Me</h2>";
                    echo do_shortcode('[wpforms id="96"]');
                echo "</div>";
            ?>
        </div>
    </div>
</section>


<!-- More talents section -->
<section class="more-talents mt-12 container mx-auto mb-6 px-1">
    <h2 class="text-24 bold mb-2">More Talents</h2>
    
    <div class="grid sm:grid-cols-4 gap-2">
        <?php
        $args = [
            'post_type'      => 'model',
            'posts_per_page' => 4, // number of models to show
            'post__not_in'   => [ get_the_ID() ], // exclude current model
        ];
        $more_models = new WP_Query($args);

        if ( $more_models->have_posts() ) :
            while ( $more_models->have_posts() ) : $more_models->the_post(); ?>
                <div class="model-card p-4 rounded-lg shadow-lg">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="model-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', ['class' => 'w-full h-64 object-cover']); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <h3 class="bold text-white my-1 uppercase">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo "<p class='text-gray-400'>No more talents available.</p>";
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>