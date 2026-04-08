---
title: "Synchroniser les versions de la configuration"
description: "Comment synchroniser la configuration entre sites de développement et de production, en utilisant le module du cœur Configuration Manager."
id: "extend-config-versions"
translation_key: "extend-config-versions"
source_locale: "fr"
---
## Objectif { #extend-config-versions }

Synchroniser la configuration entre un site de développement et un site de
production.
## Prérequis

* [understanding-data](./understanding-data.md)
* [install-prepare](./install-prepare.md)
* [install-dev-sites](./install-dev-sites.md)
* [install-dev-making](./install-dev-making.md)
## Prérequis du site

* Vous devez avoir une copie de développement de votre site de production.
Consulter [install-dev-making](./install-dev-making.md).
* Le module du cœur Configuration Manager doit être installé à la fois sur les
sites de développement et de production. Consulter [config-install](./config-install.md) pour les
instruction sur l'installation de modules du cœur.
* Vous devez avoir changé la configuration sur le site de développement ou de
production (_site source_), et vouloir synchroniser ces modifications d'un site vers
l'autre (_site de destination_). Par exemple, vous pouvez développer un
nouveau type de contenu, avec des champs ainsi que des vues sur votre site de
développement, et quand tout fonctionne correctement, le déployer vers votre
site de production.
* Toute configuration qui ne devrait pas être synchronisée entre les sites
source et de destination doit être stockée dans des surcharges dans le fichier
_settings.php_ plutôt que dans la base de données. Consulter
[install-dev-making](./install-dev-making.md).
## Étapes

1. Sur le site source, dans le menu d'administration _Gérer_, naviguer vers
    _Configuration_ > _Développement_ > _Synchronisation de configuration_ >
    _Exporter_ (_admin/config/development/configuration/full/export_). La page Exporter apparaît.
1. Cliquer sur _Exporter_. Votre site génèrera une archive de l'ensemble de la
    configuration du site. Enregistrer le fichier sur votre ordinateur localement.
1. Dans le site de destination, dans le menu d'administration _Gérer_, naviguer
    vers _Configuration_ > _Développement_ > _Synchronisation de configuration_ >
    _Importer_ (_admin/config/development/configuration/full/import_). La page Importer apparaît.
1. Sélectionner l'archive contenant la configuration téléchargée localement, et
    cliquer sur _Transférer_. L'archive contenant votre configuration sera
    téléversée vers le site de destination, et vous serez redirigé vers la page de
    configuration _Synchroniser_ (_admin/config/development/configuration_), avec un
    message indiquant que vos fichiers ont bien été transférés.
1. Vérifier que les différences affichées sur la page sont bien celles attendues.
    Vous pourriez voir des éléments de configuration qui ont été ajoutés, supprimés,
    ou modifiés ; pour les éléments modifiés, vous pouvez cliquer sur _Visualiser
    les différences_ pour voir quelles sont ces modifications.
1. Lorsque le résultat est satifaisant, cliquer sur _Tout importer_ pour importer l'ensemble des
    modifications de la configuration.

## Pour approfondir

* Si les modifications que vous avez faites n'impliquent qu'un seul élément de
configuration (comme une vue), vous pouvez utiliser la fonctionnalité
d'exportation/importation d'une configuration individuelle pour deployer la
modification entre les sites. Consulter [extend-deploy](./extend-deploy.md).
* Après l'étape où vous exportez l'ensemble de la configuration du site source,
vous pourriez également vouloir décompresser l'archive et l'incorporer à une
révision (_commit_) d'un système de gestion de versions, comme Git, pour suivre
les modifications de la configuration de votre site. Consulter [extend-git](./extend-git.md).
## Vidéos (anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/dLUGQk8GKa0" title="Synchronizing Configuration Versions" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Écrit par [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Traduit par
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
