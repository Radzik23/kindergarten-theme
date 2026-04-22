<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="header-container">
        
        <div class="logo-wrapper">
            <a href="<?php echo home_url(); ?>" class="logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo2.png" alt="Logo" class="logo-icon">
            </a>
        </div>

        <nav class="static-navigation">
            <ul class="nav-links">
                <li><a href="<?php echo home_url('/#o-nas'); ?>">O nas</a></li>
                <li><a href="<?php echo site_url('/kadra/') ?>">O mnie</a></li>
                <li><a href="<?php echo home_url('/#opinie'); ?>">Opinie</a></li>
                <li><a href="<?php echo home_url('/#rekrutacja'); ?>">Cennik</a></li>
                <li><a href="<?php echo home_url('/#kontakt'); ?>">Kontakt</a></li>
                <li><a href="<?php echo home_url('//galeria-przedszkola/'); ?>">Galeria</a></li>
            </ul>
        </nav>

        <div class="header-actions">
            <a href="<?php echo site_url('rekrutacja') ?>" class="btn-header">Zapisy trwają</a>
            
            <button class="mobile-menu-toggle" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

    </div>

    <div class="mobile-menu-overlay">
        <div class="mobile-menu-container">
            <ul class="mobile-nav-links">
                <li><a href="<?php echo home_url('/#o-nas'); ?>">O nas</a></li>
                <li><a href="<?php echo site_url('/kadra/') ?>">O mnie</a></li>
                <li><a href="<?php echo home_url('/#opinie'); ?>">Opinie</a></li>
                <li><a href="<?php echo home_url('/#rekrutacja'); ?>">Cennik</a></li>
                <li><a href="<?php echo home_url('/#kontakt'); ?>">Kontakt</a></li>
                <li><a href="<?php echo home_url('//galeria-przedszkola/'); ?>">Galeria</a></li>
            </ul>
        </div>
    </div>
</header>