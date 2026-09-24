---
title: "Activer et désactiver le mode maintenance"
description: "Comment activer le mode maintenance pour mettre en place un message \"Site en maintenance\", et comment le désactiver."
id: "extend-maintenance"
translation_key: "extend-maintenance"
source_locale: "fr"
---
## Objectif { #extend-maintenance }

Mettre votre en site en mode maintenance pour permettre aux utilisateurs disposant des droits d'administration d'utiliser votre site tandis que les utilisateurs sans ce droit
verront s'afficher un message indiquant que le site est en maintenance.
## Prérequis

[security-concept](./security-concept.md)
## Prérequis du site

Si vous voulez utiliser Drush pour activer ou désactiver le mode maintenance,
Drush doit être installé. Consulter [install-tools](./install-tools.md).
## Étapes

Vous pouvez utiliser l'interface d'administration de votre site ou Drush pour activer ou
désactiver le mode maintenance.
### Activer le mode maintenance en utilisant l'interface d'administration

1. Dans le menu d'administration _Gérer_, naviguer vers _Configuration_ >
    _Développement_ > _Mode maintenance_ (_admin/config/development/maintenance_).
    La page _Mode maintenance_ apparaît.
1. Remplir les champs comme indiqué ci-dessous.
    <table>
      <thead>
        <tr>
          <th>Nom du champ</th>
          <th>Explication</th>
          <th>Valeur</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Mettre le site en mode maintenance</td>
          <td>Activer le mode maintenance</td>
          <td>Coché</td>
        </tr>
        <tr>
          <td>Message à afficher en mode maintenance</td>
          <td>Les informations qui sont affichées aux utilisateurs du site web quand le mode est activé. Des variables comme @site peuvent être utilisées dans le message</td>
          <td>@site est actuellement en maintenance et devrait à nouveau être en ligne sous peu. Merci de votre patience.</td>
          <td></td>
        </tr>
      </tbody>
    </table>
1. Cliquer sur  _Enregistrer la configuration_.
1. Vérifier que le site est en mode maintenance en y accédant depuis un autre
    navigateur depuis lequel vous n'êtes pas connecté·e. Si Vous ne parvenez pas à
    vérifier, essayer de vider le cache. Consulter [prevent-cache-clear](./prevent-cache-clear.md).
    <img src="/images/extend-maintenance-mode-enabled.webp" alt="Mode maintenance activé" width="100%" />

### Désactiver le mode maintenance en utilisant l'interface d'administration

1. Dans le menu d'administration _Gérer_, naviguer vers _Configuration_ >
    _Développement_ > _Mode maintenance_ (_admin/config/development/maintenance_).
    La page _Mode maintenace apparaît.
1. Remplir les champs comme indiqué ci-dessous.
    <table>
      <thead>
        <tr>
          <th>Nom du champ</th>
          <th>Explication</th>
          <th>Valeur</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Mettre le site en mode maintenance</td>
          <td>Désactiver le mode maintenance</td>
          <td></td>
        </tr>
        <tr>
          <td>Message à afficher en mode maintenance</td>
          <td>Aucun message requis pour désactiver. Vous pouvez laisser ce champ vide.</td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
1. Cliquer sur _Enregistrer la configuration_.
1. Vérifier que le site n'est plus en mode maintenance en y accédant depuis un
    autre navigateur depuis lequel vous n'êtes pas connecté·e. Si vous ne parvenez
    pas à vérifier, essayer de vider le cache. Consulter [prevent-cache-clear](./prevent-cache-clear.md).
    <img src="/images/extend-maintenance-mode-disabled.webp" alt="Mode maintenance désactivé" width="100%" />

### Activer ou désactiver le mode maintenance en utilisant Drush

1. Pour modifier le message affiché lorsque le site est en mode maintenance, suivre les étapes ci-dessus concernant l'interface utilisateur.
1. Lancer les commandes Drush suivantes pour activer le mode maintenance et vider
    le cache :
    ```text
    drush config:set system.maintenance message "remarque facultative" -y
    drush state:set system.maintenance_mode 1 --input-format=integer
    drush cache:rebuild
    ```
1. Lancer les commandes Drush suivantes pour désactiver le mode maintenace et
    vider le cache :
    ```text
    drush state:set system.maintenance_mode 0 --input-format=integer
    drush cache:rebuild
    ```

    Après avoir lancé l'un ou l'autre ensemble de commandes, vérifier que votre site
    est en mode maintenance ou hors du mode maintenance en visitant le site avec un
    navigateur depuis lequel vous n'êtes pas connecté·e.

## Pour approfondir

* [security-update-core](./security-update-core.md)
* [security-update-theme](./security-update-theme.md)
* [security-update-module](./security-update-module.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/IQbqQs5h03Q" title="Enabling and Disabling Maintenance Mode" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Écrit et modifié par [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Jojy Alphonso](https://www.drupal.org/u/jojyja) de
[Red Crackle](http://redcrackle.com), et
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Traduit par
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
