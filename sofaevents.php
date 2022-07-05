
<?php
/**
 * Plugin Name: SofaSurfer Events
 * Description: Lists Events from YAGWUD
 * Author:      SofaSurfer
 * Version:     1.0.1
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// Basic security, prevents file from being loaded directly.
defined( 'ABSPATH' ) or die( 'Cheatin&#8217; uh?' );

/**
 * Theme includes
 *
 * Includes all files from the library directory.
 */

$dir = plugin_dir_path(__FILE__) . 'Library';
foreach(new DirectoryIterator($dir) as $fileinfo) {
  if(!$fileinfo->isDot() && !$fileinfo->isDir() && substr($fileinfo->getFilename(), 0, 1) != '.') {
    $file = basename(dirname($fileinfo->getRealPath())) . '/' . $fileinfo->getFilename();
    require_once $file;
  }
}
unset($dir, $fileinfo, $file);


new SofaEvents\Main();