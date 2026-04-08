---
title: "Konfigurieren von Cron-Wartungsaufgaben"
description: "Wie man Cron-Wartungsaufgaben mit dem Kernsystemmodul Automated Cron ausführt, oder diese außerhalb der Website ausführen lässt."
id: "security-cron"
translation_key: "security-cron"
source_locale: "de"
---
## Zielsetzung { #security-cron }

Prüfen Sie, ob Cron-Wartungsaufgaben regelmäßig ausgeführt werden. Ist dies nicht der Fall, installieren Sie entweder das Modul Automated Cron oder lassen Sie Cron-Wartungsaufgaben außerhalb Ihrer Website ausführen.
## Erforderliche Vorkenntnisse

[security-cron-concept](./security-cron-concept.md)
## Arbeitsschritte

1. Überprüfen Sie den _Statusbericht_ (siehe [prevent-status](./prevent-status.md)), um zu sehen, wann Cron-Wartungsaufgaben zuletzt ausgeführt wurden.
    Wenn Sie die Website mit dem Standardinstallationsprofil des Kernsystems (oder auf ähnliche Weise) installiert haben,
    können Sie Cron-Wartungsaufgaben bereits mit Hilfe des Moduls Automated Cron ausführen. Standardmäßig werden diese Aufgaben etwa alle drei
    Stunden ausgeführt.
1. Wählen Sie aus, ob Sie Cron-Wartungsaufgaben mit dem Modul Automated Cron, das mit dem Kernsystem ausgeliefert wird
    oder mittels anderer Werkzeuge ausführen möchten. Das Modul Automated-Cron ist aus folgenden
    Gründen möglicherweise nicht für Ihre Website geeignet:
    * Jedes mal, wenn jemand auf eine Seite auf der Website zugreift, prüft das Modul, wie viel Zeit
    seit der letzten Ausführung von Cron-Wartungsaufgaben vergangen ist, und führt die Aufgaben, falls erforderlich,
    erneut aus. Wenn über einen längeren Zeitraum niemand die Website besucht, werden Cron-Wartungsaufgaben also nicht ausgeführt.
    * Cron-Wartungsaufgaben werden ausgeführt, nachdem die Seite geladen wurde. Dies bedeutet
    es bleibt weniger Zeit für die Ausführung der Aufgaben, bevor verschiedene Server-Timeouts
     (z. B. PHP-Ausführungszeitüberschreitungen) in kraft treten. Wenn dies geschieht, wird im Systemprotokoll (siehe
      [prevent-log](./prevent-log.md)) eine Fehlermeldung ausgegeben, die darüber Informiert, dass Wartungsaufgaben mittels Cron nicht abgeschlossen werden konnten.
    * Mit dem Kernsystemmodul Automated Cron sind geringe Skalierbarkeitskosten verbunden.
      Dies liegt daran, dass einer der Prozesse des Webservers belegt ist (und keine anderen Webseiten bedienen kann), bis die Cron-Wartungsaufgaben abgeschlossen sind. 
      
1. Wenn Sie das Kernsystemmodul Automated Cron verwenden möchten, stellen Sie zunächst sicher, dass es
    installiert ist (Das Installationsprofil Standard installiert das Modul automatisch. Siehe:
    [config-install](./config-install.md) wenn dass Modul nicht installiert wurde).
    Als Nächstes legen Sie fest, wie häufig Cron-Wartungsaufgaben durchlaufen werden sollen.
    Navigieren Sie dazu im Menü _Verwalten_ zum Menüpunkt _Konfiguration_ >
    _System_ > _Cron_ (_admin/config/system/cron_). Wählen Sie im Feld _Cron alle x-Minunten ausführen_ unter _Cron-Einstellungen_ das gewünschte Intervall aus und klicken Sie auf _Konfiguration Speichern_.
    ![Konfigurieren Sie den Kern des automatisierten Cron-Moduls](/images/security-cron.png)
1. Wenn Sie Cron-Wartungsaufgaben von außerhalb der Website ausführen wollen, deinstallieren Sie
    das Kernsystemmodul Automated Cron (siehe [config-uninstall](./config-uninstall.md)). Als nächstes ermitteln Sie die
    Cron-URL. Diese URL wird im _Statusbericht_ (siehe [prevent-status](./prevent-status.md)) und
    auf der Seite _Cron_ im Verwaltungsbereich (siehe oben) angezeigt. Die URL sieht ungefähr wie folgt aus:
    _http://www.example.com/cron/0MgWtfB33FYbbQ5UAC3L0LL3RC0PT3RNUBZILLA0Nf1Re_

    Immer wenn diese URL aufgerufen wird, werden die Cron-Wartungsaufgaben ausgeführt. Richten sie einen der folgenden Zeitplaner ein, damit diese URL regelmäßig aufgerufen wird:

    * [Der Systemdienst Cron (englisch)](https://www.drupal.org/docs/7/setting-up-cron/configuring-cron-jobs-using-the-cron-command) (Linux, Mac OS X, Solaris, BSD)
    * [Geplante Aufgaben (englisch)](https://www.drupal.org/docs/7/setting-up-cron-for-drupal/configuring-cron-jobs-with-windows) (Windows)
    * Einen Cron-Dienstanbieter (software as a service)
    * Eine Verwaltungsoberfläche für Cron-Aufgaben, die durch Ihren Webhoster bereitgestellt wird (Lesen Sie dazu die Dokumentation Ihres Webhosters)

## Verwandte Konzepte

[security-concept](./security-concept.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/ts4g1jTEAt4" title="Wartungsaufgaben mittels Cron konfigurieren (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Zusätzliche Ressourcen

* https://www.drush.org/latest/cron/ [ "Drupal-Wartungsaufgaben mit Drush ausführen" (englisch)]
* [_Drupal.org_ Community-Dokumentationsseite "Cron einrichten" (englisch)](https://www.drupal.org/docs/7/setting-up-cron/overview)

*Mitwirkende*

Geschrieben und herausgegeben von [Dave Hansen-Lange](https://www.drupal.org/u/dalin) bei
[Advomatisch](https://www.advomatic.com/),
[Boris Doesborg](https://www.drupal.org/u/batigolix),
und [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
