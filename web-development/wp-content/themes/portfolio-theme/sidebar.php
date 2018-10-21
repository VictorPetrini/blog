<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div id="secondary">
	<?php
		$description = get_bloginfo( 'description', 'display' );
	if ( ! empty( $description ) ) :
	?>
	<h2 class="site-description"><?php echo esc_html( $description ); ?></h2>
	<?php endif; ?>
	<div class="fadein-element">
		<img src="<?php echo get_template_directory_uri(); ?>/images/poza-cub.png" alt="WWW love" id="rotative-image">
	</div>
	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
	<nav role="navigation" class="navigation site-navigation secondary-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
	</nav>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div><!-- #secondary -->
