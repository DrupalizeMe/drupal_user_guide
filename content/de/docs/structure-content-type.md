---
title: "Hinzufügen eines Inhaltstyps"
description: "So fügen Sie einen neuen Inhaltstyp hinzu und konfigurieren diesen."
id: "structure-content-type"
translation_key: "structure-content-type"
source_locale: "de"
---
## Zielsetzung { #structure-content-type }

Fürgen Sie den neuen Inhaltstyp Lieferant hinzu und konfigurieren Sie diesen.
## Erforderliche Vorkenntnisse

[planning-data-types](./planning-data-types.md)
## Anforderungen an die Website

Sie müsssen ein Konzept bezüglich der Inhaltssruktur Ihrer Website erstellt haben. 

Siehe:[planning-structure](./planning-structure.md).
## Arbeitsschritte

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Inhaltstypen_
    (_admin/structure/types_). Die Seite _Inhaltstypen_ erscheint und zeigt alle
    verfügbaren Inhaltstypen an. Beachten Sie, dass die Namen und Beschreibungen der
    Inhaltstypen, die von Ihrem Installationsprofil bereitgestellt wurden auf dieser Seite, in Englisch angezeigt werden. Siehe: [language-concept](./language-concept.md) für weitere Informationen.
1. Klicken Sie auf _Inhaltstyp hinzufügen_. Die Seite _Inhaltstyp_ hinzufügen erscheint. Füllen Sie das Formular anhand der unten dargestellten Tabelle  aus.

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
          <td>Name des Inhaltstyps</td>
          <td>Lieferant</td>
        </tr>
        <tr>
          <td>Beschreibung</td>
          <td>Erläutern Sie die Verwendung des Inhaltstyps</td>
          <td>Profil eines Lieferanten</td>
        </tr>
      </tbody>
    </table>

    ![Adding a Content type](/images/structure-content-type-add.webp)

1. Legen Sie unter _Einstellungen für das Eingabeformular_ die Einstellungen des Formulars fest, welches für die Erstellung und Bearbeitung von Inhalten die zu diesem Inhaltstyp gehören verwendet werden wird. Füllen Sie die Felder wie unten dargestellt aus.
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
          <td>Beschriftung des Titelfelds</td>
          <td>Beschriftung des Titelfelds, die beim Bearbeiten oder Erstellen von Inhalten dieses Typs angezeigt wird.</td>
          <td>Name des Lieferanten</td>
        </tr>
        <tr>
          <td>Vorschau vor dem Speichern</td>
          <td>Option zur Auswahl, ob Sie vor dem Einreichen eine Vorschau des Inhalts anzeigen möchten.</td>
          <td>Optional</td>
        </tr>
        <tr>
          <td>Erklärung oder Richtlinien zum erstellen von Inhalt</td>
          <td>Anweisungen zur Erstellung oder Bearbeitung von Inhalten.</td>
          <td>(leer lassen)</td>
        </tr>
      </tbody>
    </table>

    ![Submission form settings](/images/structure-content-type-add-submission-form-settings.webp)

1. Legen Sie unter _Veröffentlichungseinstellungen_ die Standardeinstellungen für neue
    Inhalte dieser Art fest. Füllen Sie die Felder wie unten dargestellt aus.
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
          <td>Veröffentlicht</td>
          <td>Der Inhalt dieses Typs wird standardmäßig veröffentlicht.</td>
          <td>angekreuzt</td>
        </tr>
        <tr>
          <td>Auf der Startseite anzeigen</td>
          <td>Auf einer Standard-Website kann diese Einstellung verwendet werden, um Inhalte auf der Startseite Anzeigen zu lassen.</td>
          <td>Nicht angekreuzt</td>
        </tr>
        <tr>
          <td>Oben in Listen</td>
          <td>In einer Standard-Website kann diese Einstellung verwendet werden, um Inhalte am Anfang einer Liste anzuheften.</td>
          <td>Nicht angekreuzt</td>
        </tr>
        <tr>
          <td>Neue Revision erstellen</td>
          <td>Bei jeder Bearbeitung vonm Inhalten diesee Typs wird eine neue Revision angelegt, die der Önderungsverfolgung dient.</td>
          <td>angekreuzt</td>
        </tr>
      </tbody>
    </table>

    Die Änderung dieser Einstellungen wirkt sich nicht auf die Inhalte aus, die bereits
    erstellt wurden.
    ![Publishing Options](/images/structure-content-type-add-Publishing-Options.webp)

1. Entscheiden Sie unter _Anzeigeeinstellungen_, ob der Autor und
    das Veröffentlichungsdatum  im Inhalt angezeigt werden sollen. Füllen Sie die Felder wie unten dargestellt aus.
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
          <td>Informationen zu Autor und Datum anzeigen</td>
          <td>Zeigen Sie auf jeder Anbieterseite den Benutzernamen des Autors und das Veröffentlichungsdatum an.</td>
          <td>Nicht angekreuzt</td>
        </tr>
      </tbody>
    </table>

    ![Display settings](/images/structure-content-type-add-Display-settings.webp)

1. Füllen Sie unter _Menüeinstellungen_ die Felder wie unten dargestellt aus.
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
          <td>Menüeinstellungen</td>
          <td>Menüs, zu denen diese Art von Inhalt hinzugefügt werden kann. Anbieter müssen nicht in Menüs erscheinen, deaktivieren Sie also alle Menüoptionen.</td>
          <td>Nicht angekreuzt</td>
        </tr>
      </tbody>
    </table>

    ![Menu settings](/images/structure-content-type-add-Menu-settings.webp)

1. Klicken Sie auf _Speichern und Felder verwalten_, um den Inhaltstyp zu speichern. Die
    Seite _Felder verwalten_ erscheint, auf der Sie Felder zum Inhalt hinzufügen können.
    type. Siehe [structure-fields](./structure-fields.md)
    <img src="/images/structure-content-type-add-confirmation.webp" alt="Confirmation" width="100%" />
1. Führen Sie die gleichen Schritte aus, um einen Inhaltstyp für Rezepte anzulegen. Beispiel-Werte
    für die Felder in den Formularen, wenn diese sich von den obigen Schritten unterscheiden:
    <table>
      <thead>
        <tr>
          <th>Feldname</th>
          <th>Beispielwert</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Name</td>
          <td>Rezept</td>
        </tr>
        <tr>
          <td>Beschreibung</td>
          <td>Ein von einem Lieferanten eingereichtes Rezept</td>
        </tr>
        <tr>
          <td>Einstellungen für das Einreichungsformular - Titel</td>
          <td>Rezeptname</td>
        </tr>
      </tbody>
    </table>

## Vertiefen Sie Ihr Wissen

* [structure-fields](./structure-fields.md)
* Installieren und konfigurieren Sie das [von der Community bereitgestellte Zusatzmodul Pathauto](https://www.drupal.org/project/pathauto)
so dass Inhaltselemente automatisch generierte URLs/Pfad-Aliase erhalten. Siehe: [content-paths](./content-paths.md) für weitere Informationen über
URLs innerhalb Ihrer Website, [extend-module-find](./extend-module-find.md) für Anweisungen zur Suche nach von der community bereitgestellten Zusatzmodulen und
* [extend-module-install](./extend-module-install.md) für Anweisungen zum
Herunterladen und Installieren von Zusatzmodulen, die durch die Community bereitgestlllt werden.
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/vyvqiaaGM1k" title="Einen Inhaltstyp hinzufügen (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben und herausgegeben von [Sree Veturi](https://www.drupal.org/u/sree),
[Boris Doesborg](https://www.drupal.org/u/batigolix), und
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
