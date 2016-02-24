<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'local_qrlinks', language 'en'.
 *
 * @package    local_qrlinks
 * @copyright  2016 Nicholas Hoobin <nicholashoobin@catalyst-au.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// General plugin strings.
$string['pluginname'] = 'QR Links';
$string['nagivationlink'] = 'Create QR link';
$string['nagivationeditlink'] = 'Edit QR link';
$string['managelink'] = 'Manage QR links';
$string['createlabel'] = 'Create QR link';
$string['previewlabel'] = 'Preview QR link';
$string['name_missing'] = 'Please provide a name for this QR link';
$string['url_missing'] = 'Please provide a URL for this QR link';
$string['description_missing'] = 'Please provide a description for this QR link';
$string['manage_page_heading'] = 'QR Links Management';

// Table strings.
$string['form_element_header'] = 'Generate QR link';
$string['form_element_admin_header'] = 'Private fields';
$string['form_element_public_header'] = 'Public fields';
$string['form_element_url'] = 'URL';
$string['form_element_name'] = 'Name';
$string['form_element_description'] = 'Description';
$string['form_element_admin_name'] = 'Administrator Name';
$string['form_element_admin_description'] = 'Administrator Description';
$string['table_header_admin_name'] = 'Administrator Name';
$string['table_header_admin_description'] = 'Administrator Description';
$string['table_header_name'] = 'Public Name';
$string['table_header_description'] = 'Public Description';
$string['table_header_url'] = 'URL';
$string['table_header_createdby'] = 'User';
$string['table_header_datecreated'] = 'Date';
$string['table_header_options'] = 'Options';
$string['preview'] = 'Preview';

// QR link form strings
$string['admin_field_help'] = 'These fields are private identifiers for administrating QR links';
$string['public_field_help'] = 'These fields will be viewable on the public helper page';
$string['admin_name_help_field'] = 'A private field used by administrators to name the QR link';
$string['name_help_field'] = 'A public facing name that is seen on the helper page';
$string['url_help_field'] = 'The address that this QR link will resolve to';
$string['admin_description_help_field'] = 'A private description used by administrators for further details about the QR link';
$string['description_help_field'] = 'A public facing description that is seen on the helper page';

// Strings for capabilities.
$string['qrlinks:create'] = 'Create QR links';
$string['qrlinks:delete'] = 'Delete QR links';
$string['qrlinks:view'] = 'View a QR link';

// Unsorted strings.
$string['deletelinkheader'] = 'Delete QR Link';
$string['deletelinkdescription'] = 'Are you absolutely sure you want to completely delete the QR Link \'{$a}\'?';
$string['addnewlink'] = 'Add new QR Link';
$string['invalidurl'] = 'Invalid URL';
