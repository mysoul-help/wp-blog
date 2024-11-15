<a href="<?php the_permalink();?>">
    <div class="article-block">
        <div class="article-block-str"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/str.svg" alt=""/></div>
        <div class="article-block-title"><?php the_title(); ?></div>
        <div class="article-block-image"><?php the_post_thumbnail(); ?></div>
    </div>
</a>

