<?php
    function my_theme_enqueue_styles() {

     $parent_style = 'parent-style'; // Estos son los estilos del tema padre recogidos por el tema hijo.
     wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

     wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ),wp_get_theme()->get('Version'));

}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


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
    $phone = '525568032061';
    $message = 'Quiero información del producto: '.get_the_title().' en '.get_permalink().' ';
    $text = 'Preguntar por Whatsapp';
    $ico = '<img src="'.get_stylesheet_directory_uri().'/images/whatsaap.png" width=50 height=50 />';

    $url = 'https://api.whatsapp.com/send?phone='.$phone.'&amp;text='.str_replace(' ', '%20', $message);
    $link = '<div class="logo-whatsapp"><a class="btn-ask-whatsapp" href="'.$url.'"><i class="fa-brands fa-whatsapp fa-2x"></i> '.$text.'</a></div>';
    /**$link = '<div class="logo-whatsapp"><a class="dc-link" href="'.$url.'" target="_blank">'.$ico. ' <span>'.$text.'</span></a></div>';**/

    echo '<div class="dc-whatsapp-container">'. $link. '</div>';
};
