---
title: "Inhalte übersetzen"
description: "Eine Seite in eine andere Sprache übersetzen."
id: "language-content-translate"
translation_key: "language-content-translate"
source_locale: "de"
---
## Zielsetzung { #language-content-translate }

Übersetzen Sie die Startseite z.B. auf Spanisch.
## Erforderliche Vorkenntnisse

[language-concept](./language-concept.md)
## Anforderungen an die Website

* Die Startseite muss vorhanden sein. Siehe [content-create](./content-create.md).
* Das Modul Content Translation, das mit dem Kernsystem ausgeliefert wird,
muss installiert sein und auf der Website müssen mindestens zwei Sprachen
aktiviert sein. Siehe: [language-add](./language-add.md).
* Der Inhaltstyp _Einfache Seite_ muss so konfiguriert sein, dass er übersetzt
werden kann. Siehe: [language-content-config](./language-content-config.md).
## Arbeitsschritte

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Inhalt_ (_admin/content_).
1. Suchen Sie nach dem Inhalt für die Startseite. Sie können danach suchen,
      indem Sie  „Start" im Feld Titel eingeben.
1. Aus dem Drop-Button in der Zeile die den Inhalt der Startseite enthält
      wählen Sie _Übersetzen_. Die Seite _Übersetzungen für Startseite_ wird
      geöffnet.
1. Klicken Sie in der Zeile _Spanisch_ auf _hinzufügen_.
    <img src="/images/language-content-translate-add.webp" alt="Adding a content translation" width="100%" />
1. Beachten Sie, das die Anzeigesprache der Benutzeroberfläche in spanisch geändert
    wurde. um zurück zu Englisch zu wechseln, entfernen Sie die erste Instanz von
    _es_ in der Adresszeile des Browsers. Wenn ihre URL z. B. so aussieht:
    _example.com/es/node/5/translations/add/en/es_,
    entfernen Sie das _es_, das sich innerhalb der URL direkt hinter _example.com_ befindet.
1. Füllen Sie die Felder wie folgt aus:
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
          <td>Titel</td>
          <td>Übersetzter Titel der Seite</td>
          <td>Página principal</td>
        </tr>
        <tr>
          <td>Textkörper</td>
          <td>Übersetzter Textkörper der Seite</td>
          <td></td>
        </tr>
        <tr>
          <td>URL Alias > URL alias</td>
          <td>Übersetzte Adresse des Inhalts auf der Website</td>
          <td>pagina-principal</td>
        </tr>
      </tbody>
    </table>
1. Klicken Sie auf _(diese Übersetzung) speichern_.
1. Rufen Sie die Startseite auf, um die neue Übersetzung zu betrachten.

## Vertiefen Sie Ihr Wissen

* Führen Sie die oben genannten Schritte erneut aus, um mehr Inhalte auf Ihrer
  Website zu übersetzen.
* [language-config-translate](./language-config-translate.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/TOalcUYD5zM" title="Inhalte übersetzen (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben von [Boris Doesborg](https://www.drupal.org/u/batigolix).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
