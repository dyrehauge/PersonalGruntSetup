<footer class="clearfix">
	<div class="row">
		<div class="table">
			<div class="cell">
				<img src="<?php echo get_option('td_page_logo'); ?>" alt="">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="table">
			<div class="cell">
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="row">
	<div class="table">
		<div class="cell">
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		<?php endif; ?>

	</div>
</div>
</div>
</footer>
<div class="velvets">
	<div class="col-1-3 yellow"></div>
	<div class="col-1-3 blue"></div>
	<div class="col-1-3 red"></div>
</div>
<?php wp_footer(); ?> 
</body>
</html>