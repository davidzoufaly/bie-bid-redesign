<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<script>
            let dateAndTimeEventStart = "<?php echo get_field('cas_konani_udalosti', 'options')?>";
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- wrapper -->
    <div class="wrapper">

        <!-- header -->
        <header class="header clear" role="banner">
            <input class="checkbox" type="checkbox" id="check">
            <div class="_header-wrapper">
                <!-- logo -->
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/czech-us_transparent_1.png" alt="Logo Best In English"
                            class="logo-img" loading="lazy">
                    </a>
                </div>

                <label for="check" class="_show-menu">
                    <span id="burger-icon" class="icon-burger_menu--white"></span>Menu
                </label>
                <label for="check" class="_hide-menu">
                    <span id="close-icon" class="icon-close_icon--white"></span>Menu
                </label>
            </div>
            <!-- /logo -->

            <!-- nav -->

            <nav class="nav" role="navigation">
                <?php html5blank_nav(); ?>
                <a class="btn btn--red" href="/registration">Registration</a>
            </nav>

            <div class="--mobile-dark-content">

            </div>
            <!-- /nav -->
        </header>
        <!-- /header -->