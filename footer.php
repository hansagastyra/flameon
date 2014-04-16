<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Flameon
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
                <div class="theme-footer-text"><?php echo get_theme_mod('theme_footer_text', ''); ?></div>
		<div class="site-info">
			 <?php $themeinfo = wp_get_theme(); printf( __( '%1$s theme by %2$s', 'flameon' ),
                                '<a href="' . $themeinfo->get('ThemeURI') . '" rel="theme-name">' . $themeinfo->get('Name') . '</a>',
                                '<a href="' . $themeinfo->get('AuthorURI') . '" rel="designer">'. $themeinfo->get('Author') . '</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
    </div><!-- #page-container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
