<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | FAQ Plugin 1.0                                                            |
// +---------------------------------------------------------------------------+
// | functions.inc                                                             |
// |                                                                           |
// | This file does two things: 1) it implements the necessary Geeklog Plugin  |
// | API method and 2) implements all the common code needed by the FAQ        |
// | plugin' PHP files.                                                        |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2006 by the following authors:                              |
// |                                                                           |
// | Authors: Emil Gustafsson  - emil AT cellfish DOT se                       |
// +---------------------------------------------------------------------------+
// |                                                                           |
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// |                                                                           |
// +---------------------------------------------------------------------------+
//
// $Id$

global $_DB_table_prefix;

if (strpos ($_SERVER['PHP_SELF'], 'functions.inc') !== false) {
    die ('This file can not be used on its own.');
}

$langfile = $_CONF['path'] . 'plugins/faq/language/'
          . $_CONF['language'] . '.php';

if (file_exists ($langfile)) {
    require_once ($langfile);
} else {
    require_once ($_CONF['path'] . 'plugins/faq/language/english.php');
}

require_once ($_CONF['path'] . 'plugins/faq/config.php');

require_once ($_CONF['path'] . 'plugins/faq/api.inc');
require_once ($_CONF['path'] . 'plugins/faq/util.inc');

// database table names - don't change
$_TABLES['faq']               = $_DB_table_prefix . 'faq';
$_TABLES['faq_category']      = $_DB_table_prefix . 'faq_category';

function phpblock_faq_random()
{
    global $_TABLES, $_CONF, $LANG_FAQ_COMMON;
    
    $retval = '';
    
    $r = DB_query("SELECT faq.id AS id, faq.title AS title
                     FROM {$_TABLES['faq']} AS faq, 
                          {$_TABLES['faq_category']} AS cat 
                    WHERE faq.category = cat.id" 
                . COM_getPermSQL( 'AND', 0, 2, 'faq' ) 
                . COM_getPermSQL( 'AND', 0, 2, 'cat' ));
                
    $n = DB_numRows($r);
    $f = rand(0,$n-1);
    
    $retval .= DB_result($r, $f, 'title');
    $retval .= '<p align="right"><a href="' . $_CONF['site_url'];
    $retval .= '/faq/index.php?faq=' . DB_result($r, $f, 'id');
    $retval .= '">' . $LANG_FAQ_COMMON['Answer'];
    $retval .= '</a></p>';

    return $retval;
}

function faq_accessHelper($access)
{
  switch($access) {
  case 0:
    return '-';
  case 2:
    return 'R';
  case 3:
    return 'W';
  default:
    return '?';
  }
}

function faq_getListField_common($mode, $fieldname, $fieldvalue, $A, $icon_arr)
{
    global $_CONF,$_TABLES;

    switch($fieldname) {
        case "edit":
            $retval = "<a href=\"{$_CONF['site_admin_url']}/plugins/faq/index.php?mode={$mode}&amp;action=edit&amp;id={$A['id']}\">{$icon_arr['edit']}</a>";
            break;
        case 'title':
            $retval = "<a href=\"{$_CONF['site_url']}/faq/index.php?{$mode}={$A['id']}\">$fieldvalue</a>";
            break;
        case 'unixdate':
				if (is_callable('COM_strftime')) {
					$retval = COM_strftime($_CONF['daytime'], $A['unixdate']);
				} else {
					$retval = strftime($_CONF['daytime'], $A['unixdate']);
				}		
                break;
        case 'hits':
            $retval = COM_numberFormat ($A['hits']);
            break;
        case 'cnt':
            $retval = COM_numberFormat ($A['cnt']);
            break;
        case 'access':
            $user = DB_getItem($_TABLES['users'],'username', "uid = {$A['owner_id']}");
            $group = DB_getItem($_TABLES['groups'],'grp_name', "grp_id = {$A['group_id']}");
            $retval = sprintf("%s:%s (%s%s%s%s)",$user,$group,
                              faq_accessHelper($A['perm_owner']),
                              faq_accessHelper($A['perm_group']),
                              faq_accessHelper($A['perm_members']),
                              faq_accessHelper($A['perm_anon']));
            break;
        default:
            $retval = $fieldvalue;
            break;
    }
    
    return $retval;
}

function faq_getListField_faq($fieldname, $fieldvalue, $A, $icon_arr)
{
    return faq_getListField_common('faq', $fieldname, $fieldvalue, $A, $icon_arr);
}

function faq_getListField_cat($fieldname, $fieldvalue, $A, $icon_arr)
{
    return faq_getListField_common('cat', $fieldname, $fieldvalue, $A, $icon_arr);
}

function faq_getCategoryList($selected = '')
{
  global $_TABLES, $_FAQ_CONF;

  $retval = '';
  $r = DB_query("SELECT id, title FROM {$_TABLES['faq_category']}" . COM_getPermSQL( 'WHERE', 0, 3));
  $n = DB_numRows($r);
  for ($i=0; $i<$n; $i++) {
    $A = DB_fetchArray($r);
    $retval .= "<option value=\"{$A['id']}\"";
    if ( ! empty($selected) && $A['id'] == $selected)
      $retval .= " selected=\"selected\"";
    $retval .= ">{$A['title']}</option>\n";
  }
  return $retval;
}

?>
