---
title: "Leeren des Cache"
description: "So leeren Sie den Cache mittels Drush oder über die Benutzeroberfläche."
id: "prevent-cache-clear"
translation_key: "prevent-cache-clear"
source_locale: "de"
---
## Zielsetzung { #prevent-cache-clear }

Leeren Sie die internen Caches Ihrer Website,  bzw. bauen Sie diese neu auf,
um sicherzustellen, dass die Website auf dem neuesten Stand ist. Verwenden Sie
dazu entweder die Benutzeroberfläche oder Drush.
## Erforderliche Vorkenntnisse

* [prevent-cache](./prevent-cache.md)
* [install-tools](./install-tools.md)
## Anforderungen´an die Website

Wenn Sie Drush zum Löschen des Caches verwenden möchten, muss Drush installiert
sein. Siehe [install-tools](./install-tools.md).
## Arbeitsschritte

Sie können entweder die Benutzeroberfläche oder Drush verwenden, um den Cache zu
leeren. Sie können auch das Skript „Rebuild" oder Drush verwenden, um einen
vollständigen Neuaufbau des Cache durchzuführen.
### Verwendung der Benutzeroberfläche zum Leeren des Caches

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Konfiguration_ >
    _Entwicklung_ > _Leistung_ (_admin/configuration/development/preformance_).
    Wenn Sie nicht auf diese Seite des Verwaltungsbereichs zugreifen können,
    verwenden Sie eine der anderen Methoden zum Leeren oder  zum Neuaufbau des Cache.
1. Klicken Sie auf _Alle Caches leeren_.
1. Eine Meldung, die besagt, dass der Cache geleert wurde, erscheint im oberen
      Teil der Seite.
1. Wenn dies nicht das Problem löst, welches dazu geführt hat, dass Sie den
      Cache der Seite leeren wollten, versuchen Sie stattdessen den Cache komplett
      neu aufzubauen.

### Neuaufbau des Cache mit dem Skript Rebuild

1. Öffnen Sie die Datei _settings.php_ (_/sites/default/settings.php_) in einem
      beliebigen Texteditor. Fügen Sie folgende Zeile am Ende der Datei ein und
      speichern Sie die Datei ab:
    ```text
    $settings['rebuild_access'] = TRUE;
    ```
1. Rufen Sie die Seite _http://www.example.com/core/rebuild.php_ in Ihrem Browser
      auf (wobei _www.example.com_ als Beispiel für die URL Ihrer Website dient).
      Nach einer kurzen Wartezeit sollten Sie auf die Startseite Ihrer Website
      umgeleitet werden, und der Neuaufbau des Caches sollte begonnen haben.
1. Öffnen Sie die Datei _settings.php_ (_/sites/default/settings.php_)  erneut in
      einem Texteditor. Suchen Sie die Zeile _$settings['rebuild_access']_, die Sie
      soeben hinzugefügt haben. Entfernen Sie diese Zeile und speichern die Datei ab.

### Mit Drush den Cache neu aufbauen oder leeren

Sie können einen von zwei Befehlen verwenden, um den Cache neu aufzubauen
oder zu leeren:

* Verwenden Sie den Befehl `drush cache:rebuild`, um alle gecachten
  (zwischengespeicherten) Daten einer Website zu löschen und den Cache neu
  aufzubauen. Nachdem der Befehl ausgeführt wurde, wird die Meldung
  „Cache rebuild complete" ausgegeben.
* Verwenden Sie den Befehl `drush cache:clear`, um eine Liste der einzelnen
  Caches zu sehen und wählen Sie dann den spezifischen Cache, den Sie leeren
  möchten. Wenn sie diesen Befehl ausführen, sollte Ihnen ungefähr folgendes
  angezeigt werden:
```text
> drush cache:clear
Enter a number to choose which cache to clear.
 [0]  :  Cancel
 [1]  :  drush
 [2]  :  theme-registry
 [3]  :  menu
 [4]  :  css-js
 [5]  :  block
 [6]  :  module-list
 [7]  :  theme-list
 [8]  :  render
 [9]  :  views
```

Wählen Sie einen zu leerenden Cache aus, indem Sie die diesem Cache zugewiesene
Nummer eingeben. Drücken Sie die Taste „Eingabe" um fortzufahren.
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/-evRieC6Y3U" title="Den Cache leeren (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Zusätzliche Ressourcen

[_Drupal.org_ Community-Dokumentationsseite „Drupals Cache leeren oder neu aufbauen" (englisch)](https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache)

*Mitwirkende*

Bearbeitet und herausgegeben von [Joe Shindelar](https://www.drupal.org/u/eojthebrave)
und [Jack Haas](https://www.drupal.org/u/jerseycheese) übernommen aus
[„Drupals Cache leeren oder neu aufbauen" (englisch)](https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache),
copyright 2000 - 2026 liegt bei den einzelnen Mitwirkenden an der
[Dokumentation der Drupal-Community](https://www.drupal.org/documentation).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
