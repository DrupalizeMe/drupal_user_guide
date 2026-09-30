---
title: "Planung Ihrer Inhaltsstruktur"
description: "Wie man eine Inhaltsstruktur plant und Inhalten die richtigen Entitätstypen zuordnet."
id: "planning-structure"
translation_key: "planning-structure"
source_locale: "de"
---
## Zielsetzung { #planning-structure }

Erstellen Sie einen Plan für die Inhaltsstruktur der Website. Aus diesem soll
hervorgehen, welche Entitätstypen und Entitäts-Subtypen für welche Art von
Inhalten verwendet werden sollen und welche Inhalte auf den Seiten angezeigt werden sollen.
## Erforderliche Vorkenntnisse

* [planning-data-types](./planning-data-types.md)
* [planning-modular](./planning-modular.md)
* [preface-scenario](./preface-scenario.md)
## Arbeitsschritte

1. Machen Sie sich Gedanken darüber, welche Inhalte Ihre Website enthalten muss, z. B.
      Inhalte, nach denen Besucher suchen würden, sowie Inhalte, die den Besuchern
      Ihrer Website angezeigt werden sollen. Das Ergebnis könnte die Beschreibung in
      [preface-scenario](./preface-scenario.md) sein.
1. Entscheiden Sie für jeden als Inhalt identifizierten Teil des Konzeptes, welcher
    Inhalts- bzw.Entitätstyp am besten geeignet ist. Dabei müssen Sie überlegen,
    wo und wie der Inhalt auf der Website verwendet und bearbeitet werden soll.
    Im Beispiel des Szenarios des Wochenmarktes könnten die Öffnungszeiten und der
    Standort des Wochenmarktes auf jeder Unterseite der Website innerhalb einer
    Seitenleiste angezeigt werden. Für diese Art von Inhalten macht es Sinn,
    einen einzelnen  benutzerdefinierten Block zu erstellen. Ein weiteres Beispiel
    könnte sein, dass Sie sich dafür entscheiden, dass Seiten, die
    Informationen über die einzelnen Lieferanten des Wochenmarktes enthalten Inhalte
    sein sollen, die vom Modul Node, das mit dem Kernsystem ausgeliefert wird,
    bereitgestellt und verwaltet werden sollen, weil Sie möchten, dass die
    Lieferanten die Angaben über Ihr Unternehmen selbstständig bearbeiten können.
    Mit dem Berechtigungssystem des Kernsystemmoduls Node können Sie dieses Ziel
    auf einfache Weise erreichen.
    Die Antworten auf solche Entscheidungen lauten nicht unbedingt immer nur
    richtig oder falsch. Solche Informationsseiten können entweder als
    Benutzerprofile oder als Inhalte der Website dargestellt werden.
    Die Entscheidung darüber, wie Lieferanteninformationen dargestellt werden sollen
    und welche Module dafür eingesetzt werden, müssen Sie letztendlich selbst
    treffen. Würden Sie Lieferanteninformationen als Benutzerprofil darstellen,
    könnten diese auch nur von dem Benutzer bearbeitet werden, dem das
    Benutzerprofil auf Ihrer Website zugeordnet ist. Ein Benutzerkonto später
    einem anderen Benutzer zu übertragen wäre nicht ganz so einfach. Inhalte
    hingegen, können von allen Benutzern bearbeitet werden, denen die
    hierfür erforderlichen Berechtigungen zugewiesen worden sind.
1. Entscheiden Sie für jeden der von Ihnen identifizierten Inhaltsentitätstypen,
      welche Subtypen für den jeweiligen Inhaltstyp Sinn machen würden.
      Auf der Wochenmarktseite würden Sie beispielsweise festlegen, dass es einen
      Inhaltstyp für Basisseiten, wie die Startseite und die Seite über uns  geben
      sollte und zusätzlich einen gesonderten Inhaltstyp für Seiten mit
      Lieferanteninformationen sowie einen weiteren Inhaltstyp für Rezepte.
1. Entscheiden Sie für jede Unterart des Entitätstyps Inhalt, die Sie auf
      Ihrer Website etablieren, welche Felder benötigt werden, um alle notwendigen
      Informationen im jeweiligen Subtyp erfassen zu können. Der Inhaltstyp
      Lieferant benötigt z. B. möglicherweise Felder für den Namen des
      Lieferanten, die URL zur Webseite des Lieferanten, ein Feld für ein Bild
      bzw. Logo und ein Feld in dem Lieferanten detaillierte Informationen über Ihr
      Unternehmen eintragen können.
1. Entscheiden Sie, welche Entitäten als Listen dargestellt werden sollen.
      Eine solche Liste kann dabei ganze Seiten oder nur bestimmte Teile aus den
      einzelnen Seiten, die dem jeweiligen Entitätstyp entsprechen, enthalten.
      Für jeden Eintrag müssen Sie festlegen, welche Elemente aufgelistet werden
      sollen. Anschließend müssen Sie entscheiden, in welcher Reihenfolge und mit
      welchen Filteroptionen diese Informationen angezeigt werden sollen.
      Beispielsweise könnten Sie einem Website-Besucher die Möglichkeit geben,
      nach Schlüsselwörtern zu suchen, um eine entsprechende Liste anhand eines
      solchen Schlüsselwortes weiter einzugrenzen oder um eine Liste besser
      sortieren zu können. Sie müssen auch entscheiden, welche Informationen auf
      einem Entitätstyp angezeigt werden sollen. Das Ergebnis einer solchen
      Entscheidung, könnte beispielsweise die Liste der Felder sein, die weiter oben
      skizziert wurde. Auf der Seite des Wochenmarktes soll es zum Beispiel eine
      Liste geben, die Inhalte vom Typ Rezept auflistet. Diese Rezepte sollen nach den darin enthaltenen Zutaten
      gefiltert werden können. Deshalb benötigt der Inhaltstyp Rezept auch ein Feld
      zur Eingabe der enthaltenen Zutaten.
