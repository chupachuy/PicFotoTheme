<section id="videos-youtube" class="">
	<div class="container">
		<div class="title-wrap text-center">
			<h2>Ultimos Videos</h2>
		</div>
		<div class="videos-youtube">
			<?php
	            $args = array(
	                'post_type' => 'video',
	                'orderby' => 'rand',
	                'posts_per_page' => -1,
	            );
	            $the_query = new WP_Query( $args );
	          ?>
	        <?php if ( $the_query->have_posts() ) : ?>
          	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="video-item">
				<iframe width="90%" height="200" src="https://www.youtube.com/embed/<?php the_field('video_youtube'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				<!--<div class="ellipse two-lines mt-2">
					<?php the_excerpt(); ?>
				</div>-->
			</div>
			<?php endwhile; ?>
	          <?php wp_reset_postdata(); ?>
	        <?php endif; ?>
		</div>
	</div>
</section>