<?
/*--------------------------------------------+
| PHP-Fusion v6 - Content Management System   |
|---------------------------------------------|
| author: Nick Jones (Digitanium) © 2002-2005 |
| web: http://www.php-fusion.co.uk            |
| email: nick@php-fusion.co.uk                |
|---------------------------------------------|
| Released under the terms and conditions of  |
| the GNU General Public License (Version 2)  |
+--------------------------------------------*/
/*--------------------------------------------+
|       F-Liquid Theme for PHP-Fusion v6      |
|---------------------------------------------|
| author: Lorkan Themes - Shedrock © 2005     |
| web: http://phpfusion.org                   |
| email: webmaster@phpfusion.org              |
|---------------------------------------------|
| Released under the terms and conditions of  |
| the GNU General Public License (Version 2)  |
+--------------------------------------------*/

/************************/
/* Theme Settings		*/
/************************/

$body_text = "#000000";
$body_bg = "#A1A3B1";
$theme_width = "100%";
$theme_width_l = "164";
$theme_width_r = "164";

function render_header($header_content) {

global $theme_width,$settings;

	if ($searchbox == 0) {
	$searchbox = "<form name='search' action='".BASEDIR."search.php?stype=f' method='post'><input type='text' style='padding-top:2px;' name='stext' value='search forums' value='search forums' onFocus=\"if(this.value=='search forums')this.value='';\" value style=\"width:150;height:19;\"></td><td><input type='image' name='option' value='search' src='".THEME."images/search.gif' class=noborder border='0' title='submit search' alt='submit search'></td></form>";
} 
	echo "<table cellSpacing='0' cellPadding='0' width='100%' align='center' border='0'><tr>";
	echo "<td><table cellSpacing='0' cellPadding='0' align='center' border='0'><tr>";
	echo "<table width='100%'  border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td><table width='100%'  border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='30' height='24' align='left'><img src='".THEME."images/bnr_Tb1_crn_T_L.jpg' width='30' height='24'></td>";
	echo "<td width='182' height='24' align='left' background='".THEME."images/bnr_Tb1_struct_L.jpg'></td>";
	echo "<td background='".THEME."images/bnr_Tb1_tll.jpg'><img src='".THEME."images/spacer.gif' width='8' height='8' align='absmiddle'></td>";
	echo "<td width='182' height='24' background='".THEME."images/tab_structTR.jpg'></td>";
	echo "<td width='30' height='24'><img src='".THEME."images/bnr_Tb1_crn_T_L.jpg' width='30' height='24'></td></tr></table>";
	echo "<table width='100%'  border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='30' height='20'><img src='".THEME."images/bnr_Tb1_crn_B_L.jpg' width='30' height='20'></td>";
	echo "<td width='182' align='left' background='".THEME."images/bnr_Tb1_btm_01.jpg'><img src='".THEME."images/spacer.gif' width='182' height='1' align='absmiddle'></td>";
	echo "<td width='116' background='".THEME."images/bnr_Tb1_btm_02.jpg'></td>";
	echo "<td align='left' background='".THEME."images/bnr_Tb1_btm_04.jpg'><img src='".THEME."images/spacer.gif' width='12' height='8' align='absmiddle'></td>";
	echo "<td width='161' align='center' background='".THEME."images/bnr_Tb1_btm_03.jpg'>&nbsp;</td>";
	echo "<td align='right' background='".THEME."images/bnr_Tb1_btm_04.jpg'><img src='".THEME."images/spacer.gif' width='8' height='8' align='absmiddle'></td>";
	echo "<td width='116' background='".THEME."images/bnr_Tb1_btm_05.jpg'></td>";
	echo "<td width='182' background='".THEME."images/bnr_Tb1_btm_06.jpg'></td>";
	echo "<td width='30'><img src='".THEME."images/bnr_Tb1_crn_B_L-12.jpg' width='30' height='20'></td></tr></table>";
	echo "<table width='100%'  border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='30' height='132'><img src='".THEME."images/F-Liquid_14.jpg' width='30' height='132'></td>";
	echo "<td width='399' height='132'><img src='".THEME."images/F-Liquid_15.jpg' width='399' height='132'></td>";
	echo "<td background='".THEME."images/F-Liquid_16.jpg'>&nbsp;</td>";
	echo "<td width='158' valign='top' background='".THEME."images/tll_black_R.jpg'>";
	echo "<table width='100%'  border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td height='20'><img src='".THEME."images/spacer.gif' width='1' height='1'></td></tr>";
	echo "<tr><td>$searchbox</td></tr></table></td>";
	echo "<td width='15' align='right' background='".THEME."images/F-Liquid_16.jpg'><img src='".THEME."images/F-Liquid_23.jpg' width='15' height='132'></td>";
	echo "<td width='30' height='132' align='right'><img src='".THEME."images/F-Liquid_20.jpg' width='30' height='132'></td></tr></table>";
	echo "<table width='100%'  border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='30' height='63'><img src='".THEME."images/F-Liquid_27.jpg' width='30' height='63'></td>";
	echo "<td width='141' background='".THEME."images/bnrBL_23.jpg'><img src='".THEME."images/spacer.gif' width='141' height='1'></td>";
	echo "<td width='61' align='left'><img src='".THEME."images/F-Liquid_29.jpg' width='61' height='63'></td>";
	echo "<td align='right' background='".THEME."images/F-Liquid_30.jpg'>";
	echo "<table  border='0' cellspacing='0' cellpadding='0'><tr>";

//Links
	echo "<td align='right' width='100'><a href='".BASEDIR."index.php' class='theconsole'>Home</a></td>";
	echo "<td align='center' width='150'><a href='".BASEDIR."downloads.php' class='theconsole'>Downloads</a></td></tr>";
	echo "<tr><td><img src='".THEME."images/spacer.gif' width='1' height='30'></td>";
	echo "<td>&nbsp;</td></tr></table></td>";
	echo "<td width='88' align='center'><img src='".THEME."images/centerT.jpg' width='88' height='63'></td>";
	echo "<td align='left' background='".THEME."images/F-Liquid_30.jpg'>";
	echo "<table border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td align='center' width='150'><a href='".BASEDIR."forum/index.php' class='theconsole'>Forums</a></td>";
	echo "<td align='left' width='100'><a href='".BASEDIR."articles.php' class='theconsole'>Articles</a></td></tr>";
//Links end

	echo "<tr><td><img src='".THEME."images/spacer.gif' width='1' height='30'></td>";
	echo "<td>&nbsp;</td></tr></table></td>";
	echo "<td width='61' align='right'><img src='".THEME."images/F-Liquid_34.jpg' width='61' height='63'></td>";
	echo "<td width='130' background='".THEME."images/F-Liquid_36.jpg'>&nbsp;</td>";
	echo "<td width='46' align='right'><img src='".THEME."images/F-Liquid_38.jpg' width='46' height='63'></td>";
	echo "</tr></table></td></tr></table>";
	echo "<table width='100%' bgcolor='#535A62' cellpadding='0' cellspacing='0' border='0' align='center'>";
	echo "<tr valign='top'>";
	echo "<td width='30' valign='top' background='".THEME."images/lb.jpg'><img src='".THEME."images/spacer.gif' width='30' height='1' border='0' alt=''></td>";
}

