---
title: "Assigning Permissions to a Role"
description: "How to assign a permission to a role."
id: "user-permissions"
translation_key: "user-permissions"
source_locale: "hy"
---
## Goal { #user-permissions }

Change the permissions for the Vendor role so that users can create, edit,
and delete Recipe and Vendor content, format the content, and contact each
other.
## Prerequisite knowledge

* [user-concept](./user-concept.md)
## Site prerequisites

The Vendor role must exist on your site. See [user-new-role](./user-new-role.md).
## Steps

1. In the _Manage_ administrative menu, navigate to _People_ > _Roles_
    (_admin/people/roles_). The _Roles_ page appears.
1. Click _Edit permissions_ in the dropdown for the Vendor
    role. The _Edit role_ page appears where you can see all the available
    actions for the website such as, for example, _Post comments_ or _Administer
    blocks_. The available permissions depend on the modules that are installed in
    the site. Note: Some permissions may have security implications. Be cautious
    while assigning permissions to roles.
1. Check the boxes for the following permissions, listed by module:
    <table>
      <thead>
        <tr>
          <th>Module</th>
          <th>Permission</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Contact</td>
          <td>Use users' personal contact forms</td>
        </tr>
        <tr>
          <td>Filter</td>
          <td>Use the Restricted HTML text format</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Recipe: Create new content</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Recipe: Edit own content</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Recipe: Delete own content</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Vendor: Edit own content</td>
        </tr>
        <tr>
          <td>Quick Edit</td>
          <td>Access in-place editing</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/user-permissions-check-permissions.webp" alt="Granting users with the Vendor role the rights to create, delete and edit Recipes" width="100%" />

1. Click _Save permissions_. You will get a message saying your changes have been
    saved.
    ![Confirmation message after updating permissions](/images/user-permissions-save-permissions.webp)
## Expand your understanding

* Log in as one of the new users you created in [user-new-user](./user-new-user.md). Verify
whether you have the correct permissions.
* [user-roles](./user-roles.md)
## Related concepts

[user-admin-account](./user-admin-account.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/IlVh9f4BHVw" title="Assigning Permissions to a Role" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Additional resources

[_Drupal.org_ community documentation page "Managing Users"](https://www.drupal.org/docs/7/managing-users)

*Attributions*

Adapted and edited by [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Brian Emery](https://www.drupal.org/u/bemery987),
and [Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com), from
["User Roles"](https://www.drupal.org/docs/7/managing-users/user-roles),
copyright 2000-2026 by the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation).
