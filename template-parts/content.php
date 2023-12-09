<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blossom_Shop
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); if( ! is_single() ) echo ' itemscope itemtype="https://schema.org/Blog"'; ?>>
	<?php 
        /**
         * @hooked blossom_shop_post_thumbnail - 10
        */
        do_action( 'blossom_shop_before_post_entry_content' );
        
        if( ! is_single() ) echo '<div class="content-wrap">';

        /**
         * @hooked blossom_shop_entry_header  - 10 
         * @hooked blossom_shop_entry_content - 15
         * @hooked blossom_shop_entry_footer  - 20
        */
        do_action( 'blossom_shop_post_entry_content' );

        if( ! is_single() ) echo '</div>';
    ?>
    <div class="container social-photographers">
        <hr>
        <div class="row text-center">
            <?php if( get_field('facebook') ): ?>
            <a target="_blank" href="<?php the_field('facebook'); ?>"><i class="fa-brands fa-facebook fa-1x"></i></a>
            <?php endif; ?>
            <?php if( get_field('instagram') ): ?>
            <a target="_blank" href="<?php the_field('instagram'); ?>"><i class="fa-brands fa-instagram fa-1x"></i></a>
            <?php endif; ?>
            <?php if( get_field('whatsapp') ): ?>
            <a target="_blank" href="<?php the_field('whatsapp'); ?>"><i class="fa-brands fa-whatsapp fa-1x"></i></a>
            <?php endif; ?>
            <?php if( get_field('tiktok') ): ?>
            <a target="_blank" href="<?php the_field('tiktok'); ?>"><i class="fa-brands fa-tiktok fa-1x"></i></a>
            <?php endif; ?>
            <?php if( get_field('twitter') ): ?>
            <a target="_blank" href="<?php the_field('twitter'); ?>"><i class="fa-brands fa-twitter fa-1x"></i></a>
            <?php endif; ?>
            <?php if( get_field('youtube') ): ?>
            <a target="_blank" href="<?php the_field('youtube'); ?>"><i class="fa-brands fa-youtube fa-1x"></i></a>
            <?php endif; ?>
            <?php if( get_field('webpage') ): ?>
            <a target="_blank" href="<?php the_field('webpage'); ?>"><i class="fa-solid fa-link fa-1x"></i></i></a>
            <?php endif; ?>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->