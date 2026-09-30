---
title: "Konzept: Menüs"
description: "Übersicht über das Menükonzept und die mit dem Standardprofil des Kernsystems automatisch erstellten Menüs."
id: "menu-concept"
translation_key: "menu-concept"
source_locale: "de"
---
## Was ist ein Menü? { #menu-concept }

Menüs sind eine Sammlung von Links (Menüpunkten), die zum Navigieren auf einer
Website verwendet werden. Das Modul Menu UI, dass mit dem Kernsystem
ausgeliefert wird, stellt eine Benutzeroberfläche zur Steuerung und Anpassung
des Menüsystems zur Verfügung. Menüs werden in erster Linie als hierarchische
Linkliste angezeigt. Standardmäßig werden neue Menüpunkte innerhalb eines
integrierten Menüs mit der Bezeichnung _Hauptnavigation_ angelegt.
Administratoren können aber auch benutzerdefinierte Menüs erstellen.

Das mit dem Kernsystem ausgelieferte Installationsprofil Standard
enthält fünf Menüs:

- **Hauptnavigation:** Links zu Abschnitten, die für Besucher der Website bestimmt sind. Sie werden normalerweise von den Administratoren einer Website angelegt.
- **Verwalten:** Links zu administrativen Aufgaben. Dieses Menü enthält hauptsächlich Links, die von Modulen bereitgestellt werden, die auf Ihrer Website installiert werden.
- **Menü Benutzermenü:** Links zu mit dem Benutzerkonto verbundenen Aufgaben wie _Mein Konto_ und _Abmelden_.
- **Fußzeile:** Links zu wichtigen Seiten innerhalb der Website, die für die Fußzeile bestimmt sind. Diese Links werden in der Regel von den Administratoren der Website erstellt.
- **Werkzeuge:** Links zu Aufgaben, die Besucher der Website ausführen können sollten. Einige Module platzieren die von ihnen mitgelieferten Links in diesem Menü.

Über die Menüverwaltung können Sie die Menüs auf folgende Weise anpassen:

* Erstellen neuer benutzerdefinierter Menüs.
* Hinzufügen neuer Menüpunkte.
* Neuanordnung von Menüpunkten durch Einstellen ihrer „Gewichtung" oder durch
  Ziehen und verschieben mit der Maus.
* Umbenennen von Menüpunkten.
* Ändern des Link-Titels und des  Tooltips (der angezeigt wird, wenn Sie mit der
Maus über einen Menüpunkt fahren und mit dem Mauszeiger darauf stehen bleiben).
* Verschieben eines Menüeintrags in ein anderes Menü durch Bearbeiten des
  _Übergeordneten Menüs_ des Menüeintrags.

Ein Menüeintrag wird einem Besucher nur dann angezeigt, wenn er über Rechte
verfügt, die erforderlich sind, um den jeweiligen Menüeintrag anzeigen zu
können. Zum Beispiel wird der Menüpunkt Verwalten, Benutzern, die nicht an der
Website angemeldet sind, nicht angezeigt.
## Verwandte Themen

* [menu-link-from-content](./menu-link-from-content.md)
* [menu-reorder](./menu-reorder.md)
* Um ein Menü anzuzeigen, müssen Sie den Block des Menüs in einer entsprechenden
  Region Ihres Themes platzieren. Siehe [block-concept](./block-concept.md), [block-regions](./block-regions.md), und 
  [block-place](./block-place.md). Das Standardinstallationsprofil des Kernsystems platziert alle 
  definierten Menüs, außer dem Menü Verwalten, in den Abschnitten des Themes Bartik. 
  Das Theme des Kernsystems zeigt das Menü Verwalten über das Menü Toolbar an, 
  das mit dem Kernsystem ausgeliefert und mittels des Installationsprofils Standard 
  installiert wird. Das Menü Verwalten wird auch vom  Modul Admin Toolbar angezeigt, 
  das von der Community als Zusatzmodul bereitgestellt wird.

*Mitwirkende*

Geschrieben und herausgegeben von [Ajay Viswambharan](https://www.drupal.org/u/ajayvi),
[Jojy Alphonso](https://www.drupal.org/u/jojyja) bei
[Red Crackle](http://redcrackle.com),
und [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
