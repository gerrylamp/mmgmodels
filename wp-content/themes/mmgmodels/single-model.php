<?php 
    get_header(); 


    $socials = get_field('socials');
    $parameters = get_field('parameters');
    $contact_info = get_field('contact_info');
?>

<section class="single-model bg-main text-main py-6 px-1">
    <div class="container mx-auto flex gap-4">
        <?php
            echo "<div class='model-details flex-1'>";
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        echo "<div>";
                            the_title( '<h1 class="model-name text-white">', '</h1>' );
                            the_content();
                        echo "</div>";
                    endwhile;
                else :
                    echo '<p>No content found</p>';
                endif;
            echo "</div>";

            echo "<div class='model-image flex-1'>";
                if ( has_post_thumbnail() ) : ?>
                    <div class="model-profile bg-black">
                        <div class="model-featured-image">
                            <?php the_post_thumbnail( 'large', ['class' => 'rounded-lg shadow-lg'] ); ?>
                        </div>

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

                        <!-- model parameters -->
                        <?php if ($parameters) : ?>
                            <ul class="model-parameters no-bullets text-white">
                                <?php if ($parameters['height']) : ?>
                                    <li>
                                        <span class="parameter-title bold">Height</span>
                                        <span class="parameter-value color-darkgrey"><?php echo $parameters['height'] ?></span>
                                    </li>
                                <?php endif; ?>
                                <?php if ($parameters['bust']) : ?>
                                    <li>
                                        <span class="parameter-title bold">Bust</span>
                                        <span class="parameter-value color-darkgrey"><?php echo $parameters['bust'] ?></span>
                                    </li>
                                <?php endif; ?>
                                <?php if ($parameters['waist']) : ?>
                                    <li>
                                        <span class="parameter-title bold">Waist</span>
                                        <span class="parameter-value color-darkgrey"><?php echo $parameters['waist'] ?></span>
                                    </li>
                                <?php endif; ?> 
                                <?php if ($parameters['hips']) : ?>
                                    <li>
                                        <span class="parameter-title bold">Hips</span>
                                        <span class="parameter-value color-darkgrey"><?php echo $parameters['hips'] ?></span>
                                    </li>
                                <?php endif; ?>
                                <?php if ($parameters['shoe']) : ?>
                                    <li>
                                        <span class="parameter-title bold">Shoe</span>
                                        <span class="parameter-value color-darkgrey"><?php echo $parameters['shoe'] ?></span>
                                    </li>
                                <?php endif; ?>
                                <?php if ($parameters['eyes']) : ?>
                                    <li>
                                        <span class="parameter-title bold">Eyes</span>
                                        <span class="parameter-value color-darkgrey"><?php echo $parameters['eyes'] ?></span>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                        <!-- model parameters -->

                        <!-- model contact info -->
                        <?php if ($contact_info) : ?>
                            <div class="model-contact-info">
                                <?php if ($contact_info['address']) : ?>
                                    <div class="contact-info">
                                        <i class="fas fa-map-marker-alt color-main"></i>
                                        <span class="info-title text-white">ADDRESS:</span>
                                        <p><?php echo $contact_info['address'] ?></p>
                                    </div>
                                <?php endif; ?>

                                <hr>

                                <?php if ($contact_info['phone']) : ?>
                                    <div class="contact-info">
                                        <div>
                                            <i class="fas fa-phone color-main"></i>
                                            <span class="info-title text-white">PHONE:</span>
                                        </div>
                                        <a href="tel: <?php echo $contact_info['phone'] ?>"><?php echo $contact_info['phone'] ?></a>
                                    </div>
                                <?php endif; ?>

                                <hr>

                                <?php if ($contact_info['email']) : ?>
                                    <div class="contact-info">
                                        <div>
                                            <i class="fas fa-envelope color-main"></i>
                                            <span class="info-title text-white">EMAIL:</span>
                                        </div>
                                        <a href="mailto: <?php echo $contact_info['email'] ?>"><?php echo $contact_info['email'] ?></a>
                                    </div>
                                <?php endif; ?> 
                            </div>
                        <?php endif; ?>
                        <!-- model contact info -->
                    </div>
        <?php 
                endif;
            echo "</div>";
        ?>
    </div>
</section>

<?php get_footer(); ?>