1. Überlegen Sie sich für jedes Feld, dass Sie auf einem Inhaltssubtyp erstellen,
      welche Art von Daten dieses Feld enthalten soll (z. B. einfachen Text,
      formatierten Text, ein Datum, eine Bilddatei, usw.) und wie viele Werte
      das jeweilige Feld entgegen nehmen können soll. Die meisten Felder enthalten
      jeweils nur einen Wert. Das Feld Zutaten im Inhaltstyp Rezept zum Beispiel
      sollte in der Lage sein, mehrere Werte entgegen zu nehmen, so dass ein
      Lieferant, die für ein Rezept notwendigen Zutaten über ein einzelnes
      Feld eingeben kann.
1. Überlegen Sie sich: welche Felder als Verweise auf Taxonomie-Begriffe am
      besten geeignet wären.
    - Ob die Eingabewerte für diese Felder aus einer festen Liste zulässiger Begriffe
      ausgewählt werden sollten oder 
    - ob ein Feld Begriffe enthält, die zukünftig weiter ergänzt werden können.  
      Diese Arten von Feldern sind gute Kandidaten für Taxonomiebegriffe.
      Ein Beispiel ist das Feld Zutaten für den Inhaltstyp Rezept.
1. Überlegen Sie sich, welche Felder auf andere Inhaltsentitäten verweisen sollen.
      Ein Beispiel für ein solches Feld  ist Lieferant, da Rezepte von Lieferanten
      eingereicht werden sollen und aus diesen Rezepten auf das Profil des
      jeweiligen Lieferanten verwiesen werden soll. Daher benötigt der Inhaltstyp
      Rezept ein Referenzfeld auf den Inhaltstyp Lieferant.

    Hier ist ein Beispiel für die sich daraus ergebende Inhaltsstruktur der
    Wochenmarkt-Website aus dem Beispielszenario:

    <table>
      <thead>
        <tr>
          <th>Entitätstyp</th>
          <th>Entitäts-Subtyp</th>
          <th>Beispiele</th>
          <th>Felder</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Inhalt</td>
          <td>Einfache Seite</td>
          <td>Hauptseite, über Uns Seite</td>
          <td>Titel, Seitentext</td>
        </tr>
        <tr>
          <td>Inhalt</td>
          <td>Lieferant</td>
          <td>Eine Seite für jeden Lieferanten auf dem Wochenmarkt</td>
          <td></td>
        </tr>
        <tr>
          <td>Inhalt</td>
          <td>Rezept</td>
          <td>Eine Seite für jedes eingereichte Rezept</td>
          <td></td>
        </tr>
        <tr>
          <td>Benutzerdefinierter Block</td>
          <td>(allgemein)</td>
          <td>Copyright-Hinweis für die Fußzeile, Öffnungszeiten und Standort in der Seitenleiste</td>
          <td>keine speziellen Felder</td>
          <td></td>
        </tr>
        <tr>
          <td>Taxonomiebegriff</td>
          <td>Zutaten</td>
          <td>Karotten, Tomaten und weitere Zutaten</td>
          <td></td>
        </tr>
        <tr>
          <td>Kontaktformular</td>
          <td>(allgemein)</td>
          <td>Allgemeines Kontaktformular</td>
          <td>Name, E-Mail-Adresse, Betreff, Nachricht</td>
        </tr>
        <tr>
          <td>Benutzerprofil</td>
          <td>(keines)</td>
          <td>wird auf dieser Seite nicht verwendet</td>
          <td>keine besonderen Felder</td>
        </tr>
      </tbody>
    </table>

    Im folgenden sind die, für die Beispielwebsite benötigten Inhalte aufgelistet:

    <table>
      <thead>
        <tr>
          <th>Seite oder Seitenabschnitt</th>
          <th>Entitätstyp und Subtyp</th>
          <th>Filter/Sortierung/Seitennavigation</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Lieferantenseite</td>
          <td>Inhalte für Lieferanten</td>
          <td>Alle Lieferanten, alphabetisch, seitenweise</td>
          <td></td>
        </tr>
        <tr>
          <td>Rezepteseite</td>
          <td>Inhalte der Rezepte</td>
          <td>Filtern nach Zutaten, alphabetisch, seitenweise</td>
          <td>Bild, Rezeptname</td>
          <td></td>
        </tr>
        <tr>
          <td>Seitenleiste, Neuste Rezepte</td>
          <td>Inhalte der Rezepte</td>
          <td>Liste der 5 neuesten Rezepte</td>
          <td></td>
        </tr>
      </tbody>
    </table>

## Erweitern Sie Ihre Kenntnisse

* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-taxonomy-setup](./structure-taxonomy-setup.md)
## Verwandte Konzepte

[structure-taxonomy](./structure-taxonomy.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CaNt4DEeIgU" title="Ihre Inhaltsstruktur planen (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben und herausgegeben von [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)
und [Grant Dunham](https://www.drupal.org/u/gdunham).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
