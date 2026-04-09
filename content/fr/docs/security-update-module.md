---
title: "Mettre à jour un module"
description: "Comment mettre à jour un module contribué via Composer, l’interface d’administration et le script de mise à jour de la base de données."
id: "security-update-module"
translation_key: "security-update-module"
source_locale: "fr"
---
## Objectif { #security-update-module }

Mettre à jour un module contribué et lancer le script de _Mise à jour de la base
de données_.
## Prérequis

* [security-concept](./security-concept.md)
* [security-cron-concept](./security-cron-concept.md)
## Prérequis du site

* Un module contribué a été installé et une mise à jour est disponible pour lui.
Consulter [extend-module-install](./extend-module-install.md) et [security-announce](./security-announce.md).
* Si votre site est en ligne, vous devriez tester ce processus dans un
environnement de développement avant de l'exécuter sur votre site en production.
Consulter [install-dev-making](./install-dev-making.md).
* Vous avez créé une sauvegarde complète du site. Consulter [prevent-backups](./prevent-backups.md).
* Si vous souhaitez utiliser l'interface utilisateur pour vérifier la présence
de mises à jour, le module Update Manager du cœur doit être installé. Voir
[config-install](./config-install.md) pour des instructions sur l'installation de modules du cœur.
## Étapes

Avant de commencer, vérifier les instructions de mise à jour propres au module.
Lisez et assurez-vous de comprendre tous les prérequis propres au module avant
de procéder aux mises à jour. Pour trouver des instructions, consulter le lien
_Lire la documentation_ de la page du projet du module.

Pour consulter des instructions supplémentaires, après avoir téléchargé les
fichiers mis à jour, consulter les fichiers _README.txt_, _INSTALL.txt_ et
_UPGRADE.txt_ fournis avec les fichiers d'installation du module. Consulter
également les notes de version sur la page du projet en cliquant sur le numéro
de la version que vous téléchargez.

![Lien des notes de version](/images/security-update-module-release-notes.png)

Mettre à jour un module suppose de mettre d'abord le site en mode de
maintenance, d'obtenir les nouveaux fichiers de code, d'appliquer les mises à
jour de la base requises, et enfin de sortir le site du mode de maintenance.

Vous pouvez mettre le code d'un module contribué à jour en utilisant Composer.
Si vous utilisez un module personnalisé plutôt qu'un module contribué, récupérer
les nouveaux fichiers du module, puis poursuivre les instructions relatives aux
mises à jour de la base par l'interface d'administration ci-dessous.

Cela suppose que vous utilisez Composer pour gérer les fichiers de votre site ;
consulter [install-composer](./install-composer.md).
### Mettre à jour un module contribué avec Composer.

1. Mettre votre site en mode de maintenance. Consulter [extend-maintenance](./extend-maintenance.md).
1. Dans le menu d'administration _Gérer_, naviguer vers _Rapports_ > _Mises à
    jour disponibles_ > _Mettre à jour_ (_admin/reports/updates/updates_).
1. Rechercher et vérifier le module dans la liste. Cliquer sur _Télécharger ces
    mises à jour_ après avoir sélectionné le module.
    <img src="/images/security-update-module-updates.png" alt="Mises à jour disponibles" width="100%" />
1. Déterminer le nom machine du projet que vous voulez mettre à jour. Pour les
    modules contribués et les thèmes, il s'agit de la dernière partie de l'URL de la
    page du projet ; par exemple, pour le module Geofield, à l'adresse
    https://www.drupal.org/project/geofield, le nom machine est `geofield`.
1. Si vous voulez mettre à jour vers la dernière version stable, utiliser la
    commande suivante, en remplaçant le nom machine du projet à mettre à jour :
    ```text
    composer update drupal/geofield --with-dependencies
    ```

    Pour apprendre comment télécharger une version spécifique, consulter
    [install-composer](./install-composer.md).

1. Après avoir obtenu les nouveaux fichiers du module, ouvrir la page des mises à
    jour de la base en tapant l'URL _example.com/update.php_ dans votre navigateur.
1. Cliquer sur _Continuer_ pour lancer les mises à jour. Les scripts de mise à
    jour de la base seront lancés.
1. Cliquer sur _Pages d'administration_ pour retourner à la section d'administration de votre site.
1. Sortir votre site du mode de maintenance. Consulter [extend-maintenance](./extend-maintenance.md).
1. Vider le cache (se référer à [prevent-cache-clear](./prevent-cache-clear.md)).

## Améliorer votre compréhension

* Une fois les mises à jour terminées, consulter le journal du site (se référer
à [prevent-log](./prevent-log.md)) pour vérifier s'il y a des erreurs.
* [security-update-theme](./security-update-theme.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/ZYFJ_OJaK4M" title="Updating a Module" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Adapté par [Boris Doesborgh](https://www.drupal.org/u/batigolix),
[Sarah German](https://www.drupal.org/u/hey_germano) de
[Advomatic](https://www.advomatic.com) et https://www.drupal.org/u/eojthebrave[Joe
Shindelar] de [Drupalize.Me](https://drupalize.me) à partir de
["Update modules"](https://www.drupal.org/docs/7/update/updating-modules),
copyright 2000-2026 contributeurs individuels à la
[documentation de la communauté Drupal](https://www.drupal.org/documentation).
Traduit par [Thierry Jarrige](https://www.drupal.org/u/ohmdesbois),
[Édouard Cunibil](https://www.drupal.org/u/duaelfr),
[Francis Pomliane](https://www.drupal.org/u/pomliane) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
