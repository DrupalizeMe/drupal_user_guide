---
title: "Utiliser Composer pour télécharger et mettre à jour les fichiers"
description: "Comment utiliser l'outil Composer pour gérer les fichiers du cœur (core) et les modules et thèmes contribués."
id: "install-composer"
translation_key: "install-composer"
source_locale: "fr"
---
## Objectif { #install-composer }

Utiliser Composer pour télécharger et mettre à jour les fichiers et les
dépendances du cœur (core) ou des modules et thèmes contribués.
## Prérequis

[install-tools](./install-tools.md)
## Prérequis du site

Si vous voulez utiliser Composer, il doit être installé, soit sur votre serveur
de développement local, soit sur votre site en production. Consulter
[install-tools](./install-tools.md).
## Étapes

Si vous n'êtes pas en mesure d'installer l'outil Composer sur votre serveur de
production, vous pouvez suivre les étapes dans n'importe laquelle des sections
ci-dessous sur votre serveur local, et ensuite transférer tout fichier ajouté ou
mis à jour sur votre serveur de production. La procédure recommandée est de
faire une archive ou un fichier zip des nouveaux répertoires ou des répertoires
modifiés que vous tranférerez sur votre serveur de production, d'y supprimer les
répertoires qui ont été modifiés, et d'extraire l'archive. Inspecter les
modifications et ajouts aux fichiers suivants, à la racine de votre
installation :

* répertoire _vendor_
* _autoload.php_
* _composer.json_
* _composer.lock_
### Utiliser Composer pour télécharger le cœur (core)

Suivre ces étapes si vous n'avez pas encore téléchargé ou installé le cœur, et
que vous voulez utiliser Composer pour télécharger à la fois le cœur et ses
dépendances externes :

1. Dans la ligne de commande, se placer un niveau au-dessus du répertoire où vous
    souhaitez que se trouve le logiciel.
1. Saisir cette commande, où _monrépertoire_ est le répertoire que vous souhaitez
    créer :
    ```text
    composer create-project drupal/recommended-project monrépertoire
    ```
1. La dernière version du cœur sera téléchargée dans le sous-répertoire
    _monrépertoire/web_.

### Utiliser Composer pour télécharger un module ou un thème

Suivre ces étapes si vous utilisez déjà Composer pour gérer le cœur, et que vous
voulez utiliser Composer pour ajouter un module ou thème contribué avec ses
dépendances.

1. Chaque fois que vous voulez ajouter un module ou thème contribué, déterminer
    le nom court du projet. Il s'agit de la dernière partie de l'URL de la page du
    projet ; par exemple le module Geofield, à l'adresse
    https://www.drupal.org/project/geofield, a pour nom court +geofield+.
1. Pour télécharger le module ou thème contribué avec ses dépendances externes,
    saisir la commande suivante à la racine de votre site (en remplaçant +geofield+
    par le nom court du module ou du thème) :
    ```text
    composer require drupal/geofield
    ```

### Utiliser Composer pour mettre à jour des fichiers précédemment téléchargés

Suivre ces étapes pour mettre à jour les fichiers du cœur ou d'un thème ou
module contribué, après avoir commencé à gérer les dépendances avec Composer :

1. Déterminer le nom court du projet que vous voulez mettre à jour. Pour le cœur,
    il s'agit de _core_. Pour des modules ou thèmes contribués, il s'agit de la
    dernière partie de l'URL de la page du projet ; par exemple le module Geofield,
    à l'adresse https://www.drupal.org/project/geofield, a pour nom court +geofield+.
1. Si vous voulez mettre à jour vers la dernière version stable, utiliser la
    commande suivante, en remplaçant +geofield+ par le nom court du projet à mettre
    à jour :
    ```text
    composer update drupal/geofield --with-dependencies
    ```
1. S'il vous faut une version spécifique, déterminer comment saisir le numéro de
    version vers lequel vous voulez mettre à jour. Par exemple, pour la version
    8.x-1.16 d'un module contribué, vous saisiriez juste 1.16, tandis que pour la
    version 9.0.7 du cœur, vous saisiriez 9.0.7. Saisir ensuite la commande suivante
    à la racine de votre site (en remplaçant +geofield+ par le nom court du projet
    et en indiquant le bon numéro de version) :
    ```text
    composer require drupal/geofield:1.16
    ```

## Améliorer votre compréhension

Vous pouvez en apprendre plus sur les commandes de Composer en utilisant son
sytème d'aide intégré. Par exemple, pour en savoir plus sur la commande
`create-project`, saisir `composer help create-project` dans votre invite de
commande.
## Vidéos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/v-WeFthdmD4" title="Using Composer and Git to Download Files" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Pour aller plus loin (en anglais)

* [Page de documentation  de la communauté sur _Drupal.org_ "Using Composer to manage Drupal site dependencies"](https://www.drupal.org/docs/develop/using-composer/using-composer-to-manage-drupal-site-dependencies)
* [Page de documentation de la communauté sur _Drupal.org_ "Update Drupal core via Composer"](https://www.drupal.org/docs/updating-drupal/update-drupal-core-via-composer)
* [Page de documentation de la communauté sur _Drupal.org_ "Add Composer to an existing site"](https://www.drupal.org/docs/installing-drupal/add-composer-to-an-existing-site)

*Attributions*

Adapté par [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
[Hans Fredrik Nordhaug](https://www.drupal.org/u/hansfn), et
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) de
[Drupalize.Me](https://drupalize.me) à partir de
["Using Composer to manage Drupal site dependencies"](https://www.drupal.org/docs/develop/using-composer/using-composer-to-manage-drupal-site-dependencies),
copyright 2000-2026 contributeurs individuels à la
[documentation de la communauté de Drupal](https://www.drupal.org/documentation).
Traduit par [Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
