---
title: "概念：用户，角色和权限"
description: "用户账户，权限和角色概述。"
id: "user-concept"
translation_key: "user-concept"
source_locale: "zh-hans"
---
## 什么是用户？ { #user-concept }

访问网站的任何人都是用户，包括您自己。有三类用户：

* 未登录用户，或匿名用户
* 已登录用户
* 安装网站时自动创建的管理员账号，或用户 1。请查看 [user-admin-account](./user-admin-account.md)。
## 什么是权限？

权限决定用户是否能够在网站上执行操作（包括浏览内容，编辑内容，以及改变配置）。每个权限都有一个
名字 (比如：查看已发布内容) ，它控制一个操作或者多个操作。用户必须被授予权限才能在站点上执行
相应的操作。权限由提供操作的模块定义。
## 什么是角色？

不同于直接为每个用户单独分配权限，角色包含一组权限. 您可以在网站上定义一个或更多角色,然后分配
不同的权限给不同的角色。授予给已登录用户和匿名用户的权限分别包含在已登录用户角色和匿名用户角色中。
取决于您在安装站点时选择的安装类型，可能会创建有一个叫管理员的角色。这个角色拥有所有的权限。

每个账号会自动获得已登录用户角色，同时，每个账号可以拥有一个或多个其他角色。当将角色分配给账号
后，该账号对应的用户在登录时将拥有该角色拥有的所有权限。

创建多个角色是一种好的实践。以农贸市场站点为例，可能需要以下角色：

* 供应商角色，允许供应商编辑自己的供应商列表页面
* 内容编辑角色，用于编辑一般农贸市场页面
* 用户管理员角色，用于管理供应商帐户
* 管理员角色，安装网站时自动创建，供高级用户管理站点配置
## 相关话题

* [user-new-role](./user-new-role.md)
* [user-permissions](./user-permissions.md)
* [user-roles](./user-roles.md)
* [user-new-user](./user-new-user.md)
* [user-admin-account](./user-admin-account.md)
* [user-content](./user-content.md)
## 相关资料

* [Drupal 官网文档：用户，角色和权限](https://www.drupal.org/node/120614)
* [Drupal 官网文档：管理用户](https://www.drupal.org/docs/7/managing-users)
* [Drupal 官网文档：用户角色](https://www.drupal.org/node/1803614)

*贡献者*

编写： [Mark LaCroix](https://www.drupal.org/u/mark-lacroix)，
[Boris Doesborg](https://www.drupal.org/u/batigolix)，和
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) 改编自
[用户角色](https://www.drupal.org/node/1803614)，
©️ 2000-2017 [Drupal 社区文档](https://www.drupal.org/documentation)贡献者

翻译： [冉强军](https://www.drupal.org/u/jungle) @ [InterGreat Education Group](https://intergreat.com)，
[qingguo](https://www.drupal.org/user/3597281)
