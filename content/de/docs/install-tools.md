---
title: "Konzept: Zusätzliche Werkzeuge"
description: "Überblick über zusätzliche Tools, die Webentwicklern helfen, Websites bequem zu erstellen."
id: "install-tools"
translation_key: "install-tools"
source_locale: "de"
---
## Welche Werkzeuge stehen Site-Buildern zur Verfügung? { #install-tools }

Es gibt verschiedene zusätzliche Tools, die Ihnen helfen, Websites schneller, präziser und mit weniger Aufwand zu erstellen.

- **Drush und Drupal-Console:** Mehr über Kommandozeilenwerkzeuge erfahren Sie weiter unten.
- **Git:** Mehr über Versionskontrollwerkzeuge erfahren Sie weiter unten.
- **Composer:** Weitere Informationen zu Composer finden Sie weiter unten. Devel:: Das von der Community bereitgestellte Zusatzmodul [Devel](https://www.drupal.org/project/devel) hilft bei Entwicklungsaufgaben wie beispielsweise dem Debuggen und dem Inspizieren von Quelltext, der Analyse von Datenbankabfragen und der Generierung von Platzhalter-Inhalten.
## Was sind Befehlszeilenwerkzeuge?

Befehlszeilenwerkzeuge bieten eine Alternative zur Verwendung des
administrativen Teils der Benutzeroberfläche, um verschiedene Aktionen an und
auf Ihrer Website auszuführen. Viele Webentwickler, Programmierer und
Projektbetreuer investieren aus folgenden Gründen Ihre Zeit in die
Installation und das Erlernen diverser Kommandozeilenwerkzeuge:

* Administrative Aufgaben lassen sich normalerweise schneller und mit weniger
Aufwand durchführen, wenn Sie über die Kommandozeile und nicht über die
Benutzeroberfläche ausgeführt werden.
* Sie können Skripte schreiben, und Befehle zur Verwaltung der Website mit
anderen Befehlen kombinieren, um komplizierte Aufgaben auf einem Web-Server zu
automatisieren.
* Kommandozeilenwerkzeuge bieten zusätzliche Funktionen, die nicht über die
Benutzeroberfläche zur Verfügung stehen. Zum Beispiel das Ausführen von
Datenbankabfragen.

Die beliebtesten Werkzeuge sind [Drush](http://www.drush.org) und die 
[Drupal-Console](https://drupalconsole.com). Drush ist schon länger verfügbar, und
bietet sowohl Befehle für das Kernsystem als auch für die von der Community
bereitgestellten Zusatzmodule. Drupal Console wurde zunächst als Werkzeug für Modulentwickler erdacht,
besitzt aber eine wachsende Liste von Befehlen für
Site-Builder. Dieses Handbuch dokumentiert Befehle aus der neuesten stabilen
Version von Drush, mit denen viele Aufgaben erledigt werden können.
Befehle der Drupal Console und aus älteren Versionen von Drush werden in diesem
Handbuch nicht dokumentiert. Sie können diese Befehle jedoch in den
Dokumentationen zu Drupal Console und Drush nachlesen.

Um diese Tools verwenden zu können, benötigen Sie Zugang zur Kommandozeile des
Servers auf dem Ihre Website gehostet wird. Außerdem müssen Sie zunächst Composer
installieren um entweder Drush oder die Drupal-Console installieren zu können.

Um Drush oder die Drupal Console zu installieren, stellen Sie zunächst sicher,
dass Ihr Projekt Composer zur Verwaltung von Abhängigkeiten verwendet.
Siehe [install-composer](./install-composer.md).  Verwenden Sie anschließend folgende Befehle:

```text
# Installation von Drush
composer require drush/drush
# Installation der Drupal Console
composer require drupal/console:~1.0 --prefer-dist --optimize-autoloader
```
## Was ist ein Versionskontrollsystem?

Ein Versionskontrollsystem ist  eine Software, die Kopien von Dateien mit einer
Revisions-Historie in einer _Repository_ einrichtet und Ihnen so ermöglicht
Dateien hinzuzufügen, zu löschen und zu aktualisieren. Ein solches
Versionskontrollsystem kann beim Erstellen eines Webprojektes sehr hilfreich
sein. Versionskontrollsysteme bieten unter anderem folgende Vorteile:

* Sie können lokal testen, bevor Sie Dateien auf ihrer Live-Site bereitstellen.
* Sie können frühere Versionen von Dateien betrachten, vergleichen oder wiederherstellen.
* Sie können hinzugefügte, geänderte oder gelöschte Dateien ansehen,
  bevor Sie sich mit den Änderungen an Ihrem Projekt _einverstanden_
  erklären und dadurch die Repository aktualisieren.
* Sie können Änderungen von verschiedenen Teammitgliedern zusammenführen,
* Sie können Dateien und Konfigurationseinstellungen zwischen lokalen Webseiten und Live-Webseiten synchronisiert halten.

Es stehen viele Versionskontrollsysteme zur Auswahl.
Sowohl proprietäre als auch Open-Source-Lösungen. Ein beliebtes System zur Versionskontrolle
ist [Git](https://git-scm.com/). Git ist eine quelloffene Software, die auf den
meisten Computerplattformen läuft. Git ist ein Versionskontrollsystem zur
Verteilung von Software-Versionen, das es Ihnen ermöglicht, eine oder mehrere
Kopien Ihrer Repository zu besitzen. So ist es Ihnen möglich, Änderungen an
einer Kopie der Software vorzunehmen und sie dann nur noch in die
Repository zu übertragen, die Sie als _Hauptsoftwarequelle
(canonical software source)_ festgelegt haben.
In  diese Repository, werden neue Versionen Ihrer Software hochgeladen,
um sie mit anderen zu teilen. Diese Git-Repository kann auf Ihrem lokalen
Computer oder einem Server in Ihrem Unternehmen liegen.
Viele Software-Projekte und Einzelpersonen hosten ihre
Git-Repositories, bei Drittanbieterdiensten wie
[GitLab](https://about.gitlab.com/) oder [GitHub](https://github.com/).
## Wozu wird der Composer verwendet?

[Composer](https://getcomposer.org/) ist ein Werkzeug zur Verwaltung von
PHP-Abhängigkeiten, mit dessen Hilfe Entwickler angeben, welche Version
jeder verwendeten externen Software-Bibliothek in Ihrem Projekt
(Modul, Theme, Website) verwendet wird. Composer übernimmt mittels dieser
Angaben das Herunterladen und die Installation der angegebenen Bibliotheken.

Das Kernsystem verwendet hauptsächlich deshalb Composer, weil es aus mehreren
extern entwickelten Software-Bibliotheken besteht, die heruntergeladen
und installiert werden müssen, damit das Kernsystem funktionieren kann.
Wenn Sie das Kernsystem installieren, können Sie
entweder ein Archiv herunterladen, welches kompatible Versionen der
externen Bibliotheken enthält oder Sie verwenden Composer, um die externen
Bibliotheken nach dem Herunterladen des Kernsystems
aus dem Internet herunterzuladen und installieren zu lassen.
Auch die Kommandozeilenwerkzeuge Drush und Drupal-Console können mittels
Composer installiert werden.

Einige von der Community bereitgestellten Zusatzmodule verwenden ebenfalls
extern entwickelte Software-Bibliotheken. Ein Modul zur Integration von Facebook
könnte beispielsweise Facebook's Software-Bibliothek benötigen, die installiert
werden muss, damit das Modul auf  die von Facebook angebotenen Funktionen
zugreifen kann. Ein Modul zur Darstellung von Landkarten, könnte eine Bibliothek
benötigen, die geographische Angaben wie Längen- und Breitengrade enthält,
um bestimmte Punkte auf einer Landkarte markieren zu können.
Wenn Sie ein Modul mit externen Abhängigkeiten installieren, müssen Sie Composer
ausführen, damit diese Abhängigkeiten heruntergeladen und installiert
werden können.
## Welche Werkzeuge stehen Modul- und Theme-Entwicklern (Designern) zur Verfügung?

Zusätzlich zu den oben erwähnten Werkzeugen für Seiten-Gestalter sind folgende
Werkzeuge für Modul- und Theme-Entwickler verfügbar.

- **Drupal-Console:** [Drupal-Console](https://drupalconsole.com) ist ein Kommandozeilen-Tool, das Code-Vorlagen generiert und mit einer Drupal-Website interagiert. Es kann z. B. Code für Blöcke oder Formulare generieren, Module und Themes installieren und Platzhalter-Inhalte erstellen. Die Drupal Console verwendet die Symfony Console.
- **Coder:** [Coder](https://www.drupal.org/project/coder) ist ein Kommandozeilen-Werkzeug, mit dem überprüft werden kann, ob Ihre Module und Themes den Coding-Standards und anderen Best-Practice-Lösungen entsprechen. Coder kann auch Verstöße gegen Coding-Standards beheben.
- **Browser-Debugging-Werkzeuge:** Webbrowser wie Firefox und Chrome enthalten Tools, die die Anzeige, Bearbeitung, Fehlerbehebung und Überwachung von und in CSS-, HTML- und JavaScript-Dateien ermöglichen. Sie können das Debugging-Fenster bzw. die  Entwicklungswerkzeuge im Browser öffnen, indem Sie mit der rechten Maustaste auf einen Bereich Ihrer Website klicken und „Untersuchen" oder „Element untersuchen" auswählen.
## Verwandte Themen

[install-composer](./install-composer.md)
## Zusätzliche Ressourcen

* [_Drupal.org_ Community-Dokumentationsseite „Entwicklungswerkzeuge“ (englisch)](https://www.drupal.org/node/147789)
* [_Drupal.org_ Community-Dokumentationsseite „Verwendung von Composer mit Drupal (englisch)"](https://www.drupal.org/docs/develop/using-composer/using-composer-with-drupal)
* [Wikipedia-Artikel „Versionsverwaltung“ (englisch)](https://en.wikipedia.org/wiki/Distributed_version_control)

*Mitwirkende*

Geschrieben und herausgegeben von [Boris Doesborg](https://www.drupal.org/u/batigolix)
und [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Einige Texte wurden in angepasster Form aus
[„Einführung in Git"](https://www.drupal.org/node/991716) übernommen.
copyright 2000 - 2026 liegt bei den einzelnen Mitwirkenden an der
[Dokumentation der Drupal-Community](https://www.drupal.org/documentation).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
