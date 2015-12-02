
<div class="news">
	<div class="table">
		<div class="cell">
			<?php
			query_posts( array( 'post_type' => 'post') );
			if ( have_posts() ) : while ( have_posts() ) : the_post();

			?>
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<a href="<?php the_permalink(); ?>" class="newsblock">
				<div class="imgwrap" style="background: url(<?php echo $url ?>)">
				</div>
				<div class="textwrap">
					<span><?php
					$category = get_the_category();
					echo $category[0]->cat_name;
					?> / <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' siden'; ?>
				</span>
				<h4><?php the_title(); ?></h4>
				<div class="sep"></div>
				<p><?php echo get_news_text(); ?></p>
			</div>
		</a>
	<?php endwhile; else : ?>
	<p>
		<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
	</p>
<?php endif; ?>
<?php wp_reset_query(); ?>
</div>
</div>
</div> 	
