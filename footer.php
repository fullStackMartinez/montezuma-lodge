<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package New_Montezuma
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="footer-logo">
		<p><img src="<?php bloginfo('template_directory'); ?>/images/masonic-logo.png" class="footer-logo-image" alt = "example"></p>
			<img src="<?php bloginfo('template_directory'); ?>/images/footer-logo-name.png" class="footer-logo-name" alt = "example">
		</div>

		<div class="footer-info">
			<ul>
				<li>431 PASEO DE PERALTA</li>
				<li>|</li>
				<li>SANTA FE, NEW MEXICO 87501</li>
				<li>(505) 982 0971</li>
				<li>|</li>
				<li><a href="mailto:HIRAM@MONTEZUMALODGE.ORG">HIRAM@MONTEZUMALODGE.ORG</a></li>
				<li>|</li>
				<!-- Add Facebook icon in footer-->
				<li><i class="fab fa-facebook-square"></i></li>
			</ul>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
