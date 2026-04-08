---
title: "Composer zum Herunterladen und Aktualisieren von Dateien verwenden"
description: "Wie Sie den Composer zur Verwaltung der Dateien im Kernsystem und in Zusatzmodulen verwenden."
id: "install-composer"
translation_key: "install-composer"
source_locale: "de"
---
## Zielsetzung { #install-composer }

Verwenden Sie den Composer, um Dateien des Kernsystems bzw. von installierten
Zusatzmodulen und Themes zu aktualisieren und herunterzuladen.

Überspringen Sie dieses Thema, wenn Sie den Composer nicht verwenden.
## Erforderliche Vorkenntnisse

[install-tools](./install-tools.md)
## Anforderungen an die Website

Wenn Sie den Composer verwenden möchten, muss er entweder innerhalb einer
lokalen Entwicklungsumgebung oder direkt auf dem Server installiert sein, auf dem
sich Ihre Live-Website befindet. Siehe: [install-tools](./install-tools.md).
## Arbeitsschritte

Wenn Sie das Tool Composer nicht auf Ihrem Live-Server installieren können,
können Sie die Schritte in einem der folgenden Abschnitte auf
Ihrem lokalen Server ausführen und dann alle aktualisierten oder hinzugefügten
Dateien auf Ihren Live-Server übertragen. Das empfohlene Verfahren ist:

1. Ein Archiv oder eine Zip-Datei erstellen, in der die neuen und geänderten
      Verzeichnisse und Dateien enthalten sind.
1. Übertragen Sie das Archiv auf Ihren Live-Server
1. Löschen Sie dort die Verzeichnisse, an denen Sie (lokal) Änderungen vorgenommen haben
1. Extrahieren Sie das Archiv zur Aktualisierung auf dem Live-Server.
1. Prüfen Sie, ob in den folgenden Verzeichnissen und Dateien im Hauptverzeichnis Ihrer Installation nach dem Aktualisieren Änderungen und Ergänzungen zu finden sind:
    * Das Verzeichnis _vendor_
    * Die Datei _autoload.php_
    * Die Datei _composer.json_
    * Die Datei _composer.lock_

### Composer zum Herunterladen des Kernsystems verwenden

Führen Sie folgende Schritte aus, wenn Sie das Kernsystem noch nicht
heruntergeladen oder installiert haben und Sie Composer verwenden möchten, um
sowohl das Kernsystem als auch dessen externe Abhängigkeiten herunterzuladen:

1. Wechseln Sie auf der Kommandozeile in das Verzeichnis, dass sich eine Ebene
      über dem Verzeichnis befindet, in welches Sie
      die Software, extrahieren wollen.
1. Geben Sie folgenden Befehl ein, wobei _mydir_ das Verzeichnis ist,
      das Sie erstellen möchten:
    ```text
    composer create-project drupal/recommended-project mydir
    ```
1. Die neueste Version des Kernsystems wird in das Unterverzeichnis
    _mydir/web_ heruntergeladen.

### Eine zuvor heruntergeladene Website für die Verwaltung mit Composer vorbereiten

Wenn Sie zuvor das Kernsystem heruntergeladen haben, ohne Composer zu verwenden,
können Sie später feststellen, dass Sie den Composer zur Verwaltung und
Aktualisierung von Abhängigkeiten verwenden wollen oder müssen.
Websites die mit Version 8.8.0 oder höher des Kernsystems erstellt wurden
enthalten bereits die hierfür erforderliche Composer-Konfiguration und Sie
können jederzeit damit beginnen Composer zu nutzen.

Wenn Ihre Website schon Module, Themes oder Profile enthält, die nicht Teil des
Kernsystems sind, ist es eine gute Idee, sie in die Datei _composer.json_ im
Stammverzeichnis Ihrer Website zu übertragen.

1. Ermitteln Sie den Systemnamen des Projekts:
    Dies ist der letzte Teil der URL der Projektseite eines Moduls oder Themes. Das Modul
    Geofield ist beispielsweise unter https://www.drupal.org/project/geofield zu finden
    und hat den Systemnamen +geofield+.
