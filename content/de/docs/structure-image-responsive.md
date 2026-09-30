---
title: "Konzept: Responsive Bildstile"
description: "Überblick über responsive Bildstile, mit denen Sie Bilder bereitstellen können, die zu verschiedenen Bildschirmgrößen passen."
id: "structure-image-responsive"
translation_key: "structure-image-responsive"
source_locale: "de"
---
## Vorrausgesetztes Wissen { #structure-image-responsive }

* [understanding-themes](./understanding-themes.md)
* [structure-content-display](./structure-content-display.md)
* [structure-image-styles](./structure-image-styles.md)
## Was sind responsive Bildstile?

Das Modul Responsive Image, welches mit dem Kernsystem ausgeliefert wird, stellt responsive Bildstile bereit. Dies ermöglicht
Ihnen Bilder auf Ihrer Website zu erzeugen, die speziell für verschiedene Bildschirmgrößen optimiert sind. 
Dies hilft beispielsweise dabei Ihre Website auf mobilen Geräten schnneller zu laden, da unter Verwendung des Moduls responsive Imagae erzeugte Bilder für kleinerere Bildschirme optimiert sind.

Ein responsiver Bildstil ist die Zuordnung eines Bildstils oder mehrerer Bildstile zu einem Breakpoint.
Breakpoints sind die Umbruchpunkte, an denen sich ein responsives Design anpassen muss, um
auf unterschiedliche Bildschirmgrößen zu reagieren. Responsive Bildstile können entweder
mit Breakpoints funktionieren, die in Ihrem Theme definiert sind, oder mit Breakpoints, die über die Einstellungen für responsive Bilder festgelegt wurden.

Wenn ein responsiver Bildstil definiert ist, kann er in den Anzeigeeinstellungen von
Bildfeldern ausgewählt werden. Auf diese Weise kann die Website Bilder mittels des
HTML5 _picture_-Tag oder unter Verwendung der Attribute _srcset_ und _sizes_ in einem _img_-
Tag ausliefern, je nachdem, wie der responsive Bildstil eingerichtet ist.
## Verwandte Themen

[structure-fields](./structure-fields.md)
## Zusätzliche Ressourcen

* [_Drupal.org_ Community-Dokumentationsseite „Reaktionsfähiges Webdesign"](https://www.drupal.org/node/1388492)
* [Drupal.org_ Community-Dokumentationsseite „Responsive Bilder in Drupal 9 (englisch)"](https://www.drupal.org/docs/8/mobile-guide/responsive-images-in-drupal-8)
* [_Drupal.org_ Community-Dokumentationsseite „Arbeiten mit Breakpoints in Drupal 9“ (englisch)](https://www.drupal.org/docs/8/theming-drupal-8/working-with-breakpoints-in-drupal-8)
* [Blog-Post „Responsive Bilder in Drupal 8 mit 'srcset'“ (englisch)](https://chromatichq.com/blog/responsive-images-drupal-8-using-srcset)

*Mitwirkende*

Adaptiert von [Boris Doesborg](https://www.drupal.org/u/batigolix) von
[Responsiv Bilder in Drupal 9 (englisch)](https://www.drupal.org/docs/8/mobile-guide/responsive-images-in-drupal-8),
copyright 2000 - 2026 von den einzelnen Mitwirkenden an der
[Dokumentation der Drupal-Community](https://www.drupal.org/documentation).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
