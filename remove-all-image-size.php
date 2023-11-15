<?php

// Remove all Wordpress image size

add_filter( 'intermediate_image_sizes_advanced', 'lw_remove_default_images' );
function lw_remove_default_images( $sizes ) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);
    unset( $sizes['medium_large']);
    unset( $sizes['1536x1536']);
    unset( $sizes['2048x2048']);
    return $sizes;
}

// add your own size if needed 

function lw_custom_image_size() {
    add_image_size( 'mobile-size', 600, 400 ); // crop but keep original ratio
    add_image_size( 'tablet-size', 800, 600, true ); // hard crop

}
add_action( 'after_setup_theme', 'lw_custom_image_size' );
