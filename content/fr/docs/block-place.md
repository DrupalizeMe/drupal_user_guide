---
title: "Placer un bloc dans une région"
description: "Comment placer un bloc dans une région."
id: "block-place"
translation_key: "block-place"
source_locale: "fr"
---
## Objectif { #block-place }

Placer le bloc Horaires d'ouverture et localisation dans la barre de menu du
site.
## Prérequis

[block-concept](./block-concept.md)
## Prérequis du site

* Le thème du coeur Olivero doit être installé et utilisé par défaut.
Consulter [config-theme](./config-theme.md).
* Le bloc Horaires d'ouverture et localisation doit exister. Consulter
[block-create-custom](./block-create-custom.md).
## Étapes

1. Dans le menu d'administration _Gérer_, aller à _Structure_ > _Mise en page des
    blocs_ (_admin/structure/block_). La page _Mise en page des Blocs_ apparaît,
    listant les régions du thème.
1. Vous asssurer dans le deuxième onglet que le thème du coeur Olivero est
    sélectionné. Le placement des blocs est défini par thème.
1. Localiser la région _Deuxième barre de navigation_ dans la liste et cliquer
    sur _Placer un bloc_ à côté d'elle. La fenêtre de _Placer un bloc_ apparaît,
    listant tous les blocs.
1. Trouver le bloc Horaires d'ouvertures et localisation et cliquer sur _Placer
    le bloc_ à côté de lui. La fenêtre _Configurer le bloc_ apparaît. Remplir les
    champs comme indiqué ci-dessous.
    <table>
      <thead>
        <tr>
          <th>Nom du champ</th>
          <th>Explication</th>
          <th>Exemple de valeur</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Titre</td>
          <td>Titre à afficher pour le bloc</td>
          <td>Horaires et localisation</td>
        </tr>
        <tr>
          <td>Afficher le titre</td>
          <td>Si le titre doit être affiché avec le bloc ou non</td>
          <td>Coché</td>
        </tr>
        <tr>
          <td>Région</td>
          <td>Dans quelle région du thème l'afficher</td>
          <td>Deuxième barre de navigation</td>
        </tr>
      </tbody>
    </table>

    Vous pouvez aussi masquer ou afficher le bloc sur des pages spécifiques. Dans le
    cas du site du marché fermier, ne choisir aucune des options de configuration
    car vous voulez que le bloc soit affiché partout.
    <img src="/images/block-place-configure-block.png" alt="Page de configuration des blocs" width="100%" />

1. Cliquer sur _Enregistrer le bloc_. La page _Mise en page des blocs_ apparaît.
    Vous pouvez faire glisser l'ancre en forme de croix des blocs pour changer leur
    ordre d'apparition dans chaque région. Alternativement, vous pouvez cliquer sur
    _Montrer les poids des lignes_ en tête du tableau pour sélectionner des poids
    numériques (les blocs ayant des poids algébriques moindres seront affichés en
    premier).
1. Vérifier que le bloc Horaires d'ouverture et localisation est listé dans la
    région _Deuxième barre de navigation_, et cliquer sur _Enregistrer les blocs_.
    Le bloc a été placé dans la deuxième barre de navigation de toutes les pages qui
    utilisent le thème du cœur Olivero.
    <img src="/images/block-place-sidebar.png" alt="Page comprenant un bloc placé dans la deuxième barre de navigation" width="100%" />

## Améliorer votre compréhension

* Supprimer le block _Propulsé par Drupal_ de la région _Cinquième pied de page_
en cliquant sur _Désactiver_ ou _Retirer_ dans le bouton déroulant _Opérations_.
Cliquer sur _Désactiver_ vous permettra d'activer facilement le bloc plus tard
avec la même configuration ; si vous cliquez sur _Retirer_ et que vous voulez
replacer le bloc, il vous faudra suivre les étapes décrites dans cette page pour
qu'il apparaisse à nouveau dans une région.
* Placer le bloc _Connexion utilisateur_ dans une région.
* Si vous ne voyez pas les effets de ces changements sur votre site, vous devez
vider les caches. Consulter [prevent-cache-clear](./prevent-cache-clear.md).
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/iWW7Ja5p0hA" title="Placing a Block in a Region" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Écrit et modifié par [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) et
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) de
[Drupalize.Me](https://drupalize.me).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
