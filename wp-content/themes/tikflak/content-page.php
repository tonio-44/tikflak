<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
<?php the_content(); ?>
<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );

	foreach( $mypages as $page ) {	
	$excerpt = $page->post_excerpt;
	/*$excerpt = apply_filters('the_excerpt', $excerpt);*/
	
	$content = $page->post_content;
		if ( ! $content ) // Check for empty page
			continue;

		$content = apply_filters( 'the_content', $content );
	?>
		<div id="<?php echo $page->post_name; ?>">
		<h2><?php echo $page->post_title; ?></h2>
		<div class="textesp"><?php echo $page->post_excerpt; ?></div>
        <div class="ensavoir">En savoir plus</div>
        </div>
	<?php }	?>




			
	<!-- .entry-content -->
	</article><!-- #post -->
