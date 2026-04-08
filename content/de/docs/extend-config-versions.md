---
title: "Synchronisieren von Konfigurationsversionen"
description: "Die Konfiguration einer Entwicklungs- und einer Produktivsite mit dem Kernsystemmodul Configuration Manager austauschen."
id: "extend-config-versions"
translation_key: "extend-config-versions"
source_locale: "de"
---
## Zielsetzung { #extend-config-versions }

Synchronisieren Sie die Konfiguration zwischen einer Entwicklungs- und einer
Produktiv-Website.
## Erforderliche Vorkenntnisse

* [understanding-data](./understanding-data.md)
* [install-prepare](./install-prepare.md)
* [install-dev-sites](./install-dev-sites.md)
* [install-dev-making](./install-dev-making.md)
## Anforderungen an die Website

* Sie müssen eine Entwicklungskopie Ihrer Live-Website besitzen. Siehe
[install-dev-making](./install-dev-making.md).
* Das Modul Configuration Manager, das mit dem Kernsystem ausgeliefert wird,
muss sowohl in der Entwicklungs- und der Live-Umgebung installiert sein.
Lesen Sie [config-install](./config-install.md) um Anweisungen zu erhalten, wie Sie mit dem Kernsystem ausgelieferte Module installieren.
* Sie müssen die Konfiguration entweder auf der Live-Website oder auf der
Entwicklungs-Website geändert haben. Von der Entwicklungs-Website
(der _Quell-Website_) aus sollen Änderungen mit der anderen Website
(der _Ziel-Website_) synchronisiert werden.  Sie können zum Beispiel
einen neuen Inhaltstyp entwickeln oder Felder und Ansichten auf Ihrer
Entwicklungs-Website hinzufügen. Wenn in der lokalen Entwicklungsumgebung alles
korrekt funktioniert, können Sie die Änderungen auf die Live-Website anwenden.
* Alle Konfigurationen, die nicht zwischen der Quell-Website und
 der Ziel-Website synchronisiert werden sollen,  müssen in
 Konfigurationsüberschreibungen in der Datei _settings.php_ und nicht in der
 Datenbank erfasst werden. Siehe: [install-dev-making](./install-dev-making.md).
## Arbeitsschritte

1. Navigieren Sie auf der Quell-Website im Menü _Verwalten_ zum Menüpunkt
    _Konfiguration_ > _Entwicklung_ > _Konfigurationssynchronisation_ > _Exportieren_
    (_admin/config/development/configuration/full/export_).
1. Klicken Sie auf _Exportieren_. Ihre Website wird ein Archiv mit der vollständigen
    Konfiguration der Website erstellen. Speichern Sie die Datei auf Ihrem
    lokalen Computer.
1. Navigieren Sie auf der Ziel-Website im Menü _Verwalten_ zum Menüpunkt
    _Konfiguration_ > _Entwicklung_ > _Konfigurationssynchronisation_ > _Importieren_
    (_admin/config/development/configuration/full/import_).
1. Suchen Sie nach dem heruntergeladenen Konfigurationsarchiv und klicken Sie auf Datei auswählen, wählen Sie das exportierte Archiv aus und klicken Sie anschließénd auf „Hochladen“.

    _Datei hochladen_. Ihr Konfigurationsarchiv wird auf die Ziel-Website hochgeladen
    und Sie werden auf die Konfigurationsseite _„Synchronisieren“_
    (_admin/config/development/configuration_) weitergeleitet.
    Außerdem wird eine Meldung ausgegeben, die besagt,
    dass das Archiv hochgeladen wurde.

1. Überprüfen Sie, ob die auf der Seite angezeigten Unterschiede Ihren
    Erwartungen entsprechen. Sie sehen möglicherweise Konfigurationselemente,
    die hinzugefügt, gelöscht oder geändert wurden. Bei geänderten Elementen können
    Sie auf _„Unterschiede anzeigen“_ klicken, um die Änderungen einzusehen.
1. Wenn Sie zufrieden sind, klicken Sie auf _„Alle importieren“_,
    um die Konfigurationsänderungen zu importieren.

## Vertiefen Sie Ihr Wissen

* Wenn die Änderungen, die Sie vorgenommen haben, nur ein Konfigurationsobjekt
betreffen (z. B. eine Ansicht), können Sie die Export-/Import-Funktion für eine
einzelne Konfiguration verwenden, um die Konfigurationsänderung zwischen
beiden Websites durchzuführen. Siehe: [extend-deploy](./extend-deploy.md).
* Nach dem Schritt, in dem Sie die vollständige Konfiguration von der
Quell-Website exportieren, können Sie das Archiv auch entpacken und an ein
System zur Versionskontrolle, wie z. B. Git übergeben, um Änderungen an der
Konfiguration einer Website zu protokollieren. Siehe: [extend-git](./extend-git.md).
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/dLUGQk8GKa0" title="Konfigurationsversionen synchronisieren (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben von [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
