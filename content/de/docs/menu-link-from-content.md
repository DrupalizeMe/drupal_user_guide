---
title: "Hinzufügen einer Seite zur Navigation"
description: "Eine Seite zur Navigation hinzufügen."
id: "menu-link-from-content"
translation_key: "menu-link-from-content"
source_locale: "de"
---
## Zielsetzung { #menu-link-from-content }

Fügen Sie der Navigation eine Seite hinzu. Zum Beispiel die Seite Info.
## Erforderliche Vorkenntnisse

* [menu-concept](./menu-concept.md)
* [content-edit](./content-edit.md)
## Anforderungen an die Website

Der Inhalt der die Seite darstellt muss vorhanden sein. Siehe [content-create](./content-create.md).
## Arbeitsschritte

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Inhalt_ (_admin/content_).
1. Suchen Sie die Seite Info, und klicken Sie in der entsprechenden Zeile auf _Bearbeiten_.
    Das Formular zur Bearbeitung des Inhalts erscheint.
    <img src="/images/menu-link-from-content_edit_page.webp" alt="Page edit link" width="100%" />
1. Klicken Sie rechts auf _Menüeinstellungen_, um das Tab zu erweitern.
1. Aktivieren Sie das Kontrollkästchen _Menüpunkt erstellen_, damit die Menüoptionen angezeigt werden.
1. Geben Sie die Werte aus der nachstehenden Tabelle ein:
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
          <td>Titel des Menülinks</td>
          <td>Titel, der im Menü angezeigt wird</td>
          <td>Über</td>
        </tr>
        <tr>
          <td>Beschreibung</td>
          <td>Text, der angezeigt wird, wenn ein Besucher mit dem Mauszeiger über einen Link fährt</td>
          <td>Geschichte des Marktes</td>
        </tr>
        <tr>
          <td>Übergeordnetes Element</td>
          <td>Platzierung der Seite in der Menü-Hierarchie. Wenn Sie Beispielsweise _&lt;Hauptnavigation&gt;_ auswählen, erscheint die Seite auf der obersten Ebene der Navigation. Indem Sie einen anderen Menüpunkt als übergeordneten Menüpunkt festlegen, können Sie eine Menühierarchie mit mehreren Ebenen erstellen.</td>
          <td>&lt;Hauptnavigation&gt;</td>
          <td>Gewichtung</td>
          <td>Die Stelle, in der Reihenfolge der Links in der Sich der Menüeintrag im Menü einreihen soll (niedriger gewichtete</td>
        </tr>
      </tbody>
    </table>

    ![Einen Menülink aus der Bearbeitungssite für Ionhalte heruas erstellen](/images/menu-link-from-content.webp)

1. Klicken Sie auf _Speichern_, um die Änderungen zu speichern.
    Klicken Sie in der Navigationsleiste auf _Startseite_ oder _Zurück zur Website_,
    um das Ergebnis zu sehen, das so aussehen könnte wie im Bild unten.
    <img src="/images/menu-link-from-content-result.webp" alt="Link has been added to the main menu" width="100%" />

## Vertiefen Sie Ihr Wissen

[menu-reorder](./menu-reorder.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/JE_3INtBcTw" title="Eine Seite zur Navigation hinzufügen (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Zusätzliche Ressourcen

[_Drupal.org_ Community-Dokumentationsseite „Arbeiten mit Menüs"](https://www.drupal.org/docs/8/core/modules/menu-ui)

*Mitwirkende*

Übernommen von [Boris Doesborg](https://www.drupal.org/u/batigolix) aus
["Arbeiten mit Menüs" (englisch)](https://www.drupal.org/docs/8/core/modules/menu-ui),
copyright 2000 - 2026 liegt bei  den einzelnen Mitwirkenden an der
[Drupal-Community-Dokumentation](https://www.drupal.org/documentation);
überarbeitet von [Jack Haas](https://www.drupal.org/u/jerseycheese).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
