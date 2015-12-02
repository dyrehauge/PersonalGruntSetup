<?php
/*
Template Name: Tilmelding
*/
?>

<?php
include 'header.php'
?>

<div class="cover coverimage">
	<?php the_post_thumbnail(); ?>
	<div class="table">
		<div class="cell">
			<div class="cover-content">
				<a onclick="window.history.back()" class="backbutton"><h3>Tilbage</h3></a>
				<h1><?php the_field('cover_title'); ?></h1>
				<p><?php the_field('cover_desc'); ?></p>
				<button>
					<a href="#tilmelding"><?php the_field('button_text'); ?><img src="<?php bloginfo('template_directory'); ?>/img/play.png" alt="">
					</a>
				</button>
			</div>
		</div>
	</div>
	<div class="whiteblock"> 
	</div>
	<div class="theblock">
		<ul class="infoblok">
			<li><img src="../wp-content/themes/techdk/img/date.png" alt="">10. oktoberklokken 11:00 - 16:00</li>
			<li><img src="../wp-content/themes/techdk/img/place.png" alt="">Slagteriet - Rugårdsvej 5, 5000 Odense C</li>
		</ul>      
	</div>
</div>
<div class="thegrid clearfix">
	<div class="grid-1-2">
		<div class="table">
			<div class="cell">
				<div class="content">
					<div class="textwrap reg">
						<div class="table">
							<div class="cell">
								<div id="tab-1" class="tab-content current">
									<h2><?php the_field('tab1_title'); ?></h2>
									<p><?php the_field('tab1_content'); ?></p>
								</div>
								<div id="tab-2" class="tab-content">
									<h2><?php the_field('tab2_title'); ?></h2>
									<p><?php the_field('tab2_content'); ?></p>
								</div>
								
								
								<ul class="tabs big">
									<li class="tab-link current" data-tab="tab-1"><?php the_field('tab1_title'); ?></li>
									<li class="tab-link" data-tab="tab-2"><?php the_field('tab2_title'); ?></li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="grid-1-2 black coverimage">
		<img src="<?php the_field('video'); ?>">
		<h4 class="videotitle"><?php the_field('video_title'); ?></h4>
	</div>
	<div id="tilmelding" class="fullwidth">
		<a href="<?php bloginfo('template_directory'); ?>/img/invitation_a4_01.pdf" class="getpdf"></a>
		<?php echo do_shortcode( '[contact-form-7 id="48" title="Tilmelding"]' ); ?>
<!-- 		<div class="velvets">
			<div class="bluevelvet col-1-3"></div>
			<div class="redvelvet col-1-3"></div>
			<div class="yellowvelvet col-1-3"></div>
		</div> -->
	</div>

	<div class="speakers">
		<div class="table">
			<div class="cell">
				<h2>Keynote speakers</h2>

				<?php
				$args = array( 'post_type' => 'speakers', 'posts_per_page' => 4 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();

				?>
				<div class="speaker">
					<div class="centerus">
						<div class="imgwrap">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="textwrap">
							<h4><?php the_title(); ?></h4>
							<span><?php the_field('speaker_worktitle'); ?></span>
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
			<?php endwhile;?>
		</div>
	</div>
</div>

<div class="grid-1-2">
	<div class="table">
		<div class="cell">

			<div class="imgwrap coverimage">
				<img class="play" src="<?php bloginfo('template_directory'); ?>/img/slagteriet.jpg" alt="">
			</div>
			<a href="http://www.slagteriet.com/">
				<div class="linkwrap">
					<div class="table">
						<div class="cell">
							<div class="textwrap">
								<h4>Se hvilke rammer der danner topmødet.</h4>
								<span class="jobtitle">gå til slagteriets website</span>
								<img class="play" src="<?php bloginfo('template_directory'); ?>/img/play.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
<div class="grid-1-2">
	<div class="table">
		<div class="cell">
			<div class="content">
				<div class="textwrap reg">
					<div class="table">
						<div class="cell">
							<h2>Du er inviteret!</h2>
							<p>Du er én af de udvalgte nøglepersoner, som vi inviterer, fordi vi ved at du kan præge Odense og din egen
								virksomheds udvikling. Hvordan tiltrækker vi nye talenter? Hvordan fastholder vi dem, der allerede bor
								her? Det er, hvad topmødet handler om. Se programmet på bagsiden.</p>

								<a href="<?php bloginfo('template_directory'); ?>/img/invitation_a4_01.pdf"  class="pdfthebutton" target="_BLANK">
									Se invitation
								</a>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include 'footer.php'
?>