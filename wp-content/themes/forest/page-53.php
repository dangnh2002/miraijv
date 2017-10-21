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

	<div class="content-area col-md-12 page">
		<main id="main" class="site-main container" role="main">
			<div class="main-title">
				<h2><?php echo _e('LĨNH VỰC HOẠT ĐỘNG','forest');?></h2><hr/>
			</div>
			<div class="main-content row">
				<div class="main-item col-md-4">
				<a href="<?php echo get_category_link(12);?>">
					<img src="http://miraijv.com.vn/wp-content/uploads/2017/10/thuong_mai.jpg" alt="thuong_mai"/>
					<h3><?php echo _e('THƯƠNG MẠI','forest')?></h3>
				</a>
				</div>
				<div class="main-item col-md-4">
				<a href="<?php echo get_category_link(18);?>">
					<img src="http://miraijv.com.vn/wp-content/uploads/2017/10/tu_van.jpg" alt="tu_van"/>
					<h3><?php echo _e('GIỚI THIỆU NHÂN LỰC','forest')?></h3>
				</a>
				</div>
				<div class="main-item col-md-4">
				<a href="<?php echo get_category_link(28);?>">
					<img src="http://miraijv.com.vn/wp-content/uploads/2017/10/du_hoc.jpg" alt="du_hoc"/>
					<h3><?php echo _e('DU HỌC NHẬT BẢN','forest')?></h3>
				</a>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
