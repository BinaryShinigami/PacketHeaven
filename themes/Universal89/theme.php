<?php
if (!defined("IN_FUSION")) { die("Access Denied"); }
define("THEME_WIDTH", "1000");
define("THEME_BULLET", "<img src='".THEME."images/bullet.gif' alt='' style='border:0' />");
require_once INCLUDES."theme_functions_include.php";

function thesublinks($sep="&middot;",$class="") {
$i = 0; $res = "";
$sres = dbquery("SELECT * FROM ".DB_PREFIX."site_links WHERE link_position>='2' AND ".groupaccess('link_visibility')." AND link_url!='---' ORDER BY link_order ASC");
if (dbrows($sres)) {
while($sdata = dbarray($sres)) {
if ($i != 0) { $res .= " ".$sep."\n"; } else { $res .= "\n"; }
$link_target = $sdata['link_window'] == "1" ? " target='_blank'" : "";
$link_class = $class ? " class='$class'" : "";
if (strstr($sdata['link_url'], "http://") || strstr($sdata['link_url'], "https://")) {
$res .= "<a href='".$sdata['link_url']."'".$link_target.$link_class.">".$sdata['link_name']."</a>";
} else {
$res .= "<a href='".BASEDIR.$sdata['link_url']."'".$link_target.$link_class.">".$sdata['link_name']."</a>";
}
$i++;
}
}
if ($i != 0) { return $res; } else { return "&nbsp;"; }
}
function render_page($license=false) {

	global $settings, $main_style, $locale;

	//Header
	echo "<table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."' align='center'>\n<tr>\n";
	echo "<td class='full-header'></td>\n";
	echo "</tr>\n</table>\n";

//sublinks css
	echo "<table width='".THEME_WIDTH."' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>";
	echo "<div id='altlinkler'>";
	echo "<ul><li>".thesublinks("</li>\n<li>");
	echo "</li></ul><div class='clear-both'>&nbsp;</div></div>";
	echo "</td></tr></table>\n";


	//Content
	echo "<table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."' align='center' class='$main_style'>\n<tr>\n";
	if (LEFT) { echo "<td class='side-border-left' valign='top'>".LEFT."</td>"; }
	echo "<td class='main-bg' valign='top'>".U_CENTER.CONTENT.L_CENTER."</td>";
	if (RIGHT) { echo "<td class='side-border-right' valign='top'>".RIGHT."</td>"; }
	echo "</tr>\n</table>\n";

	//Footer
	echo "<table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."' align='center'>\n<tr>\n";
	echo "<td align='left' class='bottom-footer'><br />".stripslashes($settings['footer']);
	if (!$license) { echo showcopyright();  }
	echo "<br /><br />\n";
	echo "</td>\n";
	echo "</tr>\n</table>\n";

}

function render_news($subject, $news, $info) {

   echo "<br /><table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
   echo "<td class='capmain'><center>".$subject."</center></td>\n";
   echo "</tr>\n<tr>\n";
   echo "<td class='main-body'>".$news."</td>\n";
   echo "</tr>\n<tr>\n";
   echo "<td align='right' class='news-footer'>\n";
   echo newsopts($info,"&middot;").itemoptions("N",$info['news_id']);
   echo "</td>\n</tr>\n</table>\n";


}


function render_article($subject, $article, $info) {

   echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
   echo "<td class='capmain'><center>".$subject."</center></td>\n";
   echo "</tr>\n<tr>\n";
   echo "<td class='main-body'>".($info['article_breaks'] == "y" ? nl2br($article) : $article)."</td>\n";
   echo "</tr>\n<tr>\n";
   echo "<td align='center' class='news-footer'>\n";
   echo articleopts($info,"&middot;").itemoptions("A",$info['article_id']);
   echo "</td>\n</tr>\n</table>\n";

}

function opentable($title) {

   echo "<br /><table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
   echo "<td class='capmain'><center>".$title."</center></td>\n";
   echo "</tr>\n<tr>\n";
   echo "<td class='main-body'>\n";

}

function closetable() {
   echo "</td>\n</tr>\n</table>\n";
}

function openside($title, $collapse = false, $state = "on") {
   global $panel_collapse; $panel_collapse = $collapse;
   echo "<table cellpadding='0' cellspacing='0' width='100%' class='border'>\n<tr>\n";
   echo "<td class='scapmain'>".$title."</td>\n";
   if ($collapse == true) {
      $boxname = str_replace(" ", "", $title);
      echo "<td class='scapmain' align='right'>".panelbutton($state,$boxname)."</td>\n";
   }
   echo "</tr>\n<tr>\n";
   echo "<td".($collapse == true ? " colspan='2'" : "")." class='side-body'>\n";
   if ($collapse == true) { echo panelstate($state, $boxname); }
}
function closeside($collapse = false) {
   global $panel_collapse;
   if ($panel_collapse == true) { echo "</div>\n"; }
   echo "</td>\n</tr>\n</table>\n";
}
?>