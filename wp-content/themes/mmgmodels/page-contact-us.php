<?php get_header(); ?>

<section class="section_con nh_breadcrumbs">
    <?php if(!is_front_page()) { ?>
        <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>
    <?php }?>
</section>

<section id="contact-us" class="wrapper py-4 px-1">
    <h1 class="text-center headingStyle1 mb-4 wow fadeInUp bold">Contact</h1>

    <div class="flex flex-col sm:grid grid-cols-3 gap-4">
        <div class="col-span-2">
            <div class="col-sm-8 text-left pt-5 wow fadeInLeft">
            
                 OFFICE<br><br>Contact Hours <strong></strong><br>Monday - Friday 10.00-18.00<span class="redactor-invisible-space"><br></span><br>Business Bay, Oxford Tower, Office 1202, Dubai<br><br>To book a model in Dubai please email: <a href="mailto:bookings@mmgmodels.com" class="contact-email">bookings@mmgmodels.com</a><br><strong><br></strong><strong>Warning: we never send any payment links to external pages via emails or SMS and we do not request anyone to meet us outside the office</strong><strong></strong><br><strong></strong>
                 
                 <br>

                <a href="https://maps.app.goo.gl/ARQkwxzcmSkgKxKy6" target="_blank">📍 Our location</a>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.769154584707!2d55.273123!3d25.1772714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6934c7cea295%3A0x714e23d8354c430c!2sMMG%20Models%20-%20Dubai%20Modeling%20Agency!5e0!3m2!1sen!2sph!4v1758016757706!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

        <div class="col-span-1">
            <img class="w-full wow fadeInRight" src="<?php echo get_theme_file_uri() ?>/assets/images/contact.jpg" alt="contact">
        </div>
    </div>
</section>

<?php get_footer(); ?>