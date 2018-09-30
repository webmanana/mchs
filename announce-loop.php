<?php
/**
 * @package WordPress
 * @subpackage МЧС
 * @since МЧС 1.0
 */
?>
<div class="announce_block">
    <div class="announce_img_inner">
        <a href="<?php the_permalink(); ?>">
            <div class="announce_img" style="<?php if ( has_post_thumbnail() ) { ?>background:url(<?php the_post_thumbnail_url('medium'); ?>);<?php } else { ?>background:url(<?php echo get_template_directory_uri(); ?>/img/no-thumb.jpg);<?php } ?>"></div>
        </a>
    </div>
   <div class="announce_desc">
        <span class="announce_block_date"><?php the_time('j F, Y'); ?></span>
        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
   </div>
</div>
