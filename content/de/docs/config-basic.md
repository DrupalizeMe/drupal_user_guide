---
title: "Grundlegende Informationen der Website bearbeiten"
description: "Grundlegende Informationen der Website (Name, Slogan und Standardzeitzone) bearbeiten."
id: "config-basic"
translation_key: "config-basic"
source_locale: "de"
---
## Zielsetzung { #config-basic }

Ändern Sie grundlegende Informationen der Website wie
_Name der Website_, _Slogan_ und _Standard-Zeitzone_.
## Erforderliche Vorkenntnisse

[config-overview](./config-overview.md)
## Arbeitsschritte
### Konfigurieren der grundlegenden Informationen der Website

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt
    _Konfiguration_ > _System_ > _Grundeinstellungen der Website_
    (_admin/config/system/site-information_) um den _Namen der Website_,
    den _Slogan_, die  administrative _E-Mail-Adresse_ oder den _Pfad zur
    Startseite_ zu ändern.
1. Füllen Sie die verfügbaren Felder entsprechend Ihrer Website aus.
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
          <td>Details zur Website > Name der Website</td>
          <td>Dient zur Identifizierung der Website und wird in Browsern angezeigt</td>
          <td>Wochenmarkt in Musterstadt</td>
        </tr>
        <tr>
          <td>Standortdetails > Slogan</td>
          <td>Auf der gesamten Website sichtbar</td>
          <td>Frisches Essen direkt vom Bauernhof</td>
        </tr>
        <tr>
          <td>Details zur Website > E-Mail-Adresse</td>
          <td>Wird als _Absenderadresse_ in automatisierten E-Mail-Nachrichten (Anmeldungen, Passwortanfragen usw. verwendet)</td>
          <td>info@example.com</td>
        </tr>
      </tbody>
    </table>

    ![Website-Informationen](/images/config-basic-SiteInfo.png)

1. Nachdem Sie die Felder bearbeitet haben, klicken Sie auf
    _Konfiguration speichern_, um Ihre Änderungen auf die Website anzuwenden.

### Konfigurieren der regionalen Einstellungen der Website

1. Navigieren Sie im Menü _Verwaltung_ zum Menüpunkt _Konfiguration_ >
    _Länderspezifisches und Sprache_ > _Regionale Einstellungen_
    (_admin/config/regional/settings_).
1. Füllen Sie das Formular wie folgt aus:
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
          <td>Spracheinstellungen > Standardland</td>
          <td>Das primäre Land Ihrer Website</td>
          <td>Deutschland</td>
        </tr>
        <tr>
          <td>Standard-Land > Erster Tag der Woche</td>
          <td>Der Tag, an dem die Woche in den Kalendern beginnt</td>
          <td>Montag</td>
        </tr>
        <tr>
          <td>Zeitzonen > Standardzeitzone</td>
          <td>Die primäre Zeitzone für Ihre Website</td>
          <td>Europa > Berlin</td>
        </tr>
        <tr>
          <td>Zeitzonen > Benutzer dürfen ihre Zeitzone selbst einstellen</td>
          <td>Ob angemeldete Benutzer eine andere Zeitzone für die Anzeige von Datum und Uhrzeit auf der Website auswählen können</td>
          <td>Nicht ausgewählt</td>
        </tr>
      </tbody>
    </table>

    ![Zeitzonen](/images/config-basic-TimeZone.png)

1. Nachdem Sie die Felder bearbeitet haben, klicken Sie auf
    _Konfiguration speichern_, um die Änderungen zu sehen und auf die
    Website anzuwenden.

## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/oDMCQ1cDYOI" title="Grundlegende Website-Informationen bearbeiten (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Zusätzliche Ressourcen

[_Drupal.org_ Community-Dokumentationsseite „Erste Schritte in der Administration von Drupal 9" (englisch)](https://www.drupal.org/node/1896670)

*Mitwirkende*

Geschrieben und herausgegeben von [Sree Veturi](https://www.drupal.org/u/sree),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) bei
[erdfisch](https://erdfisch.de),
[Antje Lorch](https://www.drupal.org/u/ifrik), und
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
