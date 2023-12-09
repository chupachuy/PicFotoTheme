<?php
    function my_theme_enqueue_styles() {

     $parent_style = 'parent-style'; // Estos son los estilos del tema padre recogidos por el tema hijo.
     wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

     wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ),wp_get_theme()->get('Version'));

}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


/** CUSTOM POST TYPE VIDEO YOUTUBE ***/

function videos() {

    $labels = array(
        'name'                  => _x( 'Videos', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Videos', 'text_domain' ),
        'name_admin_bar'        => __( 'Videos', 'text_domain' ),
        'archives'              => __( 'Archivo de videones', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Agregar Video', 'text_domain' ),
        'new_item'              => __( 'Nueva Video', 'text_domain' ),
        'edit_item'             => __( 'Editar Video', 'text_domain' ),
        'update_item'           => __( 'Actualizar Video', 'text_domain' ),
        'view_item'             => __( 'Ver Video', 'text_domain' ),
        'view_items'            => __( 'Ver Videos', 'text_domain' ),
        'search_items'          => __( 'buscar Videos', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_video'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_video'    => __( 'Set featured video', 'text_domain' ),
        'remove_featured_video' => __( 'Remove featured video', 'text_domain' ),
        'use_featured_video'    => __( 'Use as featured video', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Video', 'text_domain' ),
        'description'           => __( 'Galeria de Videos', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' , 'excerpt'),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'menu_icon'             => 'dashicons-video-alt3',
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'video', $args );

}
add_action( 'init', 'videos', 0 );


//Cambiamos el logo
add_action( 'login_enqueue_scripts', 'bs_change_login_logo' );
function bs_change_login_logo() { ?> 

<style type="text/css"> 
  
#login h1 a {
background-image: url('https://picfoto.mx/siteRC/wp-content/uploads/2023/08/LogoPIcFoto.png');
} 
                      
</style>
                      
<?php }


add_action( 'woocommerce_share', 'dcms_question_whatsapp' );

function dcms_question_whatsapp(){
    $phone = '525573815149';
    $message = 'Quiero información del producto: '.get_the_title().' en '.get_permalink().' ';
    $text = 'Preguntar por Whatsapp';
    $ico = '<img src="'.get_stylesheet_directory_uri().'/images/whatsaap.png" width=50 height=50 />';

    $url = 'https://api.whatsapp.com/send?phone='.$phone.'&amp;text='.str_replace(' ', '%20', $message);
    $link = '<div class="logo-whatsapp"><a class="btn-ask-whatsapp" href="'.$url.'"><i class="fa-brands fa-whatsapp fa-2x"></i> '.$text.'</a></div>';
    /**$link = '<div class="logo-whatsapp"><a class="dc-link" href="'.$url.'" target="_blank">'.$ico. ' <span>'.$text.'</span></a></div>';**/

    echo '<div class="dc-whatsapp-container">'. $link. '</div>';
};

/*** HOOK PARA DESCRIPCION ALETERNA A PRODUCTOS **/

// Display Fields
add_action('woocommerce_product_options_general_product_data', 'woocommerce_product_custom_fields');
// Save Fields
add_action('woocommerce_process_product_meta', 'woocommerce_product_custom_fields_save');
function woocommerce_product_custom_fields()
{
    global $woocommerce, $post;
    
    // Custom Product Text Field
    //Custom Product  Textarea
    woocommerce_wp_textarea_input(
        array(
            'id' => '_custom_product_textarea',
            'placeholder' => 'Instrucciones para enviar Fotos',
            'label' => __('Custom Product Textarea', 'woocommerce')
        )
    );
   
}


function woocommerce_product_custom_fields_save($post_id)
{
// Custom Product Textarea Field
    $woocommerce_custom_procut_textarea = $_POST['_custom_product_textarea'];
    if (!empty($woocommerce_custom_procut_textarea))
        update_post_meta($post_id, '_custom_product_textarea', esc_html($woocommerce_custom_procut_textarea));
}

// Right column
add_action('woocommerce_after_add_to_cart_button','cmk_additional_button');

function cmk_additional_button() {

    echo '<div class="price-disclaimer"><div class="price-disclaimer-int">';

    global $product;
    $product_id = $product->get_id();

    if( has_term( 'adhesivos', 'product_cat', $product_id)){
        echo '<p>* Precios sujetos a cambio sin previo aviso.</p>';
    } elseif (has_term( 'papel-fotografico-inkjet', 'product_cat', $product_id)){
        echo '<p>* Precios sujetos a cambio sin previo aviso.</p>';
    } elseif(has_term( 'laminados-fotograficos', 'product_cat', $product_id)){
        echo '<p>* Precios sujetos a cambio sin previo aviso.</p>';
    } else {
        echo '<p>* Precios sujetos a cambio sin previo aviso</p><p>* Estos precios no incluye costos por retoque, ajuste, diseño o manipulación de imágenes.</p>';
    };


    echo '</div></div>';
};

/* Agregar texto para revisar bandeja de entrada

add_action('woocommerce_before_thankyou', 'dcms_before_thankyou',10,1);
function dcms_before_thankyou(){
    echo "<h3> Revisa tu entrada de correo no deseado.</h3>";
} */

/*** MOSTRAR IMAGEN DE COMPRA **/
function dl_add_images_woocommerce_emails( $output, $order ) {
 
 static $run = 0;
 
 if ( $run ) {
 return $output;
 }
 
 $args = array(
 'show_image' => true,
 'image_size' => array( 80, 80 ),
 );
 
 $run++;
 
 return wc_get_email_order_items( $order, $args );
}
add_filter( 'woocommerce_email_order_items_table', 'dl_add_images_woocommerce_emails', 10, 2 );



