---
title: "Créer un élément de contenu"
description: "Comment créer un élément de contenu pour utilisation en tant que page d'accueil."
id: "content-create"
translation_key: "content-create"
source_locale: "fr"
---
## Objectif { #content-create }

Créer et publier un élément de contenu qui sera utilisé en guise de page
d'accueil du site.
## Prérequis

* [content-paths](./content-paths.md)
* [planning-data-types](./planning-data-types.md)
## Prérequis du site

Le type de contenu _Page de Base_ doit exister. Il est créé sur votre site quand
vous l'installez avec le profil d'installation Standard du cœur.
## Étapes

1. Dans le menu d'administration _Gérer_, naviguer dans _Contenu_ > _Ajouter un
    contenu_ > _Page de base_ (_node/add/page_). Le formulaire _Créer Page de base_
    apparaît.
1. Cliquer sur _Modifier le résumé_.
1. Remplir les champs comme indiqué ci-dessous.
    <table>
      <thead>
        <tr>
          <th>Nom du champ</th>
          <th>Explication</th>
          <th>Valeur</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Titre</td>
          <td>Titre de la page. Il sera aussi utilisé comme balise meta dans le code source, les alias d'URL, et comme étiquette de l'élément de contenu dans l'écran d'administration</td>
          <td>Accueil</td>
          <td>Résumé</td>
          <td>Résumé de la valeur du champ Corps. Peut être utilisé comme accroche</td>
        </tr>
        <tr>
          <td>Corps</td>
          <td>Contenu complet de la page</td>
          <td>Bienvenue au Marché - votre marché</td>
        </tr>
        <tr>
          <td>Paramètres des chemins d'URL > Alias d'URL</td>
          <td>Chemin alternatif du contenu</td>
          <td>/accueil</td>
        </tr>
      </tbody>
    </table>

    En cliquant sur le bouton _Source_ dans la barre d'outil de texte riche, vous
    pouvez voir le code source HTML du texte en cours de modification.
    <img src="/images/content-create-create-basic-page.png" alt="Créer une page de base" width="100%" />

1. Cliquer sur _Aperçu_ pour vous assurer que tout est correct.
1. Cliquer sur _Revenir à la modification du contenu_.
1. Cliquer sur _Enregistrer et publier_. Le contenu est enregistré et peut être
    trouvé dans la page _Contenu_.
1. Suivre les mêmes étapes pour créer une page À propos, avec le titre "À propos"
    et un corps parlant de l'histoire du marché fermier.

## Améliorer votre compréhension

* [menu-home](./menu-home.md)
* [menu-link-from-content](./menu-link-from-content.md)
* [language-content-translate](./language-content-translate.md)
## Concepts liés

* [language-concept](./language-concept.md)
* [content-paths](./content-paths.md)
* [content-edit](./content-edit.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/h312fekiSNE" title="Creating a Content Item" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Pour aller plus loin (en anglais)

[Page de documentation de la communauté sur _Drupal.org_ "About nodes"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/node-module/about-nodes)

*Attributions*

Écrit par [Agnes Kiss](https://www.drupal.org/u/pixiekiss) et
[Boris Doesborg](https://www.drupal.org/u/batigolix).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
