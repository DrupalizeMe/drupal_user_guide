---
title: "Télécharger et installer un thème depuis _Drupal.org_"
description: "Comment télécharger et installer un thème depuis Drupal.org."
id: "extend-theme-install"
translation_key: "extend-theme-install"
source_locale: "fr"
---
## Objectif { #extend-theme-install }

Télécharger et installer un thème depuis _Drupal.org_.
## Prérequis

* [extend-theme-find](./extend-theme-find.md)
* [install-tools](./install-tools.md)
## Prérequis du site

Composer doit être installé pour télécharger des thèmes. Si vous voulez utiliser
Drush, procéder tout d'abord à son installation. Consulter [install-tools](./install-tools.md).
## Étapes

Pour installer un thème contribué, commencer par le télécharger avec Composer.
Ensuite, l'installer en utilisant soit l'interface d'administration, soit Drush.
Si vous installez un thème personnalisé plutôt qu'un thème contribué, qui n'est
pas disponible via Composer, passer ces étapes concernant le téléchargement du
module, et se référer à [extend-manual-install](./extend-manual-install.md). Revenir alors ici et suivre
les étapes pour installer le module, en utilisant soit l'interface
d'administration, soit Drush.
### Télécharger le thème contribué avec Composer

1. Sur la page de projet du thème sur drupal.org (par exemple
    _https://www.drupal.org/project/honey_), dérouler la page jusqu'à la section
    _Releases_ (versions) en bas de page.
1. Copier la commande Composer fournie correspondant à la version du thème que
    vous souhaitez installer.
    ![Trouver la commande d'installation d'un thème avec Composer](/images/extend-theme-install-download.webp)
1. Vous pouvez autrement taper la commande suivante (en remplaçant le nom
    machine du thème et la version souhaitée) :
    ```text
    composer require 'drupal/honey:^1.0'
    ```
1. En ligne de commande, se placer dans le répertoire racine du projet. Coller la
    commande Composer et l'exécuter.
1. Vous devriez voir un message indiquant que le thème a été téléchargé avec
    succès.

### Installer le thème depuis l'interface d'administration

1. Dans le menu d'administration _Gérer_, naviguer vers _Apparence_
    (_admin/appearance_). La page _Apparence_ apparaît.
1. Localiser le nouveau thème sous _Thèmes désinstallés_ et cliquer sur
    _Installer et définir par défaut_ pour l'utiliser. Toutes les pages hors celles
    d'administration de votre site utiliseront alors ce nouveau thème.
    <img src="/images/extend-theme-install-appearance-page.webp" alt="Thèmes désinstallés sur la page Apparence" width="286px" />

### Utiliser Drush pour installer un thème

1. Pour installer le thème et le définir comme thème par défaut, exécuter les
    commandes Drush suivantes, en donnant le nom du projet en paramètre (par
    exemple, _honey_) :
    ```text
    drush theme:enable honey
    drush config:set system.theme default honey
    ```
1. Suivre les instructions à l'écran.

## Pour approfondir

* Dans le menu d'administration _Gérer_, naviguer vers _Apparence_
(_admin/appearance) et désinstaller tous les thèmes que vous n'utilisez pas.
* [extend-module-find](./extend-module-find.md)
* [extend-module-install](./extend-module-install.md)
* Si vous ne voyez pas d'effet de ces modifications sur votre site, il pourrait
être nécessaire de vider le cache. Consulter [prevent-cache-clear](./prevent-cache-clear.md).
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/UFgddj0F_bU" title="Downloading and Installing a Theme from Drupal.org" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Écrit et modifié par [Joe Shindelar](https://www.drupal.org/u/eojthebrave) de
[Drupalize.Me](https://drupalize.me), et https://www.drupal.org/u/batigolix[Boris
Doesborgh]. Traduit par [Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
