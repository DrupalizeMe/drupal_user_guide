<a id="good-writing"></a>
# Writing Good Documentation

Information for topic writers for the Drupal User Guide on how to write good
technical documentation.

Follow these guidelines when writing topics for the Drupal User Guide.

On this page:

- [Speak to the audience](#correct-audience)

- [Keep it concise](#good-writing-minimal)

- [Convey information in text and images](#good-writing-text)

- [Describe reactions to actions](#good-writing-reactions)

- [Focus on skills and knowledge](#good-writing-skills)

- [Encourage best practices](#good-writing-best-practices)

<a id="correct-audience"></a>
## Speak to the audience

The intended audience for the Drupal User Guide is site builders with
general web knowledge but no specific knowledge of Drupal. Make sure
your writing is appropriate for this audience.

In terms of the [Drupal community
personas](https://www.drupal.org/personas), the goal of the Drupal User
Guide is to help Learners make a successful transition to Skilled.

<a id="good-writing-minimal"></a>
## Keep it concise

A good guideline to follow when writing documentation is to keep the
writing to a minimum. Include just enough information so that the
information is conveyed.

<a id="good-writing-text"></a>
## Convey information in text and images

Keep in mind that not all users of the Drupal User Guide can see images.
Therefore, we need to make sure that all of the information is conveyed
in text, independent of images.

At the same time, many people learn best through images. So, especially
for task topics, we want to include screen shots, especially for web
forms. These would typically include:

- A screen shot of a form that will be filled out. For the mechanics of
  including images in your topic, see [Including images and
  videos](./formatting.md#formatting-images).

- A table of fields and values to fill in. Sample table code (this
  example is for creating a menu link):

      | Field name | Explanation | Example value |
      | --- | --- | --- |
      | Menu link title | Title to be displayed in the menu | Opening hours |

      (rest of the fields go here)

Also, the last step in a task topic would typically be something that
shows them they succeeded (like viewing the content if the task is to
create the content), with a screen shot of what it looks like. For the
mechanics of including images in your topic, see [Including images and
videos](./formatting.md#formatting-images).

<a id="good-writing-reactions"></a>
## Describe reactions to actions

After describing an action for the reader to take, like "Click Submit"
or a navigation action, describe the site’s reaction. Examples:

    You are returned to the Content page, with the message "Your content has been
    updated" at the top.

    The Content page appears, with a list of the content on your site.

A screenshot is also appropriate, in most cases. This mention and/or
screen shot can be omitted if the reaction is either very obvious or
repeated. It can also be combined with the next instruction, such as in
this Views example:

    Choose Rearrange from the dropdown button in the Fields section. In the
    Rearrange pop-up dialog, ...

<a id="good-writing-skills"></a>
## Focus on skills and knowledge

The objective of the Drupal User Guide is to be a learning tool and
documentation, not a recipe. It is also not supposed to be marketing. So
although the guide may contain instructions for specific tasks, those
may not be the exact tasks that a reader will eventually need to
perform. Keep this in mind as you write task topics:

- Think about the skills that someone would need, in order to be able to
  do similar tasks, rather than focusing on a narrowly-defined task.

- When describing the goal and writing the steps for a task topic, make
  it concrete by using the scenario as an example (see [Following the
  Scenario](./follow-scenario.md#follow-scenario)), but at the same
  time make it clear that this
  is an example (use phrases like "For example").

- In the Expand your understanding section (from the Task topic
  template), list related tasks that someone who has just read your task
  topic should be able to perform, and that might lead them to solidify
  and broaden their skills and knowledge.

- Provide information, not enthusiasm.

- Avoid jargon, jokes, and slang.

<a id="good-writing-best-practices"></a>
## Encourage best practices

Make sure that all topics encourage best practices. Considerations to
keep in mind:

- Accessibility: See <https://www.drupal.org/node/1637990>

- Usability: Make sure that UI text created in examples follows the
  Drupal User Interface text guidelines:
  <https://www.drupal.org/node/604342>

- Security: See <https://www.drupal.org/security/secure-configuration>

- The "Drupal Way": Encourage use of existing modules rather than
  writing your own, etc.

**Attributions**

Written/edited by [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)
and [Joe Shindelar](https://www.drupal.org/u/eojthebrave).
