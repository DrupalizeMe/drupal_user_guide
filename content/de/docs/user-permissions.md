---
title: "Zuweisen von Berechtigungen zu einer Rolle"
description: "So weisen Sie einer Rolle eine Berechtigung zu."
id: "user-permissions"
translation_key: "user-permissions"
source_locale: "de"
---
## Zielsetzung { #user-permissions }

Ändern Sie die Berechtigungen der Rolle Lieferant, damit Benutzer, denen diese Rolle zugewisen ist, Rezepte und Inhalte vom Typ Lieferant bearbeiten und löschen können, Inhalte formatieren und sich untereinander kontaktieren können. 
## Erforderliche Vorkenntnisse

* [user-concept](./user-concept.md)
## Anforderungen an die Website

Die Rolle Lieferant muss auf Ihrer Website vorhanden sein. Siehe [user-new-role](./user-new-role.md).
## Arbeitsschritte

1. Navigieren Sie im Menü _Verwalten_ zum Menüpunkt _Benutzer_ > _Rollen_
    (_admin/people/roles_). Die Seite _Rollen_ erscheint.
1. Klicken Sie im Dropbutton für die Rolle Lieferant auf _Berechtigungen bearbeiten_. Die Seite _Rolle bearbeiten_, auf der Sie alle verfügbaren Aktionen für die Website wie z.B. _Kommentare abgeben_ oder _Blöcke verwalten_ sehen können, erscheint. Die verfügbaren Berechtigungen hängen von den Modulen ab, die auf
    der Website aktiviert wurden. 

    Hinweis: Einige Berechtigungen können Auswirkungen auf die Sicherheit haben. Seien sie vorsichtig beim Zuweisen von Berechtigungen zu Rollen.

1. Markieren Sie die Kontrollkästchen für die folgenden Berechtigungen, aufgelistet nach Modul:
    <table>
      <thead>
        <tr>
          <th>Modul</th>
          <th>Berechtigung</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Contact</td>
          <td>Persönliches Kontaktformular verwenden</td>
        </tr>
        <tr>
          <td>Filter</td>
          <td>Textformat „Einfachs HTML“ verwenden</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Rezept: Neuen Inhalt erstellen</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Rezept: Eigenen Inhalt bearbeiten</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Rezept: Eigenen Inhalt löschen</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Lieferant: Eigenen Inhalt bearbeiten</td>
        </tr>
        <tr>
          <td>Quick Edit</td>
          <td>Auf Direktbearbeitungsmodus zugeifen</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/user-permissions-check-permissions.webp" alt="Granting users with the Vendor role the rights to create, delete and edit Recipes" width="100%" />

1. Klicken Sie auf _Berechtigungen speichern_. Sie erhalten eine Meldung, dass Ihre Änderungen
    gespeichert wurden.
    ![Confirmation message after updating permissions](/images/user-permissions-save-permissions.webp)

## Vertiefen Sie Ihr Wissen

* Melden Sie sich als einer der neuen Benutzer an, die Sie im Abschnitt [user-new-user](./user-new-user.md) angelegt haben. Überprüfen Sie,
ob Sie die richtigen Berechtigungen haben.
* [user-roles](./user-roles.md)
## Verwandte Konzepte

[user-admin-account](./user-admin-account.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/IlVh9f4BHVw" title="Zuweisen von Berechtigungen zu einer Rolle (englisch)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Zusätzliche Ressourcen

[_Drupal.org_ Community-Dokumentationsseite „Benutzer verwalten"](https://www.drupal.org/docs/7/managing-users)

*Mitwirkende*

Adaptiert und herausgegeben von [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Brian Emery](https://www.drupal.org/u/bemery987),
und [Jojy Alphonso](https://www.drupal.org/u/jojyja) bei
[Red Crackle](http://redcrackle.com), von
[„Benutzerrollen"](https://www.drupal.org/node/1803614) (englisch),
copyright 2000 - 2026 von den einzelnen Mitwirkenden an der
[Dokumentation der Drupal-Community](https://www.drupal.org/documentation).

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
