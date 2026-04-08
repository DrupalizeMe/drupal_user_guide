---
title: "Ausführen des interaktiven Installationsprogramms"
description: "Das interaktive Installationsprogramm zur Installation des Kernsystems verwenden."
id: "install-run"
translation_key: "install-run"
source_locale: "de"
---
## Zielsetzung { #install-run }

Installieren Sie das Kernsystem und erstellen Sie das Administratorkonto,
indem Sie das mitgelieferte Installationsprogramm verwenden.
## Anforderungen an die Website

[install-prepare](./install-prepare.md)
## Arbeitsschritte

1. Wenn Sie eine 1-Click-Installation von einem Hosting-Provider oder einer
    Demo-Website verwenden, werden höchstwahrscheinlich einige oder
    alle der folgenden Bildschirme als Teil des Installationsprozesses übersprungen.
    Wenn Sie das Kernsystem manuell oder mit dem Composer hochgeladen haben,
    öffnen Sie einen Browser und besuchen Sie Ihre Website,
    um das Installationsprogramm zu starten.
1. Wählen Sie zum Beispiel auf der ersten Seite des Installationsprogramms
    die Sprache Englisch aus. Sie können optional eine der anderen aufgeführten
    Sprachen auswählen. Die Sprachdateien für die gewählte Sprache werden
    heruntergeladen und installiert, so
    dass der Rest des Installationsprozesses in der ausgewählten
    Sprache durchgeführt werden kann. Nachdem Sie eine Sprache ausgewählt haben,
    klicken Sie auf _Speichern und fortfahren_.
    <img src="/images/install-run-1.png" alt="Choose a language" width="100%" />
1. Wählen Sie ein Installationsprofil aus. Installationsprofile stellen
    Merkmale und Funktionen für bestimmte Arten von Websites als
    eigenständigen Download zur Verfügung. Diese enthalten das Kernsystem,
    Zusatzmodule und Themes sowie vordefinierte Konfigurationen.
    Das Kernsystem enthält zwei Installationsprofile. Wählen Sie  das
    Installationsprofil Standard aus und Klicken Sie auf _Speichern und fortfahren_.
    <img src="/images/install-run-2.png" alt="Choose an installation profile" width="100%" />
1. Im nächsten Schritt des Installationsprogramms wird überprüft, ob Ihr System
    die Mindestvoraussetzungen erfüllt. Wenn dies nicht der Fall ist, erhalten Sie
    einen Überblick darüber, was korrigiert werden muss, um fortfahren zu können.
    Werden die minimalen Systemvoraussetzungen erfüllt, wird das
    Installationsprogramm automatisch zum nächsten Schritt übergehen.
1. Geben Sie die Zugangsdaten zu der Datenbank an, die Sie im, Kapitel
    [install-prepare](./install-prepare.md) angelegt haben. Klicken Sie anschließend  auf
    _Speichern und fortfahren_.
    <table>
      <thead>
        <tr>
          <th>Feldname</th>
          <th>Erläuterung</th>
          <th>Beispielwert</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Datenbankname</td>
          <td>Der Name, der Datenbank</td>
          <td>drupal</td>
        </tr>
        <tr>
          <td>Benutzername des Datenbankbenutzers</td>
          <td>Der Benutzername des Datenbankbenutzers</td>
          <td>Heil1gerb1mbam</td>
        </tr>
        <tr>
          <td>Datenbank-Passwort</td>
          <td>Das Passwort des Datenbankbenutzers</td>
          <td>**************</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/install-run-3.png" alt="Database configuration form" width="100%" />

1. Im nächsten Schritt wird ein Fortschrittsbalken unter der Überschrift
    _Drupal wird installiert_ angezeigt. Nachdem der Installationsvorgang abgeschlossen
    wurde, wechselt das Installationsprogramm automatisch zum nächsten Schritt.
    <img src="/images/install-run-4.png" alt="Installation progress bar" width="100%" />
