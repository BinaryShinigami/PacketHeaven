<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright � 2002 - 2011 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: infusion.php
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

// Infusion general information
$inf_title = 'Projects Panel';
$inf_description = 'A simple to use image carousel panel for your projects home page.';
$inf_version = "0.1b";
$inf_developer = "Shane McIntosh";
$inf_email = "shane@packetheaven.net";
$inf_weburl = "http://packetheaven.net";

$inf_folder = "projects_panel"; // The folder in which the infusion resides.

// Delete any items not required below.
$inf_newtable[1] = DB_INFUSION_TABLE." (
proj_id SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
proj_img VARCHAR(255) DEFAULT '' NOT NULL,
proj_link VARCHAR(255) DEFAULT '' NOT NULL,
proj_desc VARCHAR(100) DEFAULT '' NOT NULL,
PRIMARY KEY (proj_id)
) TYPE=MyISAM;";

$inf_insertdbrow[1] = DB_INFUSION_TABLE." (proj_id, proj_img, proj_link, proj_desc) VALUES('', '', '', '')";

$inf_droptable[1] = DB_INFUSION_TABLE;

$inf_adminpanel[1] = array(
	"title" => $locale['xxx_admin1'],
	"image" => "image.gif",
	"panel" => "projects_panel_admin.php",
	"rights" => "S"
);

?>