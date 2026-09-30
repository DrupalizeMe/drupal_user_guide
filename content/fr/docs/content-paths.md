---
title: "Concept : chemins, alias et URL"
description: "Vue d'ensemble des chemins, alias et URL (avec des exemples)."
id: "content-paths"
translation_key: "content-paths"
source_locale: "fr"
---
## Qu'est ce qu'une URL ? { #content-paths }

URL est un acronyme pour "Uniform Resource Locator", ce qui correspond à
l'adresse d'une page sur le web. C'est le "nom" par lequel un navigateur
identifie une page à afficher. Par exemple dans "Rendez-nous visite à
_exemple.com_", _exemple.com_ est l'URL de la page d'accueil de votre site. Les
utilisateurs utilisent les URL pour accéder au contenu sur le web.
## Qu'est ce qu'un chemin ?

Un chemin est la partie unique, la dernière partie d'une URL pour une fonction
spécifique ou un contenu précis. Par exemple, pour une page dont l'URL complète
est _http://example.com/node/7_, le chemin est _node/7_.

Voici quelques exemples de chemins que vous pouvez trouver sur votre site :

* _node/7_
* _taxonomy/term/6_
* _admin/content/comment_
* _user/login_
* _user/3_
## Qu'est ce qu'un alias ?

Le cœur du logiciel comprend une fonctionnalité appelée "Alias d'URL" qui vous
autorise à définir des noms plus compréhensible pour le contenu. Par conséquent,
si vous avez une page "À propos" avec le chemin _node/7_, vous pouvez définir un
alias que les visiteurs verront comme _http://www.example.com/apropos_. Le
module du coeur Path, qui supporte les alias d'URL, fournit cette
fonctionnalité.
## Sujets liés

* [content-create](./content-create.md)
* [content-edit](./content-edit.md)

*Attributions*

Adapté par [Diána Lakatos](https://www.drupal.org/u/dianalakatos) de
[Pronovix](https://pronovix.com/) depuis
["URL aliases"](https://www.drupal.org/node/120631), et
["URL paths"](https://www.drupal.org/docs/7/understanding-drupal/url-paths)
copyright 2000-2026 contributeurs individuels de la
[documentation de la communauté Drupal](https://www.drupal.org/documentation)
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