1. Der nächste Schritt besteht darin, einige grundlegende Informationen über Ihre
    neue Website zu konfigurieren
    (beachten Sie auch, eventuelle Warnungen über Dateiberechtigungen, die wir in einem der nächsten Schritte behandeln).
    Beachten Sie, dass das Benutzerkonto, das Sie in diesem Schritt erstellen,
    das Benutzerkonto des Administrators der Website ist.
    Siehe: [user-admin-account](./user-admin-account.md) um wichtige Informationen über dieses
    einzigartige Benutzerkonto zu erhalten. Sie können dieses Konto getrost
    „admin" nennen, wenn Sie diesem Benutzerkonto ein sicheres und einzigartiges
    Passwort zuweisen.
    Füllen Sie das Formular mit den folgenden Informationen aus:
    <table>
      <thead>
        <tr>
          <th>Feldname</th>
          <th>Erläuterung</th>
          <th>Beispiel-Wert</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Name der Website</td>
          <td>Der für die Website gewünschte Name</td>
          <td>Musterstadt Wochenmarkt</td>
        </tr>
        <tr>
          <td>E-Mail-Adresse der Website</td>
          <td>Die mit der Website verbundene E-Mail-Adresse</td>
          <td>info@example.com</td>
        </tr>
        <tr>
          <td>Benutzername</td>
          <td>Anmeldename des Administrators</td>
          <td>admin</td>
        </tr>
        <tr>
          <td>Passwort</td>
          <td>Das gewünschte Passwort</td>
          <td>**************</td>
        </tr>
        <tr>
          <td>Passwort bestätigen</td>
          <td>Die Wiederholung des gewünschten Passworts</td>
          <td>****************</td>
        </tr>
        <tr>
          <td>E-Mail-Adresse</td>
          <td>E-Mail-Adresse des Benutzers</td>
          <td>admin@example.com</td>
        </tr>
      </tbody>
    </table>

    Die übrigen Felder können wahrscheinlich auf den Standardwerten belassen werden.
    <img src="/images/install-run-5.png" alt="Configuration form" width="100%" />

1. Klicken Sie auf _Speichern und fortfahren_.
1. Sie werden auf die Startseite Ihrer neuen Website umgeleitet, und  sollten
    die Meldung _Glückwunsch, Sie haben Drupal installiert!_, im oberen Teil der
    Website sehen können.
    <img src="/images/install-run-6.png" alt="Installation success" width="100%" />
1. Möglicherweise haben Sie im Arbeitsschritt Website konfigurieren eine Warnung über
    Dateiberechtigungen gesehen. Diese Warnung wird Ihnen weiterhin angezeigt,
    bis Sie die Dateiberechtigungen korrigiert haben. So
    vermeiden Sie die Warnung und machen Ihre Website sicherer: Ändern Sie die
    Schreib- und Leseberechtigungen des
    Verzeichnisses _sites/default_ und der Datei _sites/default/settings.php_, so dass
    sowohl das Verzeichnis, als auch die Datei schreibgeschützt sind
    (möglicherweise müssen Sie die Dokumentation Ihres Hosting-Providers
    konsultieren, um Anweisungen zum Setzen von Lese- und Schreibrechten
    zu erhalten).

## Vertiefen Sie Ihre Kenntnisse

Überprüfen Sie den Statusbericht, um zu sehen, ob es Probleme mit der
Installation gibt. Siehe [prevent-status](./prevent-status.md).
## Verwandte Konzepte

* [install-dev-sites](./install-dev-sites.md)
* [install-tools](./install-tools.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/LGfRKKKDjv8" title="Das Installationsprogramm ausführen (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Zusätzliche Ressourcen

* [Drupal.org Community-Dokumentationsseite https://secure.php.net/manual/de/configuration.php Eine Datenbank erstellen (englisch)](https://www.drupal.org/docs/8/install/step-3-create-a-database)
* [Drupal.org Community-Dokumentation Abschnitt https://secure.php.net/manual/de/configuration.phpWebhosting-Probleme (englisch)](https://www.drupal.org/server-permissions)

*Mitwirkende*

Geschrieben und herausgegeben von [Joe Shindelar](https://www.drupal.org/u/eojthebrave) bei
[Drupalize.Me](https://drupalize.me),
und [Jojy Alphonso](https://www.drupal.org/u/jojyja) bei
[RedCrackle](http://redcrackle.com).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
