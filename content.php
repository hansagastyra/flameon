<?php
/**
 * @package Flameon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php flameon_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'flameon' ) );
				if ( $categories_list ) :
			?>
                                <div class="cat-links">
                                        <?php printf( __( '<i class="fa fa-bookmark fa-fw"></i> %1$s', 'flameon' ), $categories_list ); ?>
                                </div>
                                <?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ' ', 'flameon' ) );
				if ( $tags_list ) :
			?>
                                <div class="tags-links">
                                        <?php printf( __( '<i class="fa fa-tags fa-fw"></i> %1$s', 'flameon' ), $tags_list ); ?>
                                </div>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Read More &raquo;', 'flameon' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'flameon' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
        <footer class="entry-footer">
        <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
            <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'flameon' ), __( '1 Comment', 'flameon' ), __( '% Comments', 'flameon' ) ); ?></span>
        <?php endif; ?>
        <?php edit_post_link( __( 'Edit', 'flameon' ), '<span class="edit-link">', '</span>' ); ?>
        </footer>
</article><!-- #post-## -->
