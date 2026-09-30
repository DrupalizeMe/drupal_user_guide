---
title: "Concept : modules"
description: "Vue d'ensemble des modules et des fonctionnalités pour lesquelles ils peuvent être utilisés."
id: "understanding-modules"
translation_key: "understanding-modules"
source_locale: "fr"
---
## Prérequis { #understanding-modules }

[understanding-drupal](./understanding-drupal.md)
## Qu'est ce qu'un module ?

Un module est un ensemble de fichiers PHP, Javascript et/ou CSS qui étendent les
fonctionnalités du site et ajoutent des fonctionnalités. Vous pouvez activer les
fonctionnalités en _installant_ le module, et vous pouvez les désactiver en
_désinstallant_ le module ; cependant, avant de le désinstaller, vous pourriez
avoir besoin de supprimer les données et la configuration en lien avec le
module. Chaque module qui est installé ajoute du temps nécessaire pour générer
les pages de votre site, donc une bonne idée est de désinstaller les modules qui
ne sont pas nécessaires.

Le téléchargement du cœur fournit des modules avec des fonctionnalités comme :

* Gestion des comptes utilisateur (le module du cœur User)
* Gestion basique du contenu (le module du cœur Node) et les champs (les modules
du cœur Field et Field UI ; il y a aussi des modules du cœur qui fournissent des
types de champs)
* Gestion des menus de navigation (le module du cœur Menu UI)
* Faire des listes, des grilles et des blocs pour les contenus existants (les
modules du cœur Views et Views UI)

Vous pouvez télécharger des _modules contribués_ supplémentaires depuis
[_Drupal.org_ Module Downloads](https://www.drupal.org/project/project_module), ou créer vos propres _modules personnalisés_.
## Sujets liés

* [understanding-themes](./understanding-themes.md)
* [understanding-distributions](./understanding-distributions.md)
* [config-uninstall](./config-uninstall.md)
* [extend-module-find](./extend-module-find.md)
* [extend-module-install](./extend-module-install.md)
* [security-concept](./security-concept.md)
* [security-update-module](./security-update-module.md)
## Pour aller plus loin

[_Drupal.org_ page de la documentation communautaire "Module developer's guide"](https://www.drupal.org/developing/modules)

*Attributions*

Écrit par [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky),
[Edouard Cunibil](https://www.drupal.org/u/duaelfr) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
