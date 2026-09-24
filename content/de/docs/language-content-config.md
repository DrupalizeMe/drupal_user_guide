---
title: "Inhaltsübersetzungen konfigurieren"
description: "Inhalte so konfigurieren, dass diese übersetzt werden können."
id: "language-content-config"
translation_key: "language-content-config"
source_locale: "de"
---
## Zielsetzung { #language-content-config }

Machen Sie _benutzerdefinierte Blöcke_, _benutzerdefinierte Menülinks_, und
Entitätstypen vom Typ _Inhalt_
übersetzbar. Wählen Sie bestimmte Subtypen aus und legen Sie fest, welche Felder
dieser Subtypen übersetzt werden können.
## Erforderliche Vorkenntnisse

* [planning-data-types](./planning-data-types.md)
* [language-concept](./language-concept.md)
## Anforderungen an die Website

Das Modul Content Translation, das mit dem Kernsystem ausgeliefert wird, muss
installiert sein und auf der Website müssen mindestens zwei Sprachen aktiviert
sein. Siehe: [language-add](./language-add.md).
## Arbeitsschritte

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Konfiguration_ > _Länderspezifisches und Sprache_ > _Inhaltssprache und Übersetzung_
    (_admin/config/regional/content-language_).
1. Unter _Benutzerdefinierte Spracheinstellungen_, aktivieren Sie _Inhalt_,
    _Benutzerdefinierter Block_ und _Benutzerdefinierter Menülink_ um diese Entitätstypen übersetzbar zu machen.
    <img src="/images/language-content-config_custom.webp" alt="Custom language settings checklist" width="193px" />
1. Die Konfigurationsoptionen für _Inhalt_, _benutzerdefinierte Blöcke_ und
    _benutzerdefinierte Menülinks_ erscheinen. Wählen Sie für jede Entität den Subtyp
    den Sie bearbeiten möchten aus. Aktivieren Sie _Einfache Seite_ unter _Inhalt_, _Einfacher Block_ unter _benutzerdefinierter Block_ und
    _benutzerdefinierter Menülink_ unter _benutzerdefinierter Menülink_.
1. Überprüfen Sie die Einstellungen des Entitätstyps anhand der unten stehenden Tabelle:
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
          <td>Standardsprache</td>
          <td>Die Standardsprache des Entitäts-Subtyps</td>
          <td>Die Standardsprache der Website (English)</td>
        </tr>
        <tr>
          <td>Sprachauswahl auf Seiten zum Erstellen und Bearbeiten von Inhalten anzeigen</td>
          <td>Ob die Sprachauswahl während der Bearbeitung und  Erstellung von Inhalten angezeigt werden soll oder nicht</td>
          <td>Ausgewählt</td>
        </tr>
      </tbody>
    </table>

    ![Default language and translatability for content types](/images/language-content-config_content.webp)

1. Wählen Sie die Felder aus, die in _einfachen Seiten_ übersetzbar sein sollen,
    wie die unten stehende Tabelle dies zeigt. Wenn ein Feld nicht für die Übersetzung benötigt wird, lassen Sie es unausgewählt.
    <table>
      <thead>
        <tr>
          <th>Feldnahme</th>
          <th>Erläuterung</th>
          <th>Beispielwert</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Titel</td>
          <td>Der Titel des Inhalts</td>
          <td>Ausgewählt</td>
        </tr>
        <tr>
          <td>Geschrieben von</td>
          <td>Der Autor</td>
          <td>Nicht ausgewählt</td>
        </tr>
        <tr>
          <td>Veröffentlicht</td>
          <td>Ob der Inhalt veröffentlicht wurde oder nicht</td>
          <td>Ausgewählt</td>
        </tr>
        <tr>
          <td>Geschrieben am</td>
          <td>Datum der Veröffentlichung</td>
          <td>Nicht ausgewählt</td>
        </tr>
        <tr>
          <td>Geändert am</td>
          <td>Datum der letzten Aktualisierung</td>
          <td>Ausgewählt</td>
        </tr>
        <tr>
          <td>Auf der Startseite veröffentlicht</td>
          <td>Ob der Inhalt auf der Strtseite zu sehen ist oder nicht</td>
          <td>Nicht ausgewählt</td>
        </tr>
        <tr>
          <td>Oben in Listen</td>
          <td>Ob der Inhalt oben in Listen angezeigt wird oder nicht</td>
          <td>Nicht ausgewählt</td>
        </tr>
        <tr>
          <td>URL-Alias</td>
          <td>Lesbarer URL des Inhalts</td>
          <td>Ausgewählt</td>
        </tr>
        <tr>
          <td>Textkörper</td>
          <td>Der Hauptbestandteil des Inhalts</td>
          <td>Ausgewählt</td>
        </tr>
      </tbody>
    </table>

    ![Translatable content entity subtypes' fields checklist](/images/language-content-config_basic_page.webp)

1. Wählen Sie auf ähnliche Weise die Felder der Entitätstypen
    _Einfacher Block_ und _Benutzerdefinierter Menülink aus_.
1. Klicken Sie auf _Konfiguration speichern_.

## Vertiefen SieIhre Kenntnisse

* [language-config-translate](./language-config-translate.md)
* [language-content-translate](./language-content-translate.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/b_w904_pcTY" title="Inhaltsübersetzungen konfigurieren (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Weiterführende Quellen

* [Blogartikel „Mehrsprachige Drupal-8-Leckerbissen, Teil 5" (englisch)](http://hojtsy.hu/blog/2013-jun-21/drupal-8-multilingual-tidbits-5-almost-limitless-language-assignment)
* [Blogartikel „Mehrsprachige Drupal-8-Leckerbissen, Teil 17" (englisch)](http://hojtsy.hu/blog/2015-jan-27/drupal-8-multilingual-tidbits-17-content-translation-basics)

*Mitwirkende*

Geschrieben und bearbeitet von [Laura Vass](https://www.drupal.org/u/lolk) bei
[Pronovix](https://pronovix.com/),
[Jojy Alphonso](https://www.drupal.org/u/jojyja) bei
[Red Crackle](http://redcrackle.com),
und [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
