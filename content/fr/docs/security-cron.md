---
title: "Configurer les tâches planifiées (cron) de maintenance"
description: "Comment lancer les tâches planifiées de maintenance avec le module du cœur Automated Cron, ou en les exécutant depuis l'extérieur du site."
id: "security-cron"
translation_key: "security-cron"
source_locale: "fr"
---
## Objectif { #security-cron }

Vérifier que les tâches planifiées (cron) de maintenance sont lancées
régulièrement, sinon, installer le module du cœur
Automated Cron ou lancer les tâches planifiées de maintenance depuis l'extérieur
du site web.
## Prérequis

[security-cron-concept](./security-cron-concept.md)
## Étapes

1. Vérifier le _tableau de bord d'administration_ (consulter [prevent-status](./prevent-status.md))
    pour voir quand les tâches planifiées de maintenance ont été lancées pour la
    dernière fois.
    Si vous avez installé le site web en utilisant le profil d'installation
    _Standard_ du cœur (ou similaire), alors les tâches planifiées de maintenance
    pourraient déjà être lancées via le module du cœur Automated Cron. Par défaut,
    ces tâches sont lancées environ toutes les trois heures.
1. Choisir si les tâches planifiées de maintenance doivent être lancées en
    utilisant le module du cœur Automated Cron, ou avec d'autres moyens. Le module du
    cœur Automated Cron pourrait ne pas être approprié pour certains sites, voici quelques raison à cela :
    * Chaque fois qu'un utilisateur accède à une page du site, le module vérifie
      depuis combien de temps les tâches cron de maintenance n'ont pas été lancées,
      et les lance alors si nécessaire. Si personne ne visite le site web pendant
      une assez longue période, les tâches planifiées de maintenance ne seront pas
      lancées.
    * Les tâches planifiées de maintenance ne sont lancées qu'après la génération
      de la page. Cela signifie que la tâche doit être jouée avant le temps maximum alloué au serveur (par exemple, le temps
      limite d'exécution de PHP). Si ceci se produit, les journaux (consulter
      [prevent-log](./prevent-log.md)) afficheront des messages d'erreurs indiquant que le cron est
      dans l'incapacité d'arriver à son terme.
    * L'utilisation du module du cœur Automated Cron est associée à un léger coût
      quant à l'extensivité (_scalability_). Cela est dû au fait que l'un des
      processus du serveur web est occupé (et ne peut pas servir d'autres pages web)
      jusqu'à la fin de la tâche planifiée de maintenance.
1. Si vous voulez utiliser le module du cœur Automated Cron, il faut s'assurer d'abord
    qu'il est bien installé (il est installé avec le profil d'installation
    _Standard_ du cœur ; consulter [config-install](./config-install.md) s'il n'est pas installé).
    Ensuite, configurer le module pour contrôler la fréquence d'exécution des tâches
    planifiées de maintenance. Dans le menu d'administration _Gérer_, naviguer vers
    _Configuration_ > _Système_ > _Cron_ (_admin/config/system/cron_). Sélectionner
    l'intervalle souhaité dans le champ _Lancer les tâches planifiées (cron) toutes
    les_, et cliquer sur _Enregistrer la configuration_.
    ![Configurer le module Automated Cron du cœur](/images/security-cron.png)
1. Si vous voulez lancer les tâches planifiées de maintenance depuis l'extérieur
    du site, désinstaller le module Automated Cron (consulter [config-uninstall](./config-uninstall.md)).
    Ensuite, trouver l'URL du cron. Cette URL s'affiche dans le _tableau de bord
    d'administration_ (consulter [prevent-status](./prevent-status.md)), et dans la page
    d'administration du _Cron_ (consulter l'étape précédente). L'URL ressemble à
    ceci :
    _http://www.example.com/cron/0MgWtfB33FYbbQ5UAC3L0LL3RC0PT3RNUBZILLA0Nf1Re_
    Chaue fois que cette URL est visitée, les tâches planifiées de maintenance se
    lanceront. Configurer un des planificateurs suivants (en anglais) de manière à
    ce que cette URL soit appelée régulièrement :
    * [The Cron daemon](https://www.drupal.org/docs/7/setting-up-cron/configuring-cron-jobs-using-the-cron-command) (Linux, OS X, Solaris, BSD)
    * [Scheduled Tasks](https://www.drupal.org/docs/7/setting-up-cron-for-drupal/configuring-cron-jobs-with-windows) (Windows)
    * Un fournisseur de cron de type SaaS (logiciel en tant que service)
    * Un gestionnaire de cron fourni par votre hébergeur web (consulter la
      documentation fournie par votre hébergeur)

## Concepts liés

[security-concept](./security-concept.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/ts4g1jTEAt4" title="Configuring Cron Maintenance Tasks" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Pour aller plus loin (en anglais)

* [Page sur le site de Drush "Running Drupal cron tasks from Drush"](https://www.drush.org/latest/cron/)
* [Page de documentation de la communauté sur _Drupal.org_ Setting up cron"](https://www.drupal.org/docs/7/setting-up-cron/overview)

*Attributions*

Écrit et modifié par [Dave Hansen-Lange](https://www.drupal.org/u/dalin)
d'[Advomatic](https://www.advomatic.com/),
[Boris Doesborg](https://www.drupal.org/u/batigolix), et
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Traduit par
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
