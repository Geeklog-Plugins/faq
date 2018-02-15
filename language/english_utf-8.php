<?php

/******************************************************************************
* english.php
* This is the english language page for the Geeklog FAQ Plug-in!
*
* Copyright (C) 2006 Emil Gustafsson
* emil@cellfish.se
*
* This program is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License
* as published by the Free Software Foundation; either version 2
* of the License, or (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*
*******************************************************************************
* $Id$
******************************************************************************/

$LANG_FAQ_COMMON = array(
    'FAQs' => 'FAQs',
    'FAQ' => 'FAQ',
    'no_new' => 'No recent new FAQs',
    'FAQ_cat_header' => $_CONF['site_name'] . ' FAQ',
    'Categories' => 'Categories',
    'Question' => 'Question',
    'Hits' => 'Hits',
    'Updated' => 'Updated',
    'Answer' => 'Answer',
    'no_autolink_faq' => '[FAQ ID "%s" does not exist or you do not have access to it]',
    'no_autolink_cat' => '[FAQ category "%s" does not exist or you do not have access to it]',
    'autolink_error' => '[error in "%s" FAQ link]'
);

/******************************************************************************
* for stats
******************************************************************************/
$LANG_FAQ_STATS = array(
    'stats_no_hits' => 'It appears that there are no FAQs on this site or no one has ever clicked on one.',
    'stats_summary' => 'FAQ Categories/Entries (hits) in the system',
    'Question' => 'Question',
    'Hits' => 'Hits',
    'headline' => 'Top Ten FAQs',
);

/******************************************************************************
* for the search
******************************************************************************/
$LANG_FAQ_SEARCH = array(
 'FAQ' => 'FAQ',
 'category' => 'Category',
 'results' => 'FAQ Results',
 'title' => 'Question',
 'date' => 'Updated',
 'author' => 'Author',
 'category' => 'Category',
 'hits' => 'Hits'
);

/******************************************************************************
* Messages for COM_showMessage the submission form
******************************************************************************/

$PLG_faq_MESSAGE1 = "You are trying to access a FAQ category you do not have access to or that doesn't exist. This attempt has been logged.";
$PLG_faq_MESSAGE2 = "You are trying to access a FAQ entry you do not have access to or that doesn't exist. This attempt has been logged.";
$PLG_faq_MESSAGE3 = 'The FAQ has been successfully deleted.';
$PLG_faq_MESSAGE4 = 'The FAQ has been successfully saved.';
$PLG_faq_MESSAGE5 = "You are trying to perform an action on a FAQ entry you do not have access to or that doesn't exist. This attempt has been logged.";
$PLG_faq_MESSAGE6 = 'FAQ plugin upgrade was successful.';
$PLG_faq_MESSAGE7 = 'FAQ plugin upgrade failed.';
/******************************************************************************
* admin
******************************************************************************/
$LANG_FAQ_ADMIN = array(
    'FAQ_Cat' => 'FAQ Category',
    'FAQ_Entry' => 'FAQ Entry',
    'FAQ Entries' => 'FAQ Entries',
    'Edit' => 'Edit',
    'FAQ Editor' => 'FAQ Editor',
    'Cat Editor' => 'FAQ Category Editor',
    'Access Denied MSG' => 'Sorry, you do not have access to the FAQ administration page. Please note that all attempts to access unauthorized features are logged.',
    'delete' => 'delete',
    'save' => 'save',
    'cancel' => 'cancel',
    'show' => 'show',
    'accessdenied' => "You are trying to access a FAQ item that you don't have rights to.  This attempt has been logged. Please <a href=\"{$_CONF['site_admin_url']}/plugins/faq/index.php\">go back to the FAQ administration screen</a>.",
    'title' => 'Title',
    'description' => 'Description',
    'question' => 'Question',
    'answer' => 'Answer',
    'id' => 'ID',
    'hits' => 'Hits',
    'changed' => 'Updated',
    'category' => 'Category',
    'all_cat' => 'All Categories',
    'date_will_update' => '<b>NOTE:</b> The date will be updated if you save!',
    'reset_date' => 'Update changed date to <i>now</i>.',
    'save_rights_error' => 'You cannot save with persmissions you do not have.',
    'missing_fields_faq' => 'You must supply Question, Answer and a Category for each FAQ entry.',
    'missing_fields_cat' => 'You must supply Title and a Description for each FAQ Category.',
    'delete_note' => 'NOTE: Deleting this category deletes ALL FAQs associated with this category.',
    'FAQ Plugin' => 'FAQ Plugin',
    'faqman_import' => 'You have the FAQMAN plugin installed (which is not the same as this plugin). But you may import data from the FAQMAN plugin.',
    'cat instructions' => 'Click on "Create New" menu item to create a FAQ Category. Click on the "FAQ Editor" menu item to create FAQ entries for your FAQ Category.',
    'import' => 'import',
    'access' => 'Access'
);

$LANG_FAQ_IMPORT = array(
    'header' => 'FAQ Plugin Import',
    'no_topics' => 'There are no FAQMAN topics to import.',
    'no_faqman' => 'The FAQMAN plugin is not installed.',
    'not_root' => 'You must be a member of the ROOT group in order to import FAQMAN topics.',
    'unknown' => 'Unknown import action: ',
    'imported' => '%d FAQs in %d Categories imported'
);

?>
