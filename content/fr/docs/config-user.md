---
title: "Configurer les paramètres des comptes utilisateurs"
description: "Comment modifier les paramètres d'inscription d'un compte utilisateur."
id: "config-user"
translation_key: "config-user"
source_locale: "fr"
---
## Objectif { #config-user }

Désactiver la possibilité pour les visiteurs de s'enregistrer sur le site, mais
aussi revoir et/ou modifier les courriels générés par le site pour les
évènements liés aux comptes utilisateurs.
## Prérequis

[config-overview](./config-overview.md)
## Étapes

1. Dans le menu d'administration _Gérer_, naviguer dans _Configuration_ >
    _Personne_ > _Paramètres de compte_ (_admin/config/people/accounts_).
1. Sous _Inscription et annulation_, sélectionner _Administrateurs seulement_
    comme personnes pouvant créer des comptes utilisateurs. Vous pouvez cocher
    _Exiger la vérification du courriel lorsqu'un visiteur crée un compte_ dans le
    cas où vous voudriez changer les paramètres pour les créations de compte plus
    tard.
    ![Inscriptions réalisée uniquement par les administrateurs](/images/config-user_account_reg.webp)
1. Optionnellement, modifier l'adresse électronique par défaut depuis laquelle
    les notifications des comptes utilisateurs seront envoyées depuis votre site du
    marché fermier. Cela vous permettra de garder une adresse électronique séparée
    de celle utilisée par le site en général. Par exemple, cette adresse
    électronique pour les notifications des comptes utilisateurs sera utile pour un
    membre de l'équipe qui communique avec les vendeurs.
    ![Adresse d'expéditeur des notifications par courriel](/images/config-user_from_email.webp)
1. Optionnellement, modifier les modèles de courriels dans la section _Courriels_
    pour personnaliser les courriels automatiques. Il y a plusieurs modèles de
    courriels disponibles avec le cœur. Ils sont prévus pour différentes occasions
    liées aux utilisateurs. Tous peuvent être personnalisés et trois peuvent être
    désactivés via des cases à cocher : activation, blocage et annulation.
    Vous pouvez définir votre propre texte (par exemple, accueillir les nouveaux
    vendeurs dont les comptes viennent juste d'être créés) en modifiant le modèle
    _Bienvenue (nouvel utilisateur créé par un administrateur)_.
    <img src="/images/config-user_email.webp" alt="Notification par courriel à l'occasion d'évènements liés aux comptes utilisateurs" width="100%" />
1. Cliquer sur _Enregistrer la configuration_ pour enregistrer les modifications.

## Améliorer votre compréhension

* [prevent-cache-clear](./prevent-cache-clear.md)
* [user-new-user](./user-new-user.md)
## Concepts liés

Consulter [user-chapter](./index.md#user-chapter) pour plus d'informations sur les comptes utilisateurs
et les permissions.
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/POhQTAX93R8" title="Configuring User Account Settings" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Pour aller plus loin

[Securing your site](https://www.drupal.org/security/secure-configuration) peut vous
aider à adopter une approche de la configuration plus centrée sur la sécurité.

*Attributions*

Écrit et modifié par [Laura Vass](https://www.drupal.org/u/lolk) de
[Pronovix](https://pronovix.com/), et
[Jojy Alphonso](https://www.drupal.org/u/jojyja) de
[Red Crackle](http://redcrackle.com).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
