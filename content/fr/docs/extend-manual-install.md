---
title: "Installer manuellement des modules ou des thèmes"
description: "Comment installer manuellement un module ou un thème."
id: "extend-manual-install"
translation_key: "extend-manual-install"
source_locale: "fr"
---
## Objectif { #extend-manual-install }

Des modules ou des thèmes personnalisés pourraient ne pas être disponibles via
Composer, et dans ce cas leurs fichiers doivent être installés manuellement.
## Prérequis

* [understanding-modules](./understanding-modules.md)
* [extend-module-find](./extend-module-find.md)
* [understanding-themes](./understanding-themes.md)
* [extend-theme-find](./extend-theme-find.md)
## Préquis du site

Recourir à cette approche si vous avez créé un module ou thème personnalisé ou
avez reçu directement les fichiers de quelqu'un.

Quand vous installez ou mettez à jour le cœur, des thèmes ou des modules
contribués, vous devriez utiliser Composer. Consulter en ce cas
[install-composer](./install-composer.md) et [extend-module-install](./extend-module-install.md).
## Étapes

Lorsque vous installez un module ou thème depuis _Drupal.org_, suivre les
instructions de téléchargement, et ensuite celles pour transférer et extraire.
Si vous êtes l'auteur du module ou du thème, ignorer l'étape concernant le
téléchargement. À la place, créer une archive (que vous savez comment extraire
sur le serveur) et continuer avec les étapes concernant le transfert et
l'extraction, en utilisant n'importe quelle méthode appropriée, eu égard à la
manière dont vous avez initialement créé l'archive.
### Transférer les fichiers sur votre site et les extraire

1. Pour ajouter un nouveau module ou thème,  créer des sous-dossiers dans votre
    répertoire racine _modules_ et _themes (s'ils n'existent pas déjà). En général,
    on crée un sous-dossier _contrib_ pour les modules et thèmes contribués qui sont
    téléchargés depuis _Drupal.org_, et un sous-dossier _custom_ pour les modules et
    thèmes personnalisés. Votre dossier _modules_ pourrait ressembler à ceci :
    <img src="/images/extend-manual-install-directories.png" alt="Arborescence dans le système fichier conseillée pour les modules" width="174px" />
1. Pour remplacer un module ou thème existant par une version actualisée, mettre
    le site en mode maintenance. Consulter [extend-maintenance](./extend-maintenance.md).
1. Pour remplacer un module ou thème existant par une version actualisée, repérer
    et éliminer tous les fichiers et dossiers du module ou thème existant.
    Normalement, les modules se trouvent dans des dossiers à l'intérieur du dossier
    racine _modules_ et les thèmes à l'intérieur du dossier racine _themes_.
1. Transférer le fichier _.tar.gz_ (ou l'archive que vous avez créée) sur votre
    site. Le placer soit au même endroit que le dossier éliminé (en cas de
    remplacement d'un module ou thème existant), soite dans le sous-dossier
    approprié _modules_ ou _themes_
1. Extraire les fichiers de l'archive _.tar.gz_ (ou l'archive que vous avez
    créée), pour générer un sous-dossier à l'emplacement de l'archive. Si vous
    n'avez pas accès au terminal, ou si votre serveur d'hébergement ne fonctionne
    pas sous Linux, le gestionnaire de fichiers du panneau de contrôle de
    l'hébergeur devrait fournir un moyen d'extraire les fichiers. Si vous avez accès
    au terminal sur votre serveur d'hébergment (sous Linux) et il s'agit d'un
    fichier tar.gz, il est possible d'utiliser une commande telle que :
    ```text
    tar -xzf custom_toolbar-2.4.0.tar.gz
    ```
1. Supprimer le fichier compressé du serveur, à moins que le mode d'extraction
    employé ne l'ait déjà supprimé.
1. Se reporter à [extend-module-install](./extend-module-install.md), [extend-theme-install](./extend-theme-install.md),
    [security-update-module](./security-update-module.md), ou [security-update-theme](./security-update-theme.md) pour achever
    l'installation ou la mise à jour du module ou thème. Commencer par l'étape
    venant après la finalisation du téléchargement automatique.

## Pour approfondir

* Si vous travaillez avec des environnements multiples (par exemple, un site de
développement local et un site de production), il faudra répéter les étapes pour
chaque environnement, ou cloner l'environnement. Consulter
[install-dev-making](./install-dev-making.md).
* Si vous avez ajouté un nouveau thème, naviguer dans le menu _Gérer_ vers
_Apparence_ (_admin/appearance_) et désinstaller l'ancien thème.
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/kOzQz9q3Kf8" title="Télécharger manuellement un module ou un thème" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Ressources supplémentaires

* [page de documentation sur _Drupal.org_  de la communauté : "Updating modules"](https://www.drupal.org/docs/extending-drupal/updating-modules)
* [page de documentation sur _Drupal.org_ de la communauté : "Installing Drupal modules"](https://www.drupal.org/docs/extending-drupal/installing-drupal-modules)
* [page de documentation sur _Drupal.org_ de la communauté : "Installing themes"](https://www.drupal.org/docs/extending-drupal/installing-themes)

*Attributions*

Écrit et modifié par [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
[Marc Isaacson](https://www.drupal.org/u/vegantriathlete) et
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) de
[Drupalize.Me](https://drupalize.me).
Traduit par [Lydie Parisot](https://www.drupal.org/u/onewomanbiz) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
