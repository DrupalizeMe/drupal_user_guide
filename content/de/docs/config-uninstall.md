---
title: "Unbenutzte Module deinstallieren"
description: "Ein Modul deinstallieren,  um die Ladezeit der Website zu reduzieren."
id: "config-uninstall"
translation_key: "config-uninstall"
source_locale: "de"
---
## Zielsetzung { #config-uninstall }

Deinstallieren Sie die mit dem Kernsystem ausgelieferten Module Search und
History sowie das Modul Setings Tray, wenn Sie es im Kapitel
[config-install](./config-install.md) installiert haben, um die Ladezeit, Ihrer Website,
zu reduzieren.
## Erforderliche Vorkenntnisse

[understanding-modules](./understanding-modules.md)
## Anforderungen an die Website

* Auf Ihrer Website muss sich mindestens ein ungenutztes Modul befinden, das Sie
deinstallieren möchten. Beispielsweise das Modul Search,
das mit dem Kernsystem ausgeliefert wird.
* Wenn Sie Drush zur Deinstallation von Modulen verwenden möchten,
muss Drush installiert sein. Siehe: [install-tools](./install-tools.md).
## Arbeitsschritte

Sie können den Verwaltungsbereich oder Drush verwenden, um Module zu deinstallieren.
### Verwendung des Verwaltungsbereichs

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Erweitern_ > _Deinstallieren_
    (_admin/modules/uninstall_). Dort finden Sie eine Liste der Module,
    die deinstalliert werden können.
1. Aktivieren Sie die Kontrollkästchen vor den Namen der Module, die Sie
    deinstallieren möchten (_Search_, _History_ und _Settings_tray_).
1. Klicken Sie auf _Deinstallieren_.
    <img src="/images/config-uninstall_check-modules.webp" alt="Deinstallationsmodul" width="100%" />

