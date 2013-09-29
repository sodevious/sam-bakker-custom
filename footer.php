<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sam-bakker-custom
 */
?>

	</section><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">

			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?>

				<aside id="archives" class="widget">
					<h1 class="widget-title"><?php _e( 'Archives', 'sam-bakker-custom' ); ?></h1>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h1 class="widget-title"><?php _e( 'Meta', 'sam-bakker-custom' ); ?></h1>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>

			<div class="clearfix"></div>

			<?php do_action( 'sam_bakker_custom_credits' ); ?>
			<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'sam-bakker-custom' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'Custom Build for Sam Bakker' ), 'Custom Build for Sam Bakker', '<a href="http://nicoledominguez.com/" rel="designer">Nicole Dominguez</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script>var nav = responsiveNav(".nav-collapse");</script>
</body>
</html>