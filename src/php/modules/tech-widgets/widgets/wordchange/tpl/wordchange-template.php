<?php if(!empty($instance['wordchange'])) {
	?>
	<div id="wordspush">
		<?php
		foreach($instance['wordchange'] as $counter) {?>
			<div class="word"><?php echo trim($counter['counter_title']); ?></div>
			<?php
		}
		?>
	</div>
	<?php
}