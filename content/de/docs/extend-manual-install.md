---
title: "Themes oder Module manuell herunterladen"
description: "Ein Modul oder Theme manuell herunterladen und auf die Website hochladen."
id: "extend-manual-install"
translation_key: "extend-manual-install"
source_locale: "de"
---
## Zielsetzung { #extend-manual-install }

Laden Sie Modul- oder Theme-Dateien manuell herunter und laden Sie  diese
auf Ihre Website hoch, wenn das Installieren oder aktualisieren eines Moduls
oder Themes mittels Drush oder über die Benutzeroberfläche der Website nicht
funktioniert, oder wenn Sie ein selbst definiertes Modul oder Theme
installieren möchten.
## Erforderliche Vorkenntnisse

* [understanding-modules](./understanding-modules.md)
* [extend-module-find](./extend-module-find.md)
* [understanding-themes](./understanding-themes.md)
* [extend-theme-find](./extend-theme-find.md)
## Anforderungen an die Website

Für den manuellen Download müssen Sie sich mit einem der folgenden,
in diesem Kapitel, beschriebenen Probleme auseinandersetzen:

* Probleme mit Schreib- und Leserechten für Dateien.
* Probleme beim Zugriff auf die Website via FTP.
* Sie selbst ein Modul/Theme erstellt oder dessen Dateien
von jemandem erhalten.
* Sie konnten die Anweisungen in
[extend-module-install](./extend-module-install.md), [extend-theme-install](./extend-theme-install.md),
[security-update-module](./security-update-module.md), oder [security-update-theme](./security-update-theme.md)
nicht erfolgreich befolgen.

Überspringen Sie dieses Thema, wenn keiner der oben genannten Problemfälle in
Ihrem Fall eingetreten ist. Wenn Sie Composer verwenden um Dateien auf
Ihrer Website zu verwalten, folgen Sie den Schritten zur Dateiaktualisierung in
[install-composer](./install-composer.md) an Stelle der Schritte dieses Kapitels.
## Arbeitsschritte

Wenn Sie ein Modul oder Theme von _Drupal.org_ installieren, folgen Sie den
Anweisungen zum Herunterladen und anschkießend den Anweisungen zum Hochladen/Entpacken.
Wenn Sie das Modul oder Theme erstellt haben, überspringen Sie die Anweisungen
zum Herunterladen. Legen Sie stattdessen eine Archivdatei
(von der Sie wissen, wie man sie auf dem Server extrahiert) an und fahren Sie
mit den Schritten zum Hochladen und Entpacken eines Themes bzw. Moduls fort.
Verwenden Sie dazu eine Methode, die mit dem von Ihnen erzeugten Archiv
kompatibel ist.
## Die notwendigen Dateien herunterladen

