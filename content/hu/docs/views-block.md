---
title: "Blokk típusú megjelenítő létrehozása egy nézethez"
description: "Így adható egy blokk típusú megjelenítő egy már létező nézethez."
id: "views-block"
translation_key: "views-block"
source_locale: "hu"
---
## Célkitűzés { #views-block }

Adjunk hozzá egy blokk típusú megjelenítőt a már létező _Receptek_ nézetünkhöz, amit így kitehetünk az oldalsávi régióba, hogy a webhely minden oldalán láthatóak legyenek a legutóbb beküldött receptek. Mindezt úgy fogjuk csinálni, hogy közben ugyanennek a nézetnek az _Oldal_ típusú megjelenítőjét nem módosítjuk.
## Szükséges előismeretek

* [views-concept](./views-concept.md)
* [views-parts](./views-parts.md)
* [views-create](./views-create.md)
## Webhely előfeltételei

* Léteznie kell a _Recept_ tartalomtípusnak, aminek kell, hogy legyen egy _Fő kép_ mezője, valamint tanácsos, hogy a webhelyre már fel legyen töltve pár recept típusú tartalom. Ezen állapot elérésében segíthetnek az alábbiak:
** [structure-content-type](./structure-content-type.md)
** [structure-fields](./structure-fields.md)
** [structure-form-editing](./structure-form-editing.md)
** [content-create](./content-create.md)
* Szintén léteznie kell egy _Bélyegkép (100×100 képpont)_ nevű képstílusnak, ami az alaprendszer _Image_ moduljának engedélyezésekor (vagyis a webhely _Általános_ profillal való telepítésekor) jön létre. Ha szükséges, kézzel is bármikor gyorsan összeállítható a [structure-image-style-create](./structure-image-style-create.md) alapján.
* Talán nyilvánvaló, hogy a _Receptek_ nézetnek már léteznie kell. Ha csak véletlenül jutottunk ide, akkor a [views-create](./views-create.md) és [views-duplicate](./views-duplicate.md) részeket érdemes előbb elolvasnunk, mielőtt itt folytathatnánk.
## Lépések

1. Válasszuk ki a _Kezelés_ adminisztrátori menüben a _Felépítés_ > _Nézetek_ menüpontot (vagy a címsorban adjuk meg az _admin/structure/views_ útvonalat). Keressük meg a felsorolásban a _Receptek_ nevű nézetet, és a sorának jobb végén a lenyíló gombon válasszuk a _Szerkesztés_ lehetőséget. Ugyanide érkezünk, ha webhelyünk Receptek oldalán (a címsorban _/receptek_) a _Nézet szerkesztése_ feliratú szövegkörnyezeti hivatkozást használjuk, melyről bővebben a [config-overview](./config-overview.md) részben esett szó.
1. A nézet beállítási képernyőjének tetején a _Megjelenítések_ cím alatt az _Oldal_ nevű megjelenítő mellett kattintsunk a _Hozzáadás_ gombra, és a lenyíló lehetőségek közül válasszuk ki a blokkot:
    ![Blokk típusú megjelenítő hozzáadása](/images/views-block_add-block.webp)

    Rögtön létre is jön az új megjelenítő, és mivel az aktív kiválasztás rákerült, így folytathatjuk a beállítását.

1. Először is írjuk át ennek a megjelenítőnek a belsőleg használt nevét: a _Megjelenített név:_ felirat mellett kattintsunk a hivatkozásra, és a megnyíló _Blokk: A megjelenés neve és leírása_ című ablakban az _Adminisztratív név_ mezőbe írjuk be, hogy „Legutóbbi receptek”. Zárjuk be az ablakot az _Alkalmaz_ gombbal.
1. Az előbb megadott nevén kívül a címét is módosítsuk, ehhez kattintsunk a képernyő három hasábja közül a bal oldalinak a tetején látható _Cím:_ felirat melletti _Receptek_ hivatkozásra, így feljön egy _Legutóbbi receptek: Ennek a nézetnek a címe_ feliratú ablak. Fontos, hogy ne felejtsük a _Mire vonatkozóan_ legördülőből kiválasztani az _Ezen blokk (felülírás)_ lehetőséget, ekkor a mentés gomb felirata megváltozik _Alkalmazás (erre a megjelenítésre)_ szövegre. Címként írjuk be, hogy „Új receptek” és mentsük el az ablakot.
    ![Egyedi cím megadása csak ennek a megjelenítőnek](/images/views-block_title.webp)
