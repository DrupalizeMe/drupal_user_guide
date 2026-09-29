---
title: "Webhely-információk beállítása"
description: "Hogyan lehet a webhelyünket elnevezni, jelmondatunkat feltüntetni rajta és beállítani az alapértelmezett időzónát."
id: "config-basic"
translation_key: "config-basic"
source_locale: "hu"
---
## Célkitűzés { #config-basic }

Változtassuk meg az olyan alapvető információkat webhelyünkön, mint az elnevezése, a jelmondatunk és az alapértelmezett időzónája.
## Szükséges előismeretek

[config-overview](./config-overview.md)
## Lépések
### Először az alapinformációkat adjuk meg

1. A _Kezelés_ adminisztrációs menüben menjünk a _Konfiguráció_ > _Rendszer_ > _Alapvető webhelybeállítások_ oldalra (vagy a címsorban adjuk meg az _admin/config/system/site-information_ útvonalat), ahol a _Webhely részletei_, _Címlap_  és _Hibaoldalak_ keretekben különböző általános beállításokat adhatunk meg.
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
          <td>Webhely részletei > A webhely neve</td>
          <td>Egy tetszőlegesen megválasztott elnevezés, ami azonosítja webhelyünket látogatóink felé, valamint a böngészők címsorában fog megjelenni.</td>
          <td>Bárkifalva Termelői Piac</td>
        </tr>
        <tr>
          <td>Webhely részletei > Jelmondat</td>
          <td>Nem kötelező, de ha van ilyenünk és itt kitöltjük, akkor – sminktől függően – webhelyszerte látható lesz.</td>
          <td>Zamatosat, frissen!</td>
        </tr>
        <tr>
          <td>Webhely részletei > E-mail cím</td>
          <td>A webhelyről kiküldött automatikus rendszerüzenetek (például a regisztráció során, vagy elfelejtett jelszó esetén stb.) feladójaként fog megjelenni.</td>
          <td>irj.nekunk@pelda.hu</td>
        </tr>
      </tbody>
    </table>

    ![Webhely részletei űrlap](/images/config-basic-SiteInfo.png)

1. Miután végeztünk a mezők kitöltésével, kattintsunk a _Beállítások mentése_ gombra, hogy változtatásainkat elmentsük.
### Folytatjuk a területi beállításokkal

1. Ezután a _Kezelés_ adminisztrációs menüben menjünk a _Konfiguráció_ > _Helyek és nyelvek_ > _Területi beállítások_ útvonalon az _admin/config/regional/settings_ oldalra.
1. Töltsük ki az alább felsorolt mezőket ezekkel az értékekkel:
    <table>
      <thead>
        <tr>
          <th>Mező neve</th>
          <th>Magyarázat</th>
          <th>Példaérték</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Honosítás > Alapértelmezés szerinti ország</td>
          <td>Válasszuk ki a legördülő lehetőségek közül azt az országot, amelyet webhelyünk központjának gondolunk.</td>
          <td>Magyarország</td>
        </tr>
        <tr>
          <td>Honosítás > A hét első napja</td>
          <td>A hetekkel kapcsolatos számításokhoz szükséges (pl. naptár funkció).</td>
          <td>hétfő</td>
        </tr>
        <tr>
          <td>Időzónák > Alapértelmezés szerinti időzóna</td>
          <td>Megadhatjuk általánosan, hogy webhelyünk működésének szempontjából mit tekintünk alapidőnek.</td>
          <td>Európa > Budapest</td>
        </tr>
        <tr>
          <td>Időzónák > A felhasználók beállíthatják a saját időzónájukat</td>
          <td>Ha látogatóink várhatóan a világ más pontjairól is használják majd webhelyünket, akkor engedélyezhetjük számukra, hogy felhasználói fiókjukban megadhassák a saját időzónájukat. Ez a dátumok és időpontok megjelenítésekor az átszámítást fogja befolyásolni számukra.</td>
          <td>Nincs bejelölve</td>
        </tr>
      </tbody>
    </table>

    ![Honosítás és Időzónák űrlapok](/images/config-basic-TimeZone.png)

1. Miután végeztünk a mezők kitöltésével, kattintsunk a _Beállítások mentése_ gombra, hogy változtatásainkat elmentsük.
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/oDMCQ1cDYOI" title="Webhely-információk beállítása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

[Getting started with Drupal 8 administration](https://www.drupal.org/node/1896670) (azaz „Hogyan kezdjünk hozzá a Drupal 8 adminisztrációjához”) közösségi dokumentáció a Drupal.org-on angol nyelven.

*Közreműködők*

Írta és szerkesztette: [Sree Veturi](https://www.drupal.org/u/sree), [Michael Lenahan](https://www.drupal.org/u/michaellenahan) ([erdfisch](https://erdfisch.de)), [Antje Lorch](https://www.drupal.org/u/ifrik) és [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
