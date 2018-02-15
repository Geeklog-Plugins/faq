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
    'Question' => 'Fr�ga',
    'Hits' => 'Klick',
    'Updated' => 'Uppdaterad',
    'Answer' => 'Svar',
    'no_autolink_faq' => '[FAQ ID "%s" existerar inte eller du har inte beh�righet att l�sa den]',
    'no_autolink_cat' => '[FAQ kategori "%s" existerar inte eller du har inte beh�righet att l�sa den]',
    'autolink_error' => '[fel i "%s" FAQ l�nk]'
);

/******************************************************************************
* for stats
******************************************************************************/
$LANG_FAQ_STATS = array(
    'stats_no_hits' => 'Det verkar inte finnas n�gra FAQs eller s� har ingen l�st n�gon FAQ.',
    'stats_summary' => 'FAQ Kategorier/Fr�gor (klick) i systemet',
    'Question' => 'Fr�ga',
    'Hits' => 'Klick',
    'headline' => 'Topp Tio FAQs',
);

/******************************************************************************
* for the search
******************************************************************************/
$LANG_FAQ_SEARCH = array(
 'results' => 'FAQ Resultat',
 'title' => 'Fr�ga',
 'date' => 'Uppdaterad',
 'author' => 'F�rfattare',
 'category' => 'Kategori',
 'hits' => 'Klick'
);

/******************************************************************************
* Messages for COM_showMessage the submission form
******************************************************************************/

$PLG_faq_MESSAGE1 = "Du f�rs�ker accessa en FAQ kategori du inte har beh�righet till eller som inte finns. Detta f�rs�k har loggats.";
$PLG_faq_MESSAGE2 = "Du f�rs�ker accessa en FAQ fr�ga du inte har beh�righet till eller som inte finns. Detta f�rs�k har loggats.";
$PLG_faq_MESSAGE3 = 'FAQen har raderats.';
$PLG_faq_MESSAGE4 = 'FAQen har sparats.';
$PLG_faq_MESSAGE5 = "Du f�rs�ker utf�ra en handling p� en FAQ du inte har beh�righet till eller som inte existerar. Detta f�rs�k har loggats.";
$PLG_faq_MESSAGE6 = 'Uppdatering av FAQ plugin lyckad.';
$PLG_faq_MESSAGE7 = 'Uppdatering av FAQ plugin misslyckad.';

/******************************************************************************
* admin
******************************************************************************/
$LANG_FAQ_ADMIN = array(
    'FAQ_Cat' => 'FAQ Kategori',
    'FAQ_Entry' => 'FAQ Fr�ga',
    'FAQ Entries' => 'FAQ Fr�gor',
    'Edit' => '�ndra',
    'FAQ Editor' => 'FAQ Editor',
    'Cat Editor' => 'FAQ Kategori Editor',
    'Access Denied MSG' => 'Du har inte beh�righet till FAQ administrationen. Notera att alla s�dana f�rs�k loggas.',
    'delete' => 'radera',
    'save' => 'spara',
    'cancel' => 'avbryt',
    'show' => 'visa',
    'accessdenied' => "Du f�r�ker accessa en FAQ du inte har beh�righet till. Detta f�rs�k har loggats. <a href=\"{$_CONF['site_admin_url']}/plugins/faq/index.php\">G� tillbaka till FAQ administrationen</a>.",
    'title' => 'Titel',
    'description' => 'Beskrivning',
    'question' => 'Fr�ga',
    'answer' => 'Svar',
    'id' => 'ID',
    'hits' => 'Klick',
    'changed' => 'Uppdaterad',
    'category' => 'Kategori',
    'all_cat' => 'Alla Kategorier',
    'date_will_update' => '<b>OBS:</b> Datumet kommer uppdateras d� du sparar!',
    'reset_date' => 'Uppdatera datumet till <i>nu</i>.',
    'save_rights_error' => 'Du kan inte spara med en beh�righet du inte har.',
    'missing_fields_faq' => 'Du m�ste ange fr�ga, svar och kategori.',
    'missing_fields_cat' => 'Du m�ste ange titel och beskrivning f�r varje kategori.',
    'delete_note' => 'OBS: Om du raderar denna kategori s� raderas ALLA FAQs som tillh�r denna kategori.',
    'FAQ Plugin' => 'FAQ Plugin',
    'faqman_import' => 'Du har FAQMAN pluginen installerad (vilken icke skall f�rv�xlas med denna plugin). Men du kan importera data fr�n FAQMAN pluginen.',
    'cat instructions' => 'Click on "Create New" menu item to create a FAQ Category. Click on the "FAQ Editor" menu item to create FAQ entries for your FAQ Category.',
    'import' => 'import',
    'access' => 'R�ttigheter'
);

$LANG_FAQ_IMPORT = array(
    'header' => 'FAQ Plugin Import',
    'no_topics' => 'Det finns inga FAQMAN topics att importera.',
    'no_faqman' => 'FAQMAN pluginen �r inte installerad.',
    'not_root' => 'Du m�ste vara medlem i ROOT gruppen f�r att importera FAQMAN topics.',
    'unknown' => 'Ok�nd import metod: ',
    'imported' => '%d FAQs i %d Kategorier importerade'
);

?>
