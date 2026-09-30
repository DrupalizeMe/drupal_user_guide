---
title: "Glossar"
description: "Glossar"
id: "glossary"
translation_key: "glossary"
source_locale: "de"
---
[](){ #glossary }

## Ajax { #glossary-ajax }

Eine Web-Technologie, die zum Datenaustausch mit einem Server verwendet wird, um dynamisch Teile einer Webseite (zum Beispiel Formulare) zu aktualisieren, ohne die gesamte  Website neu laden zu müssen.

## Alias { #glossary-alias }

Ein benutzerfreundlicher Name, der den internen [Pfad](./glossary.md#glossary-path) ersetzt, den das System einer URL auf der Website zuweist. Sie könnten zum Beispiel den Alias _/über für die Seite „Über uns“ auf Ihrer Website vergeben, um den internen Pfad _/node/5_ hinter dem Alias zu verstecken. Dadurch würde die Seite über die URL _http://example.com/über_ erreichbar werden und nicht über den internen Pfad _http://example.com/node/5_. Siehe [content-paths](./content-paths.md) für weitere Informationen.

## Gast { #glossary-anonymous }

Ein [Benutzer](./glossary.md#glossary-user), der mit der Website interagiert und nicht angemeldet ist. Siehe [user-concept](./user-concept.md) für weitere Informationen.

## Block { #glossary-block }

Ein Stück [Inhalt](./glossary.md#glossary-content) (Text, Bild, Link, usw.) das auf einer Seite angezeigt werden kann, die Teil einer Website ist. Blöcke werden in [Regionen](./glossary.md#glossary-region) angezeigt. Siehe: [block-concept](./block-concept.md) für weitere Informationen.

## Breakpoint { #glossary-breakpoint }

Breakpoints werden verwendet, um die Höhe oder Breite von Browsern, Bildschirmen, Druckern und weiteren Medienausgabetypen in Bereiche zu unterteilen. Eine [responsive](./glossary.md#glossary-responsive) Seite passt ihre Präsentation anhand dieser Breakpoints an. Siehe: [structure-image-responsive](./structure-image-responsive.md) für weitere Informationen.

## Subtyp { #glossary-bundle }

Synonym für [Entität oder Entitätssubtyp](./glossary.md#glossary-entity-subtype).

## Cache/Zwischenspeicher { #glossary-cache }

Der interne Cache der Website, der auch Zwischenspeicher genannt wird, speichert die Ausgabe zeitaufwändiger Berechnungen, wie z.B. die Berechnung der Ausgabe für eine HTML-Seitenanfrage, und gibt das Ergebnis dieser Berechnung direkt aus, anstatt die Berechnung bei jedem Seitenaufruf neu durchzuführen. Externe Caching-Systeme können auch auf dem Webserver verwendet werden, um die Antwortzeit einer Website zu verkürzen. Siehe: [prevent-cache](./prevent-cache.md) für weitere Informationen über den internen Cache.

## CMS { #glossary-cms }

Akronym für [Content Management System](./glossary.md#glossary-content-management-system).

## Konfiguration { #glossary-configuration }

Informationen über Ihre Website, die keine [Inhalte](./glossary.md#glossary-content) sind, und die dauerhafter sein sollen als ein [Status](./glossary.md#glossary-state). Informationen, wie zum Beispiel der Name Ihrer Website, eines [Inhaltstyps](./glossary.md#glossary-content-type) oder [Ansichten](./glossary.md#glossary-view), die Sie definiert haben, usw. Siehe [understanding-data](./understanding-data.md) für weitere Informationen.

## Inhalt { #glossary-content }

Informationen, die auf Ihrer Website angezeigt werden sollen, z. B. Texte, Bilder, Downloads, usw. Siehe auch: [Konfiguration](./glossary.md#glossary-configuration) und [Status](./glossary.md#glossary-state). Siehe: [understanding-data](./understanding-data.md) für weitere Informationen.

## Hauptinhalt { #glossary-content-item }

Ein [Inhalt](./glossary.md#glossary-content), der normalerweise als Haupbestandteil einer Bestimmten Seite innerhalb einer Website angezeigt wird. Dies ist ein [Entitätstyp](./glossary.md#glossary-entity-type). Siehe [planning-data-types](./planning-data-types.md) für weitere Informationen.

## Content Management System (CMS) { #glossary-content-management-system }

Eine Sammlung von Tools, die das Erstellen,das Bearbeiten, die Organisation, die Suche, den Abruf und  das Löschen von Informationen auf einer Website vereinfacht. Siehe: [understanding-drupal](./understanding-drupal.md) für weitere Informationen.

## Inhaltstyp { #glossary-content-type }

Eine [Entität oder ein Entitätssubtyp](./glossary.md#glossary-entity-subtype) eines [Inhalts](./glossary.md#glossary-content-item). Inhaltstypen sind [Entitätstypen](./glossary.md#glossary-entity-type). Jeder Inhaltstyp wird für einen bestimmten Zweck auf der Website verwendet und hat seine eigenen Felder. Zum Beispiel könnte eine Website für einen Wochenmarkt über einen Inhaltstyp für statische Seiten und daneben einen weiteren Inhaltstyp enthalten, mit dem Lieferantenlisten erzeugt werden können. Siehe [planning-data-types](./planning-data-types.md) für weitere Informationen.

## Kontextlink { #glossary-contextual-link }

Ein Link zu einer bestimmten Seite im Verwaltungsbereich auf der  Inhalte oder Einstellungen bearbeitet werden könnnen. Dabei sthet der Link immer im Kontext mit dem jeweiligen Element auf einer Website. Beispiel: Ein Link zur Konfiguration eines [Menüs](./glossary.md#glossary-menu), der angezeigt wird, wenn Sie mit dem Mauszeiger über das entsprechende Menü fahren. Siehe [config-overview](./config-overview.md) für weitere Informationen.

## Von der Community bereitgestellt { #glossary-contributed }

[Module](./glossary.md#glossary-module), [Themes](./glossary.md#glossary-theme) und [Distributionen](./glossary.md#glossary-distribution) die nicht im [Drupal Kernsystem](./glossary.md#glossary-drupal-core) enthalten sind und seperat von der Website [_Drupal.org_](https://www.drupal.org) heruntergeladen werden könnnen.

## Cron { #glossary-cron }

Auf einigen Betriebssystemen ist _Cron_ eine Anwendung zur Planung von Aufgaben, die Befehle oder Skripte in regelmäßigen Abständen ausführt. Ihre Website definiert periodische Aufgaben, auch Cron-Wartungsaufgaben genannt, die entweder durch einen Aufgabenplaner des Betriebssystems oder intern ausgelöst werden müssen. Siehe [security-cron-concept](./security-cron-concept.md) für weitere Informationen.

## Distribution { #glossary-distribution }

Ein einzelner Download, der eine schnelle Lösung für die Einrichtung einer Website enthält, die einen spezifischen Anwendungsfall abdeckt. Beispiele sind: Eine Website für einen Verein oder für den Onlinehandel. Eine Distribution enthält das [Drupal-Kernsystem](./glossary.md#glossary-drupal-core) und [von der Community bereitgestellte](./glossary.md#glossary-contributed) [Module](./glossary.md#glossary-module) sowie [Themes](./glossary.md#glossary-theme). Viele Distributionen konfigurieren die Website auch vorkonfiguriert oder erstellen sogar Beispielinhalte während der Installation. Siehe [understanding-distributions](./understanding-distributions.md) für weitere Informationen.

## Drupal-Kernsystem { #glossary-drupal-core }

Die Dateien, Themes, Profile und Module, die im Lieferumfang von Drupal enthalten sind und anschließend durch Module und Themes erweitert werden können, die von der Community bereitgestellt werden. Siehe: [understanding-drupal](./understanding-drupal.md) für weitere Informationen.

## Entität { #glossary-entity }

Ein Element, das entweder  dem Typ [Inhalt](./glossary.md#glossary-content) oder [Konfiguration](./glossary.md#glossary-configuration) entsprechen kann. Der Begriff  wird im allgemeinen bestimmte Arten von Inhalten auf einer Website verwendet. Beispiele sind: [Inhalte](./glossary.md#glossary-content-item),benutzerdefinierte [Blöcke](./glossary.md#glossary-block), [Taxonomiebegriffe](./glossary.md#glossary-taxonomy-term), und [Inhaltstypen](./glossary.md#glossary-content-type); die ersten drei genannten Elemente sind Inhaltsentitäten,und das zuletzt genannte Element ist eine Konfiguration. Siehe auch: [Entitätstyp](./glossary.md#glossary-entity-type), [Entitätssubtyp](./glossary.md#glossary-entity-subtype), und [Feld](./glossary.md#glossary-field). Siehe: [planning-data-types](./planning-data-types.md) für weitere Informationen.

## Entitätssubtyp { #glossary-entity-subtype }

Eine Gruppe von Entitäten innerhalb eines [Inhalts](./glossary.md#glossary-content) bzw, eines [Entitätstyps](./glossary.md#glossary-entity-type), die sich die selben [Felder](./glossary.md#glossary-field) teilen. Beispielsweise wird im Eintrag über [Inhalt](./glossary.md#glossary-content-item) beschrieben, dass die auf der Wochenmarkt-Website verwendeten Entitätstypen Entitätssubtypen des Entitätstyps [Inhalt](./glossary.md#glossary-content-type)) sind. Ein Subtyp wird auf der Website für statische Seiten verwendet, während ein anderer Subtyp dazu verwendet wird, Informationen über Lieferanten zu erfassen und auf der Website darzustellen. Jeder Subtyp enthält dabei seine eigenen Felder. Auch der Begriff _Bündel_ wird als Bezeichnung solcher Elemente verwendet (besonders in Dokumentationen für Entwickler, wo meist das englische Wort Bundle verwendet wird). Siehe: [planning-data-types](./planning-data-types.md) für weitere Informationen.

## Entitätstyp { #glossary-entity-type }

Der allgemeine Typ einer [Entität](./glossary.md#glossary-entity); im allgemeinen Sprachgebrauch wird oft nur von [Inhalt](./glossary.md#glossary-content) gesprochen. Beispiele für Inhalte sind: [Inhaltstypen](./glossary.md#glossary-content-type), [Taxonomiebegriffe](./glossary.md#glossary-taxonomy-term) und benutzerdefinierte [Blöcke](./glossary.md#glossary-block). Siehe: [planning-data-types](./planning-data-types.md) für weitere Informationen.

## Feld { #glossary-field }

Eine bestimmte Art Daten, die an Elemente wie [Inhalte](./glossary.md#glossary-content) und [Entitäten](./glossary.md#glossary-entity) angehängt wird. Zum Beispiel könnten Sie auf der Website des Wochenmarktes Felder für ein Bild, die Beschreibung eines Lieferanten und einen [Taxonomiebegriff](./glossary.md#glossary-taxonomy-term) anlegen. Siehe [planning-data-types](./planning-data-types.md) für weitere Informationen.

## Bündel { #glossary-field-bundle }

Synonym für [Entitätssubtyp](./glossary.md#glossary-entity-subtype).

## Anzeigeformat eines Feldes { #glossary-field-formatter }

Eine [Konfiguration](./glossary.md#glossary-configuration) die festlegt, wie ein [Feld](./glossary.md#glossary-field) angezeigt wird. Zum Beispiel könnte ein Textfeld mit einem Präfix und/oder Suffix angezeigt werden, und die darin zulässigen HTML-Tags können eingeschränkt werden. Siehe auch: [Anzeigemodus](./glossary.md#glossary-view-mode) und [Steuerelement](./glossary.md#glossary-field-widget). Siehe: [structure-view-modes](./structure-view-modes.md) für weitere Informationen.

## Feldsteuerelement { #glossary-field-widget }

Eine [Konfiguration](./glossary.md#glossary-configuration) die festlegt, auf welche Weise jemand Daten in ein [Feld](./glossary.md#glossary-field) eingeben oder die darin vorhandenen Daten über ein Bearbeitungsformular bearbeiten kann. Beispielsweise könnte ein Textfeld eine einzeilige Eingabemaske oder eine mehrzeilige Eingabemaske verwenden und es kann eine Einstellung für die Größe des Eingabefelds enthalten sein. Siehe auch: [Feldsteuerelement](./glossary.md#glossary-field-formatter). Siehe: [structure-widgets](./structure-widgets.md) für weitere Informationen.

## Anzeigeformat { #glossary-formatter }

Siehe: [Anzeigeformat eines Feldes](./glossary.md#glossary-field-formatter).

## FOSS { #glossary-foss }

Akronym für _Freie und Quelloffene Software_, d.h. Software, die von einer Gemeinschaft verschiedener Menschen entwickelt und unter einer nicht-kommerziellen Lizenz veröffentlicht wird. Siehe auch: [GPL](./glossary.md#glossary-gpl). Siehe: [understanding-project](./understanding-project.md) für weitere Informationen.

## GPL { #glossary-gpl }

Akronym für die _GNU General Public License_, eine nicht-kommerzielle Software Lizenz. Software, die Sie von der Webseite [_Drupal.org_](https://www.drupal.org) herunterladen können, ist unter der ["GNU General Public License, Version 2"](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html) lizensiert. Siehe auch: [FOSS](./glossary.md#glossary-foss). Siehe: [understanding-gpl](./understanding-gpl.md) für weitere Informationen.

## Bildstil { #glossary-image-style }

Eine Reihe von Verarbeitungsschritten, die ein Originalbild in ein neues Bild umwandeln. Die typische Verarbeitungsmethode beinhaltet die Arbeitsschritte Skalieren und Zuschneiden. Siehe: [structure-image-styles](./structure-image-styles.md) für weitere Informationen.

## LAMP { #glossary-lamp }

Akronym für _Linux, Apache, MySQL, und PHP_: die Software auf dem Webserver auf dem die Skripte üblicherweise ausgeführt werden (obwohl auch andere Betriebssysteme, Webserver und Datenbanken verwendet werden können). Siehe: [install-requirements](./install-requirements.md) für weitere Informationen.

## Protokoll { #glossary-log }

Eine Liste der aufgezeichneten Ereignisse auf der Website, wie Nutzungsdaten, Leistungsdaten, Fehler, Warnungen und Betriebsinformationen. Siehe [prevent-log](./prevent-log.md) für weitere Informationen.

## Menü { #glossary-menu }

Eine Sammlung von Links zur Navigation auf einer Website, die hierarchisch angeordnet sein können. Siehe: [menu-concept](./menu-concept.md) für weitere Informationen.

## Modul { #glossary-module }

Software (in der Regel PHP, JavaScript und/oder CSS), die die Funktionen der Website und Funktionalität hinzufügt. Drupal unterscheidet zwischen dem _[Kernsystem](./glossary.md#glossary-drupal-core)_ und _[von der Community bereitgestellten](./glossary.md#glossary-contributed)_ Zusatzmodulen. Siehe: [understanding-modules](./understanding-modules.md) für weitere Informationen.

## Pfad { #glossary-path }

Der eindeutige, letzte Teil der internen URL, den das System einer Seite zuweist. Dabei kann es sich um einen Teil der Website oder einen Teil des Verwaltungsbereichs von Drupal handeln. Die interne URL für die Seite „Über“ auf Ihrer Website könnte zum Beispiel _http://example.com/node/5_ lauten. in diesem Fall währe der Pfad der Seite _node/5_. Siehe auch: [Alias](./glossary.md#glossary-alias). Siehe: [content-paths](./content-paths.md) für weitere Informationen.

## Berechtigung { #glossary-permission }

Die Möglichkeit, eine bestimmte Aktion auf der Website durchzuführen, wie z.B. die Bearbeitung einer bestimmten Art von [Inhalt](./glossary.md#glossary-content), oder das Anzeigen von Benutzerprofilen. Siehe auch: [Rolle](./glossary.md#glossary-role). Siehe: [user-concept](./user-concept.md) für weitere Informationen.

## Referenzfeld { #glossary-reference-field }

Ein [Feld](./glossary.md#glossary-field) das eine Beziehung zwischen einer [Entität](./glossary.md#glossary-entity) und einer oder mehreren anderen Entitäten repräsentiert. Diese Entitäten können dabei vom selben [Entitätstyp](./glossary.md#glossary-entity-type) sein oder einen anderen Typ aufweisen. Beispielsweise kann ein Rezept auf der Website des Wochenmarktes ein Referenzfeld zum Artikel über den Lieferanten enthalten der das Rezept eingereicht hat. Der Eintrag des Lieferanten wurde in diesem Fall ebenfalls als Inhalt erzeugt. Felder mit [Taxonomiebegriff](./glossary.md#glossary-taxonomy-term) sind ebenfalls Referenzfelder. Siehe: [structure-reference-fields](./structure-reference-fields.md) für weitere Informationen.

## Region { #glossary-region }

Ein bestimmter Bereich auf einer Seite in dem [Inhalt](./glossary.md#glossary-content) wie eine Kopfzeile, eine Fußzeile, der Hauptiinhalt der Website, die linke Seitenleiste, usw. platziert werden kann. Regionen werden in [Themes](./glossary.md#glossary-theme) definiert, Inhalte, die sich in diesen Regionen befinden, werden mit Hilfe von [Blöcken](./glossary.md#glossary-block) dargestellt. Siehe: [block-regions](./block-regions.md) für weitere Informationen.

## Responsiv { #glossary-responsive }

Eine Website oder ein [Theme](./glossary.md#glossary-theme) wird als responsiv bezeichnet, wenn es sich an die Größe des Anzeigegeräts, des Druckers, oder an einen Anderen Medienausgabetyp anpassen kann. Siehe auch: [Breakpoint](./glossary.md#glossary-breakpoint). Siehe: [structure-image-responsive](./structure-image-responsive.md) für weitere Infromationen.

## Revision { #glossary-revision }

Eine Aufzeichnung über den vergangenen oder gegenwärtigen Zustand eines bestimmten [Inalts](./glossary.md#glossary-content) bzw. einer [Entität](./glossary.md#glossary-entity), im Verlauf der Bearbeitung. Siehe: [planning-workflow](./planning-workflow.md) für weitere Infromationen.

## Rolle { #glossary-role }

Eine genau bezeichnete Sammlung von [Berechtigungen](./glossary.md#glossary-permission) die einem [Benutzerkonto](./glossary.md#glossary-user) zugewiesen wird. Siehe: [user-concept](./user-concept.md) für weitere Informationen.

## Sicherheitsaktualisierung { #glossary-security-update }

Eine [Aktualisierung](./glossary.md#glossary-update) die einen sicherheitsrelevanten Fehler behebt, z.B. eine Sicherheitslücke. Siehe: [security-concept](./security-concept.md) für weitere Informationen.

## Status { #glossary-state }

Informationen vorübergehender Natur über den aktuellen Zustand Ihrer Website, wie z.B. die Zeit, zu der [Cron](./glossary.md#glossary-cron) zum letzten mal ausgeführt wurde, usw. Siehe auch: [Inhalt](./glossary.md#glossary-content) und [Konfiguration](./glossary.md#glossary-configuration).  Siehe: [understanding-data](./understanding-data.md) für weitere Informationen.

## Taxonomie { #glossary-taxonomy }

Der Prozess der Klassifizierung von [Inhalten](./glossary.md#glossary-content). Siehe [structure-taxonomy](./structure-taxonomy.md) für weitere Informationen.

## Taxonomiebegriff { #glossary-taxonomy-term }

Ein Begriff zur Klassifizierung von [Inhalten](./glossary.md#glossary-content), wie beisppielsweise ein Tag oder eine Kategorie. Siehe auch: [Vokabular](./glossary.md#glossary-vocabulary). Siehe: [structure-taxonomy](./structure-taxonomy.md) für weitere Informationen.

## Textformat { #glossary-text-format }

Eine [Konfiguration](./glossary.md#glossary-configuration) die festlegt, wie von Benutzern eingegebener Text verarbeitet wird, bevor dieser im Browser dargestellt wird. Dieser vorgang kann das Entfernen oder die Limitierung der HTML-Tags enthalten die verwendet werden können. Urls können über Textformate automatisch in Links umgewandelt werden. Siehe: [structure-text-formats](./structure-text-formats.md) für weitere Informationen.

## Theme { #glossary-theme }

Software und Asset-Dateien (Bilder, CSS, PHP-Code und/oder Vorlagen), die den Stil und das Layout der Website bestimmen. Das Projekt Drupal unterscheidet zwischen dem _[Kernsystem](./glossary.md#glossary-drupal-core)_ und _[von der Commuinty bereitgestellten](./glossary.md#glossary-contributed)_ Themes. Siehe: [understanding-themes](./understanding-themes.md) für weitere Informationen.

## UI { #glossary-ui }

Akronym für [_User Interface_](./glossary.md#glossary-user-interface).

## Aktualisierung { #glossary-update }

Eine neuere Version der Software für Ihre Website, entweder [Drupal-Kernsystem](./glossary.md#glossary-drupal-core) oder ein [Modul](./glossary.md#glossary-module) bzw. [Theme](./glossary.md#glossary-theme). Siehe auch: [Sicherheitsaktualisierung](./glossary.md#glossary-security-update). Siehe: [security-concept](./security-concept.md) für weitere Informationen.

## Benutzer { #glossary-user }

Eine Person, die mit der Website entweder als angemeldeter Benutzer oder als [Gast](./glossary.md#glossary-anonymous) interagiert. Siehe: [user-concept](./user-concept.md) für weitere Informationen.

## Benutzeroberfläche { #glossary-user-interface }

Der Text, die Stile und die Bilder, die auf einer Website sichtbar sind, logisch unterteilt in die Benutzeroberfläche, die für Besucher der Website zugänglich ist  und den Verwaltungsbereich, der nur mit entsprechender [Berechtigung](./glossary.md#glossary-permission) eingesehen werden kann.

## Der erste Benutzer (User 1) { #glossary-user-one }

Das  erste [Benutzer](./glossary.md#glossary-user)konto, welches bei der Installation der Website erstellt wird (und deshalb die Nummer 1 erhält). Es besitzt automatisch alle [Berechtigungen](./glossary.md#glossary-permission). Dies ist auch dann der Fall, wenn dem Benutzekonto keine administrative [Rolle](./glossary.md#glossary-role) zugewiesen wurde. Siehe: [user-admin-account](./user-admin-account.md) für weitere Informationen.

## Ansicht { #glossary-view }

Eine formatierte Liste von Daten. Typischerweise beziehen Ansichten die ihnen zugrundeligenden Daten aus [Inhalten](./glossary.md#glossary-content) bzw. [Entitäten](./glossary.md#glossary-entity). Auf der Website des Wochemarktes könnten Sie beispielsweise einen [Hauptinhalt](./glossary.md#glossary-content-item) für jeden Lieferanten erstellen. Anschließend könnten Sie eine Ansicht erstellen, die eine Liste generiert, die ein Miniaturbild und eine kurze Beschreibung jedes Lieferanten enthlt. Das Miniaturbild jedes Lieferanten könnte dann auf den vollständigen Artikel zum jewieligen Lieferanten verlinken. Mit denselben Daten könnten Sie auch eine Ansicht erstellen, die einen neuen Block generiert, der Informationen zu den zuletzt hinzugefügten Lieferanten anzeigt. Siehe: [planning-modular](./planning-modular.md) für weitere Informationen.

## Anzeigemodus { #glossary-view-mode }

Eine Sammlung von [Anzeigeformaten für Felder](./glossary.md#glossary-field-formatter) und von [Konfigurationen](./glossary.md#glossary-configuration) für alle [Felder](./glossary.md#glossary-field) innerhalb bestimmter [Inhalte](./glossary.md#glossary-content) und [Entitäten](./glossary.md#glossary-entity). Einige Felder können ausgeblendet sein. Jede [Entität bzw. jeder Subtyp](./glossary.md#glossary-entity-subtype) kann eine oder mehrere Definitionen für einen Ansichtsmodus enthalten. Beispielsweise enthalten [Inhaltstypen](./glossary.md#glossary-content-type) normalerweise den Ansichtsmodus _Vollständig_ und den Ansichtsmodus _Anrisstext_. Dabei enthält der Ansichtsmodus _Anrisstext_ weniger Felder als der Ansichtsmodus _Vollständig_. Siehe: [structure-view-modes](./structure-view-modes.md) für weitere Informationen.

## Vokabular { #glossary-vocabulary }

Eine Gruppe von [Taxonomiebegriffen](./glossary.md#glossary-taxonomy-term) aus denen  der Richtige Begriff gewählt werden kann wenn [Inhalte](./glossary.md#glossary-content) auf eine bestimmte Art und Weise klassifiziert werden sollen. Wie im Beispiel aller Lieferanten des Wochenmarktes. Technisch gesehen sind Vokabulare ein [Entitätssubtyp](./glossary.md#glossary-entity-subtype) des Entitätstyps Taxonomiebegriff. Siehe [structure-taxonomy](./structure-taxonomy.md) für weitere Informationen.

## Steuerelement { #glossary-widget }

Siehe: [Feldsteuerelement](./glossary.md#glossary-field-widget).

## Assistent { #glossary-wizard }

Ein Webformular, in das Sie einige Werte eingeben können und das dann etwas mit sinnvollen Voreinstellungen auf der Grundlage der von Ihnen gewählten Werte ausgibt. Zum Beispiel gibt es Assistenten für die Erstellung von [Ansichten](./glossary.md#glossary-view). Siehe [views-create](./views-create.md) für weitere Informationen.

## WYSIWYG { #glossary-wysiwyg }

Das Akronym für _What You See is What You Get_, beschreibt eine Bearbeitungsmethode für [content](./glossary.md#glossary-content) bei der die eingabe auf dem Bearbeitungsformular dem späteren Ergebnis sehr nahe kommt. Siehe: [structure-text-format-config](./structure-text-format-config.md) für weitere Informationen.
