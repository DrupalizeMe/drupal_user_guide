---
title: "Créer un compte utilisateur"
description: "Comment créer un compte utilisateur."
id: "user-new-user"
translation_key: "user-new-user"
source_locale: "fr"
---
## Objectif { #user-new-user }

Créer les comptes utilisateur Vendeur pour les vendeurs Doux Miel et Ferme Joyeuse.
## Prérequis

* [user-concept](./user-concept.md)
* [user-admin-account](./user-admin-account.md)
* [user-new-role](./user-new-role.md)
## Prérequis du site

Le rôle Vendeur doit exister sur votre site. Voir [user-new-role](./user-new-role.md).
## Étapes

1. Dans le menu d'administration _Gérer_, aller à _Personnes_ (_admin/people_).
1. Cliquer sur _Ajouter un utilisateur_.
    <img src="/images/user-new-user_form.png" alt="Formulaire de création d'un nouveau compte utilisateur" width="100%" />
1. Remplir les champs du formulaire, cf. tableau ci-dessous.
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
          <td>Adresse électronique</td>
          <td>Une adresse électronique valide pour le vendeur. Tous les courriels envoyés par le système le seront à cette adresse. L'adresse électronique n'est pas rendue publique.</td>
          <td>honey@example.com</td>
          <td>Nom d’utilisateur</td>
          <td>Un nom d'utilisateur pour le vendeur, qu'il utilisera pour</td>
        </tr>
        <tr>
          <td>Mot de passe</td>
          <td>Un mot de passe que le vendeur utilisera pour se connecter au site. Vous pouvez voir le niveau de sécurité du mot de passe sur la jauge de _Sécurité du mot de passe_. Des astuces pour le rendre plus sûr sont proposées.</td>
          <td>(Choisir un mot de passe sûr)</td>
        </tr>
        <tr>
          <td>Confirmer le mot de passe</td>
          <td>Saisir le même mot de passe pour éviter toute faute de frappe.</td>
          <td>(Répéter le mot de passe)</td>
          <td>Statut</td>
          <td>Définir le statut du compte utilisateur. Les utilisateurs _bloqués_ ne</td>
        </tr>
        <tr>
          <td>Rôles</td>
          <td>Définir le rôle du compte utilisateur.</td>
          <td>Vendeur</td>
        </tr>
        <tr>
          <td>Prévenir l'utilisateur du nouveau compte</td>
          <td>Envoyer ou non une notification à l'adresse électronique du vendeur.</td>
          <td>Coché</td>
          <td>Image</td>
          <td>Cliquer sur _Parcourir_ et sélectionner une image à télécharger. Prêter attention aux limites de taille.</td>
          <td>Photo du vendeur</td>
        </tr>
        <tr>
          <td>Paramètres de Contact</td>
          <td>Activer ou désactiver l'affichage d'un formulaire de contact pour le compte.</td>
          <td>Coché</td>
        </tr>
      </tbody>
    </table>
1. Cliquer sur _Créer le nouveau compte_. Une notification à propos de la création
    du compte utilisateur s'affiche.
    <img src="/images/user-new-user-created.png" alt="Un nouveau compte utilisateur a été créé" width="100%" />
1. Créer un second compte vendeur pour la Ferme Joyeuse en suivant les étapes précédentes.

## Améliorer votre compréhension

Créer un compte utilisateur pour vous-même.
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/2UtEtY9Cgaw" title="Creating a User Account" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Ecrit par [Diána Lakatos](https://www.drupal.org/u/dianalakatos)
de [Pronovix](https://pronovix.com/).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
