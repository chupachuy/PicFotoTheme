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

    echo '</div>';

get_footer(); ?>