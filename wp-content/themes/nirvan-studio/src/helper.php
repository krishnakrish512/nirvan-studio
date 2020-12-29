<?php
use function NextGenImage\getImageInWebp;
use function NextGenImage\resizeImage;

/**
 * Function to get resized image in webp and original format
 *
 * @param $url string
 * @param array $size =[with x height]
 *
 * @return array
 */
function getResizedImage($url, $size = array())
{
    $webpImage = getImageInWebp(ABSPATH . str_replace(site_url(), "", $url), $size);
    $fileType = wp_check_filetype($url);
    $image = resizeImage(ABSPATH . str_replace(site_url(), "", $url), $fileType['ext'], $size);

    return array(
        'webp' => $webpImage,
        'orig' => $image
    );
}


/**
 * function to add meta tags to event single page.
 * these meta tags are required for proper functioning of facebook share feature
 */
function ecommerce_share_meta() {
	global $post;

	if ( $post ) {
		if (is_singular('career')) {
//			$career = wc_get_career( $post->ID );

			$image_url = get_the_post_thumbnail_url($post->ID, 'full');
			$image = getResizedImage( $image_url, [ 300, 156 ] );
//            var_dump($image);
//            exit();

			?>
            <meta property="og:url" content="<?= get_the_permalink( $post->ID ) ?>"/>
            <meta property="og:type" content="website"/>
            <meta property="og:title" content="<?php the_title(); ?>"/>
            <meta property="og:description" content="<?php the_content();?>"/>
            <meta property="og:image" content="<?= $image['orig'] ?>"/>
            <meta property="og:image:width" content="300"/>
            <meta property="og:image:height" content="156"/>
			<?php
		}
	}
}

add_action( 'wp_head', 'ecommerce_share_meta' );

