---
title: "Designating a Front Page for your Site"
description: "How to configure a content item so that it gets displayed as the home page."
id: "menu-home"
translation_key: "menu-home"
source_locale: "id"
---
## Goal { #menu-home }

Configure which content item is displayed as the front page of your website.
## Site prerequisites

The content item that you want to designate as the front page of your site must
exist. See [content-create](./content-create.md).
## Steps

1. In the _Manage_ administrative menu, navigate to _Configuration_ > _System_ >
    _Basic site settings_ (_admin/config/system/site-information_).
1. Under _Front page_, replace _/node_ with the name of the page you
    would like to make the home page. To use the home page that was previously
    created, provide its path _/home_. Click _Save configuration_.
    !['FRONT PAGE' area with /home in text field](/images/menu-home_new_text_field.webp)
1. Navigate to the home page to verify that it displays content as configured by
    you.
    <img src="/images/menu-home_final.webp" alt="'FRONT PAGE' with 'Home' (Basic page) content added" width="100%" />

## Expand your understanding

* [menu-link-from-content](./menu-link-from-content.md)
* Follow [content-create](./content-create.md) to create an error page to be used as a 404 (page
not found) or 403 (not authorized) response on your site. Then following the
steps here, you can designate it as the error response, in the _Error pages_
section of the configuration.
## Related concepts

[menu-concept](./menu-concept.md)

*Attributions*

Written and edited by [Ann Greazel](https://www.drupal.org/u/AnnGreazel),
[Jack Haas](https://www.drupal.org/u/jerseycheese), and
[Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com).
