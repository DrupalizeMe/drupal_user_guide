---
title: "Ajouter des champs de base à un type de contenu"
description: "Comment ajouter des champs à un type de contenu."
id: "structure-fields"
translation_key: "structure-fields"
source_locale: "fr"
---
## Objectif { #structure-fields }

Ajouter un champ lien et un champ image au type de contenu Vendeur.
## Prérequis

[planning-data-types](./planning-data-types.md)
## Prérequis du site

Le type de contenu Vendeur doit exister. Consulter [structure-content-type](./structure-content-type.md).
## Étapes

Ajouter les champs URL du vendeur et image principale au type de contenu Vendeur.

1. Dans le menu d'administration _Gérer_, aller dans _Structure_ > _Types de
    contenu_ (_admin/structure/types_). Puis cliquer sur _Gérer les champs_ dans la
    liste déroulante du type de contenu Vendeur. La page _Gérer les champs_
    apparaît. De là, vous pouvez soit créer un nouveau champ pour le type de
    contenu, soit réutiliser un champ existant. Noter que les noms et descriptions
    des types de contenu et champs fournis par votre profil d'installation sont
    affichés en anglais sur ces pages ; consulter [language-concept](./language-concept.md) pour une
    explication.
1. Cliquer sur _Ajouter champ_. La page _Ajouter un champ_ apparaît.
    ![Choix d'un type de champ sur la page d'ajout d'un champ](/images/structure-fields-add-field.png)
1. Choisir le type de champ _Lien_ dans les options _Choisir un type de champ_.
    Cliquer sur _Continuer_. La page _Ajouter un champ apparaît. Elle contient un
    champ permettant de configurer l'étiquette du champ.
1. Remplir les champs commme indiqué ci-dessous.
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
          <td>Étiquette visible sur les pages d'administration</td>
          <td>URL du vendeur</td>
        </tr>
        <tr>
          <td>Choisir un type de champ</td>
          <td>Type de champ</td>
          <td>Lien</td>
        </tr>
      </tbody>
    </table>

    Un nom système est automatiquement généré, basé sur la valeur de l'_Étiquette_.
    Cliquer sur _Modifier_ si vous souhaitez surcharger la valeur par défaut.
    ![Page Ajouter un champ permettant de configurer l'étiquette du champ](/images/structure-fields-add-field-label.png)

1. Cliquer sur _Continuer_. La page URL du vendeur apparaît, qui
    vous permet de configurer le champ. Remplir les champs comme
    indiqué ci-dessous.
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
          <td>Étiquette visible dans le formulaire de contenu</td>
          <td>URL du vendeur</td>
        </tr>
        <tr>
          <td>Nombre de valeurs autorisé</td>
          <td>Le nombre de valeurs qui peuvent être saisies</td>
          <td>Limité, 1</td>
        </tr>
        <tr>
          <td>Texte d'aide</td>
          <td>L'instruction affichée sous le champ</td>
          <td>(laisser vide)</td>
        </tr>
        <tr>
          <td>Champ requis</td>
          <td>Si le champ est requis ou non</td>
          <td>Décoché</td>
        </tr>
        <tr>
          <td>Type de lien autorisé</td>
          <td>Le type de liens qui peuvent être saisis</td>
          <td>Liens externes seulement</td>
        </tr>
        <tr>
          <td>Autoriser le texte du lien</td>
          <td>Si un texte de lien peut être saisi</td>
          <td>Désactivé</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-fields-vendor-url.png" alt="Page de configuration du champ URL du vendeur" width="100%" />

1. Cliquer sur _Enregistrer les paramètres_. L'URL du vendeur a été ajoutée au
    type de contenu. Continuer en créant le champ image principale.
1. Cliquer sur _Créer un nouveau champ_. La page _Ajouter un champ_ apparaît.
1. Choisir le type de champ _Transfert de fichier_ depuis les options _Choisir un
    type de champ_. La page _Ajouter un champ apparaît. Elle contient un formulaire
    pour configurer l'étiquette du champ.
1. Certains champs nécessitent la sélection d'un sous-type. Remplir les champs
    commme indiqué ci-dessous.
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
          <td>Étiquette visible sur les pages d'administration</td>
          <td>Image principale</td>
        </tr>
        <tr>
          <td>Choisir une option ci-dessous</td>
          <td>Sous-type de champ</td>
          <td>Image</td>
        </tr>
      </tbody>
    </table>
1. Cliquer sur _Continuer_. La page paramètres de Main image pour Vendeur
    apparaît. Remplir les champs comme indiqué ci-dessous.
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
          <td>Étiquette visible dans le formulaire de contenu</td>
          <td>Image principale</td>
        </tr>
        <tr>
          <td>Nombre de valeurs autorisées</td>
          <td>Le nombre de valeurs qui peuvent être saisies.</td>
          <td>Limité, 1</td>
        </tr>
        <tr>
          <td>Image par défaut</td>
          <td>Vous pouvez configurer ici une image par défaut. Elle sera utilisée lorsque vous ne fournissez pas d'image lorsque vous créez un élément de contenu Vendeur.</td>
          <td>(laisser vide)</td>
        </tr>
        <tr>
          <td>Texte d'aide</td>
          <td>Les instructions affichées sous le champ</td>
          <td>(laisser vide)</td>
        </tr>
        <tr>
          <td>Champ requis</td>
          <td>Si le champ est requis ou non</td>
          <td>Coché</td>
        </tr>
        <tr>
          <td>Extensions de fichier autorisées</td>
          <td>Le type des images qui peuvent être téléchargées</td>
          <td>png, gif, jpg, jpeg</td>
        </tr>
        <tr>
          <td>Répertoire du fichier</td>
          <td>Le répertoire où les fichiers seront stockés. En fournissant une valeur pour le repertoire de fichier, vous vous assurez que toutes les images envoyées via le champ Image principale seront rassemblées au même endroit.</td>
          <td>vendeurs</td>
          <td>Résolution minimum de l'image</td>
          <td>La résolution minimum des images envoyées</td>
          <td>600 x 600</td>
        </tr>
        <tr>
          <td>Taille maximale de transfert</td>
          <td>La taille maximum du fichier de l'image envoyée</td>
          <td>5 MB</td>
        </tr>
        <tr>
          <td>Activer le champ alt</td>
          <td>Si un texte alternatif peut être saisi</td>
          <td>Coché</td>
        </tr>
        <tr>
          <td>Champ alt requis</td>
          <td>Si le texte alternatif est requis</td>
          <td>Coché</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-fields-main-img.png" alt="Page de configuration du champ image principale" width="100%" />

1. Cliquer sur _Enregistrer les paramètres_. L'image principale a été ajoutée au
    type de contenu.
    <img src="/images/structure-fields-result.png" alt="Page Gérer les champs" width="100%" />
1. Ajouter un champ Image principale au type de contenu Recette, en utilisant les
    mêmes étapes. Commencer par aller à la page de _Gérer les champs_ du type de
    contenu Recette. Utiliser ensuite le bouton _Réutiliser_ qui correspond au champ
    Image principale dans le tableau. Aller directement à l'étape 7 et suivre les
    étapes restantes.
    <img src="/images/structure-fields-main-img-reuse.png" alt="Sélectionner un champ à réutiliser" width="100%" />
1. Créer deux contenus de type Vendeur (consulter [content-create](./content-create.md)) appelés
    "Ferme Joyeuse" et "Doux miel". Assurez vous d'inclure des images et des URL.

## Améliorer votre compréhension

* [structure-image-styles](./structure-image-styles.md)
* [structure-content-display](./structure-content-display.md)
* [structure-form-editing](./structure-form-editing.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CZpfR9WbVcQ" title="Adding Basic Fields to a Content Type" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Pour aller plus loin

[Page de documentation de la communauté sur _Drupal.org_ "Add a field to a content type"](https://www.drupal.org/docs/7/nodes-content-types-and-fields/add-a-field-to-a-content-type)

*Attributions*

Écrit par [Sree Veturi](https://www.drupal.org/u/sree),
[Boris Doesborg](https://www.drupal.org/u/batigolix) et
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) de
[Drupalize.Me](https://drupalize.me).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
