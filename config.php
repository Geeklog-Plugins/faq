<?php

// Reminder: always indent with 4 spaces (no tabs). 
// +---------------------------------------------------------------------------+
// | config.php   FAQ plugin configuration file                                |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2006 by the following authors:                              |
// |                                                                           |
// | Authors: Emil Gustafsson   - emil AT cellfish DOT se                      |
// +---------------------------------------------------------------------------+
// |                                                                           |
// | This program is licensed under the terms of the GNU General Public License|
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.                      |
// | See the GNU General Public License for more details.                      |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// |                                                                           |
// +---------------------------------------------------------------------------+
//
// $Id$

$_FAQ_CONF = array();

// Set this to true if you have imported FAQMAN items into FAQ and have old faqman faq autotags.
// If a faq autolink is used that is a numeric and it cannot be found, it tries to find a FAQ id
// matching 'FAQMAN_<number>_<something> since this is how the new id's are generated.
$_FAQ_CONF['faqman_autolink_patch'] = false;

// Seconds a FAQ is considered "new" in the What's New block.
$_FAQ_CONF['newfaqinterval']    = 60*60*24*14;

// Set to true if you do not want to list new FAQs in the What's New block.
$_FAQ_CONF['hidenewfaq']    = true;

// Set to true if you want to hide the FAQ menu item from the users.
$_FAQ_CONF['hidefaqmenu']    = false;

// If a user views a FAQ entry and the user has any of the rights listed below,
// the hit counter is not increased. Typically used to let FAQ managers view the
// FAQ without impact on the hit counter. 
// An empty string means always increase the hit counter. Several rights may be
// given if separated by a coma ie: 'faq.admin,faq.edit'.
$_FAQ_CONF['no_hit_rights'] = 'faq.admin,faq.edit';

/**
 * Define default permissions for new links created from the Admin panel.
 * Permissions are perm_owner, perm_group, perm_members, perm_anon (in that
 * order). Possible values:<br>
 * - 3 = read + write permissions (perm_owner and perm_group only)
 * - 2 = read-only
 * - 0 = neither read nor write permissions
 * (a value of 1, ie. write-only, does not make sense and is not allowed)
 */ 
$_FAQ_CONF['default_permissions'] = array (3, 3, 2, 2);

// Sort orders may be 'id', 'date', 'title' or 'hits'
// i conjuction with 'ASC' or 'DESC'.
$_FAQ_CONF['cat_sort_order'] = 'hits DESC'; // Sort order of categories.
$_FAQ_CONF['faq_sort_order'] = 'hits DESC'; // Sort order of FAQs within a category.

?>
