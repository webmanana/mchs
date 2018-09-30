<?php
/**
 * @package WordPress
 * @subpackage МЧС
 * @since МЧС 1.0
 */

get_header(); ?>
   <div id="page">
      <div class="breadcrumb_inner">
         <div class="grid-container">
            <div class="grid-x grid-padding-x">
               <div class="cell medium-12 breadcrumb">
                  <a href="<?php echo home_url(); ?>">Главная</a> - <span><?php the_title(); ?></span>
               </div>
            </div>
         </div>
      </div>
      <div class="single_inner">
         <div class="grid-container">
            <div class="grid-x grid-padding-x">
               <div class="cell medium-12">
                  <h1><?php the_title(); ?></h1>
                  <div class="page_content">
                     <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
                        <div class="single_full">
                           <?php the_content(); // контент ?>
                        </div>
                     <?php endwhile; // конец цикла ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<?php get_footer(); ?>
