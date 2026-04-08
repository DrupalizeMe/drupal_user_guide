---
title: "Konzept: Bildstile"
description: "Überblick über Bildstile und wie sie verwendet werden, um ein einzelnes Bild in mehrere Variationen anzuzeigen."
id: "structure-image-styles"
translation_key: "structure-image-styles"
source_locale: "de"
---
## Erforderliche Vorkenntnisse { #structure-image-styles }

[structure-fields](./structure-fields.md)
### Was sind Bildstile?

Mit Bildstilen können Sie ein einzelnes Bild hochladen, es aber auf verschiedene Arten anzeigen.
jede Darstellungsvariante, oder _Bildstil_, ist das Ergebnis der Anwendung eines oder mehrerer
_Effekte_ auf das Originalbild.

Sie können beispielsweise ein hochauflösendes Bild mit einem Seitenverhältnis von 4:3 hochladen,
und dieses verkleinert, quadratisch zugeschnitten oder schwarz-weiß anzeigen lassen (Sie können auch eine beliebige Kombination dieser Effekte verwenden). Das Kernsystem, stellt hierzu einen effizienten Weg zur Verfügung:

1. Konfigurieren Sie einen Bildstil mit den gewünschten Effekten auf der Seite _Bildstile_.
    (_admin/config/media/image-styles_).
1. Die Effekte werden angewendet, wenn ein bestimmtes Bild zum ersten Mal unter Verwendung dieses Bildstils angefordert  wird.
1. Das so erzeugte Bild wird gespeichert.
1. Wenn derselbe Bildstil das nächste Mal angefordert wird, wird das gespeicherte Bild abgerufen,
    ohne das der Bildstil neu berechnet werden muss.

    Das Kernsystem bietet mehrere Effekte, welche Sie zur Definition von Bildstilen verwenden können;
    weitere können durch beigesteuerte Module bereitgestellt werden.

    Rufen Sie die Seite _Bildstile_ über das Menü _Verwalten_ auf, indem Sie zum Menüpunkt
    _Konfiguration_ > _Medien_ > _Bildstile_ (_admin/configuration/media/imagesyles_)
    navigieren, um die Bildstile einzusehen, die standardmäßig definiert sind.
## Verwandte Themen

* [structure-image-style-create](./structure-image-style-create.md)
* [structure-image-responsive](./structure-image-responsive.md)
* [structure-fields](./structure-fields.md)
## Zusätzliche Ressourcen

[_Drupal.org_ Community-Dokumentationsseite "Arbeiten mit Bildern in Drupal 7 und 8" (englisch)](https://www.drupal.org/docs/8/core/modules/image/working-with-images)

*Mitwirkende*

Adaptiert und herausgegeben von [Boris Doesborg](https://www.drupal.org/u/batigolix),
und [Jojy Alphonso](https://www.drupal.org/u/jojyja) bei
[Red Crackle](http://redcrackle.com), von
["Arbeiten mit Bildern in Drupal 7 und 8" (englisch)](https://www.drupal.org/docs/8/core/modules/image/working-with-images),
copyright 2000 - 2026 liegt bei den einzelnen Mitwirkenden an der
[Dokumentation der Drupal-Community](https://www.drupal.org/documentation)

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
