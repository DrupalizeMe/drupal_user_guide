---
title: "Eine Ansicht duplizieren"
description: "Wie man eine neue Seite durch Duplizieren einer Ansicht erstellt."
id: "views-duplicate"
translation_key: "views-duplicate"
source_locale: "de"
---
## Zielsetzung { #views-duplicate }

Erstellen Sie eine Seite mit Rezepten, indem Sie die vorhandene Ansicht _Lieferanten_ duplizieren.  Ändern Sie
die Seite so, dass die Rezepte mit einem Raster angezeigt und nach Zutaten gefiltert werden können.
## Erforderliche Vorkenntnisse

* [views-concept](./views-concept.md)
* [views-parts](./views-parts.md)
* [views-create](./views-create.md)
## Anforderungen an die Website

* Die Inhaltstypen Lieferant und Rezept müssen vorhanden sein, Beide Inhaltstypen müssen ein Hauptbild enthalten
und der Inhaltstyp Rezept muss ein Feld Zutaten enthalten. Ihre Website muss auch einige Inhalte vom Inhaltstyp _Rezept_ enthalten.
 Siehe: [structure-content-type](./structure-content-type.md),
[structure-fields](./structure-fields.md), [structure-taxonomy-setup](./structure-taxonomy-setup.md), [structure-form-editing](./structure-form-editing.md),
und [content-create](./content-create.md).
* Die Ansicht Lieferanten muss vorhanden sein. Siehe: [views-create](./views-create.md).
## Arbeitsschritte

1. Navigieren Sie Im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Ansichten_ (_admin/structure/views_).
    Suchen sie die Ansicht „Lieferanten" und Klicken sie auf _Duplizieren_ innerhalb des Dropbuttons der Ansicht.
    (Beachten sie, dass die Namen der Ansichten, die mit Ihrem  Installationsprofil ausgeliefert werden hier in Englisch angezeigt werden. Siehe: [language-concept](./language-concept.md) um eine Erklärung dazu zu lesen.)
    <img src="/images/views-duplicate_duplicate.webp" alt="Duplicate existing view" width="100%" />
1. Geben Sie dem Duplikat den Namen "Rezepte" und klicken Sie auf _Duplizieren_. Die Seite Ansicht konfigurieren wird angezeigt.
1. Um den Titel der Seite in "Rezepte" zu ändern, Klicken Sie auf Lieferanten im Feld _Titel_. Das  Popup _Titel der Ansicht_ wird geöffnet. Geben Sie "Rezepte" ein und klicken Sie auf _Übernehmen_.
    <img src="/images/views-duplicate_title.webp" alt="Change view title" width="100%" />
1. Um von einer tabellarischen Ansicht in eine Rasteransicht zu wechseln, klicken Sie im Abschnitt _Format_ auf _Tabelle_.
    Das  Popup _Wie soll dies Ansicht dargestellt werden?_ erscheint.
    Klicken sie auf _Raster_ und anschließend auf Anwenden. Das Popup _Darstellungsoptionen_
    erscheint. Lassen Sie die Standardeinstellungen unverändert und klicken Sie auf _Anwenden_.
1. Wenn Sie nur den Titel und die Bildfelder für die Ansicht "Rezepte" beibehalten möchten, klicken Sie auf
    _Inhalt: Textkörper_ im Abschnitt _Felder_. Klicken sie auf _Entfernen_ im Popup, dass daraufhin erscheint.
1. Um den Filter für den Inhaltstyp so zu ändern, dass der Inhaltstyp "Rezept" verwendet wird,
    klicken Sie im Abschnitt _Filterkriterien_ auf _Inhalt: Inhaltstyp_ und wählen Sie im Popup .Im Bereich
    _Filterkreterien konfigurieren: Inhalt: Typ_ und Wählen Sie im Popup-Diaog _Filterkkriterien: Inhalt: Inhaltstyp kofnfigfurieren_ den Inhaltstyp _Rezepte_ aus und den Inhaltsty _Lieferanten_ ab. 
