<?php
/**
 * @package WordPress
 * @subpackage МЧС
 * @since МЧС 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css" />
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	<div class="wrap">
		<header>
			<div class="b-header">
				<div class="grid-container header_top">
					<div class="grid-x grid-padding-x">
						<div class="cell small-12 medium-10 large-5 header_logo">
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
								</a>
								<div class="logo_desc">
									<h1>Государственная противопожарная служба Республики Саха (Якутия)</h1>
									<span>Государственное бюджетное учреждение РС (Я)</span>
								</div>
							</div>
							<div class="logo_mobile">
								<a href="<?php echo home_url(); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
								</a>
								<div class="logo_desc">
									<h1>Государственная противопожарная служба Республики Саха (Якутия)</h1>
									<span>Государственное бюджетное учреждение РС (Я)</span>
								</div>
							</div>
						</div>
						<div class="cell hide-for-small-only hide-for-medium-only large-7 header_info">
							<div class="info_inner">
								<span class="info_top">Сообщить о пожаре</span>
								<span class="info_bottom">(4112) 403-324</span>
							</div>
							<a class="top_button" id="telefon-opener">Все телефоны</a>
							<a class="top_button" id="map-opener">Территориальные подразделения</a>
						</div>
						<div class="cell hide-for-small-only medium-2 hide-for-large">
							<div class="burger_inner_ipad">
								<a href="#" data-toggle="offCanvasLeft1">
									<img src="<?php echo get_template_directory_uri(); ?>/img/burger.png" alt="">
								</a>
							</div>
						</div>
						<div class="cell small-12 hide-for-medium hide-for-large mobile_menu_inner">
							<div class="mobile_menu">
								<div class="burger_inner">
									<a href="#" data-toggle="offCanvasLeft1">
										<img src="<?php echo get_template_directory_uri(); ?>/img/burger.png" alt="">
									</a>
								</div>
								<span>Меню сайта</span>
								<div class="search_inner">
									<form action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off" role="search" method="get" >
										<input class="search" name="s" id="s" value="<?php echo get_search_query() ?>" type="text">
										<input class="search_submit" value="Rechercher" type="submit">
									</form>
								</div>
							</div>
						</div>
						<div class="off-canvas-wrapper">
						    <div class="off-canvas position-right mobile_canvas" id="offCanvasLeft1" data-off-canvas>
								<ul class="mobile-ofc vertical menu">
									<li><a class="active" href="<?php echo home_url(); ?>">Главная</a></li>
									<li><a href="<?php echo home_url(); ?>/">Пресс центр</a></li>
									<li><a href="<?php echo home_url(); ?>//">Общая информация</a></li>
									<li><a href="<?php echo home_url(); ?>/">Деятельность</a></li>
									<li><a href="<?php echo home_url(); ?>/">Полезное</a></li>
									<li><a href="<?php echo home_url(); ?>/">Контакты</a></li>
								</ul>
						    </div>
					    </div>
					</div>
				</div>
				<div class="telefon-block">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-4">
								<span>Единый телефон пожарных и спасателей</span>
								<h1>101</h1>
							</div>
							<div class="cell small-4">
								<span>Многоканальный</span>
								<h1>(4112) 403-304</h1>
							</div>
							<div class="cell small-4">
								<span>Телефон доверия</span>
								<h1>(495) 870-69-96</h1>
							</div>
						</div>
					</div>
				</div>
				<div class="svg-map" id="demo2">
					<div class="svg-map__cont">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-6">
									<div class="map-widget">

									</div>
								</div>
								<div class="cell small-6">
									<div class="address-item">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="show-for-large">
				<div class="grid-container header_bottom">
					<div class="grid-x">
						<div class="cell medium-12 top_menu">
							<div class="top_menu_inner">
								<div class="top-bar menu-centered" id="main-menu">
									<?php wp_nav_menu( array(
									'theme_location'  => 'top',
									'container'       => false,
									'menu_class'      => 'menu vertical large-horizontal',
									'items_wrap'      => '<ul class="links">%3$s</ul>',
									'depth'           => 0,
									'walker' => new bootstrap_menu
									)
								);
								?>
								</div>
								<nav class="topmenu greedy" role="navigation">
									<ul id="topmenu" class="links">
										<li><a class="active" href="<?php echo home_url(); ?>">Главная</a></li>
										<li><a href="<?php echo home_url(); ?>/">Пресс центр</a></li>
										<li class="multilevel">
											<a class="menu_toggle" href="<?php echo home_url(); ?>/">Общая информация</a>
											<ul>
												<li><a href="#">Руководство</a></li>
												<li><a href="#">Структуру</a></li>
												<li class="dropdown_multilevel">
													<a class="dropdown_multilevel_toggle" href="#">Подразделения</a>
													<ul>
														<li><a href="#">Руководство</a></li>
														<li><a href="#">Структуру</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="<?php echo home_url(); ?>/">Деятельность</a></li>
										<li><a href="<?php echo home_url(); ?>/">Полезное</a></li>
										<li><a href="<?php echo home_url(); ?>/">Контакты</a></li>
									</ul>
									<button count="0" class="hidden">...</button>
								  	<ul class="hidden-links hidden"></ul>
									<div class="search_inner">
										<form action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off" role="search" method="get" >
											<input class="search" name="s" id="s" value="<?php echo get_search_query() ?>" type="text">
											<input class="search_submit" value="Rechercher" type="submit">
										</form>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
