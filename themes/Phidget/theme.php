<?php
if (!defined("IN_FUSION")) { die("Access Denied"); }

define("THEME_WIDTH", "900");
define("THEME_BULLET", "<img src='".THEME."images/bullet.gif' alt='' style='border:0' />");

require_once INCLUDES."theme_functions_include.php";

function render_page($license=false) {

	global $aidlink, $settings, $main_style, $locale, $userdata;

	//Header
	echo "<table cellspacing='0' cellpadding='0' width='".THEME_WIDTH."' align='center'>\n<tr>\n";
	echo "<td>\n";
	echo "<table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."' align='center'>\n<tr>\n";
    echo "<td align='center'>";
    echo "<div id='userbar' class='floatfix'>\n";
		  if(iMEMBER){
	echo "<img src='".THEME."images/arrowr.gif' alt='' /> <a href='".BASEDIR."edit_profile.php' class='white'>".$locale['global_120']."</a> |
		  <a href='".BASEDIR."messages.php' class='white'>".$locale['global_121']."</a> |
			 ".(iADMIN ? "<a href='".ADMIN."index.php".$aidlink."' class='white'>".$locale['global_123']."</a>" : "")." |
		  <a href='".BASEDIR."setuser.php?logout=yes' class='white'>".$locale['global_124']."</a> <img src='".THEME."images/arrowl.gif' alt='' />\n";
		     }else{
	echo "<img src='".THEME."images/arrowr.gif' alt='' /> <a href='".BASEDIR."login.php' class='white'>".$locale['global_104']."</a> |
			 ".($settings['enable_registration'] ? "<a href='".BASEDIR."register.php' class='white'>".$locale['global_107']."</a>\n" : "");
	echo "<img src='".THEME."images/arrowl.gif' alt='' />";
			 }
	echo "</div>";
    echo "</td></tr><tr>";
	echo "<td class='full-header' width='".THEME_WIDTH."'>\n";
	echo "<div id='bg1'><div id='header'><br />".showbanners()."</div></div>";
    echo "</td>\n";
	echo "</tr>\n</table>\n";
	echo "</td>\n</tr>\n</table>\n";
	
	echo "<table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."' align='center'>\n<tr>\n";
	echo "<td class='sub-header'>";
	echo "<div id='bg2'><div id='header2'><div id='menu'>".showsublinks(" ")."\n";
	echo "<br /><br /></div><div align='right' class='small2'>".showsubdate()."&nbsp;&nbsp;</div></div></div></td></tr></table>\n";
	
	//Content
	echo "<table cellpadding='0' cellspacing='0' class='border' width='".THEME_WIDTH."' align='center'>\n<tr>\n";
	if (LEFT) { echo "<td class='side-border-left' valign='top'>".LEFT."</td>"; }
	echo "<td class='main-bg' valign='top'>".U_CENTER.CONTENT.L_CENTER."</td>";
	if (RIGHT) { echo "<td class='side-border-right' valign='top'>".RIGHT."</td>"; }
	echo "</tr>\n</table>\n";
	
	//Footer

    echo "<table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."' align='center' class='footer'>\n<tr>\n";
	echo "<td align='center' colspan='2'><br />".stripslashes($settings['footer'])."</td></tr>";
	echo "<tr><td align='left'><blockquote>Powered by <a href='http://www.php-fusion.co.uk' target='_blank' title=''>PHP-Fusion</a> copyright &copy; 2002 - ".date("Y")." by Nick Jones.\n";
	echo "<br />Released as free software without warranties under <a href='http://www.fsf.org/licensing/licenses/agpl-3.0.html' target='_blank' title=''>GNU Affero GPL</a> v3.</blockquote></td>\n";
    echo "<td align='right'>";
	echo "<blockquote>Phidget theme design by: <a target='_blank' href='http://www.php-fusion.hobbysites.net' title='Theme by HobbyMan'>HobbySites.net</a>.<br />Some elements by <a target='_blank' href='http://www.freecsstemplates.org/'>Free CSS Templates</a></blockquote><br />\n";
	echo "</td></tr>";
	echo "<tr><td align='center'>";
	echo "<br />".sprintf($locale['global_172'], substr((get_microtime() - START_TIME),0,4))."\n"; 
	echo "</td><td align='center'>".showcounter()."</td>";
    echo "</tr>\n</table>\n";
    echo "<br />";
}

function render_news($subject, $news, $info) {

	echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
	echo "<td class='capmain'>".$subject."</td>\n";
	echo "</tr>\n<tr>\n";
	echo "<td class='main-body'>".$news."</td>\n";
	echo "</tr>\n<tr>\n";
	echo "<td align='center' class='news-footer'>\n";
	echo newsposter($info," &middot;").newsopts($info,"&middot;").itemoptions("N",$info['news_id']);
	echo "</td>\n</tr>\n</table>\n";

}

function render_article($subject, $article, $info) {
	
	echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
	echo "<td class='capmain'>".$subject."</td>\n";
	echo "</tr>\n<tr>\n";
	echo "<td class='main-body'>".($info['article_breaks'] == "y" ? nl2br($article) : $article)."</td>\n";
	echo "</tr>\n<tr>\n";
	echo "<td align='center' class='news-footer'>\n";
	echo articleposter($info," &middot;").articleopts($info,"&middot;").itemoptions("A",$info['article_id']);
	echo "</td>\n</tr>\n</table>\n";

}

function opentable($title) {

	echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
	echo "<td class='capmain'>".$title."</td>\n";
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
echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n<td height='5'></td>\n</tr>\n</table>\n";

}
?>