<?php
/**
 * @package WordPress
 * @subpackage lasqa
 * @since lasqa 1.0
 * Template Name: Новости
 */

get_header(); ?>
<section id="news">
    <div class="grid-container news_wrap">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12 medium-9 large-9">
                <div class="news_page_title">
                    <h1>Новости</h1>
                </div>
                <div class="news_page_inner">
                    <?php query_posts(array('paged'=>get_query_var('paged'), 'posts_per_page'=>'8', 'category__in'=> array(14,13,18,17,15,16) ) ); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
                    <?php get_template_part('news-page-loop'); // для отображения каждой записи берем шаблон loop.php ?>
                    <?php endwhile; // конец цикла
                    else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>
                </div>
            </div>
            <div class="cell small-12 medium-3 large-3">
                <div class="page_news_sidebar">
                    <ul class="page_menu">
                        <li><a class="active" href="#">Новости</a></li>
                        <li><a href="#">Анонсы</a></li>
                        <li><a href="#">Оперативная информация</a></li>
                        <li><a href="#">Новости подразделений</a></li>
                    </ul>
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
</section>
<?php get_footer(); ?>
