<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
        <title><?php echo wp_get_document_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class() ?>>
        <header class="siteHeader">
            <div class="siteHeadingAndTagline">
                <h1 class="siteHeading"><a href="<?php echo home_url(); ?>/"><?php bloginfo( 'name' ); ?></a></h1>
                <p class="siteTagline"><?php bloginfo( 'description' ); ?></p>
            </div>
            <?php wp_nav_menu( array(
                "container" => "nav",
                "menu_class" => "menu"
            ) ) ?>
        </header>