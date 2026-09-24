---
title: "Einrichten einer Taxonomie"
description: "Wie man ein Taxonomie-Vokabular erstellt und es als Feld zu einem Inhaltstyp hinzufügt."
id: "structure-taxonomy-setup"
translation_key: "structure-taxonomy-setup"
source_locale: "de"
---
## Zielsetzung { #structure-taxonomy-setup }

Erstellen Sie ein Vokabular für Zutaten und fügen Sie es dem Inhaltstyp Rezept als
Feld hinzu. Es kann eine unbegrenzte Anzahl von Werten enthalten.
## Erforderliche Vorkenntnisse

* [planning-data-types](./planning-data-types.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [structure-fields](./structure-fields.md)
## Anforderungen an die Website

Der Inhaltstyp Rezept muss vorhanden sein. Siehe: [structure-content-type](./structure-content-type.md).
## Arbeitsschritte

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Taxonomie_
    (_admin/structure/taxonomy_). Sie sehen das Vokabular _Tags_, das 
    mit dem Standard-Installationsprofil des Kernsystems angelegt wurde. (Beachten Sie, dass der Name und die
    Beschreibungen dieses Vokabulars auf der Seite eventuell auf Englisch angezeigt werden; Siehe
    [language-concept](./language-concept.md) für eine detailierte Erklärung.)
    <img src="/images/structure-taxonomy-setup-taxonomy-page.webp" alt="taxonomy list page" width="100%" />
1. Klicken Sie auf _Vokabular hinzufügen_, und füllen Sie die untenstehenden Werte aus.
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
          <td>Name</td>
          <td>Der Name des Vokabulars</td>
          <td>Zutaten</td>
        </tr>
        <tr>
          <td>Beschreibung</td>
          <td>Eine kurze Beschreibung des Vokabulars</td>
          <td>(leer lassen)</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-taxonomy-setup-add-vocabulary.webp" alt="taxonomy add Ingredients" width="100%" />

1. Klicken Sie auf _Speichern_. Sie werden auf die Seite mit den Inhaltsstoffen weitergeleitet, die eine Liste aller Begriffe in diesem Vokabular zeigt.
    <img src="/images/structure-taxonomy-setup-vocabulary-overview.webp" alt="Ingredients taxonomy term listing" width="100%" />
1. Klicken Sie auf _Begriff hinzufügen_. Geben Sie „Butter" in das Feld _Name_ ein. Klicken Sie auf _Speichern_.
    <img src="/images/structure-taxonomy-setup-add-term.webp" alt="Add term page" width="100%" />
1. Sie erhalten eine Bestätigung darüber, dass der von ihnen erstellte Begriff zum Vokabular hinzugefügt wurde. Fügen Sie nun weitere Zutaten hinzu. Zum Beispiel „Eier" und „Milch".
1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Inhaltstypen_
    (_admin/structure/types_). Klicken Sie im Inhaltstyp Rezept auf _Felder verwalten_.
1. Klicken Sie auf _Feld hinzufügen_, und geben Sie die Werte aus der untenstehenden Tabelle ein.
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
          <td>Wählen Sie den Feldtyp</td>
          <td>Referenz > Taxonomiebegriff</td>
        </tr>
        <tr>
          <td>Beschriftung</td>
          <td>Der Titel des Feldes</td>
          <td>Zutaten</td>
        </tr>
      </tbody>
    </table>

    ![Add Ingredients field to Content type Recipe](/images/structure-taxonomy-setup-add-field.webp)

1. Geben Sie auf dem folgenden Konfigurationsbildschirm die Werte aus der unten stehenden Tabelle ein.
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
          <td>Art der Entität, die durch das Feld referenziert wird</td>
          <td>Taxonomiebegriff</td>
        </tr>
        <tr>
          <td>Erlaubte Anzahl von Werten</td>
          <td>Die Anzahl der Werte, die ein Benutzer eingeben kann</td>
          <td>Unbegrenzt</td>
        </tr>
      </tbody>
    </table>

    ![Field storage settings for Ingredients field](/images/structure-taxonomy-setup-field-settings.webp)

1. Geben Sie auf dem folgenden Konfigurationsbild die Werte aus der untenstehenden Tabelle ein. Klicken Sie auf _Einstellungen speichern_.
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
          <td>Hilfetext</td>
          <td>Hilfe für Benutzer, die Inhalte erstellen</td>
          <td>Bitte geben Sie die Zutaten ein, nach denen Sie suchen.</td>
        </tr>
        <tr>
          <td>Referenztyp > Referenzmethode</td>
          <td>Wählen Sie die Methode aus, die zur Auswahl der zulässigen Werte verwendet wird</td>
          <td>Standard</td>
        </tr>
        <tr>
          <td>Referenzart > Vokabular</td>
          <td>Wählen Sie das Vokabular, aus dem zulässige Werte ausgewählt werden sollen.</td>
          <td>Zutaten</td>
        </tr>
        <tr>
          <td>Referenztyp > Referenzierte Entitäten erstellen, falls sie noch nicht existieren</td>
          <td>Ob neue Zutaten aus dem Formular heraus angelegt werden können</td>
          <td>angeklickt</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-taxonomy-setup-field-settings-2.webp" alt="reference type field settings" width="100%" />

1. Klicken Sie auf _Einstellungen speichern_. Sie gelangen zurück zur Seite _Felder verwalten_.
    Es wird die Meldung angezeigt, dass die Konfiguration des Elements Zutaten
    gespeichert wurde.
    <img src="/images/structure-taxonomy-setup-finished.webp" alt="Manage fields page for Recipe content type" width="100%" />

## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/EbsXffnjsjc" title="Taxonomie einrichten (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben und herausgegeben von [Bob Snodgrass](https://www.drupal.org/u/bsnodgrass),
und [Jojy Alphonso](https://www.drupal.org/u/jojyja) bei
[Red Crackle](http://redcrackle.com).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
