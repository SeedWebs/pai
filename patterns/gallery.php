<?php

/**
 * Title: Pai Gallery
 * Slug: pai-page/gallery
 * Categories: gallery
 * Block Types: core/gallery
 */

?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|bg-1"}}},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|80"}}},"backgroundColor":"bg-3","textColor":"bg-1","layout":{"type":"constrained"}} -->
<div id="gallery" class="wp-block-group has-bg-1-color has-bg-3-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0">GALLERY</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","right":"0","bottom":"var:preset|spacing|50","left":"0"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--40);margin-right:0;margin-bottom:var(--wp--preset--spacing--50);margin-left:0">Please click an image to view at full size.</p>
<!-- /wp:paragraph -->

<!-- wp:gallery {"columns":4,"linkTo":"media","sizeSlug":"full","align":"wide"} -->
<figure class="wp-block-gallery alignwide has-nested-images columns-4 is-cropped"><!-- wp:image {"id":147,"sizeSlug":"full","linkDestination":"media"} -->
<figure class="wp-block-image size-full"><a href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/photo-1.webp"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/photo-1.webp" alt="<?php echo esc_attr_e('Photo 1', 'pai-page'); ?>" class="wp-image-147"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"id":148,"sizeSlug":"full","linkDestination":"media"} -->
<figure class="wp-block-image size-full"><a href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/photo-2.webp"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/photo-2.webp" alt="<?php echo esc_attr_e('Photo 2', 'pai-page'); ?>" class="wp-image-148"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"id":149,"sizeSlug":"full","linkDestination":"media"} -->
<figure class="wp-block-image size-full"><a href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/photo-3.webp"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/photo-3.webp" alt="<?php echo esc_attr_e('Photo 3', 'pai-page'); ?>" class="wp-image-149"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"id":150,"sizeSlug":"full","linkDestination":"media"} -->
<figure class="wp-block-image size-full"><a href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/photo-4.webp"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/photo-4.webp" alt="<?php echo esc_attr_e('Photo 4', 'pai-page'); ?>" class="wp-image-150"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"id":151,"sizeSlug":"full","linkDestination":"media"} -->
<figure class="wp-block-image size-full"><a href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/photo-5.webp"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/photo-5.webp" alt="<?php echo esc_attr_e('Photo 5', 'pai-page'); ?>" class="wp-image-151"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"id":152,"sizeSlug":"full","linkDestination":"media"} -->
<figure class="wp-block-image size-full"><a href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/photo-6.webp"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/photo-6.webp" alt="<?php echo esc_attr_e('Photo 6', 'pai-page'); ?>" class="wp-image-152"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"id":153,"sizeSlug":"full","linkDestination":"media"} -->
<figure class="wp-block-image size-full"><a href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/photo-7.webp"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/photo-7.webp" alt="<?php echo esc_attr_e('Photo 7', 'pai-page'); ?>" class="wp-image-153"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"id":154,"sizeSlug":"full","linkDestination":"media"} -->
<figure class="wp-block-image size-full"><a href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/photo-8.webp"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/photo-8.webp" alt="<?php echo esc_attr_e('Photo 8', 'pai-page'); ?>" class="wp-image-154"/></a></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->