1. klicken Sie auf _Übernehmen_.
1. Um einen weiteren Filter hinzuzufügen, der den Besuchern der Website angeboten wird, klicken Sie
    im Dropbutton im Abschnitt _Filterkreterien_ auf _Hinzufügen_. Suchen sie nach dem Wert „Zutaten" und wählen Sie im Popup-Dialogf _Felder hinzufpgen_ das Feld Zutaten (field_Zutaten) aus. Klicken sie auf _Filterkriterien hinzufügen_.
1. Das erscheinende Pop-up bietet zusätzliche Einstellungen zu Vokabularien und Auswahlkriterien
    Klicken sie auf _Filterkriterien hinzufügen und Konfigureiren_. Im nächsten Pop-up können Sie diese
    Filter Besuchern zur Verfügung stellen. Füllen Sie die Felder wie unten gezeigt aus und klicken Sie auf _Anwenden und Fortsetzen_.
    <table>
      <thead>
        <tr>
          <th>Feldname</th>
          <th>Erläuterung</th>
          <th>Beispielwert</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Diesen Filter für Seitenbesucher freigeben, so dass sie die Optionen selbst wählen können.</td>
          <td>Besuchern erlauben, zu filtern und zu suchen</td>
          <td>Ausgewählt</td>
        </tr>
        <tr>
          <td>Erforderlich</td>
          <td>Ob ein Wert angegeben werden muss oder nicht</td>
          <td>Nicht Ausgewählt</td>
        </tr>
        <tr>
          <td>Beschreibung</td>
          <td>Beschreibung, das für diesen Filter auf der Ansichtsseite angezeigt wird</td>
          <td>Rezepte suchen mit...</td>
        </tr>
      </tbody>
    </table>

    ![Expose filter](/images/views-duplicate_expose.webp)

1. Um die Bezeichnung für das Feld _Pfad_ in "Rezepte" zu ändern, klicken Sie auf "/lieferanten" im Feld _Pfad_
    im Abschnitt _Seiteneinstellungen_. Geben Sie im daraufhin erscheinenden Popup
    "rezepte" ein und klicken Sie auf _Anwenden_.
    Beachten Sie, dass Sie beim Bearbeiten einer Ansicht im Gegensatz zu
    anderen Verwaltungsberecchsseiten (z. B. beim Bereitstellen einer Pfadangabe zu einem Inhalt), Pfadangaben ohne den anführenden "/" eingeben,
1. Um den Titel des Menülinks zu ändern klicken Sie im Abschnitt _Seiteneinstellungen_ > _Menü_ auf "Normal: Lieferanten".
    Ändern Sie in dem erscheinenden Popup-Fenster den Titel in "Rezepte" und klicken Sie auf _Anwenden_.
1. Damit Sie Ajax verwenden können (siehe: [Ajax entry in the Glossary](./glossary.md#glossary-ajax)) um das Filtern und seitenweise Anzeigen für die Benutzer schneller zu gestalten
    Klicken Sie unter _Erweitert_ > _Weitere_  im Abschnitt Ajax verwenden auf
    _Nein_. Wählen Sie im erscheinenden Popup-Fenster _AJAX verwenden_  und
    klicken Sie auf _Anwenden_.
1. Klicken Sie auf _Speichern_ um die Änderungen an der Ansicht zu übernehmen.
1. Gehen Sie zurück auf die Startseite und klicken Sie in der Navigation auf Rezepte um die neue Rezeptseite aufzurufen.
    <img src="/images/views-duplicate_final.webp" alt="Recipes view" width="100%" />

## Vertiefen Sie Ihr Wissen

Der Link zur Ansicht in der Hauptnavigation wird sich wahrscheinlich nicht an der richtigen Stelle befinden. 
Ändern Sie die Reihenfolge der Menüpunkte in der Hauptnavigation. Siehe:
[menu-reorder](./menu-reorder.md).
## Verwandte Konzepte

* [planning-structure](./planning-structure.md)
* [Ajax entry in the Glossary](./glossary.md#glossary-ajax)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/weWFDgw84_M" title="Eine Ansicht duplizieren (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben und herausgegeben von [Laura Vass](https://www.drupal.org/u/lolk) at
[Pronovix](https://pronovix.com/),
und [Jojy Alphonso](https://www.drupal.org/u/jojyja) bei
[Red Crackle](http://redcrackle.com).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
