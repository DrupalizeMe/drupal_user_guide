---
title: "Herunterladen und Installieren eines Moduls von _Drupal.org_"
description: "Ein Modul von Drupal.org (über die Benutzeroberfläche) oder mittels Drush  herunterladen und installieren."
id: "extend-module-install"
translation_key: "extend-module-install"
source_locale: "de"
---
## Zielsetzung { #extend-module-install }

Laden Sie das von der Community bereitgestellte
Zusatzmoduls [Admin Toolbar](https://www.drupal.org/project/admin_toolbar) herunter und installieren Sie dieses auf Ihrer Website.
Das Modul ermöglicht es Ihnen, einfacher durch den Verwaltungsbereich der Website
zu navigieren.
## Erforderliche Vorkenntnisse

* [understanding-modules](./understanding-modules.md)
* [extend-module-find](./extend-module-find.md)
* [install-tools](./install-tools.md)
## Anforderungen an die Website

* Wenn Sie Module über die Website installieren möchten, muss das Modul
Update Manager, das mit dem Kernsystem ausgeliefert wird, installiert sein.
Siehe: [config-install](./config-install.md) für Anweisungen zur Installation von Modulen.
* Wenn Sie Drush verwenden möchten, muss Drush installiert sein. Siehe [install-tools](./install-tools.md).
## Arbeitsschritte

Sie können die Benutzeroberfläche zum Herunterladen und Installieren von Modulen
verwenden. Wenn Sie ein benutzerdefiniertes Modul erstellt haben oder ein von
der Community bereitgestelltes Zusatzmodul installieren möchten: Falls Sie eine Meldung sehen, die besagt: _Die Installation von Modulen und Themes erfordert FTP-Zugriff
auf Ihren Server_, oder wenn die folgenden Schritte nicht funktionieren, laden Sie die
Moduldateien, mit Hilfe der Arbeitsschritte im Kapitel [extend-manual-install](./extend-manual-install.md) auf Ihren Web-Server. Wenn Sie
Composer verwenden, um die Dateien auf Ihrer Website zu verwalten, folgen Sie den Arbeitsschritten im Kapitel
[install-composer](./install-composer.md). In beiden Fällen können Sie das Modul anschließend
mit Drush installieren. Sie können auch mit Schritt 7 in der Anleitung zur
Verwendung der Benutzeroberfläche unten fortfahren.
### Verwendung der Benutzeroberfläche

1. Scrollen Sie auf der Projektseite des Moduls _Admin Toolbar_ auf drupal.org
    (_https://www.drupal.org/project/admin_toolbar_) zum Abschnitt Download am Ende der Seite.
1. Kopieren Sie die Adresse des _tar.gz_-Archivs. Abhängig von Ihrem Gerät und Browser,
    können Sie dies tun, indem Sie mit der rechten Maustaste klicken und _Link-Adresse kopieren_ auswählen.
    ![Eine Modul-URL finden](/images/extend-module-install-download.png)
1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Erweitern_
    (_admin/modules_). Die Seite _Erweitern_ erscheint.
1. Klicken Sie auf _Neues Modul installieren_. Die Seite _Neues Modul Installieren_ erscheint.
    ![Ein Modul von einer URL installieren](/images/extend-module-install-admin-toolbar-do.png)
1. Fügen Sie den kopierten Download-Link in das Feld _Von URL installieren_  ein.
    Dieser Wert könnte so aussehen:
    _https://ftp.drupal.org/files/projects/admin_toolbar-8.x-2.4.tar.gz_
1. Klicken Sie auf _Installieren_, um das neue Modul auf den Server hoch zu laden
    und zu entpacken. Die Dateien werden in das Verzeichnis _modules_
    heruntergeladen.
1. Klicken Sie auf _Neu hinzugefügte Module aktivieren_, um zur Seite _Erweitern_
    zurückzukehren. Wenn Sie das bereits erwähnte Verfahren zum manuellen
    Hochladen von Modulen  verwendet haben, dann können Sie mit diesem Schritt
    fortfahren. In diesem Fall erreichen Sie die Seite _Erweitern_ über den Menüpunkt
    _Erweitern_ im Menü _Verwalten_ (_admin/modules_).
1. Suchen Sie das Modul _Admin Toolbar_ und aktivieren Sie
    das entsprechende Kontrollkästchen.
1. Klicken Sie auf _Install_, um das neue Modul zu aktivieren.

#### Drush zum Installieren eines Moduls verwenden

1. Suchen Sie den Projektnamen des Moduls, das Sie installieren möchten, d.h. den letzten
    Teil der URL der Projektseite des Moduls. Wenn die Projekt-URL beispielsweise
    _https://www.drupal.org/project/admin_toolbar_ lautet, ist der Projektname
    „admin_toolbar".
1. Laden Sie das Modul herunter, indem Sie entweder die Schritte unter [extend-manual-install](./extend-manual-install.md) oder
    [install-composer](./install-composer.md) durchführen.
1. Führen Sie den folgenden Drush-Befehl unter Angabe des Projektnamens als Parameter aus (z.B,
    `admin_toolbar`) :
    ```text
    drush pm:enable admin_toolbar
    ```
1. Folgen Sie den Anweisungen auf dem Bildschirm.

## Vertiefen Sie Ihr Wissen

* Überprüfen Sie, ob das von der Community bereitgestellte Zusatzmodul
[Admin Toolbar](https://www.drupal.org/project/admin_toolbar)
installiert wurde, indem sie verschiedene Menüpunkte aufrufen,
die zum Verwaltungsbereich von Drupal gehören.
* Installieren und konfigurieren Sie das von der Community bereitgestellte Zusatzmodul
[Pathauto](https://www.drupal.org/project/pathauto)
so dass Seiten Ihrer Website standardmäßig mit lesbaren URLs ausgestattet werden.
 Siehe: [content-paths](./content-paths.md) für Weitere Informationen über URLs.
* Wenn Sie die Auswirkungen dieser Änderungen auf Ihre Website nicht sehen,
müssen Sie möglicherweise den Cache leeren.  Siehe [prevent-cache-clear](./prevent-cache-clear.md).
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/vx9nWJE1Kbk" title="Herunterladen und Installieren eines Moduls von Drupal.org (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Zusätzliche Ressourcen

* [_Drupal.org_ Community-Dokumentationsseite „Von der Community bereitgestellte Zusatzmodule (englisch)"](https://www.drupal.org/node/340271)
* [„Die Seite Herunterladen und Erweitern" auf _Drupal.org_ (englisch)](https://www.drupal.org/download)
* [Projektseite des Moduls Admin-Toolbar auf _Drupal.org_ (englisch)](https://www.drupal.org/project/admin_toolbar)

*Mitwirkende*

Geschrieben und herausgegeben von [Boris Doesborg](https://www.drupal.org/u/batigolix) und
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
