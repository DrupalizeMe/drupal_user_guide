---
title: "Konzept: Cron"
description: "Überblick über Cron und darüber wie dieses Modul sich vom Unix-Dienst Cron unterscheidet."
id: "security-cron-concept"
translation_key: "security-cron-concept"
source_locale: "de"
---
## Was sind Cron-Aufgaben? { #security-cron-concept }

Um sicherzustellen, dass Ihre Website und ihre Module weiterhin gut funktionieren, sollten bestimmte Verwaltungsaufgaben in regelmäßigen Abständen, auf Ihrer Website ausgeführt werden. 

Diese Aufgaben werden _Cron_-Jobs genannnt

Beispiele für Cron-Aufgaben sind:

* Das Prüfen auf Aktualisierungen für Module und Themes,
* Die Indexierung von Inhalten für die Suche oder
* das entfernen temporärer Dateien.
## Wie hängen Cron-Aufgaben und der Unix-Dienst Cron zusammen?

Linux/Unix-basierte Betriebssysteme verfügen über einen Dienst, der Cron-Aufgaben zeitgesteuert, d. h. in regelmäßigen Abständen ausführt. 
Sie können den Zeitplaner Cron, der sich auf Ihrem Webserver befindet verwenden, um Wartungsaufgaben auf Ihrer Website auszuführen. Alternativ können Sie das mit dem Kernsystem ausgelieferte Modul Automated Cron verwenden, um diese Aufgaben ausführen zu lassen.
Sie können den Status der Cron-Aufgaben Ihrer Website im Statusbericht überprüfen.
## Verwandte Themen

* [security-cron](./security-cron.md)
* [prevent-status](./prevent-status.md)
## Zusätzliche Ressourcen

[_Drupal.org_ Community-Dokumentationsseite "Einrichten von Cron (englisch)"](https://www.drupal.org/docs/7/setting-up-cron/overview)

*Mitwirkende*

Geschrieben und herausgegeben von
[Diána Lakatos](https://www.drupal.org/u/dianalakatos) bei
[Pronovix](https://pronovix.com/),
[Dave Hansen-Lange](https://www.drupal.org/u/dalin) bei
[Advomatic](https://www.advomatic.com/),
und [Boris Doesborg](https://www.drupal.org/u/batigolix).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
