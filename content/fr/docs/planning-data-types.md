---
title: "Concept : entités de contenus et champs"
description: "Vue d'ensemble des entités de contenu et des champs."
id: "planning-data-types"
translation_key: "planning-data-types"
source_locale: "fr"
---
## Prérequis { #planning-data-types }

* [understanding-data](./understanding-data.md)
* [understanding-modules](./understanding-modules.md)
## Qu'est ce qu'une entité de contenu ?

Une _entité de contenu_ (ou plus dimplement, _entité_) est un élément de données
de contenu, qui peut contenir du texte, des balises HTML, des images, des
fichiers attachés, et d'autres données, qui sont destinées à être affichées aux
visiteurs du site. Les entités de contenu peuvent être définies par le cœur du
logiciel ou par des modules.

Les entités de contenu sont regroupées en _types d'entités_, qui peuvent avoir
différents objectifs et sont affichés de manières vraiment différentes sur le
site. La plupart des types d'entités sont aussi divisées en _sous-types
d'entités_, qui permettent de petites variations sur l'utilisation des entités
et leur affichage. Voici un tableau des types d'entité de contenu standards :

| Type d'entité | Sous-type d'entité | Module fournisseur | Usages principaux |
| --- | --- | --- | --- |
| Élément de contenu | Type de contenu | Module Node | Contenu destiné à être la zone principale pour les pages du site<br><br>*Exemple* : dans l'exemple du site du marché fermier, vous devriez avoir des types de contenus pages basiques, pages vendeurs, pages recettes. |
| Commentaire | Type de commentaire | Module Comment | Commentaire ajouté aux entités de contenus<br><br>*Exemple* : sur un blog, les articles pourraient avoir des commentaires. Ils ne sont pas utiles sur l'exemple du site du marché fermier. |
| Profil Utilisateur | (aucun) | Module User | Données liées à une personne avec un compte utilisateur (accès identifié) sur<br><br>*Exemple* : chaque site a au moins un profil utilisateur basique avec un identifiant et une adresse électronique ; les sites de réseaux sociaux peuvent avoir des profils utilisateurs complexes avec plus d'informations. |
| Bloc personnalisé | Type de Bloc | Module Custom Block | Texte et images dans un petit espace, souvent affiché dans le bandeau du site,<br><br>*Exemple* : dans le site d'exemple du marché fermier, vous pouvez placer les horaires et la localisation dans un bloc dans la barre latérale. |
| Terme de Taxonomie | Vocabulaire | Module Taxonomy | Utilisé pour classer d'autres types de contenus<br><br>*Exemple* : dans le site d'exemple du marché fermier, vous pouvez classer les contenus Recettes avec un vocabulaire de taxonomie Ingrédients, avec des termes de taxonomies comme Carottes et Tomates.  Dans un blog, les articles peuvent être classés en utilisant le vocabulaire mots clés, et peut être un vocabulaire Catégories. |
| Fichier | (aucun) | Module File | Une image ou un fichier attaché qui sont suivis et gérés par le site, souvent<br><br>*Exemple* : dans le site d'exemple fermier, les pages des recettes et des vendeurs pourraient avoir des images attachées, qui seraient gérées comme des entités de type fichier par le site. |
| Formulaire de Contact | Type de Formulaire | Module Contact | Un formulaire qui permet aux visiteurs du site de contacter le propriétaire<br><br>*Exemple* : un formulaire de contact est nécessaire dans le site d'exemple du marché fermier. |
## Qu'est ce qu'un champ ?

A l'intérieur des entités, les données sont stockées dans des _champs_
individuels, chacun contenant un type de donnée, comme du texte formaté ou brut,
des images ou autres fichiers, ou des dates. Les types de champs peuvent être
définis par le cœur du logiciel ou par des modules.

Les champs peuvent être ajoutés par un administrateur aux sous-types d'entité,
de sorte que toutes les entités d'un sous-type d'entité donné aient le même
ensemble de champs disponibles. Par exemple, le type de contenu Vendeur de
l'exemple du marché fermier pourrait comporter des champs pour le nom du
vendeur, un logo, l'adresse d'un site web, et une description, alors que le type
de contenu _pages basiques_ pourrait n'avoir des champs que pour le titre et le
corps de la page. Lorsque vous créez ou modifiez une entité, vous spécifiez
les valeurs pour les champs de cette entité.
## Sujets liés

* [planning-structure](./planning-structure.md)
* [content-create](./content-create.md)
* [structure-content-type](./structure-content-type.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [user-concept](./user-concept.md)
* [block-concept](./block-concept.md)

*Attributions*

Écrit et modifié par [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)
et [Grant Dunham](https://www.drupal.org/u/gdunham).
Traduit par [Vanessa Kovalsky](https://www.drupal.org/u/vanessakovalsky) et
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
