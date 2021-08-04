<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<?php wp_head()?>
</head>

<body <?php body_class(); ?>>

	<header>
		<div class="top-header">
			<div class="container">
				<div class="row">
				<div class="col-sm-1 col-logo">
					<div class="logo">
						<?php
						if(has_custom_logo()){
							the_custom_logo();
						}
						?>
					</div>
				</div>

				<div class="col-sm-9 d-flex justify-content-sm-end ">
					<nav class="navbar navbar-expand-md navbar-dark nav-responsive" role="navigation">
						<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
								<span class="navbar-toggler-icon"></span>
							</button>
								<?php
								if(has_nav_menu( 'primary')){
								wp_nav_menu( array(
									'theme_location'    => 'primary',
									'depth'             => 2,
									'container'         => 'div',
									'container_class'   => 'collapse navbar-collapse',
									'container_id'      => 'bs-example-navbar-collapse-1',
									'menu_class'        => 'nav navbar-nav',
									'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
									'walker'            => new WP_Bootstrap_Navwalker(),
								) );}
								?>
							</div>
					</nav>
				</div>

				<div id="search_area_visible" class="col-sm-2 d-flex justify-content-end search-area">
				<span><?php echo do_shortcode("[woo_cart_but]"); ?></span>
				<span>
					<?php
					global $current_user;
					get_currentuserinfo();     
					echo get_avatar( $current_user->ID, 32 );
					echo $current_user->user_firstname;
					?>
				</span>
				<span><i id="fa-button" class="fas fa-search"></i></span>
				<div id="search_area_hidden" class="col-sm-2 d-flex justify-content-end search-area">
							<?php get_search_form(); ?>
				</div>
				</div>
			</div>

		</div>
		</div>	

		<div class="lighbox">
		<?php
			if(is_home()){
				get_template_part('template_parts/lightbox');
			}
			?>
			</div>
	</header>