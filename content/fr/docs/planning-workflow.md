---
title: "Concept : processus éditorial"
description: "Vue d'ensemble du processus de publication pour gérer le contenu du site."
id: "planning-workflow"
translation_key: "planning-workflow"
source_locale: "fr"
---
## Prérequis { #planning-workflow }

* [understanding-drupal](./understanding-drupal.md)
* [planning-data-types](./planning-data-types.md)
## Qu'est ce qu'un processus de publication ?

Un _processus de publication_ est un processus qu'une organisation suit pour
créer, revoir, modifier et publier du contenu. Plusieurs personnes ayant des
rôles différents peuvent faire partie du processus. Par exemple, les créateurs
de contenu pourraient rassembler les informations et rédiger le contenu, tandis
que les éditeurs le revoient, le modifient ou demandent des modifications, et
publient le contenu une fois qu'il est considéré comme prêt à être partagé avec
le public. Plus tard, des révisions du contenu pourraient être effectuées à
travers un processus simple pour de petits changements, ou un processus plus
complexe pour des changements plus importants.
## Quels outils sont disponibles pour gérer un processus ?

- **Statut publié/non publié:** Le type d'entité élément de contenu supporte le marquage de chaque élément de contenu comme publié ou non publié. Le droit de voir une entité n'est pas le même selon qu'elle est publiée ou non ; par exemple, tous les visiteurs du site pourraient voir les éléments de contenu publiés, mais seuls les créateurs de contenu et les éditeurs peuvent voir les éléments de contenu non publiés.
- **Suivi des révisions:** Certains types d'entités de contenu supportent le suivi des révisions, ce qui signifie que lorsque le contenu est révisé, le logiciel stocke les anciennes révisions, de sorte à ce qu'elles puissent être comparées ou qu'on puisse y revenir.
- **Workflows:** Le module Workflows du cœur vous permet de définir des états et des transitions, au-delà de considérer simplement le contenu comme publié ou non publié. Le module compagnon Content Moderation du cœur vous permet d'assigner des droits et des rôles aux transitions du processus. Tous deux peuvent être utilisés avec les types d'entités élément de contenu et bloc personnalisé.
- **Placement de blocs:** L'entité de contenu bloc personnalisé vous permet de créer un bloc personnalisé et de le modifier, mais de ne le rendre visible qu'une fois qu'il est prêt.
## Sujets liés

* [content-create](./content-create.md)
* [content-edit](./content-edit.md)
* [block-create-custom](./block-create-custom.md)
* [block-place](./block-place.md)

*Attributions*

Ecrit et modifié par [Diána Lakatos](https://www.drupal.org/u/dianalakatos) de
[Pronovix](https://pronovix.com//), et
[Grant Dunham](https://www.drupal.org/u/gdunham).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
