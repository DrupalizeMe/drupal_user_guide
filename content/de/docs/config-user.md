---
title: "Benutzerkonteneinstellungen Konfigurieren"
description: "Die Einstellungen für das Anlegen von Benutzerkonten anpassen."
id: "config-user"
translation_key: "config-user"
source_locale: "de"
---
## Zielsetzung { #config-user }

Deaktivieren Sie die Möglichkeit für Besucher selbstständig Benutzerkonten auf
der Website erstellen zu können. Bearbeiten Sie außerdem die
von der Website generierten E-Mail-Nachrichten für auf Benutzerkonten bezogene
Ereignisse.
## Erforderliche Vorkenntnisse

[config-overview](./config-overview.md)
## Arbeitsschritte

1. Navigieren Sie im Menü _Verwaltung_ zum Menüpunkt _Konfiguration_ > _Benutzer_ >
    _Kontoeinstellungen_ (_admin/config/people/accounts_).
1. Wählen Sie unter _An- und Abmeldung_ die Option _Nur Administratoren_ aus,
    um den Personenkreis mit Berechtigungen zum Erstellen neuer Benutzerkonten
    festzulegen. Sie können die Option _Bestätigung per E-Mail verlangen,
    wenn ein Besucher ein Benutzerkonto anlegt_  für den Fall deaktivieren,
    dass Sie Benutzern später erlauben möchten selbstständig neue
    Benutzerkonten anzulegen.
    ![Konto-Registrierung nur durch Admin](/images/config-user_account_reg.webp)
1. Optional können Sie die Standard-E-Mail-Adresse ändern.
    Von dieser E-Mail-Adresse erhalten Benutzer dann Mails mit Benachrichtigungen von
    der Website des Wochenmarktes. Diese Option hilft Ihnen dabei eine von der für
    die Website verwendeten allgemeinen E-Mail-Adresse getrennte weitere E-Mail-Adresse nur für
    Benutzerkonten-Benachrichtigungen festzulegen. Diese E-Mail-Adresse für
    Benutzerkonto-Benachrichtigungen ist beispielsweise nützlich,
    wenn einer oder mehrere Mitarbeiter eingesetzt werden,
    welche die Kommunikation mit den Lieferanten des Wochenmarktes durchführen.
    ![Benachrichtigungs-E-Mail von Adresse](/images/config-user_from_email.webp)
1. Optional können Sie die E-Mail-Vorlagen der automatisierten E-Mails unter
    _E-Mails_ bearbeiten. Es gibt mehrere E-Mail-Vorlagen, die vom Kernsystem zur
    Verfügung gestellt werden. Sie sind für verschiedene benutzerspezifische
    Anliegen gedacht. Alle Vorlagen können von Ihnen personalisiert werden.
    Drei der Vorlagen können über das entsprechende Kontrollkästchen deaktiviert werden:
    Benutzerkonto-Aktivierung, Konto gesperrt, und Benutzerkonto wurde gelöscht.
    Sie können Ihren eigenen Text Verfassen (z. B. zur Begrüßung neuer
    Lieferanten, wenn diese gerade ein Benutzerkonto erstellt haben), indem Sie die
    Vorlage _Willkommen (Neuer, von einem Administrator erstellter Benutzer)_
    bearbeiten.
    <img src="/images/config-user_email.webp" alt="E-Mail-Benachrichtigung bei Kontoereignissen" width="100%" />
1. Klicken Sie auf _Konfiguration speichern_, um die Änderungen zu speichern.

## Vertiefen Sie Ihr Wissen

* [prevent-cache-clear](./prevent-cache-clear.md)
* [user-new-user](./user-new-user.md)
## Verwandte Konzepte

Siehe: [user-chapter](./index.md#user-chapter) für weitere Informationen über Benutzerkonten
und Berechtigungen.
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/POhQTAX93R8" title="Konfigurieren der Benutzerkontoeinstellungen (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Zusätzliche Ressourcen

[Sicherheitsleitfaden (englisch)](https://www.drupal.org/security/secure-configuration) kann helfen
Sie mit einem sicherheitsorientierteren Ansatz zur Konfiguration von Drupal vertraut zu machen.

*Mitwirkende*

Geschrieben und herausgegeben von [Laura Vass](https://www.drupal.org/u/lolk) bei
[Pronovix](https://pronovix.com/), und
[Jojy Alphonso](https://www.drupal.org/u/jojyja) bei
[Red Crackle](http://redcrackle.com).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
