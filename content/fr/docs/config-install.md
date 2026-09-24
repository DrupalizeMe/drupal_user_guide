---
title: "Installer un module"
description: "Comment installer un module du cœur ou contribué, en utilisant l'interface d'administration ou Drush."
id: "config-install"
translation_key: "config-install"
source_locale: "fr"
---
## Objectif { #config-install }

Installer un module du cœur, ou un module contribué dont les fichiers ont déjà
été téléchargés sur le site, à travers l'interface d'administration ou en
utilisant Drush.
## Prérequis

[understanding-modules](./understanding-modules.md)
## Prérequis du site

Si vous voulez utiliser Drush pour installer des modules, Drush doit être
installé, voir [install-tools](./install-tools.md).
## Étapes

Vous pouvez utiliser l'interface d'administration ou Drush pour installer des
modules.
### En utilisant l'interface d'administration

1. Dans le menu d'administration _Gérer_, naviguer dans _Extensions_
    (_admin/modules_). La page _Extensions_ affiche tous les modules
    disponibles sur votre site.
1. Cocher les cases pour le module ou les modules que vous voulez installer. Par
    exemple, cocher la case pour le module Ban.
    <img src="/images/config-install-check-modules.webp" alt="Activation du module du cœur Ban" width="100%" />
1. Cliquer sur _Installer_. Les modules cochés seront installés.

### En utilisant Drush

1. Dans le menu d'administration _Gérer_, naviguer dans _Extensions_
    (_admin/modules_). La page _Extensions_ montre tous les modules disponibles sur
    votre site.
1. Trouver le nom machine du module que vous voulez installer, en affichant la
    zone d'information pour le module. Par exemple, le nom machine du module du
    cœur Ban est _ban_.
1. Lancer la commande Drush suivante pour installer le module :
    ```text
    drush pm:enable ban
    ```

## Améliorer votre compréhension

Si vous ne voyez pas l'effet des changements sur votre site, vous aurez
peut-être besoin de vider les caches. Consulter [prevent-cache-clear](./prevent-cache-clear.md).
## Pour aller plus loin (en anglais)

[Drush](http://www.drush.org)

*Attributions*

Ecrit et modifié par [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) et
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) de
[Drupalize.Me](https://drupalize.me).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
