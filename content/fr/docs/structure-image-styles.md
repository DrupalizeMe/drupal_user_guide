---
title: "Concept : styles d'images"
description: "Vue d'ensemble des styles d'images et de la manière dont ils sont utilisés pour afficher une image donnée sous plusieurs formes."
id: "structure-image-styles"
translation_key: "structure-image-styles"
source_locale: "fr"
---
## Prérequis { #structure-image-styles }

[structure-fields](./structure-fields.md)
## Qu'est ce qu'un style d'image ?

Les styles d'images vous permettent de transférer une seule image, mais de
l'afficher de différentes façons ; chaque variante d'affichage, ou _style
d'image_, est le résultat de l'application d'un ou plusieurs _effets_ sur
l'image originale.

Par exemple, vous pourriez vouloir transférer une image en haute résolution avec
un ratio 4:3, et l'afficher à une échelle plus petite, avec les coins arrondis,
ou en noir et blanc (ou toute combinaison de ces effets). Le cœur du logiciel
fournit un moyen efficace de le faire :

1. Configurer un style d'image avec les effets souhaités dans la page _Style
    d'image_ (_admin/config/media/image-styles_).
1. Les effets seront appliqués la première fois qu'une image particulière doit
    s'afficher avec ce style.
1. L'image résultante est enregistrée.
1. La prochaine fois que le même style est requis, l'image enregistrée est
    retrouvée sans qu'il soit nécessaire de recalculer les effets.

    Le cœur du logiciel fournit plusieurs effets que vous pouvez utiliser pour
    définir les styles ; d'autres peuvent être fournis par les modules
    contribués.

    Visiter la page des _Styles d'image_ via le menu d'administration _Gérer_, aller 
    à _Configuration_ > _Média_ > _Styles d'images_ (_admin/config/media/image-styles_)
    pour voir les styles d'images qui sont définis par défaut.
## Concepts liés

* [structure-image-style-create](./structure-image-style-create.md)
* [structure-image-responsive](./structure-image-responsive.md)
* [structure-fields](./structure-fields.md)
## Pour aller plus loin (en anglais)

[Page de documentation de la communauté sur _Drupal.org_ "Working with images"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/image-module/working-with-images)

*Attributions*

Adapté et modifié par [Boris Doesborg](https://www.drupal.org/u/batigolix),
et [Jojy Alphonso](https://www.drupal.org/u/jojyja) de
[Red Crackle](http://redcrackle.com), depuis
["Working with images](https://www.drupal.org/docs/core-modules-and-themes/core-modules/image-module/working-with-images),
copyright 2000-2026 contributeurs individuels de
[la documentation de la communauté Drupal](https://www.drupal.org/documentation)
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
