<?php
include 'header.php'
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div class="cover coversingle coverimage" style="background: url(<?php echo $url ?>)">
		<div class="table">
			<div class="cell">
				<div class="cover-content">
					<h1><?php the_field('cover_title'); ?></h1>
					<p><?php the_field('cover_desc'); ?></p>
					<button class="tilmeld">Tilmeld dig nu<img src="<?php bloginfo('template_directory'); ?>/img/play.png" alt=""></button>
				</div>
			</div>
		</div>
	</div>
<?php
endwhile; endif;
?>

<div class="wrapper">
	<div class="content">
		<?php the_content();?>
	</div>
</div>

<?php
include 'footer.php'
?>