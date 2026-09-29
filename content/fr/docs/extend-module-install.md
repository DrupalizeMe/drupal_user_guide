---
title: "Télécharger et installer un module depuis _Drupal.org_"
description: "Comment télécharger et installer un module depuis Drupal.org."
id: "extend-module-install"
translation_key: "extend-module-install"
source_locale: "fr"
---
## Objectif { #extend-module-install }

Télécharger et installer le
[module contribué Admin Toolbar](https://www.drupal.org/project/admin_toolbar),
qui permet de naviguer facilement dans le menu d'administration du site web.
## Prérequis

* [understanding-modules](./understanding-modules.md)
* [extend-module-find](./extend-module-find.md)
* [install-tools](./install-tools.md)
## Prérequis du site

Composer doit être installé pour télécharger des modules. Si vous voulez
utiliser Drush, procéder tout d'abord à son installation. Consulter
[install-tools](./install-tools.md).
## Étapes

Pour installer un module contribué, commencer par le télécharger avec Composer.
Ensuite, l'installer en utilisant soit l'interface d'administration, soit Drush.
Si vous installez un module personnalisé plutôt qu'un module contribué, qui n'est
pas disponible via Composer, passer ces étapes concernant le téléchargement du
module, et se référer à [extend-manual-install](./extend-manual-install.md). Revenir alors ici et suivre
les étapes pour installer le module, en utilisant soit l'interface
d'administration, soit Drush.
### Télécharger le module contribué avec Composer

1. Sur la page du projet _Admin toolbar_ sur drupal .org
    (_https://www.drupal.org/project/admin_toolbar_), dérouler la page jusqu'à la
    section _Releases_ (versions) en bas de page.
1. Copier la commande Composer fournie correspondant à la version du module que
    vous souhaitez installer.
    ![Trouver la commande d'installation d'un module avec Composer](/images/extend-module-install-download.png)
1. Vous pouvez autrement taper la commande suivante (en remplaçant le nom
    machine du module et la version souhaitée) :
    ```text
    composer require 'drupal/admin_toolbar:^3.5'
    ```
1. En ligne de commande, se placer dans le répertoire racine du projet. Coller la
    commande Composer et l'exécuter.
1. Vous devriez voir un message indiquant que le module a été téléchargé avec
    succès.

### Installer le module depuis l'interface d'administration

1. Dans le menu d'administration _Gérér_, naviguer vers _Extension_
    (_admin/modules_). La page _Extension_ apparaît.
1. Localiser le module _Admin toolbar_ et le cocher.
    ![Installation du module Admin Toolbar](/images/extend-module-install-admin-toolbar-do.png)
1. Cliquer sur _Installer_ pour activer le nouveau module.

### Installer le module en utilisant Drush

1. Exécuter la commande Drush suivante, en donnant le nom du projet en paramètre (par exemple,
    `admin_toobar`) :
    ```text
    drush pm:enable admin_toolbar
    ```
1. Suivre les instructions à l'écran.

## Pour approfondir

* Vérifier que le
[module contribué Admin Toolbar](https://www.drupal.org/project/admin_toolbar)
fonctionne en naviguant dans le menu dans la section d'administration.
* Installer et configurer le
[module contribué Pathauto](https://www.drupal.org/project/pathauto) pour que les
pages de contenu de votre site aient des URL agréables par défaut. Consulter
[content-paths](./content-paths.md) pour en savoir plus sur les URL.
* Si vous ne voyez pas d'effet de ces modifications sur votre site, il pourrait
être nécessaire de vider le cache. Consulter [prevent-cache-clear](./prevent-cache-clear.md).
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/vx9nWJE1Kbk" title="Downloading and Installing a Module from Drupal.org" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Pour aller plus loin (en anglais)

* [Page de documentation de la communauté sur _Drupal.org_ "Installing Drupal modules"](https://www.drupal.org/docs/extending-drupal/installing-drupal-modules)
* [Page "Download and Extend" sur _Drupal.org_](https://www.drupal.org/download)
* [Module Admin Toolbar sur _Drupal.org_](https://www.drupal.org/project/admin_toolbar)

*Attributions*

Écrit et modifié par [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) de
[Drupalize.Me](https://drupalize.me), et
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Traduit par
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