1. Öffnen Sie die Projektseite des gewünschten Moduls oder Themes auf drupal.org.
    Zum Beispiel die Projektseite des Moduls, _Admin Toolbar_ (https://www.drupal.org/project/admin_toolbar).
1. Scrollen Sie zum Abschnitt _Downloads_ im unteren Bereich der Seite.
    ![Downloading module files](/images/extend-manual-install-download.webp)
1. Klicken Sie auf _tar.gz_, um die Datei auf Ihren Computer herunterzuladen.
    Wenn Sie Terminal-Zugang zu Ihrem Hosting-Server (unter Linux) haben, können Sie
    alternativ die Link-Adresse für die _tar.gz_-Datei mit Hilfe Ihres Browsers
    kopieren und folgenden Befehl verwenden, um die Datei herunter zu laden
    (wobei sie die URL durch die von Ihnen kopierte Adresse ersetzen):
    ```text
    wget https://ftp.drupal.org/files/projects/admin_toolbar-8.x-2.4.tar.gz
    ```
## Die Dateien auf Ihre Website hochladen und entpacken

1. Wenn Sie ein neues Modul oder Theme hinzufügen möchten, erstellen Sie in
    Ihrem Hauptverzeichnis die Unterverzeichnisse  _modules_ und _themes_
    (falls diese nicht bereits existieren). Typischerweise wird ein Unterverzeichnis
    _contrib_ für von der Community bereitgestellte Zusatzmodule oder Themes, die von
    _Drupal.org_ heruntergeladen werden im jeweiligen Verzeichnis erstellt.
    Außerdem wird normalerweise ein Unterverzeichnis mit dem Namen _custom_ angelegt für
    Module und Themes, die sie selbst erstellt haben.
    Ihr _Modul_-Verzeichnis könnte dann wie folgt aussehen:
    <img src="/images/extend-manual-install-directories.webp" alt="empfohlene Verzeichnisstruktur für das verzeichnis modules" width="174px" />
1. Wenn Sie ein vorhandenes Modul oder Theme durch eine aktualisierte Version
    ersetzen wollen, versetzen Sie die Website in den Wartungsmodus.
    Siehe: [extend-maintenance](./extend-maintenance.md).
1. Wenn Sie ein vorhandenes Modul oder Theme durch eine aktualisierte Version
    ersetzen wollen, lokalisieren und löschen Sie alle vorhandenen Dateien und
    Verzeichnisse des vorhandenen Moduls oder Themes. Die Module befinden sich
    normalerweise in Verzeichnissen auf der obersten Ebene des Verzeichnisses
    _modules_. Themes befinden sich normalerweise auf der obersten Ebene des
    Verzeichnisses _themes_.
1. Laden Sie die _.tar.gz_-Datei (oder die Archivdatei, die Sie erstellt haben)
    auf Ihre Website hoch. Platzieren Sie die Datei entweder am selben Ort,
    an dem Sie das entsprechende  Verzeichnis gelöscht haben
    (wenn ein vorhandenes Modul oder Theme ersetzt werden soll) oder in
    das entsprechende Unterverzeichnis des Verzeichnisses _modules_ oder _themes_
    (wenn ein neues Modul oder Thems hinzugefügt werden soll).
1. Extrahieren Sie die Dateien aus dem _.tar.gz_-Archiv (oder dem Archiv, das Sie
    erstellt haben), wobei ein Unterverzeichnis am gleichen Ort erstellt wird,
    an dem sich auch die Archivdatei befindet. Wenn Sie keinen SSH-Zugang haben
    oder Ihr Hosting-Server Linux nicht verwendet, sollte der Dateimanager Ihres
    Hosting Control Panels eine Möglichkeit bieten die Datei zu entpacken.
    Wenn Sie (unter Linux) SSH-Zugriff auf Ihr Hosting-System haben
    und Sie eine tar.gz-Datei verwenden, können Sie etwa folgenden Befehl verwenden, um ihr Archiv zu entpacken:
    ```text
    tar -xzf admin_toolbar-8.x-2.4.tar.gz
    ```
1. Löschen Sie die komprimierte Datei vom Server, falls sie nicht
    nach dem Entpacken automatisch gelöscht wurde.
1. Siehe: [extend-module-install](./extend-module-install.md), [extend-theme-install](./extend-theme-install.md),
    [security-update-module](./security-update-module.md), oder [security-update-theme](./security-update-theme.md) um die
    Installation oder Aktualisierung des Moduls oder Themas abzuschließen.
    Beginnen Sie dort mit dem Arbeitsschritt, der nach dem  automatischen Download folgt.
## Erweitern Sie ihre Kenntnisse

* Wenn Sie mit mehreren Umgebungen arbeiten (z. B. einer lokalen
Entwicklungsumgebung und einer Live-Website) müssen Sie diese Arbeitsschritte
in jeder Umgebung  gesondert ausführen oder die betroffene Umgebung neu klonen.
Siehe: [install-dev-making](./install-dev-making.md).
* Wenn Sie ein neues Theme hinzugefügt haben, navigieren Sie im Menü _Verwalten_
zum Menüpunkt _Design_ (_admin/appearance_) und deinstallieren Sie
das alte Theme.
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/kOzQz9q3Kf8" title="Themes oder Module manuell herunterladen (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Zusätzliche Ressourcen

* [_Drupal.org_ Community-Dokumentationsseite „Aktualisierung von Modulen (englisch)"](https://www.drupal.org/node/250790)
* [_Drupal.org_ Community-Dokumentationsseite „Installieren der von der Community bereitgestellten Zusatzmodule (Drupal 9) (englisch)"](https://www.drupal.org/docs/8/extending-drupal-8/installing-drupal-8-modules)
* [_Drupal.org_ Community-Dokumentationsseite „Installation von Themes (englisch)"](https://www.drupal.org/docs/8/extending-drupal-8/installing-themes)
Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).

*Mitwirkende*

Geschrieben und herausgegeben von [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon), und
[Marc Isaacson](https://www.drupal.org/u/vegantriathlete).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
