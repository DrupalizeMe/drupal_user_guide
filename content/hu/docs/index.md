---
title: "Drupal 8 K\u00e9zik\u00f6nyv"
description: "Drupal 8 K\u00e9zik\u00f6nyv"
---

# Drupal 8 Kézikönyv

[](){ #preface }
## Előszó

Pár szóban röviden e Kézikönyvről: kinek szól, milyen szerkezetet követ a formázása és tartalma, valamint hogyan a legkönnyebb olvasni.

- [copyright](./copyright.md)
- [preface-audience](./preface-audience.md)
- [preface-organization](./preface-organization.md)
- [preface-reporting](./preface-reporting.md)
- [preface-conventions](./preface-conventions.md)
- [preface-scenario](./preface-scenario.md)

[](){ #understanding-chapter }
## Ismerkedés

Legyenek mindenki számára egyértelműek a leggyakrabban használt fogalmak jelentései: mik azok a modulok, sminkek, telepítési profilok stb.

- [understanding-drupal](./understanding-drupal.md)
- [understanding-modules](./understanding-modules.md)
- [understanding-themes](./understanding-themes.md)
- [understanding-distributions](./understanding-distributions.md)
- [understanding-data](./understanding-data.md)
- [understanding-project](./understanding-project.md)
- [understanding-gpl](./understanding-gpl.md)

[](){ #planning-chapter }
## Tervezés

Megvalósítás előtt áttekintjük, hogyan lenne a legkézenfekvőbb tárolnunk mindazt az adatot, amiből webhelyünk áll: azaz az entitástípusokat.

- [block-regions](./block-regions.md)
- [planning-layout](./planning-layout.md)
- [planning-data-types](./planning-data-types.md)
- [planning-modular](./planning-modular.md)
- [planning-structure](./planning-structure.md)
- [planning-workflow](./planning-workflow.md)
- [language-concept](./language-concept.md)

[](){ #installation-chapter }
## Telepítés

Pár szó a Drupal rendszerkövetelményeiről, valamint hogy azok teljesülésekor hogyan tudjuk működésbe hozni webhelyünket egy webkiszolgálón.

- [install-requirements](./install-requirements.md)
- [install-tools](./install-tools.md)
- [install-decide](./install-decide.md)
- [install-prepare](./install-prepare.md)
- [install-composer](./install-composer.md)
- [install-manual](./install-manual.md)
- [install-run](./install-run.md)

[](){ #config-chapter }
## Alapbeállítások

Folytassuk a webhely legegyszerűbb beállításaival, mint a modulok bekapcsolása, sminkek testreszabása és felhasználói fiókok regisztrálása.

- [config-overview](./config-overview.md)
- [config-basic](./config-basic.md)
- [config-install](./config-install.md)
- [config-uninstall](./config-uninstall.md)
- [config-user](./config-user.md)
- [config-theme](./config-theme.md)

[](){ #content-chapter }
## Oldalkezelés

Majdnem minden, amit magáról a tartalmak szerkesztéséről tudni érdemes: például helybeni szerkesztésük, a címlap kezelése, navigációs menük.

- [content-paths](./content-paths.md)
- [content-create](./content-create.md)
- [content-edit](./content-edit.md)
- [content-in-place-edit](./content-in-place-edit.md)
- [menu-home](./menu-home.md)
- [menu-concept](./menu-concept.md)
- [menu-link-from-content](./menu-link-from-content.md)
- [menu-reorder](./menu-reorder.md)

[](){ #content-structure-chapter }
## Tartalomszerkezet

A webhely működési hátterének részletes kidolgozása: tartalomtípusok, mezők, taxonómiák, űrlapok, formázók és más izgalmas fogalmak.

- [structure-content-type](./structure-content-type.md)
- [structure-content-type-delete](./structure-content-type-delete.md)
- [structure-fields](./structure-fields.md)
- [structure-reference-fields](./structure-reference-fields.md)
- [structure-taxonomy](./structure-taxonomy.md)
- [structure-taxonomy-setup](./structure-taxonomy-setup.md)
- [structure-adding-reference](./structure-adding-reference.md)
- [structure-widgets](./structure-widgets.md)
- [structure-form-editing](./structure-form-editing.md)
- [structure-view-modes](./structure-view-modes.md)
- [structure-content-display](./structure-content-display.md)
- [structure-image-styles](./structure-image-styles.md)
- [structure-image-style-create](./structure-image-style-create.md)
- [structure-image-responsive](./structure-image-responsive.md)
- [structure-text-formats](./structure-text-formats.md)
- [structure-text-format-config](./structure-text-format-config.md)

[](){ #user-chapter }
## Felhasználókezelés

A webhelyet használó emberekkel kapcsolatos fogalmak, mint például felhasználói és adminfiókok, szerepkörök, jogosultságok megismerése.

- [user-concept](./user-concept.md)
- [user-admin-account](./user-admin-account.md)
- [user-new-role](./user-new-role.md)
- [user-new-user](./user-new-user.md)
- [user-permissions](./user-permissions.md)
- [user-roles](./user-roles.md)
- [user-content](./user-content.md)

[](){ #blocks-chapter }
## Blokkok

Most már semmi nem blokkol minket, hogy megismerjük a blokkokat: mik ezek, mire valók, és hogyan használjuk őket az oldalakon.

- [block-concept](./block-concept.md)
- [block-create-custom](./block-create-custom.md)
- [block-place](./block-place.md)

[](){ #views-chapter }
## Listázás nézetekkel

A legnagyszerűbb dolog a Drupalban, a legkevésbé egyértelmű elnevezéssel: nézetek, amik tulajdonképpen listák, és megjelenítőik vannak.

- [views-concept](./views-concept.md)
- [views-parts](./views-parts.md)
- [views-create](./views-create.md)
- [views-duplicate](./views-duplicate.md)
- [views-block](./views-block.md)

[](){ #multilingual-chapter }
## Többnyelvűsítés

Alapértelmezetten webhelyünk eddig egy nyelven értett (ami viszont nem kötelezően az angol), de most megtanítjuk több nyelven beszélni is.

- [language-add](./language-add.md)
- [language-content-config](./language-content-config.md)
- [language-content-translate](./language-content-translate.md)
- [language-config-translate](./language-config-translate.md)

[](){ #extend-chapter }
## Továbbfejlesztés

Most már haladó webmesterek vagyunk, így ideje, hogy szétnézzünk a műhelyben, és szerszámosládánk mélyére nyúljunk: fejlesztői eszközök.

- [extend-module-find](./extend-module-find.md)
- [extend-maintenance](./extend-maintenance.md)
- [extend-module-install](./extend-module-install.md)
- [extend-theme-find](./extend-theme-find.md)
- [extend-theme-install](./extend-theme-install.md)
- [extend-manual-install](./extend-manual-install.md)
- [install-dev-sites](./install-dev-sites.md)
- [install-dev-making](./install-dev-making.md)
- [extend-deploy](./extend-deploy.md)
- [extend-config-versions](./extend-config-versions.md)
- [extend-git](./extend-git.md)

[](){ #prevent-chapter }
## Hibaelhárítás

A szakma réme, a gyorsítótár. Miért tartsuk mindig üresen, mi is az a biztonsági mentés, a rendszernapló, és az állapotjelentés.

- [prevent-cache](./prevent-cache.md)
- [prevent-cache-clear](./prevent-cache-clear.md)
- [prevent-backups](./prevent-backups.md)
- [prevent-log](./prevent-log.md)
- [prevent-status](./prevent-status.md)

[](){ #security-chapter }
## Karbantartás

Elkészültünk webhelyünkkel, de legyünk törődő jó gazdája a jövőben is: az alaprendszer biztonsági kiadásai, modul- és sminkfrissítések stb.

- [security-cron-concept](./security-cron-concept.md)
- [security-cron](./security-cron.md)
- [security-concept](./security-concept.md)
- [security-announce](./security-announce.md)
- [security-update-core](./security-update-core.md)
- [security-update-module](./security-update-module.md)
- [security-update-theme](./security-update-theme.md)

[](){ #thoughts-chapter }
## Záró gondolatok

A Drupal két összetevőből áll: a szoftveres részét már kipipáltuk, de a másik, a közösségi élet még előttünk áll. Nézzünk hát körül!

- [thoughts-connecting](./thoughts-connecting.md)
- [thoughts-support](./thoughts-support.md)
- [thoughts-learn-more](./thoughts-learn-more.md)
- [glossary](./glossary.md)
