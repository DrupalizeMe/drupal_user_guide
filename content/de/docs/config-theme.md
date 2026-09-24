---
title: "Ein Theme konfigurieren"
description: "Die Einstellungen eines Themes bearbeiten, um dessen Farbschema zu aktualisieren und ein Logo hinzuzufügen."
id: "config-theme"
translation_key: "config-theme"
source_locale: "de"
---
## Zielsetzung { #config-theme }

Bearbeiten Sie die Einstellungen des Standard-Themes des Kernsystems
- Bartik -, um dessen Farbschema zu ändern und ein Logo hinzuzufügen.
## Erforderliche Vorkenntnisse

[understanding-themes](./understanding-themes.md)
## Arbeitsschritte

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Design_
    (_admin/appearance_).
1. Unter _Installierte Themes_, sehen Sie das Theme Bartik, dass dort als
    Standard-Theme aufgeführt ist. klicken Sie unter _Bartik (Standard-Theme)_,
    auf _Einstellungen_.
    <img src="/images/config-theme_bartik_settings.webp" alt="Default theme, Bartik" width="100%" />
1. Klicken Sie unter _Farbschema_ in jedes Fahrbwahlfeld und geben Sie die
    Farbcodes ein, die Sie hinzufügen möchten. Verwenden Sie beispielsweise
    folgende Farben:
    <table>
      <thead>
        <tr>
          <th>Bereich</th>
          <th>Farbe</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Kopfzeile Hintergrund oben</td>
          <td>#7db84a (grün)</td>
        </tr>
        <tr>
          <td>Kopfzeile Hintergrund unten</td>
          <td>#2a3524 (dunkelgrün)</td>
        </tr>
        <tr>
          <td>Haupthintergrund</td>
          <td>#ffffffff (weiß)</td>
        </tr>
        <tr>
          <td>Hintergrundfarbe der Seitenleisten</td>
          <td>#f8bc65 (hellorange)</td>
        </tr>
        <tr>
          <td>Farbe der Umrandung der Seitenleisten</td>
          <td>#e96b3c (orange)</td>
        </tr>
        <tr>
          <td>Hintergrund der Fußzeile</td>
          <td>#2a3524 (dunkelgrün)</td>
        </tr>
        <tr>
          <td>Titel und Slogan</td>
          <td>#ffffffff (weiss)</td>
        </tr>
        <tr>
          <td>Textfarbe</td>
          <td>#000000 (schwarz)</td>
        </tr>
        <tr>
          <td>Linkfarbe</td>
          <td>#2a3524 (dunkelgrün)</td>
        </tr>
      </tbody>
    </table>

    Hinweis: Sie können auch das Farbrad auf der rechten Seite verwenden,
    um die von Ihnen gewünschten Farben auszuwählen.
    Die ausgewählten Hexdezimalwerte für Web-Farben werden auf die Website angewendet.
    <img src="/images/config-theme_color_scheme.webp" alt="Aktualisierte Farbangaben im Kernthema Bartik" width="100%" />

1. Deaktivieren Sie unter _Logo_ das Häkchen bei _Das vom Theme bereitgestellte Logo verwenden_.
    ![Neues Logo in den Einstellungen des Kernsystemthemes Bartik](/images/config-theme_logo_upload.webp)
1. Wählen Sie im Feld _Logo hochladen_ eine Logo-Datei aus und laden
    Sie diese auf Ihre Website hoch. Hinweis: Sie können auch ein allgemeines
    Logo für alle Themes festlegen. Navigieren Sie hierzu zum, Menüpunkt:
    _Design_ > _Globale Einstellungen_ (_admin/appearance/settings_).
    Wenn Sie in einem Theme ein benutzerdefiniertes Logo festlegen, wird das
    allgemein festgelegte Logo außer Kraft gesetzt.
    Sobald Sie die Datei, die Sie hochladen möchten, ausgewählt haben,
    sehen Sie deren Dateinamen neben der Schaltfläche _Datei auswählen_ bzw.
    _Durchsuchen_  in Ihrem Browser.
1. Um Ihre Änderungen, die aktualisierten Farben und das Logo auf die
    Website anzuwenden, klicken Sie auf _Konfiguration speichern_.
    Hinweis: Unter _Farbschema_ gibt es den Abschnitt _Vorschau_,
    der anzeigt wie Ihre Website mit den neuen Einstellungen
    aussehen wird.
    <img src="/images/config-theme_color_scheme_preview.png" alt="core Bartik theme settings preview" width="100%" />
1. Klicken Sie in der Werkzeugleiste auf _Zurück zur Website_ oder _Home_,
    um zu überprüfen, ob die Einstellungen für Bartik auf Ihre Website
    aktualisiert wurden.
    <img src="/images/config-theme_final_result.webp" alt="Endergebnis der Bearbeitung der zentralen Bartik-Themeneinstellungen - Farben und Logo" width="100%" />

## Vertiefen Sie Ihr Wissen

* [extend-theme-find](./extend-theme-find.md)
* [extend-theme-install](./extend-theme-install.md)
* Wenn Sie die Auswirkungen dieser Änderungen auf Ihrer Website nicht sehen,
müssen Sie möglicherweise den Cache leeren. Siehe: [prevent-cache-clear](./prevent-cache-clear.md).
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CEi3i1YGOs0" title="Ein Theme konfigurieren (english)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben und herausgegeben von [Ann Greazel](https://www.drupal.org/u/AnnGreazel),
[Amanda Luker](https://www.drupal.org/u/mndonx) bei
[Advomatisch](https://www.advomatic.com/), und
[Jack Haas](https://www.drupal.org/u/jerseycheese).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
