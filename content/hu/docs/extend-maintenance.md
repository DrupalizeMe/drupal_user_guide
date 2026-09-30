---
title: "A webhely karbantartási módba kapcsolása"
description: "Hogyan állítsuk webhelyünket karbantartási módba és miként lehet testreszabni a látogatóknak megjelenített szöveget."
id: "extend-maintenance"
translation_key: "extend-maintenance"
source_locale: "hu"
---
## Célkitűzés { #extend-maintenance }

Ebben a részben karbantartási módba állítjuk a webhelyünket, hogy csak azok a felhasználók érhessék el, akiknek megvan az ehhez szükséges jogosultságuk, miközben a többi látogató csak egy tájékoztató szöveget fog látni a webhelyen, bármelyik oldalát is próbálják megnyitni.
## Szükséges előismeretek

[security-concept](./security-concept.md)
## Webhely előfeltételei

Ha lentebb úgy döntünk, hogy a Drusht használjuk ehhez a feladathoz, akkor annak már telepítve kell lennie, melyhez további tudnivalót a [install-tools](./install-tools.md) szakaszban találunk.
## Lépések

Mint számos más művelethez, a karbantartási mód ki- és bekapcsolására is használhatjuk akár az adminfelületet, akár a Drush eszközt.
### A karbantartási mód engedélyezése az adminfelületen keresztül

1. A _Kezelés_ adminisztrációs menüben menjünk a _Konfiguráció_ > _Fejlesztés_ > _Karbantartási mód_ oldalra (vagy a címsorban adjuk meg az _admin/config/development/maintenance_ útvonalat).
1. Töltsük ki az alább felsorolt mezőket ezekkel az értékekkel:
    <table>
      <thead>
        <tr>
          <th>Mező neve</th>
          <th>Magyarázat</th>
          <th>Javasolt kitöltés</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Webhely használata karbantartási módban</td>
          <td>A jelölőnégyzet aktiválásával engedélyezhető.</td>
          <td>Bejelölve</td>
        </tr>
        <tr>
          <td>A karbantartási módban megjelenített üzenet</td>
          <td>Az itt megfogalmazott tájékoztató lesz látható a webhely látogatóinak a karbantartás alatt. A `@site` egy változót jelöl, ami automatikusan behelyettesíti webhelyünk nevét.</td>
          <td>@site jelenleg karbantartás alatt áll, tartalma hamarosan újra elérhető lesz. Addig is köszönjük a türelmet.</td>
        </tr>
      </tbody>
    </table>
1. Kattintsunk a _Beállítások mentése_ gombra.
1. Ellenőrizzük a megváltozott működést: ha most megnyitjuk webhelyünket egy másik böngészőben (amiben nem vagyunk bejelentkezve), akkor az alábbi képhez hasonlót kell látnunk. Ha mégsem, akkor előfordulhat, hogy ki kell ürítenünk a gyorsítótárat, amelynek menete a [prevent-cache-clear](./prevent-cache-clear.md) résznél olvasható.
    <img src="/images/extend-maintenance-mode-enabled.png" alt="Webhely karbantartási módban" width="100%" />

### A karbantartási mód letiltása az adminfelületen keresztül

1. Ha végeztünk a karbantartással, és szeretnénk újra megnyitni a webhelyünket a látogatók előtt, akkor ismét menjünk a _Kezelés_ adminisztrációs menüben a _Konfiguráció_ > _Fejlesztés_ > _Karbantartási mód_ oldalra (vagy címsorban adjuk meg az _admin/config/development/maintenance_ útvonalat).
1. Töltsük ki az alább felsorolt mezőket ezekkel az értékekkel:
    <table>
      <thead>
        <tr>
          <th>Mező neve</th>
          <th>Magyarázat</th>
          <th>Javasolt kitöltés</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Webhely használata karbantartási módban</td>
          <td>A jelölőnégyzet üresen hagyásával letiltható.</td>
          <td>Nincs bejelölve</td>
        </tr>
        <tr>
          <td>A karbantartási módban megjelenített üzenet</td>
          <td>Kikapcsoláskor nem szükséges átfogalmazni, akár üresen is hagyható, de ha nem nyúlunk hozzá, a legközelebbi alkalommal is ugyanez a szöveg használható.</td>
          <td></td>
        </tr>
      </tbody>
    </table>
1. Kattintsunk a _Beállítások mentése_ gombra.
1. Ha most nyitjuk meg ismét webhelyünket egy másik böngészőben, amiben nem vagyunk bejelentkezve, akkor újra a rendes működést kell tapasztalnunk, ahogy az alábbi képen is látható. Ha mégsem, akkor előfordulhat, hogy ki kell ürítenünk a gyorsítótárat, ami a [prevent-cache-clear](./prevent-cache-clear.md) résznél olvasható.
    <img src="/images/extend-maintenance-mode-disabled.png" alt="Webhely rendes üzemmódban működés során" width="100%" />

### A karbantartási mód ki- és bekapcsolása a Drush használatával

1. Ha szeretnénk testreszabni a tájékoztató üzenetet, akkor a fenti lépéseket kövessük.
1. Parancssoros ablakban futtassuk az alábbi utasításokat, amelyek először engedélyezik a karbantartási módot, majd rögtön utána kiürítik a gyorsítótárat:
    ```text
    drush config:set system.maintenance message "opcionális üzenet" -y
    drush state:set system.maintenance_mode 1 --input-format=integer
    drush cache:rebuild
    ```
1. A letiltás nagyon hasonló az előzőekhez, azzal a különbséggel, hogy a karbantartási mód értékét nullára állítjuk:
    ```text
    drush state:set system.maintenance_mode 0 --input-format=integer
    drush cache:rebuild
    ```
1. Bármelyik parancsot is futtatjuk, javasolt ellenőrizni a megváltozott működést úgy, hogy a webhelyünket egy másik böngészőben (amiben nem vagyunk bejelentkezve)  megnyitjuk.
## Az ismeretek elmélyítése

* [security-update-core](./security-update-core.md)
* [security-update-theme](./security-update-theme.md)
* [security-update-module](./security-update-module.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/IQbqQs5h03Q" title="A webhely karbantartási módba kapcsolása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta és szerkesztette: [Boris Doesborg](https://www.drupal.org/u/batigolix), [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)) és
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
