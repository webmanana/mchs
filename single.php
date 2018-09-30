<?php
/**
 * @package WordPress
 * @subpackage МЧС
 * @since МЧС 1.0
 */

get_header(); ?>
   <div id="page">
       <div class="grid-container news_wrap">
           <div class="grid-x grid-padding-x">
               <div class="cell small-12 medium-8 large-6 single_inner">
                    <h1 class="entry-title"><?php the_title(); // заголовок поста ?></h1>
					<div class="news-date"><?php the_time('j F, Y'); ?></div>
                    <div class="single_img">
                        <?php if ( has_post_thumbnail() ) {
                        	the_post_thumbnail();
                        }  ?>
                    </div>
                    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
                        <div class="content">
                            <?php the_content(); // контент ?>
                        </div>
                    <?php endwhile; // конец цикла ?>
                    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                    <script src="//yastatic.net/share2/share.js"></script>
                    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,twitter,whatsapp,telegram"></div>
               </div>
               <div class="cell small-12 medium-4 large-3">
                  <div class="news_inner">
                      <div class="sidebar_block">
                          <div class="sidebar_title">
                               <h5>Оперативная информация</h5>
                               <div class="arrow_inner">
                                   <button type="button" class="prev_oper"></button>
                                   <button type="button" class="next_oper"></button>
                               </div>
                          </div>
                          <div class="sidebar_content_oper">
                               <?php
                                  if( wp_is_mobile() ) {
                                      query_posts(array('paged'=>get_query_var('paged'), 'posts_per_page'=>'3', 'category__not_in'=>'10', 'category__and'=>'11' ) );
                                  } else {
                                      query_posts(array('paged'=>get_query_var('paged'), 'posts_per_page'=>'5', 'category__not_in'=>'10', 'category__and'=>'11' ) );
                                  }
                               ?>
                               <?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
                               <?php get_template_part('info-loop'); // для отображения каждой записи берем шаблон loop.php ?>
                               <?php endwhile; // конец цикла
                               else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>
                          </div>
                       </div>
                       <div class="sidebar_block">
                           <div class="announce_title">
                               <h5>Анонсы</h5>
                               <div class="arrow_inner">
                                   <button type="button" class="prev"></button>
                                   <button type="button" class="next"></button>
                               </div>
                           </div>
                           <div class="announce_content">
                               <?php query_posts(array('paged'=>get_query_var('paged'), 'posts_per_page'=>'5', 'category__not_in'=>'10', 'category__and'=>'11' ) ); ?>
                               <?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
                               <?php get_template_part('announce-loop'); // для отображения каждой записи берем шаблон loop.php ?>
                               <?php endwhile; // конец цикла
                               else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>
                           </div>
                        </div>
                  </div>
               </div>
               <div class="cell small-12 medium-12 large-3">
                  <div class="news_inner">
                       <div class="sidebar_block">
                           <div class="sidebar_title_region">
                                <h5>Новости подразделений</h5>
                                <div class="arrow_inner">
                                    <button type="button" class="prev_news"></button>
                                    <button type="button" class="next_news"></button>
                                </div>
                           </div>
                           <div class="sidebar_content">
                               <?php query_posts(array('paged'=>get_query_var('paged'), 'posts_per_page'=>'8', 'category__in'=> array(14,13,18,17,15,16) ) ); ?>
                               <?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
                               <?php get_template_part('region-loop'); // для отображения каждой записи берем шаблон loop.php ?>
                               <?php endwhile; // конец цикла
                               else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>
                           </div>
                       </div>
                  </div>
               </div>
           </div>
       </div>
       <div class="grid-container line_wrap">
           <div class="line"></div>
       </div>
       <div class="grid-container banner_wrap">
           <div class="grid-x grid-padding-x">
               <div class="cell small-12 medium-4 large-3">
                   <div class="banner_block">
                       <a href="http://www.kremlin.ru/">
                           <div class="banner_block_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/img/banner1.png" alt="">
                           </div>
                           <span>Официальный сайт Президента Российской Федерации</span>
                       </a>
                   </div>
               </div>
               <div class="cell small-12 medium-4 large-3">
                   <div class="banner_block">
                       <a href="#">
                           <div class="banner_block_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/img/banner2.png" alt="">
                           </div>
                           <span>Официальный портал Правительства Республика Саха (Якутия)</span>
                       </a>
                   </div>
               </div>
               <div class="cell small-12 medium-4 large-3">
                   <div class="banner_block">
                       <a href="#">
                           <div class="banner_block_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/img/banner2.png" alt="">
                           </div>
                           <span>Госкомитет по обеспечению безопасности жизнедеятельности населения РС(Я)</span>
                       </a>
                   </div>
               </div>
               <div class="cell small-12 medium-4 large-3">
                   <div class="banner_block">
                       <a href="#">
                           <div class="banner_block_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/img/banner3.png" alt="">
                           </div>
                           <span>Главное управление МЧС России по Республике Саха (Якутия)</span>
                       </a>
                   </div>
               </div>
           </div>
       </div>
	</div>
<?php get_footer(); ?>
