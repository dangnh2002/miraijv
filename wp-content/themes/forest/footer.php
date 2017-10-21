<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package forest
 */
?>

	</div><!-- #content -->

	<?php get_sidebar('footer'); ?>
	
	<footer id="colophon" class="site-footer" role="contentinfo" style="display:none">
		<div class="site-info container">
			<?php printf( __( 'Powered by %1$s.', 'forest' ), '<a href="'.esc_url("https://rohitink.com/2016/01/05/forest-multipurpose-theme/").'" rel="nofollow">Forest Theme</a>' ); ?>
			<span class="sep"></span>
			<?php echo ( get_theme_mod('forest_footer_text') == '' ) ? ('&copy; '.date('Y').' '.get_bloginfo('name').__('. All Rights Reserved. ','forest')) : esc_html( get_theme_mod('forest_footer_text') ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php wp_footer();?>
</body>
</html>
