<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div id="main" class="middle-container">
	<div id="primary" class="middle">
		<div id="main" role="main" class="col-main">
				<div id="contentpage">
			    <div id="contentgauche">
			<?php if (function_exists('mybread')) mybread();?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', 'page' ); ?>
							
						<?php endwhile; // end of the loop. ?>
			
			</div>
			
			<div id="contentdroite">
			<div class="fabfr"><?php echo get_post_meta(57,'champ5',true); ?></div>
			<?php get_sidebar(); ?>
			<h2>La boutique en ligne</h2>
			</div></div>
		</div><!-- #content -->
		<!--  
		<div class="col-right side-col sidebar">
		<?php //the_block('right');?>
			<?php // get_sidebar(); ?>
		</div>
		
	</div>--><!-- #primary -->
</div>
</div>
<div class="footer-container">
	<div class="footer">
	<?php 	the_block('footer');?>
	</div>
</div>
<?php //get_footer(); ?>