<a id="pm-guide"></a>
# Managing the project

Guide for how to structure and manage a project for writing a book like
the Drupal User Guide, using volunteers.

This section assumes that your project is to write a new book that is
divided up into topics, you want to use volunteers as much as possible
for writing, testing, and editing, and you plan to use a Drupal.org
project and issue queue. See also [Notes and Lessons
Learned](./manage-notes.md#manage-notes).

You may want to use files from the [User Guide project home
page](https://www.drupal.org/project/user_guide) as a starting point
when following these instructions.

On this page:

- [Committing changes](#pm-guide-commits)

- [Setting up a new project](#pm-guide-project-setup)

- [Adding new topics](#pm-guide-topics)

- [Starting a new phase](#pm-guide-new-phase)

- [Setting up for translations](#pm-guide-translating)

- [Using translation memory](#pm-guide-tm)

- [Making updates](#pm-guide-updates)

<a id="pm-guide-commits"></a>
## Committing changes

When committing changes from contributors (writers and editors) to the
guide:

- Check the checklist for the phase — see [Issue templates and
  checklists for each phase](./phase-checklists.md#phase-checklists). If
  the checklist has not been satisfied, do not make the commit.
  Especially, insist on attributions information.

- Make sure to update the attributions information for the topic being
  edited (at the bottom of the file). For guide-wide edits, attributions
  go into the main attributions page for the book as a whole.

- Make sure to include all the files in the commit: attached images (in
  the images directory), the updated topic file or files themselves, and
  any updated attributions content.

- When making the commit, use the section at the bottom of the issue
  page to compose the commit message. Make sure that the author radio
  button is chosen, if there was just one contributor, and that
  checkboxes for everyone who contributed substantially to this phase
  are checked. This will give everyone involved the proper credit.

- If there is a project manager follow-up checklist (such as the
  guidelines check after writing tasks), do that.

<a id="pm-guide-project-setup"></a>
## Setting up a new project

When starting a new project, it is a good idea for the project
coordinators to define the outline ahead of time. The outline consists
of a list of topics, organized into chapters, and you’ll need to define
the name of each topic, its file name, what each topic should cover, and
the ordering and organization into chapters.

Another aspect of the plan, if it is some type of user guide material,
is to come up with a guiding scenario, which provides a unified context
for all of the topics. As an example, in the User Guide project, we
selected the scenario of creating a web site for a farmers market, and
we made sure that whenever examples were called for in topics, they were
related to this scenario. You’ll also need to create (or find) sample
text and images related to the scenario, which authors of topics can use
in their writing and screenshots. Make sure the sample images have
compatible licenses. A good place to search for images (you’ll still
have to check the licenses) is [Wikimedia
Commons](https://commons.wikimedia.org).

Ideally, each topic in this guide should be reusable (assuming that
another project uses the same guiding scenario, anyway). To facilitate
that:

- Separate task information and concept information into separate
  topics. Cross-reference the concept topic in the task topic, rather
  than describing the concept again.

- Titles for task topics should be in the format `Verbing a Noun` or
  `Verbing Nouns`; examples: *Creating a block*, *Configuring date
  formats*. Titles for concept topics should usually be in the format
  `What is a Noun?` or `What are Nouns?`; example: *What is a block?*.

- Make each concept topic cover one concept rather than multiple
  concepts. Cross-reference related topics and required background
  knowledge.

- Make each task topic cover the minimal amount of actions that makes
  sense to stand alone. Reference prerequisite and Expand your
  understanding tasks rather than describing them in the same topic.

Once you’ve defined what the outline and scenario should be, follow
these instructions to set up the project and instructions pages (some of
the instructions assume this setup and directory structure). Note that
you can also start the process with just a few topics, and then add to
the outline as you decide on more of it (see [Adding new
topics](#pm-guide-topics)). Here are the suggested steps for initiating
a project:

1.  Using the templates in [Topic templates](./templates.md#templates),
    make a template file for
    each topic. Use the topic slug for the file name, such as
    `block-place.md`, and make sure the frontmatter
    `id` matches that slug. Add these to the Git repository for the
    project.

2.  Make or update the committed `zensical.toml` navigation and `docs/index.md`
    landing page for the locale, and add them to the Git repository.

3.  Write up a topic in the preface explaining what the scenario is.
    This needs to be in place before contributors start writing other
    topics.

4.  Make an *assets* directory for the project. Put the sample images
    there, along with any sample text and color-reference files the
    contributors will use while creating screenshots and examples.

5.  Make an attributions page for keeping track of overall project
    writing, editing, translating, and project management.

6.  Make build scripts for the project and test them. Add these to the
    Git repository.

7.  Make a shared spreadsheet (such as a Google Sheets document) to
    track topics. You may choose to let volunteers edit the spreadsheet,
    or you can let them use update issues and have the project managers
    update the spreadsheet. It is still useful to let volunteers view
    the spreadsheet, even if they cannot edit it. Columns needed in the
    spreadsheet:

    - Title of topic

    - File name of topic

    - What it covers

8.  Decide what the development phases should be. Suggestion:

    - Writing: Volunteers write a rough draft of each topic, with rough
      screenshots.

    - Guidelines editing: It can be discouraging for volunteers if there
      are too many things to remember and too many guidelines to follow,
      especially during the initial writing phase. So rather than
      forcing the writing phase volunteers to have perfect formatting
      and follow all of the writing guidelines, you may want to instead
      enforce a minimal set of good writing guidelines during the
      writing phase, and then after accepting a topic, have the project
      managers (who will be more familiar with the guidelines) do a more
      thorough review for a defined set of guidelines. If the changes
      needed are small, the project manager who reviewed for guidelines
      can make the fixes directly; if they are more extensive, they can
      file an issue to get a volunteer to make the changes.

    - Testing: You might consider having one or more interactive
      sessions where volunteers (with project coordinators present)
      attempt to read the text in order and follow its instructions, and
      either the volunteers or the coordinators make notes on what was
      unclear or didn’t work. You may also want to have experts review
      the text for accuracy, especially the concept topics.

    - Copy editing

    - Translating

9.  Set up contributor instructions (like this directory). You will
    probably want to start with a copy of the Markdown files in the User
    Guide project's `guidelines` directory and then adapt the
    project-specific details.

10. Initiate the first phase. See [Starting a new
    phase](#pm-guide-new-phase).

<a id="pm-guide-topics"></a>
## Adding new topics

If you need to add a new topic after the project is already started:

1.  Add the topic to the tracking spreadsheet, filling in the "covers"
    information and defining the file name.

2.  Copy the correct template file (task or concept) to the desired file
    name.

3.  Edit the frontmatter `id` and the topic title in the file — **the
    ID should be the file name without the extension**.

4.  Add the file to the outline file.

5.  Commit the changes.

6.  Make an issue for the writing phase for the topic, and add this to
    the spreadsheet. See [Issue template and checklist for initial
    writing](./phase-checklists.md#phase-checklists-writing).

There is a Perl script in the *scripts* directory of the User Guide
project called *mktopics.pl* that will make a batch of topic files. It
has instructions at the top.

<a id="pm-guide-new-phase"></a>
## Starting a new phase

For each phase, follow these steps:

1.  Divide the effort for the phase into independent tasks that can be
    completed by volunteers in a reasonably small amount of time. For
    the writing phase, the tasks should be writing individual topics.
    For the testing phase, there may be some specific tasks, such as
    "Have the Security team review the book for accuracy", but some
    testing may be best done in an interactive session. For copy
    editing, some tasks could be things like "Make sure to always say
    *directory* and not *folder*", and others could be "Do a general
    copy edit on this topic".

2.  Define the time frame for each task to be completed by a volunteer.
    Two weeks is reasonable.

3.  Make an issue for each task. It is much clearer for volunteers if
    the issues are created by the project managers. Make sure the issue
    either provides instructions for the volunteer or links to the
    instructions. Also, include the checklist for the phase in the issue
    summary. See [Issue templates and checklists for each
    phase](./phase-checklists.md#phase-checklists).

4.  Add entries to the tracking spreadsheet for the issues. You may need
    a new tab on the spreadsheet, or if the issues are one-per-topic,
    you can add columns to the topic sheet, such as:

    - Volunteer working on it

    - Date started

    - Status

    - Issue link

5.  Announce the phase and recruit volunteers.

6.  When the project is open to translations, set up an email list for
    notifications about changes to the English source that translation
    teams need to know about. At least one representative from each
    translation group needs to join this list. See also [Making
    updates](#pm-guide-updates) and [Setting up for
    translations](#pm-guide-translating).

<a id="pm-guide-translating"></a>
## Setting up for translations

Each language the Drupal User Guide will be translated into will need a team,
which should normally be formed from the existing translation team for
the software. As a prerequisite, the translation team should have
already translated a large portion of the terms in the software user
interface into their language. Then, the team should choose a manager or
managers for the Drupal User Guide translation project, and form a group
specifically targeted at translating the Drupal User Guide.

Once the new team has been established, the overall project managers and
language team manager(s) will need to follow a number of steps to
initiate a new translation. To do this, start by making an issue to
track translation set-up, and another one to track screenshot making
(templates below). Then follow the steps in the issue templates
(creating the second issue is one of the steps in the first issue).

In these issue templates, make the following replacements:

- LANGUAGE: the language name

- langcode: the two-letter language code in lower-case

- LANGCODE: the two-letter language code in all caps

- EMAIL_LIST: https://groups.google.com/forum/#!forum/d8manual

- PM_GUIDE_URL: ./pm-guide.md

- Set the issue component to be "Project management" and the issue title
  to "Set up for LANGUAGE translations", for the "setup" issue.

- Set the issue component to be the particular language translation
  component (created as one of the "setup" steps), and the issue title
  for the screenshot issue to "\[LANGCODE\] LANGUAGE screenshots".

Here is the template for the "setup" issue:

    This issue is to track progress on setting up for translations into LANGUAGE.

    Tasks:

    <ol>

    <li>Add a new issue component for translations into this new language, by editing the Project page. The component should be called "LANGCODE translation".</li>

    <li>Make a new locale directory under <code>content</code>. Copy the English Markdown files into the new directory, and keep the file names, IDs, and image paths aligned with English unless there is a specific reason to change them.</li>

    <li>Add a new section to the attributions page for the translation team management for this language. Template:
    <code>
    ## Translation into LANGUAGE_NAME

    The LANGUAGE_NAME translation of this guide was coordinated by:

    - [Person One](https://www.drupal.org/u/person1)

    - [Person Two](https://www.drupal.org/u/person2) of [Company](http://example.com)
    </code>
    </li>

    <li>Make a separate issue for the screenshots. See Guidelines document for issue template.</li>

    <li>Grant issue maintainer and VCS commit permissions to the manager or managers of the language team for the new language, by editing the Maintainers page for the project. <strong>Note: Language team managers will need to re-clone their Git repositories using "Maintainer" mode after receiving this permission, in order to be able to commit to the repository.</strong></li>

    <li>Make issues for translating each topic into the target language. You will need to translate the Markdown files in the source directory.</li>

    <li>At least one leader of the translation group needs to subscribe to the email list the project uses for notifications about updates to the English source that require translations to be updated. This is at: [EMAIL_LIST] </li>

    <li>Add the locale to the repository configuration used by the site, and create the matching locale navigation and landing page files for that language.</li>

    <li>Add notes to the landing page and glossary translation issues if there are shared locale labels or metadata that need to be kept in sync. Suggested note:
    <code>
    When this translation is done, make sure to update the locale guide structure and any shared locale metadata at the same time so the landing page, chapter labels, and glossary remain in sync with the translated content.
    </code>
    However, if your project already has locale-specific defaults, make sure the translated content matches those defaults.
    </li>

    <li>Add the language code to whatever build or deployment configuration your project uses, and verify that it builds without errors.</li>

    <li>Decide whether your team wants to use translation memory software or not. You can read more about this in the Translation Memory section of the <a href="PM_GUIDE_URL">User Guide Contributor Guidelines - Project Management page</a>.</li>

    <li>Optional but recommended steps:
      <ul>
      <li>Make a translation glossary for this language. Keep it in a place that the language team normally uses for communication, such as on localize.drupal.org or a shared team workspace.</li>
      <li>Create an issue to track translation progress. It should list the individual translation issues, providing a place to look to see which are done and which still need to be done. You can make a list of the issues in the issue summary by following these steps:
      <ol>
      <li>Open the Issues page for the project.</li>
      <li>Filter to the issue component for your translation. You'll see the first page of issues.</li>
      <li>Open a JavaScript console tool in your browser (usually by using the Inspect or Inspect Element context menu).</li>
      <li>Execute this JavaScript code to make a list of the issue numbers shown on this page:
    <code>
    jQuery("tbody .views-field-title a").each(
      function(){
        console.log("[#" + jQuery(this).attr("href").replace("/node/", "") + "]");
          }
    );
    </code>
      </li>
      <li>Copy and paste the output into the issue summary.</li>
      <li>Go to the next page of issues and repeat the JavaScript, until all issues have been found.</li>
      </ol>
      </li>
      </ul>
    </li>
    <li>Start translating!</li>

    </ol>

Here is the template for the "screenshots" issue:

    This issue is for tracking progress and problems with the LANGUAGE screenshots.

    Tasks and their status (unmarked tasks are assumed not to be done yet):
    <ol>

    <li>Ensure that most of the current version's user interface has been translated into LANGUAGE, so that the screenshots will show very little if any English on them.</li>

    <li>Translate the "scenario text" into LANGUAGE. The text to be translated is the "Scenario Text" section of the scripts/TermsToTranslate.fods spreadsheet. What is needed is a 3-column sheet with these columns:

    <ul>
    <li>Context (the column called Context in the TermsTo Translate sheet)</li>
    <li>English text</li>
    <li>Your language text</li>
    </ul>

    </li>
    <li>Make initial automated screenshots. Procedure: See User Guide Tests module (https://www.drupal.org/project/user_guide_tests)</li>
    <li>Make initial non-automated screenshots. See the locale image documentation in the repository for details of which images need to be made.</li>
    <li>Check each screenshot to make sure it is all in the target language and is readable. The LANGUAGE language team will do this as they translate each topic. If problems are found, add tasks here so that the screenshots can be updated. Leave this issue open until all the topics have been translated and the screenshots checked and/or updated.</li>
    </ol>

<a id="pm-guide-tm"></a>
## Using translation memory

Some language translation groups have found that using Translation
Memory (often abbreviated as TM) software helps them keep their
translations consistent and save time. This section explains what a TM
is, and describes how to set it up.

### What is translation memory software?

Translation memories ™ are software applications specialized for helping
translators by reusing their translations of previous text in
translating new text. This saves time for translators, and also leads to
more consistency in the translation across the text, especially if
multiple translators are involved and they all share the same TM.

TMs can be imagined as an organized pool of pairs of source/target
character strings, for a given pair of source-target languages. The more
string pairs they store, the more useful suggestions they can give you
to select from when you are translating. In a documentation project like
the Drupal User Guide, there are many reused strings, such as section titles,
terminology, index entries, author attribution phrases, etc. In
addition, translated text in the Drupal software user interface can also
be imported into the TM, so that when this text is mentioned in the
documentation, the translation matches what the user would see in the
software interface.

Note that TM is not the same as machine translation (MT), which would
automatically attempt to translate text using learning algorithms.

### Which TM software is recommended?

The free TM software FreeTM has been used successfully by at least one
translation team for translating the Drupal User Guide, and is
recommended. FreeTM is provided by the company WordFast as a
software-as-a-service (SaaS) on the web, and runs in your web browser.

### How do I set up a TM?

1.  Log in on <https://www.freetm.com> . If you have used it before for
    this language, skip the rest of this step. If you have not used it
    before, you will need to register for an account.

2.  Configure the source and target languages on the initial
    configuration screen. The source language should be English (EN).
    The target language is the language you are translating into. Click
    *OK* to submit; after submitting you will see a list of the files
    you are working on.

3.  The "Machine Translation (MT)" feature is not helpful for
    translating documentation text, so turn it off. To do this, in the
    main navigation, navigate to *WordFast Anywhere* \> *Setup* (icon)
    \> *General* (tab) \> *Setup Machine Translation* (link) \>
    *MyMemory* (tab). Uncheck *Use MyMemory*, and click *OK*.

4.  This step is different for managers and translators in the team:

    - **Manager:** read [balagan’s blogpost about how to set up the
      common
      TM](http://balagandrupal.blogspot.hu/2016/09/using-freetmcom-to-translate-drupal-user-guide.html),
      which has more details about the instructions below.

    - **Translator:** contact the leader of your translation team, who
      has probably already set up the common TM to share among the
      translators, and ask to have your account added to the TM with
      read/write access. There may be two or more separate TMs; for
      example, the Hungarian team uses one TM for the Drupal UI, and
      another for phrases, expressions, sentences, glossary and other
      text elements for the User Guide.

5.  Add the TMs for your team to your account, once you are authorized,
    as follows:

    - You will need to have a file open, so you will need at least a
      temporary file in the account. To create one, in the main
      navigation, navigate to *File* \> *Upload* (icon). Select *From
      URL*, which provides a default sample file that will be fine to
      use (<http://www.freetm.com/doc/ipad_sample.doc>). Click *Upload
      and Open*.

    - With this (or any other file) open, in the main navigation,
      navigate to *TMs & Glossaries* \> *Setup* (icon). A modal dialog
      opens, where you can configure the TMs and Glossaries for the
      account.

    - User Guide translation teams have not found the default
      [IATE](http://iate.europa.eu/SearchByQueryLoad.do) glossary to be
      very helpful, so you can uncheck the box to disable it. If you are
      the team leader, you will be creating one or more new TMs here
      (see note above from the Hungarian team, and the blog post
      referenced above) by using the *Create* button.

    - Add the common TMs for your group to your account:

    - Click *Save* to save the configuration, and then delete the
      temporary file.

### Start translation with the aid of TM

This section assumes you have followed the steps in [Quick start guide -
translating tasks](./practicalities.md#practicalities-translating) to
select a topic to translate, have
assigned the issue to yourself, and have located the file to
edit. Use the repository URL for the Markdown file named in your
issue summary.

To translate this file using the TM:

1.  In the main navigation of <https://www.freetm.com> (you will need to
    be logged in), navigate to *File* \> *Upload* (icon). In this
    dialog, select *From URL*, and paste in the URL of the Markdown
    file from the Git repository.
    Click *Upload and Open*.

2.  Click *Start/Next* to start the translation. When the software finds
    a match to strings stored in the translation memory, it inserts it
    for you as a suggestion; an example has been marked with green in
    this screenshot:

3.  Make sure not to translate Markdown formatting and IDs (marked with
    red in the screenshot). See [Translation
    Guidelines](./guidelines-translating.md#guidelines-translating) for
    details.

4.  When you have finished translating the document, including the
    provided translations from the translation memory and the rest of
    the text, in the main navigation, navigate to *File* \> *Close*
    (icon) to save the file. Then click *Download* (icon) in the
    secondary navigation to download the file to your local computer,
    and upload it to the issue. Set the status of the issue to "Needs
    Review", and save.

<a id="pm-guide-updates"></a>
## Making updates

From time to time, there will be reasons to make updates to the
Drupal User Guide. For instance, it may need to be updated if a new version
of Drupal comes out, if readers have reported problems, or if new topics
need to be added.

If the text has been translated, updates are complicated somewhat,
because translators need to be notified about the update. This section
tells how to go about making updates, ensuring that translations are
also updated if needed.

1.  Determine the scope of the change. Some changes to English-language
    content, such as fixing typographical errors or minor punctuation or
    grammar problems, do not require that translations be updated. But
    if a substantive change is made to the content, or a change is made
    to the Markdown formatting, translations will also need to be
    updated.

2.  When making a change that requires translations also to be updated,
    add a "Translation updates needed" tag to your issue.

3.  Once the issue has been resolved and the change to the English
    source has been committed to the source repository, notify the
    translation groups by posting to the email list at
    project_translation_list about the change. Suggested message
    template:

        I wanted to let you know that on this issue:
        [ISSUE-LINK]
        we made a change to the English source file(s) [FILE-NAME] :

        [DESCRIBE-THE-CHANGE]

        Here is the commit for reference:
        [URL OF COMMIT]

        Suggested actions to respond to this change in each language would be either:
        a) If the file hasn't been translated yet, copy the English source file to your language directory and commit it.
        b) If the file has already been translated, open a new issue to revise the translation.

4.  The parent issue can be marked Fixed as soon as the changes have
    been committed to English, the issue tag has been added, and
    notification has been sent to the email list.

**Attributions**

Written/edited by [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
[Joe Shindelar](https://www.drupal.org/u/eojthebrave), and [Balu
Ertl](https://www.drupal.org/u/balu-ertl) of
[Brainsum](https://www.drupal.org/brainsum).
