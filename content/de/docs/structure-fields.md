---
title: "Hinzufügen von Basisfeldern zu einem Inhaltstyp"
description: "So fügen Sie Felder zu einem Inhaltstyp hinzu."
id: "structure-fields"
translation_key: "structure-fields"
source_locale: "de"
---
## Zielsetzung { #structure-fields }

Fügen Sie ein Verknüpfungsfeld und ein Bildfeld zum Inhaltstyp Lieferant hinzu.
## Vorrausgesetztes Wissen

[planning-data-types](./planning-data-types.md)
## Anforderungen an die Website

Der Inhaltstyp Lieferant muss vorhanden sein. See [structure-content-type](./structure-content-type.md).
## Arbeitsschritte

Fügen Sie die Felder Anbieter-URL und Hauptbild zum Inhaltstyp Anbieter hinzu.

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Inhaltstypen_ (_admin/structure/types_). Klicken Sie dann im Drop-Button, in der Zeile des Inhaltstyps Lieferant, auf _Felder verwalten_.
    Sie gelangen auf die Seite _Felder verwalten_. Beachten Sie, dass
    die Namen und die Beschreibungen des Inhaltstyps und dessen Felder, auf diesen Seiten eventuell auf Englisch angezeigt werden. Siehe
    [language-concept](./language-concept.md) für eine Erklärung.
1. Klicken Sie auf _Feld hinzufügen_. Die Seite _Feld hinzufügen_ erscheint. Sie können entweder ein neues
    Feld für den Inhaltstyp hinzufügen oder Sie verwenden ein vorhandenes Feld erneut.
1. Füllen Sie die Felder wie unten dargestellt aus.
    <table>
      <thead>
        <tr>
          <th>Feldname</th>
          <th>Erläuterung</th>
          <th>Wert</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Neues Feld hinzufügen</td>
          <td>Feld Hinzufügen</td>
          <td>Link</td>
        </tr>
        <tr>
          <td>Beschriftung</td>
          <td>Beschriftung, die im Verwaltungsbereich sichtbar ist</td>
          <td>URL zur Website des Lieferanten</td>
        </tr>
      </tbody>
    </table>

    Basierend auf dem Wert _Beschriftung_ wird automatisch ein Systemname generiert. Klicken Sie auf .
    _Bearbeiten_, wenn Sie den automatisch generierten Systemnamen anpassen möchten möchten.
    ![Add field page](/images/structure-fields-add-field.webp)

1. Klicken Sie auf _Speichern und fortfahren_. Die Seite Anbieter-URL wird angezeigt, auf der Sie die folgende Einstellungen vornehmen können:
    Die zulässige Anzahl von Werten. Füllen Sie die Felder wie unten dargestellt aus.
    <table>
      <thead>
        <tr>
          <th>Feldname</th>
          <th>Erläuterung</th>
          <th>Wert</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Erlaubte Anzahl von Werten</td>
          <td>Die Anzahl der Werte, die eingegeben werden können</td>
          <td>Begrenzt, 1</td>
        </tr>
      </tbody>
    </table>
1. Klicken Sie auf _Feldeinstellungen speichern_. Die Seite _URL zur Website des Lieferanten - Feldeinstellungen_
    erscheint. Auf dieser können Sie das Feld konfigurieren. Füllen Sie die Felder wie unten dargestellt aus.
    <table>
      <thead>
        <tr>
          <th>Feldname</th>
          <th>Erläuterung</th>
          <th>Wert</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Beschriftung</td>
          <td>die Beschriftung, die im Bearbeitungsformular angezeigt wird</td>
          <td>URL zur Website des Lieferanten</td>
        </tr>
        <tr>
          <td>Hilfetext</td>
          <td>Die Anweisung, die unter dem Feld angezeigt wird (leer lassen)</td>
          <td></td>
        </tr>
        <tr>
          <td>Pflichtfeld</td>
          <td>Ob das Feld erforderlich ist oder nicht</td>
          <td>Nicht angekreuzt</td>
        </tr>
        <tr>
          <td>Erlaubter Linktyp</td>
          <td>Die Art der Links, die eingegeben werden können</td>
          <td>Nur externe Links</td>
        </tr>
        <tr>
          <td>Linktext erlauben</td>
          <td>Ob ein Linktext eingegeben werden kann</td>
          <td>Nicht angekreuzt</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-fields-vendor-url.webp" alt="Field settings page for Vendor URL" width="100%" />

1. Klicken Sie auf _Einstellungen speichern_. Die URL zur Website des Lieferanten wurde dem Inhalt hinzugefügt.
    Erstellen Sie nun das Feld Hauptbild.
1. Klicken Sie auf _Feld hinzufügen_. Die Seite _Feld hinzufügen_ erscheint. Füllen Sie die Felder wie abgebildet aus
    unten.
    <table>
      <thead>
        <tr>
          <th>Feldname</th>
          <th>Erläuterung</th>
          <th>Wert</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Neues Feld hinzufügen</td>
          <td>Feldtyp</td>
          <td>Bild</td>
        </tr>
        <tr>
          <td>Beschriftung</td>
          <td>Im Verwaltungsbereich sichtbare Beschriftung</td>
          <td>Hauptbild</td>
        </tr>
      </tbody>
    </table>
