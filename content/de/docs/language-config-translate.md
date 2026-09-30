---
title: "Konfigurationswerte übersetzen"
description: "Feldbezeichnungen in einer Ansicht und in anderen Konfigurationen übersetzen."
id: "language-config-translate"
translation_key: "language-config-translate"
source_locale: "de"
---
## Zielsetzung { #language-config-translate }

Übersetzen Sie die Feldbezeichnungen der Ansicht Rezepte in die Sprache Spanisch.
## Erforderliche Vorkenntnisse

* [language-concept](./language-concept.md)
* [views-create](./views-create.md)
## Anforderungen an die Website

* Das Modul Configuration Translation, das mit dem Kernsystem ausgeliefert wird,
  muss installiert sein und auf ihrer Website müssen mindestens zwei Sprachen
  installiert sein.
  Siehe: [language-add](./language-add.md).
* Die Ansicht Rezepte muss installiert sein. Siehe: [views-create](./views-create.md) und
  [views-duplicate](./views-duplicate.md).
## Arbeitsschritte

Die grundlegenden Arbeitsschritte, um irgendeine Konfiguration auf Ihrer Website
zu übersetzen sind folgende:

1. Machen Sie die Seite ausfindig, auf der sich die Konfiguration,
      in der Standardsprache der Website
      befindet, die Sie übersetzen oder bearbeiten möchten.
      Wenn Sie beispielsweise den Namen Ihrer Webseite übersetzen möchten,
      müssen Sie die Seite aufrufen, auf der Sie den Namen der Website in der
      Standardsprache bearbeiten können.
      Siehe: [config-basic](./config-basic.md)).
1. Suchen Sie nach einem  Link, einer Registerkarte oder einem Button auf der
      Seite, mit der Aufschrift „Übersetzen" oder einer ähnlichen Aufschrift.
      Klicken Sie auf diesen Link, die Registerkarte oder den Button.
1. Suchen Sie nach einem Button, der es Ihnen erlaubt eine Übersetzung in der
      gewünschten Sprache hinzuzufügen und klicken Sie darauf.
1. Tragen Sie die Übersetzung in das Formular ein und klicken Sie auf _Speichern_.

    Die meisten Konfigurationswerte sind selbsterklärend und können auf diese Art
    und Weise daher sehr einfach bearbeitet werden. Die Konfiguration von Ansichten
    stellt hierbei eine Ausnahme dar, weil die Übersetzung der Konfiguration direkt
    auf dem Bearbeitungsformular der Ansicht und nicht über ein gesondertes Formular
    stattfindet. Besonders ist die Bearbeitung von Ansichten und deren Konfiguration
    auch deshalb, weil das  Formular zur Bearbeitung von Ansichten sehr komplex und
    hierarchisch aufgebaut ist und es sich hierbei nicht um ein Formular handelt,
    dass lediglich ein paar Felder enthält.
    Als Beispiel für das Übersetzen einer Ansicht finden Sie im Folgenden die
    Arbeitsschritte, um die Feldbezeichnungen in der Ansicht Rezepte auf Spanisch
    zu übersetzen:

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Ansichten_
    (_admin/structure/views_).
1. Suchen Sie die Ansicht _Rezepte_ und wählen Sie _Übersetzen_ aus dem
    Drop-Down-Button in der Zeile der Ansicht aus.
1. Klicken Sie in der Zeile _Spanisch_ auf _Hinzufügen_.
    Die Seite _Übersetzungen für Spanisch, für die Ansicht Rezepte hinzufügen_ erscheint.
1. Unter _Anzeigen_ > _Master Anzeigeeinstellungen_ > _Rezepte Standardanzeigeeinstellungen_,
    übersetzen Sie den _Anzeigetitel_ von "Rezepte" in "Recetas".
1. Unter _Anzeigen_ > _Master Anzeigeeinstellungen_ > _Rezepte Standardanzeigeeinstellungen_ > _Hervorgehobenes Formular_ > _Optionen zurücksetzen_, Übersetzen Sie den _Text des Buttons „Absenden“_
    von "Apply" auf "Applicar". Die Anderen Buttons oder Bezeichnungen tauchen auf der Seite Rezepte oder im zur Seite gehörenden Block nicht auf und müssen deshalb nicht übersetzt werden.
    <img src="/images/language-config-translate-recipes-view.png" alt="Translate the Recipes view" width="100%" />
1. Unter _Anzeigen_ > _Master Anzeigeeinstellungen_ > _Rezepte Standardanzeigeeinstellungen_ > _Filter_ > _(Leer) Taxonomy-Begriffs-ID_ > _Rezepte finden
    verwenden... Hervorheben_, übersetzen Sie die _Beschriftung_ von "Rezepte nach Zutaten finden..." nach "Encontrar
    recetas usando...".
1. Klicken Sie auf _Übersetzung Speichern_.
1. Wechseln Sie auf die Seite Rezepte und verwenden Sie den Sprachauswahlblock,
      um die  Sprache der Seite auf Spanisch umzuschalten. Überprüfen Sie, ob die
      Bezeichnungen ins Spanische übersetzt wurden.

## Vertiefen Sie ihr Wissen

* Übersetzen Sie den Titel der Blockanzeige zuletzt hinzugefügte Rezepte in der Ansicht in Rezepte.
* Übersetzen Sie den Titel der Seite in der Ansicht Lieferanten.
* Übersetzen Sie weitere Konfigurationswerte. Hier sind ein paar Beispiele dazu, wo sie die jeweiligen Übersetzungsseiten finden:

** Um den Namen der Website zu übersetzen, navigieren sie im Menü _Verwalten_ zum Menüpunkt
_Konfiguration_ > _System_ > _Grundlegende Einstllungen der Website > _Systeminformationen übersetzen_ (_admin/config/system/site-information/translate_).

** Um das Kontaktformular zu übersetzen , navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Kontaktformulare_ (_admin/structure/contact_).
Klicken Sie im Drop-Button, in der Zeile Website-Feedback, in der Spalte Aktionen auf _Übersetzen_

** Um den Namen eines Menüs zu übersetzen, navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Menüs_ (_admin/structure/menu_).
Klicken Sie im Drop-Button für das Menü, dessen Namen Sie übersetzen möchten
auf _Übersetzen_.

** Menüeinträge innerhalb eines Menüs werden als Inhalt behandelt (nicht als Konfiguration);
Siehe: [language-content-config](./language-content-config.md) um deren Übersetzung zu aktivieren. Sobald
die Übersetzung einmal aktiviert wurde, navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Struktur_ > _Menüs_
(_admin/structure/menu_). Klicken Sie im Drop-Button des Menüs, dessen Links Sie
übersetzen möchten auf _Menü bearbeiten_.
Klicken Sie im Drop-Button, des Links, den Sie bearbeiten möchten, auf _Übersetzen_.

** Um Feldbezeichnungen in einem Inhaltstyp zu übersetzen, navigieren Sie im Menü _Verwalten_
zum Menüpunkt _Struktur_ > _Inhaltstypen_
(_admin/structure/types_). Klicken Sie im Drop-Button des Inhaltstyps dessen
Feldbezeichnungen Sie bearbeiten möchten, auf _Felder verwalten_.
Klicken Sie im Drop-Button, des Feldes, dessen Beschriftung Sie übersetzen möchten auf _Übersetzen_.

* Inhalte übersetzen. Siehe:
 [language-content-translate](./language-content-translate.md).
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/j2GZdJIOo_I" title="Konfiguration übersetzen (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben und bearbeitet von [Boris Doesborg](https://www.drupal.org/u/batigolix) und
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
