---
title: "Ändern der Anzeigeeinstellungen von Inhalten"
description: "Wie man Inhaltselemente attraktiver darstellt."
id: "structure-content-display"
translation_key: "structure-content-display"
source_locale: "de"
---
## Zielsetzung { #structure-content-display }

Gestalten Sie Inhalte lesbarer, zugänglicher und sichtbar attraktiver, indem
Sie Felder neu anordnen, Beschriftungen ausblenden und bestimmen,
welche Felder Benutzern angezeigt werden sollen.
## Erforderliche Vorkenntnisse

* [planning-data-types](./planning-data-types.md)
* [structure-view-modes](./structure-view-modes.md)
## Anforderungen an die Website

Der Inhaltstyp „Lieferant" muss vorhanden sein, er muss ein Feld für ein Titelbild (Logo) und ein Feld für die URL zur Website des Lieferanten enthalten.
Außerdem muss auf Ihrer Website mindestens ein Inhalt vom Typ Lieferant vorhanden sein.
Siehe: [structure-content-type](./structure-content-type.md), [structure-fields](./structure-fields.md), und [content-create](./content-create.md).
## Arbeitsschritte

1. Suchen Sie einen Inhalt vom Typ Lieferant, den Sie im Thema [structure-fields](./structure-fields.md) angelegt haben, heraus und lassen Sie sich diesen  Inhalt anzeigen.
    Beachten Sie, dass es mehrere Dinge gibt, die Sie tun können, um die Darstellung der Seite zu verbessern:
    * Für die Felder Hauptbild und URL zur Website des Lieferanten sollen keine Beschriftungen angezeigt werden.
    * Die Reihenfolge der Felder soll so geändert werden, dass das Bild an erster Stelle steht.
    * Das Bild soll kleiner dargestellt werden.
1. Um die ersten beiden Probleme zu beheben und einige zusätzliche Einstellungen zu aktualisieren, navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Inhaltstypen_
      (_admin/structure/types_). Klicken Sie dann im Drop-Button des Inhaltstyps Lieferant auf _Anzeige verwalten_.
    <img src="/images/structure-content-display_manage_display.webp" alt="Manage display" width="100%" />
1. In der Spalte _Beschriftung_ wählen Sie für das Hauptbild die Option _Ausgeblendet_ aus. Wiederholen Sie dies für das Feld _URL zur Website des Lieferanten_
    <img src="/images/structure-content-display_main_image_hidden.webp" alt="Selecting _main image title_ as _hidden_" width="100%" />
1. Klicken Sie auf das Zahnrad rechts für das Feld URL zur Website des Lieferanten, um die Konfigurationsoptionen für das Feld zu öffnen.
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
          <td>Länge des geküzten Linktextes</td>
          <td>Maximal Länge des Linktextes</td>
          <td>Leer lassen (nicht kürzen)</td>
        </tr>
        <tr>
          <td>Link in neuem Fenster öffnen</td>
          <td>Ob die Seiten, auf die Links verweisen in einem neuen Reiter des Browsers oder im selben Browserfenster geöffnet werden sollen</td>
          <td>Angekreuzt</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-content-display_trim_length.webp" alt="Link trim length" width="100%" />

1. Klicken Sie auf _Aktualisieren_.
1. 'Ändern  Sie die Sortierreihenfolge der Felder m,it Hilfe des 'Drag-Handles' links, so dass das Hauptbild vor dem Textkörper des Inhalts angezeigt wird. Lassen Sie unterhalb des Textkörperfeldes den Link zur Website des Lieferanten anzeigen.
    Alternativ zur Verwendung der Schaltfläche zum Ziehen und Umsortieren (Drag-Handle) können Sie auf den Link _Zeilenreihenfolge anzeigen_ oben in der Tabelle klicken und den Feldern numerische Gewichtungswerte zuweisen (Felder
    mit niedrigeren oder negativeren Werten werden zuerst angezeigt).
    <img src="/images/structure-content-display_change_order.webp" alt="Changing order of fields" width="100%" />
1. Klicken Sie auf _Speichern_.
1. Suchen Sie den Inhalt vom Typ „Lieferant" aus Schritt 1 erneut aus der Liste der Inhalte der Website heraus, und lassen Sie sich die Seite wieder anzeigen, um zu überprüfen, ob die von Ihnen vorgenommenen Änderungen gespeichert wurden.
1. Wiederholen Sie ähnliche Schritte, um die Darstellung  der Felder des Inhaltstyps Rezept zu verändern.

## Vertiefen Sie Ihr Wissen

* Verkleinern Sie das Hauptbild. Siehe [structure-image-style-create](./structure-image-style-create.md).
* Wenn Sie die Auswirkungen dieser Änderungen auf Ihrer Website nicht sehen, müssen Sie möglicherweise
zunächst den Cache Leeren. Siehe: [prevent-cache-clear](./prevent-cache-clear.md).
## Verwandte Konzepte

[structure-image-styles](./structure-image-styles.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/myYI9rhF_4o" title="Die Darstellung von Inhalten ändern (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Zusätzliche Ressourcen

* [_Drupal.org_ Community-Dokumentationsseite "Legen Sie die Darstellung von Feldern fest“ (englisch)](https://www.drupal.org/node/774798)
* [_Drupal.org_ Community-Dokumentationsseite "Felder neu anordnen (englisch)“](https://www.drupal.org/node/774744)
* [_Drupal.org_ Community-Dokumentationsseite "Ansichtsmodi“ (englisch)](https://www.drupal.org/node/1577752)

*Mitwirkende*

Geschrieben von [Ann Greazel](https://www.drupal.org/u/AnnGreazel) und
[Boris Doesborg](https://www.drupal.org/u/batigolix).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
