<?php
/*------------------------------------------------------------------
Radio Theme
by untouchable a.k.a Enculescu (enculescumarian@yahoo.com)
-------------------------------------------------------------------*/
if (!defined("IN_FUSION")) { header("Location: ../../index.php"); exit; }
require_once INCLUDES."theme_functions_include.php";

define("THEME_WIDTH", "874");
define("THEME_BULLET", "<span class='bullet'><img src='".THEME."images/bullet.png'></span>");

//v7 sublinks 
function thesublinks($sep="&middot;",$class="") {
echo "<script type='text/javascript' src='".THEME."/fader.js'></script>";
echo "<script type='text/javascript' src='".THEME."/SnowScript.js'></script>";

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
global $settings, $main_style;


//Header
echo "<table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."' align='center'><tr><td>

<table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."' style='border: 0px; margin: 0px auto'>
<tr><td>
<img src='".THEME."images/header.png' alt='".$settings['sitename']."' width='874' height='199' />";
echo "</td></tr></table>\n";

//sublinks css
	echo "<table width='".THEME_WIDTH."' border='0' cellspacing='0' cellpadding='0'><tr><td>";
	echo "<div id='altlinkler'>";
	echo "<ul><li>".thesublinks("</li>\n<li>");
	echo "</li></ul><div class='clear-both'>&nbsp;</div></div>";
	echo "</td></tr></table>";
	
//Content
	echo "<table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."'>\n<tr>\n";
	if (LEFT) { echo "<td class='side-border-left' valign='top'>".LEFT."</td>"; }
	echo "<td class='main-bg' valign='top'>".U_CENTER.CONTENT.L_CENTER."</td>";
	if (RIGHT) { echo "<td class='side-border-right' valign='top'>".RIGHT."</td>"; }
	echo "</tr>\n</table>\n";

//Footer
echo "<div id='footer'><table cellpadding='0' cellspacing='0' width='874' class='footermain'>
<tr>
<td class='footer_t'>".showcopyright()." <br>Radio Theme By <strong><a href='http://www.enculescu.com' onclick='window.open(this.href); return false;' onkeypress='window.open(this.href); return false;'><font color='#F16F01'>Enculescu</font></a></strong>
</td>
</tr>
</table>
</div>

</td></tr></table>
\n";
}


function render_news($subject, $news, $info) {

	echo "<div class='capmain'>$subject</div>\n";
	echo "<div class='main-body floatfix'>".$news."</div>\n";
	echo "<div class='news-footer'>\n";
	echo newsposter($info,"&middot;").newsopts($info,"&middot;").itemoptions("N",$info['news_id']);
	echo "</div>\n";
}

function render_article($subject, $article, $info) {
	echo "<div class='border tablebreak'>";
	echo "<div class='capmain'>$subject</div>\n";
	echo "<div class='main-body floatfix'>".($info['article_breaks'] == "y" ? nl2br($article) : $article)."</div>\n";
	echo "<div class='news-footer'>\n";
	echo articleposter($info,"&middot;").articleopts($info,"&middot;").itemoptions("A",$info['article_id']);
	echo "</div>\n";
	echo "</div>";
}

function opentable($title) {

echo "<table cellpadding='0' cellspacing='0' width='100%' class='border tablebreak'>
<tr>
<td class='capmain'>$title</td>
</tr>
<tr>
<td class='main-body'>\n";

}

function closetable() {

echo "</td>
</tr>
</table>\n";

}


function openside($title, $collapse = false, $state = "on") {
	echo "<div class='border tablebreak'>";
	global $panel_collapse; $panel_collapse = $collapse;
	
	echo "<div class='border'>\n";
	echo "<div class='scapmain'>";
	if ($collapse == true) {
		$boxname = str_replace(" ", "", $title);
		echo "<div style='float:right;'>".panelbutton($state,$boxname)."</div>";
	}
	echo $title."</div>\n<div class='side-body floatfix'>\n";
	if ($collapse == true) { echo panelstate($state, $boxname); }

}

function closeside($collapse = false) {

	global $panel_collapse;

	if ($panel_collapse == true) { echo "</div>\n"; }
	echo "</div>\n</div>\n";
	echo "</div>";

}

?>