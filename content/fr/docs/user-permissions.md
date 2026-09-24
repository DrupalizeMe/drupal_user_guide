---
title: "Attribuer des droits à un rôle"
description: "Comment attribuer des droits à un rôle."
id: "user-permissions"
translation_key: "user-permissions"
source_locale: "fr"
---
## Objectif { #user-permissions }

Modifier les droits pour le rôle Vendeur pour que les utilisateurs puissent
créer, modifier et supprimer du contenu de type Recette et Vendeur, mettre en
forme le contenu, et rentrer en contact.
## Prérequis

* [user-concept](./user-concept.md)
## Prérequis du site

Le rôle Vendeur doit exister sur votre site. Consulter [user-new-role](./user-new-role.md).
## Étapes

1. Dans le menu d'administration _Gérer_, aller à _Personnes_ > _Rôles_
    (_admin/people/roles_). La page _Rôles_ apparaît.
1. Cliquer sur _Modifier les droits_ dans le bouton déroulant du rôle Vendeur. La
    page _Modifier le rôle_ apparaît ; vous pouvez voir toutes les actions
    disponibles pour le site comme, par exemple, _Poster des commentaires_ ou
    _Utiliser la recherche avancée_. Les droits disponibles dépendent des modules
    qui sont installés sur le site. Noter que certains droits peuvent avoir des
    conséquences sur la sécurité. Soyez prudent lorsque vous attribuez des
    droits aux rôles.
1. Cocher les cases des droits suivants, listés par module :
    <table>
      <thead>
        <tr>
          <th>Module</th>
          <th>Droit</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Contact</td>
          <td>Utiliser les formulaires de contact personnels des utilisateurs</td>
        </tr>
        <tr>
          <td>Filter</td>
          <td>Utiliser le format de texte Restricted HTML</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Recette : Créer un nouveau contenu</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Recette : Modifier son propre contenu</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Recette : Supprimer son propre contenu</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Vendeur : Modifier son propre contenu</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/user-permissions-check-permissions.webp" alt="Accorder aux utilisateurs ayant le rôle Vendeur les droits de créer, supprimer et modifier des recettes" width="100%" />

1. Cliquer sur _Enregistrer les droits d'accès_. Un message indiquant que vos
    modifications ont été enregistrées apparaît.
    ![Message de confirmation après la mise à jour des droits](/images/user-permissions-save-permissions.webp)

## Améliorer votre compréhension

* Connectez-vous comme un des utilisateurs que vous avez créés dans
[user-new-user](./user-new-user.md). Vérifier que vous avez les droits nécessaires.
* [user-roles](./user-roles.md)
## Concepts liés

[user-admin-account](./user-admin-account.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/IlVh9f4BHVw" title="Assigning Permissions to a Role" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Pour aller plus loin

[_Drupal.org_ community documentation page "Managing Users"](https://www.drupal.org/docs/7/managing-users)

*Attributions*

Adapté et édité par [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Brian Emery](https://www.drupal.org/u/bemery987),
[Jojy Alphonso](https://www.drupal.org/u/jojyja) de http://redcrackle.com[Red
Crackle] et [Joe Shindelar](https://www.drupal.org/u/eojthebrave) de
[Drupalize.Me](https://drupalize.me) à partir de
["User Roles"](https://www.drupal.org/docs/7/managing-users/user-roles),
copyright 2000-2026 contributeurs individuels à
[la documentation de la communauté Drupal](https://www.drupal.org/documentation).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
