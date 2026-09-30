---
title: "Concept : les parties qui composent une vue"
description: "Vue d'ensemble des parties qui composent une vue dans l'administration."
id: "views-parts"
translation_key: "views-parts"
source_locale: "fr"
---
## Prérequis { #views-parts }

* [planning-data-types](./planning-data-types.md)
* [planning-modular](./planning-modular.md)
* [views-concept](./views-concept.md)
* [content-paths](./content-paths.md)
* [block-concept](./block-concept.md)
## De quoi est composée une vue ?

Quand vous modifiez une vue dans l'interface d'administration, vous voyez les
parties suivantes (ou sections), qui vous permettent de définir les
données générées, ainsi que leur ordre, et leur format :

- **Affichage:** Chaque vue peut avoir un ou plusieurs affichages, chacun produisant un type de rendu. Parmi les options possibles pour les types d'affichage, on trouve : Page;; Génère une page accessible à une URL donnée, la vue est affichée dans la zone principale de la page. Block;; Génère un bloc, qui peut être placé sur des pages. Flux;; Génère un flux RSS ou d'un autre type. vue attachée;; Génère un rendu que vous pouvez attacher à un autre affichage.
- **Format:** Selon le type d'affichage, vous pouvez choisir de présenter vos données sous la forme d'un tableau, d'une grille, d'une liste HTML, ou sous un autre format. Quelques formats vous donnent également le choix de présenter des entités ou des champs ; d'autres formats ne vous laissent pas le choix (par exemple, si vous utilisez le format tableau, vous devez toujours utiliser des champs).
- **Champs:** Selon le choix du format, vous pourrez choisir quels champs des contenus sont affichés. Par exemple, si vous étiez en train de créer une vue de contenus de type "recette", dans un affichage de type bloc vous pourriez ne montrer que les titres des recettes, alors que dans un affichage en pleine page vous pourriez également afficher un champ image parce que vous disposez de plus d'espace.
- **Critères de filtrage:** Les filtres limitent les données retournées par la vue, en se basant sur des critères tels que le statut de publication d'un contenu, son type, ou la valeur d'un des champs. Par exemple, pour créer une vue de contenu de type "recette", vous aurez besoin de filtrer selon le type de contenu (Recette) et de vous limiter aux recettes publiées. Les filtres peuvent êtres _exposés_, ce qui signifie que les utilisateurs disposeront d'un formulaire où ils pourront filtrer avec leurs propres valeurs. Vous pourriez utiliser ceci sur la page d'une recette pour permettre aux utilisateurs de filtrer les recettes selon certains ingrédients.
- **Critères de tri:** Ils définissent l'ordre dans lequel présenter les résultats retournés par la vue, il peut être basé sur n'importe quel champ du contenu.
- **Filtres contextuels:** Les filtres contextuels sont comme des filtres normaux, à ceci près que les valeurs proviennent du _contexte_ de l'affichage de la vue, comme l'URL complète de la page affichée, la date ou l'heure actuelles, ou une autre valeur qui peut être détectée au rendu de la vue.
- **Relations:** Les relations vous permettent d'étendre ce qui est affiché dans votre vue, en reliant le contenu de base affiché à d'autres entités de contenu. Les relations sont créées en utilisant les champs du contenu de base qui le relient à d'autres contenus ; par exemple, tous les contenus ont un champ auteur, qui référence le compte d'utilisateur d'une personne qui a créé le contenu. Après avoir créé une relation, vous pourrez afficher dans la vue les champs de l'entité utilisateur référencée.
## Sujets liés

[views-create](./views-create.md)

*Attributions*

Écrit et modifié par [Surendra Mohan](https://www.drupal.org/u/surendramohan) et
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Traduit par
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
