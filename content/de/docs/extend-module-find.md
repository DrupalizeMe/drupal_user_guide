---
title: "Module finden"
description: "Module auf Drupal.org Suchen und evaluieren."
id: "extend-module-find"
translation_key: "extend-module-find"
source_locale: "de"
---
## Zielsetzung { #extend-module-find }

Finden und bewerten Sie Module auf _Drupal.org_.
## Erforderliche Vorkenntnisse

* [understanding-drupal](./understanding-drupal.md)
* [understanding-modules](./understanding-modules.md)
## Arbeitsschritte

1. Rufen Sie die Website [_Drupal.org_](https://www.drupal.org) auf und navigieren Sie
    auf die Seite _Download & Extend_ > _Modules_
    (https://www.drupal.org/project/project_module).
1. Filtern Sie Ihre Suche mit Hilfe der Kategorien auf der Modulsuchseite.
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
          <td>Maintenance status</td>
          <td>Wie aktiv wird das Modul mit neuem Code versorgt?</td>
          <td>Actively maintained</td>
        </tr>
        <tr>
          <td>Development status</td>
          <td>Welchen Entwicklungsstatus soll das Modul haben?</td>
          <td>Any</td>
        </tr>
        <tr>
          <td>Module categories</td>
          <td>Der Bereich, in dem das Modul angesiedelt ist.</td>
          <td>Administration</td>
        </tr>
        <tr>
          <td>Core compatibility</td>
          <td>Die Version des Kernsystems,. mit dem das Modul kompatibbel ist.</td>
          <td>9.x</td>
        </tr>
        <tr>
          <td>Status</td>
          <td>Project status: _Sandbox projects_ sind experimentelle Projekte. _Full projects_ haben bereits einen Genehmigungsprozess durchlaufen, können sich aber immer noch in der Entwicklung befinden.</td>
          <td>Full projects</td>
        </tr>
        <tr>
          <td>Stability</td>
          <td>Ob der Modulbetreuer bereits eine Produktivversion veröffentlicht hat oder nicht.</td>
          <td>Has a supported stable release</td>
        </tr>
        <tr>
          <td>Security advisory coverage</td>
          <td>Ob der Modulbetreuer sich damit einverstanden erklärt hat, den Vorgaben und Prozessen des Drupal-Sicherheitsteams zu folgen oder nicht.</td>
          <td>Has security advisory coverage</td>
        </tr>
        <tr>
          <td>Search modules</td>
          <td>Suchen Sie nach _Admin Toolbar_, einem Modul, das wir uns später noch genauer ansehen werden. Alternativ können Sie das Feld auch leer lassen, wenn Sie nicht sicher sind, nach welchem Modul genau Sie suchen.</td>
          <td>Admin Toolbar</td>
        </tr>
        <tr>
          <td>Sort by</td>
          <td>Sortieren Sie die Suchergebnisse nach Kriterien wie _Most installed (am häufigsten installiert)_ (beliebte Module, die auch auf Ihrer Website zum Einsatz kommen könnten) oder _Last release_ (Datum der aktuellsten Veröffentlichung).</td>
          <td>Most installed</td>
        </tr>
      </tbody>
    </table>

    ![Filter auf der Modul-Suchseite auf _Drupal.org_](/images/extend-module-find_module_finder.png)

1. Klicken Sie auf _Search_. Die Suchergebnisse werden angezeigt.
    ![Modul-Suchergebnisseite auf _Drupal.org_](/images/extend-module-find_search_results.png)
1. Um ein Modul genauer zu bewerten, klicken Sie auf dessen Titel in der Liste
    der Suchergebnisse um die Projektseite des Moduls aufzurufen.

    Hier sind einige Aspekte, die bei der Evaluierung von Modulen zu beachten sind:

    * Projektbeschreibung: Die Beschreibung auf der Projektseite des Moduls sollte
    klar formuliert und aussagekräftig sein. Sie sollten sich ein Bild von den
    Merkmalen und den Anforderungen des Moduls machen können.
    * Informationen zum Projekt: In diesem Bereich der Seite kann es Warnungen
    geben. Z. B. wenn ein Modul nicht mehr entwickelt wird oder nicht durch die
    Security-Advisory-Policy abgedeckt ist.
    * Projektinformationen > Gemeldete Installationen, Downloads: Hier können Sie
    sehen, wie viele Personen das jeweilige Projekt heruntergeladen haben und wie
    viele Websites das Modul verwenden. Wenn das Modul nur von einigen
    wenigen Websites verwendet wird, könnte es sich dabei um eine benutzerdefinierte
    Lösung für ein bestimmtes Problem handeln, die nicht von vielen Menschen benötigt
    wird. Eine geringe Download-Zahl, könnte ein Hinweis darauf sein, das Sie das
    jeweilige Modul besser auch nicht verwenden sollten.
    * Maintainer: Wann war der letzte Commit
    (das letzte Mal, dass jemand das Modul aktualisiert hat)
     oder die letzte Version (neue Version) veröffentlicht wurde. Wenn das Projekt wenige offene
    Problemberichte (Issues) aufweist, und Updates/Commits schon vor längerer Zeit erstellt wurden, kann
    es sich um ein angemessenes Modul handeln. Wenn es für ein Modul jedoch jede
    Menge offene Problemberichte gibt oder schon lange keine Commits/Releases mehr
    veröffentlicht wurden, wäre dies ein Anhaltspunkt dafür das die Entwicklung des
    Moduls eingestellt wurde.
    * Problemberichte (Issues): Prüfen Sie, ob es irgendwelche offenen Fragen zum
    Modul oder potentielle Probleme mit dem Modul gibt.
    Schauen Sie sich die Statistiken an, um zu sehen, wie regelmäßig auf Fragen
    geantwortet wird.
    * Dokumentation, Ressourcen: Prüfen Sie, ob das Modul über eine Dokumentation
    oder eine README-Datei verfügt, die Ihnen beim
    Installieren, Konfigurieren, Evaluieren und Testen des Moduls  helfen kann.

    ![Information on the project page to look for when evaluating a module](/images/extend-module-find_project_info.png)

## Vertiefen Sie Ihre Kenntnisse

[extend-module-install](./extend-module-install.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/G-XUuSj9xYA" title="Module finden (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben von [Diána Lakatos](https://www.drupal.org/u/dianalakatos) bei
[Pronovix](https://pronovix.com//).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
