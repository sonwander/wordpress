<?php
function oc_theme_styles(){
    $rand = rand(1, 999999999);
    wp_enqueue_style("bootstrap_css", get_template_directory_uri().'/assets/css/bootstrap.min.css' );
    wp_enqueue_style("template_css", get_template_directory_uri().'/assets/css/template.css?id='.$rand, array('bootstrap_css'));
    wp_enqueue_style("fontawesome_css", get_template_directory_uri().'/assets/css/fontawesome.min.css', array('bootstrap_css', 'template_css'));
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300', false );
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );

    wp_enqueue_script("jquery_js", get_template_directory_uri().'/assets/js/jquery-3.6.0.min.js', array(), false, true);
    wp_enqueue_script("bootstrap_js", get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script("script_js", get_template_directory_uri().'/assets/js/script.js', array('jquery'), NULL, true);
}
function oc_after_setup(){
    add_theme_support( "title-tag" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "custom-logo" );

    register_nav_menu( "primary", "Menu Principal" );
    register_nav_menu( "footer", "Menu Rodapé" );
}

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

function woocommerce_support(){

    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

function wnc_add_cart_button () {

    add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 10 );
}

function woocommerce_custom_single_add_to_cart_text() {
    return __( 'ADICIONAR À SACOLA', 'woocommerce' ); 
}

function woocommerce_custom_product_add_to_cart_text() {
    return __( 'ADICIONAR À SACOLA', 'woocommerce' );
}

// function single_product_summary_show(){
//     global $product;
//     echo $product->list_attributes();
// }

function add_text_after_button(){
    echo "<br/><h6 class='after-btn-add'>7 DIAS PARA TROCA OU DEVOLUÇÃO GRÁTIS</h6>";
}


function woo_remove_product_tabs( $tabs ) {

    $tabs['description']['title'] = __( 'SOBRE O PRODUTO' );
    unset( $tabs['reviews'] ); 

    unset( $tabs['additional_information'] );

    return $tabs;
}

// function change_rp_text($translated, $text, $domain)
// {
//      if ($text === 'Related products' && $domain === 'woocommerce') {
//          $translated = esc_html__('QUEM VIU, VIU TAMBÉM', $domain);
//      }
//      return $translated;
// }

function woo_cart_but() {
	ob_start();
 
        $cart_count = WC()->cart->cart_contents_count; 
        $cart_url = wc_get_cart_url(); 
  
        ?>
        <li><a class="menu-item cart-contents" href="<?php echo $cart_url; ?>" title="Minha Sacola">
	    <?php
        if ( $cart_count > 0 ) {
       ?>
            <span class="cart-contents-count"><?php echo $cart_count; ?></span>
        <?php
        }
        ?>
        </a></li>
        <?php
	        
    return ob_get_clean();
 
}


function oc_widgets(){
    register_sidebar( array(
        'name' => 'Sidebar Lateral',
        'id' => 'oc_sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ) );

    register_sidebar( array(
        'name' => 'Sidebar Rodapé Superior',
        'id' => 'oc_footer_sidebar_top',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>'
    ) );

    register_sidebar( array(
        'name' => 'Sidebar Rodapé Inferior',
        'id' => 'oc_footer_sidebar_bottom',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-bottom-title">',
        'after_title' => '</h6>'
    ) );

    register_sidebar( array(
        'name' => 'Sidebar Home',
        'id' => 'oc_sidebar_home',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-hometop">',
        'after_title' => '</h4>'
    ) );

    register_sidebar( array(
        'name' => 'Sidebar Body',
        'id' => 'oc_sidebar_body',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-body">',
        'after_title' => '</h4>'
    ) );

    register_sidebar( array(
        'name' => 'Sidebar Produtos',
        'id' => 'oc_sidebar_produtos',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-produtos">',
        'after_title' => '</h4>'
    ) );
}

function wpb_new_gravatar ($avatar_defaults) {
    $myavatar = 'http://localhost/wordpress/wp-content/uploads/2021/07/user-regular.png';
    $avatar_defaults[$myavatar] = "Gravatar Occhia";
    return $avatar_defaults;
    }

    