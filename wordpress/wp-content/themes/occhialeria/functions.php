<?php
require get_template_directory().'/include/setup.php';

add_action("wp_enqueue_scripts", "oc_theme_styles");
add_action("after_setup_theme", "oc_after_setup");
add_action("widgets_init", "oc_widgets");
add_action("after_setup_theme", "woocommerce_support");
add_action( 'after_setup_theme', 'register_navwalker' );
add_action( 'after_setup_theme', 'wnc_add_cart_button' );

add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 10 );
// add_action('woocommerce_single_product_summary', 'single_product_summary_show');
add_action( 'woocommerce_after_add_to_cart_button', 'add_text_after_button', 100 ); 
//add_action( 'woocommerce_before_add_to_cart_button', 'add_price_before_button' ); 
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);


add_shortcode ('woo_cart_but', 'woo_cart_but' );

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );



add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );
add_filter( 'wc_product_sku_enabled', '__return_false' ); 
add_filter( 'woocommerce_product_description_heading', '__return_null' );
// add_filter('gettext', 'change_rp_text', 98, 3);
// add_filter('ngettext', 'change_rp_text', 99, 3);
add_filter( 'avatar_defaults', 'wpb_new_gravatar' );

// EDITAR TAB
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );


function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#8260;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#8260;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#8260;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#8260;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}