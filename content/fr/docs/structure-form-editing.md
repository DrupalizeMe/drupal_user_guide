---
title: "Modifier les formulaires de saisie du contenu"
description: "Comment modifier un formulaire de saisie du contenu."
id: "structure-form-editing"
translation_key: "structure-form-editing"
source_locale: "fr"
---
## Objectif { #structure-form-editing }

Modifier le formulaire de Recette pour utiliser un widget différent pour saisir
les termes du champ Ingrédients.
## Prérequis

* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [structure-widgets](./structure-widgets.md)
## Prérequis du site

Le type de contenu Recette doit exister, et il doit avoir un champ référence
vers la taxonomie Ingrédients. Il doit exister au moins un élément de contenu
Vendeur. Voir [structure-content-type](./structure-content-type.md) et [structure-taxonomy-setup](./structure-taxonomy-setup.md).
## Étapes

1. Dans le menu d'administration _Gérer_, aller à _Contenu_ > _Ajouter un
    contenu_ > _ Recette_ (_node/add/recipe_) pour accéder au formulaire de saisie
    du contenu qui est configuré par défaut. Noter que vous devez saisir les
    ingrédients un par un, au lieu d'avoir un format plus compact.
1. Dans le menu d'administration _Gérer_, aller à _Structure_ > _Types de
    contenus_ (_admin/structure/types_). Puis cliquer sur _Gérer l'affichage du
    formulaire_ sur la liste déroulante pour le type de contenu Recette. La page
    _Gérer l'affichage du formulaire_ apparaît.
1. Pour le champ Ingrédients, sélectionner _Autocomplétion (style étiquettes)
    dans la colonne _Widget_.
    <img src="/images/structure-form-editing-manage-form.webp" alt="Gérer le formulaire de recette" width="100%" />
1. Cliquer sur _Enregistrer_.
1. Dans le menu d'administration _Gérer_, aller à _Contenu_ > _Ajouter un
    contenu_ > _Recette_ (_node/add/recipe_) pour vérifier le changement de
    comportement du formulaire de contenu. Le champ Ingrédients est désormais un
    champ texte unique qui accepte plusieurs valeurs.
    <img src="/images/structure-form-editing-add-recipe.webp" alt="Ajout d'une recette" width="100%" />
1. Créer deux éléments de contenu de type Recette (voir [content-create](./content-create.md)),
    comme les recettes pour la "Salade Verte" et les "Carottes fraîches".
    Assurez-vous que tous les champs aient des valeurs, y compris les images, les
    ingrédients et le champ _Proposé par_ (choisir un des vendeurs créés dans
    [structure-fields](./structure-fields.md)).

## Améliorer votre compréhension

Modifier le formulaire principal de contact du site en allant à _Structure_ >
_Formulaires de contact_ dans le menu d'administration _Gérer_. Vous pourriez
par exemple vouloir masquer les champs _M'envoyer une copie_ et _Langue_.
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CELMGX93fjE" title="Modifier les formulaires de saisie du contenu" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Écrit par [Boris Doesborg](https://www.drupal.org/u/batigolix). Traduit par
[Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
