<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package razom
 */
get_header();
?>
<main id="main" class="site-main blog" role="main">
<div class="article-info">
    <div class="container flex">
        <div class="article-title">            
            <h1><?php esc_html_e( 'Блог', 'razom' ); ?></h1>
        </div>
        <?php the_post_thumbnail(); ?>
    </div>
</div>
    <div class="container flex articles">
    <?php
    while ( have_posts() ) :
        the_post();        

        get_template_part( 'content', 'archive' );       

    endwhile; 
    ?>
    </div>
</main>
<?php

get_footer();
