---
title: "Concept : taxonomie"
description: "Vue d'ensemble de la taxonomie et de son utilisation pour catégoriser le contenu d'un site web."
id: "structure-taxonomy"
translation_key: "structure-taxonomy"
source_locale: "fr"
---
## Prérequis { #structure-taxonomy }

* [planning-data-types](./planning-data-types.md)
* [structure-reference-fields](./structure-reference-fields.md)
## Qu'est-ce que la taxonomie ?

La _Taxonomie_ est utilisée pour classer le contenu d'un site web. Les mots clés
utilisés pour classer les articles sur un blog sont un exemple fréquent de
taxonomie ; le site du marché fermier pourrait utiliser une taxonomie
_Ingrédients_ pour classer les recettes. Chaque entité de taxonomie est appelée
_terme_ (le mot clé du blog ou l'ingrédient de la recette dans nos exemples) ;
et un ensemble de termes est appelé _vocabulaire_ (l'ensemble des mots clés du
blog, ou l'ensemble de tous les ingrédients des recettes dans nos exemples).
Techniquement, les termes de taxonomie sont des type d'entité et les sous-types
d'entités sont les vocabulaires. Comme les autres entités, les termes de
taxonomie peuvent avoir des champs attachés ; par exemple, vous pouvez définir
un champ image pour avoir une icône sur chaque terme.

Un vocabulaire peut organiser ses termes dans une hiérarchie, ou il peuvent être
au même niveau. Par exemple, les mots clés de blog sont normalement au même
niveau, alors qu'un vocabulaire pour les ingrédients des recettes peut être
hiérarchique (par exemple, les tomates peuvent être un sous-terme de légumes, et
sous tomate, on pourrait avoir les tomates vertes et les tomates rouges).

Les termes de taxonomie sont habituellement attachés comme champ de type
référence aux autres entités de contenu, c'est ainsi que l'on peut les utiliser
pour classer le contenu. Lorsque l'on définit un champ de type référence à un
terme, vous pouvez laisser l'utilisateur saisir les termes de deux façons :

- **Étiquetage libre:** Les nouveaux termes peuvent être créés directement sur le formulaire d'édition du contenu.
- **Liste de termes définie:** La liste des termes est alors gérée en dehors du formulaire d'édition du contenu, et les utilisateurs peuvent seulement choisir depuis la liste existante lorsqu'ils modifient un contenu.

Les champs de type référence à un terme peuvent être ajoutés à n'importe quelle
entité, comme les comptes utilisateurs, les blocs personnalisés, ou les éléments
de contenu standard. Si vous les utilisez pour classer des éléments de contenu
standard, votre site sera automatiquement paramétré avec une page listant les
contenu pour chaque terme ; chacune de ces pages liste tous les éléments de
contenu qui sont classés avec ce terme. Par exemple, si vous créez plusieurs
recettes qui ont toute la carotte comme ingrédient, vous pourriez voir quelque
chose comme ça dans la page listant l'utilisation du terme Carotte :

![Page de liste de taxonomie - carottes](/images/structure-taxonomy_listingPage_carrots.webp)
## Sujets liés

* [structure-taxonomy-setup](./structure-taxonomy-setup.md).
* Les pages de liste sont des vues, qui sont détaillées dans [views-chapter](./index.md#views-chapter).

*Attributions*

Adapté et modifié par [Surendra Mohan](https://www.drupal.org/u/surendramohan),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
et [Jojy Alphonso](https://www.drupal.org/u/jojyja) de
[Red Crackle](http://redcrackle.com) de
["Organizing content with taxonomies"](https://www.drupal.org/docs/7/organizing-content-with-taxonomies/organizing-content-with-taxonomies)
et ["About taxonomy"](https://www.drupal.org/docs/7/organizing-content-with-taxonomies/about-taxonomies),
copyright 2000-2026 contributeurs individuels à la
[documentation de la communauté Drupal](https://www.drupal.org/documentation).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
