---
title: "Mettre un thème à jour"
description: "Comment mettre à jour un thème contribué via Composer, l’interface d’administration et le script de mise à jour de la base de données."
id: "security-update-theme"
translation_key: "security-update-theme"
source_locale: "fr"
---
## Objectif { #security-update-theme }

Mettre à jour un thème contribué sur votre site et lancer le script _Mises à
jour de la base de données_.
## Prérequis

* [security-concept](./security-concept.md)
* [security-cron-concept](./security-cron-concept.md)
## Prérequis du site

* Un thème contribué a été installé et dispose d'une mise à jour. Consulter
[extend-theme-install](./extend-theme-install.md) et [security-announce](./security-announce.md).
* Si votre site est en production, vous devriez tester ce processus dans un
environnement de développement avant de l'exécuter sur votre site de production.
Consulter [install-dev-making](./install-dev-making.md).
* Vous avez réalisé une sauvegarde complète de votre site. Consulter
[prevent-backups](./prevent-backups.md).
* Si vous voulez utiliser l'interface utilisateur pour vérifier la présence de
mises à jour, le module du cœur Update Manager doit être installée. Consulter
[config-install](./config-install.md) pour des instructions sur l'installation de modules du cœur.
## Étapes

Mettre à jour un thème contribué suppose de mettre d'abord le site en mode de
maintenance, d'obtenir les nouveaux fichiers de code, d'appliquer les mises à
jour de la base requises, et enfin de sortir le site du mode de maintenance.

Vous pouvez mettre le code d'un thème contribué à jour en utilisant Composer.
Si vous utilisez un thème personnalisé plutôt qu'un thème contribué, récupérer
les nouveaux fichiers du thème, puis poursuivre les instructions relatives aux
mises à jour de la base par l'interface d'administration ci-dessous.

Cela suppose que vous utilisez Composer pour gérer les fichiers de votre site ;
consulter [install-composer](./install-composer.md).
### Mettre un thème contribué à jour avec Composer

1. Mettre votre site en mode maintenance. Consulter [extend-maintenance](./extend-maintenance.md).
1. Dans le menu d'administration _Gérer_, naviguer vers _Rapports_ > _Mises à
    jour disponibles_ > _Mettre à jour_ (_admin/reports/updates/update_).
1. Trouver les thèmes dans la liste qui nécessitent une mise à jour.
    <img src="/images/security-update-theme-updates.png" alt="Mises à jour disponibles" width="100%" />
1. Déterminer le nom machine du projet que vous voulez mettre à jour. Pour les
    modules contribués et les thèmes, il s'agit de la dernière partie de l'URL de la
    page du projet ; par exemple, pour le thème Honey, à l'adresse
    https://www.drupal.org/project/honey, le nom machine est `honey`.
1. Si vous voulez mettre à jour vers la dernière version stable, utiliser la
    commande suivante, en remplaçant le nom machine du projet à mettre à jour :
    ```text
    composer update drupal/geofield --with-dependencies
    ```

    Pour apprendre comment télécharger une version spécifique, consulter
    [install-composer](./install-composer.md).

1. Après avoir obtenu les nouveaux fichiers du thème, ouvrir la page des mises à
    jour de la base en tapant l'URL _example.com/update.php_ dans votre navigateur.
1. Cliquer sur _Continuer_ pour lancer les mises à jour. Les scripts de mise à
    jour de la base seront lancés.
1. Cliquer sur _Pages d'administration_ pour retourner à la section d'administration de votre site.
1. Sortir votre site du mode de maintenance. Consulter [extend-maintenance](./extend-maintenance.md).
1. Vider le cache (se référer à [prevent-cache-clear](./prevent-cache-clear.md)).

## Pour approfondir

* Examiner le journal du site (consulter [prevent-log](./prevent-log.md)) une fois les mises
à jour achevées, pour voir s'il y a eu des erreurs.
* [security-update-module](./security-update-module.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/elVnWoaQMkk" title="Updating a Theme" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Écrit par [Boris Doesborg](https://www.drupal.org/u/batigolix) et
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) de
[Drupalize.Me](https://drupalize.me). Traduit par
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
