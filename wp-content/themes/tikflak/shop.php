<?php
/**
 * The template for displaying all pages.
 * Template Name: Shop
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
<?php 

global $jck_mwi;
$app = Mage::app();

// Initiate Magento products
$storeId = $app->getStore()->getId(); // Get current store ID
$catalog_categories_handlers = new Mage_Catalog_Model_Category();
$root_category =  $catalog_categories_handlers->getCategories(2,1, true, true, true);
$ids = array();
$categories = array();
foreach($root_category as $category){
	$ids[] = $category->getId();
	$category = Mage::getModel('catalog/category')->load($category->getId());
	$categories[]=$category;
}

$first = true;
$odd = "odd";
?>
	<div id="main" class="middle-container">
	<div id="primary" class="middle">
		<div id="main" role="main" class="col-main">
		<div id="contentpage">
			<div id="contentdroite">
				<div class="fabfr"><?php echo get_post_meta(57,'champ5',true); ?></div>
			</div>
		</div>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php //get_template_part( 'content', 'page' ); ?>
			
			<?php foreach($categories as $category){	?>
			
			<?php $products = $category->getProductCollection()
						->addAttributeToSelect(array('name', 'price', 'short_description','image','small_image','url_key', 'type_coupe'), 'inner');
			
			?>
			<div class="listing-type-grid catalog-listing category-head">
			<h2 class="category-title"><?php	echo $category->getDescription(); ?></h2>
			<div style="clear: both;">&nbsp;</div>
			
				<ol>
						<?php foreach($products as $product){ ?>
						<?php ($odd == 'odd')?$odd='even':$odd='odd';?>
						<li class="product-item item <?php echo $odd?>">
						<div class="product-image-wrapper">
							<a href="<?php  echo $product->getProductUrl();?>">
							<div class="product-image-container">
								<img class="product-image" src="<?php echo (string)Mage::helper('catalog/image')->init($product, 'image')->backgroundColor(240,234,234)->resize(400, 300)?>"/>
							</div>
							</a>
							<div class="product-name-left">
								<div class="product-name-right">
										<a href="<?php  echo $product->getProductUrl();?>">
											<?php //echo $product->getName();?>
											<?php echo $product->getAttributeText('type_coupe');	?>
										</a>
								</div>
							</div>
						</div>

						</li>
						<?php }		?>
				</ol>
			</div>
			<?php }		?>
			
				<?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

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