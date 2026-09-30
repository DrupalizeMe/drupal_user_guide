---
title: "Concept : le compte utilisateur n°1"
description: "Vue d'ensemble du compte utilisateur n°1, aussi connu comme le compte root ou le compte d'administration."
id: "user-admin-account"
translation_key: "user-admin-account"
source_locale: "fr"
---
## Prérequis { #user-admin-account }

[user-concept](./user-concept.md)
## Qu'est ce que le compte utilisateur 1 ?

Pendant l'installation de votre site, vous avec créé le premier compte
utilisateur. Chaque compte utilisateur est associé à un identifiant (ID)
numérique, et comme l'identifiant de cette utilisateur est un, il est souvent
appelé compte _utilisateur n°1_. Ce compte utilisateur est spécial, parce qu'il
est indépendant des rôles qui lui sont assignés ; une personne connectée en tant
qu'utilisateur n°1 a le droit de réaliser n'importe quelle action sur le site, y
compris voir et modifier tout le contenu, modifier n'importe quel compte
utilisateur, modifier la configuration du site, installer et désinstaller des
modules, et lancer le script de mise à jour.

À cause de son niveau de droits, certains appellent ce compte l'_utilisateur
root_, en référence au compte utilisateur "root" qui a tous les droits
d'administration sous Linux et d'autres systèmes d'exploitation.

C'est généralement une bonne pratique de créer des comptes séparés pour chaque
utilisateur administrateur, en leur donnant le rôle _Administrateur_, plutôt que
de voir tous les utilisateurs administrateurs se connecter avec le compte
utilisateur n°1. Il y a plusieurs raisons à ça :

* Certaines actions et mises à jour du site sont journalisées, et si tout le
monde utilise le même compte, il est difficle de savoir qui les a effectuées
lorsque la question se pose.
* Les droits du rôle _Administrateur_ peuvent être modifiés pour être plus
sécurisés que l'accès complet du compte utilisateur n°1, afin que les personnes
ne modifient pas par inadvertance des fonctionnalités du site qui ne doivent pas
être modifiées.
* Les responsabilités des personnes sur un site peuvent changer dans le temps.
Avec un compte utilisateur ordinaire, cela peut être reflété dans les droits en
assignant ou supprimant des rôles à leurs comptes utilisateurs. S'ils utilisent
tous le compte utilisateur n°1, cela est plus difficile.
* Sur certains sites, les auteurs des contenus ou des commentaires sont affichés
ou tracés, et si tout le monde utilise le même compte pour créer le contenu, il est
difficile de savoir qui a créé le contenu.

Il n'est pas possible de supprimer le compte utilisateur 1 depuis l'interface
d'administration. Cela est possible avec une requête sur la base de données,
mais cela peut entrainer des problèmes sur votre site et n'est pas recommandé.
## Pour aller plus loin (en anglais)

[_Drupal.org_ community documentation page "Accounts and roles"](https://www.drupal.org/node/22284)

*Attributions*

Ecrit et modifié par [Mark LaCroix](https://www.drupal.org/u/mark-lacroix)
et [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
