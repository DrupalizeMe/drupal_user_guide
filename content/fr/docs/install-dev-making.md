---
title: "Mettre en place un site de développement"
description: "Comment faire une copie d'un site en production à des fins de développement."
id: "install-dev-making"
translation_key: "install-dev-making"
source_locale: "fr"
---
## Objectif { #install-dev-making }

Mettre en place une copie d'un site qui pourra être utilisée pour développer de
nouvelles fonctionnalités et y tester les mises à jour.
## Prérequis

[install-dev-sites](./install-dev-sites.md)
## Prérequis du site

* Vous avez un site en production, déjà développé, dont vous voudriez faire une
copie à des fins de développement.
* Si vous voulez utiliser Drush pour certaines des étapes de cette tâche, Drush
doit être installé. Consulter [install-tools](./install-tools.md).
## Étapes

1. Suivre les étapes dans [install-prepare](./install-prepare.md), de sorte que vous ayez un
    hébergement prêt pour votre site de développement, que vous sachiez où est sa
    racine, et que vous ayez une base de données vide avec un compte d'utilisateur
    de la base de données prêts à être utilisés pour votre site de développement.
1. La prochaine étape consiste à réaliser une copie brute (_dump_) de votre base
    de données, avec le contenu de la base de données de votre site. Ce fichier
    peut être assez gros, mais il y a deux choses que vous pouvez faire pour en
    réduire la taille :
    * Compresser le fichier, en utilisant gzip ou un autre utilitaire de
     compression.
    * Exclure le contenu des tables de la base de données correspondant au système
     interne de mise en cache, en tronquant ces tables. Leurs données sont
     temporaires, et vous n'avez besoin que de la structure de la table et non du
     leur contenu pour faire une copie du site.
    Pour réaliser une copie brute, essayer une des méthodes suivantes :
    * Si vous utilisez Drush, utiliser cette commande, qui inclura seulement la
      structure et non le contenu de ces tables du cache, et compressera la sortie
      avec gzip :
    ```text
    drush sql:dump --gzip --structure-tables-list="cache,cache_*" \
      --result-file='CHEMIN/DE/LA/SAUVEGARDE.sql'
    ```
    * Si vous utilisez MySQL et avez accès à la ligne de commande, utiliser cette
      commande après avoir tronqué le tables du cache (en remplaçant le nom de votre
      base de données ainsi que l'identifiant et le mot de passe) :
    ```text
    mysqldump -u'IDENTIFIANT' -p'MOTDEPASSE' NOMDELABASEDEDONNEES | \
      gzip > CHEMIN/DE/LA/SAUVEGARDE.sql.gz
    ```
    * Si vous utilisez MySQL comme base de données, et que phpMyAdmin est installé sur
      le serveur de votre site de production (il est disponible depuis beaucoup de
      tableaux de bord d'hébergeurs), vous pouvez tronquer les tables du cache en
      les sélectionnant dans le tableau de phpMyAdmin présentant la structure de la
      base de données et choisir l'opération _Vider_ en bas de page. Utiliser alors
      l'onglet _Exporter_ dans phpMyAdmin pour exporter au format _SQL_, avec
      compression _gzip_ pour réduire la taille du fichier.
    * Utiliser le [module contribué Backup and Migrate](https://www.drupal.org/project/backup_migrate)
      depuis votre site en production. Consulter [extend-module-install](./extend-module-install.md) pour des
      instructions sur l'installation de modules contribués.
    Vous disposez maintenant d'une copie de la base de données stockée dans le
    fichier _SAUVEGARDE.sql.gz_. Pour des raisons de sécurité, éviter de stocker ce
    fichier sur le serveur de votre hébergement sous la racine de votre site Drupal.
    Cela empêchera des tiers d'accéder à une copie de votre base de données.
1. Copier tous les fichiers depuis la racine de votre site en production vers
    celle de votre site de développement. Vous pourriez souhaiter utiliser Git pour
    ce faire ; le cas échéant, consulter [extend-git](./extend-git.md).
1. Modifier le fichier _sites/default/settings.php_ sous le répertoire racine de
    votre site avec un éditeur de texte. Trouver les lignes vers la fin contenant
    les nom, identifiant, mot de passe de la base de données, et les remplacer par
    ceux de la base de données du site de développement mise en place. Les lignes
    ressemblent à quelque chose de ce genre (avant modification) :
    ```text
    $databases['default']['default'] = [
      'database' => 'nom_base_donnees_production',
      'username' => 'identifiant_base_donnees_production',
      'password' => 'mot_de_passe_base_donnees_production',
      …
    ```
1. Vérifier si votre fichier _settings.php_ comporte le paramètre suivant ; si
    oui, alors il faudra le modifier pour qu'il pointe vers l'URL de votre site de
    développement au lieu de l'URL de votre site de production :
    ```text
    $settings['trusted_host_patterns']
    ```
1. Vérifier que votre fichier _settings.php_ comporte le paramètre suivant, et
    que cette chaîne de caractères prend une valeur aléatoire. Dans le cas
    contraire, il vous faudra l'ajouter ou le modifier afin d'éviter une erreur
    fatale :
    ```text
    $settings['hash_salt'] = 'une_chaine_aleatoire';
    ```

    Une manière de produire une chaîne aléatoire pour le salage du hachage consiste
    à exécuter la commande Drush suivante :

    ```text
    drush php-eval 'echo
      \Drupal\Component\Utility\Crypt::randomBytesBase64(55) . "\n";'
    ```

    Si vous n'utilisez pas Drush, il existe de nombreux sites web et des
    applications mettant à disposition des générateurs de chaînes aléatoires ;
    s'assurer de générer une chaîne longue d'au moins 74 caractères.

1. Importer la copie de la base de données créée dans la base de données du site
    de développement. Essayer une des méthodes suivantes :
    * Si vous utilisez MySQL comme base de données, et que phpMyAdmin est installé
      sur le serveur de votre site de production (il est disponible depuis beaucoup
      de tableaux de bord d'hébergeurs), utiliser l'onglet _Importer_ dans
      phpMyAdmin. Il se pourrait que vous deviez recommencer l'importation plusieurs
      fois, si votre base de données était vraiment volumineuse.
    * Si vous utilisez MySQL et avez accès à la ligne de commandes, utiliser cette
      commande (en remplaçant le nom de votre base de données ainsi que
      l'identifiant et le mot de passe ; si vous avez créé un fichier de sauvegarde
      compressé avec gzip, vous devrez aussi le décompresser au préalable) :
    ```text
    gunzip < CHEMIN/DE/LA/SAUVEGARDE.sql.gz | \
      mysql -u'IDENTIFIANT' -p'MOTDEPASSE' BASEDEDONNEES
    ```
    * Si vous préférez utiliser Drush, utiliser cette commande :
    ```text
    drush sql:query --file='CHEMIN/DE/LA/SAUVEGARDE.sql.gz'
    ```
1. Si vos sites de développement et de production nécessitent des éléments de
    configuration différents, alors vous devez utiliser des surcharges de
    configuration dans le fichier _settings.php_. La variable _$config_ vous aidera
    à maintenir des valeurs surchargées séparément des données de configuration
    standard. Par exemple, vous pourriez vouloir que le nom du site soit "Anytown
    Farmers Market" sur le site de production, mais "Site de développement d'Anytown
    Farmers Market" sur le site de développement. Pour ce faire, vous pourriez avoir
    la valeur de production dans la configuration de votre site (dans la base de
    données), et sur le site de développement, dans le fichier settings.php, vous
    auriez besoin de rajouter :
    ```text
    $config['system.site']['name'] =
      "Site de développement d'Anytown Farmers Market";
    ```

## Pour approfondir

* Vérifier que le site de développement fonctionne correctement.
* Se connecter sur le site de développement en tant qu'administrateur, et vider
le cache. Consulter [prevent-cache-clear](./prevent-cache-clear.md).
* [extend-deploy](./extend-deploy.md)
* [extend-git](./extend-git.md)
## Vidéos (en anglais)

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/FSBNm4oAkaA" title="Making a Development Site" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Additional resources (en anglais)

* [Installing a new Drupal application on your local machine](https://www.drupal.org/docs/official_docs/en/_local_development_guide.html)
* [Creating a Drupal demo application for evaluation purposes](https://www.drupal.org/docs/official_docs/en/_evaluator_guide.html)

*Attributions*

Écrit et modifié par [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) de
[Drupalize.Me](https://drupalize.me), et
[Jojy Alphonso](https://www.drupal.org/u/jojyja) de
[Red Crackle](http://redcrackle.com). Traduit par
[Felip Manyer i Ballester](https://www.drupal.org/u/fmb).
