<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Flameon
 */

get_header(); ?>

	<div id="primary" class="small-12 medium-10 medium-centered columns content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Whoops! The page can&rsquo;t be found.', 'flameon' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Nothing was found at this location. Wanna search something?', 'flameon' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>