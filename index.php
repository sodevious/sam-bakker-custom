<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sam-bakker-custom
 */

get_header(); ?>

	<div class="hero">
			<div class="six columns">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/sam-headshot.png" />
			</div>

			<div class="ten columns alpha">
				<h2>Learn A Simple 3-Step Strategy For Increasing Your Sales Online!</h2>
				<h3>Online marketing training programs to get exceptional results with our training every week!</h3>

				<a href="#">Learn More</a>
				<a href="#" class="cta">Get Started Today</a>
			</div>

			<div class="clearfix"></div>
		</div>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php sam_bakker_custom_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</main>
	</div>



<?php get_sidebar(); ?>
<?php get_footer(); ?>