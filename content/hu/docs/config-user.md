---
title: "A Fiókbeállítások kezelése"
description: "Beállítjuk, hogyan lehessen a webhelyünkön regisztrálni, és megértjük a felhasználói fiókok működésének szabályozását."
id: "config-user"
translation_key: "config-user"
source_locale: "hu"
---
## Célkitűzés { #config-user }

Tiltsuk le webhelyünkön a regisztrációs lehetőséget, így csak az adminisztrátorok hozhatnak majd létre fiókokat az egyes árusoknak. Ha már úgyis ott járunk, egyúttal testreszabjuk az árusoknak automatikusan kiküldött értesítő e-mailek szövegét is.
## Szükséges előismeretek

[config-overview](./config-overview.md)
## Lépések

1. A _Kezelés_ adminisztrációs menüben menjünk a _Konfiguráció_ > _Felhasználók_ > _Fiókbeállítások_ oldalra (vagy a címsorban adjuk meg az _admin/config/people/accounts_ útvonalat).
1. Az _Új felhasználó létrehozása és törlése_ keretben a _Ki hozhat létre új felhasználót?_ kérdés alatt válasszuk a „Csak az adminisztrátorok” lehetőséget. Arra az esetre, ha a jövőben változtatunk a regisztrációs szabályokon a webhelyünkön, akkor az „E-mail cím valódiságának ellenőrzése, amikor egy látogató létrehoz egy fiókot” jelölőnégyzetet érdemes lesz engedélyeznünk.
    ![Fióklétrehozás csak adminisztrátor által](/images/config-user_account_reg.webp)
1. Ha szeretnénk különválasztani a Termelői Piac webhelyünk által automatikusan kiküldött valamennyi e-mail közül a csak felhasználói fiókokkal kapcsolatosakat, akkor itt megadhatunk egy alapértelmezett e-mail címet, amiről az ilyen levelek menni fognak, és feladóként látszik majd az árusok postafiókjában. Egy ilyen postafiók beállítása például hasznos lehet arra is, hogy az adminisztrátorok az árusokkal a webhellyel kapcsolatban kommunikáljanak egymással.
    ![Az automata értesítések feladó e-mail címe](/images/config-user_from_email.webp)
1. Természetesen nemcsak a kimenő levelek feladóját, hanem azok szövegét is kedvünk szerint szerkeszthetjük az _E-mailek_ cím alatti függőleges füleken le-föl mozogva. Mindegyik szöveg más-más esetben lesz használva, amikor a felhasználói fiókokkal kapcsolatban változás történik. Ha például szeretnénk módosítani az árusnak küldött üdvözlőlevelet, akinek éppen a fiókját létrehoztuk, akkor a legelső fül „Törzs” mezőjében fogalmazzuk át a levél szövegét:
    <img src="/images/config-user_email.webp" alt="Felhasználói fiókokkal kapcsolatos események e-mail értesítőinek sablonszövegei" width="100%" />

    Összesen kilenc sablonszöveget tartalmaz az alaprendszer, melyeket itt már magyarra lefordítva láthatunk. Ezek közül az alábbi három használata külön-külön is engedélyezhető:
    * Felhasználó aktiválása
    * Zárolt felhasználó
    * A felhasználói fiók törölve lett
1. Végül pedig mentsük el módosításainkat a _Mentés_ gombra kattintva.
## Az ismeretek elmélyítése

* [prevent-cache-clear](./prevent-cache-clear.md)
* [user-new-user](./user-new-user.md)
## Kapcsolódó témák

A [user-chapter](./index.md#user-chapter) szakaszban még több szó esik majd a felhasználói fiókok működéséről és a velük járó jogosultságok kezeléséről.
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/POhQTAX93R8" title="A Fiókbeállítások kezelése" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

A [Security Guide](https://www.drupal.org/security/secure-configuration) (azaz „Biztonsági útmutató”) további megfontolásra érdemes biztonsági szempontot ismertet angol nyelven.

*Közreműködők*

Írta és szerkesztette: [Laura Vass](https://www.drupal.org/u/lolk) ([Pronovix](https://pronovix.com/)) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
