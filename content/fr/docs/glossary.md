---
title: "Glossaire"
description: "Glossaire"
id: "glossary"
translation_key: "glossary"
source_locale: "fr"
---
[](){ #glossary }

## Affichage (dans une vue) { #glossary-display }

Type de rendu d'une [vue](./glossary.md#glossary-view), par exemple une page, un [bloc](./glossary.md#glossary-block) ou un flue. Consulter [views-parts](./views-parts.md) pour plus d'informations.

## Ajax { #glossary-ajax }

Une technologie du web utilisée pour échanger des données avec un serveur pour mettre dynamiquement à jour des parties d'une page web (par exemple, des formulaires) sans nécessiter des rechargements de l'ensemble de la page.

## Alias { #glossary-alias }

Un nom convivial pour remplacer le [chemin](./glossary.md#glossary-path) interne que le système assigne à une [URL](./glossary.md#glossary-url) du site. Par exemple, vous pourriez assigner un alias _apropos_ à la page "À propos" de votre site, pour remplacer le chemin interne _/node/5_. Cela donnerait à la page l'URL _http://example.com/apropos_ au lieu de _http://example.com/node/5_. Consulter [content-paths](./content-paths.md) pour plus d'informations.

## Anonyme { #glossary-anonymous }

Une personne ([utilisateur](./glossary.md#glossary-user)) interagissant avec le site qui n'est pas connectée. Consulter [user-concept](./user-concept.md) pour plus d'informations.

## Assistant { #glossary-wizard }

Un formulaire web qui permet de saisir quelques valeurs et crée quelque chose avec des valeurs par défaut raisonnables se basant sur les valeurs que vous choisissez. Par exemple, il y a des assistants pour créer des [vues](./glossary.md#glossary-view) de différents types. Consulter [views-create](./views-create.md) pour plus d'informations.

## Authentifié { #glossary-authenticated }

Une personne ([utilisateur](./glossary.md#glossary-user)) interagissant avec le site qui est connectée. Consulter [user-concept](./user-concept.md) pour plus d'informations.

## Bloc { #glossary-block }

Un morceau de [contenu](./glossary.md#glossary-content) (texte, images, liens, etc.) qui peut être affiché sur une page d'un site. Les blocs sont affichés dans des [régions](./glossary.md#glossary-region). Consulter [block-concept](./block-concept.md) pour plus d'informations.

## Cache { #glossary-cache }

Le cache interne du site stocke le rendu de calculs coûteux en temps, comme la génération d'une page HTML suite à une requête, et en récupère le résultat, plutôt que de refaire le calcul, la prochaine fois qu'il est demandé. Des systèmes de cache externes peuvent aussi être utilisés sur le serveur web pour accélérer le temps de réponse d'un site. Consulter [prevent-cache](./prevent-cache.md) pour plus d'informations sur le cache interne.

## Champ { #glossary-field }

Données d'un certain type qui sont attachées à une [entité](./glossary.md#glossary-entity) de [contenu](./glossary.md#glossary-content). Par exemple, sur le site d'un marché fermier, vous pourriez avoir des champs pour une image, la description d'un marchand, et un [terme de taxonomie](./glossary.md#glossary-taxonomy-term). Consulter [planning-data-types](./planning-data-types.md) pour plus d'informations.

## Champ de type référence { #glossary-reference-field }

Un [champ](./glossary.md#glossary-field) qui représente une relation entre une [entité](./glossary.md#glossary-entity) et une ou plusieurs autres entités, qui peuvent appartenir au même [type d'entité](./glossary.md#glossary-entity-type) ou à un type différent. Par exemple, sur le site d'un marché fermier, un élément de contenu de type recette pourrait avoir un champ de type référence vers le marchand (également un élément de contenu) qui a posté la recette. Les champs de type [terme de taxonomie](./glossary.md#glossary-taxonomy-term) sont aussi des champs de type référence. Consulter [structure-reference-fields](./structure-reference-fields.md) pour plus d'informations.

## Chemin { #glossary-path }

La dernière partie, unique, de l'[URL](./glossary.md#glossary-url) interne que le système assigne à une page du site, qui peut être une page visible publiquement par les visiteurs ou une page d'administration. Par exemple, l'URL interne de la page À propos de votre site  pourrait être _http://example.com/node/5_, et dans ce cas, le chemin serait _node/5_. Consulter aussi [alias](./glossary.md#glossary-alias). Consulter [content-paths](./content-paths.md) pour plus d'informations.

## Composer { #glossary-composer }

Le gestionnaire de dépendances de PHP utilisé par Drupal, [Drush](./glossary.md#glossary-drush), le _framework_ et d'autres. Il est le moyen d'installation à privilégier pour installer des projets Drupal. Consulter [install-composer](./install-composer.md) pour plus d'informations.

## Cœur de Drupal { #glossary-drupal-core }

Les fichiers, thèmes, profils et modules inclus avec le logiciel téléchargé de manière standard. Consulter [understanding-drupal](./understanding-drupal.md) pour plus d'informations.

## Configuration { #glossary-configuration }

Informations sur votre site qui ne sont pas du [contenu](./glossary.md#glossary-content), qui sont censées être plus permanentes que des informations d'[état](./glossary.md#glossary-state), comme le nom de votre site, les [types de contenu](./glossary.md#glossary-content-type) et les [vues](./glossary.md#glossary-view) que vous avez définies, etc. Consulter [understanding-data](./understanding-data.md) pour plus d'informations.

## Contenu { #glossary-content }

Informations destinées à être affichées sur votre site, comme du texte, des images, des téléchargements, etc. Consulter également [configuration](./glossary.md#glossary-configuration) et [état](./glossary.md#glossary-state). Consulter [understanding-data](./understanding-data.md) pour plus d'informations.

## Contribué { #glossary-contributed }

[Modules](./glossary.md#glossary-module), [thèmes](./glossary.md#glossary-theme) et [distributions](./glossary.md#glossary-distribution) qui ne font pas partie du [cœur de Drupal](./glossary.md#glossary-drupal-core), et qui peuvent être téléchargés séparément depuis le site web [_Drupal.org_](https://www.drupal.org).

## Conventions de codage { #glossary-coder }

Les conventions de codage sont les règles destinées aux développeurs, qui définissent les bonnes pratiques, le formatage et autres, visant à ce que tout le monde utilise les mêmes conventions, et ait les mêmes attentes en visualisant du code. Consulter [install-tools](./install-tools.md) pour plus d'informations.

## Cron { #glossary-cron }

Sur certains systèmes d'exploitation, _cron_ est une application de planification de commandes qui exécute périodiquement des commandes ou des scripts. Votre site définit des tâches planifiées, qui doivent être déclenchées soit par le planificateur cron du système d'exploitation, ou de manière interne. Consulter [security-cron-concept](./security-cron-concept.md) pour plus d'informations.

## Cross Site Scripting { #glossary-cross-site-scripting }

Faille de sécurité souvent présente sur des sites web. Sur un site qui n'est pas bien protégé, des utilisateur mal intentionnés peuvent injecter un script dans des pages web qui sont vues par d'autres utilisateurs. Consulter [structure-text-formats](./structure-text-formats.md) pour plus d'informations.

## Dépôt { #glossary-repository }

Endroit où un système de gestion de version stocke tous les fichiers et répertoires d'un projet. Consulter [install-tools](./install-tools.md) pour plus d'informations.

## Devel { #glossary-devel }

Module qui aide à la réalisation de tâches de développement comme le débogage ou l'inspection du code, l'analyse de requêtes, et la génération de contenu d'exemple. Consulter [install-tools](./install-tools.md) pour plus d'informations.

## Distribution { #glossary-distribution }

Un seul téléchargement qui fournit un raccourci pour mettre en place un site d'un type spécifique, comme un site pour un club ou une boutique en ligne. Une distribution comprend le [cœur de Drupal](./glossary.md#glossary-drupal-core) ainsi que des [modules](./glossary.md#glossary-module) [contribués](./glossary.md#glossary-contributed) et/ou des [thèmes](./glossary.md#glossary-theme) ; beaucoup de distributions préconfigurent le site ou créent même du contenu d'exemple à l'[installation](./glossary.md#glossary-installing). Consulter [understanding-distributions](./understanding-distributions.md) pour plus d'informations.

## Droit { #glossary-permission }

La capacité de réaliser une action sur le site, comme modifier un type particulier de [contenu](./glossary.md#glossary-content), ou visualiser les profils des utilisateurs. Consulter aussi [rôle](./glossary.md#glossary-role). Consulter [user-concept](./user-concept.md) pour plus d'informations.

## Drupal Association { #glossary-drupal-association }

Organisation à but non lucratif dont le but est de soutenir le projet Drupal et sa communauté. Consulter [understanding-project](./understanding-project.md) pour plus d'informations.

## Drush { #glossary-drush }

Interpréteur de commandes et interface permettant d'écrire des scripts pour Drupal. Consulter [install-tools](./install-tools.md) pour plus d'informations.

## Élément de contenu { #glossary-content-item }

Un élément de [contenu](./glossary.md#glossary-content) qui est normalement destiné à être affiché en tant que contenu principal d'une page de votre site. Il s'agit d'un [type d'entité](./glossary.md#glossary-entity-type). Consulter [planning-data-types](./planning-data-types.md) pour plus d'informations.

## Entité { #glossary-entity }

Un élément de [contenu](./glossary.md#glossary-content) ou de données de [configuration](./glossary.md#glossary-configuration), bien que souvent, ce terme se réfère communément aux entités de contenu. Par exemple, des [éléments de contenu](./glossary.md#glossary-content-item), des [blocs](./glossary.md#glossary-block) personnalisés, des [termes de taxonomie](./glossary.md#glossary-taxonomy-term), et des définitions de [types de contenus](./glossary.md#glossary-content-type) ; les trois premières sont des entités de contenu, et la dernière une entité de configuration. Consulter également [type d'entité](./glossary.md#glossary-entity-type), [sous-type d'entité](./glossary.md#glossary-entity-subtype) et [champ](./glossary.md#glossary-field). Consulter [planning-data-types](./planning-data-types.md) pour plus d'informations.

## État { #glossary-state }

Informations de nature temporaire sur l'état courant de votre site, comme le moment auquel les tâches planifiées (cron) ont été exécutées pour la dernière fois, etc. Consulter aussi [contenu](./glossary.md#glossary-content) et [configuration](./glossary.md#glossary-configuration). Consulter [understanding-data](./understanding-data.md) pour plus d'informations.

## Filtre (dans une vue) { #glossary-filter }

Limite les données à afficher dans une [vue](./glossary.md#glossary-view), en se basant sur des critères tels que le statut de publication, le type de contenu ou la valeur d'un champ. Consulter [views-parts](./views-parts.md) pour plus d'informations.

## Filtre contextuel (dans une vue) { #glossary-contextual-filter }

Limite les données à afficher dans une [vue](./glossary.md#glossary-view), en se basant sur le contexte de l'[affichage](./glossary.md#glossary-display) de la vue, comme l'URL complète de la page. Consulter [views-parts](./views-parts.md) pour plus d'informations.

## Format de texte { #glossary-text-format }

[Configuration](./glossary.md#glossary-configuration) qui définit le traitement appliqué à du texte saisi par un utilisateur avant qu'il ne soit affiché dans le navigateur. Ceci devrait inclure la suppression ou la limitation de balises HTML, ou le changement d'URL en liens. Consulter [structure-text-formats](./structure-text-formats.md) pour plus d'informations.

## FOSS { #glossary-foss }

Acronyme de l'anglais _free and open source software_, désignant un logiciel développé par une communauté et publiée sous une licence non commerciale. Consulter aussi [GPL](./glossary.md#glossary-gpl). Consulter [understanding-project](./understanding-project.md) pur plus d'informations.

## Git { #glossary-git }

[Système de gestion de versions](./glossary.md#glossary-vcs) utilisé par les développeurs Drupal pour coordonner les modifications apportées par chacun. Git enregistre les changements qu'ils apportent à un projet donné dans une arborescence de répertoires appelé un [dépôt](./glossary.md#glossary-repository) Git. Consulter [install-tools](./install-tools.md) pour plus d'informations.

## GPL { #glossary-gpl }

Acronyme de l'anglais _GNU General Public License_, une licence logicielle non commerciale. Tout programme téléchargé depuis le site web [_Drupal.org_](https://www.drupal.org) est sous ["Licence publique générale GNU, version 2"](http://www.gnu.org/licenses/old-licenses/gpl-2.0.fr.html). Consulter aussi [FOSS](./glossary.md#glossary-foss). Consulter [understanding-gpl](./understanding-gpl.md) pour plus d'informations.

## Groupe de champs { #glossary-field-bundle }

Synonyme de [sous-type d'entité](./glossary.md#glossary-entity-subtype) (_field bundle_).

## Installation { #glossary-installing }

Préparation du cœur de Drupal ou de n'importe quel module ou thème contribué en vue de son usage. Dans le cas du cœur de Drupal, cela consiste à télécharger les fichiers nécessaires, créer la base de données, configurer et exécuter le script d'installation. Consulter [install-decide](./install-decide.md) pour plus d'informations.

## Interface utilisateur { #glossary-user-interface }

Le texte, les styles, et les images qui sont visibles sur le site, séparés de manière logique dans l'interface utilisateur entre l'interface pour les visiteurs du site et l'interface destinée aux administrateurs. En anglais, _user interface_ (UI).

## Journal { #glossary-log }

Une liste d'évènements enregistrés sur votre site, comme des données sur l'utilisation ou la performance, des erreurs, des avertissements et des informations sur le fonctionnment. Consulter [prevent-log](./prevent-log.md) pour plus d'informations.

## LAMP { #glossary-lamp }

Acronyme de _Linux, Apache, MySQL et PHP_ : les logiciels sur le serveur web qui font souvent tourner votre site (bien qu'il puisse utiliser d'autres systèmes d'exploitation, serveurs web et bases de données). Consulter [install-requirements](./install-requirements.md) pour plus d'informations.

## Lien contextuel { #glossary-contextual-link }

Un lien vers une page d'administration permettant de modifier ou configurer une fonctionnalité de votre site, apparaissant dans le contexte où cette fonctionnalité est affichée. Par exemple, un lien pour configurer le [menu](./glossary.md#glossary-menu) qui apparaît lorsque vous survolez le menu avec votre souris. Consulter [config-overview](./config-overview.md) pour plus d'informations.

## Menu { #glossary-menu }

Un ensemble de liens utilisés pour la navigation sur le site, qui peuvent être organisés de manière hiérarchique. Consulter [menu-concept](./menu-concept.md) pour plus d'informations.

## Mise à jour { #glossary-update }

Une nouvelle version du logiciel de votre site, concernant le [cœur](./glossary.md#glossary-drupal-core), les [modules](./glossary.md#glossary-module) ou les [thèmes](./glossary.md#glossary-theme). Consulter aussi [mise à jour de sécurité.](./glossary.md#glossary-security-update) Consulter [security-concept](./security-concept.md) pour plus d'informations.

## Mise à jour de sécurité { #glossary-security-update }

Une [mise à jour](./glossary.md#glossary-update) qui corrige une erreur liée à la sécurité, comme une vulnérabilité pouvant être exploitée pour une attaque. Consulter [security-concept](./security-concept.md) pour plus d'informations.

## Mode de visualisation { #glossary-view-mode }

Un ensemble de [configurations](./glossary.md#glossary-configuration) d'[outils de mise en forme](./glossary.md#glossary-field-formatter) pour tous les [champs](./glossary.md#glossary-field) d'un [contenu](./glossary.md#glossary-content), dont certains pourraient être cachés. Un ou plusieurs modes de visualisation peuvent être définis pour chaque [sous-type d'entité](./glossary.md#glossary-entity-subtype) ; par exemple, les [types de contenu](./glossary.md#glossary-content-type) comportent habituellement les modes de visualisation _Complet_ et _Accroche_, où le mode de visualisation _Accroche_ affiche moins de champs ou des champs tronqués. Consulter [structure-view-modes](./structure-view-modes.md) pour plus d'informations.

## Module { #glossary-module }

Programme (habituellement en PHP, JavaScript et/ou CSS) qui étend les fonctionnalités de votre site et en ajoute. Le projet Drupal fait une distinction entre le _[cœur](./glossary.md#glossary-drupal-core)_ et les modules _[contribués](./glossary.md#glossary-contributed)_. Consulter [understanding-modules](./understanding-modules.md) pour plus d'informations.

## Outil de mise en forme d'un champ { #glossary-field-formatter }

De la [configuration](./glossary.md#glossary-configuration) qui définit comment les données contenues dans un [champ](./glossary.md#glossary-field) sont affichées. Par exemple, un champ de type texte pourrait être affiché avec un préfixe et/ou un suffixe, et ses balises HTML pourraient être retirées ou limitées. Consulter aussi [mode de visualisation](./glossary.md#glossary-view-mode) et [widget de champ](./glossary.md#glossary-field-widget). Consulter [structure-view-modes](./structure-view-modes.md) pour plus d'informations.

## Paquet { #glossary-bundle }

Synonyme de [sous-type d'entité](./glossary.md#glossary-entity-subtype) (anglais _bundle_).

## Point de rupture { #glossary-breakpoint }

Les points de rupture (_breakpoints_) sont utilisés pour diviser en intervalles la hauteur ou la largeur des écrans de navigateurs, imprimantes ou autres supports. Un site [réactif](./glossary.md#glossary-responsive) (_responsive_) ajuste sa présentation à ces points de rupture. Consulter [structure-image-responsive](./structure-image-responsive.md) pour plus d'informations.

## Processus éditorial { #glossary-editorial-workflow }

Processus de création, validation, modification et publication de contenu. Plusieurs personnes ayant différents rôles (par exemple, des rédacteurs de contenu ou des éditeurs) peuvent y prendre part. Consulter [planning-workflow](./planning-workflow.md) pour plus d'informations.

## Réactif { #glossary-responsive }

Un site ou [thème](./glossary.md#glossary-theme) est réactif (_responsive_) s'il ajuste sa présentation en fonction de la taille de l'écran du navigateur, de l'imprimante, ou autre type de média. Consulter aussi [point de rupture](./glossary.md#glossary-breakpoint). Consulter [structure-image-responsive](./structure-image-responsive.md) pour plus d'informations.

## Région { #glossary-region }

Une zone définie d'une page où le [contenu](./glossary.md#glossary-content) peut être placé, comme l'en-tête, le pied de page, la zone de contenu principale, la barre latérale de gauche, etc. Les régions sont définies par les [thèmes](./glossary.md#glossary-theme) et le contenu affiché dans chaque région est contenu dans des [blocs](./glossary.md#glossary-block). Consulter [block-regions](./block-regions.md) pour plus d'informations.

## Relation (dans une vue) { #glossary-relationship }

Expansion de la donnée à afficher dans une vue, en mettant en relation le contenu de base avec d'autres entités de contenu. Consulter [views-parts](./views-parts.md) pour plus d'informations.

## Révision { #glossary-revision }

Un enregistrement de l'état présent ou passé d'une [entité](./glossary.md#glossary-entity) de [contenu](./glossary.md#glossary-content), telle qu'elle est modifiée au cours du temps. Consulter [planning-workflow](./planning-workflow.md) pour plus d'informations.

## Rôle { #glossary-role }

Un ensemble de [permissions](./glossary.md#glossary-permission) droits qui peuvent être appliqués à un [compte d'utilisateur](./glossary.md#glossary-user). Consulter [user-concept](./user-concept.md) pour plus d'informations.

## Session { #glossary-session }

Informations concernant les interactions d'un visiteur avec le site, par exemple s'il est connecté, ou ses cookies. Consulter [understanding-data](./understanding-data.md) pour plus d'informations.

## SGC { #glossary-cms }

Acronyme de [Système de gestion de contenu](./glossary.md#glossary-content-management-system) (en anglais _content management system_ (SGC)).

## Site de développement { #glossary-development-site }

Copie du site de production qui est utilisée pour le développement, la mise à jour et les tests. Consulter [install-dev-sites](./install-dev-sites.md) pour plus d'informations.

## Site de pré-production { #glossary-staging-site }

Copie du site de production qui peut être utilisée pour tester, ou pour présenter des modifications au client pour approbation. Consulter [install-dev-sites](./install-dev-sites.md) pour plus d'informations.

## Sous-type d'entité { #glossary-entity-subtype }

Au sein d'un [type d'entité](./glossary.md#glossary-entity-type) de [contenu](./glossary.md#glossary-content), un groupe d'entités qui partagent les mêmes [champs](./glossary.md#glossary-field). Par exemple, au sein du type d'entité [élément de contenu](./glossary.md#glossary-content-item), le site d'un marché fermier pourrait avoir des sous-types ([types de contenu](./glossary.md#glossary-content-type)) pour les pages statiques et les pages des marchands, chacune avec son propre groupe de champs. Vous pourriez également trouver le terme _paquet_ (_bundle_) utilisé (particulièrement dans la documentation destinée aux programmeurs) comme synonyme de sous-type d'entité. Consulter [planning-data-types](./planning-data-types.md) pour plus d'informations.

## Style d'image { #glossary-image-style }

Un ensemble d'étapes de traitement qui transforment une image de base en une nouvelle image ; la mise à l'échelle et le recadrage sont des exemples de traitements habituels. Consulter [structure-image-styles](./structure-image-styles.md) pour plus d'informations.

## Système de gestion de contenu (SGC) { #glossary-content-management-system }

Une collection d'outils conçus pour permettre la création, la modification, l'organisation, la recherche, la récupération et le retrait d'informations sur un site web. Consulter [understanding-drupal](./understanding-drupal.md) pour plus d'informations.

## Système de gestion de versions { #glossary-vcs }

Logiciel qui conserve les copies des fichiers et l'historique de modification dans un [dépôt](./glossary.md#glossary-repository), et autorise l'ajout, la suppression et la mise à jour de fichiers. Consulter [install-tools](./install-tools.md) pour plus d'informations.

## Taxonomie { #glossary-taxonomy }

Le procédé de classification du [contenu](./glossary.md#glossary-content). Consulter [structure-taxonomy](./structure-taxonomy.md) pour plus d'informations.

## Terme de taxonomie { #glossary-taxonomy-term }

Un terme utilisé pour classer du [contenu](./glossary.md#glossary-content), comme une étiquette ou une catégorie. Consulter aussi [vocabulary](./glossary.md#glossary-vocabulary). Consulter [structure-taxonomy](./structure-taxonomy.md) pour plus d'informations.

## Thème { #glossary-theme }

Éléments logiciels et fichiers afférents (images, CSS, code PHP et/ou gabarits) qui déterminent le style et la mise en page du site. Le projet Drupal fait une distinction entre les thèmes du _[cœur](./glossary.md#glossary-drupal-core)_ et les thèmes _[contribués](./glossary.md#glossary-contributed)_. Consulter [understanding-themes](./understanding-themes.md) pour plus d'informations.

## Type de contenu { #glossary-content-type }

Un [sous-type d'entité](./glossary.md#glossary-entity-subtype) pour le [type d'entité](./glossary.md#glossary-entity-type) [élément de contenu](./glossary.md#glossary-content-item). Chaque type de contenu est utilisé dans un but particulier sur le site, et chacun comporte ses propres champs. Par exemple, le site du marché fermier pourrait avoir un type de contenu pour les pages simples, et un autre pour la page d'un marchand. Consulter [planning-data-types](./planning-data-types.md) pour plus d'informations.

## Type d'entité { #glossary-entity-type }

Le type global d'une [entité](./glossary.md#glossary-entity) ; il n'est communément appliqué qu'aux entités de [contenu](./glossary.md#glossary-content). Par exemple, les [types de contenu](./glossary.md#glossary-content-type), les [termes de taxonomie](./glossary.md#glossary-taxonomy-term) et les [blocs](./glossary.md#glossary-block) personnalisés. Consulter [planning-data-types](./planning-data-types.md) pour plus d'informations.

## UI { #glossary-ui }

Acronyme anglais de _user interface_ ([interface utilisateur](./glossary.md#glossary-user-interface)).

## URL { #glossary-url }

L'adresse unique d'une page web sur le Web, par exemple https://example.com/node/7. Consulter [content-paths](./content-paths.md) plus d'informations.

## Utilisateur { #glossary-user }

Une personne interagissant avec votre site, connectée ou [anonyme](./glossary.md#glossary-anonymous). Consulter [user-concept](./user-concept.md) pour plus d'informations.

## Utilisateur un (Utilisateur 1) { #glossary-user-one }

Le compte d'[utilisateur](./glossary.md#glossary-user) initial qui est créé à l'[installation](./glossary.md#glossary-installing) du site (et dont l'identifiant (_ID_) est 1). Il a automatiquement tous les [droits](./glossary.md#glossary-permission), même si on ne lui a pas assigné de [rôle](./glossary.md#glossary-role) d'administration. Consulter [user-admin-account](./user-admin-account.md) pour plus d'informations.

## Vocabulaire { #glossary-vocabulary }

Un groupe de [termes de taxonomies](./glossary.md#glossary-taxonomy-term) à sélectionner pour classer le [contenu](./glossary.md#glossary-content) d'une manière particulière, comme la liste de toutes les catégories de marchands sur le site d'un marché fermier. D'un point de vue technique, les vocabulaires sont les [sous-types](./glossary.md#glossary-entity-subtype) du [type d'entité](./glossary.md#glossary-entity-type) terme de taxonomie. Consulter [structure-taxonomy](./structure-taxonomy.md) pour plus d'informations.

## Vue { #glossary-view }

Une liste formatée de données ; habituellement, les données proviennent d'[entités](./glossary.md#glossary-entity) de [contenu](./glossary.md#glossary-content). Par exemple, sur le site du marché fermier, vous pourriez créer un [élément de contenu](./glossary.md#glossary-content-item) pour chaque marchand. Vous pourriez alors créer une vue qui gènère sur une page une liste qui affiche l'image sous forme de vignette et la description de chaque marchand, liées à l'élément de contenu correspondant en pleine page. En utilisant les mêmes données, vous pourriez aussi créer une vue qui génère un bloc des nouveaux marchands, qui afficherait des informations relatives aux derniers marchands ajoutés. Consulter [planning-modular](./planning-modular.md) pour plus d'informations.

## Widget de champ { #glossary-field-widget }

De la [configuration](./glossary.md#glossary-configuration) qui définit comment saisir et modifier des données dans un [champ](./glossary.md#glossary-field) sur un formulaire de modification. Paar exemple, un champ de type texte pourrait être présenté comme une zone de texte sur une ou plusieurs lignes, et il pourrait y avoir un paramètre pour la taille de la zone de texte. Consulter aussi [outil de mise en forme d'un champ](./glossary.md#glossary-field-formatter). Consulter [structure-widgets](./structure-widgets.md) pour plus d'informations.

## WYSIWYG { #glossary-wysiwyg }

Acronyme anglais de _what you see is what you get_ (ce que vous voyez est ce que vous obtenez), se référant à une méthode de modification de [contenu](./glossary.md#glossary-content) faisant en sorte que ce qui est visualisé à l'écran soit très proche du produit final. Consulter [structure-text-format-config](./structure-text-format-config.md) pour plus d'informations.

## Workflow { #glossary-workflow }

See [Processus éditorial](./glossary.md#glossary-editorial-workflow).

## XSS { #glossary-xss }

Acronyme pour [Cross Site Scripting](./glossary.md#glossary-cross-site-scripting).
