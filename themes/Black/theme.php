<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright © 2002 - 2008 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: Theme.php
| Version: 1.00
| Author: lippke
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

define("THEME_WIDTH", "80%");
define("THEME_BULLET", "<img src='".THEME."images/bullet.gif' border='0' alt='Top' title='Top' />");

require_once INCLUDES."theme_functions_include.php";


function render_page($license=false) {
	
	global $settings, $main_style, $locale;

	//Header
	echo "<table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."' align='center'>\n<tr>\n";
	echo "<td align='center' class='full-header'>".showbanners()."</td>\n";
	echo "</tr>\n</table>\n";
	
    echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
	echo "<td class='sub-header-left'></td>\n";
	echo "<td align='center' class='sub-header'>".showsublinks(" ".THEME_BULLET." ", "white")."</td>\n";
	echo "<td align='right' class='sub-header'></td>\n";
	echo "<td class='sub-header-right'></td>\n";
	echo "</tr>\n</table>\n";
	
	//Content
	echo "<table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."' align='center' class='$main_style'>\n<tr>\n";
	if (LEFT) { echo "<td class='side-border-left' valign='top'>".LEFT."</td>"; }
	echo "<td class='main-bg' valign='top'>".U_CENTER.CONTENT.L_CENTER."</td>";
	if (RIGHT) { echo "<td class='side-border-right' valign='top'>".RIGHT."</td>"; }
	echo "</tr>\n</table>\n";
	
	//Footer
	echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
	echo "<td class='sub-header-left'>	<a title='delay=[0] fade=[on]' href='javascript:scroll(0,0);'>\n
	<img src='".THEME."images/up.gif' border='0' alt='Top' title='Top' />\n
	</a>\n
	</td>\n";
	echo "<td align='center' class='sub-header'><img src='".THEME."images/bullet.png' border='0' alt='Top' title='Top' />&nbsp; ".showcounter()."&nbsp; <img src='".THEME."images/bulletb.png' border='0' alt='Top' title='Top' /></td>\n";
	echo "<td class='sub-header-right'>	<a title='delay=[0] fade=[on]' href='javascript:scroll(0,0);'>\n
	<img src='".THEME."images/up.gif' border='0' alt='Top' title='Top' />\n
	</a>\n
	</td>\n";
	echo "</tr>\n</table>\n";
	
	echo "<table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."' align='center'>\n<tr>\n";
	echo "<td align='center' class='bottom-footer'><br />".stripslashes($settings['footer']);
	if (!$license) { echo "<br /><br />\n".showcopyright(); }
	echo "<p>Black made by <a href='http://www.zicy.dk'>zicy.dk</a></p>";
	echo "</td>\n";
	echo "</tr>\n</table>\n";

}

function render_news($subject, $news, $info) {

	echo "<table align='center' cellpadding='0' cellspacing='0' width='80%'>\n<tr>\n";
	echo "<td class='capmain-left'></td>\n";
	echo "<td class='capmain'>".$subject."</td>\n";
	echo "<td class='capmain-right'></td>\n";
	echo "</tr>\n</table>\n";
	echo "<table align='center' width='80%' cellpadding='0' cellspacing='0' class='spacer'>\n<tr>\n";
	echo "<td class='capmain-center-left'></td>\n";
	echo "<td class='main-body middle-border'>".$news."</td>\n";
	echo "<td class='capmain-center-right'></td>\n";
	echo "</tr>\n<tr>\n";
	echo "<td class='capmain-bottom-left'></td>\n";
	echo "<td align='center' class='news-footer middle-border'>\n";
	echo newsposter($info," &middot;").newsopts($info,"&middot;").itemoptions("N",$info['news_id']);
	echo "</td>\n";
	echo "<td class='capmain-bottom-right'></td>\n";
	echo "</tr>\n</table>\n";

}

function render_article($subject, $article, $info) {
	
	echo "<table align='center' width='80%' cellpadding='0' cellspacing='0'>\n<tr>\n";
	echo "<td class='capmain-left'></td>\n";
	echo "<td class='capmain'>".$subject."</td>\n";
	echo "<td class='capmain-right'></td>\n";
	echo "</tr>\n</table>\n";
	echo "<table align='center' width='80%' cellpadding='0' cellspacing='0' class='spacer'>\n<tr>\n";
	echo "<td class='capmain-center-left'></td>\n";
	echo "<td class='main-body middle-border'>".($info['article_breaks'] == "y" ? nl2br($article) : $article)."</td>\n";
	echo "<td class='capmain-center-right'></td>\n";
	echo "</tr>\n<tr>\n";
	echo "<td class='capmain-bottom-left'></td>\n";
	echo "<td align='center' class='news-footer'>\n";
	echo articleposter($info," &middot;").articleopts($info,"&middot;").itemoptions("A",$info['article_id']);
	echo "</td>\n";
    echo "<td class='capmain-bottom-right'></td>\n";
    echo "</tr>\n</table>\n";

}

function opentable($title) {

	echo "<table align='center' cellpadding='0' cellspacing='0' width='80%'>\n<tr>\n";
	echo "<td class='capmain-left'></td>\n";
	echo "<td class='capmain'>".$title."</td>\n";
	echo "<td class='capmain-right'></td>\n";
	echo "</tr>\n</table>\n";
	echo "<table align='center' cellpadding='0' cellspacing='0' width='80%' class='spacer'>\n<tr>\n";
	echo "<td class='capmain-center-left'></td>\n";
	echo "<td class='main-body'>\n";

}

function closetable() {

	echo "</td>\n";
	echo "<td class='capmain-center-right'></td>\n";
	echo "</tr><tr>\n";
	echo "<td class='capmain-bottom-left'></td>\n";
	echo "<td class='news-footer'></td>\n";
	echo "<td class='capmain-bottom-right'></td>\n";
	echo "</tr>\n</table>\n";

}

function openside($title, $collapse = false, $state = "on") {

	global $panel_collapse; $panel_collapse = $collapse;
	
	echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
	echo "<td class='scapmain-left'></td>\n";
	echo "<td class='scapmain'>$title</td>\n";
	if ($collapse == true) {
		$boxname = str_replace(" ", "", $title);
		echo "<td class='scapmain' align='right'>".panelbutton($state, $boxname)."</td>\n";
	}
	echo "<td class='scapmain-right'></td>\n";
 	echo "</tr>\n</table>\n";
	echo "<table cellpadding='0' cellspacing='0' width='100%' class='spacer'>\n<tr>\n";
	echo "<td class='scapmain-center-left'></td>\n";
	echo "<td class='side-body'>\n";	
	if ($collapse == true) { echo panelstate($state, $boxname); }

}

function closeside() {
	
	global $panel_collapse;

	if ($panel_collapse == true) { echo "</div>\n"; }	
	echo "</td>\n";
	echo "<td class='scapmain-center-right'></td>\n";
    echo "</tr><tr>\n";
    echo "<td class='scapmain-bottom-left'></td>\n";
    echo "<td class='side-footer'></td>\n";
	echo "<td class='scapmain-bottom-right'></td>\n";
    echo "</tr></table>\n";

}
?>