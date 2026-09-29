---
title: "Modifier l'affichage du contenu"
description: "Comment rendre les éléments de contenu plus présentables."
id: "structure-content-display"
translation_key: "structure-content-display"
source_locale: "fr"
---
## Objectif { #structure-content-display }

Rendre les éléments de contenu plus lisibles, accessibles, et attractifs en
réordonnant les champs, masquant les étiquettes et personnalisant le rendu des
champs.
## Prérequis

* [planning-data-types](./planning-data-types.md)
* [structure-view-modes](./structure-view-modes.md)
## Prérequis du site

Le type de contenu Vendeur doit exister, il doit comporter les champs _image
principale_ et _URL du vendeur_, et votre site doit avoir au moins un élément de
contenu de type vendeur. Consulter [structure-content-type](./structure-content-type.md),
[structure-fields](./structure-fields.md), et [content-create](./content-create.md).
## Étapes

1. Trouver et afficher un élément de contenu de type vendeur que vous avez créé
    dans [structure-fields](./structure-fields.md). Noter qu'il y a plusieurs choses qui peuvent être
    faites pour améliorer l'apparence de la page : 
    * Les champs _image principale_ et _URL du vendeur_ ne doivent pas avoir d'étiquettes.
    * L'ordre des champs doit être changé pour que l'image s'affiche en premier.
    * L'image doit être plus petite.
1. Pour traiter les deux premiers points, et mettre à jour des paramètres
    supplémentaires, dans le menu d'administration _Gérer_, aller à _Structure_ >
    _Types de contenu_ (_admin/structure/types_). Puis cliquer sur _Gérer
    l'affichage_ dans la liste de séléction pour le type de contenu Vendeur.
    <img src="/images/structure-content-display_manage_display.png" alt="Gérer l'affichage" width="100%" />
1. Sous la colonne _Étiquette_ sélectionner _caché_ pour l'image principale.
    Faire de même pour l'URL du vendeur.
    <img src="/images/structure-content-display_main_image_hidden.png" alt="Sélection du titre de l'image principale" width="100%" />
1. Cliquer sur l'engrenage du champ URL du vendeur afin d'ouvrir les options de
    configuration.
1. Remplir les champs tel qu'indiqué ci-dessous.
    <table>
      <thead>
        <tr>
          <th>Nom du champ</th>
          <th>Explication</th>
          <th>Valeur d'exemple</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Longueur du texte du lien</td>
          <td>Longueur maximum à l'affichage du texte du lien</td>
          <td>Vide (ne pas tronquer)</td>
        </tr>
        <tr>
          <td>Ouvrir le lien dans une nouvelle fenêtre</td>
          <td>Si les liens devraient s'ouvrir dans une nouvelle fenêtre ou dans la même fenêtre</td>
          <td>Coché</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-content-display_trim_length.png" alt="Longueur du lien" width="100%" />

1. Cliquer sur _Mettre à jour_.
1. Faire glisser les poignées en forme de croix des champs pour réordonner
    l'image principale, le corps, l'URL du vendeur and les liens. Alternativement au
    glisser/déposer, il est possible de cliquer sur le lien _Afficher les poids des
    lignes_ en tête du tableau et de saisir des poids numériques (les champs ayant
    des poids algébriques inférieurs seront affichés en premier).
    <img src="/images/structure-content-display_change_order.png" alt="Changer l'ordre des champs" width="100%" />
1. Cliquer sur _Enregistrer_.
1. Retrouver l'élément de contenu de type vendeur de l'étape 1, et vérifier que
    les mises à jour sont bien effectués.
1. Répéter des étapes similaires pour gérer l'affichage des champs du type de
    contenu Recette.

## Améliorer votre compréhension

* Pour rendre l'image principale plus petite, consulter
[structure-image-style-create](./structure-image-style-create.md).
* Si vous ne voyez pas les effets de ces changement sur votre site, vous
pourriez avoir besoin de vider les caches. Consulter [prevent-cache-clear](./prevent-cache-clear.md).
## Concepts liés

[structure-image-styles](./structure-image-styles.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/myYI9rhF_4o" title="Changing Content Display" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Pour aller plus loin (en anglais)

* [Page de documentation de la communauté sur _Drupal.org_ "Specify how fields are displayed"](https://www.drupal.org/docs/7/nodes-content-types-and-fields/specify-how-fields-are-displayed)
* [Page de documentation de la communauté sur _Drupal.org_ "Rearrange the order of fields"](https://www.drupal.org/docs/7/nodes-content-types-and-fields/rearrange-the-order-of-fields)
* [Page de documentation de la communauté sur _Drupal.org_ "View modes"](https://www.drupal.org/node/1577752)

*Attributions*

Ecrit par [Ann Greazel](https://www.drupal.org/u/AnnGreazel) et
[Boris Doesborg](https://www.drupal.org/u/batigolix).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
