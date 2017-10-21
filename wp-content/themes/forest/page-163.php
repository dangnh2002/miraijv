<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package forest
 */

get_header(); ?>

	<!--<div id="primary-mono" class="content-area <?php do_action('forest_primary-width') ?> page">-->
		<main id="main" class="site-main" role="main">
			<div class="main-left">
				<?php dynamic_sidebar('g-map'); ?>
			</div>
			<div class="main-right">
				<div class="main-right-form">
				<?php echo do_shortcode('[contact-form-7 id="206" title="Contact form ja"]') ?>
				</div>
			</div>
		</main><!-- #main -->
	<!--</div> #primary -->
<?php get_footer(); ?>
