<div class="personale">
	<?php 
	$args = array( 'post_type' => 'personale');
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div class="individ">
		<div class="particles">
			<img class="first" src="<?php bloginfo('template_directory') ?>/img/b1.png">
			<img class="second" src="<?php bloginfo('template_directory') ?>/img/b2.png">
			<img class="third" src="<?php bloginfo('template_directory') ?>/img/b3.png">
		</div>
		<div class="imgwrap">
			<img src="<?php echo $url; ?>"alt="">
		</div>

		<div class="textwrap">
			<h4><?php the_title(); ?></h4>
			<?php the_excerpt(); ?>
		</div>
	</div>
<?php endwhile; ?>
</div>