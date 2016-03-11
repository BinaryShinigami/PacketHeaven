<?php
if (!defined("IN_FUSION")) { die("Access Denied"); }
require_once INCLUDES."theme_functions_include.php";

define("THEME_WIDTH", "100%");
define("THEME_BULLET", "<img src='".THEME."images/bullet.gif' alt='' style='border:0' />");

function render_page($license=false) {
	
	global $settings, $locale, $main_style, $userdata, $aidlink;
	
	echo "<div class='outer'><div id='top-header'>\n";
	if (iMEMBER) {
		echo "<img src='".THEME."images/bullet-header.gif' alt='' style='border:0' /> <a href='".BASEDIR."edit_profile.php'>".$locale['global_120']."</a>\n";
		echo "<img src='".THEME."images/bullet-header.gif' alt='' style='border:0' /> <a href='".BASEDIR."messages.php'>".$locale['global_121']."</a>\n";
		echo "<img src='".THEME."images/bullet-header.gif' alt='' style='border:0' /> <a href='".BASEDIR."members.php'>".$locale['global_122']."</a>\n";
		if (iADMIN && (iUSER_RIGHTS != "" || iUSER_RIGHTS != "C")) {
			echo "<img src='".THEME."images/bullet-header.gif' alt='' style='border:0' /> <a href='".ADMIN."index.php".$aidlink."'>".$locale['global_123']."</a>\n";
		}
		echo "<img src='".THEME."images/bullet-header.gif' alt='' style='border:0' /> <a href='".BASEDIR."setuser.php?logout=yes'>".$locale['global_124']."</a>\n";
	} else {
		echo "<img src='".THEME."images/bullet-header.gif' alt='' style='border:0' /> <a href='".BASEDIR."login.php'>Login</a>\n";
		if ($settings['enable_registration']) {
			echo "<img src='".THEME."images/bullet-header.gif' alt='' style='border:0' /> <a href='".BASEDIR."register.php'>Register</a>\n";
		}
	}
	echo "</div>\n";
	
	echo "<div id='header' class='clearfix'>\n";
	echo "<div style='margin:0px 10px 0 10px'>".showbanners()."</div>\n";
	echo "</div>\n";
	
	echo "<div id='sub-header' class='clearfix'>\n";
	echo "<div class='flleft'>".showsublinks(" ")."</div>\n";
	echo "<div class='flright' style='text-align:right;padding:2px'>".showsubdate()."</div>\n";
	echo "<div class='clear'></div>\n";
	echo "</div>\n";
	
	echo "<div id='container' class='clearfix $main_style'>\n";
	if (LEFT) { echo "<div id='side-border-left'>".LEFT."</div>\n"; }
	if (RIGHT) { echo "<div id='side-border-right'>".RIGHT."</div>\n"; }
	echo "<div id='main-content'><div id='main-container'>".U_CENTER.CONTENT.L_CENTER."</div></div>\n";
	echo "</div>\n";
		
	echo "<div class='clear'></div>\n";
	
	//Footer
	echo "<div id='footer'>\n";
	echo "<div align='center'>".stripslashes($settings['footer'])."</div>\n";
	echo "<div class='clear'></div>\n";
	echo "</div></div>\n";	
	echo "<br /><div class='small2' align='center'>".(!$license ? showcopyright()."<br />" : "")."\n";
	echo "ShadowTrek Theme by <a href='http://www.10gauge.de'>10gauge</a><br />\n";
	echo "Based on Black Glass by UTech owner <a href='http://www.utechnet.com'>Method</a></div>\n";
	echo "<div class='clear'><br /></div>\n";
	echo "<div class='small' align='center'>".sprintf($locale['global_172'], substr((get_microtime() - START_TIME),0,4))."</div>\n";
	echo "<div class='small' align='center'>".showcounter()."</div><br /><br />\n";
}

function render_news($subject, $news, $info) {

	echo "<div class='main-border'>\n";
	echo "<div class='main-caption'>".$subject."</div>\n";
	echo "<div class='main-body'>".$news."\n";
	echo "<div class='news-footer'>\n";
	echo newsposter($info,"&middot;").newsopts($info,"&middot;").itemoptions("N",$info['news_id']);
	echo "</div>\n</div>\n</div>\n";

}

function render_article($subject, $article, $info) {

	echo "<div class='main-caption'>$subject</div>\n";
	echo "<div class='main-body'>".($info['article_breaks'] == "y" ? nl2br($article) : $article)."</div>\n";
	echo "<div class='news-footer'>\n";
	echo articleposter($info,"&middot;").articleopts($info,"&middot;").itemoptions("A",$info['article_id']);
	echo "</div>\n";

}

function opentable($title) {

	echo "<div class='main-border'>\n";
	echo "<div class='main-caption'>".$title."</div>\n";
	echo "<div class='main-body'>\n";

}

function closetable() {

	echo "</div>\n</div>\n";

}

function openside($title, $collapse = false, $state = "on") {
	
	global $panel_collapse; $panel_collapse = $collapse;


	echo "<div class='side-border'>\n";
	if ($collapse == true) {
		$boxname = str_replace(" ", "", $title);
		echo "<div class='side-caption' style='float:right;margin-top:6px;'>".panelbutton($state,$boxname)."</div>\n";
	}
	echo "<div class='side-caption'>".$title."</div>\n";
	echo "<div class='side-body floatfix'>\n";
	if ($collapse == true) { echo panelstate($state, $boxname); }

}

function closeside($collapse = false) {

	global $panel_collapse;

	if ($panel_collapse == true) { echo "</div>\n"; }
	echo "</div>\n</div>\n";
	echo "<br />";
}
?>
