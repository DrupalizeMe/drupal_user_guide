---
title: "Déclarer une page d'accueil pour votre site"
description: "Comment configurer un élément de contenu pour qu'il serve de page d'accueil."
id: "menu-home"
translation_key: "menu-home"
source_locale: "fr"
---
## Objectif { #menu-home }

Configurer quel élément de contenu servira de page d'accueil pour votre site
web.
## Prérequis du site

L'élément de contenu que vous voulez désigner comme page d'accueil de votre site
doit exister. Voir [content-create](./content-create.md).
## Étapes

1. Dans le menu d'administration _Gérer_, aller à _Configuration_ > _Système_ >
    _Paramètres de base du site_ (_admin/config/system/site-information_).
1. Sous _Page d'accueil_ remplacer _/node_ par le nom de la page que vous avez
    choisi comme page d'accueil. Pour utiliser une page d'accueil qui avait été
    créée auparavant, donner son chemin _/home_. Cliquer sur _Enregistrer la
    configuration_.
    ![Zone 'page d'accueil' comportant /home dans le champ texte](/images/menu-home_new_text_field.webp)
1. Aller sur la page d'accueil pour vérifier que le contenu affiché correspond à
    celui que vous avez configuré.
    <img src="/images/menu-home_final.webp" alt="Page d'accueil sur laquelle apparaît le contenu 'Accueil' (page de base) ajouté" width="100%" />

## Améliorer votre compréhension

* [menu-link-from-content](./menu-link-from-content.md)
* Suivre [content-create](./content-create.md) pour créer une page d'erreur utilisée pour les
réponses 404 (page non trouvé) ou 403 (non autorisé) de votre site. Puis en
suivant les étapes ci-dessus, vous pouvez la choisir comme réponse à une erreur,
dans la section _Pages d'erreur_ de la configuration.
## Concepts liés

[menu-concept](./menu-concept.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/qOL8arBYpJ4" title="Designating a Front Page for Your Site" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Ecrit et modifié par [Ann Greazel](https://www.drupal.org/u/AnnGreazel),
[Jack Haas](https://www.drupal.org/u/jerseycheese), et
[Jojy Alphonso](https://www.drupal.org/u/jojyja) de
[Red Crackle](http://redcrackle.com).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
