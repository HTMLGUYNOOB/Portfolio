<?php
add_shortcode('featured_image_callback', function () {
    $url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    if ($url) {
        return '<img src="' . $url . '" class="project-card-img-inside">';
    }
    return '';
});
