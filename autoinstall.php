<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | FAQ Plugin 1.0                                                            |
// +---------------------------------------------------------------------------+
// | autoinstall.php                                                           |
// |                                                                           |
// | This file provides helper functions for the automatic plugin install.     |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2008-2010 by the following authors:                         |
// |                                                                           |
// | Authors: Dirk Haun         - dirk AT haun-online DOT de                   |
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


function plugin_autoinstall_faq($pi_name)
{
    $pi_name         = 'faq';
    $pi_display_name = 'FAQ';
    $pi_admin        = $pi_display_name . ' Admin';

    $info = array(
        'pi_name'         => $pi_name,
        'pi_display_name' => $pi_display_name,
        'pi_version'      => '1.2.0',
        'pi_gl_version'   => '2.1.3',
        'pi_homepage'     => 'https://github.com/Geeklog-Plugins/faq'
    );

    $groups = array(
        $pi_admin => 'Has full access to ' . $pi_display_name . ' features'
    );

    $features = array(
        $pi_name . '.admin' => 'Full access to ' . $pi_display_name . ' category editor', 
        $pi_name . '.edit' => 'Full access to ' . $pi_display_name . ' editor'
    );

    $mappings = array(
        $pi_name . '.admin' => array($pi_admin), 
        $pi_name . '.edit' => array($pi_admin) 
    );

    $tables = array(
        'faq',
        'faq_category'
    );
    
    $requires = array(
        array(
               'db' => 'mysql',
               'version' => '4.1'
             )
    );

    $inst_parms = array(
        'info'      => $info,
        'groups'    => $groups,
        'features'  => $features,
        'mappings'  => $mappings,
        'tables'    => $tables
    );

    return $inst_parms;
}

function plugin_load_configuration_faq($pi_name)
{
    global $_CONF;

    $base_path = $_CONF['path'] . 'plugins/' . $pi_name . '/';

    require_once $_CONF['path_system'] . 'classes/config.class.php';
    require_once $base_path . 'install_defaults.php';

    return plugin_initconfig_faq();
}

function plugin_postinstall_faq($pi_name)
{
    return true;
}

function plugin_compatible_with_this_version_faq($pi_name)
{
    
    return true;
}

?>
