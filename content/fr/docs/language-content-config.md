---
title: "Configurer la traduction du contenu"
description: "Comment configurer les éléments de contenu de manière à les rendre traduisibles."
id: "language-content-config"
translation_key: "language-content-config"
source_locale: "fr"
---
## Objectif { #language-content-config }

Rendre les types d'entités _Bloc de contenu_, _Lien de menu personnalisé_ et
_Contenu_ traduisibles. Sélectionner des sous-types spécifiques et choisir
lesquels de leurs champs peuvent être traduits.
## Prérequis

* [planning-data-types](./planning-data-types.md)
* [language-concept](./language-concept.md)
## Prérequis du site

Le module du cœur Content Translation doit être installé, et votre site doit
comporter au moins deux langues. Consulter [language-add](./language-add.md).
## Étapes

1. Dans le menu d'administration _Gérer_, naviguer vers _Configuration_ >
    _Régionalisation et langue_ > _Langue et traduction du contenu_
    (_admin/config/regional/content-language_).
1. Sous _Paramètres personnalisés des langues_, cocher _Contenu_, _Bloc
    de contenu_ et _Lien de menu personnalisé_ pour rendre ces types d'entités
    traduisibles.
    <img src="/images/language-content-config_custom.png" alt="Liste des paramètres personnalisés des langues" width="193px" />
1. Des options de configuration apparaissent pour _Contenu_, _Bloc de contenu_
    et _Lien de menu personnalisé_. Choisir les sous-types que vous voulez traduire
    pour chaque type d'entité. Cocher _Page basique_ pour _Contenu_, _Bloc basique_
    pour _Bloc de contenu_ et _Lien de menu personnalisé_ pour _Lien de menu
    personnalisé_.

    Vérifier les paramètres pour les types d'entités comme indiqué ci-dessous :
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
          <td>Langue par défaut</td>
          <td>La langue par défaut pour ce sous-type d'entité</td>
          <td>Langue</td>
        </tr>
        <tr>
          <td>Afficher le sélecteur de langue sur les pages de création et d'édition</td>
          <td>Le sélecteur de langue devrait-il être affiché lorsque l'on modifie ou crée du contenu ?</td>
          <td>Coché</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    ![Langue par défaut et caractère traduisible des types de contenu](/images/language-content-config_content.png)

1. Choisir les champs qui devraient être traduisibles pour _Page basique_ comme
    indiqué dans le tableau ci-dessous. Si un champ ne varie pas en fonction de la
    langue, le laisser décoché.
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
          <td>Titre</td>
          <td>Le titre du contenu</td>
          <td>Coché</td>
        </tr>
        <tr>
          <td>Écrit par</td>
          <td>L'auteur</td>
          <td>Décoché</td>
        </tr>
        <tr>
          <td>Publié</td>
          <td>Le contenu a-t-il été publié ?</td>
          <td>Coché</td>
        </tr>
        <tr>
          <td>Écrit le</td>
          <td>Date de publication</td>
          <td>Décoché</td>
        </tr>
        <tr>
          <td>Modifié</td>
          <td>Date de la dernière mise à jour</td>
          <td>Décoché</td>
        </tr>
        <tr>
          <td>Promu en page d'accueil</td>
          <td>Le contenu sera-t-il inclus à certaines vues de contenu ?</td>
          <td>Décoché</td>
          <td>Épinglé en haut des listes</td>
          <td>Le contenu sera-t-il affiché en premier dans</td>
        </tr>
        <tr>
          <td>Alias d'URL</td>
          <td>URL plus conviviables pour le contenu</td>
          <td>Coché</td>
        </tr>
        <tr>
          <td>Corps</td>
          <td>Le contenu principal de la page</td>
          <td>Coché</td>
        </tr>
      </tbody>
    </table>

    ![Liste des sous-types d'entités de contenu traduisibles](/images/language-content-config_basic_page.png)

1. De la même manière, cocher les cases appropriés pour les champs traduisibles
    appartenant à _Bloc basique_ et _Lien de menu personnalisé_.
1. Cliquer sur _enregistrer la configuration_.

## Pour approfondir

* [language-config-translate](./language-config-translate.md)
* [language-content-translate](./language-content-translate.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/b_w904_pcTY" title="Configuring Content Translation" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Pour aller plus loin (en anglais)

* [Article de blog"Multilingual Drupal 8 tidbits, part 5"](http://hojtsy.hu/blog/2013-jun-21/drupal-8-multilingual-tidbits-5-almost-limitless-language-assignment)
* [Article de blog "Multilingual Drupal 8 tidbits, part 17"](http://hojtsy.hu/blog/2015-jan-27/drupal-8-multilingual-tidbits-17-content-translation-basics)

*Attributions*

Écrit et modifié par [Laura Vass](https://www.drupal.org/u/lolk) de
[Pronovix](https://pronovix.com/),
[Jojy Alphonso](https://www.drupal.org/u/jojyja) de
[Red Crackle](http://redcrackle.com)
et [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Traduit par
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
