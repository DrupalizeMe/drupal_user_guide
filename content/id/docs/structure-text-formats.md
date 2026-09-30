---
title: "Concept: Text Formats and Editors"
description: "Overview of text formats, filters, editors, and cross-site scripting."
id: "structure-text-formats"
translation_key: "structure-text-formats"
source_locale: "id"
---
## What are text formats and filters? { #structure-text-formats }

_Text formats_ change how HTML tags and other text are processed and displayed
on your site. Text formats are composed of a series of _filters_, each of which
transforms text. When users create content, a text format is associated with the
content, and the full, original text is stored in the database. The content is
then passed through the filters in the text format before it becomes output on
the site.

The core Filter module provides text format functionality, and the core Standard
installation profile sets up _Basic HTML_, _Restricted HTML_, and _Full HTML_
text formats. Each text format has an associated permission, so that you can
allow only trusted users to use permissive text formats. This restricts
untrusted users to text formats like _Basic HTML_, which filters out dangerous
HTML tags.
## What are the editors associated with text formats?

Each text format can be associated with an editor, such as a visual WYSIWYG
(What You See Is What You Get) HTML editor. The core Text Editor module provides
the ability to associate editors with text formats, and to configure the editors
(such as adding and removing buttons from their toolbars). The core CKEditor
module provides the industry-standard editor known as CKEditor, so that it can
be used to edit HTML content on your site.
## What is cross-site scripting?

Cross-site scripting (XSS) is a security vulnerability typically found in
websites. In a site that is not well protected, malicious users can enter script
into web pages that are viewed by other users (for example, in a comment or in
the body of a page). A cross-site scripting vulnerability may be used by
attackers to login as another user. It is important to configure the text
formats of your website to prevent such abuse.
## Related topics

[security-concept](./security-concept.md)
## Additional resources

* [_Drupal.org_ community documentation page "Filter module: text formats that filter user input"](https://www.drupal.org/docs/8/core/modules/filter/overview)
* [Wikipedia page "Cross-site scripting"](https://en.wikipedia.org/wiki/Cross-site_scripting)

*Attributions*

Written and edited by [Boris Doesborg](https://www.drupal.org/u/batigolix) and
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
