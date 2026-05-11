<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Navbar -->
    <nav class="navbar <?php echo !is_front_page() ? 'scrolled' : ''; ?>" id="navbar" data-page-type="<?php echo is_front_page() ? 'home' : 'inner'; ?>">
        <div class="container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">EL PATIO <span>ANTIGUO</span></a>
            <div class="nav-links" id="nav-links">
                <a href="<?php echo esc_url(home_url('/#hero')); ?>" data-i18n="nav-home">Inicio</a>
                <a href="<?php echo esc_url(home_url('/#about')); ?>" data-i18n="nav-about">Nosotros</a>
                <a href="<?php echo esc_url(home_url('/carta')); ?>" data-i18n="nav-menu">Carta</a>
                <a href="<?php echo esc_url(home_url('/#specialties')); ?>" data-i18n="nav-specialties">Especialidades</a>
                <a href="<?php echo esc_url(home_url('/#location')); ?>" data-i18n="nav-location">Ubicación</a>
                <div class="lang-switcher">
                    <span id="current-lang">ES</span>
                    <div class="lang-options">
                        <a href="#" class="lang-link" data-lang="es">ES</a>
                        <a href="#" class="lang-link" data-lang="en">EN</a>
                        <a href="#" class="lang-link" data-lang="fr">FR</a>
                        <a href="#" class="lang-link" data-lang="de">DE</a>
                    </div>
                </div>
                <a href="<?php echo esc_url(home_url('/#location')); ?>" class="btn btn-book" data-i18n="nav-book">Reservar</a>
            </div>
            <button class="mobile-menu-btn" id="mobile-menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>
