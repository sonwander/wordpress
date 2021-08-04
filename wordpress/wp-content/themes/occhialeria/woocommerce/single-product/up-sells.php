<?php
/**
 * Single Product Up-Sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/up-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $upsells ) : ?>



 <!-- CAROUSEL 1 -->
	<section id="section-up-sell" class="up-sells upsells products up-sell-carousel">
		<?php
		$heading = apply_filters( 'woocommerce_product_upsells_products_heading', __( 'QUEM VIU, VIU TAMBÉM&hellip;', 'woocommerce' ) );
  
		if ( $heading ) :
			?>
			<h2><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>

	<div id="carouselExampleControls" class="carousel slide carousel-inner-related" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">

	<?php woocommerce_product_loop_start(); ?>

<?php foreach ( $upsells as $upsell ) : ?>

	<?php
	$post_object = get_post( $upsell->get_id() );

	setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

	wc_get_template_part( 'content', 'product' );
	?>

<?php endforeach; ?>

<?php woocommerce_product_loop_end(); ?>
		</div>

    <div class="carousel-item">
	<?php woocommerce_product_loop_start(); ?>

<?php foreach ( $upsells as $upsell ) : ?>

	<?php
	$post_object = get_post( $upsell->get_id() );

	setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

	wc_get_template_part( 'content', 'product' );
	?>

<?php endforeach; ?>

<?php woocommerce_product_loop_end(); ?>   
 </div>

 <div class="carousel-item">
	<?php woocommerce_product_loop_start(); ?>

<?php foreach ( $upsells as $upsell ) : ?>

	<?php
	$post_object = get_post( $upsell->get_id() );

	setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

	wc_get_template_part( 'content', 'product' );
	?>

<?php endforeach; ?>

<?php woocommerce_product_loop_end(); ?>    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	</section>
	

	<!-- CAROUSEL 2 -->
	<section id="section-up-sell" class="up-sells upsells products up-sell-carousel">
		<?php
		$heading = apply_filters( 'woocommerce_product_upsells_products_heading', __( 'QUEM COMPROU, COMPROU TAMBÉM&hellip;', 'woocommerce' ) );
  
		if ( $heading ) :
			?>
			<h2><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>

	<div id="carouselExampleControls2" class="carousel slide carousel-inner-related" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">

	<?php woocommerce_product_loop_start(); ?>

<?php foreach ( $upsells as $upsell ) : ?>

	<?php
	$post_object = get_post( $upsell->get_id() );

	setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

	wc_get_template_part( 'content', 'product' );
	?>

<?php endforeach; ?>

<?php woocommerce_product_loop_end(); ?>
		</div>

    <div class="carousel-item">
	<?php woocommerce_product_loop_start(); ?>

<?php foreach ( $upsells as $upsell ) : ?>

	<?php
	$post_object = get_post( $upsell->get_id() );

	setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

	wc_get_template_part( 'content', 'product' );
	?>

<?php endforeach; ?>

<?php woocommerce_product_loop_end(); ?>   
 </div>

 <div class="carousel-item">
	<?php woocommerce_product_loop_start(); ?>

<?php foreach ( $upsells as $upsell ) : ?>

	<?php
	$post_object = get_post( $upsell->get_id() );

	setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

	wc_get_template_part( 'content', 'product' );
	?>

<?php endforeach; ?>

<?php woocommerce_product_loop_end(); ?>    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	</section>
	<?php

endif;
wp_reset_postdata();

?>


	

   