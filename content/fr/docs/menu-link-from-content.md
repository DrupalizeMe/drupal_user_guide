---
title: "Ajouter une page à la navigation"
description: "Comment ajouter une page à la navigation."
id: "menu-link-from-content"
translation_key: "menu-link-from-content"
source_locale: "fr"
---
## Objectif { #menu-link-from-content }

Ajouter une page à la navigation. Par exemple, la page _À propos_.
## Prérequis

* [menu-concept](./menu-concept.md)
* [content-edit](./content-edit.md)
## Prérequis du site

Le contenu de la page _À propos_ doit exister. Voir [content-create](./content-create.md).
## Étapes

1. Dans le menu d'administration _Gérer, aller à _Contenu_ (_admin/content_).
1. Trouver la page _À propos_, et cliquer sur _Modifier_ sur cette ligne. Le
    formulaire de modification du contenu apparaît.
    <img src="/images/menu-link-from-content_edit_page.png" alt="Lien d'édition de la page" width="100%" />
1. Cliquer sur _Paramètres du menu_ sur la droite pour ouvrir le bloc.
1. Cocher _Fournir un lien de menu_ pour faire apparaître les options de menu.
1. Saisir les valeurs de la table ci-dessous :
    <table>
      <thead>
        <tr>
          <th>Nom du champ</th>
          <th>Explication</th>
          <th>Exemple de valeur</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Titre du lien dans le menu</td>
          <td>Titre qui apparaît dans le menu</td>
          <td>À propos</td>
        </tr>
        <tr>
          <td>Description</td>
          <td>Texte qui s'affiche lorsqu'un visiteur survole le lien</td>
          <td>Histoire du marché</td>
        </tr>
        <tr>
          <td>Lien parent</td>
          <td>Localisation de la page dans la hiérarchie du menu. Par exemple, si vous choisissez _&lt;Navigation principale&gt;_, la page apparaîtra au plus haut niveau de la navigation. En choisissant un autre lien de menu comme parent, vous pouvez créer une hiérarchie de menu sur plusieurs niveaux (les liens de menu avec les poids les plus bas seront affichés avant ceux avec les poids les plus hauts).</td>
          <td>-2</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    ![Créer un lien de menu depuis le formulaire de modification du contenu](/images/menu-link-from-content.png)

1. Cliquer sur _Enregistrer_ pour enregistrer les modifications. Cliquer sur
    _Accueil_ ou _Retour au site_ dans la barre de navigation pour voir le résultat,
    ce qui pourrait ressembler à l'image ci-dessous.
    <img src="/images/menu-link-from-content-result.png" alt="Le lien a été ajouté au menu principal" width="100%" />

## Améliorer votre compréhension

[menu-reorder](./menu-reorder.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/JE_3INtBcTw" title="Adding a Page to the Navigation" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Pour aller plus loin (en anglais)

[Page de documentation sur _Drupal.org_ "Adding a link to a menu"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/menu-ui-module/adding-a-link-to-a-menu)

*Attributions*

Adapté par [Boris Doesborg](https://www.drupal.org/u/batigolix) depuis
["Adding a link to a menu"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/menu-ui-module/adding-a-link-to-a-menu),
copyright 2000-2026 contributeurs individuels de la
[documentation de la communauté Drupal](https://www.drupal.org/documentation) ;
modifié par [Jack Haas](https://www.drupal.org/u/jerseycheese).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
