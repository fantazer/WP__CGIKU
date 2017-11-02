<!DOCTYPE html>
<html lang='en'>
	<!--create by ANATOLY KUZNETSOV-->

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="format-detection" content="telephone=no" />
		<!--colors-tabs-->
		<meta name="theme-color" content="#000" />
		<meta name="msapplication-navbutton-color" content="#000" />
		<meta name="apple-mobile-web-app-status-bar-style" content="#000" />
		<!--icons-->
		<link rel="shortcut icon" href="img/fav/favicon.ico" />
		<!--SEO-->
		<title>Document</title>
		<meta name="description" itemprop="description" content="" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/vendor.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style-edit.css">
	</head>
	<?php wp_head(); ?>
	<body>
		<!--block header-->
		<div class="head-container">
			<!--header-->
			<div class="header">
				<div class="top-line">
					<div class="main-cont">
						<div class="top-line-wrap">
							<a class="main-logo" href="/">
								<img class="logo--full" src="<?php echo get_template_directory_uri();?>/img/logo-dark.png" alt="" />
								<img class="logo--short" src="<?php echo get_template_directory_uri();?>/img/logo-short.png" alt="" />
							</a>
							<div class="top-line-info">
								<div class="top-line-el__wrap">
									<div class="top-line-el">
										<div class="top-line-el-title">Работа горячей линии:</div>
										<div class="top-line-el-info">Ежедневно c 9-00 ч. до 20-00 ч.</div>
									</div>
									<div class="top-line-el">
										<div class="top-line-el-title">Прием онлайн-заявок:</div>
										<div class="top-line-el-info top-line-el-info--call modal-get" data-modal="order">
											<svg class="icon">
												<use xlink:href="#phone"></use>
											</svg>
											<span>Круглосуточно</span>
										</div>
									</div>
								</div>
								<div class="top-line__contact">
									<div class="top-line-loc">
										<div class="top-line-loc-el">
											<div class="top-line-loc-icon">
												<svg class="icon">
													<use xlink:href="#metro"></use>
												</svg>
											</div>
											<div class="top-line-loc-text">Варшавская</div>
										</div>
										<div class="top-line-loc-el">
											<div class="top-line-loc-icon">
												<svg class="icon">
													<use xlink:href="#metro"></use>
												</svg>
											</div>
											<div class="top-line-loc-text">Каширская</div>
										</div>
									</div>
									<div class="nav-phone">
										<a class="nav-phone-el" href="tel:+7 (495) 514-84-13">+7 (495) 514-84-13</a>
										<a class="nav-phone-el" href="tel:+7 (495) 514-84-13">+7 (495) 283-96-83</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--header-end-->
			<!--nav-->
			<div class="nav">
				<div class="main-cont">
					<div class="nav-wrap">
						<div class="nav-toggle">
							<svg class="icon">
								<use xlink:href="#menu"></use>
							</svg>
						</div>
						<div class="menu-wrap">
							<div class="menu">
								<div class="menu-el">
									<a href="/">
										<span>Главная</span>
									</a>
								</div>
								<div class="menu-el menu-el-service">
									<a href="/uslugi/">
										<span>Услуги
											<svg class="icon">
												<use xlink:href="#arrow-down"></use>
											</svg>
										</span>
									</a>
									<div class="menu-el__sub">
										<a class="menu-el__sub-el" href="/kadastrovy-e-raboty/">Кадастровые работы</a>
										<a class="menu-el__sub-el" href="/geodezicheskie-raboty/">Геодезические работы</a>
									</div>
								</div>
								<?
                  $args = array(
                  'cat'=> 3,
                  'order' => 'ASC'
                  );

                  query_posts($args);
                  while (have_posts()) : the_post();
                  printf('
										<div class="menu-el">
											<a href="%s">
												<span>%s</span>
											</a>
										</div>
                  
                  ',get_permalink()
                   ,get_the_title());
                   endwhile;
                   wp_reset_query();
                 ?>
                 <div class="menu-el menu-el--mark">
									<a href="/aktsii-i-skidki/">
										<span>Акции</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--nav-end-->
		</div>
		<!--block header end-->