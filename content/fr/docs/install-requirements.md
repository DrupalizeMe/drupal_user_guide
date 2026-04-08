---
title: "Concept : prérequis du serveur"
description: "Vue d'ensemble des prérequis pour le serveur pour l'installation et le fonctionnement du cœur (core) du logiciel."
id: "install-requirements"
translation_key: "install-requirements"
source_locale: "fr"
---
## Quels sont les prérequis pour faire fonctionner le cœur du logiciel ? { #install-requirements }
### Espace disque

L'espace disque requis pour votre site n'est pas une quantité fixée, dans la
mesure où il dépend de votre site. Les fichiers de base pour le cœur du logiciel
occupent jusqu'à 100 Mo sur le serveur web. Vous aurez besoin de plus d'espace
si vous installez des modules additionnels ou des thèmes, et vous aurez
également besoin d'espace pour les médias, les sauvegardes, et autres fichiers
générés par votre site ou téléversés. La base de données occupe également de
l'espace disque, bien que souvent elle ne se trouve pas au même endroit (et
dans certains cas, sur le même serveur) que celui utilisé pour les fichiers du
site.
### PHP

PHP 8.3 ou version 8 supérieure. PHP doit être configuré avec un espace mémoire
minimal de 64 Mo ; si vous utilisez plusieurs modules sur votre site ou des
outils en ligne de commande basés sur PHP qui consomment beaucoup de mémoire
(comme Composer), une quantité de mémoire considérablement plus importante
pourrait être nécessaire.

Certaines extensions PHP sont également requises ; la liste exacte des
extensions PHP dépend de la manière dont vous installez le cœur du logiciel et
des modules que vous utilisez sur le site. En général, les fournisseurs de
services d'hébergement ont déjà installé les extensions PHP dont vous aurez
besoin. Si vous hébergez vous même votre site ou s'il tourne en local sur votre
ordinateur, vous verrez des messages d'erreur pendant l'installation si des
extensions PHP nécessaires sont manquantes, et devriez être en mesure de les
installer avant de continuer.  Consulter la page
[PHP requirements](https://www.drupal.org/docs/getting-started/system-requirements/php-requirements) (en anglais) pour une liste complète des prérequis.
### Serveur web

- **Apache (recommandé):** Apache est le serveur web le plus fréquemment utilisé. Le cœur du logiciel fonctionnera avec Apache 2.4.7 ou supérieur hébergé sur UNIX/Linux, OS X, ou Windows avec module mod_rewrite d'Apache installé et activé. La configuration du VirtualHost d'Apache doit contenir la directive _AllowOverride All_ pour autoriser l'utilisation des fichiers _.htaccess_.
- **Serveur local de PHP:** Vous pouvez temporairement faire tourner un site de démonstration en local sur votre ordinateur en utilisant juste PHP, sans installer de serveur web.
- **Nginx:** Nginx est un serveur web qui se concentre sur les accès concurrents, la performance et une faible utilisation de la mémoire. Le cœur du logiciel fonctionnera avec Nginx 0.7 ou supérieur herbergé sur UNIX/Linux, OS X, ou Windows. ngx_http_rewrite_module doit être installé et activé.
### Database

Utiliser une des bases de données suivantes :

* MySQL - 8.0 (MariaDB 10.6, Percona 8.0) ou supérieur avec un moteur
de stockage compatible InnoDB
* PostgreSQL - 16 ou supérieur avec l'extension pg_trgm
* SQLite - 3.45 ou supérieur. Des sites de démonstration temporaires utilisent
SQLite, qui est distribué en même temps que PHP et ne nécessite pas
l'installation d'un logiciel de gestion de bases de données à part. S'assurer
toutefois que votre version de PHP inclut la version minimal requise de SQLite.
## Pour aller plus loin (en anglais)

[Page de documentation de la communauté sur _Drupal.org_ "System requirements"](https://www.drupal.org/docs/system-requirements)
* [PHP Runtime Configuration (PHP memory limit and other settings)](https://secure.php.net/manual/en/configuration.php)
* [Installing a new Drupal application on your local machine](https://www.drupal.org/docs/official_docs/en/_local_development_guide.html)
* [Creating a Drupal demo application for evaluation purposes](https://www.drupal.org/docs/official_docs/en/_evaluator_guide.html)

*Attributions*

Adapté par [Karl Kedrovsky](https://www.drupal.org/u/KarlKedrovsky),
[Brian Emery](https://www.drupal.org/u/bemery987),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) et
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) de
[Drupalize.Me](https://drupalize.me) à partir de la page
["System requirements"](https://www.drupal.org/docs/system-requirements),
copyright 2000-2026 contributeurs individuels à la
[documentation de la communauté Drupal](https://www.drupal.org/documentation).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
