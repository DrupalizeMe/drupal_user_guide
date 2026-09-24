---
title: "Lancement de l'installeur interactif"
description: "Comment utiliser l'installeur interactif pour installer le cœur du logiciel."
id: "install-run"
translation_key: "install-run"
source_locale: "fr"
---
## Objectif { #install-run }

Installer le cœur du logiciel et créer le compte administateur en lançant
l'installeur fourni.
## Prérequis du site

[install-prepare](./install-prepare.md)
## Étapes

1. Si vous utilisez une installation en un clic de votre hébergeur ou site de
    démo, vous verrez très probablement tout ou partie des écrans suivants comme
    faisant partie du processus d'installation. Si vous transférez les fichiers du
    cœur manuellement, pour démarrer l'installeur, ouvrir un navigateur, et visiter
    l'URL que vous avez configurée pour votre hébergement.
1. Sélectionner une langue sur la première page de l'installeur ; par exemple, le
    français. Vous pouvez choisir n'importe quelle autre langue depuis la liste.
    Les fichiers de langues pour la langue choisie seront téléchargés et installés
    pour que le reste du processus d'installation puisse s'achever dans la langue
    choisie. Après avoir choisi une langue, cliquer sur _Save and continue_.
    <img src="/images/install-run-1.webp" alt="Choisir une langue" width="100%" />
1. Sélectionner un profil d'installation. Les profils d'installations fournissent
    des fonctionnalités aux site pour un type spécifique de site en un seul
    téléchargement contenant le cœur du logiciel, des modules communautaires, des
    thèmes et une configuration prédéfinie. Le cœur contient deux profils
    d'installation. Sélectionner le profil d'installation du cœur Standard. Cliquer
    sur _Sauvegarder et continuer_.
    <img src="/images/install-run-2.webp" alt="Choix d'un profil d'installation" width="100%" />
1. À la prochaine étape, l'installeur vérifie que votre système fournit les
    prérequis nécessaires. Si ce n'est pas le cas, vous verrez un récapitulatif de
    ce qu'il est nécessaire de corriger afin de continuer. Si les prérequis sont
    bons, l'installeur affichera automatiquement l'étape suivante. 
1. Fournir les détails de la base de données que vous avez créée dans le chapitre
    [install-prepare](./install-prepare.md). Puis cliquer sur _Sauvegarder et continuer_. 
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
          <td>Nom de la base de données</td>
          <td>Le nom personnalisé donné à votre base de données</td>
          <td>drupal</td>
        </tr>
        <tr>
          <td>Nom de l'utilisateur de la base de données</td>
          <td>Nom d'utilisateur créé</td>
          <td>databaseUsername</td>
        </tr>
        <tr>
          <td>Mot de passe de l'utilisateur de la base de données</td>
          <td>Mot de passe choisi</td>
          <td>************</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/install-run-3.webp" alt="Formulaire de configuration de la base de données" width="100%" />

1. L'étape suivante affichera une barre de progression sous l'en-tête
    _Installation Drupal_. Lorsque l'installeur a fini, il passera automatiquement à
    l'étape suivante.
    <img src="/images/install-run-4.webp" alt="Barre de progression de l'installation" width="100%" />
1. La dernière étape consiste à configurer quelques informations basiques pour
    votre nouveau site. Noter que le compte utilisateur créé à cette étape est le
    compte administrateur du site. Consulter [user-admin-account](./user-admin-account.md) pour des
    informations importantes à propos de ce compte unique. Vous pouvez nommer ce
    compte "admin", et vous assurer de définir un mot de passe sûr et unique. 
    Remplir le formulaire avec les informations suivantes :
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
          <td>Nom du site</td>
          <td>Le nom choisi pour le site</td>
          <td>Marché fermier d'Anytown</td>
        </tr>
        <tr>
          <td>Adresse électronique du site</td>
          <td>L'adresse électronique associée au site</td>
          <td>info@exemple.com</td>
        </tr>
        <tr>
          <td>Nom d'utilisateur</td>
          <td>L'identifiant de l'utilisateur</td>
          <td>admin</td>
        </tr>
        <tr>
          <td>Mot de passe</td>
          <td>Le mot de passe choisi</td>
          <td>************</td>
        </tr>
        <tr>
          <td>Confirmer le mot de passe</td>
          <td>Répéter le mot de passe</td>
          <td>************</td>
        </tr>
        <tr>
          <td>Adresse électronique</td>
          <td>L'adresse électronique de l'utilisateur</td>
          <td>admin@exemple.com</td>
        </tr>
      </tbody>
    </table>

    Les champs restants peuvent être laissés avec leurs valeurs par défaut.
    <img src="/images/install-run-5.webp" alt="Formulaire de configuration" width="100%" />

1. Cliquer sur _Sauvegarder et continuer_.
1. Vous êtes redirigé(e) vers la page d'accueil de votre nouveau site et vous
    devriez voir le message _Félicitations, vous avez installé Drupal!_ affiché en
    haut de la page.
    <img src="/images/install-run-6.webp" alt="Installation réussie" width="100%" />
1. Vous pourriez avoir vu un avertissement à l'étape _Configuration_ à propos des
    permissions sur les fichiers, et vous pourriez continuer à voir cet
    avertissement jusqu'à ce que ces permissions soient corrigées. Pour éviter cet
    avertissement et sécuriser votre site, changer les permissions sur le répertoire
    _sites/default_ et le fichier _sites/default/settings.php_ de manière à ce
    qu'ils ne soient accessibles qu'en lecture seule (il peut être nécessaire de
    consulter la documentation de son hébergeur pour connaître la procédure à
    suivre).

## Améliorer votre compréhension

Vérifier le tableau de bord d'administration pour voir s'il y a des problèmes
avec l'installation. Consulter [prevent-status](./prevent-status.md).
## Concepts liés

* [install-dev-sites](./install-dev-sites.md)
* [install-tools](./install-tools.md)
## Pour aller plus loin (en anglais)

[Page de documentation de la communauté sur _Drupal.org_ "Create a database"](https://www.drupal.org/docs/installing-drupal/step-3-create-a-database)

*Attributions*

Écrit et modifié par [Joe Shindelar](https://www.drupal.org/u/eojthebrave) de
[Drupalize.Me](https://drupalize.me),
et [Jojy Alphonso](https://www.drupal.org/u/jojyja) de
[Red Crackle](http://redcrackle.com).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
