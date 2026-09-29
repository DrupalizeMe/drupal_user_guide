---
title: "Ajouter un champ référence"
description: "Comment ajouter un champ de type référence qui lie deux types de contenu."
id: "structure-adding-reference"
translation_key: "structure-adding-reference"
source_locale: "fr"
---
## Objectif { #structure-adding-reference }

Ajouter un champ de type référence pour que les recettes puissent être liées aux
vendeurs qui les ont proposées.
## Prérequis

* [structure-fields](./structure-fields.md)
* [structure-reference-fields](./structure-reference-fields.md)
* [structure-content-type](./structure-content-type.md)
## Prérequis du site

Les types de contenus Recette et Vendeur doivent exister. Consulter
[structure-content-type](./structure-content-type.md).
## Étapes

1. Dans le menu d'administration _Gérer_, aller à _Structure_ > _Types de contenus_
    (_admin/structure/types_). Puis cliquer sur _Gérer les champs_ dans la liste 
    de sélection du type de contenu Recette. La page _Gérer les champs_ apparaît.
1. Cliquer sur _Créer un nouveau champ_. La page _Ajouter un champ_ apparaît.
    Choisir le type de champ _Référence_ dans les options _Choisir un type de
    champ_. Cliquer sur _Continuer_. La page _Ajouter un champ_ apparaît. Elle
    contient un formulaire pour configurer l'étiquette du champ.
    ![Ajouter un champ de type référence à un type de contenu](/images/structure-adding-reference-add-field.png)

    Remplir les champs comme montré ci-dessous. Cliquer sur _Enregistrer et
    continuer_.
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
          <td>Étiquette</td>
          <td>Le titre que vous voulez donner au champ</td>
          <td>Proposé par</td>
        </tr>
        <tr>
          <td>Choisir un option ci-dessous :</td>
          <td>Type de contenu à référencer</td>
          <td>Contenu</td>
        </tr>
      </tbody>
    </table>

    ![Ajouter un champ de type référence à un type de contenu](/images/structure-adding-reference-add-field-label.png)

1. La page _Proposé par_ apparaît et vous permet de définir le nombre de valeurs
    autorisées. Remplir les champs comme indiqué ci-dessous. Cliquer sur
    _Enregistrer les paramètres des champs_.
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
          <td>Type d'élément à référencer</td>
          <td>Option pour sélectionner le type d'entité à référencer</td>
          <td>Contenu</td>
        </tr>
        <tr>
          <td>Nombre de valeurs autorisées</td>
          <td>Définir le nombre de valeurs associées avec le champ</td>
          <td>Limité, 1</td>
        </tr>
      </tbody>
    </table>

    ![Configuration du stockage d'un champ de type référence](/images/structure-adding-reference-set-field-basic.png)

    La page _Paramètres du champ Proposé par pour Recette_ apparaît et vous permet
    de configurer le champ. Remplir les champs comme indiqué ci-dessous. Cliquer sur
    _Enregistrer les paramètres_.
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
          <td>Étiquette</td>
          <td>Titre affiché sur le champ pour cette page</td>
          <td>Proposé par</td>
        </tr>
        <tr>
          <td>Texte d'aide</td>
          <td>Texte d'aide court pour aider la personne qui rédige le contenu</td>
          <td>Choisir le vendeur qui a proposé cette recette</td>
        </tr>
        <tr>
          <td>Champ requis</td>
          <td>Si une valeur doit être fournie ou non</td>
          <td>Coché</td>
        </tr>
        <tr>
          <td>Méthode de référence</td>
          <td>Option pour sélectionner la méthode de référencement</td>
          <td>Par défaut</td>
        </tr>
        <tr>
          <td>Types de contenu</td>
          <td>Définir le type de contenu</td>
          <td>Vendeur</td>
        </tr>
        <tr>
          <td>Trier par</td>
          <td>Champ de tri</td>
          <td>Titre</td>
        </tr>
        <tr>
          <td>Sens du tri</td>
          <td>Ordre de tri</td>
          <td>Ascendant</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-adding-reference-field-settings.png" alt="Paramètres d'un champ de type référence" width="100%" />

1. Le champ Proposé par a été ajouté au type de contenu.
    <img src="/images/structure-adding-reference-manage-fields.png" alt="Manage fields page for the Recipe content type" width="100%" />

## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/hAhWiqPlKh0" title="Adding a Reference Field" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Écrit et modifié par [Boris Doesborg](https://www.drupal.org/u/batigolix),
et [Jojy Alphonso](https://www.drupal.org/u/jojyja) de
[Red Crackle](http://redcrackle.com).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
