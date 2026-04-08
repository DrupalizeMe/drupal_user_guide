---
title: "Konzept: Systemvoraussetzungen an den Server"
description: "Überblick über die Systemanforderungen an den Webserver zum Betrieb des Kernsystems."
id: "install-requirements"
translation_key: "install-requirements"
source_locale: "de"
---
## Was sind die Voraussetzungen für den Betrieb des Kernsystems? { #install-requirements }
### Festplattenspeicherplatz

Die Gesamtmenge des für Ihre Website benötigten Speicherplatzes
ist keine feste Größe. Der Benötigte Speicherplatz hängt von Ihrer Website ab.
Die Basisdateien des Kernsystems nehmen etwa 100 MB Speicherplatz
auf dem Webserver in Anspruch. Weiterer Speicherplatz wird benötigt, sobald Sie
zusätzliche Module oder Themes installieren. Außerdem wird Speicherplatz auch
für Mediendateien (Bilder, Videos), Backups und andere Dateien benötigt, die
von  Ihnen und anderen Benutzern auf Ihre Website hochgeladen werden.
Die Datenbank benötigt ebenfalls Festplattenspeicherplatz, obwohl diese
sich typischerweise nicht am gleichen Ort, wie die eigentliche Website
(und in einigen Fällen nicht einmal auf dem gleichen
Server) befindet.
### PHP

PHP 8.1 oder höher. PHP muss mindestens 64 MB Arbeitsspeicher
zur Verfügung stehen. Wenn Sie
mehrere Module auf Ihrer Website ausführen oder speicherintensive PHP-basierte
Kommandozeilen-Tools (wie Composer) verwenden, wird wesentlich mehr
Arbeitsspeicher für PHP benötigt.

Bestimmte PHP-Erweiterungen sind ebenfalls erforderlich. die vollständige Liste
der erforderlichen PHP-Erweiterungen hängt davon ab, wie Sie das  Kernsystem
installieren und welche Module Sie auf Ihrer Website verwenden. Im Allgemeinen
sind bei Hosting-Service-Providern alle PHP-Erweiterungen, die Sie benötigen,
um Drupal verwenden zu können vorinstalliert. Wenn Sie Ihre Website selbst
hosten oder auf Ihrem lokalen Computer betreiben, erhalten Sie während der
Installation gegebenenfalls Fehlermeldungen die darauf hinweisen, dass
erforderliche PHP-Erweiterungen fehlen damit Sie diese Installieren und die
Installation von Drupal fortsetzen können.
### Web-Server

- **Apache (empfohlen):** Apache ist der am häufigsten verwendete Webserver. Das Drupal-Kernsystem funktioniert auf Apache 2.4.7 oder höher, die auf UNIX/Linux, OS X oder Windows gehostet werden und auf denen das Apache mod_rewrite Modul installiert und aktiviert ist. Die Apache VirtualHost Konfiguration muss die Anweisung AllowOverride All enthalten, damit die .htaccess-Datei verwendet werden kann.
- **Lokaler PHP-Server:** Sie können vorübergehend eine lokale Demo-Website auf Ihrem Computer installieren, die den in PHP eingebauten Webserver verwendet, damit zur Evaluierung von Drupal kein zusätzlicher Webserver installiert werden muss.
- **Nginx:** Nginx ist ein weit verbreiteter Webserver, der sich auf hohe Gleichzeitigkeit, Leistung und geringen Speicherverbrauch konzentriert. Das Kernsystem läuft auf Nginx 0.7 oder höher, der auf UNIX/Linux, OS X oder Windows gehostet wird. Das ngx_http_rewrite_module muss installiert und aktiviert sein.
- **Microsoft IIS:** Microsoft IIS ist ein Webserver und ein Satz von Funktionserweiterungsmodulen zur Verwendung mit Microsoft Windows. Das Drupal-Kernsystem arbeitet mit IIS 5, IIS 6 oder IIS 7, wenn PHP korrekt konfiguriert ist. Da lesbare URLs erforderlich sind, könnte es sein, dass Sie ein Produkt eines Drittanbieters verwenden müssen. Für IIS 7 können Sie das Microsoft-URL Rewrite-Modul oder die Lösung eines Drittanbieters verwenden.
### Datenbank

Verwenden Sie eine der folgenden Datenbanken:

* MySQL - 5.7.8 (MariaDB 5.5.20, Percona 5.5.8) oder höher mit einer
InnoDB-kompatiblen Primärspeicher-Engine
* PostgreSQL - 10.0 oder höher mit der pg_trgm Erweiterung
* SQLite - 3.26 oder höher. Temporäre lokale Demo-Websites verwenden SQLite,
das als Teil von PHP ausgeliefert wird und keine Installation einer separaten
Datenbank-Software erfordert.
## Zusätzliche Ressourcen

* [_Drupal.org_ Community-Dokumentationsseite „Systemanforderungen“ (englisch)](https://www.drupal.org/docs/8/system-requirements)
* [PHP-Laufzeitkonfiguration (PHP-Speicherlimit und andere Einstellungen) (englisch)](https://secure.php.net/manual/en/configuration.php)

*Mitwirkende*

Bearbeitet von [Karl Kedrovsky](https://www.drupal.org/u/KarlKedrovsky),
[Brian Emery](https://www.drupal.org/u/bemery987), und
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) entnommen aus
["Systemvoraussetzungen (englisch)"](https://www.drupal.org/docs/8/system-requirements),
copyright 2000 - 2026 liegt bei den einzelnen Mitwirkenden an der
[Dokumentation der Drupal-Comunity](https://www.drupal.org/documentation).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
