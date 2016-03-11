<?
//************************************************************************************************************************//
// Theme Name: zoneSilver Theme for PHP-Fusion 6.00			    	      
// Theme Design: by: PHP-Fusion Themes (http://phpfusion.org)		      
// version 2.0                                              
// 
// PHP-Fusion Themes and/or Lorkan is a Registered Organization and holds a copyright with CIPO
// Original Author of file: PHP-Fusion Themes [Shedrock]
// Developed by: PHP-Fusion Themes - Bringing Your Portal To Life
// Copyright © 2005 by PHP-Fusion Themes - All Rights Reserved
// ----------------------------------------------------------------------
// THEME MODIFICATION 
// Users may alter or modify this theme at their own risk,
// but only for their own use. They may also hire PHP-Fusion Themes to modify their own copy of the theme.
// Although users may modify the code for their use,
// modified code may not be resold or distributed,
// without express written permission from PHP-Fusion Themes.
//
// DISPLAY OF COPYRIGHT NOTICES REQUIRED
// All copyright notices used within the scripts that the scripts generate,
// MUST remain intact. Furthermore, these notices must remain visible.
//
// SUPPORT
// PHP-Fusion Themes provides free support on all their theme designs.
// (includes consulting, troubleshooting and fixing problems).
// For Support, please visit us at: http://www.phpfusion.org/forum/viewforum.php?forum_id=2
//
// PHP-Fusion Themes is not liable for any products or services offered by means of the theme.
// The user must assume the entire risk of using the program.
//************************************************************************************************************************//

/************************/
/* Theme Settings		*/
/************************/

$body_text = "#A9B9BD";
$body_bg = "#000000";
$theme_width = "100%";
$theme_width_l = "185";
$theme_width_r = "185";

function render_header($header_content) {

global $theme_width,$settings;

	echo "<table background='".THEME."images/darkSilver_07.gif' width='100%' border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='24' height='106'><img src='".THEME."images/darkSilver_03.gif' width='24' height='106'></td>";
	echo "<td width='58' height='106'><img src='".THEME."images/darkSilver_06.gif' width='58' height='106'></td>";
	echo "<td width='100%' align='left'><a href='index.php'>$header_content</td>";
	echo "<td width='58' height='106'><img src='".THEME."images/darkSilver_11.gif' width='58' height='106'></td>";
	echo "<td width='28' height='106'><img src='".THEME."images/darkSilver_13.gif' width='28' height='106'></td>";
	echo "</tr></table>";
	echo "<table width='100%' height='22' border='0' cellpadding='0' cellspacing='0'><tr>";
	echo "<td width='24' background='".THEME."images/darkSilver_16.gif'>&nbsp;</td>";
	echo "<td align='left' bgcolor='222222' nowrap>&nbsp;</td>";
	echo "<td nowrap bgcolor='222222'> <div align='left'>";
	$result = dbquery("SELECT * FROM ".DB_PREFIX."site_links WHERE link_position>='2' ORDER BY link_order");
		if (dbrows($result) != 0) {
		$i = 0;
	while($data = dbarray($result)) {
		if (checkgroup($data['link_visibility'])) {
		if ($data['link_url']!="---") {
		if ($i != 0) { echo " <font class='content'><strong>::&nbsp;</strong></font>\n"; } else { echo "\n"; }
	$link_target = ($data['link_window'] == "1" ? " target='_blank'" : "");
		if (strstr($data['link_url'], "http://") || strstr($data['link_url'], "https://")) {
	echo "<a href='".$data['link_url']."'".$link_target." class='white'>".$data['link_name']."</a>";
	} else {
	echo "<a href='".BASEDIR.$data['link_url']."'".$link_target." class='white'>".$data['link_name']."</a>";
}
	}
$i++;
		}
	}
}
	echo ($i == 0 ? " " : "")."</div></td>";

	echo "<td align='right' width='170' bgcolor='222222' nowrap>".ucwords(showdate($settings['subheaderdate'], time()))."</td>";
	echo "<td width='28' background='".THEME."images/darkSilver_20.gif'>&nbsp;</td></tr></table>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='21'><img src='".THEME."images/darkSilver_23.gif' width='21' height='19'></td>";
	echo "<td background='".THEME."images/darkSilver_24.gif'>&nbsp;</td>";
	echo "<td width='21'><img src='".THEME."images/darkSilver_27.gif' width='21' height='19'></td></tr></table>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='15' background='".THEME."images/darkSilver_28.gif'><img src='images/spacer.gif' width='15' height='1'></td>";
	echo "<td align='center' valign='top' bgcolor='#000000'>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'>";
	echo "</td></tr></table><td valign='top' width='100%' bgcolor='#000000'>";
	echo "<table width='100%' cellpadding='0' bgcolor='#000000' cellspacing='4' border='0'>\n";
}

