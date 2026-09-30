---
title: "Mettre à jour le cœur"
description: "Comment mettre à jour le cœur en utilisant l'interface d'administration ou Drush."
id: "security-update-core"
translation_key: "security-update-core"
source_locale: "fr"
---
## Objectif { #security-update-core }

Mettre à jour le cœur, soit par l'interface d'administration, soit en utilisant
Drush.
## Prérequis du site

* Si vous voulez utiliser Drush, Drush doit être installé. Consulter
[install-tools](./install-tools.md).
* Si votre site est en production, vous devriez tester ce processus dans un
environnement de développement avant de l'appliquer. Consulter
[install-dev-making](./install-dev-making.md).
## Étapes

1. Faire une sauvegarde complète de votre site. Se référer à [prevent-backups](./prevent-backups.md).
1. Ouvrir _settings.php_ (_/sites/default/settings.php_) dans un éditeur de
    texte. Trouver la ligne contenant la variable _$settings['update_free_access']_.
    Par défaut, elle est définie à "FALSE" pour des raisons de sécurité. Changer ce
    paramètre à "TRUE".

    ```text
    $settings['update_free_access'] = TRUE;
    ```

1. Désactiver tout système de mise en cache (memcache, varnish, et ainsi de
    suite) que votre application pourrait utiliser.
1. Mettre votre site en mode de maintenance. Consulter [extend-maintenance](./extend-maintenance.md).
1. Si vous utilisez Composer pour gérer les dépendances, passer les six prochaines étapes, et consulter à la place [install-composer](./install-composer.md) pour des instructions
    sur la manière de télécharger des fichiers mis à jour. Reprendre à l'étape qui traite du fichier _update.php_.
1. Télécharger l'achive tar.gz ou zip de la dernière version du cœur de Drupal
    dans la branche que vous utilisez (telle que 8.x ou 9.x) depuis la page
    [_Drupal.org_ Drupal Core Downloads](https://www.drupal.org/project/drupal).
    Consulter [install-prepare](./install-prepare.md) pour plus de détails sur la manière de trouver la
    dernière version.
1. Téléverser l'archive vers le serveur de votre hébergeur web.
1. Extraire l'archive dans un répertoire temporaire sur votre serveur (cela
    devrait être en dehors du répertoire où votre site est hébergé). Le gestionnaire
    de fichiers du panneau de contrôle de votre hébergeur devrait fournir un moyen
    d'extraire les fichiers. Ou, si vous avez un accès à un terminal sur le serveur
    de votre hébergement (sous Linux), vous pouvez utiliser une commande comme :
    ```text
    tar -xzf drupal-8.3.2.tar.gz
    ```

    Dans le répertoire de l'hébergeur de votre site, supprimer les répertoires
    _core_ et _vendor_, et tous les fichiers qui ne sont pas dans ce
    sous-répertoire, y compris _.htaccess_, _composer.json_, et _autoload.php_. Ne
    pas supprimer les fichiers personnalisés : vous pourriez perdre des
    fonctionnalités stockées dans ces fichiers.

1. Copier les répertoires _core_ et _vendor_ ainsi que les fichiers non
    personnalisés supprimés à l'étape précédente depuis le répertoire temporaire
    vers le répertoire de votre site.
1. Lancer le script _update.php_ en utilisant une des deux méthodes suivantes :
    * Visiter _http://www.example.com/update.php_ avec votre navigateur (où
      _www.example.com est l'URL de votre site). Cliquer sur _Continuer_ au premier
      écran pour lancer les mises à jour et achever l'exécution du script avec
      succès.
    * Lancer la commande Drush suivante : `drush updatedb`
1. Si vous obtenez une erreur ou un avertissement, relancer le script
    _update.php_ à nouveau jusqu'à ce que les mises à jour s'achèvent avec succès.
1. Ouvrir _settings.php_ (_/sites/default/settings.php_) dans un éditeur de
    texte. Trouver la ligne contenant la variable _$settings['update_free_access']_
    et changer sa valeur à "FALSE" :
    ```text
    $settings['update_free_access'] = FALSE;
    ```
1. Cliquer sur _Pages d'administration_ pour retourner à la section
    d'administration de votre site.
1. Sortir votre site du mode de maintenace. Consulter [extend-maintenance](./extend-maintenance.md).
1. Vider le cache. Consulter [prevent-cache-clear](./prevent-cache-clear.md).
1. Réactiver tout système de mise en cache désactivé à l'étape 3.
1. Votre site devrait à présent tourner sous la dernière version mise à jour.
    Vous pouvez vérifier la version courante du logiciel sur le _tableau de bord
    d'administration_ (consulter [prevent-status](./prevent-status.md)).

## Améliorer votre compréhension

* [install-tools](./install-tools.md)
* [install-dev-making](./install-dev-making.md)
* [prevent-backups](./prevent-backups.md)
## Concepts liés

[prevent-status](./prevent-status.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/DqYqxp4xByk" title="Updating the Core Software" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Pour aller plus loin

* [Page "Drupal Core Downloads" sur _Drupal.org_](https://www.drupal.org/project/drupal)
* [Page "Registry Rebuild" sur _Drupal.org_](https://www.drupal.org/project/registry_rebuild)
* Le fichier _/core/UPDATE.txt_ de votre installation.

*Attributions*

Écrit et modifié par [Surendra Mohan](https://www.drupal.org/u/surendramohan),
[Boris Doesborgh](https://www.drupal.org/u/batigolix), et
[Jojy Alphonso](https://www.drupal.org/u/jojyja) de
[Red Crackle](http://redcrackle.com).
Traduit par [Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
