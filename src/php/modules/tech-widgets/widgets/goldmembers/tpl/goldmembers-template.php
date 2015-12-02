<div class="goldmember memberblock">
	<div class="table">
		<div class="cell">
			<img class="member" src="<?php bloginfo('template_directory'); ?>/img/king.png" alt="">Guld Partner
		</div>
	</div>
</div>
<div class="thegrid">
	<?php 
	$args = array( 'post_type' => 'goldmembers');
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div class="col-1-4">
		<div class="table">
			<div class="cell">
				<img src="<?php echo $url; ?>"alt="">
			</div>
		</div>
	</div>

<?php endwhile; ?>
</div>