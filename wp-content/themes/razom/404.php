<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package razom
 */
get_header();
?>
<main id="main" class="site-main" role="main">
    <div class="article-info">
        <div class="container flex">
            <div class="article-title">            
                <h1><?php esc_html_e( 'Помилка 404: Сторінка не знайдена', 'razom' ); ?></h1>
            </div>
            <?php echo default_post_thumbnail( false, false, false, false, false ); ?>
        </div>
    </div>
    <div class="content container flex">
        <div class="content-404">
            <p><?php esc_html_e( 'На жаль, запитуваної Вами сторінки не існує. 
                Помилка могла статися з кількох причин:', 'razom' ); ?></p>
            <ul>
                <li><?php esc_html_e( 'Ви ввели неправильну адресу в браузері.', 'razom' ); ?></li>
                <li><?php esc_html_e( 'Сторінка, на яку Ви хотіли зайти, застаріла і була видалена.', 'razom' ); ?></li>
            </ul>
            <div class="home__end-but">
                <a href="https://razom.in/uk/" class="button"><?php esc_html_e( 'Повернутися на головну', 'razom' ); ?></a>
            </div>
        </div>

    </div>
</main>
<?php
get_footer();
