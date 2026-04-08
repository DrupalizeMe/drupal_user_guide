---
title: "Konzept: Redaktionelle Arbeitsabläufe"
description: "Überblick über redaktionelle Arbeitsabläufe zur Verwaltung von Inhalten auf einer Website."
id: "planning-workflow"
translation_key: "planning-workflow"
source_locale: "de"
---
## Vorausgesetztes Wissen { #planning-workflow }

* [understanding-drupal](./understanding-drupal.md)
* [planning-data-types](./planning-data-types.md)
## Was ist ein redaktioneller Arbeitsablauf?

Ein _redaktioneller Arbeitsablauf_ ist der Prozess, den Organisationen zur Erstellung,
Bearbeitung, Veröffentlichung und Überprüfung  von Inhalten befolgen,
Mehrere Personen in verschiedenen Positionen innerhalb einer Organisation können
an diesem Prozess beteiligt sein. Autoren könnten zum Beispiel Informationen
sammeln und Inhalte verfassen. Redakteure könnten Informationen überprüfen,
bearbeiten und die Inhalte nach Abschluss eventueller Korrekturarbeiten
veröffentlichen. Später könnten inhaltliche Überarbeitungen mittels eines
schlankeren Prozesses durchgeführt werden, um kleinere Anpassungen überprüfbar
zu machen. Es kann auch ein separater Prozess für größere Änderungen festgelegt
werden, damit diese nach der Aktualisierung erneut veröffentlicht  werden können.
## Welche Werkzeuge stehen zur Implementierung von Arbeitsabläufen zur Verfügung?

- **Status veröffentlicht/nicht veröffentlicht:** Der Entitätstyp Inhalt unterstützt die Kennzeichnung aller Inhalte als Veröffentlicht oder nicht veröffentlicht. Anzeigeberechtigungen für veröffentlichte und nicht veröffentlichte Inhalte  sind voneinander getrennt. Zum Beispiel könnten alle Besucher der Website in der Lage sein veröffentlichte Inhalte anzuzeigen, während nur Autoren und Redakteure noch nicht veröffentlichte Inhalte sehen können.
- **Änderungsverfolgung mittels Revisionierung:** Einige Entitätstypen unterstützen die Revisionierung, d.h. wenn Inhalt überarbeitet wird, speichert die Software die älteren Revisionen, so dass Inhaltsversionen verglichen und Änderungen zurückgesetzt werden können.
- **Arbeitsabläufe:** Mit dem Modul  Workflow, dass mit dem Kernsystem ausgeliefert wird, können Sie Zustände und Übergänge innerhalb eines Arbeitsablaufes definieren, Die Möglichkeiten gehen dabei über das bloße Veröffentlichen oder Nichtveröffentlichen von Inhalten hinaus. Die Funktionalität für Arbeitsabläufe wird durch das mit dem Kernsystem ausgelieferte Modul Content Moderation ergänzt, mit dem Sie Berechtigungen und Rollen für Übergänge innerhalb von Arbeitsabläufen festlegen können. Beide Module können sowohl für Inhalte als auch für benutzerdefinierte Blöcke verwendet werden.
- **Platzierung von Blöcken:** Mit der Inhaltsentität „Benutzerdefinierter Block” können Sie einen benutzerdefinierten Block erstellen und bearbeiten und erst dann auf der Website veröffentlichen, wenn der Blockinhalt fertig erstellt wurde.
## Verwandte Themen

* [content-create](./content-create.md)
* [content-edit](./content-edit.md)
* [block-create-custom](./block-create-custom.md)
* [block-place](./block-place.md)

*Mitwirkende*

Geschrieben und herausgegeben von [Diána Lakatos](https://www.drupal.org/u/dianalakatos) bei
[Pronovix](https://pronovix.com//),
[Grant Dunham](https://www.drupal.org/u/gdunham),
und [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
