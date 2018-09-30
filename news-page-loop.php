<?php
/**
 * @package WordPress
 * @subpackage МЧС
 * @since МЧС 1.0
 */
?>
<div class="news_page_inner">
    <div class="page_news_img_inner">
        <a href="<?php the_permalink(); ?>">
            <div class="page_news_img" style="<?php if ( has_post_thumbnail() ) { ?>background-image:url(<?php the_post_thumbnail_url($width, $height, $crop); ?>);<?php } else { ?>background-image:url(<?php echo get_template_directory_uri(); ?>/img/no-thumb.jpg);<?php } ?>"></div>
        </a>
    </div>
    <div class="page_news_desc">
        <a class="page_news_title" href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <span class="news_block_date"><?php the_time('j F, Y'); ?></span>
        <div class="page_news_excerpt"><?php the_excerpt(); ?></div>
    </div>
</div>
