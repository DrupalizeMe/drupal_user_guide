---
title: "Configurer les formats de texte et les éditeurs"
description: "Comment modifier un format de texte et la configuration de son éditeur."
id: "structure-text-format-config"
translation_key: "structure-text-format-config"
source_locale: "fr"
---
## Objectif { #structure-text-format-config }

Ajouter une balise de règle horizontale au format de texte _HTML Simple_, et un
bouton correspondant à la configuration de son éditeur.
## Prérequis

[structure-text-formats](./structure-text-formats.md)
## Prérequis du site

* Les modules du coeur Filter, Editor et CKEditor doivent être installés. Ils
sont installés sur votre site lorsque vous l'installez avec le profil
d'installation Standard du cœur.
* Le format de texte _HTML Simple_ doit exister. Il est créé sur votre site
lorsque vous l'installez avec le profil d'installation Standard du cœur.
## Étapes

1. Dans le menu d'administration _Gérer_, aller à _Configuration_ > _Rédaction
    de contenu_ > _Formats de texte et éditeurs_ (_admin/config/content/formats_).
    La page _Formats de texte et éditeurs_ apparaît.
1. Cliquer sur _Configurer_ pour le format de texte _HTML Simple_. La page
    _HTML Simple_ apparaît.
1. Noter que _CKEditor_ est sélectionné dans le champ _Editeur de texte_. Cela
    vous permet de configurer la barre d'outils de l'éditeur.
1. Faire glisser le bouton _ligne horizontale_ depuis _Boutons disponibles_ vers
    la _Barre d'outils active_. Les éléments de la barre d'outils peuvent être
    groupés visuellement en utilisant un séparateur vertical. Au lieu de
    glisser/déplacer, vous pouvez utiliser la touche tabulation pour sélectionner
    des boutons, puis les déplacer en utilisant les flèches de votre clavier.
    <img src="/images/structure-text-format-config-editor-config.webp" alt="Configurer l'éditeur" width="100%" />
1. Noter que vous pouvez modifier l'_ordre de traitement des filtres_.
1. Dans le champ _Balises HTML autorisées_, ajouter '&lt;hr&gt;' à ceux déjà présents.
    <img src="/images/structure-text-format-config-allowed-html.webp" alt="Configurer les balises HTML" width="100%" />
1. Cliquer sur _Enregistrer la configuration_. Vous êtes alors redirigé(e) vers
    la page _Formats de texte et éditeur_. Un message indiquant que le format de
    texte a été mis à jour s'affiche.
    ![Message de confirmation après configuration du format de texte](/images/structure-text-format-config-summary.webp)

## Améliorer votre compréhension

Si vous ne voyez pas les effets des modifications sur votre site, pourriez voir
besoin de vider les caches. Voir [prevent-cache-clear](./prevent-cache-clear.md).
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/T9RD6PTxe9U" title="Configuring Text Formats and Editors" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Écrit et édité par [Boris Doesborg](https://www.drupal.org/u/batigolix) et
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) de
[Drupalize.Me](https://drupalize.me).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
