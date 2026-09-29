---
title: "Changer les rôles d'un utilisateur"
description: "Comment changer les rôles d'un utilisateur ou en ajouter."
id: "user-roles"
translation_key: "user-roles"
source_locale: "fr"
---
## Objectif { #user-roles }

Changer les rôles d'un utilisateur donné ou en ajouter, en modifiant un seul
utilisateur ou en appliquant une opération en masse.
## Prérequis

[user-concept](./user-concept.md)
## Prérequis du site

Le compte d'utilisateur que vous voulez mettre et à jour, et le rôle que vous
souhaitez lui attribuer, doivent déjà exister. Consulter [user-new-user](./user-new-user.md),
[user-new-role](./user-new-role.md) et [user-permissions](./user-permissions.md).
## Étapes
### Mettre à jour les rôles en modifiant un seul utilisateur

1. Dans le menu d'administration _Gérer_, naviguer vers _Personnes_
    (_admin/people_).
1. Localiser le compte de l'utilisateur 1 (nommé "admin") pour lui attribuer le
    rôle _Administrator_. S'il n'est pas immédiatement visible, utiliser le filtre
    _Nom ou courriel contenant_, ou d'autres filtres, pour restreindre la
    liste.
1. Cliquer sur _Modifier_ pour modifier le compte d'utilisateur.
    <img src="/images/user-roles_people-list.png" alt="Page Personnes" width="100%" />
1. Sur la page de modification, faire défiler jusqu'à la section _Rôles_. Cocher
    le rôle _Administrator_ pour ce compte d'utilisateur.
    <img src="/images/user-roles_person-edit.png" alt="Section rôle sur la page de modification" width="141px" />
1. Cliquer sur _Enregistrer_ pour mettre à jour le compte d'utilisateur. Vous
    devriez être redirigé vers la page _Personnes_ et voir un message disant que
    les changements ont été enregistrés.
    ![Message de confirmation](/images/user-roles_message.png)

### Mettre à jour les rôles en utilisant la méthode de modification en masse

1. Si les utilisateurs Happy Farm et Sweet Honey n'avaient pas encore le rôle
    Vendor, voici comment le leur attribuer. Dans le menu d'administration _Gérér_,
    naviguer vers _People_ (_admin/people_).
1. Localiser les comptes d'utilisateurs des marchands _Sweet Honey_ et _Happy
    Farm_, et cocher la case en début de ligne. S'ils ne sont pas immédiatement
    visibles, utiliser le filtre _Nom ou courriel contenant_, ou d'autres filtres,
    pour restreindre la liste.
1. Sélectionner _Ajouter le rôle Vendor au(x) utilisateur(s) sélectionné(s)_ dans
    le menu déroulant _Action_.
    ![Page Personnes avec opération en masse prête](/images/user-roles_bulk.png)
1. Cliquer sur _Appliquer aux éléments sélectionnés_. Vous devriez voir un
    message indiquant que les changements souhaités ont été appliqués.
    ![Message de confirmation](/images/user-roles_message_bulk.png)

## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/hd7Sr3-n9ME" title="Changing a User's Roles" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Écrit par [Chris Dart](https://www.drupal.org/u/chris-dart)
et [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Traduit par
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
