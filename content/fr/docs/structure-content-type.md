---
title: "Ajouter un type de contenu"
description: "Comment ajouter et configurer un nouveau type de contenu."
id: "structure-content-type"
translation_key: "structure-content-type"
source_locale: "fr"
---
## Objectif { #structure-content-type }

Ajouter et configurer un nouveau type de contenu Vendeur.
## Prérequis

[planning-data-types](./planning-data-types.md)
## Prérequis du site

Vous avez besoin d'un plan pour la structure de votre contenu. Consulter
[planning-structure](./planning-structure.md).
## Étapes

1. Dans le menu d'admnistration _ Gérer_, aller à _Structure_ > _Types de
    contenu_ (_admin/structure/types_). La page _Types de contenu_ affiche les types
    de contenus disponibles.
1. Cliquer sur _Ajouter un type de contenu_. La page _Ajouter un type de contenu_
    apparaît.  Remlir les champs comme ci-dessous.
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
          <td>Nom du type de contenu</td>
          <td>Vendeur</td>
        </tr>
        <tr>
          <td>Description</td>
          <td>Expliquer l'usage du type de contenu</td>
          <td>Information à propos d'un vendeur</td>
        </tr>
      </tbody>
    </table>

    ![Ajout d'un type de contenu](/images/structure-content-type-add.png)

1. Dans l'onglet vertical _Paramètres du formulaire de soumission_, configurer le
    formulaire qui est utilisé pour créer et modifier le contenu de ce type. Remplir
    les champs comme indiqué ci-dessous.
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
          <td>Titre</td>
          <td>Étiquette du champ Titre qui est affichée lors de la modification ou de la création d'un contenu de ce type.</td>
          <td>Nom du vendeur</td>
        </tr>
        <tr>
          <td>Aperçu avant soumission</td>
          <td>Option pour choisir si l'aperçu du contenu avant la publication est obligatoire.</td>
          <td>Facultatif</td>
        </tr>
        <tr>
          <td>Explication ou directives pour la contribution</td>
          <td>Instructions pour la création et la modification de contenu.</td>
          <td>(Laisser vide)</td>
        </tr>
      </tbody>
    </table>

    ![Paramètres du formulaire de soumission](/images/structure-content-type-add-submission-form-settings.png)

1. Dans l'onglet vertical _Options de publication_, décider des options par
    défaut pour les nouveaux contenus de ce type. Remplir les champs comme indiqué
    ci-dessous.
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
          <td>Publié</td>
          <td>Publié le contenu par défaut.</td>
          <td>Coché</td>
        </tr>
        <tr>
          <td>Promu en page d'accueil</td>
          <td>Dans un site web par défaut, cette option peut être utilisée pour voir le contenu sur la page d'accueil.</td>
          <td>Décoché</td>
          <td>Épinglé en haut des listes</td>
          <td>Dans un site web par défaut, cette option peut</td>
        </tr>
        <tr>
          <td>Créer une nouvelle révision</td>
          <td>Créer une nouvelle révision à chaque fois que le vendeur est modifié.</td>
          <td>Coché</td>
        </tr>
      </tbody>
    </table>

    Changer ces options n'affecte pas les contenus déjà créés.
    ![Options de publication](/images/structure-content-type-add-Publishing-Options.png)

1. Dans l'onglet vertical _Paramètres d'affichage_ , décider si l'auteur et la
    date de publication seront visibles sur les éléments de contenu.  Remplir les
    champs comme indiqué ci-dessous.
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
          <td>Afficher les informations sur l'auteur et la date</td>
          <td>Afficher l'identifiant de l'auteur et la date de publication sur chaque page de vendeur.</td>
          <td>Décoché</td>
        </tr>
      </tbody>
    </table>

    ![Paramètres d'affichage](/images/structure-content-type-add-Display-settings.png)

1. Dans l'onglet vertical _Paramètres du menu_, remplir les champs comme montré
    ci-dessous.
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
          <td>Menus disponibles</td>
          <td>Menus dans lesquels les contenus de ce type peuvent être ajoutés. Les vendeurs n'ont pas besoin d'apparaitre dans les menus, donc décocher toutes les options de menus.</td>
          <td>Décoché</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    ![Paramètres du menu](/images/structure-content-type-add-Menu-settings.png)

1. Cliquer sur _Enregistrer et gérer les champs_ pour enregistrer le type de
    contenu.  La page _Gérer les champs_ qui apparaît permet d'ajouter des champs au
    type de contenu.  Voir [structure-fields](./structure-fields.md)
    <img src="/images/structure-content-type-add-confirmation.png" alt="Confirmation" width="100%" />
1. Suivre les mêmes étapes pour créer un type de contenu pour les recettes. Valeurs
    d'exemples pour les champs dans les formulaires lorsqu'elles sont différentes de
    celles indiquées dans les étapes ci-dessus :
    <table>
      <thead>
        <tr>
          <th>Nom du champ</th>
          <th>Valeur d'exemple</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Nom</td>
          <td>Recette</td>
        </tr>
        <tr>
          <td>Description</td>
          <td>Une recette proposée par un vendeur</td>
        </tr>
        <tr>
          <td>Paramètres du formulaire de contribution - Titre</td>
          <td>Nom de la recette</td>
        </tr>
      </tbody>
    </table>

## Améliorer votre compréhension

* [structure-fields](./structure-fields.md)
* Installer et configurer le [contributed Pathauto module](https://www.drupal.org/project/pathauto)
pour que les items de contenus aient un alias d'URL / de chemin généré
automatiquement. Voir [content-paths](./content-paths.md) pour plus d'information sur les URL de
votre site, [extend-module-find](./extend-module-find.md) pour des instructions sur comment trouver les
modules communautaires, et [extend-module-install](./extend-module-install.md) pour les instructions sur
le téléchargement et l'installation de modules communautaires.
## Vidéos (anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/vyvqiaaGM1k" title="Adding a Content Type" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Ecrit et modifié par [Sree Veturi](https://www.drupal.org/u/sree),
[Boris Doesborg](https://www.drupal.org/u/batigolix), et
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
