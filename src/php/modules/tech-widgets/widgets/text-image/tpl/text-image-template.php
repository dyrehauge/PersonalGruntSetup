<?php if(!empty($instance['title']) && !empty($instance['image'])) {
	$img = wp_get_attachment_image_src($instance['image'], 'text_image');
	if(!empty($img)) {
		$img = $img[0];
	}
	?>
	<section class="thegrid clearfix">
		<div class="grid-text-image">
			<?php 
			if($instance['image_position'] == 'left') {
				?>
				<div class="grid-1-2 coverimage<?php echo !$instance['cover'] ? ' do-not-cover' : '' ?>" style="background-image:url(<?php echo $img; ?>); 50% 50% no-repeat">
				</div>
				<?php
			}
			?>
			<div class="grid-1-2<?php echo $instance['image_position'] == 'left' ? ' swapgrid' : ''; ?> <?php echo $instance['colorbox'] ?>">
				<div class="content">
					<div class="textwrap reg">
						<div class="table">
							<div class="cell">
								<h2><?php echo $instance['title']; ?></h2>
								<?php 
								if(!empty($instance['sub_title'])) {
									echo '<span>' . $instance['sub_title'] . '</span>';
								}
								if(!empty($instance['text'])) {
									echo '<p>' . $instance['text'] . '</p>';
								}
								?>
								<?php 
								if(!empty($instance['button']['button_text']) && !empty($instance['button']['button_url'])) {
									$url = str_replace('post: ', '', $instance['button']['button_url']);
									if(is_numeric($url)) {
										$url = get_permalink($url);
									}
									?>
									<a href="<?php echo $url; ?>" title="<?php echo $instance['button']['button_text']; ?>">
										<button><?php echo $instance['button']['button_text']; ?></button>
									</a>
									<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php 
			if($instance['image_position'] == 'right') {
				?>
				<div class="grid-1-2 coverimage<?php echo !$instance['cover'] ? ' do-not-cover' : '' ?>" style="background-image:url(<?php echo $img; ?>);">
				</div>
				<?php
			}
			?>
		</div>
	</section>
	<?php
}