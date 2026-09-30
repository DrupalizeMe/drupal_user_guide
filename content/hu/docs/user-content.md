---
title: "Felhasználó tartalomhoz rendelése szerzőként"
description: "Így lehet egy már létező tartalomhoz hozzárendelni egy felhasználói fiókot úgy, hogy az szerzőként jelenjen meg."
id: "user-content"
translation_key: "user-content"
source_locale: "hu"
---
## Célkitűzés { #user-content }

Az Árus típusú tartalmainknak módosítani fogjuk a szerzőjét a megfelelő _Csemege Méhészet_ és _Víg Tanya_ felhasználói fiókokra, hogy azokkal belépve az árusok tudják szerkeszteni saját bemutatkozó oldalaikat.
## Szükséges előismeretek

* [user-concept](./user-concept.md)
## Webhely előfeltételei

* Az _Árus_ tartalomtípusnak már léteznie kell, és lehetőleg legalább két ilyen tartalomnak fel kell lennie töltve a webhelyre. Erről bővebben az alábbi részeknél esett szó:
** [content-create](./content-create.md)
** [structure-content-type](./structure-content-type.md)
** [structure-fields](./structure-fields.md)
* Szintén szükségünk lesz legalább két felhasználói fiókra, amit pedig a [user-new-user](./user-new-user.md) részben tárgyaltunk.
## Lépések

1. A _Kezelés_ adminisztrációs menüben menjünk a _Tartalom_ oldalra (vagy a címsorban adjuk meg az _admin/content_ útvonalat).
1. A könnyebb áttekintés kedvéért szűkítsük le a felsorolást a _Tartalomtípus_ legördülőben az _Árus_ lehetőséget választva és a _Szűrő_ gombra kattintva. Így már egyszerűbb megtalálnunk a _Víg Tanya_ árus bemutatkozó oldalát, amely sorának a jobb végén kattintsunk a _Szerkesztés_ gombra.
1. A tartalom szerkesztőoldalán a jobb oldalsávban találjuk a _Szerzői információk_ keretet. (Ha nem lenne nyitva, a fejlécére kattintva nyissuk ki.) A _Szerző_ beviteli mezőbe kezdjük el gépelni a „víg” szót. Az automatikusan megjelenő találatok közül válasszuk ki a _Víg Tanya_ nevűt:
    ![Szerző hozzárendelése az Árus típusú tartalomhoz](/images/user-content.png)
1. Az oldal legalján kattintsunk a _Mentés_ gombra. Ezután egy _Víg Tanya Árus frissítve lett_ állapotüzenet tájékoztat róla, ha a mentés sikeres volt:
    ![Árus típusú tartalom frissítve lett](/images/user-content_updated.png)
1. Ugyanezen lépéseket megismételve rendeljük hozzá a _Csemege Méhészet_ bemutatkozó oldalához a felhasználói fiókjukat szerzőként.
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/yx9u2SCgono" title="Felhasználó tartalomhoz rendelése szerzőként" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta: [Diána Lakatos](https://www.drupal.org/u/dianalakatos) ([Pronovix](https://pronovix.com/)). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/)).
