<?php
/**
* Template Name: Homepage
 */

get_header(); ?>


<div id="content" class="site-content">

	<!-- Main Content -->
	<div class="<?php if(is_front_page()) { ?>container-fluid<?php } else { ?>container<?php } ?> p-0">

		<main id="main" class="site-main" role="main">
	
			<section id="home-alert" class="content-area col-sm-12 p-0 m-0">

				<div class="container-fluid home-alert bg-grey-light m-0">

					<div class="row justify-content-center text-center m-0">
				
						<h3><a a href="https://heroesbrewco.square.site/">Visit Our Shop to Order Curbside Pickup</a></h3>

					</div>

				</div>

			</section><!-- #primary -->

			<section id="home-hero" class="content-area col-sm-12">

				<div class="container-fluid m-0 p-0">

					<div class="row justify-content-center home-hero-upper text-center">
						<?php if( is_active_sidebar( 'home-hero-title' ) ) : ?>
							<?php dynamic_sidebar( 'home-hero-title' ); ?>
						<?php endif; ?>
					</div>

					<div class="row justify-content-center home-hero-lower text-center text-white">
						<?php if( is_active_sidebar( 'home-hero-description' ) ) : ?>
							<?php dynamic_sidebar( 'home-hero-description' ); ?>
						<?php endif; ?>
        			</div>
										
				</div>

			</section><!-- #primary -->

			<section id="home-story" class="content-area col-sm-12">

				<div class="container-fluid">

					<div class="row justify-content-center text-center m-0">

					<div class="col-sm-10 col-md-8 text-center text-white p-5 bg-grey">
				  			<div class="container">
								<div class="row justify-content-center">
									<div class="col-8">
										<?php if( is_active_sidebar( 'our-story-content' ) ) : ?>
											<?php dynamic_sidebar( 'our-story-content' ); ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>

			</section><!-- #primary -->

		</main><!-- #main -->

	</div>

</div><!-- .container -->

<?php
get_footer();
