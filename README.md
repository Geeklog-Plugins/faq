# Geeklog FAQ Plugin

* Maintainers: [Geeklog Community Members](https://github.com/Geeklog-Plugins/faq/graphs/contributors)
* Latest Release Supports: Geeklog v2.1.3 or higher

## Summary

The Geeklog FAQ plugin allows webmasters to create a list of FAQ categories which contain FAQ entries. Categories can have descriptions and Entries have a question asked and an answer given.

## Main Features

- Ids of FAQ Categories and Entries can be a unique text string (good for SEO)
- Entries include a hit counter
- Entries support HTML and autotags
- Makes use of Geeklog permissions for Categories and Entries

## Other Information

For installation instructions; open the doc/install.html file. For upgrade instructions; open the doc/install.html file.

Geeklog Homepage:
https://www.geeklog.net

FAQ Plugin Homepage:
https://github.com/Geeklog-Plugins/faq

To find the latest releases see:
https://github.com/Geeklog-Plugins/faq/releases

To request a feature or report an issue see: 
https://github.com/Geeklog-Plugins/faq/issues

## Versions

Version 1.2.0.1:
- Fixed an undefined variable error that could cause a sql error.

Version 1.2.0:
- Updated plugin for GeekLog 2.2.0 API. NOTE: This plugin will work with 
  GeekLog v2.1.3 and higher.
- Now plugin supports multiple themes.
- Fixed undefined variable errors.
- Removed FAQMAN import.
- Add Auto install and updated uninstall and upgrade functions.

Version 1.1.0:
- Updated plugin for GeekLog 1.5.0 API. NOTE: This plugin will not work with 
  earlier versions of GeekLog.
- Fixed SQL bug when updating FAQ categories.

Version 1.0.3:
- Fixed bug where updating FAQ categories and questions with percent 
  signs (%)was impossible.
- Added access rights column to FAQ (and category) lists for admins.
- Added UTF-8 language files for english and swedish in UTF-8 encoding.

Version 1.0.2:
- Some internal cleanup of the code.
- Patch so FAQMAN imports now handle content with ' in it.
- Patch for FAQMAN imports and old FAQMAN autotags.
- Number of hits and change date now available in faq templates.
  Templates updated.
- Allowed HTML now added to edit templates.

Version 1.0.1:
- This is the first public release of this plugin and it include 
  features like:
  - Autolink support.
  - GeekLog security limiting FAQ access.
  - Search functionality.
  - Ability to import FAQ topics from the faqman plugin.
