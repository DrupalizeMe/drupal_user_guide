---
title: "Concepte: Eines addicionals"
description: "Resum de les eines addicionals que ajuden als constructors de llocs a crear-ne convenientment."
id: "install-tools"
translation_key: "install-tools"
source_locale: "ca"
---
## Quines eines estan disponibles pels constructors de llocs? { #install-tools }

Hi ha diverses eines addicionals disponibles que ajuden a crear els llocs de forma més ràpida, més precisa i amb menys esforç.

- **Drush:** Vegeu més a avall per a més informació sobre el Drush.
- **Git:** El [Git](https://git-scm.com/) és un sistema de control de versions que podeu utilitzar per seguir els canvis fets als fitxers al vostre lloc complet o als fitxers relacionats només al mòdul o tema que estigueu usant. El Git permet provar canvis, i si és necessari, tornar a una versió anterior. També es pot utilitzar per controlar canvis als fitxers de configuració i sincronitzar la configuració de diferents llocs. El Git s'ha convertit en l'estàndar pels projectes de desenvolupament web.
- **Composer:** Vegeu més a avall per a més informació sobre el Composer.
- **Devel:** El [mòdul contribuït Devel](https://www.drupal.org/project/devel) ajuda amb les tasques de desenvolupament, com el depurat i la inspecció de codi, l'anàliside consultes a la base de dades i la generació de contingut de prova.
## Què té d'especial el Drush?

El [Drush](http://www.drush.org) és una eina de línia de comandes per construir i mantenir llocs, proporcionant una alternativa a l'ús de la interfície d'administració per moltes operacions. Molts constructors de llocs i mantenidors prefereixen utilitzar el Drush sempre que es pot i consideren el temps emprat instal·lant-lo i aprenent a utilitzar-lo com a una bona inversió. Raons per considerar l'ús del Drush:

* El Drush proporciona un gran nombre de comandes per tasques com per exemple instal·lar el programari bàsic, mòduls i temes; actualitzar el programari; realitzar operacions de bases de dades, incloent la còpia i consulta; restablir contrasenyes i netejar la memòria cau. Alguns dels mòduls i temes contribuits també defineixen comandes del Drush.
* Fer feines administratives utilitzant el Drush és típicament més ràpid i menys tediós que fer-les mitjançant la interfície d'administració
* Com el Drush és una interfície de línies de comandes, podeu escriure scripts que combinen les comandes del Drush i d'altres comandes al servidor, per automatitzar tasques més complicades.
* El Drush proveeix funcionalitats addicionals no disponibles a la interfície d'administració; per exemple, executar consultes a la base de dades.

Si voleu utilitzar el Drush, necessitareu tenir accés a la terminal de línia de comandes al servidor on el vostre lloc web estarà allotjat, i necessitareu una versió compatible de l'eina del Drush instal·lada en aquest servidor. Comproveu el [lloc web del Drush](http://www.drush.org) per les instruccions d'instal·lació i la compatibilitat de versions. També hi ha documentació en aquest lloc de les comandes disponibles del Drush.
## Per a què s'usa el Composer?

El [Composer](https://getcomposer.org/) és una eina per a gestionar dependències del PHP, on el desenvolupador especifica quina versió de cada biblioteca externa es necessita, i el Composer gestiona el procés de descàrrega i instal·lació d'aquesta.

El nucli és un usuari principal del Composer, perquè utilitza diverses biblioteques desenvolupades externament, les quals han de descarregar-se i instal·lar-se per tal que el nucli pugui funcionar. Quan instal·leu el nucli, haureu de descarregar un fitxer comprimit que contingui les versions compatibles de les biblioteques externes, o bé haureu d'executar el Composer per a descarregar les biblioteques externes després de la descàrrega inicial.

Alguns mòduls contibuïts també fan ús de biblioteques desenvolupades externament; per exemple, un mòdul d'integració amb el Facebook podria requerir la instal·lació de la biblioteca d'integració amb el Facebook per tal de que funcioni el mòdul, i un mòdul geogràfic podria utilitzar una biblioteca estàndard de funcions geogràfiques. Per a instal·lar un mòdul amb dependències externes, haureu d'executar el Composer.
## Quines eines estan disponibles pels desenvolupadors de mòduls i temes?

A més de les eines de constructors de llocs esmentades anteriorment, les següents eines estan disponibles pels desenvolupadors de mòduls o temes.

- **Drupal Console:** El [Drupal Console](https://drupalconsole.com) és una eina de línia de comandes que genera esquemes de codi i interactua amb un lloc Drupal. Pot generar, per exemple, el codi d'un bloc o formulari, instal·lar mòduls i temes i crear contingut postís. La Drupal Console utilitza la Symfony Console.
- **Coder:** El [Coder](https://www.drupal.org/project/coder) és una eina de línia de comandes que comprova si els vostres mòduls i temes compleixen els estàndars de codi i altres bones pràctiques. També pot arreglar violacions dels estàndards de codi.
- **Firebug:** El [Firebug](http://getfirebug.com) és un connector del Firefox que permet visualitzar, editar, depurar i controlar el CSS, l'HTML i el JavaScript en una finestra separada del navegador. El [mòdul contribuït Drupal for Firebug](https://www.drupal.org/project/drupalforfirebug) mostra informació  sobre la depuració del Drupal i les consultes SQL a la finestra del Firebug.
## Temes relacionats

[install-composer](./install-composer.md)
## Recursos adicionals

* [Pàgina de documentació de la comunitat a _Drupal.org_ "Development tools"](https://www.drupal.org/node/147789)
* [Pàgina de documentació de la comunitat a _Drupal.org_ "Using Composer with Drupal"](https://www.drupal.org/docs/develop/using-composer/using-composer-with-drupal)

*Atribucions*

Escrit i editat per [Boris Doesborg](https://www.drupal.org/u/batigolix)
i [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
Traduït per [Andreu Pavia](https://www.drupal.org/u/andreupav) i [Ramon Vilar](https://www.drupal.org/u/rvilar) d'[Ymbra](https://ymbra.com). Revisat per  [Ramon Vilar](https://www.drupal.org/u/rvilar) d'[Ymbra](https://ymbra.com).
