<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package razom
 */
get_header();
?>
<main id="main" class="site-main" role="main">

    <?php
    while ( have_posts() ) :
        the_post();        

        get_template_part( 'content', 'single' );       

    endwhile; 
    ?>

</main>
<?php
get_footer();
