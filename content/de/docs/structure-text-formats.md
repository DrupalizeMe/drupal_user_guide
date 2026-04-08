---
title: "Konzept: Textformate und Editoren"
description: "Überblick über Textformate, Filter, Editoren und Cross-Site-Scripting."
id: "structure-text-formats"
translation_key: "structure-text-formats"
source_locale: "de"
---
## Was sind Textformate und Filter? { #structure-text-formats }

_Textformate_ ändern die Art und Weise, wie HTML-Tags und anderer Text
auf Ihrer Website verarbeitet und angezeigt werden. Textformate bestehen aus einer Reihe von _Filtern_, von denen jeder den
Text auf eine bestimmte Art formatiert. Wenn Benutzer Inhalte erstellen, wird sowohl das jeweilige Textformat
als auch der unformatierte Inhalt in der Datenbank gespeichert. Der Inhalt durchläuft dann die Filter in dem Textformat, bevor er final auf der Website dargestellt wird.

Das Kernsystemmodul Filter stellt die Textformat-Funktionalität zur Verfügung. Das Installationsprofil Standard
richtet die Textformate _Einfaches HTML_, _Eingeschränktes HTML_ und _Vollständiges HTML_ ein.
Jedem Textformat ist eine Berechtigung zugeordnet, so dass Sie erweiterte Textformate nur
vertrauenswürdigen Benutzern zugänglich machen müssen. So können Sie festlegen welche HTML-Tags und Filter
nicht vertrauenswürdige Benutzer verwenden dürfen. Das Textformat _Einfaches HTML_ enthält beispielsweise weniger Funktionen und zulässige HTML-Tags als das format _Vollständiges HTML_
## Welche Editoren sind den Textformaten zugeordnet?

Jedes Textformat kann mit einem Editor verknüpft werden, z. B. einem visuellen WYSIWYG
(What You See Is What You Get) HTML-Editor. Das Texteditor Modul des Kernsystems bietet
die Möglichkeit, Editoren mit Textformaten zu assoziieren und die Editoren zu konfigurieren
(indem Buttons aus der Symbolleiste eines Editors entfernt oder, falls gewünscht neue Buttons hinzugefügt werden können). Das Modul CKEditor, das mit dem Kernsystem ausgeliefert wird,
stellt den  bekannten Industriestandard CKEditor zur Verfügung. Dieser kann zur Bearbeitung von HTML-Inhalten auf Ihrer Website verwendet werden.
## Was ist Cross-Site-Scripting?

Cross-Site-Scripting (XSS) ist eine Sicherheitslücke, die typischerweise in
Webseiten auftreten kann. Auf einer Website, die nicht gut geschützt ist, können böswillige Benutzer Skripts ausführen,
die von Websites stammen, die von anderen Internetnutzern betrieben werden (Dies kann zum Beispiel in einem Kommentar oder in einem Hauptartikel Ihrer Website passieren). Eine Cross-Site-Scripting-Schwachstelle kann von
Angreifern genutzt werden,  um sich als anderer Benutzer anzumelden. Es ist wichtig die 
Textformate Ihrer Website, korrekt zu konfigurieren, um einen solchen Missbrauch zu verhindern.
## Verwandte Themen

[security-concept](./security-concept.md)
## Zusätzliche Ressourcen

* [_Drupal.org_ Community-Dokumentationsseite „Filtermodul: Textformate, die Benutzereingaben filtern“ (englisch)](https://www.drupal.org/docs/8/core/modules/filter/overview)
* [Wikipedia-Seite "Webseitenübergreifendes Skripting“ (englisch)](https://en.wikipedia.org/wiki/Cross-site_scripting)

*Mitwirkende*

Geschrieben und herausgegeben von [Boris Doesborg](https://www.drupal.org/u/batigolix) und
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
