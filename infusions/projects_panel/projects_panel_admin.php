<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright � 2002 - 2011 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: new_infusion_admin.php
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
require_once "../../maincore.php";
require_once THEMES."templates/admin_header.php";

include INFUSIONS."projects_panel/infusion_db.php";

if (!checkrights("S") || !defined("iAUTH") || $_GET['aid'] != iAUTH) { redirect("../index.php"); }

// Check if locale file is available matching the current site locale setting.
if (file_exists(INFUSIONS."projects_panel/locale/".$settings['locale'].".php")) {
	// Load the locale file matching the current site locale setting.
	include INFUSIONS."projects_panel/locale/".$settings['locale'].".php";
} else {
	// Load the infusion's default locale file.
	include INFUSIONS."projects_panel/locale/English.php";
}

opentable('Projects Panel Admin');
// your code here
closetable();

require_once THEMES."templates/footer.php";
?>