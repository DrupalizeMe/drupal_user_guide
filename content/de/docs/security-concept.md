---
title: "Konzept: Sicherheit und regelmäßige Aktualisierungen"
description: "Überblick über Sicherheitsaktualisierungen, die Behandlung von Fehlern und nicht sicherheitsrelevante Aktualisierungen."
id: "security-concept"
translation_key: "security-concept"
source_locale: "de"
---
## Erforderliche Vorkenntnisse { #security-concept }

* [understanding-drupal](./understanding-drupal.md)
* [understanding-modules](./understanding-modules.md)
* [understanding-themes](./understanding-themes.md)
* [understanding-project](./understanding-project.md)
## Was sind Sicherheitsaktualisierungen?

Jede Software hat gelegentlich Fehler, und manchmal haben diese Fehler Sicherheitslücken zur Folge.
Wenn Sicherheitslücken  im Kernsystem, den Modulen oder
Themes, die Ihre Website verwendet bekannt werden, wird ein entsprechendes _Sicherheitsupdate_ veröffentlicht. Sie werden
dieses _Sicherheitsupdate_ anwenden müssen, damit die Sicherheit Ihrer Website weiterhin gewährleistet ist. Siehe
[security-announce](./security-announce.md) um zu erfahren, wie man über Sicherheitsupdates  per E-Mail benachrichtigt wird und
[security-update-core](./security-update-core.md), [security-update-module](./security-update-module.md) sowie
[security-update-theme](./security-update-theme.md), um zu lernen, wie man Aktualisierungen durchführt.
## Was ist das Security-Team?

Das Open-Source-Projekt Drupal hat ein Team von Freiwilligen, die
sicherheitsbezogene Fehler bearbeiten und Sicherheitsupdates veröffentlichen. Dieses Team hilft auch anderen
Entwicklern dabei, Fehler zu beheben und pflegt Informationen, darüber, wie Benutzer ihre
Websites sicher halten können. Auf der Seite
[_Drupal.org_ Security Team (englisch)](https://www.drupal.org/drupal-security-team/general-information) können Sie mehr über das Security-Team, sowie dessen Vorgehensweise und die entsprechenden Prozesse erfahren. 
## Wie werden Sicherheitslücken gemeldet?

Es ist wichtig, dass Sicherheitsprobleme vertraulich behandelt werden, bis sie
behoben worden sind. Dadurch sind Websites weniger gefährdet, solange noch keinen Patch für eine gemeldete Sicherheitslücke existiert. Wenn Sie eine potentielle Sicherheitslücke in einem Teil der Software finden
die von der Website _Drupal.org_ heruntergeladen wurde, folgen Sie dem Verfahren, das auf der
[Seite des _Drupal.org_ Security-Teams](https://www.drupal.org/drupal-security-team/general-information) beschrieben wird, um das Problem zu melden.
## Was sind regelmäßige (nicht sicherheitsrelevante) Aktualisierungen?

Auch das Kernsystem, die Module und Themes werden regelmäßig aktualisiert, um
neue Funktionen hinzuzufügen und Fehler  zu beheben. Diese Aktualisierungen sind weniger kritisch als Sicherheits-Updates. Allgemein hat es sich in der Praxis bewährt, Aktualisierungen anzuwenden, solange diese keine Probleme auf Ihrer Website verursachen. Tests an einer Kopie, die zur Entwicklung Ihrer Website dient, sind inmmer eine gute Sache. Daher sollten sie solche Tests durchführen, bevor sie eine Website, die sich im Produktiveinsatz befindet, aktualisieren. Der Grund hierfür ist, das einige Aktualisierungen Änderungen enthalten können, die nicht mit den Modulen oder
Themes kompatibel sind, die Sie auf Ihrer Website einsetzen. Es kann auch sein, dass Aktualisierungen unter bestimmten Umständen eine bestimmte Funktion auf Ihrer Website unbrauchbar machen.
## Verwandte Themen

* [security-announce](./security-announce.md)
* [security-update-core](./security-update-core.md)
* [security-update-module](./security-update-module.md)
* [security-update-theme](./security-update-theme.md)
* [install-dev-making](./install-dev-making.md)
## Zusätzliche Ressourcen

* [_Drupal.org_ Community-Dokumentationsseite "Sichern Ihrer Website" (englisch)](https://www.drupal.org/security/secure-configuration)
* ["Sicherheitshinweise" auf Drupal.org (englisch)](https://www.drupal.org/security)
* [_Drupal.org_ Sicherheitsteam (englisch)](https://www.drupal.org/drupal-security-team/general-information)

*Mitwirkende*

Geschrieben und herausgegeben von [Boris Doesborg](https://www.drupal.org/u/batigolix)
und [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
