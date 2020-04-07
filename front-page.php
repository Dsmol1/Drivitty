<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

					<!-- Product features -->
			    <section id="product-features" class="pb-lg-5">
			      <div class="features py-4 py-lg-5 d-flex align-items-end position-relative">

							<!-- Get app -->
							<div class="get-app d-none d-xl-flex align-items-center">
								<h4 class="get-app__title">Get the app</h4>
								<a href="#">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/android.png" alt="android-icon">
								</a>
								<a href="#">
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/ios.png" alt="apple-icon">
								</a>
							</div>
							<!-- End get app -->

			        <div class="container">
			          <div class="row">
			            <div class="col-12 col-lg-7">

										<!-- Feature list -->
			              <ul class="features__list">
                        <?php if( get_field('features') ): ?>
                          <?php while( the_repeater_field('features') ): ?>
                            <li class="features__list__item">
															<div class="features__list__item--height d-flex align-items-end">
	                              <img src="<?php the_sub_field('feature_image'); ?>" alt="<?php the_sub_field('alt'); ?>" class="" />
															</div>
                              <h5 class="my-3"><?php the_sub_field('feature_title'); ?></h5>
                              <p class="mb-2 mb-lg-4"><?php the_sub_field('feature_description'); ?></p>
                            </li>
                          <?php endwhile; ?>
                       <?php endif;?>
			              </ul>
										<!-- end feature list -->

			            </div>

									<!-- Features image -->
			            <div class="col-12 col-lg-4 offset-lg-1">
			              <div class="features__phone d-flex justify-content-center align-items-start mt-lg-4">
			                <img src="<?php bloginfo('template_directory'); ?>/assets/images/phone.png" alt="phone-image" class="">
			              </div>
			            </div>
								<!-- end features image -->

			          </div>
			        </div>
			      </div>
			    </section>
			    <!-- end product features -->

					<!-- Tabs -->
			    <section id="tabs" class="py-3 py-lg-5 mt-2 mt-lg-4">
			      <div class="tabs d-flex align-items-end position-relative">

			        <!-- Get app -->
			        <div class="get-app d-none d-xl-flex align-items-center">
			          <h4 class="get-app__title">Get the app</h4>
			          <a href="#">
			            <img src="<?php bloginfo('template_directory'); ?>/assets/images/android.png" alt="android-icon">
			          </a>
			          <a href="#">
			            <img src="<?php bloginfo('template_directory'); ?>/assets/images/ios.png" alt="apple-icon">
			          </a>
			        </div>

			        <!-- End get app -->
			        <div class="container">
			          <div class="extra-padding bg-dark rounded-2 p-2 p-sm-3 p-lg-5">
			            <div class="row p-3 p-sm-3 p-3 p-lg-5">

			              <div id="nav-tabContent" class="tab-content tabs__card col-lg-7 d-flex justify-content-center flex-column">
											<?php if( get_field('tabs') ): ?>
												<?php while( the_repeater_field('tabs') ): ?>
													<?php $index = get_row_index(); ?>
													<div class="tab-pane fade <?= ($index == 1) ? 'show active' : '' ?>" id="nav-<?php the_sub_field('tab_title'); ?>"  role="tabpanel" aria-labelledby="nav-<?php the_sub_field('tab_title'); ?>-tab">
														<h5 class="tabs__card__number m-0">0<?= $index; ?></h5>
														<h1 class="tabs__card__title py-3"><?php the_sub_field('tab_title'); ?></h1>
														<p class="tabs__card__description"><?php the_sub_field('tab_description'); ?></p>
													</div>
											  	<?php endwhile; ?>
											 <?php endif;?>
			              </div>

										<!-- Tabs image -->
			              <div class="tabs__phone col-lg-4 offset-lg-1 d-none d-lg-block">
			                <img src="<?php bloginfo('template_directory'); ?>/assets/images/phone-2.png" alt="phone-image" class="position-absolute">
			              </div>
										<!-- end tabs image -->
			            </div>
			          </div>

			          <!-- Tabs nav -->
			          <div class="tabs__nav nav nav-tabs nav-fill" id="nav-tab" role="tablist">
									<?php if( get_field('tabs') ): ?>
										<?php while( the_repeater_field('tabs') ): ?>
											<?php $index = get_row_index(); ?>
											<a class="tabs__nav__item nav-item nav-link py-2 <?= ($index == 1) ? 'active' : '' ?>" id="nav-<?php the_sub_field('tab_title'); ?>-tab" data-toggle="tab" href="#nav-<?php the_sub_field('tab_title'); ?>" role="tab" aria-controls="nav-<?php the_sub_field('tab_title'); ?>" aria-selected="true">0<?php echo get_row_index(); ?></a>
										<?php endwhile; ?>
									<?php endif;?>
			          </div>
			          <!-- end tabs nav -->

			        </div>
			      </div>
			    </section>
			    <!-- end tabs -->

					<!-- Faq -->
					<section id="faq" name="faq" class="py-4 py-lg-5">
						<div class="faq d-flex align-items-end position-relative">

							<div class="container">
								<?php $faq_title = get_field( "faq_title" );?>
								<h2 class="text-center pb-3 pb-lg-5 text-primary"><?= $faq_title ?></h2>
									<div class="faq__list panel-group" id="accordion1">

									<div class="row">

										<div class="left-col col-lg-5">
											<div class="row">

												<div class="faq__list__item panel panel-default col-lg-12">
													<div class="q-wrapper py-3 py-lg-4">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">Get Started
																</a>
															</h4>
														</div>
														<div id="collapseOne" class="panel-collapse collapse in">
															<div class="panel-body">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit incidunt similique sapiente quod molestias rem minus tempore omnis porro, quis quas rerum ipsum quia accusantium dolore illum repudiandae, totam aliquid.
																</p>
															</div>
														</div>
													</div>
												</div>


												<div class="faq__list__item panel panel-default col-lg-12">
													<div class="q-wrapper py-3 py-lg-4">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo">Discounts
																</a>
															</h4>
														</div>
														<div id="collapseTwo" class="panel-collapse collapse">
															<div class="panel-body">
																<div class="panel-body">
																	<div class="panel-group" id="accordion21">
																		<div class="panel">
																			<a data-toggle="collapse" data-parent="#accordion21" href="#collapseTwoOne">What You need To Get Started
																			</a>
																			<div id="collapseTwoOne" class="panel-collapse collapse">
																				<div class="panel-body">Sumai, kuria galima papildyti sąskaitą, limito nėra, tačiau jis neturi viršyti Jūsų leistino limito pagal paskyros lygį.</div>
																			</div>
																		</div>
																		<div class="panel">
																			<a data-toggle="collapse" data-parent="#accordion21" href="#collapseTwoTwo">Open My Account
																			</a>
																			<div id="collapseTwoTwo" class="panel-collapse collapse">
																				<div class="panel-body">Sumai, kuria galima papildyti sąskaitą, limito nėra, tačiau jis neturi viršyti Jūsų leistino limito pagal paskyros lygį.</div>
																			</div>
																		</div>
																		<div class="panel">
																			<a data-toggle="collapse" data-parent="#accordion21" href="#collapseTwoThree">How To Send In Documents
																			</a>
																			<div id="collapseTwoThree" class="panel-collapse collapse">
																				<div class="panel-body">Sumai, kuria galima papildyti sąskaitą, limito nėra, tačiau jis neturi viršyti Jūsų leistino limito pagal paskyros lygį.</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="faq__list__item panel panel-default col-lg-12">
													<div class="q-wrapper py-3 py-lg-4">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion1" href="#collapseFive">Manage Your Account
																</a>
															</h4>
														</div>
														<div id="collapseFive" class="panel-collapse collapse in">
															<div class="panel-body">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit incidunt similique sapiente quod molestias rem minus tempore omnis porro, quis quas rerum ipsum quia accusantium dolore illum repudiandae, totam aliquid.
																</p>
															</div>
														</div>
													</div>
												</div>

											</div>
										</div>

										<div class="right-col col-lg-5 offset-lg-2">
											<div class="row">

												<div class="faq__list__item panel panel-default col-lg-12">
													<div class="q-wrapper py-3 py-lg-4">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree">Explore Products and Features
																</a>
															</h4>
														</div>
														<div id="collapseThree" class="panel-collapse collapse in">
															<div class="panel-body">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit incidunt similique sapiente quod molestias rem minus tempore omnis porro, quis quas rerum ipsum quia accusantium dolore illum repudiandae, totam aliquid.
																</p>
															</div>
														</div>
													</div>
												</div>

												<div class="faq__list__item panel panel-default col-lg-12">
													<div class="q-wrapper py-3 py-lg-4">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion1" href="#collapseFour">Sign Up
																</a>
															</h4>
														</div>
														<div id="collapseFour" class="panel-collapse collapse">
															<div class="panel-body">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing e lit. Impedit incidunt similique sapiente quod molestias rem minus tempore omnis porro, quis quas rerum ipsum quia accusantium dolore illum repudiandae, totam aliquid.
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>

								</div>

							</div>
						</div>
					</section>
					<!-- end faq -->

					<!-- Slider -->
					<section id="features">
						<div class="features">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="features__slider-wrapper rounded-2 m-0 mb-4 m-md-4">
											<?php
												$args = array(
													'post_type' => 'features',
													'post_status' => 'publish',
													'orderby'   => 'meta_value',
													'order' => 'DESC',
												);
												$loop = new WP_Query($args);
											?>

											<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
												 <div class="features__slide">
														<a class="features__slide-link d-block rounded-2 p-2" href="<?= get_permalink(); ?>">
														 <?php the_title('<h2 class="feature__slide__title">', '</h2>');?>
												   	 <div class="features__slide__content"><?php the_content(); ?></div>
														 <?php the_post_thumbnail('thumbnail', array('class' => 'features__slide__image')); ?>
													 </a>
												 </div>
										 <?php endwhile; ?>

										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- end slider -->
			<?php wp_reset_postdata(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