function render_footer($license=false) {
	
global $theme_width,$settings,$locale;

	echo "<td width='30' valign='top' background='".THEME."images/rb.jpg'><img src='".THEME."images/spacer.gif' width='30' height='1' border='0'></td>";
	echo "</tr></table>";
	echo "<table width='100%'  border='0' cellspacing='0' cellpadding='0'><tr>";
	echo "<td width='75' height='124' align='left'><img src='".THEME."images/ft_l.jpg' width='75' height='124'></td>";
	echo "<td align='center' background='".THEME."images/ft_m.jpg'><font class=copyright>";
	echo "<br><br>".stripslashes($settings['footer'])."<br>";
if ($license == false) {
	echo "Powered by <a href='http://www.php-fusion.co.uk' target='_blank'>PHP-Fusion</a> v".$settings['version']." &copy; 2003-2005 | F-Liquid Theme by: <a target='_blank' href='http://www.effectica.com/'>Effectica</a> Ported by: <a target='_blank' href='http://www.phpfusion-themes.com'>PHP-Fusion Themes</a><br><br>";
}
	echo "".$settings['counter']." ".($settings['counter'] == 1 ? $locale['140']."" : $locale['141']."");
	echo "</font></td>";
	echo "<td width='75' height='124' align='right'><img src='".THEME."images/ft_r.jpg' width='75' height='124'>";
	echo "</td></tr></table></td></tr></table>";
}

