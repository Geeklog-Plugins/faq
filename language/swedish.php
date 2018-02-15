<?php

/******************************************************************************
* swedish.php
* This is the swedish language page for the Geeklog FAQ Plug-in!
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
    'no_new' => 'Inga nya FAQs',
    'FAQ_cat_header' => $_CONF['site_name'] . ' FAQ',
    'Categories' => 'Kategorier',
    'Question' => 'Fråga',
    'Hits' => 'Klick',
    'Updated' => 'Uppdaterad',
    'Answer' => 'Svar',
    'no_autolink_faq' => '[FAQ ID "%s" existerar inte eller du har inte behörighet att läsa den]',
    'no_autolink_cat' => '[FAQ kategori "%s" existerar inte eller du har inte behörighet att läsa den]',
    'autolink_error' => '[fel i "%s" FAQ länk]'
);

/******************************************************************************
* for stats
******************************************************************************/
$LANG_FAQ_STATS = array(
    'stats_no_hits' => 'Det verkar inte finnas några FAQs eller så har ingen läst någon FAQ.',
    'stats_summary' => 'FAQ Kategorier/Frågor (klick) i systemet',
    'Question' => 'Fråga',
    'Hits' => 'Klick',
    'headline' => 'Topp Tio FAQs',
);

/******************************************************************************
* for the search
******************************************************************************/
$LANG_FAQ_SEARCH = array(
 'results' => 'FAQ Resultat',
 'title' => 'Fråga',
 'date' => 'Uppdaterad',
 'author' => 'Författare',
 'category' => 'Kategori',
 'hits' => 'Klick'
);

/******************************************************************************
* Messages for COM_showMessage the submission form
******************************************************************************/

$PLG_faq_MESSAGE1 = "Du försöker accessa en FAQ kategori du inte har behörighet till eller som inte finns. Detta försök har loggats.";
$PLG_faq_MESSAGE2 = "Du försöker accessa en FAQ fråga du inte har behörighet till eller som inte finns. Detta försök har loggats.";
$PLG_faq_MESSAGE3 = 'FAQen har raderats.';
$PLG_faq_MESSAGE4 = 'FAQen har sparats.';
$PLG_faq_MESSAGE5 = "Du försöker utföra en handling på en FAQ du inte har behörighet till eller som inte existerar. Detta försök har loggats.";
$PLG_faq_MESSAGE6 = 'Uppdatering av FAQ plugin lyckad.';
$PLG_faq_MESSAGE7 = 'Uppdatering av FAQ plugin misslyckad.';

/******************************************************************************
* admin
******************************************************************************/
$LANG_FAQ_ADMIN = array(
    'FAQ_Cat' => 'FAQ Kategori',
    'FAQ_Entry' => 'FAQ Fråga',
    'FAQ Entries' => 'FAQ Frågor',
    'Edit' => 'Ändra',
    'FAQ Editor' => 'FAQ Editor',
    'Cat Editor' => 'FAQ Kategori Editor',
    'Access Denied MSG' => 'Du har inte behörighet till FAQ administrationen. Notera att alla sådana försök loggas.',
    'delete' => 'radera',
    'save' => 'spara',
    'cancel' => 'avbryt',
    'show' => 'visa',
    'accessdenied' => "Du föröker accessa en FAQ du inte har behörighet till. Detta försök har loggats. <a href=\"{$_CONF['site_admin_url']}/plugins/faq/index.php\">Gå tillbaka till FAQ administrationen</a>.",
    'title' => 'Titel',
    'description' => 'Beskrivning',
    'question' => 'Fråga',
    'answer' => 'Svar',
    'id' => 'ID',
    'hits' => 'Klick',
    'changed' => 'Uppdaterad',
    'category' => 'Kategori',
    'all_cat' => 'Alla Kategorier',
    'date_will_update' => '<b>OBS:</b> Datumet kommer uppdateras då du sparar!',
    'reset_date' => 'Uppdatera datumet till <i>nu</i>.',
    'save_rights_error' => 'Du kan inte spara med en behörighet du inte har.',
    'missing_fields_faq' => 'Du måste ange fråga, svar och kategori.',
    'missing_fields_cat' => 'Du måste ange titel och beskrivning för varje kategori.',
    'delete_note' => 'OBS: Om du raderar denna kategori så raderas ALLA FAQs som tillhör denna kategori.',
    'FAQ Plugin' => 'FAQ Plugin',
    'faqman_import' => 'Du har FAQMAN pluginen installerad (vilken icke skall förväxlas med denna plugin). Men du kan importera data från FAQMAN pluginen.',
    'cat instructions' => 'Click on "Create New" menu item to create a FAQ Category. Click on the "FAQ Editor" menu item to create FAQ entries for your FAQ Category.',
    'import' => 'import',
    'access' => 'Rättigheter'
);

$LANG_FAQ_IMPORT = array(
    'header' => 'FAQ Plugin Import',
    'no_topics' => 'Det finns inga FAQMAN topics att importera.',
    'no_faqman' => 'FAQMAN pluginen är inte installerad.',
    'not_root' => 'Du måste vara medlem i ROOT gruppen för att importera FAQMAN topics.',
    'unknown' => 'Okänd import metod: ',
    'imported' => '%d FAQs i %d Kategorier importerade'
);

?>
