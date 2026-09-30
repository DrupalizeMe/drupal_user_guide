---
title: "Concept : Drupal comme système de gestion de contenu"
description: "Découverte de Drupal et raisons de le choisir en tant que système de gestion de contenu (SGC) fiable"
id: "understanding-drupal"
translation_key: "understanding-drupal"
source_locale: "fr"
---
## Qu'est-ce qu'un système de gestion de contenu ? { #understanding-drupal }

Un système de gestion de contenu (SGC) est un logiciel qui permet aux
utilisateurs de créer, publier, modifier ou de supprimer du contenu d'un site
web, en utilisant un navigateur web sur un smartphone, une tablette ou un
ordinateur de bureau. Généralement, le logiciel de SGC est écrit dans un langage
de script, et ces scripts fonctionnent sur un ordinateur où une base de données
et un serveur web sont installés. Le contenu et les paramétrages du site web
sont stockés habituellement dans la base de données, et pour chaque appel d'une
page qui arrive au serveur web, les scripts combinent des informations depuis la
base de données et les autres fichiers (fichiers Javascript, fichiers CSS,
images, etc.  qui font partie du SGC ou ont été téléchargés) pour construire les
pages du site web.

La combinaison du système d'exploitation sur lequel le SGC tourne, du langage de
script dans lequel il est écrit, de la base de données qui stocke les
informations, et du serveur web qui exécute les scripts pour retrouver
l'information et la renvoyer au navigateur de l'internaute est connue comme la
_stack_ sur laquelle fonctionne le SGC ; l'utilisation commune de la combinaison
d'un système d'exploitation Linux, du serveur web Apache, de la base de données
MySQL, et du langage de scripts PHP est connue comme la _stack LAMP_.
## Qu'est ce que Drupal ?

Drupal est un SGC flexible basé sur la stack LAMP, avec une conception modulaire
permettant l'ajout et la supression de fonctionnalités par l'installation et la
désinstallation de _modules_, et permettant à l'apparence du site de changer
complètement par l'installation et la désinstallation de _thèmes_. Le
téléchargement de base de Drupal, connu comme le cœur de Drupal, contient les
scripts PHP nécessaires pour faire fonctionner les fonctionnalités de base du
SGC, plusieurs modules et thèmes optionnels, et de nombreux fichiers
Javascript, CSS, et d'images. De nombreux modules et thèmes supplémentaires
peuvent être téléchargés depuis le site [_Drupal.org_](https://www.drupal.org).

Drupal peut aussi fonctionner sur d'autres _stacks_ :

* Le système d'exploitation peut être Windows ou Mac OS à la place de Linux.
* Le serveur web peut être Nginx ou IIS à la place d'Apache.
* La base de données peut être PostgreSQL ou SQLite à la place de MySQL, ou
une alternative à MySQL compatible comme MariaDB ou Percona.

D'autres systèmes d'exploitation, serveurs web, ou bases de données peuvent aussi
fonctionner ; cependant, les scripts que le logiciel utilise sont écrits en PHP,
et cela ne peut pas être modifié.
## Quelles sont les raisons à l'utilisation de Drupal ?

Lors de la construction d'un site web, vous devez choisir d'utiliser un parmi
les nombreux outils SGC existant et services hébergés, ou de développer votre
propre SGC, ou de construire le site sans utiliser de SGC. Voici quelques
raisons pour lequelles vous pourriez choisir Drupal :

* Construire un petit site, simple avec des pages HTML statiques n'est pas
difficile, et vous pouvez obtenir un site simple très rapidement. Configurer un
site dans un SGC nécessite généralement plus de temps, mais vous permet de
bénéfier de l'édition en ligne (plus facile pour les gestionnaires de contenus
moins expérimentés), et la possibilité de fonctionnalités plus complexes qui
nécessitent une base de données.
* Certains logiciels de SGC ont un objectif spécifique : par exemple, il y a des
paquets et des services hébergés que vous pouvez utiliser pour construire un blog
ou un site de gestion de club. Drupal, par contraste est un SGC général. Si vous
construisez un site avec un objectif spécifique, vous pouvez choisir d'utiliser
un SGC spécifique ; cependant, si votre site dépasse même légèrement cet
objectif spécifique, vous feriez probablement mieux d'utiliser un SGC générique
plutôt que d'essayer d'adapter un SGC spécifique.
* Construire votre propre type de logiciel de SGC peut sembler attractif.
Cependant, utiliser un SGC générique comme Drupal comme point de départ, est
généralement une meilleure idée car les fonctionnalités basiques d'un SGC (comme
les comptes utilisateurs et la gestion des contenus) ont des milliers d'heures
de développement derrière, incluant de nombreuses années de tests utilisateurs,
de corrections de bugs et de failles de sécurité.
* Certains logiciels de SGC ont des coûts de licenses élevés. Certains sont
gratuits ou ont une version gratuite, mais ont une licence limitée qui ne vous
autorise pas à faire des modifications et des extensions. Vous pourriez préférer
utiliser un outil (comme Drupal) qui a une licence logicielle moins restrictive,
et qui est développé par une communauté internationale. Voir
[understanding-project](./understanding-project.md) pour plus d'informations sur ce sujet.
## Sujets liés

* [understanding-modules](./understanding-modules.md)
* [understanding-themes](./understanding-themes.md)
* [understanding-distributions](./understanding-distributions.md)
* [understanding-project](./understanding-project.md)
## Pour aller plus loin (en anglais)

* [Page de documentation de la communauté sur _Drupal.org_ "Understanding Drupal: Overview"](https://www.drupal.org/docs/understanding-drupal/overview)
* [_Drupal.org_ page "FAQ" (Foire Aux Questions)](https://www.drupal.org/about/faq)
* [_Drupal.org_ page "Case Studies"](https://www.drupal.org/case-studies)
* [Wikipedia page "Content management systems"](https://en.wikipedia.org/wiki/Content_management_system)
* [Wikipedia page "Modular design"](https://en.wikipedia.org/wiki/Modular_design)

*Attributions*

Ecrit et modifié par [Kristof van Tomme](https://www.drupal.org/u/kvantomme)
de [Pronovix](https://pronovix.com/),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
et [Michael Lenahan](https://www.drupal.org/u/michaellenahan)
de [erdfisch](https://erdfisch.de).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky),
[Edouard Cunibil](https://www.drupal.org/u/duaelfr) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
