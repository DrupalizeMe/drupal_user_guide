---
title: "Editing Basic Site Information"
description: "How to edit basic site information (site name, slogan, and default time zone)."
id: "config-basic"
translation_key: "config-basic"
source_locale: "ca"
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
          <td>Site name</td>
          <td>Used to identify the site and displayed in browsers</td>
          <td>Anytown Farmers Market</td>
        </tr>
        <tr>
          <td>Slogan</td>
          <td>Usually displayed sitewide</td>
          <td>Farm Fresh Food</td>
        </tr>
        <tr>
          <td>Email address</td>
          <td>Used as _From_ address in automated email messages (registrations, password resets, etc)</td>
          <td>info@example.com</td>
        </tr>
      </tbody>
    </table>

    ![Site Information](/images/config-basic-SiteInfo.webp)

1. After editing the fields, click _Save configuration_ to see the changes
    applied to the site.
### Configuring default Regional settings

1. In the _Manage_ administrative menu, navigate to _Configuration_ >
    _Regional and Language_ > _Regional settings_
    (_admin/config/regional/settings_).
1. Select the appropriate country from the _Default country_ select list in the
    _Locale_ section, and set which day will be displayed as _First day of week_
    on your site.
1. In the _Time zones_ section, select the sitewide _Default time zone_ from the
    list and configure user-specific time zones.
    ![Time Zones](/images/config-basic-TimeZone.webp)
1. After editing the fields, click
    _Save configuration_ to see the changes applied to the site.
## Additional resources

[_Drupal.org_ community documentation page "Getting started with Drupal 8 administration"](https://www.drupal.org/node/1896670)

*Attributions*

Written and edited by [Sree Veturi](https://www.drupal.org/u/sree),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) at
[erdfisch](https://erdfisch.de),
and [Antje Lorch](https://www.drupal.org/u/ifrik).
