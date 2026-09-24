---
title: "Changing a User's Roles"
description: "How to change or add roles for a user."
id: "user-roles"
translation_key: "user-roles"
source_locale: "ja"
---
## Goal { #user-roles }

Change or add roles to a given user, either by editing a single-user or by
applying a bulk operation.
## Prerequisite knowledge

[user-concept](./user-concept.md)
## Site prerequisites

The user account that you want to update, and the role you want it to have, must
already exist. See [user-new-user](./user-new-user.md),  [user-new-role](./user-new-role.md), and
[user-permissions](./user-permissions.md).
## Steps
### Updating the roles using single-user editing method

1. In the _Manage_ administrative menu, navigate to _People_
    (_admin/people_).
1. Locate the user 1 account (named "admin") to assign it the _Administrator_
    role. If it is not immediately visible, use the _Name or email contains_ filter,
    or other filters, to narrow down the list.
1. Click _Edit_ to update the user account.
    <img src="/images/user-roles_people-list.webp" alt="People page" width="100%" />
1. On the _Edit_ page, scroll down to _Roles_ section. Check the _Administrator_
    role for the user account.
    <img src="/images/user-roles_person-edit.webp" alt="Roles section of user edit page" width="141px" />
1. Click _Save_ to update the user account. You should be returned to the
    _People_ page and see a message saying that the changes have been saved.
    ![Confirmation message](/images/user-roles_message.webp)
### Updating the roles using bulk editing method

1. If the users Happy Farm and Sweet Honey did not already have the Vendor role,
    here is how you would add it. In the _Manage_ administrative menu, navigate to
    _People_ (_admin/people_).
1. Locate Vendor user accounts  _Sweet Honey_ and _Happy Farm_ and check them. If
    they are not immediately visible, use the _Name or email contains_ filter, or
    other filters, to narrow down the list.
1. Select _Add the Vendor role to the selected users_ from the _Action_
    select list.
    ![People page with bulk operation set up](/images/user-roles_bulk.webp)
1. Click _Apply to selected items_. You should see a message indicating that the
    desired changes were made.
    ![Confirmation message](/images/user-roles_message_bulk.webp)

    *Attributions*

    Written by [Chris Dart](https://www.drupal.org/u/chris-dart)
    and [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)
