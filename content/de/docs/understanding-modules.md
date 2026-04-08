---
title: "Konzept: Module"
description: "Überblick über die Module und die Funktionalität, für die sie verwendet werden können."
id: "understanding-modules"
translation_key: "understanding-modules"
source_locale: "de"
---
## Erforderliche Vorkenntnisse { #understanding-modules }

[understanding-drupal](./understanding-drupal.md)
## Was ist ein Modul?

Ein Modul ist ein Satz von PHP-, JavaScript- und/oder CSS-Dateien, der bestimmte neue Funktionen innerhalb einer
Drupal-Website bereitstellt. Eine neue Funktion, können Sie durch die _Installation_ eines zusätzlichen Moduls aktivieren. 

Durch die _Deinstallation_ eines Moduls, 
kann eine bestimmte Funktion auf Wunsch auch abgeschaltet werden. 
Vor der Deinstallation müssen Sie möglicherweise 
Daten und Konfigurationen entfernen, 
die mit der Funktionsweise eines Moduls in Zusammenhang stehen. 
Jedes Modul, das installiert wird, erhöht die 
Ladezeit der Website. Daher ist es eine gute Idee, 
Module die nicht benötigt werden, zu deinstallieren, 
um die Ladezeit einer Website so kurz wie möglich zu halten.

Das Kernsystem bietet Module für Funktionen wie:

* Das Verwalten von Benutzerkonten (mittels des Kernsystemmoduls User).
* Das Verwalten des grundlegenden Inhalts (mittels des Kernsystemmoduls Node) und der im Inhalt enthaltenen Felder (mittels der Kernsystemmodule Field und Field-UI. Es gibt auch Kernsystemmodule, die zusätzliche Feldtypen bereitstellen).
* Das Verwalten von Navigationsmenüs (mittels des Kernsystemmoduls Menu-UI)
* Das Erstellen von Listen, Rastern und Blöcken aus vorhandenen Inhalten (mittels der Kernsystemmodule Views und
Views-UI).

Sie können die _von der Community bereitgestellten Zusatzmodule_ von der Website
[_Drupal.org_ Modul-Downloads](https://www.drupal.org/project/project_module) herunterladen oder eigene
_benutzerdefinierte Module_ erstellen.
## Verwandte Themen

* [understanding-themes](./understanding-themes.md)
* [understanding-distributions](./understanding-distributions.md)
* [config-uninstall](./config-uninstall.md)
* [extend-module-find](./extend-module-find.md)
* [extend-module-install](./extend-module-install.md)
* [security-concept](./security-concept.md)
* [security-update-module](./security-update-module.md)
## Zusätzliche Ressourcen

[_Drupal.org_ Community-Dokumentationsseite „Leitfaden für Modulentwickler"](https://www.drupal.org/developing/modules) (englisch)

*Mitwirkende*

Geschrieben von [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). 

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