function render_news($subject, $news, $info) {
	
global $locale;
	
	echo "<table width='100%'  border='0' cellpadding='0' cellspacing='0' bgcolor='BABABA'><tr>";
	echo "<td width='28' height='35'><img src='".THEME."images/story_tl.jpg' width='28' height='35'></td>";
	echo "<td background='".THEME."images/story_t.jpg'><img src='".THEME."images/spacer.gif' width='1' height='1'></td>";
	echo "<td width='28' height='35' align='right'><img src='".THEME."images/story_tr.jpg' width='28' height='35'></td></tr>";
	echo "<tr><td background='".THEME."images/story_l.jpg'>&nbsp;</td>";
	echo "<td><table border='0' cellpadding='3' cellspacing='0' width='100%'><tr>";
	echo "<td width=75% class=news align=left valign=top><div align='center'><font class='content'><strong>$subject</strong><br></font></div>";
	echo "<br><div align='center'><font class='content'>";
	echo "".$locale['040']."<a href='profile.php?lookup=".$info['user_id']."'>".$info['user_name']."</a> ";
	echo "".$locale['041'].showdate("longdate", $info['news_date'])."</font></div>";
      echo "<hr align='center'><font class='content'><div align='left'>$news</font></div>";
	echo "<hr><div align='center'><font class='content'>";
	echo "".($info['news_ext'] == "y" ? "<a href='news.php?readmore=".$info['news_id']."'>".$locale['042']."</a> ·" : "")."";
		if ($info['news_allow_comments']) 
	echo "<a href='news.php?readmore=".$info['news_id']."'>".$info['news_comments'].$locale['043']."</a> · ";
	echo "".$info['news_reads'].$locale['044']." ";
	echo "<a href='print.php?type=N&item_id=".$info['news_id']."'><img src='".THEME."images/printer.gif' alt='".$locale['045']."' border='0' style='vertical-align:middle;'></a>";
	echo "</font></div></td></tr></table></td>";
	echo "<td background='".THEME."images/story_r.jpg'>&nbsp;</td></tr>";
	echo "<tr><td height='35'><img src='".THEME."images/story_bl.jpg' width='28' height='35'></td>";
	echo "<td background='".THEME."images/story_b.jpg'>&nbsp;</td>";
	echo "<td align='right'><img src='".THEME."images/story_br.jpg' width='28' height='35'></td></tr></table>";
}

function render_article($subject, $article, $info) {
	
global $locale;
	
	echo "<table width='100%'  border='0' cellpadding='0' cellspacing='0' bgcolor='BABABA'><tr>";
	echo "<td width='28' height='35'><img src='".THEME."images/story_tl.jpg' width='28' height='35'></td>";
	echo "<td background='".THEME."images/story_t.jpg'><img src='".THEME."images/spacer.gif' width='1' height='1'></td>";
	echo "<td width='28' height='35' align='right'><img src='".THEME."images/story_tr.jpg' width='28' height='35'></td></tr>";
	echo "<tr><td background='".THEME."images/story_l.jpg'>&nbsp;</td>";
	echo "<td><table border='0' cellpadding='3' cellspacing='0' width='100%'><tr>";
	echo "<td width=75% class=news align=left valign=top><div align='center'><font class='content'><strong>$subject</strong><br></font></div>";
	echo "<br><div align='center'><font class='content'>";
	echo "".$locale['040']."<a href='profile.php?lookup=".$info['user_id']."'>".$info['user_name']."</a> ";
	echo "".$locale['041'].showdate("longdate", $info['article_date'])."</font></div>";
      echo "<hr align='center'><font class='content'><div align='left'>".($info['article_breaks'] == "y" ? nl2br($article) : $article)."</font></div>";
	echo "<hr><div align='center'><font class='content'>";
	echo "".($info['news_ext'] == "y" ? "<a href='news.php?readmore=".$info['news_id']."'>".$locale['042']."</a> ·" : "")."";
	if ($info['article_allow_comments']) echo $info['article_comments'].$locale['043']." · ";
	echo "".$info['article_reads'].$locale['044']." ";
	echo "<a href='print.php?type=A&item_id=".$info['article_id']."'><img src='".THEME."images/printer.gif' alt='".$locale['045']."' border='0' style='vertical-align:middle;'></a>";
	echo "</font></div></td></tr></table></td>";
	echo "<td background='".THEME."images/story_r.jpg'>&nbsp;</td></tr>";
	echo "<tr><td height='35'><img src='".THEME."images/story_bl.jpg' width='28' height='35'></td>";
	echo "<td background='".THEME."images/story_b.jpg'>&nbsp;</td>";
	echo "<td align='right'><img src='".THEME."images/story_br.jpg' width='28' height='35'></td></tr></table>";
}

