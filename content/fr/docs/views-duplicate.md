---
title: "Dupliquer une vue"
description: "Comment créer une nouvelle page en dupliquant une vue."
id: "views-duplicate"
translation_key: "views-duplicate"
source_locale: "fr"
---
## Objectif { #views-duplicate }

Créer une page listant les recettes en dupliquant la vue des marchands
existante. Modifier la page de manière à ce que les recettes soient affichées
sous la forme d'une grille et puissent être filtrées selon les ingrédients.
## Prérequis

* [views-concept](./views-concept.md)
* [views-parts](./views-parts.md)
* [views-create](./views-create.md)
## Prérequis du site

* Les types de contenu Marchand et Recette doivent exister ; tous deux doivent
comporter des champs Image principale, et le type de contenu Recette doit
comporter un champ Ingrédients. Consulter [structure-content-type](./structure-content-type.md),
[structure-fields](./structure-fields.md), [structure-taxonomy-setup](./structure-taxonomy-setup.md), [structure-form-editing](./structure-form-editing.md),
et [content-create](./content-create.md).
* La vue Marchands doit exister. Consulter [views-create](./views-create.md).
## Étapes

1. Dans le menu d'administration _Gérer_, naviguer vers _Structure_ > _Vues_
    (_admin/structure/views_). Trouver la vue "Marchands" et cliquer sur "Dupliquer"
    dans son bouton déroulant. (Noter que les noms des vues apportées par votre
    profil d'installation sont affichés en anglais sur cette page ; consulter
    [language-concept](./language-concept.md) pour une explication.)
    <img src="/images/views-duplicate_duplicate.webp" alt="Dupliquer une vue existante" width="100%" />
1. Nommer la vue dupliquée "Recettes" et cliquer sur _Dupliquer_. La page de
    configuration de la vue apparaît.
1. Pour modifier le titre de la page de la vue en "Recettes", cliquer sur
    Marchands dans le champ _Titre_ sous _Titre_. La fenêtre modale _Page : le
    titre de cette vue_ apparaît. Saisir "Recettes". Cliquer sur _Appliquer_.
    <img src="/images/views-duplicate_title.webp" alt="Changer le titre de la vue" width="100%" />
1. Pour changer de format (grille au lieu d'un tableau), cliquer sur _Tableau_
    dans le champ _Format_. La fenêtre modale _Page : quel style appliquer à cette
    vue_ apparaît. Cocher _Grille_ et cliquer sur _Appliquer_. La fenêtre modale
    _Page : options de style_ apparaît. Conserver les valeurs par défaut et cliquer
    sur _Appliquer_.
1. Pour ne conserver que le titre et les champs de type image pour la vue
    Recettes, cliquer sur _Contenu : Corps_ sous _Champs_. Cliquer sur _Retirer_
    dans la fenêtre modale qui apparaît.
1. Pour modifier le filtre type de contenu de manière à utiliser le type de
    contenu Recette, cliquer sur _Contenu : Type de contenu (= Marchand)_ sous
    _Critères de filtrage_. Dans la fenêtre modale _Configurer critère de filtre :
    Contenu : Type de contenu_, cocher Recette et décocher Marchands. Cliquer sur
    _Appliquer_.
1. Pour ajouter un filtre exposé au visiteurs, cliquer sur _Ajouter_ dans le
    bouton déroulant sous _Critères de filtrage_. Rechercher "ingrédients" et cocher
    "Ingrédients (field_ingredients)". Cliquer sur _Ajouter et configurer le critère
    de filtrage_.
1. La fenêtre modale qui apparaît propose des paramètres supplémentaires concernant
    le vocabulaire et le type de sélection. Cliquer sur _Appliquer et continuer_. La
    fenêtre modale suivante permet d'exposer ce filtre aux visiteurs. Remplir les
    champs comme indiqué ci-dessous, et cliquer sur _Appliquer_.
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
          <td>Exposer ce filtre aux visiteurs, pour leur permettre de le modifier</td>
          <td>Permettre aux utilisateurs de filtrer et de rechercher</td>
          <td>Coché</td>
        </tr>
        <tr>
          <td>Requis</td>
          <td>Une valeur doit-elle être fournie ou non ?</td>
          <td>Coché</td>
        </tr>
        <tr>
          <td>Étiquette</td>
          <td>Étiquette affichée pour ce filtre sur la page de la vue</td>
          <td>Trouver des recettes en utilisant...</td>
        </tr>
      </tbody>
    </table>

    ![Exposer un filtre](/images/views-duplicate_expose.webp)

1. Pour modifier le champ dont l'étiquette est _Chemin_ (_Path_) en "Recettes",
    cliquer sur "/vendors" dans les champ _Chemin_ sous _Paramètres de la page_.
    Dans la fenêtre modale qui apparaît, saisir le chemin "recipes" et cliquer sur
    _Appliquer_.
    Noter que lorsque l'on modifie une vue, les chemins sont saisis sans la barre
    oblique ("/") initiale, contrairement à d'autres pages d'administration (comme
    lorsque l'on fournit un chemin dans la page d'un type de contenu).
1. Pour modifier le titre du lien dans le menu, cliquer sur "Normal : Marchands"
    dans le champ _Menu_ sous _Paramètres de la page_. Dans la fenêtre modale qui
    apparaît, modifier le titre en "Recettes" et cliquer sur _Appliquer_.
1. Pour utiliser Ajax (consulter [Entrée ajax dans le glossaire](./glossary.md#glossary-ajax))
    afin d'accélérer le filtrage et la pagination pour les utilisateurs, sous
    _Avancé_ > _Autre_, cliquer sur _Non_ dans le champ _Utiliser AJAX_. Cocher
    _Utiliser AJAX_ dans la fenêtre modale qui apparaît, et cliquer sur _Appliquer_.
1. Cliquer sur _Enregistrer_ pour enregistrer la vue.
1. Revenir à la page d'accueil et cliquer sur Recettes dans le menu de navigation
    pour visualiser la nouvelle page Recettes.
    <img src="/images/views-duplicate_final.webp" alt="Vue recettes" width="100%" />

## Pour approfondir

Le lien vers la vue dans la navigation principale ne sera probablement pas au
bon endroit dans le menu. Modifier l'ordre des liens de menu dans la navigation principale.
Consulter [menu-reorder](./menu-reorder.md).
## Concepts liés

* [planning-structure](./planning-structure.md)
* [Ajax entry in the Glossary](./glossary.md#glossary-ajax)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/N0mkt8Q1Yv4" title="Duplicating a View" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Écrit et modifié par [Laura Vass](https://www.drupal.org/u/lolk) de
[Pronovix](https://pronovix.com/),
et [Jojy Alphonso](https://www.drupal.org/u/jojyja) de
[Red Crackle](http://redcrackle.com). Traduit par
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
