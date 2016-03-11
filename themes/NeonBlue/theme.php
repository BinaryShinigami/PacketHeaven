<?php

if (!defined("IN_FUSION")) { die("Access Denied"); }

define("THEME_WIDTH", "900");
define("THEME_BULLET", "<img src='".THEME."images/bullet.gif' alt='' style='border:0' />");

require_once INCLUDES."theme_functions_include.php";

function render_page($license=false) {

	global $aidlink, $settings, $main_style, $locale, $userdata;

echo "<table align='center' cellspacing='0' cellpadding='0' width='".THEME_WIDTH."' class='outer-border'>
<tr>
<td>
<table cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td class='full-header'>
  <table cellpadding='0' cellspacing='0' width='100%'>
    <tr>
      <td class='logo'><img src='".THEME."images/logo.gif' alt='' /></td>
    </tr>
  </table>
  </td>
  <td class='full-header2' align='right' valign='top' width='350'>
  	<a href='".BASEDIR."index.php' title='Home'><img src='".THEME."images/home.gif' alt='' width='11' height='11' border='0' /></a>&nbsp;&nbsp;
	<a href='".BASEDIR."search.php' title='Search'><img src='".THEME."images/arama.gif' alt='' width='11' height='11' border='0' /></a>&nbsp;&nbsp;
  	<a href='".BASEDIR."contact.php' title='Contact'><img src='".THEME."images/iletisim.gif' alt='' width='13' height='9' border='0' /></a>&nbsp;&nbsp;
<br/><br/><br/>
  	<br/><br/><br/>
</td></tr></table>\n";


echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>
<td width='140'><img src='".THEME."images/menuleft.gif' alt='' style='border-left: 1px #a7a7a7 solid;' /></td>
<td align='center' class='sub-header-alti'>".showsublinks(" | ")."</td>
<td width='140'><img src='".THEME."images/menuright.gif' alt='' style='border-right: 1px #a7a7a7 solid;' /></td>
</tr>
</table>\n";


//echo "<table cellpadding='0' cellspacing='0' width='100%'>\n<tr>\n";

//Content
	echo "<table cellpadding='0' cellspacing='0' class='border' width='".THEME_WIDTH."' align='center'>\n<tr>\n";
	if (LEFT) { echo "<td class='side-border-left' valign='top'>".LEFT."</td>"; }
	echo "<td class='main-bg' valign='top'>".U_CENTER.CONTENT.L_CENTER."</td>";
	if (RIGHT) { echo "<td class='side-border-right' valign='top'>".RIGHT."</td>"; }
	echo "</tr>\n</table>\n";


//footer

echo "<table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."' align='center'>
<tr>
<td align='left' width='50%' height='241' class='footer'><br/>\n";
if (!$license) { echo showcopyright()."<br/>NeonBlue Theme by <a href='http://www.photoshopturk.org'>pHÈR-d</a> | \n"; }  echo showcounter()."<br/>Converted to v7 by <a target='_blank' href='http://www.kaj-max.dk'>WhoCare</a><br/>
<a href='http://validator.w3.org/check?uri=referer'><img src='".THEME."images/vhtml.png' alt='XHTML' /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='http://jigsaw.w3.org/css-validator/check/referer'><img src='".THEME."images/vcss.png' alt='CSS' /></a>
</td>
<td align='right' width='50%' class='footerright'>\n";
echo "<a href='".BASEDIR."index.php'>Home</a> | <a href='".BASEDIR."articles.php'>Articles</a> | <a href='".BASEDIR."forum/index.php'>Forum</a> | <a href='".BASEDIR."downloads.php'>Download</a> | <a href='".BASEDIR."search.php'>Search</a> | <a href='".BASEDIR."contact.php'>Contact</a><br/><br/><br/><br/>\n";
echo "</td>
</tr>
</table>
</td>
</tr>
</table>\n";

}

function render_news($subject, $news, $info) {

echo "<table cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td class='capmain'>$subject</td>
</tr>
<tr>
<td class='main-body'>$news</td>
</tr>
<tr>
<td align='center' class='news-footer'>\n";
echo newsposter($info," &middot;").newsopts($info,"&middot;").itemoptions("N",$info['news_id']);
echo "</td>
</tr>
</table>\n";

}

function render_article($subject, $article, $info) {

echo "<table width='100%' cellpadding='0' cellspacing='0'>
<tr>
<td class='capmain'>$subject</td>
</tr>
<tr>
<td class='main-body'>
".($info['article_breaks'] == "y" ? nl2br($article) : $article)."
</td>
</tr>
<tr>
<td align='center' class='news-footer'>\n";
echo articleposter($info," &middot;").articleopts($info,"&middot;").itemoptions("A",$info['article_id']);
echo "</td>
</tr>
</table>\n";

}

function opentable($title) {

echo "<table cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td align='center' class='capmain'>$title</td>
</tr>
<tr>
<td class='main-body'>\n";

}

function closetable() {

echo "</td>
</tr>
</table>\n";

}

function openside($title) {

echo "<table cellpadding='0' cellspacing='0' width='100%' class='border'>
<tr>
<td class='scapmain'>∑ $title</td>
</tr>
<tr>
<td class='side-body'>\n";

}

function closeside() {

echo "</td>
</tr>
</table><br/>\n";

}
?>