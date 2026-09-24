---
title: "Blokk régióba helyezése"
description: "Így helyezhetünk el egy blokkot egy régióban."
id: "block-place"
translation_key: "block-place"
source_locale: "hu"
---
## Célkitűzés { #block-place }

A _Helyszín és nyitvatartás_ blokk megjelenítése a webhely oldalsávjában.
## Szükséges előismeretek

[block-concept](./block-concept.md)
## Webhely előfeltételei

* Az alaprendszer Bartik sminkjét telepíteni kell és alapértelmezettként beállítani. Lásd: [config-theme](./config-theme.md).
* A _Helyszín és nyitvatartás_ blokknak léteznie kell. Lásd: [block-create-custom](./block-create-custom.md).
## Lépések

1. Válasszuk ki a _Kezelés_ adminisztrátori menüben a _Felépítés_ > _Blokk elrendezés_ (_admin/structure/block_) menüpontot. Megjelenik a smink régióit listázó _Blokk elrendezés_ oldal.
1. A másodlagos füleken az alaprendszer Bartik sminkjének kell kiválasztva lennie. A blokkelhelyezés sminkenként van meghatározva.
1. Kattintsunk a listában a _Második oldalsáv_ régió melletti _Blokk elhelyezése_ gombra. Megjelenik az összes blokkot felsoroló _Blokk elhelyezése_ ablak.
1. A _Helyszín és nyitvatartás_ blokk mellett kattintsunk a _Blokk elhelyezése_ gombra. Megjelenik a _Blokk beállítása_ ablak. Töltsünk ki minden mezőt a lent látható módon.
    <table>
      <thead>
        <tr>
          <th>Mezőnév</th>
          <th>Leírás</th>
          <th>Érték</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Cím</td>
          <td>A leendő blokk címeként megjeleníteni kívánt szöveg</td>
          <td>Helyszín és nyitvatartás</td>
        </tr>
        <tr>
          <td>Cím megjelenítése</td>
          <td>Megjelenjen-e a cím is a blokkal együtt?</td>
          <td>Bejelölve</td>
        </tr>
        <tr>
          <td>Régió</td>
          <td>Az adott smink mely régiójában, azaz az oldalak mely részén legyen elhelyezve a blokk?</td>
          <td>Második oldalsáv</td>
        </tr>
      </tbody>
    </table>

    Bizonyos oldalakon elrejthetjük és megjeleníthetjük a blokkot. A Termelői piac webhely esetében nem kell megadni egyik beállítást sem, mert a blokkot mindenhol meg szeretnénk jeleníteni.
    <img src="/images/block-place-configure-block.webp" alt="Blokk beállítása oldal" width="100%" />

1. Kattintsunk a _Blokk mentése_ gombra, így ismét a _Blokk elrendezés_ oldalt látjuk. Az egy régión belül való megjelenítési sorrendjük módosításához a blokkok a keresztnyíl ikonjukra kattintva fogd-és-vidd módszerrel áthúzhatók egymás fölött. Ha valami miatt ez nem működne, akkor a _Sorok súlyának mutatása_ hivatkozásra kattintva megjelennek a sorszámaik: míg a nagyobb súlyúak (képzeletben „nehezebbek”) lesüllyednek, addig a kisebb súlyúak („könnyebbek”) feljebb kerülnek.
1. Győződjünk meg róla, hogy a _Helyszín és nyitvatartás_ blokk szerepel a _Második oldalsáv_ régióban, majd kattintsunk lent a _Blokkok mentése_ gombra.
    A blokk innentől az alaprendszer Bartik sminkjét használó minden oldal oldalsávjában megjelenik.
    <img src="/images/block-place-sidebar.webp" alt="A Második oldalsáv régióban blokkal rendelkező oldal" width="100%" />

## Az ismeretek elmélyítése

* Távolítsuk el a _Drupal működteti_ blokkot a _Lábléc_ régióból úgy, hogy a sorában a lenyíló gomb _Letiltás_ lehetőségét választjuk. Így a jövőben bármikor könnyen és gyorsan visszakapcsolhatjuk ugyanezen beállításait megtartva. Ha viszont az _Eltávolítás_ opcióval töröljük, akkor legközelebb újra be kell majd állítanunk, amikor hozzá szeretnénk adni egy régióhoz. Megjegyzés: ha többnyelvű webhelyünk adminfelületét nem angolul használjuk, ne lepődjünk meg, ha itt mégis találkozunk angol feliratokkal a [language-concept](./language-concept.md) témakörnél leírtak miatt.
* Vegyük ki az _Eszközök_ blokkot az _Első oldalsáv_ régióból az előző lépésben leírt módon. Ez a blokk csak bejelentkezett felhasználók számára lesz látható.
* Helyezzük a _Bejelentkezés_ blokkot egy régióba.
* Ha nem látjuk azonnal a változtatásaink eredményét, szükség lehet a gyorsítótár kiürítésére. Ehhez lásd: [prevent-cache-clear](./prevent-cache-clear.md).
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/iWW7Ja5p0hA" title="Blokk régióba helyezése" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta és szerkesztette: [Boris Doesborg](https://www.drupal.org/u/batigolix) és [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [balagan](https://www.drupal.org/u/balagan).
