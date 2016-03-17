<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright � 2002 - 2011 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: infusion_db.php
| CVS Version: 1.00
| Author: INSERT NAME HERE
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

if (!defined("DB_INFUSION_TABLE")) {
	define("DB_INFUSION_TABLE", DB_PREFIX."projects_panel");
}

function get_projects_info() {
    
    $retval = array();
    $query = "SELECT * FROM " . DB_INFUSION_TABLE;
    
    $res = dbquery($query);
    
    while ($proj = dbarray($res)) {
        array_push($retval, $proj);
    }
    
    if (count($retval) <= 0) {
        return FALSE;
    } 
    else {
        return $retval;
    }
}

function get_project($id) {
    
    $query = "SELECT * FROM " . DB_INFUSION_TABLE . " WHERE proj_id = '" . mysql_real_escape_string($id) . "'";
    
    $res = dbquery($query);
    if ($res) {
        return dbarray($res);
    }
    else {
        return FALSe;
    }
    
}

function update_project($id, $img, $link, $desc) {
    
    $query = "UPDATE " . DB_INFUSION_TABLE . 
            " SET proj_img = '" . mysql_real_escape_string($img) . "'," .
            " proj_link = '" . mysql_real_escape_string($link) . "'," . 
            " proj_desc = '" . mysql_real_escape_string($desc) . "'" . 
            " WHERE proj_id = '" . mysql_real_escape_string($id) . "'";
    
    //echo $query . '<br />';
    
    if (dbquery($query)) {
        return TRUE;
    }
    else {
        return FALSE;
    }
}

function add_project($link, $img, $desc) {
    
    $query = "INSERT INTO " . DB_INFUSION_TABLE . "(proj_link, proj_img, proj_desc)" .
            " VALUES ('" . mysql_real_escape_string($link) . "'," .
            "'" . mysql_real_escape_string($img) . "'," .
            "'" . mysql_real_escape_string($desc) . "')";
    
    if (dbquery($query)) {
        return TRUE;
    }
    else {
        return FALSE;
    }
    
}

function delete_project($id) {
    $id = mysql_real_escape_string($id);
    $query = "DELETE FROM " . DB_INFUSION_TABLE . " WHERE proj_id = '" . $id ."'";
    
    echo $query . '<br />';
    
    if (dbquery($query)) {
        return TRUE;
    }
    else {
        return FALSE;
    }
}

?>