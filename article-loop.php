<?php
/**
 * @package WordPress
 * @subpackage МЧС
 * @since МЧС 1.0
 */
?>
<div class="cell medium-6 large-4 news_block">
    <div class="articles_block">
        <div class="articles_img_inner">
            <a href="<?php the_permalink(); ?>">
                <div class="articles_img" style="<?php if ( has_post_thumbnail() ) { ?>background:url(<?php the_post_thumbnail_url('thumbnail'); ?>);<?php } else { ?>background:url(<?php echo get_template_directory_uri(); ?>/img/no-thumb.jpg);<?php } ?>"></div>
            </a>
        </div>
       <div class="articles_desc">
          <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
       </div>
    </div>
</div>
