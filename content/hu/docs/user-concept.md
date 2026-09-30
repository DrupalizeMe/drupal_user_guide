---
title: "Alapfogalmak: felhasználói fiókok, szerepkörök és jogosultságok"
description: "A felhasználói fiókok, jogosultságok és szerepkörök áttekintése."
id: "user-concept"
translation_key: "user-concept"
source_locale: "hu"
---
## Kik is azok a felhasználók? { #user-concept }

Bárki, aki ellátogat az oldalunkra (saját magunkat is beleértve), _felhasználó_. Alapesetben három felhasználói szintet különböztetünk meg:

* A be nem jelentkezett, vagyis _Névtelen_ felhasználókat,
* A bejelentkezett, vagyis _Azonosított_ felhasználókat,
* Illetve az adminisztratív felhasználói fiókot, vagyis az oldaltelepítés közben automatikusan létrejött _Egyes számú_ felhasználót. Erről bővebben lásd: [user-admin-account](./user-admin-account.md).
## Mik a jogosultságok?

A webhelyünkön végrehajtott műveleteket (például a tartalmak megtekintése, szerkesztése, vagy a beállítások módosítása) a _jogosultságok_ teszik lehetővé számunkra. Minden jogosultság rendelkezik egy beszédes elnevezéssel (például _Közzétett tartalom megtekintése_), mely lefedi magát a műveletet vagy annak egy részhalmazát. A kívánt műveletet csak a kellő jogosultság birtokában tudjuk végrehajtani. A jogosultságokat a műveleteket végrehajtó modulok határozzák meg.
## Mik a szerepkörök?

A jogosultságok konkrét felhasználókhoz való rendelése helyett azokat először _szerepkörökhöz_ adjuk hozzá. Webhelyünkön a még azonosítatlan látogatókat a _Névtelen felhasználó_ szerepkör, míg a már belépetteket pedig az _Azonosított felhasználó_ szerepkör fedi le. E két alapértelmezetten létrejövő szerepkör mellé természetesen bármennyi sajátot is létrehozhatunk, melyeknek mind különböző jogosultságokat engedélyezhetünk.

Minden felhasználói fiók automatikusan az _Azonosított felhasználó_ szerepkörbe kerül, emellett igény esetén további szerepkörökhöz is hozzá tudjuk őket rendelni. Ha egy felhasználói fiókot felruházunk egy szerepkörrel, az bejelentkezés után annak minden tulajdonságával és jogosultságával rendelkezni fog.

Általában tanácsos inkább több szerepkört létrehozni webhelyünkön. A termelői piac példánknál maradva a következők hasznosak lehetnek:

* Egy _Árus_ szerepkör, mely engedélyezi a kereskedőknek a saját kereskedői oldaluk szerkesztését,
* Egy _Tartalomkezelő_ szerepkör, mellyel az általános termelői piaci oldalak szerkesztése lehetséges,
* Egy _Felhasználókezelő_ szerepkör, mely a kereskedők fiókjainak szerkesztésére jogosult,
* Az _Adminisztrátor_ szerepkör, ami az oldal telepítése során már létrejött a fejlesztők számára, a webhelybeállítások kezeléséhez.
## Kapcsolódó témák

* [user-new-role](./user-new-role.md)
* [user-permissions](./user-permissions.md)
* [user-roles](./user-roles.md)
* [user-new-user](./user-new-user.md)
* [user-admin-account](./user-admin-account.md)
* [user-content](./user-content.md)
## Egyéb források

* Közösségi dokumentáció a _Drupal.org_-on: [Users, roles and permissions](https://www.drupal.org/node/120614) (angol nyelven)
* Közösségi dokumentáció a _Drupal.org_-on: [Managing Users](https://www.drupal.org/docs/7/managing-users) (angol nyelven)
* Közösségi dokumentáció a _Drupal.org_-on: [User Roles](https://www.drupal.org/node/1803614) (angol nyelven)

*Közreműködők*

E témakör szövegét [Mark LaCroix](https://www.drupal.org/u/mark-lacroix), [Boris Doesborg](https://www.drupal.org/u/batigolix) és [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) a Drupal közösségi [dokumentációjának](https://www.drupal.org/documentation) [User Roles](https://www.drupal.org/node/1803614) (azaz „Szerepkörök”) című szócikkéből vette át, melynek szerzői joga 2000–2026 között annak egyéni közreműködőié. Fordította: [Péter Dominika](https://www.drupal.org/u/docsi) ([Brainsum](https://www.drupal.org/brainsum)).
