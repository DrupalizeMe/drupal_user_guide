---
title: "Manuelles Herunterladen des Kernsystems"
description: "Das Kernsystem oder eine Distribution von Drupal.org herunterladen."
id: "install-manual"
translation_key: "install-manual"
source_locale: "de"
---
## Zielsetzung { #install-manual }

Laden Sie das Kernsystem oder eine Distribution manuell herunter.
Überspringen Sie dieses Thema, wenn Sie eine andere Methode zum Download
verwenden.
## Erforderliche Vorkenntnisse

* [understanding-distributions](./understanding-distributions.md)
* [install-decide](./install-decide.md)
## Arbeitsschritte

1. Rufen Sie die Website _https://www.drupal.org_  auf und navigieren Sie im
    Hauptmenü auf die Seite _Build_ > _Download & Extend_.
    <img src="/images/install-prepare-downloads.png" alt="Downloads page on _Drupal.org_" width="100%" />
1. Wenn Sie nur das Kernsystem herunterladen möchten, klicken Sie auf den Link
    _Download Drupal zip_ oder den Link _download tar.gz_, und speichern Sie die
     Datei auf Ihrem lokalen Rechner.
1. Wenn Sie eine Distribution herunterladen möchten, klicken Sie auf das Symbol
      der _Distributionen_ oder deren Link, wählen Sie eine Verteilung aus der Liste
      aus, klicken Sie sich zur Seite des gewünschten Projekts durch
      und klicken Sie auf den Link, um eine Zip- oder tar.gz-Datei auf Ihren lokalen
      Rechner herunterzuladen. der Link sieht beispielsweise so aus:
    ![Finding a download URL](/images/extend-module-install-download.png)
1. Laden Sie die heruntergeladene Datei über Ihren Hosting-Account hoch.
1. Melden Sie sich im Kontrollzentrum an und navigieren Sie zum Verzeichnis _html_.
1. Legen Sie die Datei dort ab.
1. Dekomprimieren Sie die tar.gz- oder Zip-Datei. Dadurch wird ein neues
      Verzeichnis erstellt. Wenn Sie keinen Terminal-Zugang haben oder Ihr
      Server nicht unter Linux läuft, sollte der Dateimanager des Kontrollzentrums
      eine Möglichkeit bieten, die Datei zu entpacken. Wenn Sie Terminal-Zugriff auf
      Ihren Server (unter Linux) haben, können Sie folgenden Befehl verwenden:
    ```text
    tar -xzf drupal-9.0.7.tar.gz
    ```
1. Löschen Sie die komprimierte Datei vom Server, es sei denn,
      der von Ihnen verwendete Befehl hat dies bereits für Sie erledigt.
1. Benennen Sie das Verzeichnis um oder konfigurieren Sie Ihre Web-Umgebung so,
      dass der Name des Verzeichnisses mit dem Verzeichnis übereinstimmt, über das
      der Web-Server ihre Website anzeigt.

## Vertiefen Sie Ihr Wissen

Sobald Sie die Software heruntergeladen haben, können Sie eine temporäre
Demo-Website installieren (siehe [install-decide](./install-decide.md)) indem Sie den folgenden
Befehl im Hauptverzeichnis des Kernsystems ausführen:

```text
php core/scripts/drupal quick-start standard
```

Die Demo-Website wird installiert, und Ihr Webbrowser sollte sich
automatisch öffnen, damit Sie sich an der neuen Website anmelden können,
die nur so lange verfügbar ist, wie der PHP-Befehl aktiv ist. Um mehr über diese
Funktionalität zu erfahren verwenden sie den Befehlszeilenparameter help:

```text
php core/scripts/drupal quick-start --help
```
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/meVfH5mvdwI" title="Das Kernsystem manuell herunterladen (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben und herausgegeben von [Drew Gorton](https://www.drupal.org/u/dgorton),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) bei
[erdfisch](https://erdfisch.de),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
und [Jojy Alphonso](https://www.drupal.org/u/jojyja) bei
[RedCrackle](http://redcrackle.com).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
