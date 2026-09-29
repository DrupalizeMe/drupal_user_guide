---
title: "Déployer de nouvelles fonctionnalités pour votre site"
description: "Comment copier une vue créée dans un site de développement local dans un site de production."
id: "extend-deploy"
translation_key: "extend-deploy"
source_locale: "fr"
---
## Objectif { #extend-deploy }

Copier une vue créée dans un site de développement local dans un site de
production.
## Prérequis

* [install-dev-making](./install-dev-making.md)
* [extend-config-versions](./extend-config-versions.md)
* [install-dev-sites](./install-dev-sites.md)
## Prérequis du site

* Le module du cœur Configuration Manager doit être installé à la fois sur les deux sites : de développement et de production. Consulter [config-install](./config-install.md) pour des
instructions sur l'installation de modules du cœur.
* Le type de contenu Marchand doit exister à la fois sur les sites de
développement et de production, avec les mêmes champs. Consulter
[structure-content-type](./structure-content-type.md).
* La vue Marchands doit exister sur le site de développement mais pas sur le
site de production. Consulter [views-create](./views-create.md).
## Étapes

1. Ouvrir le site de développement localement.
1. Dans le menu d'administration _Gérer_, naviguer vers _Configuration_ >
    _Développement_ > _Synchronisation de configuration_ > _Exporter_ > _Élément
    individuel_ (_admin/config/development/configuration/single/export_). La page
    _Export individuel_ apparaît.
1. Sélectionner _Vue_ (NdT ou _Voir_) dans le menu déroulant _Type de
    configuration_.
1. Sélectionner Marchands dans le menu déroulant _Nom de la configuration_. La
    configuration apparaît dans la zone de texte.
1. Copier la configuration depuis la zone de texte.
    ![Exporter un élément individuel](/images/extend-deploy-export-single.png)
1. Ouvrir le site de production.
1. Dans le menu d'administration _Gérer_, naviguer vers _Configuration_ >
    _Développement_ > _Synchronisation de configuration_ > _Importer_ > _Élément
    individuel_ (_admin/config/development/configuration_). La page _Import unique_
    apparaît.
1. Sélectionner _Vue_ (NdT ou _Voir_) dans le menu déroulant _Type de
    configuration_.
1. Coller la configuration dans la zone de texte.
1. Cliquer sur _Importer_. La page de confirmation apparaît.
1. Cliquer sur _Confirmer_.
1. Vérifier que la vue a été importée en naviguant vers _Structure_ > _Views_
    dans le menu d'administration _Manage_.

## Pour approfondir

Les étapes de ce sujet montrent comment exporter et importer un élément de
configuration individuel. Cependant, lorsque vous développez une
fonctionnalité sur un site de développement et que vous voulez la transférer vers votre
site de production, vous aurez souvent besoin de transférer plusieurs éléments de
configuration en même temps. Ainsi, si vous avez développé un nouveau type de contenu avec des
champs, vous aurez besoin de transférer plusieurs éléments de configuration pour
chaque champ, un pour le type de contenu lui-même, et sans doute de multiples
mode de visualisation ou de saisie, qui devront être transférés dans le bon
ordre. Faire ceci correctement peut se révéler à la fois fastidieux et
difficile.

Vous pouvez exporter et importer l'ensemble de la configuration
du site en une seule fois. Pour ce faire, vous aurez besoin d'un site de développement qui soit un
clone du site de production (consulter [install-dev-making](./install-dev-making.md)), et vous pourrez
alors suivre les étapes de [extend-config-versions](./extend-config-versions.md) pour synchroniser la
configuration entre les sites de développement et de production.

Une autre alternative consiste à utiliser le
[module contribué Features](https://www.drupal.org/project/features), qui permet
d'exporter et d'importer une fonctionnalité sous la forme d'un paquet (par
exemple, toute la configuration d'une galerie de photos).

Enfin, si vous ne parvenez pas à visualiser les effets de ces modifications sur
votre site, il pourrait être nécessaire de vider le cache. Consulter
[prevent-cache-clear](./prevent-cache-clear.md).
## Concepts liés

* [install-dev-sites](./install-dev-sites.md)
* [planning-workflow](./planning-workflow.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/hysqVDIfLTA" title="Deploying New Site Features" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Écrit par [Boris Doesborg](https://www.drupal.org/u/batigolix). Traduit par
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
