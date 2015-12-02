<?php
/*
Template Name: Kontakt
*/
?>
<?php
include 'header.php'
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div class="cover coverimage" style="background: url(<?php echo $url ?>)">
		<div class="table">
			<div class="cell">
				<div class="cover-content">
					<a onclick="window.history.back()" class="backbutton"><h3>Tilbage</h3></a>
					<h1><?php the_field('cover_title'); ?></h1>
					<p><?php the_field('cover_desc'); ?></p>
					<button>Kontakt os nu<img src="<?php bloginfo('template_directory'); ?>/img/play.png" alt=""></button>
				</div>
			</div>
		</div>
		<div class="redblock"></div>
	</div>
	<div class="thegrid clearfix">
		<div class="grid-1-2">
			<div class="table">
				<div class="cell">
					<div class="content">
						<div class="textwrap reg">
							<div class="table">
								<div class="cell">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="grid-1-2 yellow">
			<div id="map"></div>
		</div>
		
		<div class="tellwrapper clearfix">
			<div class="tellwhatsnext">
				<div class="table">
					<div class="cell">
						<img src="<?php bloginfo('template_directory'); ?>/img/kontakt.png" alt="Bliv kontaktet af techdk">
						<div class="textwrap">
							<h4>Bliv Kontaktet</h4>
							<p>Udfyld skemaet nedenunder og få svar på dine spørgsmål</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php echo do_shortcode('[contact-form-7 id="221" title="kontaktformen"]'); ?>

	</div>
</div>
<?php endwhile; endif; ?>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
	var mapCanvas = document.getElementById('map');
	var mapOptions = {
		center: new google.maps.LatLng(55.4030969, 10.4103198),
		zoom: 14,
		scrollwheel: false,
		disableDefaultUI: true,
		mapTypeId: google.maps.MapTypeId.ROADMAP,

	}

	var map = new google.maps.Map(mapCanvas, mapOptions)
	map.set('styles', [
	{
		"stylers": [
		{ "hue": "#FFD97F" }
		]
	}
	]);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php
include 'footer.php'
?>