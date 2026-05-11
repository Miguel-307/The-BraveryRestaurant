<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<section class="standard-page" style="padding: 12rem 0 8rem 0; background-color: var(--white);">
    <div class="container">
        <div class="section-header reveal active">
            <span class="subtitle"><?php bloginfo('name'); ?></span>
            <h1><?php the_title(); ?></h1>
        </div>
        
        <div class="page-content reveal active" style="max-width: 800px; margin: 0 auto; line-height: 1.8;">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>
