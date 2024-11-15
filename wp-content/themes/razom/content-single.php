<div class="article-info">
    <div class="container flex">
        <div class="article-title">
            <div class="categories"><?php the_category( ' ' ); ?></div>
            <h1><?php the_title(); ?></h1>
        </div>
        <?php the_post_thumbnail(); ?>
    </div>
</div>
<div class="content container flex">
    <div class="content-text">
        <?php the_content(); ?>
    </div>
    <div class="specialists">
        <div class="specialists-title"><?php esc_html_e( 'Фахівці, що працюють з темою ', 'razom' ); ?> <?php the_category( ' та ' ); ?></div>
        <?php get_sidebar();?>
        <a class="all-specialists" href="https://razom.in/uk/psychologist/suitable-list"><?php esc_html_e( 'Подивитись усіх фахівців', 'razom' ); ?></a>
    </div>
</div>
<div class="article-links">
    <a href="https://razom.in/uk/anketa" class="article-links-anketa"><?php esc_html_e( 'Пройти тест', 'razom' ) ?></a>
    <a href="https://razom.in/uk/psychologist/suitable-list" class="article-links-psychologist"><?php esc_html_e( 'Підібрати спеціаліста', 'razom' ) ?></a>
</div>
<div class="methods">
    <div class="methods-title"><?php esc_html_e( 'Інші методи', 'razom' ) ?></div>
    <div class="container flex">
        <?php
        $categories = get_categories();
        if ( ! empty( $categories ) ) {
            foreach ( $categories as $category ) {
                ?>
                <div class="method-block">
                    <div class="method-title"><?php echo esc_html( $category->name ); ?></div>
                    <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><span><?php esc_html_e( 'Детальніше', 'razom' ) ?></span>
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 7L17 7M17 7L11 13M17 7L11 1" stroke="#87A5E2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>


