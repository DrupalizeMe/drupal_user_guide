---
title: "Modifier les informations basiques du site"
description: "Comment modifier les informations basiques du site (nom du site, slogan, et fuseau horaire par défaut)."
id: "config-basic"
translation_key: "config-basic"
source_locale: "fr"
---
## Objectif { #config-basic }

Modifier les informations basiques du site comme le _nom du site_, le _slogan_,
et le _fuseau horaire par défaut_.
## Prérequis

[config-overview](./config-overview.md)
## Étapes
### Configurer les informations basiques du site

1. Dans le menu d'administration _Gérer_, naviguer dans _Configuration_ >
    _Système_ > _Informations du site_ (_admin/config/system/site-information_) pour
    changer le _nom du site_, le _slogan_, l'_adresse électronique_
    d'administration, ou le chemin de la _page d'accueil par défaut_.
1. Remplir les champs disponibles comme approprié pour votre site.
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
          <td>Nom du site</td>
          <td>Utilisé pour identifier le site et affiché dans les navigateurs</td>
          <td>Marché fermier d'Anytown</td>
          <td>Slogan</td>
          <td>Utilisé différemment selon le thème de votre site. Non affiché par</td>
        </tr>
        <tr>
          <td>Slogan</td>
          <td>Généralement affiché sur tout le site</td>
          <td>Aliments frais de la ferme</td>
        </tr>
        <tr>
          <td>Adresse électronique</td>
          <td>Utilisé pour l'adresse d'_expéditeur_ dans les courriels automatiques (inscription, réinitialisation du mot de passe, etc)</td>
          <td>info@example.com</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    ![Informations du site](/images/config-basic-SiteInfo.webp)

1. Après la modification des champs, cliquer sur _Enregistrer la configuration_
    pour voir les changements appliqués sur le site.

### Configurer les paramètres régionaux par défaut

1. Dans le menu d'administration _Gérer_, naviguer dans _Configuration_ >
    _Régionalisation et Langue_ > _Paramètres régionaux_
    (_admin/config/regional/settings_).
1. Remplir le formulaire comme suit :
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
          <td>Localisation > Pays par défaut</td>
          <td>Le pays principal de votre site</td>
          <td>États-Unis</td>
        </tr>
        <tr>
          <td>Localisation > Premier jour de la semaine</td>
          <td>Le jour marquant le début de la semaine sur les calendriers</td>
          <td>Dimanche</td>
          <td>Fuseaux horaire > Fuseau horaire par défaut</td>
          <td>Le fuseau horaire principal de votre  site</td>
          <td>America > Los Angeles</td>
        </tr>
        <tr>
          <td>Fuseaux horaires > Les utilisateurs peuvent définir leur propre fuseau  horaire</td>
          <td>Si les utilisateurs connectés peuvent choisir un fuseau horaire différent pour l'affichage des dates et des heures sur le site</td>
          <td>Décoché</td>
        </tr>
      </tbody>
    </table>

    ![Fuseaux horaires](/images/config-basic-TimeZone.webp)

1. Après avoir modifié les champs, cliquer sur _Enregistrer la configuration_
    pour voir les changements appliqués sur le site.

## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/oDMCQ1cDYOI" title="Editing Basic Site Information" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Pour aller plus loin

[page de documentation communautaire de _Drupal.org_ "Getting started with Drupal administration"](https://www.drupal.org/docs/administering-a-drupal-site/getting-started-with-drupal-administration)

*Attributions*

Ecrit et modifié par [Sree Veturi](https://www.drupal.org/u/sree),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) de
[erdfisch](https://erdfisch.de), [Antje Lorch](https://www.drupal.org/u/ifrik) et
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) de
[Drupalize.Me](https://drupalize.me).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
