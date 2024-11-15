<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package razom
 */
get_header();
?>
<main id="main" class="site-main blog" role="main">
<div class="article-info">
    <div class="container flex">
        <div class="article-title">            
            <h1><?php esc_html_e( 'Ви шукали: ', 'razom' ); ?><span><?php echo get_search_query();?></span></h1>
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
