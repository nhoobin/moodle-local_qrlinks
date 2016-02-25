QR Links - Moodle local plugin
========================

# Installation

Extract the plugin to /local/qrlinks

Run the Moodle upgrade.

# Usage (admin)

## Course settings for guest access.
In `Administration > Course administration > Users > Enrolment methods`, first ensure that you have added `guest access` as an enrolment method, and that it has its eye open.

In `Administration > Course administration > Edit settings`, scroll to `Guest access`

Set the drop down to `Yes`

For more information about guest access, read the [Moodle documentation for guess access](https://docs.moodle.org/29/en/Guest_access).

## Creating QR Links

If the current user has the `local/qrlinks:create` capability then a link in the navigation block will appear.

At any time you can click `Create QR link` and it will take you to an editing form to create a QR link for that page.

The creation form is divided into two sections, public and private.

The public fields will be visible in the helper page, and the description field can contain html.

The private fields are used with the management page to identify the QR links internally.

## Managing QR links
In `Administration > Site administration > Plugins > Local plugins > QR Links` you will see a list of all the QR links created.

You can manually create a new QR link via the `Add new QR Link` button.

Each link has an options field where you can delete, preview or edit the link.

# Usage (client)

Scan the QR code and access the content.
  
# TODO

Regarding the Create QR link/Edit QR link item in the global navigation, create intermediate page that if more than one QR link has been assigned to that URL.

qrlinks_edit, if editing the qr link, change submit button from Create QR link to Edit QR link.

Clean up unused cid/cmid that was not part of the implementation.
