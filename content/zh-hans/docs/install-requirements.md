---
title: "概念：服务器要求"
description: "安装及运行 Drupal 的服务器要求"
id: "install-requirements"
translation_key: "install-requirements"
source_locale: "zh-hans"
---
## 运行核心软件的要求有哪些？ { #install-requirements }
### 磁盘空间

最低安装需 15MB 磁盘空间。当网站安装大量的贡献模块和主题时需要 60MB 磁盘空间。谨记，你需要
更多空间用于数据库、用户上传的文件、媒体文件、备份文件及其他文件。
### Web 服务器

- **Apache (推荐):** Apache 是最常用的 Web 服务器。核心软件能在运行 Apache 2.x 的 UNIX/Linux、OSX、或 Windows 系统中工作，并确保 Apache mod_rewrite 模块已安装并已开启。Apache VirtualHost 配置必须包含指令 _AllowOverride All_  ，以允许使用 _.htaccess_ 文件。
- **Nginx:** Nginx 也是常用的 Web 服务器，Nginx 服务器侧重高并发性，高性能和低内存占用。核心软件能在 运行Nginx 1.1 或其更高版本的UNIX/Linux、OSX、或 Windows 系统中工作。ngx_http_rewrite_module 必须安装并启用。
- **Hiawatha:** Hiawatha 是一个注重安全性的 Web 服务器。同时，Hiawatha 一直致力于易用性和轻量性。独立 研究人员进行的研究表明，Hiawatha 在正常条件下提供了与其他 Web 服务器相当的性能，在受到 网络入侵时，能提供更好的性能。必须安装并配置 URL Toolkit 才能重写 URL。
- **微软 IIS:** 微软 IIS 是一个 Web 服务器，它有一系列在微软 Windows 系统下使用的功能扩展模块。如果 PHP 配置正确的话，核心软件可以在 IIS 5、IIS 6及IIS 7 服务器中运行。由于简洁链接是必需的， 你需要用到第三方产品。对于 IIS 7 来说，你可以使用微软的URL重写模块或者第三方的解决方案。
### 数据库

可从下列数据库中任意选中一个：

* MySQL - 5.5.3 (MariaDB 5.5.20, Percona 5.5.8) 或兼容 InnoDB 主存储引擎的更高版本
* PostgreSQL - 9.1.2 或更高版本
* SQLite - 3.4.2 或更高版本
### PHP

PHP 5.5.9 或更高版本
## 相关资料

[Drupal 官网文档：系统要求](https://www.drupal.org/requirements)

*贡献者*

编写： [Karl Kedrovsky](https://www.drupal.org/u/KarlKedrovsky) 和
[Brian Emery](https://www.drupal.org/u/bemery987)

翻译： [周宇](https://www.drupal.org/u/rabphito)， [冉强军](https://www.drupal.org/u/jungle) @ [InterGreat Education Group](https://intergreat.com)
