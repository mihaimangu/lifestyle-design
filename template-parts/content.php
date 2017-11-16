<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package LifeStyle_Design
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (has_post_thumbnail()){ ?>
        <section class="article-image">
            <?php the_post_thumbnail(); ?>
        
        </section>
     <?php }; ?>
    
    
    <section class="article-text">
	<header class="entry-header">
		<?php
        
        if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php lifestyle_design_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif;
        
        
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		 ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
            
			// $content = get_the_content( sprintf(
//				/* translators: %s: Name of current post. */
//				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lifestyle-design' ), array(     'span' => array( 'class' => array() ) ) ),
//				the_title( '<span class="screen-reader-text">"', '"</span>', false )
//			) ); 
            $content = substr( get_the_content(),0, 500) ;
            $content = $content . "...";
            $content = apply_filters('the_content', $content);
            echo $content;
            
        

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lifestyle-design' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php lifestyle_design_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	</section>
	
</article><!-- #post-## -->
