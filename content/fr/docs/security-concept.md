---
title: "Concept : les mises à jour de sécurité et ordinaires"
description: "Vue d'ensemble des mises à jour, comment sont gérés les bogues et mises à jour ordinaires."
id: "security-concept"
translation_key: "security-concept"
source_locale: "fr"
---
## Connnaissances requises { #security-concept }

* [understanding-drupal](./understanding-drupal.md)
* [understanding-modules](./understanding-modules.md)
* [understanding-themes](./understanding-themes.md)
* [understanding-project](./understanding-project.md)
## Qu'est-ce qu'une mise à jour de sécurité ?

De temps à autre, tout logiciel a des bogues. Quelquefois ces bogues impliquent
des risques de sécurité. Lorsque les bogues de sécurité ont été corrigés dans le
cœur, des modules ou des thèmes utilisés sur votre site, une _mise à jour
sécurité_ est publiée. Quand des mises à jour de sécurité critiques sont
annoncées, elles s'affichent sur les pages d'administration de votre site. Pour
préserver la sécurité de votre site, Il est nécessaire d'appliquer les mises à
jour sécurité. Consulter [security-announce](./security-announce.md) pour savoir comment en être
informé par courriel. Consulter [security-update-core](./security-update-core.md),
[security-update-module](./security-update-module.md) et [security-update-theme](./security-update-theme.md) pour savoir comment
effectuer des mises à jour.
## Qu'est-ce que l'équipe sécurité ?

Le projet open source Drupal possède une équipe de bénévoles qui réalisent le suivi des bogues liés à la sécurité et les publications des mises à jour sécurité. D'autre part, ils aident d'autres développeurs à corriger des bogues et mettent à disposition des utilisateurs des informations pour assurer la sécurité de leurs sites web. Consulter la page [_Drupal.org_ Équipe Sécurité](https://www.drupal.org/drupal-security-team/general-information) pour mieux connaître l'équipe sécurité, leurs pratiques et processus.
## Comment sont soumis les rapports de bogues de sécurité ?

Il est important de préserver la confidentialité des problèmes de sécurité jusqu'à ce qu'ils soient corrigés, afin de minimiser les risques avant d'être en mesure de sécuriser les sites. Si vous rencontrez un problème sécurité dans un logiciel téléchargé sur le site _Drupal.org_, veuillez suivre la procédure sur la page [_Drupal.org_ Équipe sécurité](https://www.drupal.org/drupal-security-team/general-information) pour en informer l'équipe.
## Qu'est-ce qu'une mise à jour ordinaire (par opposition aux mises à jour de sécurité) ?

Il existe aussi des mises à jour ordinaires du cœur, des modules et des thèmes qui ajoutent de nouvelles fonctionnalités ou corrigent des bogues. Ces mises à jour sont moins critiques que les mises à jours de sécurité. En général, il est recommandé d'appliquer les mises à jour tant qu'elles ne posent pas de problèmes sur le site. Il vaut toujours mieux faire un test préalable sur une copie de développement du site avant d'appliquer les mises à jour sur votre site de production. Cela vient du fait que certaines mises à jour pourraient comporter des modifications incompatibles avec des modules ou des thèmes, ou être susceptibles de corrompre une fonctionnalité spécifique sur votre site.
## Sujets liés

* [security-announce](./security-announce.md)
* [security-update-core](./security-update-core.md)
* [security-update-module](./security-update-module.md)
* [security-update-theme](./security-update-theme.md)
* [install-dev-making](./install-dev-making.md)
## Ressources supplémentaires

* [_Drupal.org_ page de documentation de la communauté "Securiser votre site"](https://www.drupal.org/security/secure-configuration)
* ["Rapports de sécurité" sur Drupal.org](https://www.drupal.org/security)
* [Équipe _Drupal.org_ Security](https://www.drupal.org/drupal-security-team/general-information)

*Attributions*

Écrit et modifié par [Boris Doesborg](https://www.drupal.org/u/batigolix).
Traduit par [Lydie Parisot](https://www.drupal.org/u/onewomanbiz) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
