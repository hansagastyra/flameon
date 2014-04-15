<?php
/**
 * @package Flameon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'flameon' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
                <div class="entry-meta">
			<?php flameon_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
                /* translators: used between list items, there is a space after the comma */
                $categories_list = get_the_category_list( __( ', ', 'flameon' ) );

                /* translators: used between list items, there is a space after the comma */
                $tags_list = get_the_tag_list( '', __( ' ', 'flameon' ) );
                if ( '' != $tags_list ) : ?>
                    <div class="cat-links">
                        <?php printf( __( '<i class="fa fa-bookmark fa-fw"></i> %1$s', 'flameon' ), $categories_list ); ?>
                    </div>
                    <?php endif; ?>
                <?php if ( '' != $categories_list ) : ?>
                    <div class="tags-links">
                        <?php printf( __( '<i class="fa fa-tags fa-fw"></i> %1$s', 'flameon' ), $tags_list ); ?>
                    </div>
                <?php endif; ?>
		<?php edit_post_link( __( 'Edit', 'flameon' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
