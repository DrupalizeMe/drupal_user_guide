---
title: "Konfigurieren von Textformaten und Editoren"
description: "Wie man eine Änderung an einem Textformat und der Konfiguration von Texteditoren vornimmt."
id: "structure-text-format-config"
translation_key: "structure-text-format-config"
source_locale: "de"
---
## Zielsetzung { #structure-text-format-config }

Fügen Sie zum Textformat _Einfaches HTML_ das HTML-Tag für horizontale Linien zu Liste der erlaubten HTML-Tags hinzu und ergänzen Sie die Konfiguation des zugeordneten Texteditors um einen entsprechenden Buttton.
## Erforderliche Vorkenntnisse

[structure-text-formats](./structure-text-formats.md)
## Anforderungen an die Website

* Die Kernsystemmodule Filter, Text Editor und CKEditor müssen installiert sein. Die Module wurden automatisch installiert,
wenn Sie das Installationsprofil Standard zur Installation Ihrer Website verwendet haben.
* Das Textformat _Einfaches HTML_ muss vorhanden sein. Dieses wird auf Ihrer Site erstellt, wenn Sie
Ihre Website unter Verwendung des Installationsprofils Standard aufsetzen.
## Arbeitsschritte

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Konfiguration_ > _Inhaltserstellung_ > _Textformate und Editoren_ (_admin/configuration/content/formats_).
    Die Seite _Textformate und Editoren_ erscheint. Beachten Sie, dass die Namen der Textformate
    die mit Ihrem Installationsprofil geliefert wurden, auf der Website evtl. auf englisch angezeigt werden. Lesen sie den Abschnitt
    [language-concept](./language-concept.md) um den Grund hierfür zu erfahren.
1. Klicken Sie hinter dem Textformat _Einfaches HTML_ auf _Konfigurieren_. Die Seite _Einfaches HTML_
    wird geöffnet.
1. Achten Sie darauf, dass _CKEditor_ im Feld _Text-Editor_ ausgewählt ist. Diese Auswahl ermöglicht es Ihnen
    die Symbolleiste des Editors zu konfigurieren.
1. Ziehen Sie den Button _Horizontale Linie_ aus der Liste _Verfügbare Buttons_ im Abschnitt _Werkzeuge_ auf die aktive Werkzeugleiste_. Möglicherweise müssen Sie auf den Link _Gruppennamen anzeigen_ klicken, um die Gruppe mit dem Namen
    _Tools_ zu finden. Alternativ zum Ziehen und Ablegen von Buttons mit der Maus können Sie in die Registerkarte klicken und die einzelnen Buttons mit den Pfeiltastn auf Ihrer Tastatur verschieben.
    <img src="/images/structure-text-format-config-editor-config.png" alt="Configuring the editor" width="100%" />
1. Beachten Sie, dass Sie die _Filter-Verarbeitungsreihenfolge_ ändern können.
1. Unter _Aktivierte Filter_ > _Erlaubte HTML-Tags einschränken und fehlerhaftes HTML_ korrigieren,
    überprüfen Sie im Feld _Erlaubte HTML-Tags_, ob `&lt;hr&gt;` vorhanden ist (fügen Sie eine
    Editor-Schaltfläche hinzu, werden die erlaubten Tags automatisch aktualisiert).
    <img src="/images/structure-text-format-config-allowed-html.png" alt="Configuring the HTML tags" width="100%" />
1. Klicken Sie auf _Konfiguration speichern_. Sie gelangen zurück auf die Seite _Textformate und
    Editoren_. Es wird eine Meldung angezeigt, dass das Textformat
    aktualisiert worden ist.
    ![Confirmation message for text format configuration](/images/structure-text-format-config-summary.png)

## Vertiefen Sie Ihr Wissen

Wenn Sie die Auswirkungen dieser Änderungen auf Ihrer Website nicht sehen, müssen Sie
den Cache der Website leeren. Siehe: [prevent-cache-clear](./prevent-cache-clear.md).
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/T9RD6PTxe9U" title="Konfigurieren von Textformaten und Editoren (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben von [Boris Doesborg](https://www.drupal.org/u/batigolix).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
