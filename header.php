<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drivitty
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered justify-content-center" role="document">
    <div class="modal-placeholder">
      <div class="close-btn">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      	<div class="modal-body"></div>
      </div>
  </div>
</div>

<div id="page" class="site">
	<!-- Mobile menu -->
		<section id="mobile-menu" class="d-flex align-items-center d-lg-none">

			<!-- Logo -->
			<div class="col-12 col-lg-2 d-flex align-items-center justify-content-betwween pb-lg-0">
				<a href="" class="logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="Drivitty-Logo"></a>
			</div>

			<div class="outer-menu">
				<input class="checkbox-toggle" type="checkbox" / id="closeIcon">
				<div class="hamburger">
					<div></div>
				</div>

				<div class="menu" id="menu">
					<div>
						<div>
							<?php
							$args = array(
									'container'     => '',
									'theme_location'=> 'menu-primary-en',
									'depth'         => 1,
									'fallback_cb'   => false,
									'menu_class' 		=> 'menu__list text-white',
									'add_li_class'  => 'menu__list__item text-uppercase'
									);
							wp_nav_menu($args);
							 ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end mobile menu -->

		<!-- Banner -->
		<section id="banner">
			<header class="header py-3 py-lg-5">
				<div class="container">
					<div class="row">

						<!-- Logo -->
						<div class="col-12 col-lg-2 d-none d-lg-flex align-items-center justify-content-center pb-3 pb-lg-0">
							<a href="" class="header__logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="Drivitty-Logo"></a>
						</div>

						<!-- Personal/Business -->
						<div class="col-12 col-lg-5 pb-3 pb-lg-0">
							<div class="header__profile">
								 <?php
								 wp_nav_menu(
								   array(
								     'theme_location' => 'menu-secondary-en',
								     'container_class' => 'secondary-menu'
								   )
								 );
								  ?>
							</div>
						</div>


						<!-- FAQ, Lang -->
						<div class="d-none col-2 col-sm-2 col-md-2 col-lg-2 d-lg-flex align-items-center">
							<div class="w-100">
								<?php
								$args = array(
								    'container'     => '',
								    'theme_location'=> 'menu-1',
								    'depth'         => 1,
								    'fallback_cb'   => false,
										'menu_class' 		=> 'header__list d-flex justify-content-around text-white',
								    'add_li_class'  => 'header__list__item text-uppercase'
								    );
								wp_nav_menu($args);
								 ?>
							</div>
						</div>

						<!-- Get the app -->
						<div class="col-12 col-lg-3">
							<div class="header__get-app">
								<?php $header_overview = get_field('header_overview', pll_current_language('slug')); ?>
								<?php	if ($header_overview) : ?>
									<input type="button" data-toggle="modal" data-target="#exampleModalCenter" value="<?php echo $header_overview['header_get_app'] ?>" class="button button--get-app font-weight-bold">
								<?php endif ?>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="hero py-3 py-lg-5 text-white">
				<div class="container">
					<div class="row">

						<div class="col-lg-5 hero__overview">
							<h1 class="hero__overview__title">
								<?php $header_overview = get_field('header_overview', pll_current_language('slug')); ?>
									<?php	if ($header_overview) : ?>
										<?php echo $header_overview['header_title'] ?>
									<?php endif ?>
							</h1>

							<p class="hero__overview__description py-4">

								<?php $header_overview = get_field('header_overview', pll_current_language('slug')); ?>
									<?php	if ($header_overview) : ?>
										<?php echo $header_overview['header_sub_title'] ?>
									<?php endif ?>
							</p>


							<div class="hero__overview__list pt-1 pb-4 py-lg-4">
								<div class="row justify-content-center justify-content-lg-start">
									<div class="col-4 col-md-3 hero__overview__list__item-apple d-flex pr-0 mr-3">
										<a href="" class="d-flex">
											<img src="<?php bloginfo('template_directory'); ?>/assets/images/apple.png" alt="Apple">
										</a>
									</div>
									<div class="col-4 col-md-3 hero__overview__list__item-google d-flex pl-0">
										<a href="" class="d-flex">
											<img src="<?php bloginfo('template_directory'); ?>/assets/images/google.png" alt="Google" class="">
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hero__bg col-lg-6 offset-lg-1 d-flex py-4 py-lg-0">
							<img class="w-100 h-100" src="<?php bloginfo('template_directory'); ?>/assets/images/hero.png" alt="hero__image">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end banner -->

		<!-- scroll down -->
		<div class="container">
			<span class="scroll-btn">
				<?php $header_overview = get_field('header_overview', pll_current_language('slug')); ?>
				<?php	if ($header_overview) : ?>
					<a href="#product-features" class="flowing-scroll"><?php echo $header_overview['header_scroll_down'] ?></a>
				<?php endif ?>
				<div class="line"></div>
			</span>
		</div>
		<!-- end scroll  -->

	<div id="content" class="site-content flex-auto">
