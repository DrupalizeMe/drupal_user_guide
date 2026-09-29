---
title: "Ajouter une langue"
description: "Comment ajouter une langue, installer les modules nécessaires, et activer le bloc _Sélecteur de langue_."
id: "language-add"
translation_key: "language-add"
source_locale: "fr"
---
## Objectif { #language-add }

Ajouter une ou plusieurs langues à votre site et définir laquelle est utilisée par défaut.
## Prérequis

[language-concept](./language-concept.md)
## Étapes

1. Installer les quatre modules multilingues du cœur (Language, Interface
    Translation, Content Translation et Configuration Translation), en suivant les
    étapes de [config-install](./config-install.md).
1. Dans le menu d'administration _Gérer_, naviguer vers _Configuration_ >
    _Régionalisation et langue_ > _Langues_ (_admin/config/regional/language_).
1. Cliquer sur _Ajouter une langue_.
1. Sélectionner _Anglais_ (ou la langue de votre choix) dans le menu déroulant
    _Nom de la langue_. Cliquer sur _Ajouter une langue_. Après un peu d'attente le
    temps que les traductions finissent d'être téléchargées, vous serez redirigé
    vers la page _Langues_, avec un message de confirmation. La nouvelle langue
    apparaît dans la liste.
    <img src="/images/language-add-list.png" alt="Liste des langues disponibles sur le site web" width="100%" />
1. Suivre les étapes dans [block-place](./block-place.md) pour placer le bloc _Sélecteur de
    langue_ dans la région _Sidebar second_. Cela permettra aux visiteurs du site de
    changer de langue, une fois que votre site aura été traduit.

## Pour approfondir

* [language-content-config](./language-content-config.md)
* [language-content-translate](./language-content-translate.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/8Yu0G4gJ0f4" title="Adding a Language" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Pour aller plus loin

[_Drupal.org_ community documentation page "Multilingual guide"](https://www.drupal.org/docs/multilingual-guide)

*Attributions*

Écrit et modifié par [Leila Tite](https://www.drupal.org/u/yrvyn),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) et
[Boris Doesborg](https://www.drupal.org/u/batigolix). Traduit par
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