1. A lista kimenetének szerkezetét rácsosról formázatlanra eggyel lejjebb, a _Formátum_ cím alatt a _Rács_ hivatkozásra kattintva tudjuk átállítani. Ismét egy ablak jelenik meg, most _Legutóbbi receptek: Milyen legyen a nézet stílusa_ felirattal. Ismét aktiváljuk az egyedi beállítást. Jelöljük be a „Formázatlan lista” lehetőséget, kattintsunk az _Alkalmazás (erre a megjelenítésre)_ gombra, ekkor még egy ablak marad, ahol a formázatlan lista szerkezet beállításait tudjuk finomítani. Ha megfelelnek az alapértelmezett értékek, akkor kattintsunk ismét az _Alkalmaz_ gombra.
1. A kép mező beállításához a _Mezők_ cím alatt kattintsunk a _Tartalom: Fő kép_ elemre, majd a megjelenő _mező: Tartalom: Fő kép beállítása_ ablakban továbbra is az _Ezen blokk (felülírás)_ lehetőséget adjuk meg a _Mire vonatkozóan_ legördülőben. Képstílusként válasszuk a _Bélyegkép (100×100 képpont)_ nevűt, majd az _Alkalmazás (erre a megjelenítésre)_ gombbal mentsük az ablak tartalmát.
    <img src="/images/views-block_image.webp" alt="Képmező Bélyegkép stílussal" width="100%" />
1. Ez a lista csak egy kis blokk lesz az oldalsávon, nem szükséges, hogy szűrőkkel állítani lehessen a kimenetén. Távolítsuk el tehát a hozzávalókat mint szűrési feltételt úgy, hogy a _Szűrési feltétel_ cím alatt a _Tartalom: Összetevők (felfedett)_ hivatkozásra kattintva megnyitjuk az azonos nevű ablakot, és – miután az _Ezen blokk (felülírás)_ opcióval aktiváltuk az egyedi beállítást – az _Eltávolítás_ hivatkozásra kattintunk az ablak alján.
1. Egy időrendi felsorolás esetén, mint most, fontos a sorrendiság megtartása: ezért a _Rendezési szempont_ cím alatt válasszuk a _Hozzáadása_ opciót a lenyíló gombról, majd a megnyíló _Rendezési szempont hozzáadása_ ablak keresőmezőjébe kezdjük el begépelni a „beküldés” szót. Vigyázzunk, mert két találatot is fogunk látni: nekünk itt most az kell, amelyiknek kategóriája „Tartalom”. Miután itt is kiválasztottuk az _Ezen blokk (felülírás)_ opciót, az _Alkalmazás (erre a megjelenítésre)_ gombbal adjuk hozzá a rendezési szempontot.
1. Egy másik ablakra jutunk, ahol további részleteket szükséges még beállítanunk a rendezési szempontról. A _Sorrend_ alatt válasszuk a _Csökkenő rendezés_ lehetőséget, végül kattintsunk ismét az _Alkalmaz_ gombra.
1. Már csak egy dolgot kell beállítanunk, mielőtt végeznénk: a listázott elemek mennyiségét. Mivel szeretnénk, ha ez a kis blokk diszkrét maradna az oldalsávon, ezért a _Lapozó_ cím alatt a _Lapozó használata:_ felirat mellett kattintsunk a hivatkozásra, és az így megnyitott _Legutóbbi receptek: Lapozó kiválasztása_ ablakban jelöljük be a _Lapozható kimenet, mini lapozó_ rádiógombot. Mielőtt alkalmaznánk, továbbra se feledkezzünk meg az egyedi beállításról (_Ezen blokk (felülírás)_ opció), majd a következő ablakban a _Megjelenő elemek száma_ értéknek írjunk be ötöt és mentsük az ablakot.
1. Nézetünk új megjelenítőjének beállítási képernyőjére visszatérve kattintsunk a _Mentés_ gombra annak véglegesítéséhez. Ekkor vagy visszakerülünk a nézetek listájához, vagy újra a Receptek (a címsorban _/receptek_) oldalt látjuk attól függően, hogy az 1. lépésnél milyen irányból érkeztünk. Egy _Receptek nézet elmentve_ állapotüzenet biztosít minket róla, hogy nem dolgoztunk hiába:
    <img src="/images/views-block_recipes.webp" alt="Állapotüzenet a sikeres beállítás után" width="100%" />
1. Minden, amit eddig beállítottunk, csak a nézetünk új, blokk típusú megjelenítőjének létrehozását szolgálta. Az így létrehozott blokkot azonban mindaddig nem fogják látni webhelyünk látogatói, amíg azt egy régiójához nem rendeljük az alapértelmezett sminknek. Tegyük is meg ezt a korábbi [block-place](./block-place.md) részben leírtak szerint: egy „Receptek: Legutóbbi receptek” nevű blokkot kell keresnünk, helye pedig legyen például a _Második oldalsáv_.
1. Lépjünk vissza webhelyünk címlapjára, és máris látni fogjuk az új blokkunkat az oldalsávon:
    <img src="/images/views-block_sidebar.webp" alt="Az új Receptek blokk a címlap oldalsávján" width="100%" />

## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/xrnuekARwYc" title="Blokk típusú megjelenítő létrehozása egy nézethez" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta és szerkesztette: [Laura Vass](https://www.drupal.org/u/lolk) ([Pronovix](https://pronovix.com/)), [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/)).
