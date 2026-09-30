---
title: "Configuring Text Formats and Editors"
description: "How to make a change to a text format and its editor configuration."
id: "structure-text-format-config"
translation_key: "structure-text-format-config"
source_locale: "pt-br"
---
## Goal { #structure-text-format-config }

Add a horizontal rule tag to the _Basic HTML_ text format, and a corresponding
button to its editor configuration.
## Prerequisite knowledge

[structure-text-formats](./structure-text-formats.md)
## Site prerequisites

* The core Filter, Editor, and CKEditor modules must be installed. They are
installed on your site when you install with the core Standard installation
profile.
* The _Basic HTML_ text format must exist. This is created on your site when you
install with the core Standard installation profile.
## Steps

1. In the _Manage_ administrative menu, navigate to _Configuration_ > _Content
    authoring_ > _Text formats and editors_ (_admin/config/content/formats_). The
    _Text formats and editors_ page appears. Note that the names of the text formats
    that came with your installation profile are shown in English on this page; see
    [language-concept](./language-concept.md) for an explanation.
1. Click _Configure_ for the _Basic HTML_ text format. The _Basic HTML_ page
    appears.
1. Note that _CKEditor_ is selected in the _Text editor_ field. This allows you
    to configure the editor's toolbar.
1. Drag the _horizontal rule_ button from _Available buttons_ to _Tools_ under
    _Active toolbar_. You may need to click the _Show group names_ link to see the
    _Tools_ group name. As an alternative to dragging, you can tab to select
    buttons and then move them using keyboard arrow keys.
    <img src="/images/structure-text-format-config-editor-config.png" alt="Configuring the editor" width="100%" />
1. Note that you can change the _Filter processing order_.
1. Under _Filter settings_ > _Limit allowed HTML tags and correct faulty HTML_,
    in the field _Allowed HTML tags_, verify that `<hr>` is present (adding its
    editor button will automatically update the allowed tags).
    <img src="/images/structure-text-format-config-allowed-html.png" alt="Configuring the HTML tags" width="100%" />
1. Click _Save configuration_. You will be taken back to the _Text formats and
    editors_ page. A message will be displayed saying that the text format has been
    updated.
    ![Confirmation message for text format configuration](/images/structure-text-format-config-summary.png)
## Expand your understanding

If you do not see the effect of these changes in your site, you might need
to clear the cache. See [prevent-cache-clear](./prevent-cache-clear.md).
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/T9RD6PTxe9U" title="Configuring Text Formats and Editors" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Written by [Boris Doesborg](https://www.drupal.org/u/batigolix).
