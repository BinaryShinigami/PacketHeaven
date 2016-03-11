<?php
if (!defined("IN_FUSION")) { die("Access Denied"); }

define("THEME_BULLET", "<span class='bullet'><img src='".THEME."images/bullet.png' alt='+' /></span>");

require_once INCLUDES."theme_functions_include.php";

function render_page($license=false) {
	
	global $settings, $main_style, $locale;

	//Header
	echo "<table align='center' class='center' cellpadding='0' cellspacing='0' width='987'>\n<tr>\n";
  echo "<td>\n";

	echo "<table align='center' cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
  echo "<td><img src='".THEME."images/sus.jpg' alt='MAIN-HEADER' /></td>";
	echo "</tr>\n</table>\n";

	echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
	echo "<td class='sub-header-left'></td>\n";
	echo "<td class='sub-header'>".showsublinks(" ", "white")."</td>\n";
	echo "<td align='right' class='sub-header'>".showsubdate()."</td>\n";
	echo "<td class='sub-header-right'></td>\n";
	echo "</tr>\n</table>\n";

	//Content
	echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
	if (LEFT) { echo "<td class='side-border-left' valign='top'>".LEFT."</td>"; }
	echo "<td class='main-bg' valign='top'>".U_CENTER.CONTENT.L_CENTER."</td>";
	if (RIGHT) { echo "<td class='side-border-right' valign='top'>".RIGHT."</td>"; }
	echo "</tr>\n</table>\n";
	
  //Footer
	echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
  echo "<td><img src='".THEME."images/footer.jpg' alt='MAIN-FOOTER' /></td>";
  echo "</tr><tr>";
  echo "<td class='center' style='width: 50%; text-align: center;'>".showcounter()."<br />";
  if ($license == false) { echo showcopyright(); }
  echo "</td>\n";
	echo "</tr>\n</table>\n";

  echo "</td>";
  echo "</tr></table>\n";
}

function render_news($subject, $news, $info) {

	echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
	echo "<td class='capmain-left'></td>\n";
	echo "<td class='capmain'>".$subject."</td>\n";
	echo "<td class='capmain-right'></td>\n";
	echo "</tr>\n</table>\n";
	echo "<table width='100%' cellpadding='0' cellspacing='0'>\n<tr>\n";
	echo "<td class='main-body middle-border'>".$news."</td>\n";
	echo "</tr>\n<tr>\n";
	echo "<td align='center' class='news-footer middle-border'>\n";
	echo newsposter($info," &middot;").newsopts($info,"&middot;").itemoptions("N",$info['news_id']);
	echo "</td>\n";
	echo "</tr>\n</table>\n";
	echo "<table cellspacing='0' cellpadding='0' width='100%'><tr><td align='left'><img src='".THEME."images/sideb-left.png' class='spacer' alt='' /></td>
	<td align='center' class='sideb' width='100%'></td>
	<td align='right'><img src='".THEME."images/sideb-right.png' class='spacer' alt='' /></td>
	</tr></table>\n";

}

function render_article($subject, $article, $info) {
	
	echo "<table width='100%' cellpadding='0' cellspacing='0'>\n<tr>\n";
	echo "<td class='capmain-left'></td>\n";
	echo "<td class='capmain'>".$subject."</td>\n";
	echo "<td class='capmain-right'></td>\n";
	echo "</tr>\n</table>\n";
	echo "<table width='100%' cellpadding='0' cellspacing='0'>\n<tr>\n";
	echo "<td class='main-body middle-border'>".($info['article_breaks'] == "y" ? nl2br($article) : $article)."</td>\n";
	echo "</tr>\n<tr>\n";
	echo "<td align='center' class='news-footer'>\n";
	echo articleposter($info," &middot;").articleopts($info,"&middot;").itemoptions("A",$info['article_id']);
	echo "</td>\n</tr>\n</table>\n";
	echo "<table cellspacing='0' cellpadding='0' width='100%'><tr><td align='left'><img src='".THEME."/images/sideb-left.png' class='spacer' alt='' /></td>
	<td align='center' class='sideb' width='100%'></td>
	<td align='right'><img src='".THEME."images/sideb-right.png' class='spacer' alt='' /></td>
	</tr></table>\n";

}

function opentable($title) {

	echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
	echo "<td class='capmain-left'></td>\n";
	echo "<td class='capmain'>".$title."</td>\n";
	echo "<td class='capmain-right'></td>\n";
	echo "</tr>\n</table>\n";
	echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
	echo "<td class='main-body'>\n";

}

function closetable() {

	echo "</td>\n";
	echo "</tr>\n</table>\n";
	echo "<table cellspacing='0' cellpadding='0' width='100%'><tr><td align='left'><img src='".THEME."images/sideb-left.png' class='spacer' alt='' /></td>
	<td align='center' class='sideb' width='100%'></td>
	<td align='right'><img src='".THEME."images/sideb-right.png' class='spacer' alt='' /></td>
	</tr></table>\n";

}

function openside($title, $collapse = false, $state = "on") {

	global $panel_collapse; $panel_collapse = $collapse;
	
	echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
	echo "<td class='scapmain-left'></td>\n";
	echo "<td align='center' class='scapmain'>$title</td>\n";
	if ($collapse == true) {
		$boxname = str_replace(" ", "", $title);
		echo "<td class='scapmain' align='right'>".panelbutton($state, $boxname)."</td>\n";
	}
	echo "<td class='scapmain-right'></td>\n";
	echo "</tr>\n</table>\n";
	echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";
	echo "<td class='side-body'>\n";	
	if ($collapse == true) { echo panelstate($state, $boxname); }

}

function closeside() {
	
	global $panel_collapse;

	if ($panel_collapse == true) { echo "</div>\n"; }	
	echo "</td>\n</tr>\n</table>\n";
	echo "<table cellspacing='0' cellpadding='0'><tr><td align='left'><img src='".THEME."images/sideb-left.png' class='spacer' alt='' /></td>
	<td align='center' class='sideb' width='100%'></td>
	<td align='right'><img src='".THEME."images/sideb-right.png' class='spacer' alt='' /></td>
	</tr></table>\n";
	
}
?>