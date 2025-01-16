<?php
/*
Template Name: Consulting Page
*/
get_header(); ?>

<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/image/hero.jpg');">
    <div class="hero-overlay">
        <div class="container">
            <div class="hero-content">
                <div class="column column-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/frame.png" alt="Frame Image" class="hero-frame">
                    <h1>للإستشارات الادارية</h1>
                    <p>
                        توفر توازن افضل الكفاءات وحلول الاعمال المتخصصه , ونقدم استشارات ادارية في تطوير اعمال راس المال البشري.
                    </p>
                    <div class="buttons">
                        <a href="#" class="btn-primary btn"><i class="fa-solid fa-bars"></i>خدمات</a>
                        <a href="#" class="btn-secondary btn">تواصل معنا</a>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-square-x-twitter"></i></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="column column-2">
                    <img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/image/image 32.png">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/Framee.png" alt="">   
                        <span class="text">طريق إلي الريادة والتميز.</span>

                    </div>
                
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Clients Section -->
<section class="clients">
    <div class="clients-title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/Framee.png" alt="">
        <h3 class="text">عملائنا</h3>
    </div>
    <div class="carousel">
        <div class="carousel__track">
            <?php
            // Query to fetch logos from the custom post type
            $args = array(
                'post_type' => 'logo', // Custom post type name
                'posts_per_page' => -1, // Fetch all logos
            );
            $logos_query = new WP_Query($args);

            if ($logos_query->have_posts()) :
                while ($logos_query->have_posts()) : $logos_query->the_post();
                    $logo_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get the featured image URL
                    if ($logo_url) :
                        ?>
                        <div class="carousel__slide">
                            <img src="<?php echo esc_url($logo_url); ?>" alt="<?php the_title(); ?>">
                        </div>
                        <?php
                    endif;
                endwhile;
                wp_reset_postdata(); // Reset the query
            else :
                echo '<p>No logos found.</p>';
            endif;
            ?>

            <!-- Duplicate the slides to create the infinite loop effect -->
            <?php
            // Run the query again to duplicate the logos
            $logos_query = new WP_Query($args);
            if ($logos_query->have_posts()) :
                while ($logos_query->have_posts()) : $logos_query->the_post();
                    $logo_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get the featured image URL
                    if ($logo_url) :
                        ?>
                        <div class="carousel__slide">
                            <img src="<?php echo esc_url($logo_url); ?>" alt="<?php the_title(); ?>">
                        </div>
                        <?php
                    endif;
                endwhile;
                wp_reset_postdata(); // Reset the query
            endif;
            ?>
        </div>
    </div>
    <div class="whatsapp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/whatsapp.png" alt="">
    </div>
</section>


<!-- About Section -->


<section class="about">
    <div class="about-text">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/about.png" alt="Frame Image" class="hero-frame">
                    <h2>من نحن</h2>
                    <p>
                    شركة سعودية تخلق التوازن بين توفير 
                    <span>أفضل الكفـاءات </span>
                    وحلـول الأعمال المتخصصة، نقدم الاستشارات الإدارية في تطوير أعمـال رأس المال البشر, وذلك من خلال تقديم الحلول الإبداعية والتطوير المستمر الذي يساهم في تحقيق الأهداف الاستراتيجية وبناء منظومة متوازنة تدعم تطلعات شركاءنا وذلك عبر سياسات انتقـاء 
                    الكوادر البشرية المتخصصة الإبداعية في مختلف التخصصات وفـق رؤية المملكة 2030 <br/>
                    ولتحقيق هذا الطموح أسسنا شركة توازن لتقديم حلول مناسبة ومتكاملة لإدارة الموارد البشرية وتحقيق الريادة في استقطاب الكفاءات المميزة من الكوادر البشرية المتخصصة والمُبدِعة في كافة التخصصات الإدارية والعلمية والعملية لتحقيق مستهدفات المنشأة والتي تتمثل في اربع نقاط اساسية : 
                   </p>
                   <div class="about-vector">
                   <img class="Right" src="<?php echo get_template_directory_uri(); ?>/assets/image/vector.png" alt="aboutframe" class="hero-frame">
                   </div>
                   <a href="#" class="btn-secondary btn">تواصل معنا</a>
                   

    </div>

    <div class="about-photo-container">
        <div class="about-photo">
          <img class="topRight" src="<?php echo get_template_directory_uri(); ?>/assets/image/aboutframe.png" alt="aboutframe" class="hero-frame">

          <img class="about-hero" src="<?php echo get_template_directory_uri(); ?>/assets/image/about-hero.png" alt="aboutimage" class="hero-frame">
       </div>
    
    
    </div>
    
</section>
<section class="features-carousel">
    <div class="carousel-container">
        <?php
        $args = array(
            'post_type' => 'features',
            'posts_per_page' => -1,
        );
        $features_query = new WP_Query($args);

        if ($features_query->have_posts()) :
            while ($features_query->have_posts()) : $features_query->the_post();
                $feature_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                $feature_title = get_the_title();
                ?>
                <div class="carousel-slide">
                    <img src="<?php echo esc_url($feature_image); ?>" alt="<?php echo esc_attr($feature_title); ?>">
                    <h3><?php echo esc_html($feature_title); ?></h3>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No features found.</p>';
        endif;
        ?>
    </div>
</section>
<?php get_footer(); ?>
