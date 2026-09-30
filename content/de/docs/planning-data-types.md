---
title: "Konzept: Inhaltsentitäten und Felder"
description: "Überblick über Inhaltsentitäten und Felder."
id: "planning-data-types"
translation_key: "planning-data-types"
source_locale: "de"
---
## Vorausgesetztes Wissen { #planning-data-types }

* [understanding-data](./understanding-data.md)
* [understanding-modules](./understanding-modules.md)
## Was ist eine Inhaltsentität?

Eine _Inhaltsentität_ (auch _Entität_ genannt) ist ein Element von
Inhaltsdaten, die aus Text, HTML-Markup, Bildern, angehängten Dateien und
anderen Daten bestehen können, die dem Besuchern der Website angezeigt werden
sollen. Inhaltsentitäten können vom Kernsystem oder von Modulen definiert
werden.

Inhaltsentitäten werden in _Entitätstypen_ gruppiert, die unterschiedliche
Zwecke haben und auf sehr unterschiedliche Weise auf der Website angezeigt
werden. Die meisten Entitätstypen werden zusätzlich in _Entitäts-Subtypen_
unterteilt, die einen Entitätstyp noch genauer unterteilen, um kleinere
Variationen bei der Verwendung und Darstellung von Entitäten zu ermöglichen.
im Folgenden finden Sie eine Tabelle die einige gängige Inhaltsentitätstypen
enthält:

| Entitätstyp | Subtyp der Entität | Definierendes Modul | Hauptanwendungszweck |
| --- | --- | --- | --- |
| Inhaltselement | Inhaltstyp | Node | Inhalt, der als Hauptbestandteil der Seiten auf der Website vorgesehen ist<br><br>*Beispiel:* Im Beispiel der Website des Wochenmarktes könnten Sie Inhalstypen für Basisseiten, Lieferantenseiten und Rezeptseiten erstellt haben. |
| Kommentar | Kommentartyp | Comment | Fügt Kommentare (typischerweise)zu Inhalten hinzu<br><br>*Beispiel:* Auf einer Blog-Seite können Blog-Beiträge Kommentare haben. Dies wird für das Beispiel der Wochenmarkt-Website nicht benötigt. |
| Benutzerprofil | (kein Subtyp) | User | Daten zu einer Person mit einem Benutzerkonto (Login-Zugang) auf der Website<br><br>*Beispiel:* Jede Website hat mindestens grundlegende Benutzerprofile mit Benutzernamen und E-Mail-Adressen. Soziale Netzwerke verwenden möglicherweise komplexere Benutzerprofile die wesentlich mehr Informationen enthalten. |
| Benutzerdefinierter Block | Blocktyp | Bibliothek benutzerdefinierter Blöcke | Text und Bilder in kleineren Abschnitten, die oft im Header, der Fußzeile oder den Seitenleisten der Website angezeigt werden.<br><br>*Beispiel:* Im Beispiel der Website des Wochenmarktes ist das beispielsweise der Block mit den Angaben zu den Öffnungszeiten und dem Standort des Wochenmarktes. |
| Taxonomie-Begriff | Vokabular | Taxonomy | Wird zur Klassifizierung anderer Arten von Inhalten verwendet<br><br>*Beispiel:* Im Beispiel der Website des Wochenmarktes könnten Sie Rezeptinhalte mittels eines Taxonomievokabulars für Zutaten, mit Taxonomie-Begriffen wie Karotten und Tomaten klassifizieren. Auf einer Blogging-Website können Blog-Beiträge unter Verwendung eines Tag-Vokabulars und vielleicht auch eines Kategorien-Vokabulars klassifiziert werden. |
| Datei | (keine) | File | Ein Bild oder eine Datei mit Anlagen, die von der Website gespeichert und verwaltet wird, oft<br><br>*Beispiel:* Im Beispiel der Webseite des Wochenmarktes könnten sowohl die Rezept- als auch die Leiferantenseiten Bildanhänge enhalten, die (hinter den Kulissen) von der Website als Datei-Entitäten verwaltet werden. |
| Kontaktformular | Formulartyp | Contact | Ein Formular, mit dem Website-Besucher die Eigentümer der Website kontaktieren können |
|  |  |  | *Beispiel:* Ein Kontaktformular wird im Beispiel des Wochenmarktes benötigt. |
## Was ist ein Feld?

Innerhalb von Entitätstypen werden die Daten in einzelnen _Feldern_ gespeichert,
von denen jedes eine bestimmte Art von Daten, wie formatierten Text oder
Klartext, Bilder oder andere Dateien oder Daten enthält.
Feldtypen können durch das Kernsystem oder durch Module definiert werden.

Felder können von einem Administrator in Entitätssubtypen hinzugefügt
werden, so dass alle Entitäts-Subtypen einer bestimmten Entität  die
gleiche Sammlung von Feldern enthalten.
Der Inhaltstyp Lieferant könnte  am Beispiel des Wochenmarktes
Felder für den Namen eines Lieferanten, eine Bilddatei mit einem Lieferanten-Logo,
die URL einer Website und eine Beschreibung enthalten. Der Inhaltstyp
_Einfache Seite_  enthält hingegen möglicherweise nur Felder für
den Titel der Seite und ein Feld für den Textkörper der Seite. Wenn Sie
Entitätstypen anlegen oder bearbeiten, sind Sie die Person, die
die Werte für die Felder auf dem Entitätstypen angibt.
## Verwandte Themen

* [planning-structure](./planning-structure.md)
* [content-create](./content-create.md)
* [structure-content-type](./structure-content-type.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [user-concept](./user-concept.md)
* [block-concept](./block-concept.md)

*Mitwirkende*

Geschrieben und herausgegeben von [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)
und [Grant Dunham](https://www.drupal.org/u/gdunham).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
