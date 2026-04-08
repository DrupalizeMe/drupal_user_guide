---
title: "Concept : méthodes pour télécharger et installer le cœur (core)"
description: "Vue d'ensemble des méthodes que vous pouvez utiliser pour télécharger le cœur (core)."
id: "install-decide"
translation_key: "install-decide"
source_locale: "fr"
---
## Prérequis { #install-decide }

* [install-tools](./install-tools.md)
* [install-requirements](./install-requirements.md)
* [understanding-distributions](./understanding-distributions.md)
## Quelles sont les méthodes disponibles pour télécharger le cœur ?

Pour construire un site, vous devrez d'abord télécharger le cœur (core). En
fonction de vos plans, il y a plusieurs manières de télécharger le cœur :

- **Utiliser Composer:** Si vous prévoyez de construire un site, et de continuer à le développer au cours du temps, vous devriez utiliser Composer pour télécharger le cœur, parce que Composer est la manière la plus convenable de gérer les dépendances. Si vous prévoyez d'utiliser Drush (consulter [install-tools](./install-tools.md)), l'utilisation de Composer est requise. Consulter [install-composer](./install-composer.md) pour les instructions correspondantes.
- **Essayer une démo en ligne gratuite:** Si vous êtes en train d'évaluer Drupal en vue de l'utiliser pour construire un site, vous pouvez recourir à un fournisseur en ligne pour obtenir une installation de démonstration du cœur, cela ne prend pas plus de 20 minutes. Consulter la [page "Try Drupal" sur _Drupal.org_](https://www.drupal.org/try-drupal).
- **Utiliser un installeur en un clic chez votre hébergeur:** Si vous décidez d'installer le cœur chez votre hébergeur, ce dernier pourrait offrir une documentation spécifique et/ou une installation en un clic. Consulter [la liste d'hébergeurs qui supportent Drupal sur _Drupal.org's_](https://www.drupal.org/association/supporters/hosting).
- **Utiliser un environnement pré-configuré:** Utiliser un environnement pré-configuré ou une machine virtuelle qui contient Drupal et tous les composants logiciels requis pour installer Drupal en local. Consulter la section concernant votre système d'exploitation sur la [page de documentation de la communauté sur _Drupal.org_ "Local server setup guide"](https://www.drupal.org/docs/develop/local-server-setup) avec les options envisageables.
## Que se passe-t-il quand j'installe le cœur ?

_Installer_ le cœur signifie mettre en place les tables dans la base de données,
la configuration, et un compte d'utilisateur d'administration, de manière à ce
que vous puissiez construire et utiliser votre site.
## Quelles sont le méthodes disponibles pour installer le cœur ?

Il y a plusieurs manières d'installer le cœur (core) :

- **Installeur en arrière-plan:** Si vous décidez d'utiliser une démo en ligne ou un installeur chez votre hébergeur, le cœur pourrait être installé automatiquement pour vous.
- **Installeur interactif:** Le cœur comporte un installeur interactif qui vous présente plusieurs formulaires en ligne, et achève l'installation en  utilisant les informations que vous saisissez dans les formulaires. Consulter [install-prepare](./install-prepare.md) et [install-run](./install-run.md).
- **Outil en ligne de commande:** Des outils en ligne de commande (consulter [install-tools](./install-tools.md)) peuvent également être utilisés pour mener à bien les étapes de l'installation.
- **Installeur d'un site de démo:** Créez rapidement rapidement un site de démo temporaire qui utilise le serveur web intégré et la base de données SQLite qui sont pris en charge par PHP en exécutant la commande ci-dessous depuis le répertoire racine de votre projet. Dans ce cas, vous ne lancerez pas l'installeur interactif. Consulter la page [Evaluator Guide](https://www.drupal.org/docs/official_docs/evaluator-guide) (en anglais) pour en apprendre plus.

```text
  php -d memory_limit=256M core/scripts/drupal quick-start demo_umami
```

*Attributions*

Écrit et modifié par [Drew Gorton](https://www.drupal.org/u/dgorton),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan)
d'[erdfisch](https://erdfisch.de),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
et [Jojy Alphonso](https://www.drupal.org/u/jojyja) de
[Red Crackle](http://redcrackle.com). Traduit par
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
