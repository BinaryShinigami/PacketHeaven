<?php
$enable_color_switcher = true;
if (!defined("IN_FUSION")) { die("Access Denied"); }
define("THEME_BULLET", "<img class='bullet' src='' alt='' />");
require_once INCLUDES."theme_functions_include.php";
require_once THEMES."templates/switcher.php";
$color_switcher = new Switcher("select", "color", "jpg", "blue", "switcherbutton");
if(!$enable_color_switcher){	$color_switcher->disable();}
redirect_img_dir(THEME."forum", THEME."forum/".$color_switcher->selected);
function get_head_tags(){
global $color_switcher;
echo $color_switcher->makeHeadTag();}
function render_page($license=false) {
global $locale, $main_style, $settings, $userdata, $color_switcher;
echo " <div id='opage'><div id='hbot'><div id='ipage'><div id='pl'><div id='pr'><div id='pb'><div id='pbl'><div id='pbr'><div id='ptl'><div id='ptr'>
<div id='top'><div id='header'><div id='logo'><a href='".$settings['siteurl']."'><img src='".BASEDIR.$settings['sitebanner']."' alt='".$settings['sitename']."' style='border: 0;' /></a></div>
<div id='user'>\n";
if (iMEMBER){
echo"<div id='name'>".$locale['global_035']." ".$userdata['user_name']."</div>\n";
}else{
echo "<div id='links'><ul><li><a href='".BASEDIR."login.php'>".$locale['global_104']."</a></li>
".($settings['enable_registration'] ? "<li><a href='".BASEDIR."register.php'>".$locale['global_107']."</a></li>\n" : "");
echo"</ul></div>\n";}
echo"</div></div>
<div id='infobar'><div id='navi'>".showsublinks(" ")."</div><div id='tab'>".$color_switcher->makeForm("flright")."</div></div></div>
<div id='cts' class='clearfix $main_style'>
".(LEFT ? "<div id='side-border-left'>".LEFT."</div>" : "")."
".(RIGHT ? "<div id='side-border-right'>".RIGHT."</div>" : "")."
<div id='main-bg'><div id='container'>".U_CENTER.CONTENT.L_CENTER."
</div></div></div> 
<div id='fout'><div id='fin'>
<div id='copy'>".(!$license ?  "<div class='floatL' style='padding-top:15px'>".showcopyright()."</div><div class='floatR' style='padding-top:15px;text-align:right'>".stripslashes($settings['footer'])."</div>" : "")."</div>
<div class='subfooter'><div class='floatL' style='padding-top:9px'>Conversion by <a href='http://fusionfusion.net/'>Mangee</a></div><div class='floatR' style='padding-top:9px;text-align:right'>Based on work from <a href='http://www.isoftwarereviews.com/'>isoftwarereviews</a></div></div>
<div class='subfooter'><div class='floatL' style='padding-top:9px'>".sprintf($locale['global_172'], substr((get_microtime() - START_TIME),0,4))."</div><div class='floatR' style='padding-top:9px;text-align:right'>".showcounter()."</div></div></div></div>
</div></div></div></div></div></div></div></div></div></div>\n";
}
function render_news($subject, $news, $info) {
global $locale;
opentable($subject);
echo "<div class='floatfix'>".$news."</div>
<div class='news-footer'>".newsposter($info," &middot;").newsopts($info,"&middot;").itemoptions("N",$info['news_id'])."
</div>\n";
closetable();
}
function render_article($subject, $article, $info) {
global $locale;
opentable($subject);
echo "<div class='floatfix'>".($info['article_breaks'] == "y" ? nl2br($article) : $article)."</div>
<div class='news-footer'>".articleposter($info," &middot;").articleopts($info,"&middot;").itemoptions("A",$info['article_id'])."
</div>\n";
closetable();
}
function opentable($title) {
echo"<div class='tt'>".$title."</div>
<div class='tbody'>\n";
}
function closetable() {
echo "</div>\n";
}


$panel_collapse = true;
function openside($title, $collapse = false, $state = "on") {
static $box_id = 0; $box_id++;
global $panel_collapse; $panel_collapse = $collapse;
echo "<div class='st'>".($collapse ? panelbutton($state,$box_id) : "")."$title</div>
<div class='sbody'>".($collapse ? panelstate($state, $box_id) : "");
}
function closeside() {
global $panel_collapse;
echo ($panel_collapse ? "</div>" : "")."</div>\n";
}
?>