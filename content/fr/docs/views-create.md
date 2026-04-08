---
title: "Créer une vue listant du contenu"
description: "Comment créer une vue listant du contenu."
id: "views-create"
translation_key: "views-create"
source_locale: "fr"
---
## Objectif { #views-create }

Créer une page listant des marchands qui sera automatiquement mise à jour chaque
fois qu'un marchand est ajouté, supprimé, ou mis à jour sur le site.
## Prérequis

* [views-concept](./views-concept.md)
* [views-parts](./views-parts.md)
## Prérequis du site

* Les modules du cœur Views et Views UI doivent être installés. Ils le sont
automatiquement pour vous lors que vous installez Drupal avec le profil
d'installation Standard du cœur.
* Le type de contenu Marchand doit exister, avec les champs URL et Image
principale. Votre site doit avoir quelques contenus de type Marchand.
Consulter [structure-content-type](./structure-content-type.md), [structure-fields](./structure-fields.md) et
[content-create](./content-create.md).
* Le style d'image _Medium (220x220)_ doit être défini. Ce dernier est créé sur
votre site lorsque vous installez le module du cœur Image (installé avec le
profil d'installation du cœur Standard) mais peut être recréé s'il a été
supprimé. Consulter [structure-image-style-create](./structure-image-style-create.md).
## Étapes

1. Dans le menu d'administration _Gérer_, naviguer vers _Structure_ > _Vues_ >
    _Ajouter une vue_ (_admin/structure/views/add_). L'assistant _Ajouter une vue_
    apparaît.
1. Remplir les champs comme indiqué ci-dessous.
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
          <td>Visualiser les informations basiques > Nom de la vue</td>
          <td>Nom de la vue qui sera visible dans les pages d'administration</td>
          <td>Marchands</td>
        </tr>
        <tr>
          <td>Paramètres de la vue > Afficher</td>
          <td>Type d'information listée dans la vue</td>
          <td>Contenu</td>
        </tr>
        <tr>
          <td>Paramètres de la vue > de type</td>
          <td>Spécifier le type de contenu</td>
          <td>Marchand</td>
        </tr>
        <tr>
          <td>Paramètres de la vue > trié par</td>
          <td>Ordre dans la liste</td>
          <td>Titre</td>
        </tr>
        <tr>
          <td>Paramètres de la page > Créer une page</td>
          <td>Créer une page qui affiche la vue</td>
          <td>Coché</td>
        </tr>
        <tr>
          <td>Paramètres de la page > Titre de page</td>
          <td>Titre affiché au-dessus de la vue</td>
          <td>Marchands</td>
        </tr>
        <tr>
          <td>Paramètres de la page > Chemin</td>
          <td>adresse de la page</td>
          <td>vendors</td>
        </tr>
        <tr>
          <td>Paramètres de la page > Paramètres d'affichage de la page > Format d'affichage</td>
          <td>Type de liste</td>
          <td>Tableau</td>
        </tr>
        <tr>
          <td>Paramètres de la page > Éléments à afficher</td>
          <td>Nombre d'éléments visibles dans la page</td>
          <td>10</td>
        </tr>
        <tr>
          <td>Paramètres de la page > Utiliser une pagination</td>
          <td>Découper la liste en plusieurs pages s'il y a plus d'éléments</td>
          <td>Coché</td>
        </tr>
        <tr>
          <td>Paramètres de la page > Créer un lien de menu</td>
          <td>Ajouter la page de la vue au menu</td>
          <td>Coché</td>
        </tr>
        <tr>
          <td>Paramètres de la page > Menu</td>
          <td>Menu dans lequel ajouter le lien</td>
          <td>Navigation principale</td>
        </tr>
        <tr>
          <td>Paramètres de la page > Texte du lien</td>
          <td>Ancre du lien dans le menu</td>
          <td>Marchand</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/views-create-wizard.png" alt="Assistant Ajouter une vue" width="100%" />

1. Cliquer sur _Enregistrer et modifier_. La page de configuration de la vue
    apparaît.
1. En dessous de _Champs_, cliquer sur _Ajouter_ dans le bouton déroulant. La
    fenêtre modale _Ajouter champs_ apparaît.
1. Saisir le mot "image" dans le champ de recherche.
1. Cocher Main image dans le tableau.
1. Cliquer sur _Ajouter et configurer champs_. La fenêtre modale _Configurer
    champ : Image principale_ apparaît.
1. Remplir les champs comme indiqué ci-dessous.
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
          <td>Créer une étiquette</td>
          <td>Ajouter une étiquette avant la valeur du champ</td>
          <td>Non coché</td>
        </tr>
        <tr>
          <td>Style d'image</td>
          <td>Le format de l'image</td>
          <td>Medium (220x220)</td>
        </tr>
        <tr>
          <td>Lier l'image à</td>
          <td>Ajouter un lien à l'élément de contenu</td>
          <td>Contenu</td>
        </tr>
      </tbody>
    </table>
1. Cliquer sur _Appliquer_. La page de configuration de la vue apparaît.
1. En-dessous de _Champs_, cliquer sur _Ajouter_ dans le bouton déroulant. La
    fenêtre modale _Ajouter champs_ apparaît.
1. Saisir le mot "corps" dans le champ de recherche.
1. Sélectionner _Corps_ dans le tableau.
1. Cliquer sur _Ajouter et configurer champs_. La fenêtre modale _Configurer
    champ : Contenu : Corps_ apparaît.
1. Remplir les champs comme indiqué ci-dessous.
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
          <td>Créer une étiquette</td>
          <td>Ajouter une étiquette avant la valeur du champ</td>
          <td>Non coché</td>
        </tr>
        <tr>
          <td>Outil de mise en forme</td>
          <td>La présentation de la valeur du champ</td>
          <td>Résumé ou coupé</td>
        </tr>
        <tr>
          <td>Limite de troncature</td>
          <td>Le nombre maximum de caractères affichés</td>
          <td>120</td>
        </tr>
      </tbody>
    </table>
1. Cliquer sur _Appliquer_. La page de configuration de la vue apparaît.
1. En dessous de _Champs_, cliquer sur _Contenu : Titre_. La fenêtre modale
    _Configurer champ : Contenu : Titre_ apparaît.
1. Décocher _Créer une étiquette_. Ceci retirera l'étiquette créée par
    l'assistant.
1. Cliquer sur _Appliquer_. La page de configuration de la vue apparaît.
1. En dessous de _Champs_, cliquer sur _Réordonner_ dans le bouton déroulant. La
    fenêtre modale _Réordonner champs_ apparaît.
1. Faire glisser les poignées en forme de croix au bout des champs pour les mettre dans
    le bon ordre : Image, Titre, Corps. Alternativement au glisser/déplacer, vous
    pouvez cliquer sur le lien _Afficher les poids des lignes_ en tête de la table
    et saisir des poids numériques (les champs ayant des poids inférieurs seront
    affichés en premier).
1. Cliquer sur _Appliquer_. La page de configuration de la vue apparaît.
1. Optionnellement, cliquer sur _Actualiser l'aperçu_ pour un aperçu.
1. Cliquer sur _Enregistrer_.
    ![Page de configuration de la vue Marchands](/images/views-create-view.png)
1. Naviguer vers la page d'accueil et cliquer sur Marchands dans la navigation
    principale pour voir le résultat.
    ![Rendu de la vue Marchands](/images/views-create-view-output.png)

## Pour aller plus loin

Le lien vers la vue dans la navigation principale ne sera probablement pas à la
bonne place. Changer l'ordre des liens de menu dans la navigation principale.
Consulter [menu-reorder](./menu-reorder.md).
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/aw02gXlte9I" title="Creating a Content List View" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Créé et modifié par [Boris Doesborg](https://www.drupal.org/u/batigolix) et
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Traduit par
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
