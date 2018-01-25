<?php
/**
 * Template part for displaying the page hero
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */


$thumbnail = get_the_post_thumbnail_url( null, 'full' );

while ( have_posts() ) : the_post(); ?>

<section class="page-hero" <?php if( $thumbnail ) printf( 'style="background-image: url(%s);"', esc_url( $thumbnail ) ); ?>>
    <div class="container">
        <?php if( ! get_post_meta( get_the_ID(), 'hide_title', true ) ) : ?>

        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title hero-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->
        
        <?php endif; ?>
    </div>
    <div class="section-shape">		
		<svg width="100%" height="70px"><defs><pattern id="sectionshape" preserveAspectRatio="none" style="background-repeat: none;" patternUnits="userSpaceOnUse" x="0" y="0" width="100%" height="700px" viewBox="0 0 100 700"><polygon fill="#ffffff" points="0,70 100,70 100,0 "></polygon></pattern></defs><!-- Background --><rect x="0" y="0" width="100%" height="70px" fill="url(#sectionshape)"></rect></svg>
    </div>
</section>

<?php endwhile ?>