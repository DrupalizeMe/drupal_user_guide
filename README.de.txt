Die Dateien in diesem Projekt können verwendet werden, um ein Benutzerhandbuch für Drupal zu erstellen. Die
Quelldateien verwendet das AsciiDoc-Abschriftenformat, das im DocBook-Format kompiliert werden kann,
die wiederum in HTML, PDF und verschiedene E-Book-Formate kompiliert werden können. Das
AsciiDoc Anzeige-Modul (https://www.drupal.org/project/asciidoc_display) kann
verwendet werden, um spezielle HTML-Ausgaben auf einer Drupal-Website anzuzeigen. Das hierzu gehörende Modul
Guide Tests (https://www.drupal.org/project/user_guide_tests) enthält
automatisierte Tests, die auch Screenshots für das Benutzerhandbuch generieren.


COPYRIGHT UND LIZENZ
---------------------

Die Datei ASSETS.yml in diesem Verzeichnis und die Dateien, auf die sie verweist, finden Sie in den
Copyright- und Lizenzinformationen für die Text-Quelldateien und Bilder in dieser
Projekt. Ausgabedateien, die aus diesem Projekt heraus erstellt und angezeigt werden, müssen außerdem
Informationen zum Urheberrecht/Lizenz enthalten.

Der Code in diesem Projekt, bestehend aus Skripten zur Generierung der Ausgaben des
Quellcodes, ist unter der GNU/GPL-Lizenz Version 2 und neuer lizenziert.


DATEIORGANISATION
-----------------

Dieses Projekt enthält die folgenden Verzeichnisse:

* Quelltext

Der AsciiDoc-Quelltext für das Handbuch befindet sich in Sprachunterverzeichnissen des Hauptverzeichnisses.
Die Indexdatei heißt "guide.asciidoc". Diese Datei enthält Include-Anweisungen
für die anderen Dateien, aus denen sich das Handbuch zusammensetzt.

* Assets

Bilder und Texte zur Verwendung bei der Erstellung von Screenshots für das Handbuch.

* Richtlinien / Vorlagen

Richtlinien und Vorlagen für Mitwirkende an diesem Projekt finden Sie in den Richtlinien-
bzw. Vorlagenverzeichnissen. Die Richtlinien sind in Form eines
weiteren AsciiDoc-Handbuch vorhanden. Die Indexdatei für dieses Handbuch ist die guidelines.asciidoc. Es gibt
separate Vorlagen für Themen, die Aufgaben und Konzepte abdecken.

* Skripte / Ausgabe

Um sowohl das Benutzerhandbuch als auch die Richtlinien zu kompilieren, verwenden Sie die Skripte im Verzeichnis scripts.
Weitere Informationen erhalten Sie weiter unten.  Derzeit werden die Richtlinien
nur eine HTML-Datei für das Modul eine HTML-Ausgabe für dasAsciiDoc-Display-Modul. Die Skkripte zum Erzeugen des Benutzerhandbuchs
erzeugen sowohl HTML-Ausgaben als auch E-Books im format PDF und andern Formaten.

Die von den Skripten erzeugte Ausgabe landet im Verzeichnis output. Im Unterverzeichnis html
befindet die Ausgabe für das Modul AsciiDoc Display; E-Books landen im
Unterverzeichnis ebooks.


BUILD-SKRIPTE DER ASCIIDOC-VARIANTE
-----------------------------

Das Handbuch und die Richtlinien sind beide mit Skripten ausgestattet, um deren Ausgabe
mit dem AsciiDoc-Anzeigemodul,
(https://www.drupal.org/project/asciidoc_display), sowie PDF und anderen
E-Book-Varianten
kompatibel zu machen (die Skripte sindd angepaste Versionen der Beispielskripten in diesem Projekt und nur die Skripte zur Ausgabe des Benutzerhandbuchs
sind derzeit für die Ausgabe von E-Books eingerichtet).

Um das Skript scripts/mkoutput.sh auszuführen, benötigen Sie mehrere Open-Source-Werkzeuge:
- AsciiDoc (für jede Ausgabe): http://asciidoc.org/INSTALL.html
- DocBook (für jede Ausgabe): http://docbook.org oder
  http://www.dpawson.co.uk/docbook/tools.html
- FOP (für PDF): http://xmlgraphics.apache.org/fop/
- Kaliber (für MOBI): http://calibre-ebook.com/

Auf einem Linux-Rechner können Sie einen dieser Befehle verwenden, um alle Tools zu installieren:
  apt-get install asciidoc docbook fop calibre
  yum installieren asciidoc docbook fop kaliber

Auf einem Mac:
  müssen Sie asciidoc xmlto mit folgendem Befehl einrichten
  echo "XML_CATALOG_FILES=/usr/local/etc/xml/catalog exportieren" >> ~/.bash_profile
  source ~/.bash_Profil

Beachten Sie, dass diese Skripte nicht mit allen verfügbaren Versionen von AsciiDoc
und Docbook-Tools funktionieren. Folgende Versionen sind auf ihre Kompatibilität getestet worden:
asciidoc - Version 8.6.9
xmlto - Version 0.0.25

Sie können die Version Íhrer Installation überprüfen, indem Sie folgende Befehle auf der Kommandozeile eingeben:
  asciidoc --version
  xmlto --version