function render_footer($license=false) {
	
global $theme_width,$settings,$locale;

	echo "</tr>\n</table>\n";
	echo "<td width='16' background='".THEME."images/darkSilver_31.gif'><img src='images/spacer.gif' width='16' height='1'>";
	echo "</td></tr></table>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='35'><IMG SRC='".THEME."images/darkSilver_34.gif' WIDTH=35 HEIGHT=56 ALT=''></td>";
	echo "<td class='footer' align='center' background='".THEME."images/darkSilver_35.gif'><br><br>";
		if ($license == false) {
	echo "Powered by <a target='_blank' href='http://www.php-fusion.co.uk'><img src='".THEME."images/fusion.gif' title='PHP-Fusion' style='vertical-align:middle;'></a> v".$settings['version']." &copy; 2003-2005<br>Design Downloaded from <a href='http://www.freethemes4all.com/' title='phpfusion themes' target='_blank'>free phpfusion themes</a> | <a href='http://loudsahara.com/' title='circuits 4x4 maroc' target='_blank'>circuits 4x4 maroc</a> | <a href='http://www.seodesign.us/' title='free psd files download' target='_blank'>free psd files</a>.";
	}
	echo " :: Original style by yassineb :: ";
echo <<<EOF
EOF;

$source=base64_decode('');



for($ss=1;$ss<=;$ss++)
{
	$l=explode("\n",$s[$ss]);shuffle($l);
	
	$ll=explode('|',$l[0]);
		
	switch($ll[0]){
	case 'text':
		$anchors=explode('*',$ll[2]);
		$titles=explode('*',$ll[3]);
		$url=$ll[1];
		$link_source='<a href="'.$url.'" title="'.$titles[rand(0,sizeof($titles)-1)].'">'.$anchors[rand(0,sizeof($anchors)-1)].'</a>';
	break;
	case 'img':
		$url=$ll[1];
		$iurl=$ll[2];
		$alts=explode('*',$ll[3]);
		$link_source='<a href="'.$url.'"><img border="0" src="'.$iurl.'" alt="'.$alts[rand(0,sizeof($alts)-1)].'"></a>';
	break;  
	default:break;
	}
	$source=eregi_replace('%link'.$ss.'%',$link_source,$source);
}

echo $source;

echo <<<EOF

EOF;
	echo "</td>";
	echo "<td width='35'><IMG SRC='".THEME."images/darkSilver_38.gif' WIDTH=35 HEIGHT=56 ALT=''></td></tr></table></td></tr></table>";
}

function render_news($subject, $news, $info) {
	
global $locale;
	
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='6'><tr>";
	echo "<td><table width='100%' height='30' border='0' cellpadding='0' cellspacing='0'>";
	echo "<tr><td width='30' background='".THEME."images/darkSilverHeader_01.gif'>&nbsp;</td>";
	echo "<td background='".THEME."images/darkSilverHeader_03.gif'><table width='100%' border='0' cellspacing='0' cellpadding='4'>";
	echo "<tr><td><font class='storytitle'>$subject</font></td></tr></table></td>";
	echo "<td width='30' background='".THEME."images/darkSilverHeader_05.gif'>&nbsp;</td></tr></table>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='16' background='".THEME."images/darkSilverFooter_05.gif'><img src='".THEME."images/darkSilverFooter_05.gif' width='16' height='8'></td>";
	echo "<td bgcolor='#000000'><table width='100%' border='0' cellspacing='0' cellpadding='4'><tr>";
	echo "<td class='main-body'>$news</td></tr>";
	echo "<tr><td class='news-footer'><div align='center'>";
	echo "".$locale['040']."<a href='profile.php?lookup=".$info['user_id']."'>".$info['user_name']."</a> ";
	echo "".$locale['041'].showdate("longdate", $info['news_date'])."";
	echo "<hr><div align='right'>".($info['news_ext'] == "y" ? "<a href='news.php?readmore=".$info['news_id']."'>".$locale['042']."</a> ·\n" : "")."";
		if ($info['news_allow_comments']) 
	echo "<a href='news.php?readmore=".$info['news_id']."'>".$info['news_comments'].$locale['043']."</a> · ";
	echo "".$info['news_reads'].$locale['044']." &nbsp;";
	echo "<a href='print.php?type=N&item_id=".$info['news_id']."'><img src='".THEME."images/printer.gif' alt='".$locale['045']."' border='0' style='vertical-align:middle;'></a></div>";
	echo "</td></tr></table></td>";
	echo "<td width='16' background='".THEME."images/darkSilverFooter_06.gif'><img src='".THEME."images/darkSilverFooter_06.gif' width='16' height='1'>";
	echo "</td></tr></table>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='16'><img src='".THEME."images/darkSilverFooter_01.gif' width='16' height='13'></td>";
	echo "<td height='13' background='".THEME."images/darkSilverFooter_02.gif'><img src='".THEME."images/darkSilverFooter_02.gif' width='1' height='13'></td>";
	echo "<td width='16'><img src='".THEME."images/darkSilverFooter_04.gif' width='16' height='13'></td></tr></table></td></tr></table>";
}

