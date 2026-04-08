---
title: "Editing Basic Site Information"
description: "How to edit basic site information (site name, slogan, and default time zone)."
id: "config-basic"
translation_key: "config-basic"
source_locale: "en"
---
## Goal { #config-basic }

Change basic site information such as _Site name_, _Slogan_,
_Default time zone_.
## Prerequisite knowledge

[config-overview](./config-overview.md)
## Steps
### Configuring the basic site information

1. In the _Manage_ administrative menu, navigate to _Configuration_ > _System_ >
    _Basic site settings_ (_admin/config/system/site-information_) to change the
    _Site name_, _Slogan_, administrative _Email address_, or the _Default front
    page_ path.
1. Fill in the available fields as appropriate for your site.
    <table>
      <thead>
        <tr>
          <th>Field name</th>
          <th>Explanation</th>
          <th>Example value</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Site details > Site name</td>
          <td>Used to identify the site and displayed in browsers</td>
          <td>Anytown Farmers Market</td>
        </tr>
        <tr>
          <td>Site details > Slogan</td>
          <td>How this is used depends on your site's theme. Not displayed by default when using the Olivero theme.</td>
          <td>Farm Fresh Food</td>
        </tr>
        <tr>
          <td>Site details > Email address</td>
          <td>Used as _From_ address in automated email messages (registrations, password resets, etc)</td>
          <td>info@example.com</td>
        </tr>
      </tbody>
    </table>

    ![Site Information](/images/config-basic-SiteInfo.png)

1. After editing the fields, click _Save configuration_ to see the changes
    applied to the site.

### Configuring default Regional settings

1. In the _Manage_ administrative menu, navigate to _Configuration_ >
    _Regional and language_ > _Regional settings_
    (_admin/config/regional/settings_).
1. Fill in the form as follows:
    <table>
      <thead>
        <tr>
          <th>Field name</th>
          <th>Explanation</th>
          <th>Example value</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Locale > Default country</td>
          <td>The primary country for your site</td>
          <td>United States</td>
        </tr>
        <tr>
          <td>Locale > First day of week</td>
          <td>The day when the week starts on calendars</td>
          <td>Sunday</td>
        </tr>
        <tr>
          <td>Time zones > Default time zone</td>
          <td>The primary time zone for your site</td>
          <td>America > Los Angeles</td>
        </tr>
        <tr>
          <td>Time zones > Users may set their own time zone</td>
          <td>Whether logged-in users can choose a different time zone for display of dates and times on the site</td>
          <td>Unchecked</td>
        </tr>
      </tbody>
    </table>

    ![Time Zones](/images/config-basic-TimeZone.png)

1. After editing the fields, click _Save configuration_ to see the changes
    applied to the site.

## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/oDMCQ1cDYOI" title="Editing Basic Site Information" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Additional resources

[_Drupal.org_ community documentation page "Getting started with Drupal administration"](https://www.drupal.org/docs/administering-a-drupal-site/getting-started-with-drupal-administration)

*Attributions*

Written and edited by [Sree Veturi](https://www.drupal.org/u/sree),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) at
[erdfisch](https://erdfisch.de),
[Antje Lorch](https://www.drupal.org/u/ifrik),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon), and
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) at
[Drupalize.Me](https://drupalize.me).
