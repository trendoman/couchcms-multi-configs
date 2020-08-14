<?php
if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

// Config with concept "convention over configuration": this file (config.php) loads specialized files for domain.
//
// Create config file (or rename config.example.php) named after server's domain with "@" delimiter.
//
//      domain >> website.com/couch
//      file >> website.com/couch/config.php (this "loader" file)
//      file >> website.com/couch/config@website.com.php (actual config file)
//
// If the same domain has another CouchCMS installation inside a subfolder (ex. /demo/gallery/ ) replace slashes with delimiter "#":
//
//      main CouchCMS installation on domain >> website.com/couch
//      separate CouchCMS installation (in the same domain) >> website.com/demo/gallery/couch
//      file >> website.com/couch/config.php (this "loader" file for main installation)
//      file >> website.com/couch/config@website.com.php (actual config file for main installation)
//      file >> website.com/demo/gallery/couch/config.php (this "loader" file for separate installation in subfolder)
//      file >> website.com/demo/gallery/couch/config@website.com#demo#gallery.php (actual config file for separate installation in subfolder)
//

$serverConfig = 'config'.'@'.getenv('SERVER_NAME').'.php';

$installedInSubfolder = trim(str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(K_COUCH_DIR) ), "/");
if( $installedInSubfolder ) $serverConfig .= '#'.str_replace('/', '#', $installedInSubfolder);

return require($serverConfig);
