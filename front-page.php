<?php
/**
 * Front Page
 * 
 * @package Blossom_Shop
 */

get_header();
    //If any one section are enabled then show custom home page.
    echo '<div id="content" class="site-content">';

        get_template_part( 'sections/banner' ); 
        get_template_part( 'sections/categorias' );
       // get_template_part( 'sections/categories-carroucel' );
        if(current_user_can('administrator')){
            get_template_part( 'sections/promos' );
        }
        get_template_part( 'sections/fotografos' );
        get_template_part( 'sections/youtube-videos' );
        get_template_part('sections/recent_product');
        get_template_part( 'sections/blog');


    echo '</div>';

get_footer(); ?>