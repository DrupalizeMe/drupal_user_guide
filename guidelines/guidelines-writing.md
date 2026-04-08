<a id="guidelines-writing"></a>
# Style Guide for the Writing Phase

Guidelines for topic writers of the Drupal User Guide to follow.

The sections below contain guidelines to follow in your text when
writing for this guide. You’ll also want to keep in mind the ideas in
[Writing Good Documentation](./good-writing.md#good-writing), and
especially if you are writing a task topic, [Following the
Scenario](./follow-scenario.md#follow-scenario). If you want to think
ahead, you can also look at [Style Guide for the Editing
Phase](./guidelines-editing.md#guidelines-editing), but this is not
required.

The guidelines here are partially based on:

- [Drupal.org Style Guide](https://www.drupal.org/style-guide/content)

- [Drupal.org Interface text conventions
  page](https://www.drupal.org/node/604342)

On this page:

- [Use lists appropriately](#guideline-lists)

- [Reference Drupal components and interface
  correctly](#guideline-text-caps)

- [Describing navigation](#text-navigation)

- [Composing index entries](#composing-index-entries)

- [Adding links and videos](#guideline-additional-info)

<a id="guideline-lists"></a>
## Use lists appropriately

Use numbered lists for sequential task steps, and bullet lists for sets
of options, notes, and the like. Only use a list if it has at least two
items in it. See also [Paragraph and list
formatting](./formatting.md#formatting-paragraph) for the mechanics of
putting lists into your topic.

<a id="guideline-text-caps"></a>
## Reference Drupal components and interface correctly

When referring to a specific module or theme, capitalize it as follows:

- …​ the Foo Bar module …​

- …​ the Foo Bar theme …​

When referring to text that the user can see in the user interface, use
the *exact* text that they will see, and put it in italics.

Example:

    Click *Save configuration*.

which is formatted as:

Click *Save configuration*.

<a id="text-navigation"></a>
## Describing navigation

In most task topics, you will need to provide instructions for how to
find pages in the Drupal administrative interface. Here are two examples
of how to do this:

    In the *Manage* administrative menu, navigate to
    *Structure* > *Taxonomy* (*admin/structure/taxonomy*).

    In the *Manage* administrative menu, navigate to
    *Configuration* > *System* > *Site information*
    (*admin/config/system/site-information*).

Notes:

- Refer to the administrative menu as the "Manage administrative menu".
  (The reason for doing this is that it is sometimes hidden, and to make
  it visible, you click on "Manage" in the top bar of the screen,
  assuming you have the Drupal core Toolbar module enabled.)

- From there, use the exact link text for the links someone would need
  to click; on the Configuration page, also include the name of the
  category/section the link is in.

- Each link text or section is in italics because it is user interface
  text.

- After the complete navigation, include the path to the page, starting
  with "admin", in italics because it is a URL path.

- Do NOT include a screen shot of the navigation.

<a id="composing-index-entries"></a>
## Composing index entries

Index entries should usually be two-level entries, such as
`Block, creating` or `Block, overview`. Some standards:

- If a noun is used in an entry, it should normally be singular; for
  example, `Block`, not `Blocks`. The only exception would be if the
  topic is clearly about multiple items (for instance, a topic about the
  regions in a theme would use the word "regions" instead of "region").

- Be as comprehensive as possible. Most topics should have multiple
  entries, since people will think of looking the topics up in various
  ways. For example, in a topic about adding a field to a content type,
  you might have entries for `Content type, adding field to` as well as
  `Field, adding to content type`.

- Make entries both for "Noun, verbing" and "Verbing, noun" (example:
  `Content, translating` as well as `Translating, content`). However, do
  not make entries starting with the verbs "adding", "creating", or
  "editing" since these are a bit too generic.

- Capitalize the first word of the first-level entry, but not the rest
  of the entry (unless it’s an acronym being written out, or a proper
  noun). Example: `Block, placing`, not `Block, Placing`.

- Use a gerund-form (-ing) verb in preference to -tion nouns, such as
  `Content, translating`, not `Content, translation`.

- When using an acronym in an index main entry, include both the acronym
  and what it stands for (make two entries). Example:
  `Cross-site scripting (XSS),preventing` as well as
  `XSS (Cross-site scripting),preventing`.

- The index entries for glossary definitions should have secondary entry
  "definition", such as `Block, definition`.

See [Making index entries](./formatting.md#style-index) or the
[Topic templates](./templates.md#templates) for instructions on how to
put index entries into your topic.

<a id="guideline-additional-info"></a>
## Adding links and videos

There are several sections in both task and concept topics where links
to additional information can be added:

Prerequisite knowledge  
Add links in this section to other topics within the same book that
cover knowledge someone would need to understand before reading this
topic.

Site prerequisites (task topics)  
Most site prerequisites listed here should include link(s) to the
topic(s) that explain how to create the necessary content, configure the
site, etc.

Expand your understanding (task topics)  
Add links in this section to task topics in the same book that would
help solidify or broaden the knowledge covered in this topic.

Related concepts (task topics)  
Add links in this section to concept topics in the same book that are
not prerequisites, but which are somehow related.

Related topics (concept topics)  
Add links to related task and concept topics in the same book that are
not prerequisites.

Videos  
Embed videos in this section that exactly (or nearly exactly) reproduce
the content of the topic in video format. See [Including images and
videos](./formatting.md#formatting-images) for syntax.

Additional resources  
Add links in this section to outside materials related to this topic,
which could include videos, articles, documentation pages, blog posts,
and books. Do not embed videos in this section; instead, provide a link.

All outside links to resources and videos must conform to the following
guidelines:

- The page or video linked to must be primarily providing knowledge, not
  promotion or advertising.

- The page or video must be freely available, without paying, logging
  in, or subscribing to the site.

- If a video is embedded (instead of just linked) in the guide, it must
  also be captioned; ideally, linked videos should also be captioned.
  (Captioning makes a video accessible, according the [W3C Accessibility
  Guidelines](https://www.w3.org/2008/06/video-notes)).

- Embedded videos must also be translatable, and the video producer must
  provide a means for incorporating translated captions into the video.

- Instructions for downloading the translatable caption file,
  translating, and providing translations to the producer must be
  provided when the video is embedded into the text, either next to the
  embed or in maintainer documentation that travels with the source.

**Attributions**

Written/edited by [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)
and [Joe Shindelar](https://www.drupal.org/u/eojthebrave).
