<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header();
?>

<section class="error-404 hero">
    <div class="carousel-item active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/error_404_restaurant_background.png');">
        <div class="hero-content reveal active">
            <span class="subtitle">Error 404</span>
            <h1 data-i18n="404-title">Mesa no encontrada</h1>
            <p data-i18n="404-text">Lo sentimos, pero la página que buscas no está en nuestro menú. Tal vez se la ha llevado el camarero.</p>
            <div class="hero-btns">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-book" data-i18n="404-btn-home">Volver al Inicio</a>
                <a href="<?php echo esc_url(home_url('/carta')); ?>" class="btn btn-outline" style="color: white; border-color: white;" data-i18n="404-btn-menu">Ver la Carta</a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
