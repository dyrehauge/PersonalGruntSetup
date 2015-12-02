<?php
/*
Template Name: omos
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
					<a href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?><img src="<?php bloginfo('template_directory'); ?>/img/play.png" alt="">
					</a>
				</button>
			</div>
		</div>
	</div>
	<div class="redblock"></div>
</div>
<div class="thegrid clearfix">
	<div class="grid-1-2 red">
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
								
								<ul class="tabs">
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
	<div class="grid-1-2 black">
		<video src="<?php the_field('video'); ?>" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<h4 class="videotitle"><?php the_field('video_title'); ?></h4>
		<div class="VideoIcon">
			<img src="<?php bloginfo('template_directory'); ?>/img/videocam.png" alt="">
		</div>
	</div>
	<div class="grid-1-2 red">
		<div class="table">
			<div class="cell">

				<div class="imgwrap coverimage">
					<?php the_post_thumbnail(); ?>
				</div>
				<a href="">
					<div class="linkwrap">
						<div class="table">
							<div class="cell">
								<div class="textwrap">
									<h4>Anders Christensen</h4>
									<span class="jobtitle">Software Udvikler, Technology Denmark</span>
									<img class="play" src="<?php bloginfo('template_directory'); ?>/img/play.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="grid-1-2 blue">
		<div class="table">
			<div class="cell">
				<div class="centerimage">
					<img class="padding" src="<?php echo get_option('td_page_logo'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include 'footer.php'
?>