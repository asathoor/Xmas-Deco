<?php
/*
Plugin Name: XMAS Deco
Plugin URI:
Description: Will decorate your theme with xmas stuff. A reissue of a theme, but now more handy as a plugin.
Version:     3.0
Author:      Per Thykjaer Jensen
Author URI:  https://github.com/asathoor/Xmas-Deco
License:     GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html

Copyright

XMAS Deco is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

(Plugin Name) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with (Plugin Name). If not, see (http://link to your plugin license).
*/

// add the stylesheet
function petj_add_xmas() {
    wp_enqueue_style( 'xmasDeco', plugins_url('xmasBy.css', __FILE__) );
}
add_action( 'wp_enqueue_scripts', 'petj_add_xmas' );
