---
title: "Konzept: Modularer Inhalt"
description: "Überblick über modulare Inhalte und wie der Inhalt einer Website aus anderen Quellen bezogen werden kann."
id: "planning-modular"
translation_key: "planning-modular"
source_locale: "de"
---
## Erforderliche Vorkenntnisse { #planning-modular }

* [planning-data-types](./planning-data-types.md)
* [planning-layout](./planning-layout.md)
## Was sind modulare Inhalte?

Da die Inhalte Ihrer Website in einer Datenbank gespeichert sind, ist es wünschenswert
Inhalte _modular_ anzulegen, d.h. definierte Seiten auf Ihrer Website zu erstellen, anstatt
die Website als Ganzes bearbeiten zu müssen. Die Seiten der Website werden dann
aus mehreren Inhaltselementen zusammengesetzt. Im Szenario der Wochenmarktwebsite
könnten Sie zum Beispiel einzelne Inhaltselemente für Rezepte anlegen.
Wenn die einzelnen Zutaten eines Rezeptes in einem Feld abgespeichert werden,
kann die Zutatenliste eines einzelnen Rezeptes aus diesen Zutaten zusammengesetzt werden.
Ihre Website kann auch eine Seite enthalten, auf der man Rezepte mittels der Zutaten suchen
kann, die man auf dem Wochenmarkt gekauft hat.

Kleinere Seitenabschnitte können ebenfalls aus verschiedenen Inhaltselementen zusammengesetzt werden.
Rezepte können Beispielsweise ein Feld enthalten, das Auskunft darüber gibt, welcher
Lieferant das Rezept eingereicht hat (siehe: [structure-reference-fields](./structure-reference-fields.md)).
So können die Details zum jeweiligen Lieferanten in separaten
Inhaltselementen bearbeitet werden. So ist es Ihnen möglich,
folgendes auf Ihrer Website umzusetzen:

* Auf jedem Rezept kann es einen Abschnitt geben, der einige Informationen
über den Lieferanten anzeigt, der das Rezept eingereicht hat, wie z.B. dessen
Name und die Nummer seines Marktstandes.
* Jede Lieferantenseite kann einen Abschnitt enthalten, in dem die Rezepte
  aufgelistet werden, die der Lieferant eingereicht hat.

Der Gedanke dahinter ist, dass jede Information nur an einer Stelle auf der
Website bearbeitet wird. Wenn Lieferanteninformationen geändert werden,
werden diese Informationen auf allen Rezepten des jeweiligen Lieferanten
aktualisiert angezeigt, nachdem Sie nur an einer Stelle auf der Website
aktualisiert wurden. Wird ein neues Rezept von einem Lieferanten eingereicht,
werden die Informationen zum Lieferanten automatisch auf dem neu eingestellten
Rezept angezeigt, ohne dass diese auf der Rezeptseite selbst manuell
eingetragen werden müssen. Das Modul Views, das mit dem Kernsystem ausgeliefert
wird, ist das Modul, das üblicherweise verwendet wird, um modulare Inhalte zu
Seitenabschnitten oder vollständigen Webseiten zusammenzusetzen.
Siehe: [views-concept](./views-concept.md) für weitere Informationen. Außerdem sind
_Ansichtsmodi_ nützlich um unterschiedliche  Anzeigearten für den selben Inhalt
zu definieren. Siehe: [structure-view-modes](./structure-view-modes.md) für weitere Informationen.
## Verwandte Themen

* [planning-structure](./planning-structure.md)
* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-reference-fields](./structure-reference-fields.md)
* [structure-view-modes](./structure-view-modes.md)
* [views-concept](./views-concept.md)

*Mitwirkende*

Geschrieben von [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
