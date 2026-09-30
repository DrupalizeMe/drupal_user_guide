---
title: "Concevoir la structure de votre contenu"
description: "Comment concevoir une structure pour votre contenu qui utilise les types d'entité de contenu pour des contenus spécifiques à votre site."
id: "planning-structure"
translation_key: "planning-structure"
source_locale: "fr"
---
## Objectif { #planning-structure }

Concevoir la structure du contenu de votre site (quel type et sous-type d'entité
utiliser pour quel contenu), et quelles pages contiendront des listes de
contenus.
## Prérequis

* [planning-data-types](./planning-data-types.md)
* [planning-modular](./planning-modular.md)
* [preface-scenario](./preface-scenario.md)
## Étapes

1. Réfléchir en amont au contenu que votre site contiendra, ce qui peut
    inclure le contenu que les visiteurs recherchent, tout comme le contenu que vous
    voulez montrer aux visiteurs. Le résultat peut être la description présentée
    dans [preface-scenario](./preface-scenario.md).
1. Pour chaque morceau de contenu identifié, choisir quel type d'entité de
    contenu conviendrait le mieux. Ce faisant, vous devriez prendre en compte où et
    comment le contenu sera utilisé et modifié sur le site. Par exemple, dans le
    scénario d'exemple du site du marché fermier, vous pourriez vouloir afficher les
    horaires et la localisation du marché de la ferme dans la barre de navigation
    sur chaque page. Pour ce contenu, un seul bloc personnalisé a du sens. Autre
    exemple : vous pourriez décider que les pages affichant les informations sur
    chaque vendeur doivent être des éléments de contenu gérés par le module du cœur
    (core) Node, parce que vous voulez que les vendeurs puissent eux même modifier
    leur propres listes. Le système de permissions du module du cœur Node permet de
    le faire facilement.

    Ces décisions n'admettent pas forcément une seule bonne réponse ; par exemple,
    vous pourriez décider que les pages des vendeurs doivent être des profils
    utilisateurs au lieu d'éléments de contenu, mais si vous faisiez ça, le contenu
    serait lié à un compte utilisateur spécifique, et il ne serait pas facile de
    transférer la propriété d'une page de vendeur à un autre compte utilisateur.

1. Au sein de chaque type d'entité de contenu que vous avez identifié, choisissez
    quel sous-type d'entité est adapté. Par exemple, dans l'exemple du site du
    marché fermier, vous décideriez probablement que sous le type d'entité élément
    de contenu, il devrait y avoir un type de contenu pour les pages basiques
    (Accueil et À propos), un pour les pages des vendeurs, et un autre pour les
    pages de recettes.
1. Pour chaque sous-type d'entité que vous avez choisi, définir quels sont les
    champs nécessaires. Par exemple, le type de contenu Vendeur nécessite des champs
    pour le nom du vendeur, l'URL de son site, une image et une description.
1. Définir les listes d'entités qui sont nécessaires, qui peuvent être des pages
    entières ou des zones plus petites de la page. Pour chaque liste, vous aurez
    besoin de définir quelles entités devront être listées, puis de définir l'ordre
    et avec quelles options de filtres elles doivent s'afficher ; par exemple, vous
    pourriez souhaiter donner au visiteur du site la possibilité de rechercher par
    mot clé, de filtrer la liste avec une liste déroulante pour la réduire à un
    sous-ensemble, ou d'ordonner la liste. Vous devrez aussi définir quelles
    informations de quelles entités doivent être affichées, ce qui pourrait
    entraîner l'ajout de champs à la liste que vous avez définie à l'étape
    précédente. Le site du marché fermier, par exemple, a besoin d'une page de liste
    de recettes, qui liste les éléments de contenus de type Recette, avec la
    possibilité de filtrer par ingrédients, ce qui signifie que le type de contenu
    Recette a besoin d'un champ Ingrédient.
