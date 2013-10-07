<?php
/**
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

			<a href="http://www.sambakker.com/learn-more/">Learn More</a>
			<a href="http://www.sambakker.com/get-started/" class="cta">Get Started Today</a>
		</div>
		<div class="clearfix"></div>
	</div>
	
	<div class="clearfix"></div>

	<div class="testimonial_container">
		<h2>What The Experts Are Saying</h2>
			<div class="tile">
				<a href="/testimonials">
					<div class="overlay_tile_top">
						"$20,000 in less than 48 hours"
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/austin_walsh.jpg" />
					<div class="overlay_tile_bottom">
						<b>Austin Walsh</b> - Author, Speaker & Online Marketer
					</div>
				</a>
			</div>

			<div class="tile">
				<a href="/testimonials">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/david_bullock.jpg" />
					<div class="overlay_tile_top">
						"Build a massive list"
					</div>
					<div class="overlay_tile_bottom">
						<b>David Bullock</b> - CEO and Co-Founder of CEO Mastery
					</div>
				</a>
			</div>

			<div class="tile">
				<a href="/testimonials">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/bill_walsh.jpg" />
					<div class="overlay_tile_top">
						"Make more sales for your business online"
					</div>
					<div class="overlay_tile_bottom">
						<b>Bill Walsh</b> - America's Business Expert
					</div>
				</a>
			</div>

			<div class="tile">
				<a href="/testimonials">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/joel_peterson.jpg" />
					<div class="overlay_tile_top">
						"I recommend this to anyone"
					</div>
					<div class="overlay_tile_bottom">
						<b>Joel Peterson</b> - Author, Speaker & Online Marketer
					</div>
				</a>
			</div>

			<div class="tile">
				<a href="/testimonials">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/austin_walsh.jpg" />
					<div class="overlay_tile_top">
						"Keep up with the newest trends"
					</div>
					<div class="overlay_tile_bottom">
						<b>Jason Westland</b> - CEO & Founder
					</div>
				</a>

		</div>
	</div>

	<div class="clearfix"></div>

	<div class="posts_index">

	<div class="post_container">
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
	</div>

	</div>

	<div class="clearfix"></div>

	<div class="ebook">
		<div class="eleven columns alpha">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/ebook.png" class="ebookPhoto" />
			<h2>Get Your Business Online!</h2>
			<p><span>Case Studies</span> | <span>A Simple Strategy</span> | <span>Our Best Tactics</span></p>
		</div>

		<div class="five columns omega alpha">
			<?php echo do_shortcode('[contact-form-7 id="495" title="Newsletter"]') ?>
		</div>
		
		<div style="clear: both; display: block;">&nbsp;</div>
	</div>


<?php get_footer(); ?>