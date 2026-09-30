---
title: "Konzept: Taxonomie"
description: "Überblick über die Taxonomie und wie diese zur Kategorisierung von Inhalten einer Website verwendet werden kann."
id: "structure-taxonomy"
translation_key: "structure-taxonomy"
source_locale: "de"
---
## Erforderliche Vorkenntnisse { #structure-taxonomy }

* [planning-data-types](./planning-data-types.md)
* [structure-reference-fields](./structure-reference-fields.md)
## Was ist Taxonomie?

_Taxonomie_ wird zur Klassifizierung von Website-Inhalten verwendet. Das gängigste Beispiel einer Taxonomie
sind die Begriffe (auch Tags genannt), die verwendet werden, um Beiträge auf einer Blog-Website zu klassifizieren 
oder zu kategorisieren. Die Wochenmarkt-Website könnte eine Taxonomie für Rezeptzutaten verwenden, 
damit Rezepte nach den darin enthaltenen Zutaten gefiltert und sortiert werden können.
Einzelne Elemente der Taxonomie sind als _Begriffe_ bekannt (Das können Blog-Themen oder, wie in diesem Beispiel, Zutaten für Rezepte sein). Eine Sammlung einzelner Begriffe, zu einem bestimmten Hauptthema wiedrum wird _Vokabular_ genannt
(In unserem Beispiel ist das jeweils die Sammlung aller Themenbegriffe, die im Blog behandelt werden oder die Sammlung aller Zutaten welche in den Rezepten verwendet werden). Technisch gesehen sind Taxonomiebegriffe ein Entitätstyp. Der Subtyp dieses Entitätstyps, sind die Vokabulare, in denen die einzelnen Taxonomiebegriffe gebündelt werden. 
Genau wie andere Entitäten können Taxonomiebegriffe Felder enthalten.
Sie können einem Taxonomiebegriff beispielsweise ein Bild hinzufügen, und so einrichten, das dieseses Bild als Symbol für den Begriff angezeigt wird.

In einem individuellen Vokabular können Begriffe in einer Hierarchie organisiert werden. Es kann aber auch so angeleget werden, dass die Begriffe nebeneinander stehen. In diesem Fall handelt es sich dann um eine flache Hierarchie. Blogthemen, werden zum Beispiel meist in flachen Hierarchien organisiert, während ein Vokabular, das Rezeptzutaten enthält, durchaus hierarchisch organisiert werden kann. 
(z. B. könnten Tomaten ein Unterbegriff von Gemüse sein und unter dem Begriff Tomaten wiederum könnte man grüne Tomaten und rote Tomaten auflisten).

Taxonomiebegriffe werden normalerweise als Referenzfelder an andere Inhaltsentitäten angehängt.
So können diese von Ihnen zur Klassifizierung von Inhalten verwendet werden. Wenn Sie ein
Taxonomiereferenzfeld anlegen, können Sie Benutzer die Begriffe auf zwei Arten eingeben lassen:

- **Freies Tagging:** Neue Begriffe können direkt auf dem Bearbeitungsformular eines Inhalts, der gerade erstellt wird, angelegt werden.
- **Liste vordefinierter Begriffe:** Die Liste der Begriffe wird außerhalb des Formulars zur Bearbeitung von Inhalten zusammengestellt und verwaltet. Benutzer können, bei Verwendung dieser Art des Taggens von Inhatlen, Begriffe nur aus der Liste vordefinierter Begriffe auswählen, die hierfür festgelegt wrude.

Taxonomiereferenzfelder können zu jeder Entität, wie z. B. Benutzerkonten,
benutzerdefinierten Blöcken oder regulären Inhalten, hinzugefügt werden. Wenn Sie Taxonomiebegriffe zur Klassifizierung der Inhalte ihrer Website verwenden, wird für jeden angelegten Taxonomiebegriff automatisch auch eine Listenseite erstellt. Eine solche Taxonomiebegriffsseite listet alle Elemente auf, die mit dem jeweiligen Begriff klassifiziert worden sind. Wenn Sie zum Beispiel
mehrere Rezepte angelegt haben, in denen Karotten als Zutat enhalten sind, sieht die Taxonomiebegriffs-Seite für das Schlagwort Karrotten vielleicht ähnlich aus wie unten abgebildet:

![Taxonomy listing page - Carrots](/images/structure-taxonomy_listingPage_carrots.png)
## Verwandte Themen

* [structure-taxonomy-setup](./structure-taxonomy-setup.md).
* Die Listenseiten sind Ansichten, die in [views-chapter](./index.md#views-chapter) behandelt werden.

*Mitwirkende*

Adaptiert und herausgegeben von [Surendra Mohan](https://www.drupal.org/u/surendramohan),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
und [Jojy Alphonso](https://www.drupal.org/u/jojyja) bei
[Red Crackle](http://redcrackle.com) aus
["Inhalte mit Taxonomien organisieren"](https://www.drupal.org/docs/7/organizing-content-with-taxonomies/organizing-content-with-taxonomy)
und ["Über Taxonomien"](https://www.drupal.org/node/774892),
copyright 2000 - 2026 von den einzelnen Mitwirkenden an der
[Dokumentation der Drupal-Community](https://www.drupal.org/documentation).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