1. Pour chaque champ identifié sur chaque sous-type d'entité, déterminer quel
    type de données  il contiendra (comme texte brut, texte formaté, une date, un
    fichier image, etc.), et combien de valeurs sont autorisées. La plupart des
    champs n'admettent qu'une valeur, mais par exemple, une recette devrait
    permettre d'ajouter plusieurs ingrédients via son champ.
1. Étudier quels champs seraient plus pertinents sous la forme de références vers
    des entités de type terme de taxonomie : les champs dont les valeurs devraient être
    choisies parmi une liste de valeurs prédéfinies. Les valeurs autorisées dont la
    liste va grandir avec le temps, sont de bons candidats. Un exemple est le champ
    ingrédient pour le type de contenu Recette.
    * Étudier quels champs devraient référencer d'autres entités de
    contenu. Par exemple, puisque le vendeur soumet des recettes, un champ est
    requis sur le type de contenu Recette qui référence le contenu Vendeur pour
    chaque vendeur qui soumet une recette.

    Voici un exemple du résultat de la structure du contenu dans le scénario d'exemple
    du site du marché de la ferme :

    <table>
      <thead>
        <tr>
          <th>Type d'entité</th>
          <th>Sous-type d'entité</th>
          <th>Exemples</th>
          <th>Champs</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Élément de contenu</td>
          <td>Page basique</td>
          <td>Accueil, page À propos</td>
          <td>Titre, corps de la page</td>
        </tr>
        <tr>
          <td>Élément de contenu</td>
          <td>Vendeur</td>
          <td>Une page pour chaque vendeur du marché</td>
          <td></td>
        </tr>
        <tr>
          <td>Élément de contenu</td>
          <td>Recette</td>
          <td>Une page pour chaque recette soumise</td>
          <td></td>
        </tr>
        <tr>
          <td>Bloc personnalisé</td>
          <td>(générique)</td>
          <td>Crédits en pied-de-page, Horaires et localisation pour la barre de navigation</td>
          <td>Pas de champ spécifique</td>
          <td></td>
        </tr>
        <tr>
          <td>Terme de Taxonomie</td>
          <td>Ingrédients</td>
          <td>Carottes, tomates, et autres types d'ingrédients</td>
          <td>Pas de champ spécifique</td>
          <td></td>
        </tr>
        <tr>
          <td>Formulaire de contact</td>
          <td>(générique)</td>
          <td>Formulaire de contact générique</td>
          <td>Nom,</td>
        </tr>
        <tr>
          <td>Profil utilisateur</td>
          <td>(aucun)</td>
          <td>Ne sera pas affiché sur le site</td>
          <td>Pas de champ spécifique</td>
        </tr>
      </tbody>
    </table>

    Et voici les listes dont le site a besoin :

    <table>
      <thead>
        <tr>
          <th>Page ou zone de page</th>
          <th>Type d'entité et sous-type</th>
          <th>Filtre/ordre/pagination</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Page des vendeurs</td>
          <td>Contenu Vendeur</td>
          <td>Tous les vendeurs, alphabétique, paginé</td>
          <td></td>
        </tr>
        <tr>
          <td>Page des recettes</td>
          <td>Contenu Recette</td>
          <td>Filtrer par ingrédients, alphabétique, paginé</td>
          <td>Image, Nom de la recette</td>
          <td></td>
        </tr>
        <tr>
          <td>Recettes récentes dans la barre de navigation</td>
          <td>Contenu Recette</td>
          <td>Lister les 5 plus récentes</td>
          <td>Image, nom de la recette</td>
          <td></td>
        </tr>
      </tbody>
    </table>

## Améliorer votre compréhension

* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-taxonomy-setup](./structure-taxonomy-setup.md)
## Concepts liés

[structure-taxonomy](./structure-taxonomy.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CaNt4DEeIgU" title="Planning Your Content Structure" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Ecrit et modifié par [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)
et [Grant Dunham](https://www.drupal.org/u/gdunham).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