1. Klicken Sie auf _Speichern und fortfahren_. Die Seite Hauptbild erscheint. Füllen Sie die Felder
    wie unten dargestellt aus.
    <table>
      <thead>
        <tr>
          <th>Feldname</th>
          <th>Erläuterung</th>
          <th>Wert</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Erlaubte Anzahl von Werten</td>
          <td>Die Anzahl der Werte, die eingegeben werden können</td>
          <td>Begrenzt, 1</td>
        </tr>
      </tbody>
    </table>

    Sie können hier ein Standardbild festlegen. Dieses wird verwendet, wenn beim Erstellen eines Inhalts vom Typ Lieferant kein Bild hochgeladen wird.

1. Klicken Sie auf _Feldeinstellungen speichern_. Die Seite _Einstellungen für Hauptbild - Lieferanten_
    erscheint. Füllen Sie die Felder wie unten dargestellt aus.
    <table>
      <thead>
        <tr>
          <th>Feldname</th>
          <th>Erläuterung</th>
          <th>Wert</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Beschriftung</td>
          <td>Beschriftung, die im Inhalt sichtbar ist</td>
          <td>Hauptbild</td>
        </tr>
        <tr>
          <td>Hilfetext</td>
          <td>Die Anweisung, die unter dem Feld angezeigt wird (leer lassen)</td>
          <td></td>
        </tr>
        <tr>
          <td>Pflichtfeld</td>
          <td>Ob das Feld erforderlich ist oder nicht</td>
          <td>angekreuzt</td>
        </tr>
        <tr>
          <td>Erlaubte Dateierweiterungen</td>
          <td>Die Art der Bilder, die hochgeladen werden können</td>
          <td>png, gif, jpg, jpeg</td>
        </tr>
        <tr>
          <td>Dateiverzeichnis</td>
          <td>Das Verzeichnis, in dem die Dateien gespeichert werden. Indem Sie einen Dateiverzeichniswert angeben, stellen Sie sicher, dass alle Bilder, die über das Feld Hauptbild hochgeladen werden, sich im selben Verzeichnis befinden.</td>
          <td>Lieferant</td>
        </tr>
        <tr>
          <td>Minimale Bildauflösung</td>
          <td>Die Minimale des Bildes in Breite X Höhe</td>
          <td>600 x 600</td>
        </tr>
        <tr>
          <td>Maximale Upload-Größe</td>
          <td>Die maximale Dateigröße des hochgeladenen Bildes</td>
          <td>5 MB</td>
        </tr>
        <tr>
          <td>Alt-Feld aktivieren</td>
          <td>Ob ein alternativer Text eingegeben werden kann</td>
          <td>angekreuzt</td>
        </tr>
        <tr>
          <td>Alt-Feld erforderlich</td>
          <td>Ob ein alternativer Text erforderlich ist</td>
          <td>angekreuzt</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-fields-main-img.webp" alt="Field settings page for Main Image" width="100%" />

1. Klicken Sie auf _Einstellungen speichern_. Das Hauptbild wurde dem Inhaltstyp hinzugefügt.
    <img src="/images/structure-fields-result.webp" alt="Manage fields page" width="100%" />
1. Fügen Sie mit ähnlichen Schritten ein Hauptbildfeld zum Inhaltstyp "Rezept" hinzu. Starten Sie
    indem Sie zunächst zur Seite _Felder verwalten_ des Inhaltstyps Rezept navigieren. Dann springen Sie zu Schritt 7 und folgen den verbleibenden Arbeitsschritten, verwenden dabvei aber das vorhandene Hauptbildfeld, 
    das Sie für den Inhaltstyp Lieferant angelegt haben wieder, anstatt ein neues neues Feld zu erstellen. In den folgenden Schritten werden einige der oben gezeigten Seiten nicht angezeigt,
    da das Feld wiederverwendet wird und bereits konfiguriert ist.
1. Legen Sie zwei Inhalte vom Typ Lieferant (siehe [content-create](./content-create.md)) mit den Titeln „Happy Farm"
    und „Sweet Honey" an. Stellen Sie sicher, dass sie Bilder und URLs enthalten.

## Erweitern Sie Ihr Wissen

* [structure-image-styles](./structure-image-styles.md)
* [structure-content-display](./structure-content-display.md)
* [structure-form-editing](./structure-form-editing.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CZpfR9WbVcQ" title="Grundlegende Felder zu einem Inhaltstyp hinzufügen (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Zusätzliche Ressourcen

[_Drupal.org_ Seite der Community-Dokumentation "Ein Feld zu einem Inhlatstyp hinzufügen" (englisch)](https://www.drupal.org/node/774742)

*Mitwirkende*

Geschrieben von [Sree Veturi](https://www.drupal.org/u/sree) und
[Boris Doesborg](https://www.drupal.org/u/batigolix).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
