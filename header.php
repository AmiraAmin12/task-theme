<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <?php wp_head(); ?>
    <!-- Include Swiper CSS and JS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


</head>
<body <?php body_class(); ?>>
    <header>
        <div class="header-container">
            <!-- Logo Section -->
            <div>
                <a href="<?php echo home_url(); ?>" class="logo">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/assets/image/logo.png" alt="' . get_bloginfo('name') . ' Logo">';
                    }
                    ?>
                </a>
            </div>

            <!-- Navigation Menu -->
            <div class="menu-container">
                <nav>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'ul',
                        'menu_class' => 'main-nav',
                    ));
                    ?>
                </nav>
            </div>

            <!-- Button Section -->
            <div>
                <a href="#" class="header-btn btn" aria-label="تواصل معانا">
                     تواصل معانا
                </a>
            </div>
        </div>
    </header>

   