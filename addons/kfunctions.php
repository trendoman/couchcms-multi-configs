<?php
if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

// kfunctions file with concept "convention over configuration": this file (kfunctions.php) loads specialized files for database.
//
// Create kfunctions file (or rename kfunctions.example.php) named after installation's database with "#" delimiter.
//
//      domain >> website.com/couch/
//      file >> website.com/couch/addons/kfunctions.php (this "loader" file)
//      file >> website.com/couch/addons/kfunctions#mycouchdb.php (actual content of kfunctions)
//
// If the same domain has another CouchCMS installation inside a subfolder (ex. /demo/gallery/ ) following happens:
//
//      main CouchCMS installation on domain >> website.com/couch
//      separate CouchCMS installation (in the same domain) >> website.com/demo/gallery/couch
//      file >> website.com/couch/addons/kfunctions.php (this "loader" file for main installation)
//      file >> website.com/couch/addons/kfunctions#mycouchdb.php (actual config file for main installation)
//      file >> website.com/demo/gallery/couch/addons/kfunctions.php (this "loader" file for separate installation in subfolder)
//      file >> website.com/demo/gallery/couch/addons/kfunctions#mydemodb.php (actual config file for separate installation in subfolder)
//
// Since each installation (including those in subfolders) has its own database, it is easy to maintain versions named after database name.

$installationKFuncs = 'kfunctions'.'#'.K_DB_NAME.'.php';
return include($installationKFuncs);


//<?php
//if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

//require_once( K_COUCH_DIR.'addons/cart/cart.php' );
//require_once( K_COUCH_DIR.'addons/inline/inline.php' );
//require_once( K_COUCH_DIR.'addons/extended/extended-users.php' );
//require_once( K_COUCH_DIR.'addons/extended/extended-folders.php' );
//require_once( K_COUCH_DIR.'addons/extended/extended-comments.php' );
//require_once( K_COUCH_DIR.'addons/routes/routes.php' );
//require_once( K_COUCH_DIR.'addons/jcropthumb/jcropthumb.php' );
//require_once( K_COUCH_DIR.'addons/bootstrap-grid/bootstrap-grid.php' );

//require_once( K_COUCH_DIR.'addons/grayscale/grayscale.php' );
//require_once( K_COUCH_DIR.'addons/tweets/tweets.php' );
//require_once( K_COUCH_DIR.'addons/uid/uid.php' );
//require_once( K_COUCH_DIR.'addons/watermark/watermark.php' );
//require_once( K_COUCH_DIR.'addons/watermark/watermark_ex.php' );
//require_once( K_COUCH_DIR.'addons/tiny-html-minifier/TinyMinify.php' );
//require_once( K_COUCH_DIR.'addons/character-counter/character-counter.php' );
//require_once( K_COUCH_DIR.'addons/copy-to-new/copy-to-new.php' );
//require_once( K_COUCH_DIR.'addons/votes/votes.php' );
//require_once( K_COUCH_DIR.'addons/csv/csv.php' );
//require_once( K_COUCH_DIR.'addons/filter/filter.php' );
//require_once( K_COUCH_DIR.'addons/minify-js-css/minify.php' );
//require_once( K_COUCH_DIR.'addons/multi-lang/multi-lang.php' );
//require_once( K_COUCH_DIR.'addons/simple-access-control/simple-access-control.php' );
//require_once( K_COUCH_DIR.'addons/lazyload/lazyload.php' );
//$FUNCS->register_admin_listview( 'comments.php', 'comments-admin-list.php' );
//require_once( K_COUCH_DIR.'addons/config/config.php' );
//require_once( K_COUCH_DIR.'addons/dbxoid/KDBProxy.php' );
//require_once( K_COUCH_DIR.'addons/community-mods/autoloader.php' );


/**
*   Shopping Cart @ https://docs.couchcms.com/concepts/shopping-cart-1.html https://docs.couchcms.com/concepts/shopping-cart-2.html
*   On Page Editing @ https://docs.couchcms.com/concepts/on-page-editing.html
*   Extended Users @ https://www.couchcms.com/docs/extended-entities/post.htm
*   Extended Folders @ https://www.couchcms.com/docs/extended-entities/post2.htm
*   Extended Comments @ https://www.couchcms.com/docs/extended-entities/post3.htm
*   Custom Routes @ https://www.couchcms.com/docs/custom-routes/
*   ADDON: Advanced thumbnail cropping # jcropthumb @ https://www.couchcms.com/forum/viewtopic.php?f=8&t=9299
*   ADDON: Bootstrap grid in admin panel @ https://www.couchcms.com/forum/viewtopic.php?f=8&t=11023
*
*   ADDON: Greyscaling images @ https://www.couchcms.com/forum/viewtopic.php?f=8&t=8148
*   ADDON: Latest Tweets @ https://www.couchcms.com/forum/viewtopic.php?f=8&t=7730 https://github.com/CouchCMS/Tweets
*   ADDON: Sequential ID @ https://www.couchcms.com/forum/viewtopic.php?f=8&t=11372
*   ADDON: Watermarking images @ https://www.couchcms.com/forum/viewtopic.php?f=8&t=8012 https://github.com/CouchCMS/Watermark
*   ADDON: Tiny Html Minifier @ https://www.couchcms.com/forum/viewtopic.php?f=8&t=12431
*   ADDON: Character Counter @ https://www.couchcms.com/forum/viewtopic.php?f=8&t=10339
*   Copy an existing page to create a new page @ https://www.couchcms.com/forum/viewtopic.php?f=8&t=11545
*   Votes, Ratings & Polls module @ https://www.couchcms.com/forum/viewtopic.php?f=5&t=8133 https://github.com/CouchCMS/Votes
*   CSV Importer Module @ https://www.couchcms.com/forum/viewtopic.php?f=5&t=8803 https://github.com/CouchCMS/CSV
*   Filter pages by a Custom Field (In AdminPanel List View) @ https://www.couchcms.com/forum/viewtopic.php?f=8&t=10594&p=26489&view=show#p27057
*   Combine and Minimize JS and CSS Files @ https://www.couchcms.com/forum/viewtopic.php?f=8&t=11090
*   Addon for multi-lingual sites @ https://couchcms.com/forum/viewtopic.php?f=5&t=10979
*   Restrict access to specific portions of the admin-panel to certain admins @ https://www.couchcms.com/forum/viewtopic.php?f=8&t=10715#p27178
*   Lazy Load Images, Iframes, Video and Audio @ https://www.couchcms.com/forum/viewtopic.php?f=8&t=11250#p29569
*   Threaded Comments Implementation @ https://www.couchcms.com/forum/viewtopic.php?f=8&t=9182
*/

