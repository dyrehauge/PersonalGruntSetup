<?php
/*
Template Name: tilmeld nu.
*/
?>

<?php
include 'header.php'
?>

<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div class="cover coverimage" style="background: url(<?php echo $url ?>)">
	<div class="table">
		<div class="cell">
			<div class="cover-content">
				<h1><?php the_field('cover_title'); ?></h1>
				<p><?php the_field('cover_desc'); ?></p>
			</div>
		</div>
	</div>
	</div>
</div>


<div class="thegrid">
	<div class="grid-1-2">
		<div class="table">
			<div class="cell">
				<div class="content">
					<div class="textwrap reg">
						<div class="table">
							<div class="cell">
								<div id="tilmelding" class="fullwidth">
									<div class="table">
										<div class="cell">
											<?php echo do_shortcode( '[contact-form-7 id="135" title="Tilmeld dig nu"]' ); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
								<h2>Program</h2>
								<ul class="programinfo">
									<li><span>Kl. 14.30:</span> Velkomst – hvad er vores fælles udfordring? CEO Mette Beck-Nielsen, Technology Denmark</li>
									<li><span>Kl. 14.45:</span> Danske virksomheder har alle muligheder for at erobre verden. Så vågn op og invester i talent! Keynote speak ved CEO Anders Hvid, Dare Distrupt</li>
									<li><span>Kl. 15.15:</span> Hvordan løser vi talentudfordringen på Fyn – hvad er det nye, vi gør? Debat med: <br>Anker Boye, borgmester i Odense<br>Jakob Laursen, formand for IT-Fyn<br>
										Michael Goodsite, professor og Institutleder på Teknologi og Innovation, SDU<br>
										Peter Revsbech, adm. direktør for Ordbogen A/S og formand for Technology Denmark.</li>
										<li><span>Kl. 16.00:</span> Winning firms are nothing more than the sum of their talents. Keynote speak ved Professor Dr. Andreas Schotter, IVEY School of Business i Canada.</li>
										<li><span>Kl. 16.30:</span> Afrunding – hvad gør vi herfra? Kristian Skaarup, adm. direktør i Encode og næstformand i Technology Denmark. </li>
									</ul>

				<!-- 					<a href="http://technologydenmark.dk/wp-content/uploads/2015/10/technologydenmark_invitation.pdf"  class="pdfthebutton" target="_BLANK">
										Se invitation
									</a> -->

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