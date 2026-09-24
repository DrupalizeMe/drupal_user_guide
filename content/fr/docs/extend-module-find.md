---
title: "Trouver des modules"
description: "Comment chercher et évaluer des modules sur Drupal.org."
id: "extend-module-find"
translation_key: "extend-module-find"
source_locale: "fr"
---
## Objectif { #extend-module-find }

Trouver et évaluer des modules sur _Drupal.org_.
## Prérequis

* [understanding-drupal](./understanding-drupal.md)
* [understanding-modules](./understanding-modules.md)
## Étapes

1. Aller sur [_Drupal.org_](https://www.drupal.org), et naviguer vers _Download &
    Extend_ > _Modules_ (https://www.drupal.org/project/project_module).
1. Filtrer votre recherche en utilisant les catégories sur la page de recherche
    de modules. Remplir les champs comme indiqué ci-dessous.
    <table>
      <thead>
        <tr>
          <th>Nom du champ</th>
          <th>Explication</th>
          <th>Valeur d'exemple</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Maintenance status</td>
          <td>Ce module est-il activement maintenu ?</td>
          <td>Actively maintained</td>
        </tr>
        <tr>
          <td>Development status</td>
          <td>Quel type de développement le module devrait-il subir ?</td>
          <td>Any</td>
        </tr>
        <tr>
          <td>Module categories</td>
          <td>Le domaine d'utilisation du module.</td>
          <td>Administration</td>
        </tr>
        <tr>
          <td>Core compatibility</td>
          <td>La version du cœur du logiciel avec laquelle le module est compatible.</td>
          <td>9.x</td>
        </tr>
        <tr>
          <td>Status</td>
          <td>Les _sandbox projects_ sont des projets expérimentaux. Les _full projects_ sont déjà passés par un processus d'approbation, mais peuvent être toujours en développement.</td>
          <td>Full projects</td>
        </tr>
        <tr>
          <td>Stability</td>
          <td>Le mainteneur a-t-il créé une version prête pour la production ?</td>
          <td>Has a supported stable release.</td>
        </tr>
        <tr>
          <td>Security advisory coverage</td>
          <td>Le mainteneur du projet a-t-il accepté de suivre les procédures de l'équipe de sécurité de Drupal ?</td>
          <td>Has security advisory coverage</td>
        </tr>
        <tr>
          <td>Search modules</td>
          <td>Rechercher _Admin Toolbar_, un module qui sera couvert en détail plus tard. Alternativement, vous pouvez aussi laisser ce champ vide si vous n'êtes pas sûr du module que vous cherchez.</td>
          <td>Admin Toolbar</td>
        </tr>
        <tr>
          <td>Sort by</td>
          <td>Trier vos résultats de recherche selon des critères comme _Most installed_ (modules populaires que beaucoup de sites utilisent) ou _dernière publication_ (date de la dernière version publiée).</td>
          <td>Most installed</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    ![Filtres sur la page de recherche de modules sur _Drupal.org_](/images/extend-module-find_module_finder.webp)

1. Cliquer sur _Search_. Les résultats de recherche apparaissent.
    ![Page de résultats de recherche sur _Drupal.org_](/images/extend-module-find_search_results.webp)
1. Pour aller plus loin dans l'évaluation d'un module, cliquer sur son titre dans
    la liste des résultats de recherche pour visiter sa page de projet.

    Certains aspects auxquels prêter attention  pour évaluer des modules :

    * Description du projet : la description du module sur sa page de projet devrait
    être claire et utile. Vous devriez vous faire une idée de ses fonctionnalités et
    des prérequis.
    * Information du projet : il  pourrait y avoir des avertissements dans cette
    zone de la page, par exemple si ce module n'est plus développé, ou s'il n'est
    pas couvert par la politique d'alerte de sécurité.
    * Informations du projet > Installations et téléchargement signalés : vous voyez
    combien de personnes ont téléchargé ce module et combien de sites l'utilisent. S'il
    n'est utilisé que sur quelques sites, il pourrait s'agir d'une solution unique
    dont peu de personnes ont besoin, cela pourrait aussi être un signe d'avertissement, 
    vous ne devriez peut-être pas l'utiliser non plus.
    * Mainteneurs : à quand remonte la dernière révision (la dernière fois que
    quelqu'un a mis à jour quelque chose sur le module) ou la dernière publication
    (nouvelle version) ? Si le projet n'a que quelques tickets ouverts, une longue
    période sans révisions ni publications pourrait être acceptables, mais s'il y a
    beaucoup de tickets ouverts et aucune révision ni publication, cela pourrait
    être un indice que ce module a été abandonné.
    * Tickets : voir s'il y a des tickets ouverts, des problèmes potentiels avec ce
    module. Vérifier les statistiques pour voir dans quelle mesure les tickets sont
    traités régulièrement.
    * Documentation, ressources : vérifier si le module a un documentation ou un
    fichier README, qui peut aider pour l'installer, le configurer, l'explorer et le
    tester.
    ![Informations à examiner sur la page de projet pour évaluer un module](/images/extend-module-find_project_info.webp)

## Pour approfondir

[extend-module-install](./extend-module-install.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/G-XUuSj9xYA" title="Finding Modules" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Écrit par [Diána Lakatos](https://www.drupal.org/u/dianalakatos) de
[Pronovix](https://pronovix.com//). Traduit par
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
