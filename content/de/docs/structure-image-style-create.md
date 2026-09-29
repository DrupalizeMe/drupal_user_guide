---
title: "Einen Bildstil erstellen"
description: "Wie man einen Bildstil hinzufügt, um ein Bild neu formatieren zu können."
id: "structure-image-style-create"
translation_key: "structure-image-style-create"
source_locale: "de"
---
## Zielsetzung { #structure-image-style-create }

Fügen Sie einen Bildstil hinzu und verwenden Sie ihn, um Bilder auf den Lieferantenseiten anzuzeigen.
## Erforderliche Vorkenntnisse

* [structure-fields](./structure-fields.md)
* [structure-content-display](./structure-content-display.md)
* [structure-image-styles](./structure-image-styles.md)
## Anforderungen an die Website

* Lieferanten- und Rezept-Inhaltstypen müssen vorhanden sein. Siehe [structure-content-type](./structure-content-type.md).
* Hauptbildfelder müssen für beide Inhaltstypen vorhanden sein. Siehe [structure-fields](./structure-fields.md).
* Inhalte, die aus beiden Inhaltstypen heruas erzeugt wurden, müssen für beide Inhaltstypen vorhanden sein. Siehe
[structure-content-type](./structure-content-type.md), [structure-fields](./structure-fields.md), und [content-create](./content-create.md).
## Arbeitsschritte

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Konfiguration_ > _Medien_ >
    _Bildstile_ (_admin/configuration/media/image-styles_).
1. Klicken Sie auf _Bildstil hinzufügen_.
1. Geben Sie den Namen _Extra-Bid-Mittel (300x200)_ ein.
1. Klicken Sie auf _Neuen Stil erstellen_. Die Seite _Stil Extra-Bild-Mittel
    (300x200) bearbeiten_ erscheint.
1. Wählen Sie in der Tabelle _Effekt_ die Option _Skalieren und zuschneiden_ aus. Klicken Sie auf _Hinzufügen_.
1. Füllen Sie die Felder wie unten dargestellt aus.
    <table>
      <thead>
        <tr>
          <th>Feldname</th>
          <th>Wert</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Breite</td>
          <td>300</td>
        </tr>
        <tr>
          <td>Höhe</td>
          <td>200</td>
        </tr>
      </tbody>
    </table>
1. Klicken Sie auf _Effekt hinzufügen_. Der Bildstil wird mit den gewählten Effekten gespeichert.
    <img src="/images/structure-image-style-create-add-style.png" alt="Einen Bildstil hinzufügen" width="100%" />
1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Inhaltstypen_
    (_admin/structure/types_).
1. Klicken Sie im Drop-Button _Aktionen_ für den Inhaltstyp Lieferanten auf _Anzeige verwalten_.
    Die Seite _Anzeige_ verwalten (_admin/structure/types/manage/lieferanten/display_)
    erscheint.
1. Stellen Sie sicher, dass der sekundäre Reiter _Standard_ ausgewählt ist.
1. Klicken Sie auf das Zahnrad für das Feld _Hauptbild_, um die Konfigurationsoptionen zu öffnen.
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
          <td>Bildstil</td>
          <td>Welcher Bildstil soll verwendet werden?</td>
          <td>Extra Medium (300x200)</td>
        </tr>
        <tr>
          <td>Bild verlinken mit</td>
          <td>Auf was sll verlinkt werden, wenn das Bild angeklickt wrid?</td>
          <td>Nichts</td>
        </tr>
      </tbody>
    </table>

    ![Feldformatierungseinstellungen des Bildfeldes ändern](/images/structure-image-style-create-manage-display.png)

1. Klicken Sie auf _Aktualisieren_.
1. Klicken Sie auf _Speichern_. Der neue Bildstil wird für die Anzeige von Inhalten des Typs Lieferanten verwendet.
1. Öffnen Sie einen Inhalt vom Typ Lieferant und überprüfen Sie, ob dieser nun eine verkleinerte Darstellung des Bildes enthält. Siehe [content-edit](./content-edit.md) für Informationen über das Finden von vorhandenen Inhalten.
1. Wiederholen Sie die Schritte 8-15 für den Inhaltstyp Rezept.

## Verwandte Konzepte

* [structure-fields](./structure-fields.md)
* [structure-image-styles](./structure-image-styles.md)
* [structure-image-responsive](./structure-image-responsive.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/DKIo7j19ulY" title="Erstellen eines Bildstils (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Zusätzliche Ressourcen

[_Drupal.org_ Community-Dokumentationsseite „Arbeiten mit Bildern in Drupal 7 und 8“ (englisch)](https://www.drupal.org/docs/8/core/modules/image/working-with-images)

*Mitwirkende*

Adaptiert und herausgegeben von [Boris Doesborg](https://www.drupal.org/u/batigolix), und
[Jojy Alphonso](https://www.drupal.org/u/jojyja) bei
[RedCrackle](http://redcrackle.com) von
["Arbeiten mit Bildern in Drupal 7 und 8"](https://www.drupal.org/docs/8/core/modules/image/working-with-images),
copyright 2000 - 2026 kiegt bei den einzelnen Mitwirkenden an der
[Dokumentation der Drupal-Community](https://www.drupal.org/documentation).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
