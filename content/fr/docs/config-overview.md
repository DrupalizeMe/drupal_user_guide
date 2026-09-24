---
title: "Concept: vue d'ensemble de l'administration"
description: "Vue d'ensemble du menu d'administration et des liens contextuels."
id: "config-overview"
translation_key: "config-overview"
source_locale: "fr"
---
## Prérequis { #config-overview }

* [understanding-themes](./understanding-themes.md)
* [understanding-modules](./understanding-modules.md)
## Qu'est ce que le menu d'administration ?

La barre d'outils fournie par le module du cœur Toolbar affiche le menu
d'administration _Gérer_ en haut ou à gauche du site, pour les utilisateurs
ayant la permission de le voir. Ce menu donne accès à toutes les zones
d'administration du site. Les liens de menu dépendront de quels modules sont
activés sur votre site et des droits des personnes voyant le menu ; si vous
installez votre site en utilisant le profil d'installation Standard du cœur et
que vous avez tous les droits d'administration, les liens de premier niveau
sont les suivants :

<img src="/images/config-overview-toolbar.webp" alt="Menu d'administration en mode horizontal" width="100%" />

- **Contenu:** Liste et gère les contenus existants, et autorise la création de nouveaux contenus.
- **Structure:** Contient une liste de liens pour gérer les éléments structurels du site, comme les blocs, les types de contenus, les menus et la taxonomie.
- **Apparence:** Gère les thèmes et les réglages liés à l'apparence.
- **Extensions:** Gère l'installation et la désinstallation des modules.
- **Configuration:** Contient des liens vers des pages de paramétrages pour différentes fonctionnalités du site.
- **Personnes:** Gère les utilisateurs, les rôles et les droits.
- **Rapports:** Contient des liens vers les journaux, les informations de mise à jour, les informations sur la recherche et d'autres informations sur le statut du site.
- **Aide:** Liste les sujets d'aide pour les modules installés qui en fournissent.

Le bouton en forme de flèche au bout à droite de la deuxième ligne de la barre
d'outils (ou au bout à gauche, si le site s'affiche dans une langue se lisant de
droite à gauche comme l'arabe) peut être utilisé pour faire passer le menu de la
position horizontale en haut de page, à la position verticale sur la gauche du
site (ou sur la droite, dans les langues se lisant de droite à gauche).
Lorsqu'il est affiché verticalement, le menu devient un arbre interactif.

<img src="/images/config-overview-vertical-menu.webp" alt="Menu d'administration en mode vertical" width="228px" />

Ce guide suit une méthode standard pour décrire la navigation dans les pages
d'administration en utilisant la barre d'outils d'administration. Consulter
[preface-conventions](./preface-conventions.md) pour plus d'informations.
## Que sont les liens contextuels ?

Certaines fonctionnalités d'administration et de modification du site peuvent
être accédés directement au travers des _liens contextuels_ affichés par le
module du cœur Contextual Links. Les liens contextuels vous donnent accès à
certaines des pages auxquelles vous pouvez accéder via le menu d'administration,
mais au lieu d'avoir à naviguer dans l'arborescence du menu, ces liens sont
fournis à l'endroit ou le contenu en rapport est affiché sur votre site.

Les liens contextuels doivent être activés pour être visibles. Si le thème de
votre site utilise le style par défaut pour les liens contextuels, une icône en
forme de crayon est utilisée pour indiquer que les liens contextuels sont
présents et activés, et si vous cliquez sur l'icône, vous verrez les liens
contextuels. Il y a deux façons d'activer l'icône en forme de crayon qui donne
accès aux liens contextuels :

* Si vous utilisez une souris dans un navigateur, l'icône apparaîtra
temporairement quand vous survolez une zone qui contient un lien contextuel.
* Vous pouvez cliquer sur l'icône principale en forme de crayon (ou son lien
_Modifier_) au bout à droite de la barre d'outils, ce qui activera tous les
liens contextuels sur la page courante. Cette icône n'est visible que sur les
pages contenant des liens contextuels.
<img src="/images/config-overview-pencils.webp" alt="Page avec les icônes en forme de crayon activées" width="100%" />

*Attributions*

Écrit par [Scott Wilkinson](https://www.drupal.org/u/halofx) et
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
