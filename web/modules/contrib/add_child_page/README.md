# Add Child Page

INTRODUCTION
------------

* This module adds a tab on selected content types in order
to add a child page to the current page. The user will then
be redirected to the node add form to add a node with the
parent menu already selected.

REQUIREMENTS D8/D9
---------------

This module requires the following module:
 * Token - https://www.drupal.org/project/token

INSTALLATION
------------

The installation of this module is like other Drupal modules.

 1. If your site is [managed via Composer](https://www.drupal.org/node/2718229),
    use Composer to download the add_child_page module running
    ```composer require "drupal/add_child_page"```. Otherwise copy/upload
    the add_child_page module to the modules directory of your
    Drupal installation.

 2. Enable the 'Add Child Page' module in 'Extend'.
   (/admin/modules)

 3. Set up user permissions. (/admin/people/permissions#module-add_child_page)

CONFIGURATION
-------------

* Select the content types that would display the "Add Child Page"
tab on the module's configuration page (/admin/config/content/add-child-page).

* Select which content type the new page should be or it will default to the
same content type as the parent.

EXCEPTIONS
-------------

* If the node is on more than one menu, it will default to the first
one and a warning message will appear at the top of the page to warn
the user and allow change.

* An error message will also return if your current node does not
belong to any menu.

* Make sure that the menu that your content is and that you want to
add a child page to is enabled for the content type under Menu Settings.
These options will not be overridden.

MAINTAINERS
-----------

 * Bbombachini - https://www.drupal.org/u/bbombachini

 LINKS
-----

Project page: https://www.drupal.org/project/add_child_page
Submit bug reports, feature suggestions: https://www.drupal.org/project/issues/add_child_page