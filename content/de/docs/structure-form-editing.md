---
title: "Bearbeitungsformulare für Inhalte verändern"
description: "So bearbeiten Sie Inhalte mittels Bearbeitungsformular."
id: "structure-form-editing"
translation_key: "structure-form-editing"
source_locale: "de"
---
## Zielsetzung { #structure-form-editing }

Passen Sie das Bearbeitungsformular für Rezepte an, indem Sie ein anderes Steuerelement für die Eingabe von Begriffen über das Feld
Zutaten auswählen.
## Erforderliche Vorkenntnisse

* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [structure-widgets](./structure-widgets.md)
## Anforderungen an die Website

Der Inhaltstyp Rezept muss vorhanden sein, und er muss ein Taxonnomiebegriff-Referenzfeld für Zutaten enthalten.
Siehe [structure-content-type](./structure-content-type.md) und
[structure-taxonomy-setup](./structure-taxonomy-setup.md).
## Arbeitsschritte

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Inhalt_ > _Inhalt hinzufügen_ >
    _Rezept_ (_node/add/recipe_) um das Formular zum Bearbeiten von Inhalten und desssen Standardkonfiguration zu betrachten. 
    Beachten Sie, dass Sie die Zutaten einzeln eingeben müssen, und diese nicht als Liste eingegeben werden können.
1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Inhaltstypen_
    (_admin/structure/types_). Klicken Sie dann auf der Seite _Formularanzeige verwalten_ auf den
    Drop-Button des Inhaltstyps Rezept. Die Seite _Formularanzeige_ verwalten
    erscheint.
1. Wählen Sie für das Feld Zutaten die Option _Autovervollständigen (Tags-Style)_ in der Spalte _Steuerelement_.
    <img src="/images/structure-form-editing-manage-form.png" alt="Manage the Recipe form" width="100%" />
1. Klicken Sie auf _Speichern_.
1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Inhalt_ > _Inhalt hinzufügen_ >
    Rezept (_node/add/recipe_) um das veränderte Verhalten des zum Inhaltstyp gehörigen Bearbeitungsformulars zu überprüfen. 
    Das Feld „Zutaten" ist jetzt ein einzelnes Textfeld, das mehrere
    Werte akzeptiert.
    <img src="/images/structure-form-editing-add-recipe.png" alt="Add a recipe" width="100%" />
1. Legen Sie zwei Inhalte vom Typ Rezept an (siehe [content-create](./content-create.md)), wie zum Beispiel Rezepte für
    „Grüner Salat" und „Frische Karotten". Stellen Sie sicher, dass alle Felder Werte enthalten. Einschließlich der Felder 'Bild', 'Zutaten' und 
    'Eingereicht von' (Vergeben Sie für dieses Feld den Wert eines Lieferanten, den Sie in [structure-fields](./structure-fields.md)) angelegt haben.

## Vertiefen sie Ihr Wissen

Ändern Sie das Seitenweite Kontaktformular, indem Sie im Menü _Verwalten_ zum Menüpunkt
_Struktur_ > _Kontaktformulare_ navigieren. Zum Beispiel möchten Sie vielleicht die Felder
_Eine Kopie an mich Senden_ oder Felder für die  _Eingabesprache_ des Formulars hinzufügen.
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CELMGX93fjE" title="Kontaktformulare bearbeiten (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben von [Boris Doesborg](https://www.drupal.org/u/batigolix).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
