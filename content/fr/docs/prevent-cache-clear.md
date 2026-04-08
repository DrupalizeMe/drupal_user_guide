---
title: "Vider le cache"
description: "Comment vider le cache en utilisant Drush ou l'interface utilisateur."
id: "prevent-cache-clear"
translation_key: "prevent-cache-clear"
source_locale: "fr"
---
## Objectif { #prevent-cache-clear }

Vider ou reconstruire les caches internes de votre site pour vous assurer qu'ils
sont à jour avec les données les plus récentes, en utilisant l'interface
utilisateur ou Drush.
## Prérequis

* [prevent-cache](./prevent-cache.md)
* [install-tools](./install-tools.md)
## Prérequis du site

Si vous voulez utiliser Drush pour vider le cache, Drush doit être installé.
Consulter [install-tools](./install-tools.md).
## Étapes

Vous pouvez utiliser l'interface d'administration ou Drush pour vider le cache.
Vous pouvez également utiliser le script de reconstruction ou Drush pour une
reconstruction plus complète du cache.
### Utiliser l'interface d'administration pour vider le cache

1. Dans le menu d'administration _Gérer_, naviguer vers _Configuration_ >
    _Développement_ > _Performance_ (_admin/config/development/performance_). Si
    vous ne pouvez pas accéder à cette page depuis l'interface d'administration,
    utiliser l'une ou l'autre de ces méthodes pour vider ou reconstruire le cache.
1. Cliquer sur _Effacer tous les caches_.
1. Un message indiquant que le cache a été vidé apparaît en tête de page.
1. Si cela ne résout pas le problème vous ayant incité à vider le cache,
    essayer à la place la reconstruction.

### Utiliser le script de reconstruction

1. Ouvrir _settings.php_ (_/sites/default/settings.php_) dans un éditeur de
    texte. Ajouter cette ligne à la fin du fichier et l'enregistrer :
    ```text
    $settings['rebuild_access'] = TRUE;
    ```
1. Visiter _http://www.example.com/core/rebuild.php_ dans votre navigateur (où
    _www.example.com_ est l'URL de votre site). Après une courte pause, vous devriez
    être redirigé vers la page d'accueil de votre site, et le cache devrait être
    reconstruit.
1. Ouvrir _settings.php_ (_/sites/default/settings.php_) dans un éditeur de
    texte. Trouver la ligne contenant _$settings['rebuild_access']_ que vous avez
    ajoutée, retirer cettte ligne, et enregistrer le fichier.

### Utiliser Drush pour reconstruire ou vider le cache

Vous pouvez utiliser une de ces commandes :

* Utiliser la commande `drush cache:rebuild` pour vider et reconstruire toutes
les données en cache de votre site. Après avoir exécuté cette commande, vous
verrez s'afficher ce message : "Tous les caches ont été vidés".
* Utiliser la commande `drush cache:clear` pour voir une liste de caches
individuels et choisir alors le cache que vous voulez spécifiquement vider.
L'exécution de cette commande devrait mener à un affichage comme suit :
```text
> drush cache:clear
Enter a number to choose which cache to clear.
 [0]  :  Cancel
 [1]  :  drush
 [2]  :  theme-registry
 [3]  :  menu
 [4]  :  css-js
 [5]  :  block
 [6]  :  module-list
 [7]  :  theme-list
 [8]  :  render
 [9]  :  views
```

Choisir un cache à vider en saisissant le nombre associé avec ce cache. Taper
"Entrée" pour continuer.

Pour vider un type de cache en particulier, vous pouvez le spécifier dans la
commande cache:clear. Par exemple pour vider le cache render :

```text
drush cache:clear render
```
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/-evRieC6Y3U" title="Clearing the Cache" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Pour aller plus loin

[Page de documentation de la communauté sur _Drupal.org_ "Clearing or rebuilding Drupal's cache"](https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache)

*Attributions*

Adapté et modifé par  [Joe Shindelar](https://www.drupal.org/u/eojthebrave)
et [Jack Haas](https://www.drupal.org/u/jerseycheese) à partir de
["Clearing or rebuilding Drupal's cache"](https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache),
copyright 2000-2026 contributeurs individuels à la
[Documentation de la communauté de Drupal](https://www.drupal.org/documentation).
Traduit par [Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
