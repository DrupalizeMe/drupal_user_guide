---
title: "Traduction de contenu"
description: "Comment traduire une page dans une autre langue."
id: "language-content-translate"
translation_key: "language-content-translate"
source_locale: "fr"
---
## Objectif { #language-content-translate }

Traduire la page d'accueil en anglais.
## Prérequis

[language-concept](./language-concept.md)
## Prérequis du site

* L'élément de contenu Accueil doit exister. Consulter [content-create](./content-create.md).
* Le module du cœur Content Translation doit être installé et votre site doit
avoir au moins deux langues. Consulter [language-add](./language-add.md).
* Le type de contenu _Page de base_ doit être configuré pour être traduisible.
Consulter [language-content-config](./language-content-config.md).
## Étapes

1. Dans le menu d'administration _Gérer_, naviguer vers _Contenu_
    (_admin/content_).
1. Localiser la page d'accueil. Saisir "Accueil" dans le champ titre pour trouver
    cette page.
1. Sélectionner _Traduire_ dans le bouton déroulant de la ligne du contenu
    Accueil. La page _Traductions d'Accueil_ s'affiche.
1. Cliquer _Insérer_ à la ligne _anglais_.
    <img src="/images/language-content-translate-add.webp" alt="Insertion d'une traduction de contenu" width="100%" />
1. Remarquer que l'interface utilisateur est passée en anglais. Pour repasser en
    français, suprimer la première occurrence de _en_ dans l'URL du navigateur. Par
    exemple, si votre URL ressemble à
    _example.com/en/node/5/translations/add/en/es_, suprimer le _en_ qui suit
    _example.com_.
1. Remplir les champs comme suit ci-dessous.
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
          <td>Titre</td>
          <td>Titre de page traduit</td>
          <td>Home</td>
        </tr>
        <tr>
          <td>Corps</td>
          <td>Corps de la page traduit</td>
          <td></td>
        </tr>
        <tr>
          <td>paramètres chemin URL > alias URL</td>
          <td>adresse traduite de la page web</td>
          <td>home</td>
        </tr>
      </tbody>
    </table>
1. Cliquer sur _Enregistrer et publier (cette traduction)_.
1. Aller à la page accueil de votre site pour visualiser la page qui vient d'être
    traduite.

## Améliorer votre compréhension

* Suivre les étapes ci-dessus pour traduire d'autres contenus sur votre site.
* [language-config-translate](./language-config-translate.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/TOalcUYD5zM" title="Translating Content" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Écrit par [Boris Doesborg](https://www.drupal.org/u/batigolix).
Traduit par [Lydie Parisot](https://www.drupal.org/u/onewomanbiz) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
