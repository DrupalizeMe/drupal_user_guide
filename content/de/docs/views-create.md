---
title: "Erstellen einer Ansicht zur Ausgabe von Listen"
description: "Wie Sie eine Ansicht erstellen."
id: "views-create"
translation_key: "views-create"
source_locale: "de"
---
## Zielsetzung { #views-create }

Erstellen Sie eine Seite mit Lieferanten, die automatisch aktualisiert wird, sobald ein
Lieferant auf der Website hinzugefügt bzw. gelöscht wrid, oder dessen Angaben aktualisiert wurden.
## Erforderliche Vorkenntnisse

* [views-concept](./views-concept.md)
* [views-parts](./views-parts.md)
## Anforderungen an die Website

* Die Kernsystemmodule Views und Views-UI müssen installiert sein. Dieser Schritt wird vom Installationsprofil Standard für Sie erledigt, wenn Sie es zur Installtion von Drupal verwenden.
* Der Inhaltstyp Lieferant muss vorhanden sein. Er Mmss die Felder: URL zur Website des Lieferanten und Hauptbild enthalten.
Die Website muss einige Inhalte des Typs Lieferant enthalten. Siehe [structure-content-type](./structure-content-type.md),
[structure-fields](./structure-fields.md), und [content-create](./content-create.md).
* Der Bildstil _Mittel (220x220)_ muss definiert werden. Dieser Bildstil wird erstellt, wenn das mit dem Kernsystem ausgelieferte Modul Image instaliert wird (Dies wird für Sie vom Installationsprofil Standard erledigt, wenn Sie es zur Installation von Drupal verwenden).  Der Bildstil kann neu erstellt werden, falls er gelöscht wurde. Siehe
[structure-image-style-create](./structure-image-style-create.md).
## Arbeitsschritte

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Ansichten_ > _Hinzufügen
    Ansicht_ (_admin/structure/views/add_). Der Assistent zum Hinzufügen von Ansichten erscheint.
1. Füllen Sie die Felder wie unten dargestellt aus.
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
          <td>Grundlegende Informationen anzeigen > Ansichtsname</td>
          <td>Name der Ansicht, die auf den Verwaltungsseiten sichtbar sein wird</td>
          <td>Anbieter</td>
        </tr>
        <tr>
          <td>Einstellungen der Anssicht > Anzeigen</td>
          <td>Art der in der Ansicht aufgelisteten Informationen</td>
          <td>Inhalt</td>
        </tr>
        <tr>
          <td>Einstellungen der Ansicht  > Anzeigen > vom Typ</td>
          <td>Inhaltstyp angeben</td>
          <td>Lieferant</td>
        </tr>
        <tr>
          <td>Einstellungen der Ansicht  > sortiert nach</td>
          <td>Listenreihenfolge</td>
          <td>Titel</td>
        </tr>
        <tr>
          <td>Seiteneinstellungen > Eine Seite erstellen</td>
          <td>Eine Seite erstellen, die die Ansicht anzeigt</td>
          <td>Ausgewählt</td>
        </tr>
        <tr>
          <td>Seiteneinstellungen > Seitentitel</td>
          <td>Titel wird über der Ansicht angezeigt</td>
          <td>Lieferanten</td>
        </tr>
        <tr>
          <td>Seiteneinstellungen > Pfad</td>
          <td>Adresse der Seite</td>
          <td>lieferanten</td>
        </tr>
        <tr>
          <td>Seiteneinstellungen > Anzzeigeeinstellungen für die Seite > Anzeigeformat</td>
          <td>Art der Liste</td>
          <td>Tabelle</td>
        </tr>
        <tr>
          <td>Seiteneinstellungen > Anzahl anzuzeigender Elemente</td>
          <td>Anzahl der auf der Seite sichtbaren Elemente</td>
          <td>10</td>
        </tr>
        <tr>
          <td>Seiteneinstellungen > Pager verwenden</td>
          <td>Aufteilen der Liste in mehrere Seiten, falls mehr Einträge vorhanden sind</td>
          <td>Ausgewählt</td>
        </tr>
        <tr>
          <td>Seiteneinstellungen > Einen neunen Menülink erstellen</td>
          <td>Hinzufügen der Ansichtsseite zum Menü</td>
          <td>Ausgewählt</td>
        </tr>
        <tr>
          <td>Seiteneinstellungen > Menü</td>
          <td>Menü, in dem der Link hinzugefügt werden soll</td>
          <td>Hauptnavigation</td>
        </tr>
        <tr>
          <td>Seiteneinstellungen > Linktext</td>
          <td>Bezeichnung des Links im Menü</td>
          <td>Lieferanten</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/views-create-wizard.png" alt="Add new view wizard" width="100%" />

