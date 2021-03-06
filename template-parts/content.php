<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Anti-Flash-White
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				anti_flash_white_social_icons();
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php anti_flash_white_theme_posted_on(); ?>

		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( '<br/>Continue reading %s <span class="meta-nav">&rarr;</span>', 'Anti-Flash-White' ), array( 'span', 'br' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text btn btn-success">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'Anti-Flash-White' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<hr/>
		<?php 
			if(is_single()){
				anti_flash_white_theme_entry_footer(); 
			}
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
