---
title: "Neue Website-Funktionen bereitstellen"
description: "Eine lokal erstellte Ansicht auf eine Live-Website Kopieren."
id: "extend-deploy"
translation_key: "extend-deploy"
source_locale: "de"
---
## Zielsetzung { #extend-deploy }

Kopieren Sie eine Ansicht, die Sie in einer lokalen Entwicklungsumgebung erstellt
haben, auf eine Live-Website.
## Erforderliche Vorkenntnisse

* [install-dev-making](./install-dev-making.md)
* [extend-config-versions](./extend-config-versions.md)
* [install-dev-sites](./install-dev-sites.md)
## Anforderungen an die Website

* Das Modul, Configuration Manager, das mit dem Kernsystem ausgeliefert wird,
muss sowohl auf der Website in der Entwicklungsumgebung, als auch auf der Live-Website
installiert sein. Siehe: [config-install](./config-install.md) für Anweisungen zur Installation von
Modulen, die mit dem Kernsystem ausgeliefert werden.
* Der Inhaltstyp Lieferant muss sowohl in der Entwicklungsumgebung als auch auf
der Live-Website vorhanden sein.
* Die beiden Inhaltstypen müssen die gleichen
Felder enthalten. Siehe: [structure-content-type](./structure-content-type.md).
* Die Ansicht Lieferanten muss auf der Entwicklungsumgebung vorhanden sein,
nicht jedoch auf der Live-Website. Siehe [views-create](./views-create.md).
## Arbeitsschritte

1. Öffnen Sie die Website in der lokalen Entwicklungsumgebung.
1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Konfiguration_ >
    _Entwicklung_ > _Konfigurationssynchronisation_ > _Export_ > _Einzelnes Element_
    (_admin/config/development/configuration/single/export_).
    Die Seite _„Einzelnes Element“_ erscheint.
1. Wählen Sie _Ansicht_ aus der Liste _Konfigurationstyp_.
1. Wählen Sie Lieferanten aus der Liste _Konfigurationsname_ aus.
    Die Konfiguration erscheint im Textfeld.
1. Kopieren Sie die Konfiguration aus dem Textfeld.
    ![Ein einzelnes Objekt exportieren](/images/extend-deploy-export-single.webp)
1. Öffnen Sie die Live-Website.
1. Navigieren Sie im Menü Verwalten_ zum Menüpunkt _Konfiguration_ >
    _Entwicklung_ > _Konfigurationssynchronisation_ > _Import_ > _Einzelnes Element_
    (__admin/config/development/configuration_). Die Seite _Import_ erscheint.
1. Wählen Sie _Ansicht_ aus der Liste _Konfigurationstyp_.
1. Fügen Sie die Konfiguration in das Textfeld ein.
1. Klicken Sie auf _Importieren_. Die Bestätigungsseite erscheint.
1. Klicken Sie auf _Bestätigen_.
1. Überprüfen Sie, ob die Ansicht importiert wurde, indem Sie im Menü _Verwalten_
    zum Menüpunkt _Struktur_ > _Ansichten_ navigieren.

## Vertiefen Sie Ihre Kenntnisse

Die Arbeitsschritte dieses Themas zeigen, wie Sie eine einzelne Konfiguration
exportieren und wieder importieren können. Wenn Sie neue Funktionen auf einer
Entwicklungs-Website erstellen und auf Ihre Live-Website übertragen,
müssen Sie oft mehrere Konfigurationselemente exportieren und wieder importieren.
Wenn Sie zum Beispiel einen neuen Inhaltstyp
mit Feldern entwickelt haben, müssen Sie mehrere Konfigurationselemente
für jedes Feld übertragen, ein Konfigurationselement für den Inhaltstyp selbst
und möglicherweise mehrere Konfigurationselemente für mehrere _Ansichtsmodi_
sowie mehrere Konfigurationselemente für _Formularanzeigemodi_.
Außerdem müssen diese Elemente in der richtigen Reihenfolge übertragen werden.
Diese Übertragung korrekt auszuführen, kann sowohl mühsam als auch
aufwändig sein.

Als Alternative hierzu können Sie die komplette Konfiguration einer
Website übertragen. Dazu benötigen Sie eine Website in einer lokalen
Entwicklungsumgebung, bei der es sich um einen Klon der Live-Website handelt.
Siehe [install-dev-making](./install-dev-making.md). Anschließend können Sie die
Schritte in [extend-config-versions](./extend-config-versions.md) zur Synchronisierung der Konfiguration
zwischen Entwicklungs- und Live-Umgebung ausführen.

Eine weitere Alternative ist die Verwendung des
[von der Community bereitgestellten Zusatzmoduls Features](https://www.drupal.org/project/features). Dieses Modul ermöglich den Export und den Import sog.
Vorgefertigte Funktionen (Eine vorgefertigte Funktion kann dabei z. B. alle Konfigurationen für eine
Fotogalerie enthalten).

Wenn  die Auswirkungen dieser Änderungen anschließend auf Ihrer Website nicht
zu sehen sein sollten, müssen Sie evtl. den Cache leeren.
Siehe: [prevent-cache-clear](./prevent-cache-clear.md).
## Verwandte Konzepte

[install-dev-sites](./install-dev-sites.md)
[planning-workflow](./planning-workflow.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/hysqVDIfLTA" title="Neue Website-Funktionen bereitstellen (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben von [Boris Doesborg](https://www.drupal.org/u/batigolix).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
