---
title: "Ändern der Rollen eines Benutzers"
description: "Wie Sie Rollen für einen Benutzer ändern oder hinzufügen."
id: "user-roles"
translation_key: "user-roles"
source_locale: "de"
---
## Zielsetzung { #user-roles }

Ändern oder Hinzufügen von Rollen zu einem bestimmten Benutzer, entweder durch Bearbeiten eines Einzelbenutzers oder durch
Anwendung einer Massenaktion.
## Erforderliche Vorkenntnisse

[user-concept](./user-concept.md)
## Anforderungen an die Website

Das Benutzerkonto, das Sie aktualisieren möchten, und die Rolle, die Sie ihm zuweisen möchten, müssen
bereits existieren. Siehe [user-new-user](./user-new-user.md),  [user-new-role](./user-new-role.md), and
[user-permissions](./user-permissions.md).
## Arbeitsschritte
### Aktualisieren der Rollen mit der Einzelbenutzer-Bearbeitungsmethode

1. Navigieren Sie im Verwaltungsmenü _Verwaltung_ zu _Benutzer_
    (_admin/people_).
1. Suchen Sie das Konto von Benutzer 1 (mit dem Namen "admin"), um diesem die Rolle _Administrator_ zuzuweisen. Wenn das Benutzerkonto nicht sofort sichtbar ist, verwenden Sie den Filter _Name oder E-Mail enthält_,
    oder andere Filter, um die Liste einzugrenzen.
1. Klicken Sie auf _Bearbeiten_, um das Benutzerkonto zu aktualisieren.
    <img src="/images/user-roles_people-list.png" alt="People page" width="100%" />
1. Scrollen Sie auf der Seite _Bearbeiten_ zum Abschnitt _Rollen_. Aktivieren Sie den Haken bei der Rolle _Administrator_ für das Benutzerkonto.
    <img src="/images/user-roles_person-edit.png" alt="Roles section of user edit page" width="141px" />
1. Klicken Sie auf _Speichern_, um das Benutzerkonto zu aktualisieren. Sie sollten dadurch zur Seite _Benutzer_ Seite zurückkehren und sehen eine Meldung, dass die Änderungen gespeichert wurden.
    ![Confirmation message](/images/user-roles_message.png)

### Aktualisieren der Rollen mit der Massenbearbeitungsmethode

1. Wenn die Benutzer Happy Farm und Sweet Honey nicht bereits die Rolle des Lieferanten hatten,
    zeigen wir hier, wie Sie diese hinzufügen können. Navigieren Sie im Menü _Verwalten_ zu
    _Benutzer_ (_admin/people_).
1. Suchen Sie die Benutzerkonten des Lieferanten _Sweet Honey_ und _Happy Farm_ und wählen Sie diese durch Anklicken des linken Kästchens aus. Wenn
    sie nicht sofort sichtbar sind, verwenden Sie den Filter _Name oder E-Mail enthält_, oder
    andere Filter, um die Liste einzugrenzen.
1. Wählen Sie _Hinzufügen der Rolle Lieferant zum ausgewählten Benutzer_ aus der oben stehenden Liste _Aktion_
    aus.
    ![People page with bulk operation set up](/images/user-roles_bulk.png)
1. Klicken Sie unten auf _Anwenden auf ausgewählte Elemente_. Sie sollten eine Meldung sehen, daß die
    gewünschte Änderungen vorgenommen wurden.
    ![Bestätigungsmeldung (englisch)](/images/user-roles_message_bulk.png)

## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/hd7Sr3-n9ME" title="Die Rollen eines Benutzers ändern" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Mitwirkende*

Geschrieben von [Chris Dart](https://www.drupal.org/u/chris-dart)
und [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) [Jennifer Hodgdon

Ins Deutsche übersetzt von [Joachim Namyslo](https://www.drupal.org/u/Joachim-Namyslo).
