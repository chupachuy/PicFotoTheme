<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blossom_Shop
 */
    /**
     * Doctype Hook
     * 
     * @hooked blossom_shop_doctype
    */
    do_action( 'blossom_shop_doctype' );
?>
<head itemscope itemtype="http://schema.org/WebSite">
	<?php 
    /**
     * Before wp_head
     * 
     * @hooked blossom_shop_head
    */
    do_action( 'blossom_shop_before_wp_head' );
    
    wp_head(); ?>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.theme.default.min.css">
   <!-- FAVICON -->

    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


   <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-8JL22NYP2F"></script>
   <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());

     gtag('config', 'G-8JL22NYP2F');
   </script>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<?php
    
    wp_body_open();
    
    /**
     * Before Header
     *  
     * @hooked blossom_shop_page_start - 20 
    */
    do_action( 'blossom_shop_before_header' );
    
    /**
     * Header
     * @hooked blossom_shop_sticky_bar - 10
     * @hooked blossom_shop_header - 20     
    */
    do_action( 'blossom_shop_header' );
    
    /**
     * Before Content
     * 
     * @hooked blossom_shop_show_banner - 5
     * @hooked blossom_shop_featured_section - 10
    */
    do_action( 'blossom_shop_after_header' );
    
    /**
     * Content
     * 
     * @hooked blossom_shop_content_start
    */
    do_action( 'blossom_shop_content' );