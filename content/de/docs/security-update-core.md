---
title: "Aktualisieren des Kernsystems"
description: "Das Kernsystem über die Benutzeroberfläche oder mittels Drush aktualisieren."
id: "security-update-core"
translation_key: "security-update-core"
source_locale: "de"
---
## Zielsetzung { #security-update-core }

Aktualisieren Sie das Kernsystem, entweder über den Verwaltungsbereich oder mit Drush.
## Anforderungen an die Website

* Wenn Sie Drush verwenden möchten, muss Drush installiert sein. Siehe: [install-tools](./install-tools.md).
* Wenn sich Ihre Seite im Produktiveinsatz befindet, sollten Sie diesen Prozess in einer Entwicklungsumgebung testen,
 bevor Sie Ihn auf der eigentlichen Website ausführen. Siehe: [install-dev-making](./install-dev-making.md).
## Arbeitsschritte

1. Legen Sie eine vollständige Sicherungskopie Ihrer Website an. Siehe [prevent-backups](./prevent-backups.md).
1. Öffnen Sie die Datei _settings.php_ (_/sites/default/settings.php_) in einem beliebigen Texteditor.
    Suchen Sie die Zeile mit der Variablen _$settings['update_free_access']_. Standardmäßig ist diese Zeile mit dem Wert FALSE versehen. Ändern Sie den Wert der Einstellung auf TRUE.
    ```text
    $settings['update_free_access'] = TRUE;
    ```
1. Deaktivieren Sie alle Caching-Technologien (Memcache, Varnish usw.), die Ihre Anwendung verwenden könnte.
1. Versetzen Sie Ihre Website in den Wartungsmodus. Siehe: [extend-maintenance](./extend-maintenance.md).
1. Wenn Sie Composer zur Verwaltung von Abhängigkeiten verwenden, überspringen Sie die nächsten sechs Schritte, und
    lesen Sie stattdessen [install-composer](./install-composer.md), um Anweisungen zur Aktualisierung Ihrer Website mittels Composer zu erhalten. Fahren Sie mit dem Schritt _update.php_ fort.
1. Laden Sie das tar.gz- oder zip-Dateiarchiv herunter, das  die neueste Version, des Zweigs, des Drupal-Kernsystems enthält, den Sie gerade verwenden (z. B. 8.x oder 9.x), herunter.
    Nutzen Sie dafür den folgenden link: 
    [_Drupal.org_ Downloadseite des Drupal Kernsystems](https://www.drupal.org/project/drupal).
    Lesen Sie: [install-prepare](./install-prepare.md) um mehr Einzehlheiten zu erfahren und wie Sie die neueste Version bekommen.
1. Laden Sie die Archivdatei auf Ihren Server hoch.
1. Extrahieren Sie die Archivdatei in einem temporären Verzeichnis auf Ihrem Server ( dieses Verzeichnis sollte
    außerhalb des Verzeichnisses liegen, in dem die Website gehostet wird). Der Dateimanager des Kontrollzentrums Ihres Hosting-Anbieters
    sollte eine Möglichkeit bieten, die Dateien zu extrahieren. Wenn Sie über
    Terminal-Zugriff auf Ihren Server (unter Linux) verfügen, können Sie einen Befehl wie:

    ```text
    tar -xzf drupal-8.3.2.tar.gz
    ```

    verwenden, um die Dateien aus der Archivdatei zu entpacken.

1. Löschen Sie im Verzeichnis, das Ihre Website enthält die Verzeichnisse _core_ und _vendor_,
    und alle Dateien, die sich nicht in einem Unterverzeichnis befinden. Einschließlich der Dateien _.htaccess_,
    _composer.json_, und _Autoload.php_. Löschen Sie keine benutzerdefinierten und angepassten Dateien
    weil dadurch die darin enthaltenen Anpassungen verloren gehen.
1. Kopieren Sie die Verzeichnisse _core_ und _vendor_ sowie alle Dateien, die von Ihnen nicht angepasst wurden aus dem temporären Verzeichnis in das Verzeichnis, das Ihre Website enthält.
1. Führen Sie das PHP-Skript _update.php_ aus, indem Sie eine der folgenden Methoden verwenden:
    * Rufen Sie die Seite _http://www.example.com/update.php_ in Ihrem Browser auf (wobei
      _www.example.com_ als Beispiel für die Adresse Ihrer Website verwendet wird). Klicken Sie auf der ersten Seite auf _Fortsetzen_,
      um die Aktualisierungen auszuführen und das Skript erfolgreich abzuschließen.
    * Führen Sie den folgenden Drush-Befehl aus: `drush updatedb`
1. Wenn Sie einen Fehler oder eine Warnung erhalten, führen Sie das Skript _update.php_ solange  erneut aus,
    bis alle Aktualisierungen erfolgreich abgeschlossen wurden.
1. Öffnen Sie die Datei _settings.php_ (_/sites/default/settings.php_) in einem Texteditor. Suchen Sie die
    Zeile mit der Variable _$settings['update_free_access']_ und aktualisieren Sie diese auf den Wert
    "False".

    ```text
    $settings['update_free_access'] = False;
    ```

1. Klicken Sie auf _Verwaltungsbereich_, um zum Verwaltungsbereich Ihrer
    Website zurückzukehren.
1. Schalten Sie den Wartungsmodus Ihrer Website ab. Siehe: [extend-maintenance](./extend-maintenance.md).
1. Leeren Sie den Cache. Siehe: [prevent-cache-clear](./prevent-cache-clear.md).
1. Aktivieren Sie alle Caching-Technologien wieder, die Sie in Schritt 3 deaktiviert haben.
1. Die Aktualisierte Version Ihrer Website sollte nun funktionieren. Sie können die aktuelle
    Version Ihrer Software überprüfen, indem Sie den _Statusbericht_ aufrufen. (Siehe:
    [prevent-status](./prevent-status.md)).

## Vertiefen Sie Ihre Kenntnisse

* [install-tools](./install-tools.md)
* [install-dev-making](./install-dev-making.md)
* [prevent-backups](./prevent-backups.md)
## Verwandte Konzepte

[prevent-status](./prevent-status.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/DqYqxp4xByk" title="Das Kernsystem aktualisieren (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Zusätzliche Ressourcen

* ["Seite zum Herunterladen des Kernsystems" auf _Drupal.org_ (englisch)](https://www.drupal.org/project/drupal)
* ["Seite zum Neuaufbau des Cache auf _Drupal.org_ (englisch)](https://www.drupal.org/project/registry_rebuild)
* Die Datei _/core/UPDATE.txt_ innerhalb Ihrer Installation.

*Mitwirkende*

Geschrieben und herausgegeben von [Surendra Mohan](https://www.drupal.org/u/surendramohan),
[Boris Doesborgh](https://www.drupal.org/u/batigolix), und
[Jojy Alphonso](https://www.drupal.org/u/jojyja) bei
[Red Crackle](http://redcrackle.com).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
