<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage techdk
 * @since techdk 1.0
 */

include "header.php";
?>

<div class="cover coverimage coversingle">
	<img src="<?php echo bloginfo('template_directory'); ?>/img/kontakt.jpg" alt="">
	<div class="table">
		<div class="cell">
			<div class="cover-content">
				<?php if ( have_posts() ) : ?>
				<h1 class="search-title">
					<?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'local' ); ?>: "<?php the_search_query(); ?>"
					
				</h1>

				<?php 
				else :
					get_template_part( 'content', 'none' );
				endif;
				?>
			</div>
		</div>
	</div>
</div>

<section id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<a href="<?php the_permalink() ?>">
			<h2><?php the_title(); ?></h2>
		</a>
	<?php endwhile; ?> 
	

<?php else : ?> 

	<?php _e( 'Nothing Found' ); ?> 
<?php endif; ?>

</div><!-- #content -->
</section><!-- #primary -->

<?php
include "footer.php";
?>