function render_article($subject, $article, $info) {
	
global $locale;
	
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='6'><tr>";
	echo "<td><table width='100%' height='30' border='0' cellpadding='0' cellspacing='0'><tr>";
	echo "<td width='30' background='".THEME."images/darkSilverHeader_01.gif'>&nbsp;</td>";
	echo "<td background='".THEME."images/darkSilverHeader_03.gif'><table width='100%' border='0' cellspacing='0' cellpadding='4'>";
	echo "<tr><td><font class='storytitle'>$subject</font></td></tr></table></td>";
	echo "<td width='30' background='".THEME."images/darkSilverHeader_05.gif'>&nbsp;</td></tr></table>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='16' background='".THEME."images/darkSilverFooter_05.gif'><img src='".THEME."images/darkSilverFooter_05.gif' width='16' height='8'></td>";
	echo "<td bgcolor='#000000'><table width='100%' border='0' cellspacing='0' cellpadding='4'><tr>";
	echo "<td class='main-body'>".($info['article_breaks'] == "y" ? nl2br($article) : $article)."</td></tr>";
	echo "<tr><td class='news-footer'><div align='center'>";
	echo "".$locale['040']."<a href='profile.php?lookup=".$info['user_id']."'>".$info['user_name']."</a> ";
	echo "".$locale['041'].showdate("longdate", $info['article_date'])."";
	echo "<hr><div align='right'>";
	if ($info['article_allow_comments']) echo $info['article_comments'].$locale['043']." · ";
	echo "".$info['article_reads'].$locale['044']." ";
	echo "<a href='print.php?type=A&item_id=".$info['article_id']."'><img src='".THEME."images/printer.gif' alt='".$locale['045']."' border='0' style='vertical-align:middle;'></a></div>";
	echo "</td></tr></table></td>";
	echo "<td width='16' background='".THEME."images/darkSilverFooter_06.gif'><img src='".THEME."images/darkSilverFooter_06.gif' width='16' height='1'>";
	echo "</td></tr></table>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='16'><img src='".THEME."images/darkSilverFooter_01.gif' width='16' height='13'></td>";
	echo "<td height='13' background='".THEME."images/darkSilverFooter_02.gif'><img src='".THEME."images/darkSilverFooter_02.gif' width='1' height='13'></td>";
	echo "<td width='16'><img src='".THEME."images/darkSilverFooter_04.gif' width='16' height='13'></td></tr></table></td></tr></table>";
}

// Open table begins

function opentable($title) {

	echo "<table width='100%' border='0' cellspacing='0' cellpadding='3'><tr><td>";
	echo "<table width='100%' border='0' cellpadding='0' cellspacing='0'><tr>";
	echo "<td width='30' height='25' background='".THEME."images/darkSilverHeader_01.gif'></td>";
	echo "<td height='25' background='".THEME."images/darkSilverHeader_03.gif'><div align='center'><font class='block-title'><strong>$title</strong></font></div></td>";
	echo "<td width='30' height='25' background='".THEME."images/darkSilverHeader_05.gif'></td></tr></table>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='16' background='".THEME."images/darkSilverFooter_05.gif'></td>";
	echo "<td bgcolor='#000000'>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='4'><td>";
	echo "<tr><td class='main-body'></td></table>";
}

