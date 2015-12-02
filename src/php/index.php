<?php
include 'header.php'
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div class="cover coverimage" style="background: url(<?php echo $url ?>)">
		<div class="table">
			<div class="cell">
				<div class="cover-content">
					<h1><?php the_field('cover_title'); ?> 
					<div id="words"></div></h1>
					<p><?php the_field('cover_desc'); ?></p>
					<?php $button = get_field('button_text'); ?>
					<?php if(!empty($button)){ ?>
					<button>
						<a href="<?php the_field('button_link'); ?>"><?php echo $button; ?><img src="<?php bloginfo('template_directory'); ?>/img/play.png" alt="">
						</a>
					</button>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	
	<?php the_content(); ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php
include 'footer.php'
?>