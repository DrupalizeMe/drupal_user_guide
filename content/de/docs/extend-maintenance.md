---
title: "Aktivieren und Deaktivieren des Wartungsmodus"
description: "Die Website in den Wartungsmodus versetzen und eine entsprechende Meldung ausgeben, sowie den Wartungsmodus deaktivieren."
id: "extend-maintenance"
translation_key: "extend-maintenance"
source_locale: "de"
---
## Zielsetzung { #extend-maintenance }

Versetzen Sie Ihre Website in den Wartungsmodus, um Benutzern mit der
entsprechenden Berechtigungen zu ermöglichen
die Website zu verwalten, während Benutzern die nicht über diese Berechtigung
verfügen eine Meldung angezeigt wird,  dass Wartungsarbeiten durchgeführt werden.
## Erforderliche Vorkenntnisse

[security-concept](./security-concept.md)
## Anforderungen an die Website

Wenn Sie Drush zum Aktivieren oder Deaktivieren des Wartungsmodus verwenden
möchten, muss Drush installiert sein. Siehe: [install-tools](./install-tools.md).
## Arbeitsschritte

Sie können die Benutzeroberfläche oder Drush verwenden, um den
 Wartungsmodus zu aktivieren oder zu deaktivieren
### Aktivieren des Wartungsmodus im Verwaltungsbereich der Website

1. Navigieren Sie im Menü Verwalten zum Menüpunkt _Konfiguration_ >
    _Entwicklung_ > _Wartungsmodus_ (_admin/configuration/development/maintenance_).
    Die Seite _Wartungsmodus_ erscheint.
1. Füllen Sie die Felder wie unten dargestellt aus.
    <table>
      <thead>
        <tr>
          <th>Feldname</th>
          <th>Erläuterung</th>
          <th>Wert</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Website in Wartungsmodus versetzen</td>
          <td>Wartungsmodus aktivieren</td>
          <td>Ausgewählt</td>
        </tr>
        <tr>
          <td>Im Wartungsmodus anzuzeigende Meldung</td>
          <td>Die Informationen, die angezeigt werden, um Besucher der Website darüber zu informieren, dass der Wartungsmodus aktiviert ist. Variablen wie @site können in der Nachricht verwendet werden.</td>
          <td>@site wird derzeit gewartet, sollte aber in Kürze wieder erreichbar sein. Vielen Dank für Ihre Geduld.</td>
        </tr>
      </tbody>
    </table>
1. Klicken Sie auf _Konfiguration speichern_.
1. Überprüfen Sie, ob sich die Website im Wartungsmodus befindet, indem Sie mit
    einem anderen Browser, in dem Sie nicht an der Website angemeldet sind,
    auf die Website zugreifen. Wenn Sie dies nicht verifizieren können, versuchen Sie
    den Cache zu leeren. Siehe [prevent-cache-clear](./prevent-cache-clear.md).
    <img src="/images/extend-maintenance-mode-enabled.webp" alt="Maintenance mode enabled" width="100%" />

## Deaktivieren des Wartungsmodus im Verwaltungsbereich der Website

1. Navigieren Sie im Menü _Verwaltung_ zum Menüpunkt _Konfiguration_ >
    _Entwicklung_ > _Wartungsmodus_ (_admin/config/development/maintenance_). Die Seite
    _Wartungsmodus_ erscheint.
1. Füllen Sie die Felder, wie unten stehend gezeigt aus:
    <table>
      <thead>
        <tr>
          <th>Feldname</th>
          <th>Erklärung</th>
          <th>Wert</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Website in den Wartungsmodus versetzen</td>
          <td>Deaktivieren des Wartungsmodus</td>
          <td>Nicht ausgewählt</td>
        </tr>
        <tr>
          <td>Im Wartungsmodus anzuzeigende Meldung</td>
          <td>Wenn der Wartrungsmodus nicht aktiv ist, wird kein Meldungstext benötigt. Sie können das Feld leer lassen.</td>
          <td></td>
        </tr>
      </tbody>
    </table>
1. Klicken Sie auf _Konfiguration speichern_.
1. Stellen Sie sicher, dass sich die Website nicht mehr im Wartungsmodus befindet, indem Sie mit
    einem anderen Browser, in dem Sie nicht an der Website angemeldet sind,
    auf die Website zugreifen. Wenn Sie dies nicht verifizieren können, versuchen Sie
    den Cache zu leeren. Siehe [prevent-cache-clear](./prevent-cache-clear.md).
    <img src="/images/extend-maintenance-mode-disabled.webp" alt="Maintenance mode disabled" width="100%" />

## Aktivieren oder Deaktivieren des Wartungsmodus mit Drush

1. Folgen Sie den obigen Schritten innerhalb der Benutzeroberfläche,
    um die Meldung über die Wartungsarbeiten auf Ihrer Website zu bearbeiten.
1. Führen Sie die folgenden Drush-Befehle aus, um den Wartungsmodus zu aktivieren
    und den Cache zu leeren:
    ```text
    drush state:set system.maintenance_mode 1 --input-format=integer
    drush cache:rebuild
    ```
1. Führen Sie die folgenden Drush-Befehle aus, um den Wartungsmodus zu deaktivieren
    und den Cache zu leeren:
    ```text
    drush state:set system.maintenance_mode 0 --input-format=integer
    drush cache:rebuild
    ```
1. Nachdem Sie einen der beiden Befehlssätze ausgeführt haben, überprüfen Sie,
    ob Sie den Wartungsmodus auf Ihrer Website aktiviert oder deaktiviert haben,
    indem Sie die Website mit einem Browser besuchen, in dem Sie sich nicht
    an der Website angemeldet haben.
## Vertiefen Sie Ihre Kenntnisse

* [security-update-core](./security-update-core.md)
* [security-update-theme](./security-update-theme.md)
* [security-update-module](./security-update-module.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/IQbqQs5h03Q" title="Den Wartungsmodus der Website aktivieren und deaktivieren (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben und herausgegeben von [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Jojy Alphonso](https://www.drupal.org/u/jojyja) bei
[RedCrackle](http://redcrackle.com), und
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
