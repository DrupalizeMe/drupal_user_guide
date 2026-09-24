---
title: "Aktualisieren eines Moduls"
description: "Wie man ein von der Community bereitgestelltes Modul aktualisiert und das Skript zum Aktualisieren der Datenbank ausführt"
id: "security-update-module"
translation_key: "security-update-module"
source_locale: "de"
---
## Zielsetzung { #security-update-module }

Aktualisieren Sie ein von der Community bereitgestelltes Modul und führen Sie das Skript _update.php_ zur _Datenbankaktualisierung_ aus.
## Voraussetzung

* [security-concept](./security-concept.md)
* [security-cron-concept](./security-cron-concept.md)
## Anforderungen an die Website

* Ein von der Community bereitgestelltes Modul wurde installiert, und es ist ein Update für dieses Modul
verfügbar. Siehe: [extend-module-install](./extend-module-install.md) und [security-announce](./security-announce.md).
* Wenn Ihre Site live ist, sollten Sie diesen Prozess in einer Entwicklungsumgebung testen,
bevor Sie diesen auf Ihrer Produktiv-Website durchführen. Siehe:
[install-dev-making](./install-dev-making.md).
* Sie haben eine vollständige Sicherung Ihrer Produktiv-Website erstellt. Siehe: [prevent-backups](./prevent-backups.md).
* Wenn Sie die Benutzeroberfläche verwenden wollen, muss das Modul Update Manager,
das mit dem Kernsystem ausgeliefert wird, installiert sein.
Siehe: [config-install](./config-install.md) für Anweisungen zur Installation von Kernsystemmodulen.
## Arbeitsschritte

Bevor Sie beginnen, suchen Sie nach modulspezifischen Update-Anweisungen. Dies ist
typischerweise beim Aktualisieren von Modulen notwendig, die Drittanbieter-Bibliotheken verwenden.
Lesen und verstehen Sie alle modulspezifischen Anforderungen, bevor Sie
mit der Aktualisierung des Moduls fortfahren. Um solche Anweisungen zu finden, lesen
Sie die Projektseite des betreffenden Moduls und lesen Sie die _Dokumentation_ die über einen
Link auf der Projektseite des Moduls erreichbar ist.

Um weitere Anweisungen zu erhalten, laden Sie die tar.gz- oder .zip-Datei von der Projektseite
des Moduls auf Ihren lokalen Computer herunter. Entpacken Sie das Archiv und suchen Sie nach den Dateien _README.txt_,
_INSTALL.txt_ und/oder _UPGRADE.txt_, die mit dem Modul ausgeliefert werden.
Lesen Sie auch die Versionshinweise auf der Projektseite, indem Sie auf die Versionsnummer der Version klicken,
die Sie heruntergeladen haben.

![Release notes link](/images/security-update-module-release-notes.webp)

Sie können den Verwaltungsbereich der Website dazu verwenden, ein von der Community bereitgestelltes
Modul zu Aktualisieren. Wenn Sie statt einem von der Community bereitgestelltem Zusatzmodul ein
benutzerdefiniertes Modul aktualisieren und eine Meldung angezeigt wird, die besagt,
dass die Installation von Modulen und Themes FTP-Zugriff auf den Webserver erfordert oder wenn die unten stehenden Arbeitsschritte für Sie nicht funktionieren, um die betroffenen Module herunterzuladen,
führen Sie die Arbeitsschritte in [extend-manual-install](./extend-manual-install.md) aus. 
Anschließend können Sie hier mit Schritt 6
im Abschnitt „Die Benutzeroberfläche verwenden“ fortfahren.

Wenn sie Composer zur Bearbeitung der Dateien Ihrer Website verwenden,
führen Sie die Arbeitsschritte in [install-composer](./install-composer.md) aus,
um die Dateien zu aktualisieren und fahren Sie anschließend mit
Schritt 5 im Abschnitt „Die Benutzeroberfläche verwenden“ fort.
## Die Benutzeroberfläche verwenden

1. Versetzen Sie Ihre Website in den Wartungsmodus. Siehe: [extend-maintenance](./extend-maintenance.md).
1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Berichte_ >
    _Verfügbare Aktualisierungen_ > _Aktualisieren_ (_/admin/reports/updates_).
1. Suchen und prüfen Sie das betreffende Modul in der Liste. Klicken Sie auf _Herunterladen der Aktualisierung_ in der Zeile des entsprechenden Moduls.
    <img src="/images/security-update-module-updates.webp" alt="Available updates" width="100%" />
1. Klicken Sie auf _Fortsetzen_.
1. Klicken Sie auf _Aktualisierungen der Datenbank ausführen_. Wenn Sie die neuen Moduldateien manuell bezogen haben,
    Beginnen Sie mit diesem Schritt und öffnen Sie die Seite Datenbankaktualisierung, indem Sie die URL
    _example.com/update.php_ in die Adresszeiele Ihres Browsers eingeben.
1. Klicken Sie auf _Fortsetzen_ und führen Sie alle Aktualisierungen aus. Das Skript zur Datenbankaktualisierung wird
    ausgeführt.
1. Klicken Sie auf _Verwaltungsseiten_, um zum Verwaltungsbereich Ihrer
    Website zurückzukehren.
1. Deaktivieren Sie den Wartungsmodus auf Ihrer Website. Siehe: [extend-maintenance](./extend-maintenance.md).
1. Löschen Sie den Cache. Siehe: [prevent-cache-clear](./prevent-cache-clear.md).
## Vertiefen Sie Ihr Wissen

* Überprüfen Sie das Protokoll der Website ([prevent-log](./prevent-log.md)), sobald die Aktualisierungen abgeschlossen wurden,
um festzustellen, ob während des Aktualisierungsvorgangs Fehler aufgetreten sind.
* [security-update-theme](./security-update-theme.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/wxWW-lPQ_Pc" title="Ein Modul aktualisieren (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Zusätzliche Ressourcen

[_Drupal.org_ Community-Dokumentationsseite "Aktualisierung von Modulen“ (englisch)](https://www.drupal.org/node/250790)

*Mitwirkende*

Adaptiert von [Boris Doesborg](https://www.drupal.org/u/batigolix), und
[Sarah Deutsch](https://www.drupal.org/u/hey_germano) bei
[Advomatic](https://www.advomatic.com), von
["Module aktualisieren (englisch)"](https://www.drupal.org/node/250790), copyright 2000 - 2026 liegt bei den einzelnen Mitwirkenden der
[Dokumentation der Drupal-Community](https://www.drupal.org/documentation).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
