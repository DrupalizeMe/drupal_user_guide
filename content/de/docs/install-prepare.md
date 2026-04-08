---
title: "Vorbereiten der Installation"
description: "Das Kernsystem herunterladen und die Systemvoraussetzungen erfüllen."
id: "install-prepare"
translation_key: "install-prepare"
source_locale: "de"
---
## Zielsetzung { #install-prepare }

Laden Sie das Kernsystem herunter und kümmern Sie sich darum,
dass alle erforderlichen Systemvoraussetzungen erfüllt sind.
## Erforderliche Vorkenntnisse

* [install-requirements](./install-requirements.md)
* [install-tools](./install-tools.md)
* [install-decide](./install-decide.md)
* Wie man Server-Software installiert und konfiguriert (falls Sie die Installation selbst vornehmen)
* Wie man das Hosting einer Website im allgemeinen einrichtet
* Wie man eine Datenbank erstellt
## Anforderungen an die Website

Die Server-Software muss auf dem Computer installiert sein, auf dem Sie Ihre
Website entwickeln. Siehe [install-requirements](./install-requirements.md).

Je nachdem, wie Sie das Kernsystem herunterladen möchten, müssen Sie
möglicherweise  zunächst zusätzliche Software-Tools installieren.

Siehe: [install-decide](./install-decide.md) und [install-tools](./install-tools.md).
## Arbeitsschritte

1. Wählen Sie eine der Methoden zum Herunterladen und Installieren
    des Kernsystems aus, die im Kapitel [install-decide](./install-decide.md) aufgelistet sind.
    Der Rest dieser Anweisungen gilt für den Download mittels Composer, die manuelle
    Installation und das interaktive Installationsprogramm gleichermaßen.
1. Richten Sie eine URL und ein Hosting für Ihre Website auf dem Server ein.
    Überprüfen Sie, ob das Hosting funktioniert, indem Sie eine einfache HTML-Datei im
    Stammverzeichnis Ihres Webservers platzieren und testen, ob diese den Besuchern
    Ihrer Website angezeigt wird.
1. Erstellen Sie eine Datenbank und ein dazugehöriges Benutzerkonto, dass über
    Vollzugriff auf die Datenbank verfügt.
1. Laden Sie die Dateien des Kernsystems in das Hauptverzeichnis Ihrer Website,
    indem Sie die von Ihnen gewünschte Methode verwenden.
    Siehe: [install-decide](./install-decide.md)  für weitere Informationen.

## Vertiefen Sie Ihr Wissen

Siehe: [install-run](./install-run.md) um das interaktive Installationsprogramm auszuführen.

Alternativ können Sie den folgenden Drush-Befehl in dem
Verzeichnis ausführen, in das Sie die Software heruntergeladen haben, wobei
_DATENBANKKNAME_, _DATENBANKBENUTZER_ und _DATENBANKPASSWORT_ durch die
Zugangsdaten zu Ihrer Datenbank ersetzt werden müssen:

```text
drush site:install standard --db-url='mysql://DATENBANKBENUTZER:DATENBANKPASSWORT@localhost/DATENBANKNAME' --site-name=Meine-Website
```
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/7Aib3y9DM80" title="Die Installation vorbereiten (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Zusätzliche Ressourcen

[Drush (englisch)](http://www.drush.org)

*Mitwirkende*

Geschrieben und herausgegeben von [Drew Gorton](https://www.drupal.org/u/dgorton),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) bei
[erdfisch](https://erdfisch.de),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
und [Jojy Alphonso](https://www.drupal.org/u/jojyja) bei
[RedCrackle](http://redcrackle.com).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
