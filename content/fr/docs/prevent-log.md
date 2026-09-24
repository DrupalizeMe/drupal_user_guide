---
title: "Concept : journal"
description: "Vue d'ensemble des journaux et où trouver les entrées récentes du journal."
id: "prevent-log"
translation_key: "prevent-log"
source_locale: "fr"
---
## Qu'est-ce qu'un journal ? { #prevent-log }

Votre site capture les évènements du système dans un journal pour qu'ils
puissent postérieurement être examinés par une personne autorisée. Ce journal
est une liste d'évènements enregistrés contenant des données sur l'utilisation
et la performance, des avertissements, et des informations sur le fonctionnement
du site. Il est indispensable de vérifier régulièrement le journal, dans la
mesure où c'est souvent la seule manière de savoir s'y passe.

Vous pouvez trouver les entrées récentes du journal dans le menu
d'administration _Gérer_ en naviguant vers _Rapports_ > _Entrées récentes du
journal_ (_admin/reports/dblog_).
Ces entrées de journal peuvent être purgées par les administrateurs ou les
tâches planifiées : elles ne devraient pas être utilisées pour de l'_audit
trail_. Le module Syslog est adapté à de tels usages.

<img src="/images/prevent-log.webp" alt="Entrées récentes du journal sur un site basique" width="100%" />

*Attributions*

Adapté par [Diána Lakatos](https://www.drupal.org/u/dianalakatos)
depuis ["Reports"](https://www.drupal.org/docs/7/monitoring-a-site/reports)
copyright 2000-2026 contributeurs individuels à la
[Documentation de la communauté Drupal](https://www.drupal.org/documentation).
Traduit par [Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
