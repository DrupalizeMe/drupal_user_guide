---
title: "Aktualisieren eines Themes"
description: "Wie man ein von der Community bereitgestelltes Theme aktualisiert und das Script zur Aktualisierung der Datenbank ausführt."
id: "security-update-theme"
translation_key: "security-update-theme"
source_locale: "de"
---
## Zielsetzung { #security-update-theme }

Aktualisieren Sie ein von der Community bereitgestelltes Theme auf Ihrer Website und führen Sie das Skript _update.php_ zur _Datenbankaktualisierung_ aus.
## Erforderliche Kenntnisse

* [security-concept](./security-concept.md)
* [security-cron-concept](./security-cron-concept.md)
## Anforderungen an die Website

* Ein von der Community bereitgestelltes Theme, für das eine Aktualisierung vorhanden ist, wurde installiert.
Siehe [extend-theme-install](./extend-theme-install.md) und [security-announce](./security-announce.md).
* Wenn Ihre Site live ist, sollten Sie diesen Prozess in einer Entwicklungsumgebung testen,
bevor Sie diesen auf Ihrer Produktiv-Website durchführen. Siehe:
[install-dev-making](./install-dev-making.md).
* Sie haben eine vollständige Sicherung der Produktiv-Website erstellt. Siehe: [prevent-backups](./prevent-backups.md).
* Wenn Sie die Benutzeroberfläche verwenden wollen, muss das Modul Update Manager,
das mit dem Kernsystem ausgeliefert wird, installiert sein.
Siehe: [config-install](./config-install.md) für Anweisungen zur Installation von Kernsystemmodulen.
## Arbeitsschritte

Sie können die Benutzeroberfläche verwenden, um ein von der Community bereitgestelltes Theme zu aktualisieren. Wenn Sie
ein benutzerdefiniertes Theme statt einem von der Community bereitgestellten Themes aktualisieren und eine Meldung angezeigt wird, die besagt,
dass _die Installation von Modulen und Themes FTP-Zugriff auf den Webserver erfordert_
oder wenn die untenstehenden Arbeitsschritte für Sie nicht funktionieren, um die betroffenen Themes herunterzuladen,
führen Sie die Arbeitsschritte in [extend-manual-install](./extend-manual-install.md) aus. Anschließend können Sie hier mit Schritt 5
im Abschnitt „Verwendung der Benutzeroberfläche“ fortfahren.

Wenn Sie Composer zur Verwaltung der Dateien auf Ihrer Website verwenden, befolgen Sie die Arbeitsschritte
in [install-composer](./install-composer.md) um die Dateien zu aktualisieren und fahren Sie anschließend hier mit Schritt 6 in
 den unten stehenden Anweisungen zur Verwendung der Benutzeroberfläche fort.
#### Verwendung der Benutzeroberfläche

1. Versetzen Sie Ihre Website in den Wartungsmodus. Siehe: [extend-maintenance](./extend-maintenance.md).
1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Berichte_ >
    _Verfügbare Aktualisierungen_ > _Aktualisieren_ (_/admin/reports/updates_).
1. Suchen und prüfen Sie das  betreffende Theme in der Liste. Klicken Sie auf _Herunterladen_ in der Zeile des entsprechenden Themes.
    <img src="/images/security-update-theme-updates.webp" alt="Available updates" width="100%" />
1. Klicken Sie auf _Fortsetzen_.
1. Klicken Sie auf _Datenbankaktualisierung ausführen_. Wenn Sie die neuen Theme-Dateien manuell bezogen haben,
    Beginnen Sie mit diesem Schritt und rufen Sie die Seite zur Datenbankaktualisierung auf, indem Sie die URL
    _example.com/update.php_ in die Adresszeile Ihres Browsers  eingeben.
1. Klicken Sie auf _Fortsetzen_ und führen Sie alle Aktualisierungen aus. Das Skript zur Datenbankaktualisierung wird
    ausgeführt.
1. Klicken Sie auf _Verwaltungsseiten_, um zum Verwaltungsbereich Ihrer
    Website zurückzukehren.
1. Deaktivieren Sie den Wartungsmodus auf Ihrer Website. Siehe: [extend-maintenance](./extend-maintenance.md).
1. Löschen Sie den Cache. Siehe: [prevent-cache-clear](./prevent-cache-clear.md).

## Vertiefen Sie Ihre Kenntnisse

* Überprüfen Sie das Protokoll der Website ([prevent-log](./prevent-log.md)), sobald die Aktualisierungen abgeschlossen sind,
um zu prüfen, ob während des Aktualisierungsvorgangs Fehler aufgetreten sind.
* [security-update-module](./security-update-module.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/elVnWoaQMkk" title="Ein theme aktualisieren (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben von [Boris Doesborg](https://www.drupal.org/u/batigolix).
Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
