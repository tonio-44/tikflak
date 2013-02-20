<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div id="main" class="middle-container">
	<div id="primary" class="middle">
		<div id="main" role="main" class="col-main">
				<div id="texteacc">
					<div class="champ1"><?php echo get_post_meta(57,'champ1',true); ?></div>
					<div class="champ2"><?php echo get_post_meta(57,'champ2',true); ?></div>
					<div class="champ3"><?php echo get_post_meta(57,'champ3',true); ?></div>
					<div class="champ4"><?php echo get_post_meta(57,'champ4',true); ?></div>
					</div>
					
					<div id="homepage"><div id="imagefond"><img src="<?php echo get_template_directory_uri(); ?>/images/hometikflak.png"></div>
				
					<div id="textdroite">
					<div class="champ5"><?php echo get_post_meta(57,'champ5',true); ?></div>
					<div class="champ6"><?php echo get_post_meta(57,'champ6',true); ?></div>
					<div class="champ7"><?php echo get_post_meta(57,'champ7',true); ?></div>
					</div>
					</div>

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