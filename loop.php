<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage МЧС
 */
?>
<div class="news_block">
    <div class="news_inner">
       <a href="<?php the_permalink(); ?>"><div class="news_img" style="background:url(<?php the_post_thumbnail_url($width, $height, $crop); ?>);"></div></a>
       <div class="news_desc">
          <span class="news_block_date"><?php the_time('j F, Y'); ?></span>
          <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
       </div>
    </div>
</div>
