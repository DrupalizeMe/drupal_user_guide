---
title: "Einen Block in einem Abschnitt platzieren"
description: "Einen Block in einem Abschnitt platzieren."
id: "block-place"
translation_key: "block-place"
source_locale: "de"
---
## Zielsetzung { #block-place }

Platzieren Sie den Block „Öffnungszeiten und Standort" in der Seitenleiste der Website.
## Erforderliche Vorkenntnisse

[block-concept](./block-concept.md)
## Voraussetzungen auf der Website

* Das  Theme Bartik, dass mit dem Kernsystem ausgeliefert wird,
muss installiert und als Standard-Theme eingestellt sein. Siehe: [config-theme](./config-theme.md).
* Der Block „Öffnungszeiten und Standort“ muss vorhanden sein. Siehe: [block-create-custom](./block-create-custom.md).
## Arbeitsschritte

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Blocklayout_
    (_admin/structure/block_). Die Seite _Blocklayout_ erscheint,
    auf dieser werden das Theme und dessen Abschnitte angezeigt.
1. Stellen Sie sicher, dass in  der sekundären Registerkarte das Theme Bartik
    ausgewählt ist. Die Position von Blöcken wird für jedes Theme
    gesondert festgelegt.
1. Suchen Sie den Abschnitt _Zweite Seitenleiste_ in der Liste und klicken Sie
    neben dran auf _Block platzieren_ . Das Popup _Block platzieren_ erscheint und
    listet alle verfügbaren Blöcke auf.
1. Suchen Sie den Block „Öffnungszeiten und Standort“ und klicken Sie auf
    _Block platzieren_ daneben. Das Fenster _Block konfigurieren_ erscheint.
    Füllen Sie die Felder wie unten dargestellt aus.
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
          <td>Titel</td>
          <td>Titel, der für den Block angezeigt werden soll</td>
          <td>Öffnungszeiten und Standort</td>
        </tr>
        <tr>
          <td>Titel anzeigen</td>
          <td>Ob der Titel des Blocks angezeigt wird oder nicht</td>
          <td>Aktiv = anzeigen Deaktiviert = nicht anzeigen</td>
        </tr>
        <tr>
          <td>Abschnitt</td>
          <td>In welchem Abschnitt des Themes soll der Block angezeigt werden?</td>
          <td>Zweite Seitenleiste</td>
        </tr>
      </tbody>
    </table>

    Sie können den Block auch auf bestimmten Seiten ein- oder ausblenden.
    Im Fall der Wochenmarkt-Website stellen Sie keine der folgenden
    Konfigurationsoptionen ein weil Sie den Block überall anzeigen möchten.
    <img src="/images/block-place-configure-block.webp" alt="Block configuration page" width="100%" />

1. Klicken Sie auf _Block speichern_. Die Seite _Blocklayout_ erscheint.
    Sie können  den Anfasspunkt zum Ziehen und Sortieren vor Blöcken verwenden,
    um deren Reihenfolge innerhalb der einzelnen Abschnitte zu ändern.
    Als Alternative zu Drag and Drop können Sie auf den Link
    _Gewichtung anzeigen_ oben in die Tabelle klicken um Blöcken numerische
    Gewichtungen zuweisen (Blöcke mit niedrigeren oder negativeren Zahlen werden
    weiter vorne/oben angezeigt).
1. Überprüfen Sie, ob der Block „Öffnungszeiten und Standort“ in der
    _Seitenleiste_ gelistet ist  und klicken Sie auf _Blöcke speichern_.
    Der Block wurde in der Seitenleiste auf allen Seiten platziert,
    für die das Theme Bartik, dass mit dem Kernsystem ausgeliefert wird,
    aktiviert ist.
    <img src="/images/block-place-sidebar.webp" alt="Page with a block placed on the Sidebar second region" width="100%" />

## Vertiefen Sie Ihr Wissen

* Entfernen Sie den Block _Angetrieben durch Drupal_ aus der fünften _Fußzeile_.
Klicken Sie dazu auf _Deaktivieren_ oder _Entfernen_ im Drop-Button
_Aktionen_. Mit einem Klick auf _Deaktivieren_ können Sie den Block später
 leicht wieder aktivieren und die  selbe Konfiguration wiederverwenden.
 Wenn Sie auf _Löschen_ klicken und den Block erneut verwenden möchten,
 müssen Sie die Schritte in diesem Kapitel erneut durchführen, um den Block
 wieder in einem Abschnitt platzieren zu können. Beachten Sie, dass die Namen
 der Blöcke, die vom Kernsystem bereitgestellt werden, wie z. B.
_Angetrieben durch Drupal_ und _Benutzeranmeldung_,
auf dieser Seite auf Englisch angezeigt werden. Siehe: [language-concept](./language-concept.md)
für weitere Informationen.
* Entfernen Sie den Block _Werkzeuge_ aus dem Abschnitt _Erste Seitenleiste_. Dieser Block ist nur
für angemeldete Benutzer sichtbar.
* Platzieren Sie den Block _Benutzeranmeldung_ in einem Abschnitt.
* Wenn Sie die Auswirkungen dieser Änderungen auf Ihrer Website nicht sehen,
müssen Sie möglicherweise den Cache leeren. Siehe: [prevent-cache-clear](./prevent-cache-clear.md).
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/iWW7Ja5p0hA" title="Einen Block in einer Region platzieren (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben und herausgegeben von [Boris Doesborg](https://www.drupal.org/u/batigolix)
und [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