1. Führen Sie für jedes heruntergeladene Modul, Theme oder Profil einmal
    den folgenden Befehl aus, wobei+systemname+ durch den Namen des des gewünschten Projekts
     ersetzt wird, um das jeweilige Projekt zur Datei _composer.json_
    hinzuzufügen:

    ```text
    composer require drupal/systemname
    ```

    Weitere Informationen zur Verwaltung von Abhängigkeiten mit Composer finden
    Sie weiter unten.

    So konvertieren Sie eine Site, die mit einer Version des Kernsystems vor
    8.8.0, oder aus einer Zip- oder tar.gz-Datei heraus installiert wurde, die von
    Drupal.org heruntergeladen wurde, für doe erwendung mit Composer. Lesen Sie die Anweisungen unter
    [Composer zu einer bestehenden Website hinzufügen (englisch)](https://www.drupal.org/docs/installing-drupal/add-composer-to-an-existing-site).

### Composer zum Herunterladen eines Moduls oder Themes verwenden

Befolgen Sie diese Arbeitsschritte, wenn Sie bereits Composer zur Verwaltung des
Kernsystems verwenden, und Composer verwenden möchten,
um ein von der Community bereitgestelltes Zusatzmodul  oder Theme und dessen
Abhängigkeiten hinzuzufügen.

1. Bestimmen Sie den Systemnamen des Projekts
1. Zum Herunterladen eines von der Community bereitgestellten Moduls oder Themes,
    und dessen externer Komponenten, auch Abhängigkeiten genannt,
    geben Sie den folgenden Befehl im Hauptverzeichnis Ihrer Website ein (ersetzen Sie +systemname+ durch den Namen,
    des von Ihnen benötigten Projekts):
    ```text
    composer require drupal/systemname
    ```

### Composer verwenden, um zuvor heruntergeladene Dateien zu aktualisieren

Befolgen Sie diese Arbeitsschritte, um die Dateien des Kernsystems oder die Dateien
eines von der Community bereitgestellten Zusatzmodules oder Themes, mittels
Composer zu aktualisieren, wenn bereits eine Website vorhanden ist:

1. Bestimmen Sie den Systemnamen des Projekts.
1. Wenn Sie auf die neueste stabile Ausgabe des Quellcodes (Release)
    aktualisieren möchten, verwenden Sie folgenden Befehl, und ersetzen Sie
     +systemname+ durch den Systemnamen des von Ihnen benötigten
    Moduls oder Thems:
    ```text
    composer update drupal/systemname --with-dependencies
    ```
1. Wenn Sie eine bestimmte Version benötigen, legen Sie fest, wie Sie die
    Versionsnummer eingeben, auf die Sie aktualisieren möchten.
    Zum Beispiel würden Sie für die Version 8.x-1.16 eines von der Community bereitgestellten Zusatzmoduls
    nur 1.16 eingeben, und für die Version 9.0.7 des Kernsystems würden Sie
    9.0.7 eingeben. Geben Sie dann im Stammverzeichnis Ihrer Website den folgenden Befehl ein
    (ersetzen Sie +systemname+ durch den Systemnamen des Projekts und die korrekte
    Versionsnummer):
    ```text
    composer require drupal/systemname:1.16
    ```

## Vertiefen Sie Ihr Wissen

Weitere Einzelheiten über die Befehle von Composer erfahren Sie, indem Sie die
integrierte Hilfe von Composer verwenden. Um beispielsweise mehr über den
Befehl `create-project` zu erfahren, geben Sie
`composer help create-project` auf der Kommandozeile ein.
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/v-WeFthdmD4" title="Verwendung von Composer und Git zum Herunterladen von Dateien (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Zusätzliche Ressourcen

* [„Verwendung von Composer zur Verwaltung von Drupal-Site-Abhängigkeiten"(englisch)](https://www.drupal.org/docs/develop/using-composer/using-composer-to-manage-drupal-site-dependencies)
* [„Das Kernsystem mittels Composer aktualisieren" (englisch)](https://www.drupal.org/docs/8/update/update-core-via-composer)
* [„Composer zu einer bestehenden Website hinzufügen" (englisch)](https://www.drupal.org/docs/8/install/add-composer-to-an-existing-site)

*Mitwirkende*

Bearbeitet von [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
[Hans Fredrik Nordhaug](https://www.drupal.org/u/hansfn), und
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) bei
[Drupalize.Me](https://drupalize.me) von
[„Verwendung des Composers zur Verwaltung von Drupal-Site-Abhängigkeiten"(englisch) ](https://www.drupal.org/docs/develop/using-composer/using-composer-to-manage-drupal-site-dependencies),
copyright 2000 - 2026 liegt bei den einzelnen Mitwirkenden an der
[Dokumentation der Drupal-Community](https://www.drupal.org/documentation).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
