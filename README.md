FAQ Plugin README

For installation instructions; open the doc/install.html file.
For upgrade instructions; open the doc/install.html file.

CHANGES
-------

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

LICENSE
-------
This plugin is licensed under the GPL - same as GeekLog.

SUPPORT
-------
When installing the plugin it will create a small FAQ about it self.
Other options support options are:
- Visit http://plugincms.com for support regarding this plugin.
- Use the GeekLog Forum at http://www.geeklog.net if that doesn't help you.
- As a last resort you may contact the author(s) of this plugin. Check
  the source files for contact information.

Emil Gustafsson (emil AT cellfish DOT se)
