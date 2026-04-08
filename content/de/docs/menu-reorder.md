---
title: "Ändern der Anordnung von Menüpunkten"
description: "Menüpunkte anordnen."
id: "menu-reorder"
translation_key: "menu-reorder"
source_locale: "de"
---
## Zielsetzung { #menu-reorder }

Ordnen Sie die Einträge in einem Menü neu an.
## Erforderliche Vorkenntnisse

* [menu-concept](./menu-concept.md)
* [menu-link-from-content](./menu-link-from-content.md)
## Anforderungen an die Website

Die Seiten _Startseite_ und _Über den Wochenmarkt_ müssen im Hauptnavigationsmenü vorhanden sein.
Siehe: [menu-link-from-content](./menu-link-from-content.md).
## Arbeitsschritte

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Menüs_
    (_admin/structure/menu_). hier werden alle Menüs der Website aufgelistet.
    Klicken Sie, in der Zeile _Hauptnavigation (Main Navigation)_ im Drop-Button Aktionen auf
    _Menü Bearbeiten_. Auch diese Seite ist mittels Kontextlinks erreichbar
     (siehe [config-overview](./config-overview.md)). Beachten Sie, dass die Namen und
    Beschreibungen der Menüs, die vom
    Installationsprofil angelegt wurden auf dieser Seite auf Englisch
    angezeigt werden. Siehe: [language-concept](./language-concept.md) für weitere Informationen.
    <img src="/images/menu-reorder_menu_titles.png" alt="List of menus on the site with 'Main navigation' highlighted" width="100%" />
1. Die Seite _Menü bearbeiten_ zeigt eine Liste aller Einträge im  von Ihnen
    ausgewählten Menü (_Hauptnavigation_) an .
    ![List of menus items under _Main navigation_](/images/menu-reorder_edit_menu.png)
1. Verwenden Sie das Drag-and-Drop-Handle (es sieht aus wie zwei gekreutzte Doppelpfeile),
      um die Reihenfolge der Menüeinträge innerhalb des Menüs zu verschieben:
      Ziehen Sie das Menü mit der Startseite _Home_ an die erste Stelle, und legen Sie als nächsten
      Eintrag die Seite _Über_ fest. Als Alternative zur Verwendung des Drag-Handles
      können Sie auf den Link _Zeilenreihenfolge_ oben in der Tabelle klicken
      und die numerische Gewichtung der Menüpunkte festlegen (Menüpunkte mit niedrigerer oder
      negativerer Gewichtung werden weiter oben / weiter links angezeigt).
    ![Reordered menu items with warning message about unsaved changes and the _Save_ button](/images/menu-reorder_reorder.png)
1. Klicken Sie auf _Speichern_.
1. Die Startseite zeigt nun die Hauptnavigation mit dem Menüpunkt Startseite
    (Home) an erster Stelle an.
    ![Reordered menu items on the home page with 'Home' first and then 'About'](/images/menu-reorder_final_order.png)

## Vertiefen Sie Ihr Wissen

Fügen Sie einen Menüpunkt namens _Kontakt_, der auf die Seite _/contact_
verweist, zu Ihrem Hauptnavigationsmenü hinzu. Die Seite Kontakt wird durch das
mit dem Kernsystem ausgelieferte Modul Contact bereitgestellt.
Es kann sein, dass Sie das Layout und die auf dem Kontaktformular verfügbaren
Felder bearbeiten möchten (siehe: [structure-form-editing](./structure-form-editing.md)).
## Verwandte Konzepte

[menu-concept](./menu-concept.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/OtT8e8lLx5E" title="Die Reihenfolge von Menüeinträgen ändern (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben von [Ann Greazel](https://www.drupal.org/u/AnnGreazel).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
