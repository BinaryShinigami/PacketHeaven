<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright � 2002 - 2011 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: new_infusion_admin.php
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
require_once "../../maincore.php";
require_once THEMES."templates/admin_header.php";

include INFUSIONS."projects_panel/infusion_db.php";

if (!checkrights("S") || !defined("iAUTH") || $_GET['aid'] != iAUTH) { redirect("../index.php"); }

// Check if locale file is available matching the current site locale setting.
if (file_exists(INFUSIONS."projects_panel/locale/".$settings['locale'].".php")) {
	// Load the locale file matching the current site locale setting.
	include INFUSIONS."projects_panel/locale/".$settings['locale'].".php";
} else {
	// Load the infusion's default locale file.
	include INFUSIONS."projects_panel/locale/English.php";
}

$cur_proj = array(
    'proj_link' => '',
    'proj_img' => '',
    'proj_desc' => '',
    'proj_id' => '',
);

opentable('Projects Panel Admin');

if (isset($_POST['btnSave'])) {
    //Form Submitted Process data here
    if (strlen($_POST['proj_id']) <= 0) {
        if ((strlen($_POST['proj_img']) <= 0) || (strlen($_POST['proj_link']) <= 0) || (strlen($_POST['proj_desc']) <= 0)) {
            echo '<center style="color: red;">All Project Form Fields Required!</center><br />';
        }
        else {
            $res = add_project(
                $_POST['proj_link'],
                $_POST['proj_img'], 
                $_POST['proj_desc']
                );
            if ($res) {
                echo '<center style="color: green;">Project Added Successfully!</center><br />';
            }
            else {
                echo '<center style="color: red;">Failed to Add Project!</center><br />';
            }
        }
    }
    else {
        //Update project
        if ((strlen($_POST['proj_img']) <= 0) || (strlen($_POST['proj_link']) <= 0) || (strlen($_POST['proj_desc']) <= 0)) {
            echo '<center style="color: red;">All Project Form Fields Required!</center><br />';
        }
        else {
            $res = update_project(
                $_POST['proj_id'],
                $_POST['proj_img'], 
                $_POST['proj_link'], 
                $_POST['proj_desc']
                );
            if ($res) {
                echo '<center style="color: green;">Project Updated Successfully!</center><br />';
            }
            else {
                echo '<center style="color: red;">Failed to Update Project!</center><br />';
            }
        }
    }
}

if (isset($_POST['btnEdit'])) {
    //Edit Pressed
    $cur_proj = get_project($_POST['proj_select_id']);
    
}

if (isset($_POST['btnDel'])) {
    //Delete Pressed
    if (delete_project($_POST['proj_id'])) {
        echo '<center style="color: green;">Project Deleted Successfully!</center><br />';
    }
    else {
        echo '<center style="color: red;">Unable to Delete Project!</center><br />';
    }
}

$projects = get_projects_info();

?>
<center>
<form action='' method='post'>
    <table>
        <tr>
            <td>
                Select a project: 
            </td>
            <td>
                <select id="proj_select_id" name='proj_select_id' width='50'>
                    <?php 
                        if ($projects) {
                            foreach($projects as $proj) {
                                echo '<option value="' . $proj['proj_id'] . '">' . $proj['proj_desc'] . "</option>\r\n";
                            }
                        }
                        else {
                            echo '<option>None</option>\n';
                        }
                        ?>
                </select>
                <input type='submit' value='Edit' id='btnEdit' name='btnEdit' />
                <input type='submit' value='Delete' id='btnDel' name='btnDel' />
            </td>
        </tr>
        <tr>
            <td>
                Project Link:
            </td>
            <td>
                <input type='text' id='proj_link' name='proj_link' value='<?php echo $cur_proj['proj_link']; ?>' />
            </td>
        </tr>
        <tr>
            <td>
                Project Image URL:
            </td>
            <td>
                <input type='text' id='proj_img_url' name='proj_img' value='<?php echo $cur_proj['proj_img']; ?>' />
            </td>
        </tr>
        <tr>
            <td>
                Project Description:
            </td>
            <td>
                <input type='text' id='proj_desc' name='proj_desc' value='<?php echo $cur_proj['proj_desc']; ?>' />
            </td>
        </tr>
        <tr>
            <td colspan='2'>
                <center>
                    <input type='hidden' value='<?php echo $cur_proj['proj_id']; ?>' id='proj_id' name='proj_id' />
                    <input type='submit' value='Save' id='btnSave' name='btnSave' />
                </center>
            </td>
        </tr>
    </table>
</form>
</center>
<?php

closetable();

require_once THEMES."templates/footer.php";
?>