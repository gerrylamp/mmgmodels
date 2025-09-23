<?php get_header(); ?>

<style>
    #header {
        position: static !important;
    }
    .about_us_con h2 {
        font-size: 30px;
        font-weight: bold;
        margin-bottom: 6rem;
    }
    .about_us_con figure img {
        height: 23vw;
        border-radius: 100%;
        margin-bottom: 2rem;
    }
    #main-content.wrapper {
        width: 65vw;
    }
    .banner {
        height: 60dvh;
    }
    .main_con {
        padding: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(0%, -50%);
    }
    .home_main {
        margin: 0;
        max-width: 100%;
        width: 60%;
    }

    @media screen and (max-width: 1400px) {
        .main_con {
            transform: translate(30%, -50%);
        }
        h1.model-name,
        .about_us_con h2 {
            margin-bottom: 4rem;
        }
    }
    @media screen and (max-width: 1200px) {
        .main_con {
            transform: translate(15%, -50%);
        }
        .home_main {
            width: 80%;
        }
    }
    @media screen and (max-width: 1000px) {
        /* .banner {
            height: 60dvh;
        } */
        .main_con {
            transform: translate(-50%, -50%);
            width: 80%;
        }
        .home_main {
            width: 100%;
        }
    }
    @media screen and (max-width: 600px) {
        .about_us_con h2 {
            margin-bottom: 2rem;
        }
        #main-content.wrapper {
            width: 100%;
            padding: 4rem 1rem;
        }
        .about_us_con figure img {
            height: 20rem;
        }
        h1 {
            margin-bottom: 2rem !important;
        }
        .about_us_con h2 {
            font-size: 24px;
        }
        .banner {
            height: 70dvh;
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

<section id="about-us">
    <div class="banner">
		<div class="main_con">

			<main class="home_main">
				<h1 class="headingStyle1 wow fadeInRight" data-wow-duration="1.5s"><small class="subHead1">Welcome to </small>MMG Models </h1>
				<p class="wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque vero eveniet, facilis libero eius maiores nesciunt ipsam iure harum aliquam perspiciatis ullam provident corrupti debitis non pariatur recusandae! Beatae, porro.</p>
				<a href="/about-us" class="btnStyle1 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1.2s">About Us</a>
			</main>

		</div>
	</div>
    <div id="main-content" class="wrapper py-6">
        <div class="about_us_con">
            <div class="about_us_info text-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                <?php if ( have_posts() ) :
                        while ( have_posts() ) : the_post(); ?>
                            <?php the_title( '<h1 class="model-name text-white mb-6 headingStyle1 bold">', '</h1>' ); ?>
                            <?php the_content(); ?>
                        <?php endwhile;
                    endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>