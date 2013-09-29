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
	
	<div class="clearfix"></div>

<a href="#">
	<h3 class="testimonial_header">Testimonials</h3>

	<div class="testimonial_banner">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/austin_walsh.jpg" />
	<img src="<?php echo get_template_directory_uri(); ?>/assets/david_bullock.jpg" />
	<img src="<?php echo get_template_directory_uri(); ?>/assets/mark_anastasi.jpg" />
	<img src="<?php echo get_template_directory_uri(); ?>/assets/jason_westland.jpg" />
	<img src="<?php echo get_template_directory_uri(); ?>/assets/joel_peterson.jpg" />
	<img src="<?php echo get_template_directory_uri(); ?>/assets/bill_walsh.jpg" />
	</div>
</a>

	<div class="clearfix"></div>

	<div class="posts_index">

		<h2>Recent Articles</h2>

		<div class="post_tiles">
			<?php while (have_posts()) : the_post(); ?>
				<div class="tile">
					<a href="<?php the_permalink() ?>">
						<?php the_post_thumbnail('homepage-thumb'); ?>
						<div class="overlay_tile">
							<?php the_title() ?>
						</div>
					</a>
				</div>
			<?php endwhile; ?>
		</div>

	<h2>Featured Articles</h2>
	<?php rewind_posts(); ?>

<?php $my_query = new WP_Query('category_name=featured&posts_per_page=5'); ?>

<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
  <!-- Do special_cat stuff... -->
				<div class="tile">
					<a href="<?php the_permalink() ?>">
						<?php the_post_thumbnail('homepage-thumb'); ?>
						<div class="overlay_tile">
							<?php the_title() ?>
						</div>
					</a>
				</div>
<?php endwhile; ?>




	</div>


	<div class="clearfix"></div>

	<div class="ebook">
		<div class="eleven columns alpha">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/ebook.png" />
			<h2>Get Your Business Online!</h2>
			<p><span>Case Studies</span> | <span>A Simple Strategy</span> | <span>Our Best Tactics</span></p>
		</div>

		<div class="five columns omega alpha">
			Form input
		</div>

		<div class="clearfix"></div>
	</div>

<?php get_footer(); ?>