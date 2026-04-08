---
title: "Changer l'ordre de la navigation"
description: "Comment réordonner les liens dans un menu."
id: "menu-reorder"
translation_key: "menu-reorder"
source_locale: "fr"
---
## Objectif { #menu-reorder }

Réordonner les liens dans un menu.
## Prérequis

* [menu-concept](./menu-concept.md)
* [menu-link-from-content](./menu-link-from-content.md)
## Prérequis du site

Les pages _Accueil_ et _À propos_ doivent exister dans le menu de navigation
principale. Consulter [menu-link-from-content](./menu-link-from-content.md).
## Étapes

1. Dans le menu d'administration _Gérer_, aller à _Structure_ > _Menus_
    (_admin/structure/menu_) où tous les menus de votre site sont listés. Cliquer
    sur _Modifier le menu_ dans la liste d'_Opérations_ pour la _Navigation
    principale_. Vous pouvez aussi accéder à cette page en utilisant les liens
    contextuels (voir [config-overview](./config-overview.md)) pour le menu.
    <img src="/images/menu-reorder_menu_titles.png" alt="Liste des menus du site avec le menu 'Navigation principale' surligné" width="100%" />
1. La page _Modifier le menu_ affiche une liste de chaque lien du menu choisi.
    (_Navigation principale_).
    ![Liste des liens de menu sous _Navigation principale_](/images/menu-reorder_edit_menu.png)
1. Faire glisser les liens de menus en utilisant la poignée en forme de croix
    pour changer l'ordre : _Accueil_, puis _À propos_. Alternativement au
    glisser/déposer, il est possible de cliquer sur le lien _Afficher les poids des
    lignes_ en tête de tableau, et de sélectionner des poids numériques (les liens
    de menus ayant des poids algébriques inférieurs seront affichés en premier).
    ![Liens de menu réordonnés avec le message avertissant de modifications non enregistrées et le bouton _Enregistrer_](/images/menu-reorder_reorder.png)
1. Cliquer sur _Enregistrer_.
1. La page d'accueil affiche maintenant la navigation principale avec le lien de
    menu _Accueil_ affiché en premier.
    ![Liens de menu réordonnés sur la page d'accueil avec 'Accueil' en premier puis 'À propos](/images/menu-reorder_final_order.png)

## Améliorer votre compréhension

Ajouter un lien de menu appelé _Contact_, renvoyant ver la page de _/contact_,
dans votre menu de navigation principale. La page de contact est fournie par le
module du cœur Contact ; vous pouvez modifier sa mise en page et ses champs
(consulter [structure-form-editing](./structure-form-editing.md)).
## Concepts liés

[menu-concept](./menu-concept.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/OtT8e8lLx5E" title="Changing the Order of Navigation" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Écrit par [Ann Greazel](https://www.drupal.org/u/AnnGreazel).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
