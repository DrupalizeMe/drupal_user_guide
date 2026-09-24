---
title: "Configurer une taxonomie"
description: "Comment créer un vocabulaire de taxonomie et l'ajouter en tant que champ à un type de contenu."
id: "structure-taxonomy-setup"
translation_key: "structure-taxonomy-setup"
source_locale: "fr"
---
## Objectif { #structure-taxonomy-setup }

Créer un vocabulaire Ingrédients et l'ajouter au type de contenu Recette comme
un champ qui peut contenir un nombre illimité de valeurs et qui autorise l'ajout
de nouveaux termes au vocabulaire.
## Prérequis

* [planning-data-types](./planning-data-types.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [structure-fields](./structure-fields.md)
## Prérequis du site

Le type de contenu Recette doit exister. Voir [structure-content-type](./structure-content-type.md).
## Étapes

1. Dans le menu d'administration _Gérer_, aller à _Structure_ > _Taxonomie_
    (_admin/structure/taxonomy_). Vous verrez le vocabulaire _Mots clés_ qui est
    créé avec le profil d'installation Standard du coeur.
    <img src="/images/structure-taxonomy-setup-taxonomy-page.webp" alt="Page de liste des taxonomies" width="100%" />
1. Cliquer sur _Ajouter un vocabulaire_, et remplir avec les valeurs ci-dessous.
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
          <td>Nom</td>
          <td>Le nom du vocabulaire</td>
          <td>Ingrédients</td>
        </tr>
        <tr>
          <td>Description</td>
          <td>Une note brève sur le vocabulaire</td>
          <td>(Laisser vide)</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-taxonomy-setup-add-vocabulary.webp" alt="Ajout d'un vocabulaire Ingrédients" width="100%" />

1. Cliquer sur _Enregistrer_. Vous êtes redirigé(e) vers la page Ingrédients, qui
    Affiche une liste de tous les termes de ce vocabulaire.
    <img src="/images/structure-taxonomy-setup-vocabulary-overview.webp" alt="Liste des termes de taxonomie du vocabulaire Ingrédients" width="100%" />
1. Cliquer sur _Ajouter un terme_. Saisir "Beurre" dans le champ _Nom_. Cliquer
    sur _Enregistrer_.
    <img src="/images/structure-taxonomy-setup-add-term.webp" alt="Page d'ajout d'un terme" width="100%" />
1. Une confirmation à propos du terme que vous avez créé s'affiche. Ajouter plus
    de termes. Par exemple, "Œufs" et "Lait".
1. Dans le menu d'administration _Gérer_, aller à _Structure_ > _Types de contenu_
    (_admin/structure/types_). Cliquer sur _Gérer les champs_ pour votre type de contenu Recette.
1. Cliquer sur _Créer un nouveau champ_. La page _Ajouter un champ_ apparaît.
    Choisir le type de champ _Référence_ dans les options _Choisir un type de
    champ_. La page _Ajouter un champ_ apparaît. Elle contient un formulaire
    permettant de configurer le champ.
    ![Ajouter un champ Ingrédients au type de contenu Recette](/images/structure-taxonomy-setup-add-field.webp)
1. Saisir les valeurs du tableau ci-dessous. Cliquer sur _Continuer_.
    <table>
      <thead>
        <tr>
          <th>Nom du champ</th>
          <th>Explication</th>
          <th>Valeur exemple</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Étiquette</td>
          <td>Le titre à donner au champ</td>
          <td>Ingrédients</td>
        </tr>
        <tr>
          <td>Choisir une option ci-dessous :</td>
          <td>Type de contenu à référencer</td>
          <td>Terme de taxonomie</td>
        </tr>
      </tbody>
    </table>

    ![Paramètres du champ Ingrédients](/images/structure-taxonomy-setup-add-field-label.webp)

1. Sur l'écran de configuration suivant, saisir les valeurs du tableau
    ci-dessous. Cliquer sur _Enregistrer les paramètres_.
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
          <td>Texte d'aide</td>
          <td>Aide affiché aux utilisateurs créant le contenu</td>
          <td>Saisir les ingrédients que les visiteurs du site pourraient vouloir chercher</td>
        </tr>
        <tr>
          <td>Type d'élément à référencer</td>
          <td>Le type d'entité qui est référencée par le champ</td>
          <td>Terme de taxonomie</td>
        </tr>
        <tr>
          <td>Nombre de valeurs autorisées</td>
          <td>Le nombre de valeurs qu'un utilisateur peut saisir</td>
          <td>Illimité</td>
        </tr>
        <tr>
          <td>Type de référence > Méthode de référence</td>
          <td>Sélectionner la méthode utilisée pour choisir les valeurs autorisées</td>
          <td>Par défaut</td>
        </tr>
        <tr>
          <td>Type de référence > Vocabulaire</td>
          <td>Sélectionner le vocabulaire dans lequel les valeurs sont choisies</td>
          <td>Ingrédients</td>
        </tr>
        <tr>
          <td>Type de référence >  Créer les entités référencées si elles n'existent pas déjà</td>
          <td>Si les nouveaux termes ingrédients peuvent être créés depuis le formulaire de création du contenu</td>
          <td>Coché</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-taxonomy-setup-field-settings-2.webp" alt="Paramètres du champ de type référence" width="100%" />

1. Cliquer sur _Enregistrer les paramètres_. Vous revenez à la page _Gérer les
    champs_. Un message disant que la configuration pour Ingrédients est enregistrée
    s'affiche.
    <img src="/images/structure-taxonomy-setup-finished.webp" alt="Page de gestion des champs pour le type de contenu Recette" width="100%" />

## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/EbsXffnjsjc" title="Setting up a Taxonomy" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Ecrit et modifié par [Bob Snodgrass](https://www.drupal.org/u/bsnodgrass),
et [Jojy Alphonso](https://www.drupal.org/u/jojyja) de
[Red Crackle](http://redcrackle.com).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
