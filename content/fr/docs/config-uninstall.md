---
title: "Désinstaller les modules inutilisés"
description: "Comment désinstaller les modules pour réduire la charge système."
id: "config-uninstall"
translation_key: "config-uninstall"
source_locale: "fr"
---
## Objectif { #config-uninstall }

Désinstaller les modules du cœur Search et History, tout comme le module du cœur
Ban si vous l'avez installé dans [config-install](./config-install.md), pour réduire la charge
système.
## Prérequis

[understanding-modules](./understanding-modules.md)
## Prérequis du site

* Vous devez avoir au moins un module inutilisé sur votre site que vous voulez
désinstaller, comme le module du cœur Search.
* Si vous voulez utiliser Drush pour désinstaller les modules, Drush doit être
installé. Consulter [install-tools](./install-tools.md).
## Étapes

Vous pouvez utiliser l'interface d'administration ou Drush pour désinstaller des
modules.
### En utilisant l'interface d'administration

* Dans le menu d'administration _Gérer_ naviguer dans _Extension_ > _Désinstaller_
(_admin/modules/uninstall_) où vous trouverez la liste des modules qui sont prêts
à être désinstallés.
1. Cocher les cases pour les modules que vous désinstallez (_Ban_, _History_ et
    _Search_). Cliquer sur _Désinstaller_ en bas de la page.
    <img src="/images/config-uninstall_check-modules.webp" alt="Désinstaller un module" width="100%" />

