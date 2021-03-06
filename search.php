<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Flameon
 */

get_header(); ?>

	<div id="primary" class="small-12 medium-8 columns content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'flameon' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php flameon_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
        <div id="secondary" class="small-12 medium-4 columns widget-area" role="complementary">
            <?php get_sidebar(); ?>
        </div>
<?php get_footer(); ?>