<?php

//This is a simple shortcode template outputting HTML for Wordpress.
//To show the shortcode result, use [ra_display_shortcode_result] in a page or compatible field.  

function ra_display_shortcode_template() {
    ob_start();
?>

    <p>HTML output here</p>

<?php
    $content = ob_get_contents();
	ob_end_clean();
	return $content;
}
add_shortcode('ra_display_shortcode_result', 'ra_display_shortcode_template');