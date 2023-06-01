<?php

$ASSEST_QUOTE_FORMAT = [
    'design1' => esc_url(plugin_dir_url(dirname(__FILE__)) . 'public/assets/quote-format/design1.png'),
    'design2' => esc_url(plugin_dir_url(dirname(__FILE__)) . 'public/assets/quote-format/design2.png'),
    'design3' => esc_url(plugin_dir_url(dirname(__FILE__)) . 'public/assets/quote-format/design3.png')
];

$GLOBALS['ASSEST_QUOTE_FORMAT'] = $ASSEST_QUOTE_FORMAT;

function remove_image_background($image_url) {
    $image_path = ABSPATH . str_replace(site_url('/'), '', $image_url);
    $image = imagecreatefromstring(file_get_contents($image_path));
    $width = imagesx($image);
    $height = imagesy($image);
    $new_image = imagecreatetruecolor($width, $height);
    imagesavealpha($new_image, true);
    $transparent_color = imagecolorallocatealpha($new_image, 0, 0, 0, 127);
    imagefill($new_image, 0, 0, $transparent_color);
    imagecopy($new_image, $image, 0, 0, 0, 0, $width, $height);
    imagepng($new_image, $image_path);
    imagedestroy($image);
    imagedestroy($new_image);
}