1. Klicken Sie auf _Speichern und bearbeiten_. Das Konfigurationsformularder Ansicht erscheint.
1. Klicken Sie im Abschnitt _Felder_ im Dropbutton auf _Hinzufügen_. Das Popup-Fenster _Felder_ hinzufügen
    erscheint.
1. Geben Sie das Wort "Bild" in das Suchfeld ein.
1. Wählen Sie Sie Hauptbild in der Tabelle aus.
1. Klicken Sie auf _Anwenden_. Das Feld _Konfigurieren: Inhalt: Hauptbild_.
    erscheint als Popup-Fenster.
1. Füllen Sie die Felder wie unten dargestellt aus.
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
          <td>Beschriftung erstellen</td>
          <td>Hinzufügen einer Beschriftung vor dem Feldwert</td>
          <td>Nicht ausgewählt</td>
        </tr>
        <tr>
          <td>Bildstil</td>
          <td>Das Format des Bildes</td>
          <td>Mittel (220x220)</td>
        </tr>
        <tr>
          <td>Bild Vrlinken auf</td>
          <td>Einen Link zum Bild hinzufügen</td>
          <td>Inhalt</td>
        </tr>
      </tbody>
    </table>
1. Klicken Sie auf _Anwenden_. Die Konfigurationsseite der Ansicht wird angezeigt.
1. Klicken Sie im Abschnitt _Felder_ im Dropbutton auf _Hinzufügen_. Das Popup-Fenster _Felder_ hinzufügen
    erscheint.
1. Geben Sie das Wort "Textkörper" in das Suchfeld ein.
1. Wählen Sie _Textkörper_ in der Tabelle.
1. Klicken Sie auf _Anwenden und Hinzufügen_. Das Feld _Inhalt: Textkörper konfigurieren_ erscheint.
1. Füllen Sie die Felder wie unten dargestellt aus.
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
          <td>Beschriftung erstellen</td>
          <td>Hinzufügen einer Beschriftung vor dem Feldwert</td>
          <td>Nicht ausgewählt</td>
        </tr>
        <tr>
          <td>Anzeigeformat</td>
          <td>Die Darstellungsart des Feldwertes</td>
          <td>Zusammenfassung oder gekürzt</td>
        </tr>
        <tr>
          <td>Maximale Anzahl von Zeichen im Anrisstext:</td>
          <td>Die Anzahl der maximal angezeigten Zeichen</td>
          <td>120</td>
        </tr>
      </tbody>
    </table>
1. Klicken Sie auf _Anwenden_. Das Konfigurationsformular der Ansicht wird angezeigt.
1. Klicken Sie im Abschitt _Felder_ auf _Inhalt: Titel (Titel)_. Das Feld _Konfigurieren: Inhalt: Titel_ erscheint.
1. Deaktivieren Sie die Option _Beschriftung erstellen_. Dadurch wird die Beschriftung entfernt, die automatisch erstellt wurde.
1. Klicken Sie auf _Anwenden_. Das KLonfigurationsformular der Ansicht weird angezeigt.
1. Klicken Sie im Abschnitt _Felder_ im Dropbutton auf _umsortieren_. Das Pop-Up Fenster _Felder neu anordnen_ erscheint.
1. Ziehen Sie die Draghandles der Felder, um diese in die richtige Reihenfolge zu bringen: Bild,
    Titel, Textkörper. Als Alternative zum Ziehen mnit der Maus können Sie oben in der Tabelle auf die Schaltfläche _Zeilengewichte anzeigen_ klicken und numerische Zahlen eingeben (Felder mit niedrigeren oder
    stärker negativen Zahlen werden zuerst angezeigt).
1. Klicken Sie auf _Anwenden_. Die Konfigurationsseite der Ansicht erscheint.
1. Klicken Sie optional auf _Vorschau aktualisieren_, um die Vorschau zu aktualisieren.
1. Klicken Sie auf _Speichern_.
    ![Konfigurationsseite für die Ansicht der Anbieter](/images/views-create-view.png)
1. Navigieren Sie zur Startseite und klicken Sie in der Hauptnavigation auf Lieferanten, um
    das Ergebnis zu sehen.
    ![Vendors view output](/images/views-create-view-output.png)

## Viertiefen Sie Ihr Wissen

Der Link zur Ansicht in der Hauptnavigation wird sich wahrscheinlich nicht an der richtigen Stelle befinden. 
Ändern Sie die Reihenfolge der Menüpunkte in der Hauptnavigation. Siehe
[menu-reorder](./menu-reorder.md).
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/aw02gXlte9I" title="Erstellen einer Inhaltslistenansicht (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben/herausgegeben von [Boris Doesborg](https://www.drupal.org/u/batigolix)
und [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
