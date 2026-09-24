---
title: "Hinzufügen einer Blockanzeige zu einer Ansicht"
description: "So fügen Sie einer Ansicht eine Blockanzeige hinzu."
id: "views-block"
translation_key: "views-block"
source_locale: "de"
---
## Zielsetzung { #views-block }

Hinzufügen einer Blockanzeige in einer Seitenleiste zur Ansicht „Rezepte", um die neuesten Rezepte anzuzeigen. 
Ändern Sie die Konfiguration der neuen Anzeige, ohne die bestehende Ansicht der Seite Rezepte zu verändern.
## Erforderliche Vorkenntnisse

* [views-concept](./views-concept.md)
* [views-parts](./views-parts.md)
* [views-create](./views-create.md)
## Anforderungen an die Website

* Der Inhaltstyp Rezept muss vorhanden sein, er muss ein Feld Hauptbild enthalten, und Ihre
Website muss einige Inhalte vom Typ Rezept enthalten. Siehe [structure-content-type](./structure-content-type.md),
[structure-fields](./structure-fields.md), [structure-form-editing](./structure-form-editing.md), und [content-create](./content-create.md).
* Der Bildstil _Thumbnail (100x100)_ muss definiert sein. Dieser wird erstellt, wenn Sie das Image-Modul, das mit dem Kernsystem ausgeliefert wird, installieren (Das Installationsprofil Standard erledigt diesen Schritt für Sie automatisch.). Er kann neu erstellt werden, falls er gelöscht wurde. Siehe [structure-image-style-create](./structure-image-style-create.md).
* Die Ansicht Rezepte muss vorhanden sein. Siehe [views-create](./views-create.md) und [views-duplicate](./views-duplicate.md).
## Arbeitsschritte

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Ansichten_
    (_admin/structure/views_). Suchen Sie die Ansicht „Rezepte" und klicken Sie im entsprechenden Dropbutton auf _Bearbeiten_. Alternativ können Sie zur Seite Rezepte auf der Hauptseite navigieren und dort auf den kontextlink _Ansicht bearbeiten_ im Hauptbereich der
    Seite klicken. (Siehe [config-overview](./config-overview.md) für Informationen über kontextbezogene Links.)
1. Erstellen Sie eine neue Blockanzeige, indem Sie unter _Anzeigen_ auf _Hinzufügen_ klicken. Klicken Sie  in der Liste der Anzeigen, die Sie hinzufügen können auf
    _Block_. Die neue Anzeige wird erstellt, und die Konfigurationsoptionen für die neue Anzeige werden automatisch angezeigt.
    ![Add block display](/images/views-block_add-block.webp)
1. Um den Titel dieser Anzeige zu ändern, klicken Sie im Abschnitt Anzeigename auf _Block_.
1. Das Pop-Up _Block: Der Name und die Beschreibung dieser Anzeige_
    erscheint. Ändern Sie den _administrativen Namen_ in "Neueste Rezepte". Klicken Sie auf _Anwenden_.
1. Um den Titel des Blocks zu ändern, klicken Sie im Abschnitt _Titel_ auf "Rezepte".
1. Im Popup _Titel_ wählen Sie in der Auswahlliste _Für_ _Den Ansichtstyp Block (übersteuern)_ und klicken anschlißend auf Anwenden.
    ![Title only for this block](/images/views-block_title.webp)
1. Um den Stil des Blocks zu ändern, klicken Sie im Abschnitt Format auf _Raster_ . Wählen Sie in dem erscheinenden Popup-Fenster in der Auswahlliste _Für_ _Den Ansichtstyp Block (übersteuern)_ aus.
1. Wählen Sie _Unformatierte Liste_ und klicken Sie auf _Anwenden (diese
    Anzeige)_. Sie können die Dartellungsoptionen im nächsten Popup-Fenster weiter konfigurieren und anschließend auf _Anwendnen_ klicken.
1. Um das Bildfeld zu konfigurieren, klicken Sie im Abschnitt _Felder_ auf _Inhalt: Hauptbild_.
    Wählen Sie im angezeigten Popup-Fenster ind der Auswahlliste _Für_ die Option _Den Ansichtstyp Block (übersteuern)_ aus. Wählen Sie den _Bildstil Miniaturansicht (100x100)_. 
1. Klicken Sie _Anwenden (diese Anzeige)_.

    <img src="/images/views-block_image.webp" alt="Image to thumbnail" width="100%" />

1. Um Zutaten als Filter zu entfernen, klicken Sie im Abschnitt _Filterkriterien_ auf _Inhalt: Zutaten. Wählen Sie in dem angezeigten Popup-Fenster in der Auswahlliste _Für_ _Den Ansichtstyp Block (übersteuern)_ aus.

    .Klicken Sie unten auf _Entfernen_.

1. Um zu konfigurieren, wie der Inhalt in der Ansicht sortiert werden soll, klicken Sie auf _Hinzufügen_.
    im Drobutton im Abschnitt _Sortierkriterien_. Im angezeigten Popup-Fenster wählen Sie in der Auswahlliste _Für_ _Den Ansichtstyp Block (übersteuern)_ aus.

    .Klicken Sie auf _Geschrieben am_ (in der Kategorie _Inhalt_), und klicken Sie dann auf _Annwenden_.

1. Wählen Sie in dem erscheinenden Konfigurations-Popup  im Abschnitt Reihenfolge _Absteigend sortieren_, sodass die
    neuesten Rezepte zuerst angezeigt werden. Klicken Sie auf _Anwenden_.
1. Um die Anzahl der anzuzeigenden Elemente festzulegen, klicken Sie im Abschnitt _Seitennavigation_ auf _Mini_. Wählen Sie in dem erscheinenden Popup-Fenster in der Auswahlliste _Für_ _Den Ansichtstyp Block (übersteuern)_ aus. Wählen Sie im Popup _Pagionierung auswählen_ die Option _Angegebene Anzahl von Elementen Anzeigen_aus.
    Klicken Sie auf _Anwenden (diese Anzeige)_. Im Popup _Optionen der Seitennavigatrion_ geben Sie "5" als Wert für _Anzahl anzuzeigender Eintäge_ ein. Klicken Sie auf _Anwenden_.
1. Klicken Sie auf _Speichern_. Sie sehen entweder wieder die Ansichtsbearbeitungsseite oder die Rezepte
    Seite, je nachdem, was Sie in Schritt 1 getan haben. Sie sollten auch eine Meldung sehen, die besagt
    dass die Ansicht gespeichert wurde.
    <img src="/images/views-block_recipes.webp" alt="Summary page after configuration" width="100%" />
1. Platzieren Sie den Block "Rezepte": "Neueste Rezepte" in der _zweiten Seitenleiste_. Siehe
    [block-place](./block-place.md). Navigieren Sie zur Startseite der Website, um den Block zu sehen.
    <img src="/images/views-block_sidebar.webp" alt="New Recipes block on homepage" width="100%" />

## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/xrnuekARwYc" title="Hinzufügen einer Blockanzeige zu einer Ansicht" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben und herausgegeben von [Laura Vass](https://www.drupal.org/u/lolk) unter
[Pronovix](https://pronovix.com/),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon), und
[Jojy Alphonso](https://www.drupal.org/u/jojyja) unter
[Rotes Knistern](http://redcrackle.com).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
