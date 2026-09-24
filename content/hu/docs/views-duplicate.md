---
title: "Nézet létrehozása lemásolással"
description: "Így hozhatunk létre egy új listázó oldalt a webhelyen egy már létező nézet lemásolásával."
id: "views-duplicate"
translation_key: "views-duplicate"
source_locale: "hu"
---
## Célkitűzés { #views-duplicate }

Létrehozunk egy új, recepteket listázó oldalt úgy, hogy egyszerűen megkettőzzük a már létező _Árusok_ nézetet, majd átállítjuk a tartalmát, kinézetét és szűrőjét.
## Szükséges előismeretek

* [views-concept](./views-concept.md)
* [views-parts](./views-parts.md)
* [views-create](./views-create.md)
## Webhely előfeltételei

* Az _Árus_ és _Recept_ tartalomtípusoknak már létezniük kell. Mindkettőnek kell lennie _Fő kép_ mezőjének, valamint utóbbinak egy _Összetevők_ mezőjének is. Azért, hogy ki tudjuk majd próbálni az elkészült listázót, nem árt, ha van pár receptünk már feltöltve. Mindehhez a következő részek hasznosak lehetnek:
** [structure-content-type](./structure-content-type.md)
** [structure-fields](./structure-fields.md)
** [structure-taxonomy-setup](./structure-taxonomy-setup.md)
** [structure-form-editing](./structure-form-editing.md)
** [content-create](./content-create.md)
* Talán szükségtelen mondani, hogy az _Árusok_ nevű nézetnek, amit másolni tervezünk, már léteznie kell. Ha még nincs, akkor a [views-create](./views-create.md) rész kínál segítséget a létrehozásához.
## Lépések

1. Válasszuk ki a _Kezelés_ adminisztrátori menüben a _Felépítés_ > _Nézetek_ menüpontot (vagy a címsorban adjuk meg az _admin/structure/views_ útvonalat). Keressük meg a felsorolásban az _Árusok_ nevű nézetet, és a sorának jobb végén a lenyíló gombon válasszuk a _Megkettőzés_ lehetőséget. Megjegyzés: ha többnyelvű webhelyünk adminfelületét nem angolul használjuk, ne lepődjünk meg, ha itt találkozunk angol feliratokkal a [language-concept](./language-concept.md) témakörnél leírtak miatt.
    <img src="/images/views-duplicate_duplicate.webp" alt="Létező nézet megkettőzése" width="100%" />
1. Adjunk nevet az így megnyíló oldalon, írjuk be a _Nézet neve_ mezőbe, hogy „Receptek”. A _Megkettőzés_ gombra kattintva immár az újonnan létrejött nézet beállítási oldalára jutunk.
1. Az előbb megadott nevén kívül a címét is módosítanunk kell, hiszen azt még örökölte elődjétől. Ehhez kattintsunk a képernyő három hasábja közül a bal oldalinak a tetején látható _Cím:_ felirat melletti _Árusok_ hivatkozásra, erre feljön egy _Oldal: Ennek a nézetnek a címe_ feliratú ablak. Írjuk be ide is, hogy „Receptek”, majd kattintsunk az _Alkalmaz_ gombra:
    <img src="/images/views-duplicate_title.webp" alt="Nézet címének módosítása" width="100%" />

    Az ablak bezárultával megjelenik egy figyelmeztetés az oldal tetején: _Nem mentett változások vannak._

