---
title: "Se préparer à l'installation"
description: "Comment télécharger le cœur du logiciel et satisfaire aux prérequis à l'installation."
id: "install-prepare"
translation_key: "install-prepare"
source_locale: "fr"
---
## Objectif { #install-prepare }

Télécharger le cœur du logiciel, et prendre en compte les prérequis à
l'installation.
## Prérequis

* [install-requirements](./install-requirements.md)
* [install-tools](./install-tools.md)
* [install-decide](./install-decide.md)
* Comment installer et configurer des logiciels sur un serveur (si
l'installation se fait sur votre propre ordinateur)
* Comment configurer l'hébergement pour un site web générique
* Comment créer une base de données
## Prérequis du site

Les logiciels serveurs doivent être installés sur le serveur où vous avez
l'intention d'héberger votre site. Consulter [install-requirements](./install-requirements.md).

Selon la méthode de téléchargement du cœur du logiciel que vous envisagez, vous
pourriez avoir besoin d'installer auparavant des logiciels additionnels.
Consulter [install-decide](./install-decide.md) et [install-tools](./install-tools.md).
## Étapes

1. Choisir une méthode pour télécharger ou installer le cœur du logiciel, à
    partir de celles listés dans [install-decide](./install-decide.md). Le reste de ces instructions
    s'applique aux options utilisant Composer, au téléchargement manuel et à
    l'installeur interactif ; si vous avez choisi d'autres options, le logiciel
    devrait être installé pour vous.
1. Configurer une URL et un hébergement pour votre site sur le serveur. Vérifier
    que l'hébergement fonctionne en plaçant un simple fichier HTML dans le
    répertoire racine de votre hébergement, et en visitant l'URL de votre site.
1. Créer une base de données, ainsi qu'un utilisateur de la base de données
    jouissant d'un accès complet.
1. Transférer les fichiers du cœur du logiciel dans le répertoire racine du site
    web, en utilisant la méthode que vous avez choisie. Consulter [install-decide](./install-decide.md)
    pour des liens vers les instructions.

## Améliorer votre compréhension

Consulter [install-run](./install-run.md) pour lancer l'installeur interactif.

Alternativement, vous pouvez utiliser la commande Drush suivante, depuis le
répertoire où vous avez transféré le logiciel, où _DB_NAME_, _DB_USER_ et
_DB_PASS_ sont les identifiants de votre base de données :

```text
drush site:install standard --db-url='mysql://DB_USER:DB_PASS@localhost/DB_NAME' --site-name=example
```
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/7Aib3y9DM80" title="Preparing to Install" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Pour aller plus loin (en anglais)

[Drush](http://www.drush.org)

*Attributions*

Écrit et modifié par [Drew Gorton](https://www.drupal.org/u/dgorton),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) de
[erdfisch](https://erdfisch.de),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
and [Jojy Alphonso](https://www.drupal.org/u/jojyja) de
[Red Crackle](http://redcrackle.com).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
