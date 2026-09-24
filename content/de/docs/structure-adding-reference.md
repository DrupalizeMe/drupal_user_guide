---
title: "Hinzufügen eines Referenzfeldes"
description: "So fügen Sie ein Referenzfeld hinzu, das zwei Inhaltstypen verbindet."
id: "structure-adding-reference"
translation_key: "structure-adding-reference"
source_locale: "de"
---
## Zielsetzung { #structure-adding-reference }

Fügen Sie ein Referenzfeld hinzu, damit Rezepte mit dem Profil des Lieferanten verknüpft werden können, welcher
das Rezept eingereicht hat.
## Erforderliche Kenntnisse

* [structure-fields](./structure-fields.md)
* [structure-reference-fields](./structure-reference-fields.md)
* [structure-content-type](./structure-content-type.md)
## Anforderungen an die Website

Die Inhaltstypen Rezept und Lieferant müssen vorhanden sein. Siehe [structure-content-type](./structure-content-type.md).
## Arbeitsschritte

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Inhaltstypen_ (_admin/structure/types_).
    Klicken Sie im Drop-Button des Inhaltstyps Rezept auf _Felder verwalten_.
    Sie gelangen so auf die Seite _Felder verwalten_.
1. Klicken Sie auf _Feld hinzufügen_. Die Seite _Feld hinzufügen_ erscheint.
    Füllen Sie die Formularfelder wie unten angegeben aus.
    Klicken Sie auf _Speichern und fortfahren_.
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
          <td>Ein neues Feld hinzufügen</td>
          <td>Option zur Angabe des Feldtyps</td>
          <td>Referenz > Inhalt</td>
        </tr>
        <tr>
          <td>Beschriftung</td>
          <td>Der Titel, den Sie dem Feld geben möchten</td>
          <td>Eingereicht von</td>
        </tr>
      </tbody>
    </table>

    ![Adding a reference field to a content type](/images/structure-adding-reference-add-field.webp)

1. Es erscheint die Seite Feldeinstellungen, auf der Sie die zulässige Anzahl von
    Werten eintragen können. Füllen Sie die Felder wie unten angegeben aus.
    Klicken Sie auf _Feldeinstellungen speichern_.
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
          <td>Zu referenzierender Elementtyp</td>
          <td>Der mit Hilfe des Feldes zu referenzierende Elementtyp</td>
          <td>Inhalt</td>
        </tr>
        <tr>
          <td>Erlaubte Anzahl von Werten</td>
          <td>Geben Sie die Anzahl der mit dem Feld verbundenen Werte an</td>
          <td>Begrenzt, 1</td>
        </tr>
      </tbody>
    </table>

    ![Storage configuration of a reference field ](/images/structure-adding-reference-set-field-basic.webp)

1. Sie gelangen auf die Seite _Eingereicht von Einstellungen für Rezept_, auf der Sie
    die Konfiguration des Feldes vornehmen müssen. Füllen Sie die Felder des Eingabeformulars wie unten dargestellt aus. Klicken Sie auf _Einstellungen speichern_.
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
          <td>Bezeichnung</td>
          <td>Titel, der für dieses Feld auf der Seite angezeigt wird</td>
          <td>Eingereicht von</td>
        </tr>
        <tr>
          <td>Hilfetext</td>
          <td>Kurzer Text zur Unterstützung der Person, die den Inhalt erstellt</td>
          <td>Wählen Sie den Lieferanten aus, der dieses Rezept eingereicht hat.</td>
        </tr>
        <tr>
          <td>Pflichtfeld</td>
          <td>Ob ein Wert angegeben werden muss oder nicht</td>
          <td>Ausgewählt</td>
        </tr>
        <tr>
          <td>Referenztyp > Referenzmethode</td>
          <td>Option zur Auswahl der Referenzmethode</td>
          <td>Standard</td>
        </tr>
        <tr>
          <td>Referenztyp > Inhaltstypen</td>
          <td>Geben Sie den Inhaltstyp an</td>
          <td>Lieferant</td>
        </tr>
        <tr>
          <td>Referenz-Typ > Sortieren nach</td>
          <td>Sortierfeld</td>
          <td>Titel</td>
        </tr>
        <tr>
          <td>Verweistyp > Sortierrichtung</td>
          <td>Sortierreihenfolge</td>
          <td>Aufsteigend</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-adding-reference-field-settings.webp" alt="Settings for a reference field " width="100%" />

1. Das Feld Eingereicht von wurde dem Inhaltstyp hinzugefügt.
    <img src="/images/structure-adding-reference-manage-fields.webp" alt="Manage fields page for the Recipe content type" width="100%" />

## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/hAhWiqPlKh0" title="Ein Referenzfeld hinzufügen (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben und herausgegeben von [Boris Doesborg](https://www.drupal.org/u/batigolix),
und [Jojy Alphonso](https://www.drupal.org/u/jojyja) bei
[Red Crackle](http://redcrackle.com).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
