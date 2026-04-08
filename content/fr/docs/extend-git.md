---
title: "Gérer les révisions des fichiers et de la configuration avec Git"
description: "Comment gérer les révisions des fichiers et de la configuration avec l'outil de contrôle de révisions Git."
id: "extend-git"
translation_key: "extend-git"
source_locale: "fr"
---
## Objectif { #extend-git }

Utiliser l'outil de contrôle de révisions Git pour gérer les révisions des
fichiers et de la configuration sur votre site.
## Prérequis

* [install-tools](./install-tools.md)
* [install-decide](./install-decide.md)
* [install-dev-sites](./install-dev-sites.md)
* Mettre en place un dépôt Git et trouver son URL de clonage. Par
exemple, si vous voulez utiliser Gitlab pour héberger votre dépôt, consulter les
pages
["Create a project"](https://docs.gitlab.com/ee/gitlab-basics/create-project.html)
et
["Command Line basic commands"](https://docs.gitlab.com/ee/gitlab-basics/command-line-commands.html).
sur Gitlab (en anglais). Si vous voulez utiliser GitHub pour héberger votre
dépôt, consulter les pages
["Create a repo"](https://help.github.com/en/articles/create-a-repo) et
["Which remote URL should I use"](https://help.github.com/en/articles/which-remote-url-should-i-use).
sur GitHub (en anglais).
* Ouvrir et savoir utiliser une fenêtre d'invite de commande et un éditeur de
texte.
* Pour gérer la configuration, savoir décompresser et compresser des archives
(comme _.zip_ et _.tar.gz_).
## Prérequis du site

* Vous devez avoir téléchargé Drupal pour votre site, en utilisant une des
méthodes exposées dans [install-decide](./install-decide.md). Si vous voulez gérer la
configuration, vous devez l'avoir installé et disposer d'un site
fonctionnel.
* Un client Git doit être installé sur le serveur de votre site. Consulter
les instructions sur [Git](https://git-scm.com/).
* Vous devez disposer d'un nouveau dépôt créé et connaître son URL de clonage
avec Git.
## Étapes
### Initialiser le dépôt

Suivre ces étapes une fois, après avoir créé le dépôt Git, pour connecter votre
répertoire local au dépôt et y ajouter les fichiers initiaux.

1. Ouvrir une invite de commande, et vous placer dans le répertoire contenant les
    fichiers de votre site (répertoire racine).
1. Déterminer où se trouve la racine du site. Si les répertoires _core_,
    _modules_ et _themes_ se trouvent directement dans ce répertoire, alors vous
    êtes bien à la racine du site. Si vous avez utilisé Composer pour télécharger Drupal, alors ces fichiers se trouvent dans le sous-répertoire _web_ (qui est
    la racine de votre site).
1. Dans un éditeur de texte, créer un nouveau fichier appelé _.gitignore_ au
    sommet de l'arborescence (ou le modifier s'il existe déjà). Ce fichier contient
    une liste de fichiers et de répertoires que Git devrait ignorer (ne pas ajouter
    au dépôt). Par exemple, le fichier _settings.php_ de votre site ne devrait pas
    être ajouté à Git, parce qu'il contient les identifiants de la base de données,
    et les fichiers transférés vers votre site (généralement dans
    _sites/default/files_) ne devraient pas non plus être dans Git -- l'objectif est
    que le dépôt contienne le logiciel, et non le contenu du site.
1. S'assurer que les lignes suivantes se trouvent dans le fichier _.gitignore_.
    Si la racine de votre site ne correspond pas avec le répertoire racine de
    l'installation, modifier en conséquence chacune de ces lignes si elles nécessitent
    un préfixe. Par exemple, il se pourrait que _sites_ doive être remplacé par
    _web/sites_.
    ```text
    sites/*/settings*.php
    sites/*/files
    config
    ```
1. Saisir les commandes suivantes :
    ```text
    git init
    git add -A
    ```
1. Optionnellement, vérifier la liste des fichiers qui seront ajoutés à votre
    répertoire Git en saisissant cette commande et en faisant défiler cette (très
    longue) liste :
    ```text
    git status
    ```
1. Saisir les commandes suivantes. Vous pouvez remplacer "Ajout initial des
    fichiers" par votre propre _message de révision_ si vous le souhaitez, et il
    vous faudra remplacer l'URL de la seconde commande par votre propre URL de
    clonage avec Git :
    ```text
    git commit -m "Ajout initial des fichiers"
    git remote add origin https://gitlab.com/example-name/example-repo.git
    git push -u origin master
    ```
1. Si vous utilisez Gitlab, GitHub, ou un autre fournisseur avec un accès en
    ligne, vous pouvez maintenant vous rendre sur la page de votre dépôt et vous
    assurer que vos fichiers s'y trouvent bien.

### Mettre à jour les fichiers dans le dépôt

Suivre ces étapes quand vous avez mis à jour, ajouté ou supprimé un ou plusieurs
fichiers de votre site, afin de publier les changements (_push_) dans votre
dépôt.

1. Ouvrir une invite de commande et vous placer dans le répertoire où se trouvent
    les fichiers de votre site.
1. Vérifier la liste des fichiers qui ont été ajoutés, modifiés ou supprimés :
    ```text
    git status
    ```
1. Optionnellement, pour les fichiers texte (et non les images) qui ont été
    modifiés, visualisez les différences entre la nouvelle version du fichier et
    l'ancienne :
    ```text
    git diff chemin/vers/le/fichier.txt
    ```
1. Marquer les changements comme devant être inclus à la prochaine révision, et
    vérifier qu'ils soient correctement marqués :
    ```text
    git add -A
    git status
    ```
1. Il est possible d'omettre un fichier en particulier que vous avez déjà marqué
    comme devant être inclus à la prochaine révision, ou d'ajouter un nouveau
    fichier. Si un fichier ou un répertoire est ajouté par erreur de manière
    répétée, envisager son ajout au fichier _.gitignore_ afin qu'il soit ignoré par
    Git. Commandes pour omettre ou ajouter :
    ```text
    git reset HEAD path/to/file.txt
    git add path/to/file.txt
    ```
1. Créer  une révision (_commit_) et publier (_push_) vos changements. Modifier
    en conséquence le message de la révision :
    ```text
    git commit -m "mon message de commit"
    git push
    ```
1. Si sous avez d'autres copies du dépôt, les mettre à jour en ouvrant une invite
    de commande dans le répertoire de chacune des copies et lancer la commande
    suivante :
    ```text
    git pull
    ```

### Faire une copie des fichiers de votre dépôt

Suivre ces étapes si vous voulez copier tous les fichiers de votre dépôt vers un
nouvel emplacement. Par exemple, vous pourriez avoir à la fois une copie de
développement locale de votre site et un site en production, ou plusieurs
membres de l'équipe pourraient avoir des copies locales de votre site.

1. Ouvrir une invite de commande à l'emplacement où vous voulez récupérer les
    fichiers.
1. Saisir la commande suivante, en remplaçant l'URL par votre URL de clonage, et
    _repertoire_ par le nom du sous-répertoire souhaité :
    ```text
    git clone https://gitlab.com/example-name/example-repo.git repertoire
    ```

### Gérer la configuration dans le dépôt

1. Suivre les instructions de [extend-config-versions](./extend-config-versions.md) pour exporter une
    archive contenant l'ensemble de la configuration de votre site.
1. Si vous n'avez pas encore placé la configuration dans votre dépôt,
    décompresser l'archive contenant la configuration dans un nouveau répertoire, de
    préférence au-dessus de la racine de votre site, et suivre les instructions
    ci-dessus pour ajouter ces fichiers au dépôt.
1. Après avoir placé ces fichiers dans le dépôt, chaque fois que la configuration
    du site change, exporter et décompresser l'archive contenant la configuration
    dans le même emplacement. Suivre les instructions ci-dessus pour mettre à jour
    ces fichiers dans votre dépôt.
1. Pour importer la configuration dans un autre site, faire une archive contenant
    le répertoire de votre dépôt contenant la configuration. Suivre alors les
    instructions de [extend-config-versions](./extend-config-versions.md) pour transférer et importer cette
    archive dans le site.

## Concepts liés

[install-dev-sites](./install-dev-sites.md)

*Attributions*

Adapté et modifié par [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) à
partir de
["Building a Drupal site with Git"](https://www.drupal.org/node/803746),
copyright 2000-2026 contributeurs individuels à la
[documentation de la communauté de Drupal](https://www.drupal.org/documentation).
Traduit par [Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
