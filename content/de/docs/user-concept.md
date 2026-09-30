---
title: "Konzept: Benutzer, Rollen und Berechtigungen"
description: "Überblick über Benutzerkonten, Berechtigungen und Rollen."
id: "user-concept"
translation_key: "user-concept"
source_locale: "de"
---
## Was sind Benutzer? { #user-concept }

Jeder, der Ihre Website besucht, ist ein _Benutzer_, auch Sie. Es gibt drei
Gruppen von Benutzern:

* Benutzer, die nicht angemeldet sind, oder _anonyme Benutzer_, auch _Gäste_ genannt
* Benutzer, die eingeloggt oder _authentifiziert sind_.
* Das administrative Benutzerkonto, welches automatisch erstellt wurde, als Sie
Ihre Website installiert haben, oder auch _Benutzer 1_ genannt.
Siehe [user-admin-account](./user-admin-account.md).
## Was sind Berechtigungen?

Die Möglichkeit, Aktionen auf der Website auszuführen (einschließlich der Anzeige von Inhalten, deren Bearbeitung und Änderungen von Konfigurationen) wird über _Berechtigungen_ geregelt. Jede
Berechtigung hat einen Namen (z. B. _Veröffentlichte Inhalte anzeigen_) und umfasst eine Aktion
oder eine kleine Teilmenge von Aktionen. Ein Benutzer muss über eine Berechtigung verfügen, um
die entsprechende Aktion auf der Website ausführen zu können. Die einzelnen Berechtigungen werden 
jeweils durch das Modul definiert, das die mit der Berechtigung verbundene Aktion bereitstellt. 
## Was sind Rollen?

Anstatt jedem Benutzer individuelle Berechtigungen direkt zuzuweisen, werden Berechtigungen
in _Rollen_ gruppiert. Sie können eine oder mehrere Rollen auf Ihrer Site definieren und
jeder Rolle die für die Rolle erforderlichen Berechtigungen zuweisen. Die Berechtigungen, für authentifizierte
Benutzer und Gäste sind in den Rollen _Angemeldeter Benutzer_ und _Gast_ enthalten.
Die Bezeichnungen und die Anzahl der vorhandenen _Rollen_ sind vom bei der Installation der Website 
verwendeten Installationsprofil abhängig. Es kann auch eine Rolle mit der Bezeichnung _Administrator_ vorhanden sein, 
die automatisch über alle auf der Website vorhandenen Berechtigungen verfügt.

Jedem Benutzerkonto auf Ihrer Website wird automatisch die Rolle _Angemeldeter Benutzer_ zugewiesen.
Optional kann jedes Benutzerkonto mit einer oder mehreren weiteren Rollen ausgestattet werden. Wenn Sie
einem Benutzerkonto eine Rolle zuweisen, hat der Benutzer alle Berechtigungen die der jeweiligen Rolle zugewiesen wurden, sobald er sich auf der Website angemeldet hat.

In der Praxis hat sich gezeigt, dass es eine gute Idee ist, mehrere Rollen für eine Website einzurichten. Im Beispiel der Wochenmakt-Website 
könnte man sich beispielsweise folgende Rollen wünschen:

* Eine Rolle für Lieferanten, die es den Lieferanten ermöglicht, ihr eignes Profil zu bearbeiten.
* Eine Rolle für Inhaltsredakteure die es diesen Benutzern ermöglicht, die allgemeinen Seiten der Wochenmarkt-Website zu bearbeiten.
* Eine Rolle zur Verwaltung von Benutzern, mit der sich Benutzer, um die Verwaltung des eigenen Kundenkontos auf der Website kümmern könnnen.
* Die Rolle _Administrator_, die über das Installationsprofil Ihrer Website installiert wurde, dient erfahrenen Benutzern zur Verwaltung und Konfiguration der Website.
## Verwandte Themen

* [user-new-role](./user-new-role.md)
* [user-permissions](./user-permissions.md)
* [user-roles](./user-roles.md)
* [user-new-user](./user-new-user.md)
* [user-admin-account](./user-admin-account.md)
* [user-content](./user-content.md)
## Zusätzliche Ressourcen

* [_Drupal.org_ Community-Dokumentationsseite „Benutzerkonten, Rollen und Berechtigungen"](https://www.drupal.org/node/120614) (englisch)
* [_Drupal.org_ Community-Dokumentationsseite „Benutzer verwalten"](https://www.drupal.org/docs/7/managing-users) (englisch)
* [_Drupal.org_ Community-Dokumentationsseite „Benutzerrollen"](https://www.drupal.org/node/1803614) (englisch)

*Mitwirkende*

Angepasst von [Mark LaCroix](https://www.drupal.org/u/mark-lacroix),
[Boris Doesborg](https://www.drupal.org/u/batigolix), und
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) aus
["Benutzerrollen"](https://www.drupal.org/node/1803614),
copyright 2000 - 2026 liegt bei den einzelnen Mitwirkenden an der
[Dokumentation der Drupal-Community](https://www.drupal.org/documentation).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