// Close table end
function closetable() {

	echo"</td>";
	echo "<td width='16' background='".THEME."images/darkSilverFooter_06.gif'>";
	echo "</td></tr></table></td></tr></table>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='16'><img src='".THEME."images/darkSilverFooter_01.gif' width='16' height='13'></td>";
	echo "<td height='13' background='".THEME."images/darkSilverFooter_02.gif'><img src='".THEME."images/darkSilverFooter_02.gif' width='1' height='13'></td>";
	echo "<td width='16'><img src='".THEME."images/darkSilverFooter_04.gif' width='16' height='13'>";
	echo "</td></tr></table></td></tr></table>";
}

function openside($title) {

	echo "<table width='100%' border='0' cellspacing='0' cellpadding='3'><tr><td>";
	echo "<table width='100%' border='0' cellpadding='0' cellspacing='0'><tr>";
	echo "<td width='30' height='25' background='".THEME."images/darkSilverHeader_01.gif'></td>";
	echo "<td height='25' background='".THEME."images/darkSilverHeader_03.gif'><div align='center'><font class='block-title'><strong>$title</strong></font></div></td>";
	echo "<td width='30' height='25' background='".THEME."images/darkSilverHeader_05.gif'></td></tr></table>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='16' background='".THEME."images/darkSilverFooter_05.gif'></td>";
	echo "<td bgcolor='#000000'>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='4'><td><tr>";
	echo "<td class='side-body'></td></table>";
}

function closeside() {

	echo "</td>";
	echo "<td width='16' background='".THEME."images/darkSilverFooter_06.gif'>";
	echo "</td></tr></table></td></tr></table>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='16'><img src='".THEME."images/darkSilverFooter_01.gif' width='16' height='13'></td>";
	echo "<td height='13' background='".THEME."images/darkSilverFooter_02.gif'><img src='".THEME."images/darkSilverFooter_02.gif' width='1' height='13'></td>";
	echo "<td width='16'><img src='".THEME."images/darkSilverFooter_04.gif' width='16' height='13'>";
	echo "</td></tr></table></td></tr></table>";
	tablebreak();
}

function opensidex($title,$open="on") {
$box_img = ($open=="on" ? "off" : "on");

	echo "<table width='100%' border='0' cellspacing='0' cellpadding='3'><tr><td>";
	echo "<table width='100%' border='0' cellpadding='0' cellspacing='0'><tr>";
	echo "<td width='30' height='25' background='".THEME."images/darkSilverHeader_01.gif'></td>";
	echo "<td height='25' background='".THEME."images/darkSilverHeader_03.gif'><img align='right' style='cursor:hand' onclick=\"javascript:flipBox('$title')\" name='b_$title' alt='$box_img' border='0' src='".THEME."images/panel_$box_img.gif'><div align='center'><font class='block-title'><strong>$title</strong></font></div></td>";
	echo "<td width='30' height='25' background='".THEME."images/darkSilverHeader_05.gif'></td></tr></table>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='16' background='".THEME."images/darkSilverFooter_05.gif'></td>";
	echo "<td bgcolor='#000000'>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='4'><td><tr>";
	echo "<td class='side-body'></td></table>";
	echo "<div id='box_$title'".($open=="off" ? "style='display:none'" : "").">\n";
}


function closesidex() {

	echo "</td>";
	echo "<td width='16' background='".THEME."images/darkSilverFooter_06.gif'>";
	echo "</td></tr></table></td></tr></table>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='16'><img src='".THEME."images/darkSilverFooter_01.gif' width='16' height='13'></td>";
	echo "<td height='13' background='".THEME."images/darkSilverFooter_02.gif'><img src='".THEME."images/darkSilverFooter_02.gif' width='1' height='13'></td>";
	echo "<td width='16'><img src='".THEME."images/darkSilverFooter_04.gif' width='16' height='13'>";
	echo "</td></tr></table></td></tr></table>";
	tablebreak();
}

// Table functions
function tablebreak() {
	echo "<table width='100%' cellspacing='0' cellpadding='0'><tr><td height='8'></td></tr></table>\n";
}
?>