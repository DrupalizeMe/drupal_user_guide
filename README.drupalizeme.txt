Drupalize.Me Import and Deployment Workflow
===========================================

This file documents how User Guide content is built and imported for
Drupalize.Me.

For Drupalize.Me we maintain a clone of the Drupal.org project https://www.drupal.org/project/user_guide, and a site-specific branch (drupalizeme_live) that contains some additional files needed for the build and deployment process.

Our custom additions include:

- GitHub actions workflow to build and deploy the user guide to Drupalize.Me. This works in combination with code in the custom dme_import module on the Drupalize.Me site.
- A mapping of Drupalize.Me videos hosted on SproutVideo to the user guide content. This is used to replace the normal YouTube videos on the guide pages with Drupalize.Me hosted ones. This lives in user_guide_video_map.csv.

**These customizations ONLY EXIST IN THE drupalizeme_live BRANCH. And should not get merged into the 11.x or other drupal.org branches.**

Overview
--------

This repository has a GitHub Actions workflow:

  .github/workflows/deploy-user-guide.yml

With two jobs:

1. Build job
   - Starts DDEV.
   - Runs scripts/mkfeeds.sh inside the DDEV web container.
   - Builds English HTML feed output from source/en.
   - Generates output/html_feed/en/tutorial-changed-dates.csv.
   - Uploads artifacts for deploy.

2. Deploy job
   - Downloads build artifacts.
   - Uses rsync over Pantheon SSH to upload files.
   - Runs Terminus Drush commands to import migrations and clear cache.


Branch Model (Important)
------------------------

Deployment is triggered only from the `drupalizeme_live` branch.

The upstream Drupal User Guide content flow is:

1. Changes land on `11.x` (from drupal.org sync work).
2. Those changes are merged into `drupalizeme_live`.
3. `drupalizeme_live` is pushed to the Drupalize.Me GitHub repository.
4. GitHub Actions runs and deploys/imports the updated guide.

`drupalizeme_live` contains deployment-specific additions that are not part of
the plain `11.x` branch. Examples include CI/CD and environment wiring used for
Drupalize.Me deployment.


Required Secrets
----------------

Set these repository secrets in GitHub Actions:

- PANTHEON_SSH_KEY
- TERMINUS_MACHINE_TOKEN

Without these, deploy/import steps cannot run.


Regular Update Procedure
------------------------

Use this sequence whenever User Guide updates need to be deployed to
Drupalize.Me:

1. Update local branches:
   - `git checkout 11.x`
   - `git pull`
2. Merge into deployment branch:
   - `git checkout drupalizeme_live`
   - `git merge 11.x`
3. Resolve conflicts, test if needed, and commit merge.
4. Push deployment branch:
   - `git push origin drupalizeme_live`
5. Confirm the GitHub Actions workflow succeeds.

If needed, run the workflow manually with `workflow_dispatch` from the Actions
tab.


Notes
-----

- Build tooling dependencies come from the DDEV web container which is part of the Drupal.org project.
- The workflow currently targets English source (`source/en`) for feed output.
- Pantheon import commands are executed via Terminus remote Drush.
