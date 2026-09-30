---
title: "Datei- und Konfigurationsrevisionen mit Git verwalten"
description: "Datei- und Konfigurationsrevisionen mit der Versionskontrollsoftware Git verwalten."
id: "extend-git"
translation_key: "extend-git"
source_locale: "de"
---
## Zielsetzung { #extend-git }

Verwenden Sie das Revisionskontrollwerkzeug Git, um Revisionen der Dateien und
der Konfiguration Ihrer Website zu verwalten.
## Erforderliche Vorkenntnisse

* [install-tools](./install-tools.md)
* [install-decide](./install-decide.md)
* [install-dev-sites](./install-dev-sites.md)
* Wie man eine Git-Repository einrichtet und deren _Klon-URL_ herausfindet.
Wenn Sie beispielsweise GitLab verwenden möchten, um Ihre Repository zu hosten.
Siehe: [GitLab.com „Ein Projekt erstellen (englisch)"](https://docs.gitlab.com/ee/gitlab-basics/create-project.html)
und
[GitLab.com „Grundlegende Befehle für die Kommandozeile (englisch)"](https://docs.gitlab.com/ee/gitlab-basics/command-line-commands.html).
Wenn Sie GitHub verwenden möchten, um Ihr Repository zu hosten, lesen Sie:
[GitHub - Eine Repository erstellen (englisch)"](https://help.github.com/en/articles/create-a-repo)
und
[GitHub - Welche Remote-URL soll ich verwenden (englisch)"](https://help.github.com/en/articles/which-remote-url-should-i-use).
* Wie man ein Kommandozeilen-Fenster und einen Klartext-Editor öffnet und benutzt.
* Wie man die Konfiguration verwaltet.
* Wie man Archivdateien (wie z. B. _.zip-_ und _.tar.gz-Dateien_) entpackt und erstellt.
## Anforderungen an die Website

* Sie müssen die Software für Ihre Website mittels einer der Methoden im Kapitel
[install-decide](./install-decide.md) heruntergeladen haben. Wenn Sie die Konfiguration
verwalten möchten, müssen Sie die Software installiert haben und über eine
funktionsfähige Website verfügen.
* Die Git-Client-Software muss auf dem Server installiert sein, auf dem Ihre
Website gehostet ist.
Siehe: [Git (englisch)](https://git-scm.com/) für weitere Informationen.
* Sie müssen eine neue Repository erstellt haben und deren Git-Klon-URL kennen.
## Arbeitsschritte
### Die Repository initialisieren

Führen Sie diese Schritte einmal durch, nachdem Sie eine Git-Repository
erstellt haben, um lokale Verzeichnisse mit der Repository zu verbinden und die darin enthaltenen
Dateien hinzuzufügen.

1. Öffnen Sie ein Kommandozeilenfenster und wechseln Sie in das Verzeichnis, in dem sich die Dateien
    der Website befinden. Dies ist das „Hauptverzeichnis" der Installation.
1. Ermitteln Sie, wo sich das Hauptverzeichnis Ihrer Website befindet.
    Wenn sich die Verzeichnisse _Core_, _Modules_ und _Themes_ direkt in diesem
    Verzeichnis befinden, dann befinden Sie sich im Hauptverzeichnis Ihrer Installation.
    Wenn Sie Composer zum Herunterladen der Software verwendet haben, befinden sich
    diese Daten im Unterverzeichnis  _web_ (dies ist das Hauptverzeichnis Ihrer Website).
1. Erstellen Sie mit einem einfachen Texteditor eine neue Datei namens
    _.gitignore_, innerhalb des Hauptverzeichnisses Ihrer Website
    (oder bearbeiten Sie diese Datei, wenn sie bereits existiert). Die Datei enthält
     eine Liste von Dateien und Verzeichnissen, die Git ignorieren
     (nicht zur Repository hinzufügen) soll. Zum Beispiel sollte
    die Datei _settings.php_ nicht zur Git-Repository hinzugefügt werden, weil diese
    die Daten enthält, mit denen sich die Website an Ihrer Datenbank authentifiziert.
    Die Dateien, die die _Medienelemente_ der Website enthalten
    (normalerweise werden diese Dateien im Verzeichnis
     _sites/default/files_ abgelegt) sollten auch nicht teil der Git-Repository sein.
     Ihr Ziel ist es, die Software in die Repository zu laden, nicht
    den Inhalt der Website.
1. Stellen Sie sicher, dass die Datei _.gitignore_ folgende Zeilen enthält.
     Wenn Ihr Hauptverzeichnis nicht die oberste Ebene ihrer
     Dateistruktur ist, überprüfen Sie jedes dieser Verzeichnisse, um festzustellen
     ob Sie ein Präfix angeben müssen. Eventuell müssen Sie _Sites_
     möglicherweise durch _web/sites_ ersetzen.
    ```text
    sites/*/settings*.php
    sites/*/files
    config
    ```
1. Geben Sie die folgenden Befehle ein:
    ```text
    git init
    git add -A
    ```
1. Optional können Sie die Liste der Dateien überprüfen, die Ihrer Git-Repository
    hinzugefügt werden, indem Sie folgenden Befehl eingeben und durch die (sehr lange)
    Liste scrollen:
    ```text
    git status
    ```
1. Geben Sie die folgenden Befehle ein. Wenn Sie mögen, können Sie Ihre eigene
    _Commit Message_ einsetzen. Z. B. „Initialer Commit". Die URL im zweiten Befehl
    unten muss mit der URL ihrer eigenen Git-Repository ersetzt werden.
    ```text
    git commit -m "Dateien zum ersten mal hinzugefügt"
    git remote add origin https://gitlab.com/example-name/example-repo.git
    git push -u origin master
    ```
1. Wenn Sie GitLab, GitHub oder einen anderen Host mit Online-Zugang verwenden,
    können Sie nun die Seite Ihrer Repository aufrufen und nachdem der Vorgang abgeschlossen wurde überprüfen  
    ob Ihre Dateien dort vorhanden sind.

### Aktualisieren von Dateien innerhalb der Repository

Führen Sie folgende Schritte aus, wenn Sie eine oder mehrere Dateien innerhalb
Ihrer Website aktualisiert, hinzugefügt oder gelöscht haben  um die Änderungen
( mittels der Kommandozeilenoption _push_) an Ihre Repository zu senden.

1. Öffnen Sie ein Terminal bzw. eine Eingabeaufforderung und wechseln Sie in
    das Verzeichnis, dass die Dateien ihrer Website enthält.
1. Überprüfen Sie die Liste der Dateien, die hinzugefügt, geändert oder gelöscht
    wurden:
    ```text
    git status
    ```
1. Für Textdateien, die geändert wurden (keine Bilder), können Sie optional die
    Unterschiede zwischen der neuen und der alten Version einer
    Datei anzeigen lassen:
    ```text
    git diff Pfad/zur/Datei.txt
    ```
1. Stellen Sie alle Änderungen für die nächste Übergabe bereit und vergewissern
    Sie sich, dass sie durchgeführt werden:
    ```text
    git add -A
    git status
    ```
1. Sie können eine bestimmte Datei von der Übergabe ausschließen.
    Auch dann, wenn diese sich bereits in der Liste der zu übergebenden Dateien befindet.
    Sie können auch weitere Verzeichnisse oder Dateien zur Übergabeliste hinzufügen.
    Wenn eine bestimmte Datei oder ein bestimmtes Verzeichnis versehentlich immer wieder zur
    Übergabe vorgeschlagen wird, sollten Sie in Erwägung ziehen, der Datei
    _.gitignore_ einen entsprechenden Eintrag hinzuzufügen, so dass das jeweilige
    Element zukünftig von Git ignoriert wird.

    ```text
    git reset HEAD path/to/file.txt (Datei/Verzeichnis ausschließen)
    git add pfad/zur/datei.txt (Datei/Verzeichnis hinzufügen)
    ```

1. Übergeben Sie die Liste der Änderungen an die Repository (commit) und
    führen Sie das Hochladen der Dateien aus (push).
    Ersetzen Sie die 'Angabe zu den durchgeführten Änderungen' durch etwas sinnvolles:
    ```text
    git commit -m "Angabe zu den durchgeführten Änderungen"
    git push
    ```
1. Wenn Sie weitere Kopien Ihrer Repository haben, aktualisieren Sie diese,
    indem Sie ein Kommandozeilenfenster in jedem Verzeichnis öffnen,
    dass eine Kopie Ihrer Repository enthält und führen Sie folgenden Befehl aus:
    ```text
    git pull
    ```

### Erstellen einer Kopie der Dateien in Ihrer Repository

Befolgen Sie diese Schritte, wenn Sie alle Dateien innerhalb ihrer Repository
auf eine neue Umgebung übertragen wollen. Beispielsweise könnten Sie sowohl eine
lokale Entwicklungskopie Ihrer Website und einer Live-Website Besitzen.
In größeren Teams können auch mehrere Team-Mitglieder eine lokale Kopie der
Website an verschiedenen Standorten verwalten.

1. Öffnen Sie ein Terminal/eine Eingabeaufforderung in dem Verzeichnis,
    in das Sie die Dateien herunterladen möchten.
1. Geben Sie den folgenden Befehl ein und ersetzen Sie die Klon-URL Ihrer
    Repository durch die URL und den Namen des Unterverzeichnisses,
    in das sie die Repository klonen möchten, als _Verzeichnisname_:
    ```text
    git-clone https://gitlab.com/example-name/example-repo.git Verzeichnisname
    ```

### Verwaltung der Konfiguration in der Repository

1. Folgen Sie den Anweisungen in [extend-config-versions](./extend-config-versions.md), um ein vollständiges
    Archiv der Konfiguration Ihrer Website zu erstellen.
1. Wenn Sie die Konfiguration in der Repository nicht bereits initialisiert haben,
    entpacken Sie das Konfigurationsarchiv in ein neues Verzeichnis,
    vorzugsweise oberhalb des Hauptverzeichnisses Ihrer Website.
    Folgen Sie anschließend den oben stehenden Anweisungen, um die Dateien zu Ihrer
    Repository hinzuzufügen.
1. Wenn sich zukünftig die Konfiguration Ihrer Website nach der Initialisierung Ihrer
    Git-Repository ändert, exportieren Sie jedesmal das Konfigurationsarchiv und entpacken
    Sie es an der gleichen Stelle. Folgen Sie den Anweisungen
    oben, um diese Dateien in Ihrer Repository zu aktualisieren.
1. Um eine aktualisierte Konfiguration in eine andere Website zu importieren,
    erstellen Sie ein Archiv des Konfigurationsverzeichnisses in Ihrer Repository.
    Folgen Sie dann den Anweisungen in
    [extend-config-versions](./extend-config-versions.md) um dieses Archiv hoch zu laden und in die neue Website
    zu importieren.

## Verwandte Konzepte

[install-dev-sites](./install-dev-sites.md)

*Mitwirkende*

Adaptiert und herausgegeben von [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) von
[„Aufbau einer Drupal-Site mit Git (englisch)"](https://www.drupal.org/node/803746),
copyright 2000 - 2026 liegt bei den einzelnen Mitwirkenden an der
[Dokumentation der Drupal-Community](https://www.drupal.org/documentation).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
