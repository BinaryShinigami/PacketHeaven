<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright � 2002 - 2011 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: new_infusion_panel.php
| CVS Version: 1.00
| Author: INSERT NAME HERE
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { die("Access Denied"); }

include INFUSIONS."projects_panel/infusion_db.php";

// Check if locale file is available matching the current site locale setting.
if (file_exists(INFUSIONS."projects_panel/locale/".$settings['locale'].".php")) {
	// Load the locale file matching the current site locale setting.
	include INFUSIONS."projects_panel/locale/".$settings['locale'].".php";
} else {
	// Load the infusion's default locale file.
	include INFUSIONS."projects_panel/locale/English.php";
}

opentable("Featured Projects");
echo '<center>
        <div id="carousel">';

$projects = get_projects_info();

if (count($projects) <= 0) {
    echo '<a href="http://packetheaven.net/viewpage.php?page_id=2"><img src="/images/projects/Control_Center_Screen_Shot.png" id="item-1" width="300px" /></a>
          <a href="http://packetheaven.net/viewpage.php?page_id=2"><img src="/images/projects/Lagune_Mail.png" id="item-2" width="300px" /></a>
          <a href="http://packetheaven.net/viewpage.php?page_id=2"><img src="/images/projects/Control_Center_Screen_Shot.png" id="item-1" width="300px" /></a
          <a href="http://packetheaven.net/viewpage.php?page_id=2"><img src="/images/projects/Lagune_Mail.png" id="item-2" width="300px" /></a>';
}
else {
    foreach($projects as $proj) {
        echo '<a href="' . $proj['proj_link'] . '"><img src="' . $proj['proj_img'] .'" width="300px" alt="' . $proj['proj_desc'] .'" /></a>';
    }
}
echo '</div>         
        <a href="#" id="prev">Prev</a> | <a href="#" id="next">Next</a>
    </center>';
closetable();
?>