---
title: "Configuring the Theme"
description: "How to edit a theme's settings to update the color scheme and add a logo."
id: "config-theme"
translation_key: "config-theme"
source_locale: "ca"
---
## Goal { #config-theme }

Edit the settings of the default core Bartik theme to change the color scheme
and to add a logo.
## Prerequisite knowledge

[understanding-themes](./understanding-themes.md)
## Steps

1. In the _Manage_ administrative menu, navigate to _Appearance_
    (_admin/appearance_).
1. Under _Installed Themes_, you will find Bartik listed as your default
    theme. Under _Bartik (default theme)_, click _Settings_.
    <img src="/images/config-theme_bartik_settings.png" alt="Default theme, Bartik" width="100%" />
1. Under _Color scheme_, click inside each color build box and type the proper
    color codes you would like to add. For example, use the
    following colors:
    <table>
      <thead>
        <tr>
          <th>Area</th>
          <th>Color</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Header background top</td>
          <td>#7db84a (green)</td>
        </tr>
        <tr>
          <td>Header background bottom</td>
          <td>#2a3524 (dark green)</td>
        </tr>
        <tr>
          <td>Main background</td>
          <td>#ffffff (white)</td>
        </tr>
        <tr>
          <td>Sidebar background</td>
          <td>#f8bc65 (light orange)</td>
        </tr>
        <tr>
          <td>Sidebar borders</td>
          <td>#e96b3c (orange)</td>
        </tr>
        <tr>
          <td>Footer background</td>
          <td>#2a3524 (dark green)</td>
        </tr>
        <tr>
          <td>Title and slogan</td>
          <td>#ffffff (white)</td>
        </tr>
        <tr>
          <td>Text color</td>
          <td>#000000 (black)</td>
        </tr>
        <tr>
          <td>Link color</td>
          <td>#2a3524 (dark green)</td>
        </tr>
      </tbody>
    </table>

    Note: You can also use the color wheel on the right to select colors of your
    choice. The web color codes will be added for you.
    <img src="/images/config-theme_color_scheme.png" alt="Updated color specifications in the core Bartik theme" width="100%" />

1. Under _Logo Image Settings_, uncheck _Use the default logo supplied by the
    theme_.
    ![New logo in core Bartik theme settings](/images/config-theme_logo_upload.png)
1. Under _Upload logo image_, locate a logo file and upload it to your
    site. Note: You can also set a universal logo for all themes under
    _Appearance_ > _Settings_ (_admin/appearance/settings_). A custom logo for your
    theme will override the universal logo.
    Once you have selected the file you would like to upload, you will see its
    filename next to the _Choose File_ button.
1. In order to save your changes and see the updated colors and logo on your
    site, click _Save configuration_ at the bottom of the page.
    Note: Under _Color scheme_, there is a _Preview_ section that displays a sample
    of how your website will look with the new settings.
    <img src="/images/config-theme_color_scheme_preview.png" alt="core Bartik theme settings preview" width="100%" />
1. Click _Return to site_ in the toolbar to verify that you have updated the
    core Bartik theme settings for your website.
    <img src="/images/config-theme_final_result.png" alt="Final result of editing the core Bartik theme settings - colors and logo" width="100%" />

## Expand your understanding

* [extend-theme-find](./extend-theme-find.md)
* [extend-theme-install](./extend-theme-install.md)
* If you do not see the effect of these changes in your site, you might need
to clear the cache. See [prevent-cache-clear](./prevent-cache-clear.md).

*Attributions*

Written and edited by [Ann Greazel](https://www.drupal.org/u/AnnGreazel),
[Amanda Luker](https://www.drupal.org/u/mndonx) at
[Advomatic](https://www.advomatic.com/), and
[Jack Haas](https://www.drupal.org/u/jerseycheese).
