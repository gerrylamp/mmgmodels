<?php get_header(); ?>

<style>
    .single-model .models_carousel {
        margin-top: 0;
    }
    .archive-models .banner .model_card_info,
    .single-model .banner .model_card_info {
        transform: scaleX(1);
        height: fit-content;
        top: 50%;
        left: 20%;
        transform: translate(-20%, -50%);
        background: none;
        width: 50%;
        text-align: left;
    }
    .archive-models .model-parameters li,
    .single-model .model-parameters li {
        margin-top: 0;
        border-right: 1px solid rgba(255, 255, 255, .1);
        padding-right: 23px;
    }
    .archive-models .btnStyle1,
    .single-model .btnStyle1 {
        font-size: 14px;
    }
    .archive-models .models_carousel .owl-nav,
    .single-model .models_carousel .owl-nav {
        position: absolute;
        top: 10%;
        width: 100%;
        margin: 0;
    }
    .archive-models .owl-carousel .owl-stage-outer,
    .single-model .owl-carousel .owl-stage-outer {
        z-index: 1;
    }
    .archive-models .owl-carousel .owl-dots,
    .single-model .owl-carousel .owl-dots {
        display: none;
    }
    .archive-models .banner .model-name,
    .single-model .banner .model-name {
        font-size: 75px;
        line-height: 1;
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

<section class="archive-models bg-main text-main px-1">
    <div class="models-grid grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 models_carousel owl-carousel banner px-4 pt-1">
        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    $parameters = get_field('parameters');

                    echo "<div class='model-card bg-black p-4 rounded-lg shadow-lg'>";
                        if ( has_post_thumbnail() ) {
                            echo "<div class='model-image'>";
                                the_post_thumbnail( 'medium', ['class' => 'w-full h-70dvh object-cover opacity-50'] );
                            echo "</div>";
                        }

                        echo "<div class='model_card_info'>";
                            echo "<h2 class='model-name text-white mb-2 uppercase'>" . get_the_title() . "</h2>";

                            if ($parameters) {
                                $fields = [
                                    'height' => 'Height',
                                    'bust'   => 'Bust',
                                    'waist'  => 'Waist',
                                    'hips'   => 'Hips',
                                    'shoe'   => 'Shoe',
                                    'eyes'   => 'Eyes',
                                ];

                                echo "<ul class='model-parameters mb-2 justify-items-start justify-normal'>";
                                    foreach ( $fields as $key => $label ) :
                                        if ( !empty( $parameters[$key] ) ) : ?>
                                            <li>
                                                <strong class="parameter-title"><?php echo $label; ?></strong>
                                                <span class="parameter-value color-darkgrey"><?php echo esc_html( $parameters[$key] ); ?></span>
                                            </li>
                                        <?php endif;
                                    endforeach;
                                echo "</ul>";
                            }
                            
                            echo "<a href='" . get_permalink() . "' class='view-profile btnStyle1'>READ MORE</a>";
                        echo "</div>";
                    echo "</div>";
                endwhile;
            else :
                echo '<p>No models found</p>';
            endif;
        ?>
    </div>

    <div class="models-grid grid grid-cols-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 py-6 px-4">
        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    $parameters = get_field('parameters');

                    echo "<a href='" . get_permalink() . "' class='model_card bg-black p-4 rounded-lg shadow-lg'>";
                        if ( has_post_thumbnail() ) {
                            echo "<div class='model-image'>";
                                the_post_thumbnail( 'medium', ['class' => 'w-full h-70dvh object-cover'] );
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
            else :
                echo '<p>No models found</p>';
            endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>