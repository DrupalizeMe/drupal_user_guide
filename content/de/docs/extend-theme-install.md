---
title: "Herunterladen und Installieren eines Themes von _Drupal.org_"
description: "Wie man ein Theme von Drupal.org manuell oder mit Hilfe von Drush herunterlädt und installiert."
id: "extend-theme-install"
translation_key: "extend-theme-install"
source_locale: "de"
---
## Zielsetzung { #extend-theme-install }

Laden Sie ein Theme von _Drupal.org_ herunter und installieren Sie es.
## Erforderliche Vorkenntnisse

* [extend-theme-find](./extend-theme-find.md)
* [install-tools](./install-tools.md)
## Anforderungen an die Website

Wenn Sie Themes über die Benutzeroberfläche der Website installieren möchten,
muss das Modul Update Manager, das mit dem Kernsystem ausgeliefert wird,
installiert sein. Siehe: [config-install](./config-install.md) für Anweisungen zur Installation
von Modulen.

Wenn Sie Drush verwenden möchten, muss Drush installiert sein.
Siehe [install-tools](./install-tools.md).
## Arbeitsschritte

Sie können die Benutzeroberfläche zum Herunterladen und Installieren eines
Themes verwenden. Wenn Sie ein benutzerdefiniertes Theme anstelle eines
von der Community bereitgestellten Themes installieren möchten und Ihnen eine
Meldung angezeigt wird, die besagt:
_Die Installation von Modulen und Themen erfordert FTP-Zugriff auf Ihrem Server_,
oder wenn die folgenden Schritte zum Herunterladen und Entpacken des
Themes nicht funktionieren, folgen Sie den Schritten in
[extend-manual-install](./extend-manual-install.md). Wenn Sie den Composer verwenden Um die Dateien auf
Ihrer Website zu verwalten, folgen Sie den Schritten zum Herunterladen in
[install-composer](./install-composer.md). In jedem dieser Fälle können Sie dann das Theme
mittels Drush oder indem Sie mit Schritt 7 in der Anleitung zur
Verwendung der Benutzeroberfläche unten fortfahren installieren.
### Verwendung der Benutzeroberfläche

1. Auf der Projektseite des Themes auf drupal.org (zum Beispiel,
    _https://www.drupal.org/project/honey_), navigieren Sie zum Abschnitt _Downloads_
    im unteren Teil der Seite.
1. Klicken Sie mit der rechten Maustaste auf _tar.gz_, um die Adresse des Archivs zu kopieren.
    ![Die URL für ein Thema finden](/images/extend-theme-install-download.webp)
1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Design_
    (_/admin/appearance_). Die Seite _Design_ erscheint.
1. Klicken Sie auf _Neues Theme installieren_. Die Seite _Neues Theme installieren_ wird angezeigt.
    ![Installing a theme](/images/extend-theme-install-page.webp)
1. Fügen Sie in das Feld _Von URL installieren_ den kopierten Download-Link ein. Dieser Wert
    könnte so aussehen
    https://ftp.drupal.org/files/projects/honey-1.0.1.tar.gz`.
1. Klicken Sie auf _Installieren_, um das neue Theme auf den Server hoch zu laden
    und zu entpacken. Die Dateien werden in das Verzeichnis _themes_ heruntergeladen.
1. Klicken Sie auf _Neu hinzugefügte Themees installieren_, um zur Seite _Design_
    zurückzukehren. Wenn Sie das bereits erwähnte manuelle Hochladeverfahren
    verwendet haben, dann können Sie mit diesem Schritt fortfahren, und erreichen
    in diesem Fall die Seite _Design_, in dem Sie im Menü _Verwalten_ zum
    Menüpunkt _Design_ (_admin/appearance_) navigieren.
1. Suchen Sie das neue Theme unter _Deinstallierte Themes_ und klicken Sie auf
    _Installieren und als Standard festlegen_.
    Alle Seiten, die nicht zum Verwaltungsbereich Ihrer Website gehören,
    verwenden nun das von Ihnen festgelegte Theme.
    <img src="/images/extend-theme-install-appearance-page.webp" alt="Uninstalled themes on Appearance page" width="286px" />

#### Drush zur Installation eines Themes verwenden

1. Suchen Sie den Systemnamen des Themes, das Sie installieren möchten,
    dies ist der letzte Teil der URL zur Projektseite des Themes. Wenn die
    Projekt-URL zum Beispiel https://www.drupal.org/project/honey_ lautet,
    ist der Systemname `honey`.
1. Laden Sie das Theme herunter, indem Sie entweder die Schritte im Kapitel
    [extend-manual-install](./extend-manual-install.md) oder im Kapitel [install-composer](./install-composer.md) durchführen.
1. Führen Sie die folgenden Drush-Befehle unter Angabe des Systemnamens als
    Parameter (z.B, _honey_) aus:
    ```text
    drush theme: enable honey
    drush config:set system.theme default honey
    ```
1. Folgen Sie den Anweisungen auf dem Bildschirm.

## Vertiefen Sie Ihr Wissen

* Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Design_
(_admin/appearance_) und deinstallieren Sie alle Themes, die Sie nicht verwenden.
* [extend-module-find](./extend-module-find.md)
* [extend-module-install](./extend-module-install.md)
* Wenn Sie die Auswirkungen dieser Änderungen auf Ihrer Website nicht sehen,
müssen Sie unter Umständen den Cache leeren. Siehe: [prevent-cache-clear](./prevent-cache-clear.md).
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/UFgddj0F_bU" title="Herunterladen und Installieren eines Themes von Drupal.org (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben und herausgegeben von [Joe Shindelar](https://www.drupal.org/u/eojthebrave) bei
[Drupalize.Me](https://drupalize.me), und
[Boris Doesborgh](https://www.drupal.org/u/batigolix).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
