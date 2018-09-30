<?php
/**
 * @package WordPress
 * @subpackage МЧС
 * @since МЧС 1.0
 */
?>
<div class="cell medium-4 news_block">
    <div class="news_inner">
		<a href="<?php the_permalink(); ?>"><div class="articles_img" style="background:url(<?php the_post_thumbnail_url($width, $height, $crop); ?>);"></div></a>
        <div class="mini_news_desc">
            <span class="news_block_date"><?php the_time('j F, Y'); ?></span>
            <a class="mini_news_url" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
        </div>
    </div>
</div>
