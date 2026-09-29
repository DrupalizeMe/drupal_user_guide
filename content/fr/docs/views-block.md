---
title: "Ajouter un affichage de type bloc à une vue"
description: "Comment ajouter un affichage de type bloc à une vue."
id: "views-block"
translation_key: "views-block"
source_locale: "fr"
---
## Objectif { #views-block }

Ajouter un affichage de type bloc à la vue Recettes pour afficher les recettes
les plus récentes dans une barre latérale, puis modifier sa configuration sans
changer celle utilisée par la vue de la page Recettes.
## Prérequis

* [views-concept](./views-concept.md)
* [views-parts](./views-parts.md)
* [views-create](./views-create.md)
## Prérequis du site

* Le type de contenu Recette doit exister, il doit comporter un champ Image
principale, et votre site doit disposer de deux contenus/pages de type Recette.
Consulter [structure-content-type](./structure-content-type.md), [structure-fields](./structure-fields.md),
[structure-form-editing](./structure-form-editing.md), et [content-create](./content-create.md).
* Le style d'image _Vignette (100x100)_ doit être défini. Il est créé sur votre
site lorsque vous installez le module du cœur Image (installé avec le profil
d'installation du cœur "Standard") mais peut être recréé s'il a été supprimé.
Consulter [structure-image-style-create](./structure-image-style-create.md).
* La vue Recettes doit exister. Consulter [views-create](./views-create.md) et
[views-duplicate](./views-duplicate.md).
## Étapes

1. Dans le menu d'administration _Gérer_, naviguer vers _Structure_ > _Views_
    (_admin/structure/views_). Trouver la vue "Recettes" et cliquer sur "Modifier"
    dans son bouton déroulant. Il est aussi possible de naviguer vers la page des recettes
    depuis le menu principal du site, et de cliquer sur le lien contextuel _Modifier la vue_
    dans la région principale de la page. Consulter [config-overview](./config-overview.md) pour des
    informations sur les liens contextuels.
1. Créer un nouvel affichage de type bloc en cliquant sur _Ajouter_ sous
    _Affichages_. Cliquer sur _Bloc_ dans la liste de propositions qui apparaît. Le nouvel
    affichage est créé, et le focus passe automatiquement sur sa configuration.
    ![Ajouter un affichage de type bloc](/images/views-block_add-block.png)
1. Pour modifier le titre de cet affichage, cliquer sur _Bloc_ dans le champ _Nom
    de l'affichage_. La fenêtre modale _Bloc : Le nom et la description de cet
    affichage_ apparaît. Changer le _Nom administratif_ en "Recettes récentes".
    Cliquer sur _Appliquer_.
1. Pour changer le titre du bloc, cliquer sur Recettes dans le champ _Titre_ sous
    _Titre_. Dans la fenêtre modale qui apparaît, sélectionner _Ce(tte) bloc
    (supplanter)_ dans le menu déroulant _Pour_. Modifier le champ _Titre_ en
    "Nouvelles recettes" et cliquer sur _Appliquer (cet affichage)_.
    ![Titre uniquement pour ce bloc](/images/views-block_title.png)
1. Pour changer le style du bloc, cliquer sur _Grille_ dans le champ _Format_
    sous _Format_. Dans la fenêtre modale qui apparaît, sélectionner _Ce(tte) bloc
    (supplanter)_ dans le menu déroulant _Pour_. Sélectionner _Liste non mise en
    forme_ et cliquer sur _Appliquer (cet affichage)_. Vous pouvez configurer plus
    avant les options du style dans la prochaine fenêtre modale qui apparaît.
    Cliquer alors sur _Appliquer_.
1. Pour configurer le champ image, cliquer sur _Contenu : Image principale_ sous
    _Champs_. Dans la fenêtre modale qui apparaît, sélectionner _Ce(tte) bloc
    (supplanter)_ dans le menu déroulant _Pour_. Sélectionner _Style d'image
    Vignette (100x100)_. Cliquer sur _Appliquer (cet affichage)_).
    <img src="/images/views-block_image.png" alt="Image sous la forme d'une vignette" width="100%" />
1. Pour retirer les ingrédients en tant que filtre, cliquer sur _Contenu :
    Ingrédients (exposé)_ sous _Critères de filtrage_. Dans la fenêtre modale qui
    apparaît, sélectionner _Ce(tte) bloc (supplanter)_ dans le menu déroulant
    _Pour_. Cliquer sur _Retirer_ en bas.
1. Pour configurer la manière dont vous voulez que le contenu soit trié dans la
    vue, cliquer sur _Ajouter_ dans le bouton déroulant sous _Critères de tri_. Dans
    la fenêtre modale qui apparaît, sélectionner _Ce(tte) bloc (supplanter)_ dans le
    menu déroulant _Pour_. Cocher _Écrit le_ (dans la catégorie _Contenu_) et
    cliquer alors sur _Ajouter et configurer des critères de recherche_.
1. Dans la fenêtre modale de configuration qui apparaît, sélectionner _Trier par
    ordre décroissant_ pour que les recettes les plus récentes apparaissent en
    premier. Cliquer sur _Appliquer_.
1. Pour spécifier le nombre d'éléments à afficher, cliquer sur _Mini_ dans le
    champ _Utiliser la pagination_ sous _Pagination_. Dans la fenêtre modale qui
    apparaît, sélectionner _Ce(tte) bloc (supplanter)_ dans le menu déroulant
    _Pour_. Sélectionner _Afficher un nombre défini d'éléments_. Cliquer sur
    _Appliquer (cet affichage)_. Dans la fenêtre modale _Bloc : Options de
    pagination_, saisir "5" comme valeur pour _Éléments à afficher_. Cliquer sur
    _Appliquer_.
1. Cliquer sur _Enregistrer_. Vous visualiserez soit à nouveau la page de
    modification de la vue, soit la page Recettes, selon ce que vous avez fait dans
    l'étape 1. Vous devriez aussi visualiser un message indiquant que la vue a été
    enregistrée.
    <img src="/images/views-block_recipes.png" alt="Page de résumé après configuration" width="100%" />
1. Placer le bloc "Recettes : Recettes récentes" dans la région _Sidebar second_.
    Consulter [block-place](./block-place.md). Naviguer vers la page d'accueil du site pour visualiser
    le bloc.
    <img src="/images/views-block_sidebar.png" alt="Nouveau bloc recettes sur la page d'accueil" width="100%" />

## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/xrnuekARwYc" title="Adding a Block Display to a View" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Écrit et modifié par [Laura Vass](https://www.drupal.org/u/lolk) de
[Pronovix](https://pronovix.com/),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) et
[Jojy Alphonso](https://www.drupal.org/u/jojyja) de
[Red Crackle](http://redcrackle.com). Traduit par
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
