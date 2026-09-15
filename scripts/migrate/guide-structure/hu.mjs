export const guide = {
  locale: "hu",
  title: "Drupal 8 Kézikönyv",
  chapters: [
    {
      id: "preface",
      label: "Előszó",
      summary: "Pár szóban röviden e Kézikönyvről: kinek szól, milyen szerkezetet követ a formázása és tartalma, valamint hogyan a legkönnyebb olvasni.",
      items: [
        "copyright",
        "preface-audience",
        "preface-organization",
        "preface-reporting",
        "preface-conventions",
        "preface-scenario"
      ]
    },
    {
      id: "understanding-chapter",
      label: "Ismerkedés",
      summary: "Legyenek mindenki számára egyértelműek a leggyakrabban használt fogalmak jelentései: mik azok a modulok, sminkek, telepítési profilok stb.",
      items: [
        "understanding-drupal",
        "understanding-modules",
        "understanding-themes",
        "understanding-distributions",
        "understanding-data",
        "understanding-project",
        "understanding-gpl"
      ]
    },
    {
      id: "planning-chapter",
      label: "Tervezés",
      summary: "Megvalósítás előtt áttekintjük, hogyan lenne a legkézenfekvőbb tárolnunk mindazt az adatot, amiből webhelyünk áll: azaz az entitástípusokat.",
      items: [
        "block-regions",
        "planning-layout",
        "planning-data-types",
        "planning-modular",
        "planning-structure",
        "planning-workflow",
        "language-concept"
      ]
    },
    {
      id: "installation-chapter",
      label: "Telepítés",
      summary: "Pár szó a Drupal rendszerkövetelményeiről, valamint hogy azok teljesülésekor hogyan tudjuk működésbe hozni webhelyünket egy webkiszolgálón.",
      items: [
        "install-requirements",
        "install-tools",
        "install-decide",
        "install-prepare",
        "install-composer",
        "install-manual",
        "install-run"
      ]
    },
    {
      id: "config-chapter",
      label: "Alapbeállítások",
      summary: "Folytassuk a webhely legegyszerűbb beállításaival, mint a modulok bekapcsolása, sminkek testreszabása és felhasználói fiókok regisztrálása.",
      items: [
        "config-overview",
        "config-basic",
        "config-install",
        "config-uninstall",
        "config-user",
        "config-theme"
      ]
    },
    {
      id: "content-chapter",
      label: "Oldalkezelés",
      summary: "Majdnem minden, amit magáról a tartalmak szerkesztéséről tudni érdemes: például helybeni szerkesztésük, a címlap kezelése, navigációs menük.",
      items: [
        "content-paths",
        "content-create",
        "content-edit",
        "content-in-place-edit",
        "menu-home",
        "menu-concept",
        "menu-link-from-content",
        "menu-reorder"
      ]
    },
    {
      id: "content-structure-chapter",
      label: "Tartalomszerkezet",
      summary: "A webhely működési hátterének részletes kidolgozása: tartalomtípusok, mezők, taxonómiák, űrlapok, formázók és más izgalmas fogalmak.",
      items: [
        "structure-content-type",
        "structure-content-type-delete",
        "structure-fields",
        "structure-reference-fields",
        "structure-taxonomy",
        "structure-taxonomy-setup",
        "structure-adding-reference",
        "structure-widgets",
        "structure-form-editing",
        "structure-view-modes",
        "structure-content-display",
        "structure-image-styles",
        "structure-image-style-create",
        "structure-image-responsive",
        "structure-text-formats",
        "structure-text-format-config"
      ]
    },
    {
      id: "user-chapter",
      label: "Felhasználókezelés",
      summary: "A webhelyet használó emberekkel kapcsolatos fogalmak, mint például felhasználói és adminfiókok, szerepkörök, jogosultságok megismerése.",
      items: [
        "user-concept",
        "user-admin-account",
        "user-new-role",
        "user-new-user",
        "user-permissions",
        "user-roles",
        "user-content"
      ]
    },
    {
      id: "blocks-chapter",
      label: "Blokkok",
      summary: "Most már semmi nem blokkol minket, hogy megismerjük a blokkokat: mik ezek, mire valók, és hogyan használjuk őket az oldalakon.",
      items: [
        "block-concept",
        "block-create-custom",
        "block-place"
      ]
    },
    {
      id: "views-chapter",
      label: "Listázás nézetekkel",
      summary: "A legnagyszerűbb dolog a Drupalban, a legkevésbé egyértelmű elnevezéssel: nézetek, amik tulajdonképpen listák, és megjelenítőik vannak.",
      items: [
        "views-concept",
        "views-parts",
        "views-create",
        "views-duplicate",
        "views-block"
      ]
    },
    {
      id: "multilingual-chapter",
      label: "Többnyelvűsítés",
      summary: "Alapértelmezetten webhelyünk eddig egy nyelven értett (ami viszont nem kötelezően az angol), de most megtanítjuk több nyelven beszélni is.",
      items: [
        "language-add",
        "language-content-config",
        "language-content-translate",
        "language-config-translate"
      ]
    },
    {
      id: "extend-chapter",
      label: "Továbbfejlesztés",
      summary: "Most már haladó webmesterek vagyunk, így ideje, hogy szétnézzünk a műhelyben, és szerszámosládánk mélyére nyúljunk: fejlesztői eszközök.",
      items: [
        "extend-module-find",
        "extend-maintenance",
        "extend-module-install",
        "extend-theme-find",
        "extend-theme-install",
        "extend-manual-install",
        "install-dev-sites",
        "install-dev-making",
        "extend-deploy",
        "extend-config-versions",
        "extend-git"
      ]
    },
    {
      id: "prevent-chapter",
      label: "Hibaelhárítás",
      summary: "A szakma réme, a gyorsítótár. Miért tartsuk mindig üresen, mi is az a biztonsági mentés, a rendszernapló, és az állapotjelentés.",
      items: [
        "prevent-cache",
        "prevent-cache-clear",
        "prevent-backups",
        "prevent-log",
        "prevent-status"
      ]
    },
    {
      id: "security-chapter",
      label: "Karbantartás",
      summary: "Elkészültünk webhelyünkkel, de legyünk törődő jó gazdája a jövőben is: az alaprendszer biztonsági kiadásai, modul- és sminkfrissítések stb.",
      items: [
        "security-cron-concept",
        "security-cron",
        "security-concept",
        "security-announce",
        "security-update-core",
        "security-update-module",
        "security-update-theme"
      ]
    },
    {
      id: "thoughts-chapter",
      label: "Záró gondolatok",
      summary: "A Drupal két összetevőből áll: a szoftveres részét már kipipáltuk, de a másik, a közösségi élet még előttünk áll. Nézzünk hát körül!",
      items: [
        "thoughts-connecting",
        "thoughts-support",
        "thoughts-learn-more",
        "glossary"
      ]
    }
  ]
};
