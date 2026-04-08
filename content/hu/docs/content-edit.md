---
title: "Tartalmi egységek szerkesztése"
description: "Ebben a témakörben röviden áttekintjük, hogyan tudunk egy már létező tartalmi egységet módosítani, szerkeszteni."
id: "content-edit"
translation_key: "content-edit"
source_locale: "hu"
---
## Célkitűzés { #content-edit }

Frissítjük a nyitvatartási időt a címlapot jelentő tartalmi egységen.
## Szükséges előismeretek

[content-create](./content-create.md)
## Webhely előfeltételei

Már léteznie kell a címlapot jelentő tartalomelemnek. Ehhez lásd az [content-create](./content-create.md) szakaszt.
## Lépések

1. A _Kezelés_ adminisztrációs menüben menjünk a _Tartalom_ (címsorban _admin/content_) oldalra.
1. Ha a szerkeszteni kívánt tartalomelem nemrég jött létre vagy frissült, a tartalomlista tetején jelenik meg. Ha régebbi, akkor a _Típus_, a  _Cím_ vagy egyéb szűrők használatával is rákereshetünk.
    <img src="/images/content-edit-admin-content.png" alt="Tartalmak adminsztrációs oldala" width="100%" />
1. Kattintsunk a _Szerkesztés_ gombra annak az elemnek (Címlap) a sorában, amit módosítani szeretnénk. A _Törzs_ mezőben tudjuk átírni a nyitvatartási időt. A többi beviteli mező leírását lásd az előző, [content-create](./content-create.md) témakörnél.
1. Ha még nincs bejelölve a négyzet az _Új változat készítése_ opció mellett a jobb oldalsáv „Közzétéve” feliratú keretében, akkor tegyük meg: ekkor megjelenik a _Változatnapló-üzenet_ szövegmező, ahová beírhatunk egy tömör kis emlékeztetőt, hogy éppen mit módosítottunk most. Ezen megjegyzések sorozatából épül fel egy tartalomegység változattörténete.
    ![Változatnapló-üzenet beviteli mezője a tartalomszerkesztési oldalon](/images/content-edit-revision.png)
1. A _Mentés és megtartás közzétettként_ gombra kattintva menthetjük el új változtatásainkat.
1. Ezután visszakerülünk a _Tartalom_ nevű áttekintőoldalra, valamint megjelenik egy rendszerüzenet, miszerint az előbb szerkesztett tartalom sikeresen frissült.
    ![Rendszerüzenet a frissült tartalomról](/images/content-edit-message.png)
## Az ismeretek elmélyítése

Az első két lépésben bemutatott szokványos módon túl másféleképpen is el lehet érni a szerkeszteni kívánt tartalmat:

1. Webhelyünk címlapjáról indulva a navigációs menükön keresztül megkereshetjük, hogy hol van a látogatóknak megjelenített tartalom.
1. A legtöbb smink megjelenít egy _Szerkesztés_ hivatkozást vagy fület közel az oldal tetejéhez, de csak azoknak a felhasználóknak, akiknek megvan a szükséges jogosultsága ehhez a művelethez. Mivel nekünk megvan, ezért erre kattintva szintén a fentebb is látott tartalomszerkesztési oldalra jutunk.
1. Használhatjuk a helybeni szerkesztőt is, melyről bővebben az [content-in-place-edit](./content-in-place-edit.md) témakörben lesz szó.
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/TAFZMcuOqG0" title="Tartalmi egységek szerkesztése" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta: [Chris Dart](https://www.drupal.org/u/chris-dart) és [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
