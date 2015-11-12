<?php 


#-----------------------------------------------------------------#
# SVG media uploads
#-----------------------------------------------------------------#
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

#-----------------------------------------------------------------#
# Randomize Sliders
#-----------------------------------------------------------------#
// get a list of all available sliders
$my_sliders = new RevSlider();
 
// grab the "alias" names of the sliders
$my_slider_array = $my_sliders->getAllSliderAliases();
 
// randomize magic
$my_slider_keys = array_keys($my_slider_array);
$my_random_slider_alias = $my_slider_array[$my_slider_keys[rand(0, count($my_slider_keys) - 1)]];
 
// add the random slider to the page
putRevSlider($my_random_slider_alias); 

?>