---
title: "Assigner un auteur au contenu"
description: "Comment assigner la paternité d'un contenu à un compte utilisateur."
id: "user-content"
translation_key: "user-content"
source_locale: "fr"
---
## Objectif { #user-content }

Assigner les éléments de contenu de type vendeur "Ferme joyeuse et doux miel"
aux comptes utilisateurs des vendeurs correspondants, afin qu'ils puissent
modifier leurs propres profils de vendeurs sur le site.
## Prérequis

* [user-concept](./user-concept.md)
## Prérequis du site

* Le type de contenu vendeur doit exister, et votre site doit avoir au moins
deux éléments de contenu de type vendeur. Consulter [structure-content-type](./structure-content-type.md),
[structure-fields](./structure-fields.md), et [content-create](./content-create.md).
* Les comptes utilisateurs doivent exister pour au moins deux vendeurs.
Consulter [user-new-user](./user-new-user.md).
## Étapes

1. Dans le menu d'administration _Gérer_, aller à _Contenu_ (_admin/content_).
1. Localiser le contenu de type vendeur "Ferme joyeuse" dans la liste. S'il n'est
    pas immédiatement visible, vous pouvez filtrer la liste selon le _statut de
    publication_, _type de contenu_ (vendeur), _titre_ ou _langue_. Cliquer sur
    _Modifier_ pour le contenu de type vendeur auquel vous souhaitez assigner un
    auteur.
1. Dans _Informations de publication_, taper le début du nom d'utilisateur du
    vendeur dans le champ _Écrit par_. Le champ liste les noms d'utilisateurs
    correspondants. Sélectionner le nom d'utilisateur du vendeur dans la liste.
    ![Assigner un auteur à un élement de contenu de type vendeur](/images/user-content.webp)
1. Cliquer sur _Enregistrer_.
1. Une notification indiquant que le contenu de type vendeur a été mis à jour
    s'affiche.
    ![L'élement de contenu de type vendeur a été mis à jour](/images/user-content_updated.webp)
1. Suivre ces étapes pour assigner le contenu de type vendeur "Doux miel" au
    compte d'utilisateur Doux miel.

## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/yx9u2SCgono" title="Assigning Authors to Content" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Écrit par [Diána Lakatos](https://www.drupal.org/u/dianalakatos) de
[Pronovix](https://pronovix.com/).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