// Open table begins
function opentable($title) {

	echo "<table width='100%'  border='0' cellpadding='0' cellspacing='0' bgcolor='#BABABA'><tr>";
	echo "<td width='28' height='35'><img src='".THEME."images/story_tl.jpg' width='28' height='35'></td>";
	echo "<td background='".THEME."images/story_t.jpg'><img src='".THEME."images/spacer.gif' width='1' height='1'></td>";
	echo "<td width='28' height='35' align='right'><img src='".THEME."images/story_tr.jpg' width='28' height='35'></td></tr>";
	echo "<tr><td background='".THEME."images/story_l.jpg'>&nbsp;</td>";
	echo "<td><table border='0' cellpadding='3' cellspacing='0' width='100%'><tr>";
	echo "<td width=75% class=news align=left valign=top><div align='center'><font class='content'><strong>$title</strong></font></div>";
	echo "<hr align='center'><font class='content'>";
}

// Close table end
function closetable() {

	echo "</font></td></tr></table></td>";
	echo "<td background='".THEME."images/story_r.jpg'>&nbsp;</td></tr>";
	echo "<tr><td height='35'><img src='".THEME."images/story_bl.jpg' width='28' height='35'></td>";
	echo "<td background='".THEME."images/story_b.jpg'>&nbsp;</td>";
	echo "<td align='right'><img src='".THEME."images/story_br.jpg' width='28' height='35'></td></tr></table>";
}

function openside($title) {

	echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#878C92'><tr>";
	echo "<td width='7' height='79' align='left'><img src='".THEME."images/blk_tl.jpg' width='7' height='79'></td>";
	echo "<td valign='top' background='".THEME."images/blk_head.jpg'>";
	echo "<table width='100%' border='0'><tr><td height='12'></td></tr>";
	echo "<tr><td align='center'><font class=content><b>$title</b></font></td></tr></table></td>";
	echo "<td width='7' align='right'><img src='".THEME."images/blk_tr.jpg' width='7' height='79'></td></tr>";
	echo "<tr><td background='".THEME."images/blk_l.jpg'></td>";
	echo "<td><table width='100%' border='0' cellspacing='2' cellpadding='0'><tr>";
	echo "<td class='side-body'><font class='content'>";
}

function closeside() {

	echo "</font></td></tr></table></td>";
	echo "<td background='".THEME."images/blk_r.jpg'></td></tr>";
	echo "<tr><td width='7' height='30'><img src='".THEME."images/blk_bl.jpg' width='7' height='30'></td>";
	echo "<td background='".THEME."images/blk_bc.jpg'></td>";
	echo "<td align='right'><img src='".THEME."images/blk_br.jpg' width='7' height='30' border='0'></td></tr></table>";
	tablebreak();
}

function opensidex($title,$open="on") {
$boxname = str_replace(" ", "", $title);
$box_img = $open == "on" ? "off" : "on";

	echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#878C92'><tr>";
	echo "<td width='7' height='79' align='left'><img src='".THEME."images/blk_tl.jpg' width='7' height='79'></td>";
	echo "<td valign='top' background='".THEME."images/blk_head.jpg'>";
	echo "<table width='100%' border='0'><tr><td height='12'></td></tr>";
	echo "<tr><td align='center'><img align='right' src='".THEME."images/panel_$box_img.gif' name='b_$boxname' alt='' onclick=\"javascript:flipBox('$boxname')\"><font class=content><b>$title</b></font></td></tr></table></td>";
	echo "<td width='7' align='right'><img src='".THEME."images/blk_tr.jpg' width='7' height='79'></td></tr>";
	echo "<tr><td background='".THEME."images/blk_l.jpg'></td>";
	echo "<td><table width='100%' border='0' cellspacing='2' cellpadding='0'><tr>";
	echo "<td class='side-body'><font class='content'>";
	echo "<div id='box_$boxname'".($open=="off"?" style='display:none'":"").">";

}


function closesidex() {

	echo "</font></div></td></tr></table></td>";
	echo "<td background='".THEME."images/blk_r.jpg'></td></tr>";
	echo "<tr><td width='7' height='30'><img src='".THEME."images/blk_bl.jpg' width='7' height='30'></td>";
	echo "<td background='".THEME."images/blk_bc.jpg'></td>";
	echo "<td align='right'><img src='".THEME."images/blk_br.jpg' width='7' height='30' border='0'></td></tr></table>";
	tablebreak();
}

// Table functions
function tablebreak() {

	echo "<table width='100%' cellspacing='0' cellpadding='0'><tr><td height='8'></td></tr></table>";
}
?>