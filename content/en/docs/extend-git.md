---
title: "Managing File and Configuration Revisions with Git"
description: "How to manage file and configuration revisions with the Git revision control tool."
id: "extend-git"
translation_key: "extend-git"
source_locale: "en"
---
## Goal { #extend-git }

Use the Git revision control tool to manage revisions to files and configuration
on your site.
## Prerequisite knowledge

* [install-tools](./install-tools.md)
* [install-decide](./install-decide.md)
* [install-dev-sites](./install-dev-sites.md)
* How to set up a Git repository and find its _clone_ URL. For example, if
you want to use GitLab to host your repository, see
[GitLab "Create a project" page](https://docs.gitlab.com/ee/gitlab-basics/create-project.html)
and
[GitLab "Command Line basic commands" page](https://docs.gitlab.com/ee/gitlab-basics/command-line-commands.html).
And if you want to use GitHub to host your repository, see
[GitHub "Create a repo" page](https://help.github.com/en/articles/create-a-repo)
and
[GitHub "Which remote URL should I use" page](https://help.github.com/en/articles/which-remote-url-should-i-use).
* How to open and use a command terminal window and a plain-text editor.
* To manage configuration, how to unpack and pack archive files (such as _.zip_
and _.tar.gz_).
## Site prerequisites

* You must have downloaded the software for your site, using one of the methods
in [install-decide](./install-decide.md). If you want to manage configuration, you must have
installed the software and have a running site.
* Git client software must be installed on your site's server. See
[Git](https://git-scm.com/) for instructions.
* You must have a new repository created and know its Git clone URL.
## Steps
### Initializing the repository

Do these steps once, after creating a Git repository, to connect your local
directory to the repository and add the initial files to it.

1. Open a command terminal window, and change to the directory where your site's
    files are located. This is your "top" directory.
1. Determine where your web root is. If the _core_, _modules_, and _themes_
    directories are located directly in this directory, then you are in your web
    root. If you have used Composer to download the software, then these files are
    located inside the _web_ subdirectory (which is your web root).
1. In a plain text editor, create a new file called _.gitignore_ in the top
    directory (or edit it if it already exists). This file contains a list of files
    and directories that Git should ignore (not add to the repository). For example,
    the _settings.php_ file for your site should not be added to Git, because it
    contains your database account information, and the media files uploaded to
    your site (usually in _sites/default/files_) should not be in Git either -- the
    objective is to have the software in the repository, not the site content.
1. Make sure the following lines are in the _.gitignore_ file. If your web root
    is not your top directory, check each of these to see if they need a prefix. For
    example, _sites_ may need to be replaced with _web/sites_.
    ```text
    sites/*/settings*.php
    sites/*/files
    config
    ```
1. Enter the following commands:
    ```text
    git init
    git add -A
    ```
1. Optionally, verify the list of files you will be adding to your Git repository
    by entering this command and scrolling through the (very long) list:
    ```text
    git status
    ```
1. Enter the following commands. You can substitute your own _commit message_ for
    "Initial file add" if you wish, and you will need to substitute your own Git
    clone URL for the URL in the second command:
    ```text
    git commit -m "Initial file add"
    git remote add origin https://gitlab.com/example-name/example-repo.git
    git push -u origin master
    ```
1. If you are using GitLab, GitHub, or another host with online access, you can
    now go to your repository page and see that the files are there.

### Updating files in the repository

Use these steps when you have updated, added, or deleted one or more files in
your site, in order to send the changes (_push_) to your repository.

1. Open a command terminal window, and change to the directory where your site's
    files are located.
1. Check the list of files that have been added, changed, or deleted:
    ```text
    git status
    ```
1. Optionally, for text files that have been changed (not images), look at the
    differences between the new and old versions of the file:
    ```text
    git diff path/to/file.txt
    ```
1. Stage all the changes for the next commit, and verify that they are staged:
    ```text
    git add -A
    git status
    ```
1. You can omit a particular file from the commit that you have already staged,
    or add another file to the ones you have already staged. If a particular file
    or directory keeps getting added by mistake, consider adding it to the
    _.gitignore_ file so that it will be ignored by Git. Omit/add commands:
    ```text
    git reset HEAD path/to/file.txt
    git add path/to/file.txt
    ```
1. Commit and push your changes. Substitute something meaningful for the commit
    message:
    ```text
    git commit -m "commit message here"
    git push
    ```
1. If you have other copies of your repository, update them by opening a command
    window in the directory of each copy and running the following command:
    ```text
    git pull
    ```

### Making a copy of the files in your repository

Follow these steps if you want to copy all the files in your repository to a
new location. For example, you might have both a local development copy of your
site and a production site, or several team members might all have local
copies of the site.

1. Open a command window in the location where you want the files to be.
1. Enter the following command, substituting your repository clone URL for the
    URL, and the name of the subdirectory you want them in for _dirname_:
    ```text
    git clone https://gitlab.com/example-name/example-repo.git dirname
    ```

### Managing configuration in the repository

1. Follow the instructions on [extend-config-versions](./extend-config-versions.md) to export a complete
    archive of your site's configuration.
1. If you have not already initialized configuration in the repository, unpack
    the configuration archive into a new directory, preferably above the web root
    directory, and follow the instructions above to add these files to your
    repository.
1. After initializing, whenever your site configuration changes, export and
    unpack the configuration archive in the same location. Follow the instructions
    above to update these files in your repository.
1. To import updated configuration to another site, make an archive of the
    configuration directory from your repository. Then follow the instructions on
    [extend-config-versions](./extend-config-versions.md) to upload and import this archive into the site.

## Related concepts

[install-dev-sites](./install-dev-sites.md)

*Attributions*

Adapted and edited by [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) from
["Building a Drupal site with Git"](https://www.drupal.org/node/803746),
copyright 2000-2026 by the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation).
