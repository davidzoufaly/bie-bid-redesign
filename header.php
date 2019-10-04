<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="https://www.google-analytics.com" rel="preconnect">
    <link href="https://www.czech-us.cz" rel="preconnect">

    <link rel="apple-touch-icon" sizes="57x57"
        href="<?php echo get_template_directory_uri() ?>/img/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
        href="<?php echo get_template_directory_uri() ?>/img/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
        href="<?php echo get_template_directory_uri() ?>/img/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
        href="<?php echo get_template_directory_uri() ?>/img/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
        href="<?php echo get_template_directory_uri() ?>/img/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
        href="<?php echo get_template_directory_uri() ?>/img/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
        href="<?php echo get_template_directory_uri() ?>/img/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
        href="<?php echo get_template_directory_uri() ?>/img/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo get_template_directory_uri() ?>/img/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="<?php echo get_template_directory_uri() ?>/img/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo get_template_directory_uri() ?>/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="<?php echo get_template_directory_uri() ?>/img/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo get_template_directory_uri() ?>/img/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/img/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php wp_head(); ?>
    <script>
    let phpDateDiff = "<?php echo odpocetData(current_time('d.m.Y H:i:s'), get_field('cas_konani_udalosti', 'options'), '%a-%h-%i-%s'); ?>"
    </script>
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
                        <div class="logo__img">
                            <?php get_template_part('/img/logo-header'); ?>
                        </div>
                    </a>
                </div>

                <label for="check" class="_show-menu">
                    <span id="burger-icon" class="icon-burger_menu icon-burger_menu--white"></span>Menu
                </label>
                <label for="check" class="_hide-menu">
                    <span id="close-icon" class="icon-close_icon icon-close_icon--white"></span>Menu
                </label>
            </div>
            <!-- /logo -->

            <!-- nav -->
            <?php $libi_se_group = get_field('libi_se_ti_soutez', 'options') ?>

            <nav class="nav" role="navigation">
                <?php html5blank_nav(); ?>
                <?php if(get_field('zobrazit_registraci_v_headeru', 'options')): ?>
                    <a class="btn btn--red" href="<?php echo $libi_se_group['link_registrace'];?>">Registration</a>
                <?php endif; ?>
            </nav>

            <div class="--mobile-dark-content">

            </div>
            <!-- /nav -->
        </header>
        <!-- /header -->