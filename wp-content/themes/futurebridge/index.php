<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Header section -->
    <header class="header">
        <div class="logo">
            <?php custom_theme_display_logo(); ?>
        </div>
        <nav class="horizontal-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'horizontal-menu',
                'container' => false,
                'menu_class' => 'menu',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 1,
                'walker' => new WP_Bootstrap_Navwalker(), // If you're using Bootstrap, you can replace this with the appropriate navwalker class
            ));
            ?>
        </nav>
    </header>

    <!-- Banner section with slider navigation -->
    <section class="banner">
        <!-- Add your banner content and slider navigation options here -->
    </section>

    <!-- Email subscription section -->
    <section class="email-subscription">
        <!-- Add your email subscription form here -->
    </section>

    <!-- Events section -->
    <section class="events">
        <!-- Add code to fetch and display events based on selected year and month -->
    </section>

    <?php wp_footer(); ?>
</body>
</html>
