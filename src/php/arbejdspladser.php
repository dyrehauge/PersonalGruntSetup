<?php
include 'header.php'
?>

<div class="cover coverimage">
	<img src="<?php bloginfo('template_directory'); ?>/img/om.jpg" alt="">
	<div class="table">
		<div class="cell">
			<div class="cover-content">
				<a onclick="window.history.back()" class="backbutton"><h3>Arbejdsplads</h3></a>
				<h1>Om Technology Denmark</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, aut fuga. Vero voluptates</p>
				<button>Find arbejdspladser <img src="<?php bloginfo('template_directory'); ?>/img/play.png" alt=""></button>
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
									<h2>Som arbejdsplads</h2>
									<span>- Thomas Nielsen, Proworks IT</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates vitae exercitationem illo inventore cupiditate sunt commodi aliquam quis porro facilis, alias eligendi fugit a. Cupiditate optio nulla, eveniet ratione corporis.Cupiditate optio nulla, eveniet ratione corporis.Cupiditate optio nulla, eveniet ratione corporis.</p>
								</div>
								<div id="tab-2" class="tab-content">
									<h2>Humor</h2>
									<span>- Thomas Nielsen, Proworks IT</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates vitae exercitationem illo inventore cupiditate sunt commodi aliquam quis porro facilis, alias eligendi fugit a. Cupiditate optio nulla, eveniet ratione corporis.Cupiditate optio nulla, eveniet ratione corporis.Cupiditate optio nulla, eveniet ratione corporis.</p>
								</div>
								<div id="tab-3" class="tab-content">
									<h2>Flad Struktur</h2>
									<span>- Thomas Nielsen, Proworks IT</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates vitae exercitationem illo inventore cupiditate sunt commodi aliquam quis porro facilis, alias eligendi fugit a. Cupiditate optio nulla, eveniet ratione corporis.Cupiditate optio nulla, eveniet ratione corporis.Cupiditate optio nulla, eveniet ratione corporis.</p>
								</div>
								
								<ul class="tabs">
									<li class="tab-link current" data-tab="tab-1">God Kaffe</li>
									<li class="tab-link" data-tab="tab-2">Humor</li>
									<li class="tab-link" data-tab="tab-3">Flad Struktur</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="grid-1-2 yellow">
		<video width="100%" height="100%">
			<source src="<?php bloginfo('template_directory'); ?>/img/lw.mp4" type="video/mp4">
				<source src="movie.ogg" type="video/ogg">
					Your browser does not support the video tag.
				</video>
				<h4 class="videotitle">Arbejd hos Universal Robots</h4>
				<div class="VideoIcon">
					<img src="<?php bloginfo('template_directory'); ?>/img/videocam.png" alt="">
				</div>
			</div>
			<div class="grid-1-2 red">
				<div class="table">
					<div class="cell">

						<div class="imgwrap coverimage">
							<img src="<?php bloginfo('template_directory'); ?>/img/fly.jpg" alt="">
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
			<div class="grid-1-2">
				<div class="table">
					<div class="cell">
						<div class="centerimage">
							<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		include 'footer.php'
		?>