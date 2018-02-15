<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Generic Plugin Utility functions.                                         |
// +---------------------------------------------------------------------------+
// | util.inc                                                                  |
// |                                                                           |
// | Comon Utility functions used in several plugins.                          |
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

if (strpos ($_SERVER['PHP_SELF'], 'util.inc') !== false) {
    die ('This file can not be used on its own.');
}

if ( ! function_exists('UTIL_getParam')) {
  function UTIL_getParam($param, $default = '')
  {
    if (isset($_POST[$param]))
      return $_POST[$param];
    if (isset($_GET[$param]))
      return $_GET[$param];
    return $default;
  }
}

if ( ! function_exists('UTIL_getParamInt')) {
  function UTIL_getParamInt($param, $default = 0)
  {
    $r = UTIL_getParam($param, $default);
    if ( ! is_numeric($r))
      return $default;
    return $r;
  }
}

if ( ! function_exists('UTIL_getParamStr')) {
  function UTIL_getParamStr($param, $default = '')
  {
    return trim(UTIL_getParam($param, $default));
  }
}

if ( ! function_exists('UTIL_inGroupID')) {
  function UTIL_inGroupID($grp_id)
  {
    $usergroups = SEC_getUserGroups();
    for ($i = 0; $i < count($usergroups); $i++) {
      if ($grp_id == $usergroups[key($usergroups)]) {
        return true;
      }
      next($usergroups);
    }
    return false;
  }
}

if ( ! function_exists('UTIL_usersInGroup')) {
  function UTIL_usersInGroup($grp_id)
  {
    global $_TABLES;
    
    $users = array();
    
    $r = DB_query("SELECT ug_uid, ug_grp_id FROM {$_TABLES["group_assignments"]}
                    WHERE ug_main_grp_id = $grp_id");
    $n = DB_numRows($r);
    for ($i=0; $i<$n; $i++) {
      $A = DB_fetchArray($r);
      if ($A['ug_uid'] != 0) {
        $users[] = $A['ug_uid'];
      }
      else {
        $sub = UTIL_usersInGroup($A['ug_grp_id']);
        for ($j=0; $j<count($sub); $j++) {
          if ( ! in_array($sub[$j], $users))
            $users[] = $sub[$j];
        }
      }
    }
    return $users;
  }
}      

?>