1. A lista kimenetének szerkezetét táblázatosról rácsosra eggyel lejjebb, a _Formátum_ cím alatt a _Táblázat_ hivatkozásra kattintva tudjuk átállítani. Ismét egy ablak jelenik meg, most _Oldal: Milyen legyen a nézet stílusa_ felirattal. Jelöljük be a „Rács” lehetőséget, kattintsunk az _Alkalmazás_ gombra, de ekkor még marad egy ablak, ahol a rácsos szerkezet beállításait tudjuk finomítani. Ha megfelelnek az alapértelmezett értékek, akkor kattintsunk ismét az _Alkalmaz_ gombra.
1. Mi most csak a receptek címét és fotóját szeretnénk használni a listában, ezért a _Mezők_ cím alatt kattintsunk a _Tartalom: Törzs_ (esetleg _Content: Body_) elemre, majd a megjelenő ablak alján az _Eltávolítás_ hivatkozásra.
1. Haladjunk tovább lefelé, és most a _Szűrési feltétel_ cím alatt módosítsuk, hogy *mit* listázzon a nézet. Az elődjétől megörökölt _Tartalom: Tartalomtípus (= Árus)_ beállításra kattintva a felnyíló _Szűrési feltétel: Tartalom: Tartalomtípus beállítása_ című ablakban engedélyezzük a _Recept_ jelölőnégyzetét, és tiltsuk le az _Árus_-ét. Bezáráshoz kattintsunk megint az _Alkalmaz_ gombra.
1. Egy további feltétel szűrési lehetőségként való beállításához használjuk a _Hozzáadása_ opciót a lenyíló gombról. A megjelenő _Szűrési feltételek hozzáadása_ ablak keresőmezőjébe kezdjük el begépelni az „összetevők” szót. Ha megtaláltuk az így leszűkített listában az _Összetevők (field_osszetevok)_ elemet, akkor jelöljük be, és a _Szűrési feltételek hozzáadása és beállítása_ gombra kattintva lépjünk át a következő ablakra.
1. Hasonlóan az előbbi rácsos szerkezethez, itt is szükséges még további részleteket beállítanunk a szűrőhöz használt szótárat illetően. Kattintsunk az _Alkalmazás és folytatás_ gombra. A következő ablak lehetővé teszi, hogy megjelenítsük (másképpen szólva felfedjük) a szűrési lehetőséget a felhasználók számára, hogy kedvük szerint használják listázáskor. Töltsük ki a mezőket az alábbiak szerint, majd végül kattintsunk ismét az _Alkalmaz_ gombra:
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
          <td>A szűrő megjelenítése a látogatók számára, hogy módosíthassák azt</td>
          <td>Magától értetődő.</td>
          <td>Bejelölve</td>
        </tr>
        <tr>
          <td>Szükséges</td>
          <td>Kötelezően elvárt-e, hogy a lista csak akkor jelenjen meg, ha ennek a szűrési feltételnek is van értéke.</td>
          <td>Nincs bejelölve</td>
        </tr>
        <tr>
          <td>Felirat</td>
          <td>Az ehhez a szűrési feltételhez kiírt szöveg</td>
          <td>Recept ezekkel a hozzávalókkal…</td>
        </tr>
      </tbody>
    </table>

    ![Felfedett szűrő](/images/views-duplicate_expose.webp)

1. Végeztünk a képernyő bal oldali hasábjával, most jön a középső. A nézet webcímének módosításához az _Oldalbeállítások_ alatti _Útvonal:_ felirat mellett kattintsunk a _/arusok_ hivatkozásra. Az így megnyíló _Oldal: A nézet menüútvonala vagy webcíme_ ablakban írjuk be a kívánt útvonalat: „receptek”, majd zárjuk be az _Alkalmaz_ gombra kattintva.
    Fontos észben tartani (mindaddig, amíg talán egyszer a jövőben ki nem javítják), hogy a nézetek szerkesztésekor kivételesen *nem kell* kezdő per („/”) jelet tenni az útvonalak elé, miközben mindenhol máshol az adminfelületen igen.
1. Változtassuk meg az új nézet navigációban való megjelenését is. Ehhez kattintsunk eggyel lejjebb a _Menü:_ felirat mellett az _Általános: Árusok_ hivatkozásra, a megnyíló ablakban írjuk át a menüpont nevét „Receptek” szóra, és zárjuk be.
1. Végül próbáljunk ki egy funkciót a képernyő jobb oldali hasábjából is: a _Haladó_ keretet kinyitva az _Egyéb_ cím alatt az _Ajax használata_ (lásd az [Ajax szócikket](./glossary.md#glossary-ajax) a Szójegyzékben) felirat melletti hivatkozásra kattintva engedélyezzük azt a megnyíló ablakban.
1. Új nézetünk beállítási képernyőjére visszatérve kattintsunk a _Mentés_ gombra annak véglegesítéséhez.
1. Lépjünk vissza webhelyünk címlapjára, és a navigációban a _Receptek_ menüpontot kiválasztva győződjünk meg róla, hogy valóban kilistázza-e a már felvitt receptjeinket.
    <img src="/images/views-duplicate_final.webp" alt="Az elkészült Receptek nézet" width="100%" />

## Az ismeretek elmélyítése

Elképzelhető, hogy ekkor még a navigációban nem pont abban a sorrendben jelenik meg a nézetre mutató menüpont, ahogy mi jónak látnánk. A kívánt pozícióba rendezéséről a [menu-reorder](./menu-reorder.md) részben esett szó.
## Kapcsolódó témák

* [planning-structure](./planning-structure.md)
* [Ajax entry in the Glossary](./glossary.md#glossary-ajax)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/weWFDgw84_M" title="Nézet létrehozása lemásolással" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta és szerkesztette: [Laura Vass](https://www.drupal.org/u/lolk) ([Pronovix](https://pronovix.com/)) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/)).
