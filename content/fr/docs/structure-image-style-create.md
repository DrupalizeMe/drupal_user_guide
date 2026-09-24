---
title: "Définir un style d'image"
description: "Comment ajouter un style d'image pour reformater une image."
id: "structure-image-style-create"
translation_key: "structure-image-style-create"
source_locale: "fr"
---
## Objectif { #structure-image-style-create }

Ajouter un style d'image et l'utiliser pour afficher les images dans les pages
Vendeur.
## Prérequis

* [structure-fields](./structure-fields.md)
* [structure-content-display](./structure-content-display.md)
* [structure-image-styles](./structure-image-styles.md)
## Prérequis du site

* Les types de contenu Vendeur et Recette doivent exister. Consulter
[structure-content-type](./structure-content-type.md).
* Les champs Image principale doivent exister pour les deux types de contenus.
Consulter [structure-fields](./structure-fields.md).
* Des éléments de contenu doivent exister pour les deux types de contenu.
Consulter [structure-content-type](./structure-content-type.md), [structure-fields](./structure-fields.md), et
[content-create](./content-create.md).
## Étapes

1. Dans le menu d'administration _Gérer_, aller à _Configuration_ > _Média_ >
    _Styles d'image_ (_admin/config/media/image-styles_).
1. Cliquer sur _Ajouter un style d'image_.
1. Saisir le nom _Extra medium (300x200)_.
1. Cliquer sur _Créer un nouveau style_. La page _Modifier le style Extra Medium
    (300X200)_ apparaît.
1. Dans le tableau _Effets_, sélectionner _Mise à l'échelle et recadrage_.
    Cliquer sur _Ajouter_.
1. Remplir les champs comme indiqué ci-dessous.
    <table>
      <thead>
        <tr>
          <th>Nom du champ</th>
          <th>Valeur</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Largeur</td>
          <td>300</td>
        </tr>
        <tr>
          <td>Hauteur</td>
          <td>200</td>
        </tr>
      </tbody>
    </table>
1. Cliquer sur _Ajouter l'effet_. Le style d'image est enregistré avec l'effet
    choisi.
    <img src="/images/structure-image-style-create-add-style.webp" alt="Ajouter un style d'image" width="100%" />
1. Dans le menu d'administration _Gérer_, aller à _Structure_ > _Types de
    contenu_ (_admin/structure/types_).
1. Cliquer sur _Gérer l'affichage_ dans le bouton déroulant _Actions_ du type de
    contenu Vendeur. La page _Gérer l'affichage
    (_admin/structure/types/manage/vendeur/display_) apparaît.
1. Assurez-vous que le premier onglet _Défaut_ est sélectionné.
1. Cliquer sur l'engrenage à côté du champ _Image principale_ pour accéder aux
    options de configuration.
1. Remplir les champs comme indiqué ci-dessous.
    <table>
      <thead>
        <tr>
          <th>Nom du champ</th>
          <th>Valeur</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Style d'image</td>
          <td>Extra medium (300x200)</td>
        </tr>
        <tr>
          <td>Lier l'image à</td>
          <td>Rien</td>
        </tr>
      </tbody>
    </table>

    ![Changer les paramètres du formateur de champ d'un champ image](/images/structure-image-style-create-manage-display.webp)

1. Cliquer sur _Mettre à jour_.
1. Cliquer sur _Enregistrer_. Le nouveau style d'image sera utilisé pour afficher
    les contenus de type vendeur.
1. Ouvrir un contenu de type vendeur et vérifier qu'il s'affiche avec l'image mise à
    l'échelle et recadrée. Voir [content-edit](./content-edit.md) pour plus d'informations sur la
    manière de trouver un contenu existant.
1. Répéter les étapes 8-15 pour le type de contenu Recette.

## Concepts liés

* [structure-fields](./structure-fields.md)
* [structure-image-styles](./structure-image-styles.md)
* [structure-image-responsive](./structure-image-responsive.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/DKIo7j19ulY" title="Setting up an Image Style" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Pour aller plus loin (en anglais)

[Page de documentation de la communauté sur _Drupal.org_ "Working with images"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/image-module/working-with-images)

*Attributions*

Adapté et modifié par [Boris Doesborg](https://www.drupal.org/u/batigolix), et
[Jojy Alphonso](https://www.drupal.org/u/jojyja) de
[Red Crackle](http://redcrackle.com) depuis
["Working with images in Drupal 7 and 8"](https://www.drupal.org/docs/8/core/modules/image/working-with-images),
copyright 2000-2026 contributeurs individuels à
[la documentation de la communauté Drupal](https://www.drupal.org/documentation).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
