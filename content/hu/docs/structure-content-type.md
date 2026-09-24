---
title: "Tartalomtípus hozzáadása"
description: "Ebben a témakörben átvesszük, hogyan lehet egy új tartalomtípust definiálni és testreszabni."
id: "structure-content-type"
translation_key: "structure-content-type"
source_locale: "hu"
---
## Célkitűzés { #structure-content-type }

Ebben a témakörben definiáljuk az új „Árus” tartalomtípusunkat és a városi piac webhelyünk igényei szerint testreszabjuk.
## Szükséges előismeretek

[planning-data-types](./planning-data-types.md)
## Webhely előfeltételei

Mielőtt a kivitelezésbe belekezdenénk, javasolt, hogy már legyen egy előzetes tervünk a webhely tartalmi felépítéséről. Ehhez nyújt segítséget a
[planning-structure](./planning-structure.md) témakör.
## Lépések

1. Válasszuk ki a _Kezelés_ adminisztrátori menüben a _Felépítés_ > _Tartalomtípusok_ (_admin/structure/types_) menüpontot. Az ekkor megjelenő oldal felsorolja valamennyi, a webhelyen pillanatnyilag elérhető, kiválasztható tartalomtípust. Megjegyzés: ha többnyelvű webhelyünk adminfelületét nem angolul használjuk, ne lepődjünk meg, ha itt mégis találkozunk angol feliratokkal a [language-concept](./language-concept.md) témakörnél leírtak miatt.
1. Kattintsunk a _Tartalomtípus hozzáadása_ gombra. Az így megnyitott _Tartalomtípus hozzáadása_ oldalon tudunk egy új, tetszőleges mezőkből álló, egyedi működésű tartalomtípust beküldeni. Töltsünk ki minden mezőt a lent látható módon.
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
          <td>Név</td>
          <td>Ez lesz az új tartalomtípusunk megnevezése.</td>
          <td>Árus</td>
        </tr>
        <tr>
          <td>Leírás</td>
          <td>Egy rövid ismertető szöveg pár mondatban, hogy mi célból hoztuk létre és mire való.</td>
          <td>Ismertető az árusokról.</td>
        </tr>
      </tbody>
    </table>

    ![Az új tartalomtípus hozzáadására szolgáló oldal](/images/structure-content-type-add.webp)

1. Az oldal alján, a _Beküldési űrlap beállításai_ függőleges fül alatt pár beállítást meg tudunk adni, hogyan nézzen ki az űrlap, amin keresztül az ilyen típusú tartalmakat lehet majd beküldeni. Töltsünk ki minden mezőt a lent látható módon.
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
          <td>Cím</td>
          <td>Az éppen beküldendő új tartalmi egység _Cím_ mezőjének mi legyen a felirata.</td>
          <td>Árus neve</td>
        </tr>
        <tr>
          <td>Előnézet beküldés előtt</td>
          <td>Szabályozható, hogy a leendő új tartalmakat beküldő adminisztrátoroknak kötelező legyen-e ellenőrizni a beküldés előtt álló tartalmuk előnézetét, mielőtt azt elmentené a rendszer.</td>
          <td>Nem kötelező</td>
        </tr>
        <tr>
          <td>Magyarázat, vagy beküldési irányelvek</td>
          <td>Útmutató a jövőbeli adminisztrátoroknak, hogy hogyan vigyenek fel új _Árusokat_ ezen űrlapon keresztül.</td>
          <td>(üresen hagyható)</td>
        </tr>
      </tbody>
    </table>

    ![Beküldési űrlap beállításai ehhez a tartalomtípushoz](/images/structure-content-type-add-submission-form-settings.webp)

1. A következő, _Közzétételi beállítások_ nevű függőleges fül alatt dönthetünk arról, hogy mi legyen az alapértelmezett publikációs állapota az ilyen típusú tartalmaknak, amikor létrehozzák őket. Töltsünk ki minden mezőt a lent látható módon.
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
          <td>Közzétéve</td>
          <td>A beküldött tartalmi egységet azonnal közzétettként menti a rendszer.</td>
          <td>Bejelölve</td>
        </tr>
        <tr>
          <td>Címlapra helyezve</td>
          <td>Egy általános célú webhelyen ez a beállítás hasznos lehet arra, hogy az új tartalmak rögtön megjelenjenek a címlapon is.</td>
          <td>Nincs bejelölve</td>
        </tr>
        <tr>
          <td>Kiemelt, az oldal tetejére</td>
          <td>Ezt bepipálva biztosítható, hogy az újonnan beküldött ilyen típusú tartalmak minden listázáskor legfelül, a többi elemet megelőzve jelenjenek meg.</td>
          <td>Nincs bejelölve</td>
        </tr>
        <tr>
          <td>Új változat készítése</td>
          <td>Az árus adatlapjának valamennyi módosításakor jöjjön létre egy új, a korábbiakon felüli változat.</td>
          <td>Bejelölve</td>
        </tr>
      </tbody>
    </table>

    Tekintettel arra, hogy most egy vadonatúj tartalomtípust hozunk létre, még nem létezhetnek ilyen típusú tartalmaink. Ellenben egy már létező tartalomtípus beállításai bármikor módosíthatóak a későbbiekben, azonban nem árt tudni, hogy az visszamenőlegesen már nem fogja befolyásolni a korábban már beküldött tartalmakat.
    ![Közzétételi lehetőségek beállítása](/images/structure-content-type-add-Publishing-Options.webp)

1. Eggyel lentebb, a  _Megjelenítési beállítások_ függőleges fül alatt szabályozható, hogy ki legyen-e írva minden ilyen típusú tartalomnál, hogy ki és mikor hozta létre őket a webhelyen. Töltsünk ki minden mezőt a lent látható módon.
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
          <td>Szerző- és dátuminformáció mutatása</td>
          <td>Ha bejelölnénk, akkor minden árus adatlapján automatikusan megjelenne egy kisbetűs sor, hogy melyik adminisztrátor felhasználó melyik napon, hány óra hány perckor hozta létre az adott árus oldalát. Nekünk erre most nincs szükségünk.</td>
          <td>Nincs bejelölve</td>
        </tr>
      </tbody>
    </table>

    ![Megjelenítési beállítások füle](/images/structure-content-type-add-Display-settings.webp)

1. A – valószínűleg – utolsó, _Menübeállítások_ fül van már csak hátra:
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
          <td>Elérhető menük</td>
          <td>Korlátozható, hogy a webhely összes menüje közül melyekhez lehessen az ilyen típusú tartalmakat külön menüpontként hozzáadni. A városi piac webhelyén az árusok túl sokan lennének ahhoz, hogy mindenki megjelenhessen egy menüben, ezért ezt az opciót itt most nem használjuk.</td>
          <td>Nincs bejelölve</td>
        </tr>
      </tbody>
    </table>

    ![Menübeállítások füle](/images/structure-content-type-add-Menu-settings.webp)

1. A _Mentés és mezők kezelése_ gombra kattintva mentsük el a beállításainkat, ezzel létre is hoztuk első saját, ámbár még üres (azaz mezőket még nem használó) tartalomtípusunkat. A sikeres mentést követően rögtön át leszünk irányítva a _Mezők kezelése_ oldalra, ahol elkezdhetjük felvenni a szükséges mezőket, ezzel felépítve tulajdonképpen magát a tartalomtípust. A mezőkről bővebben a [structure-fields](./structure-fields.md) témakörben lesz szó.
    <img src="/images/structure-content-type-add-confirmation.webp" alt="Megerősítés a sikeres mentésről" width="100%" />
1. A fenti lépéssort követve ugyanígy hozzunk létre egy másik, _Recept_ nevű tartalomtípust is, amiben majd az árusok által beküldött recepteket tároljuk. Ugyanazokat a példaértékeket használhatjuk a legtöbb helyen a receptekhez is, mint az árusokhoz. Ahol mégis eltér, ott ezeket a példákat gépeljük be:
    <table>
      <thead>
        <tr>
          <th>Mező neve</th>
          <th>Javasolt kitöltés</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Név</td>
          <td>Recept</td>
        </tr>
        <tr>
          <td>Leírás</td>
          <td>Egy étel elkészítésének leírása, amit egy árus küldött be.</td>
        </tr>
        <tr>
          <td>_Beküldési űrlap beállításai_ fülön Cím mező</td>
          <td>Recept neve</td>
        </tr>
      </tbody>
    </table>
## Az ismeretek elmélyítése

* [structure-fields](./structure-fields.md)
* Telepítsük fel webhelyünkre, és állítsuk be a közösségi [Pathauto](https://www.drupal.org/project/pathauto) modult, amivel az újonnan beküldött tartalmak rögtön kapnak egy automatikusan generált olvasható webcímálnevet. Ezekről többet az [content-paths](./content-paths.md) témakörben olvashatunk, míg a közösségi modulok felderítéséhez a [extend-module-find](./extend-module-find.md), telepítésükhöz pedig a [extend-module-install](./extend-module-install.md) témakörökben kaphatunk hasznos segítséget.
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/vyvqiaaGM1k" title="Egy tartalomtípus hozzáadása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta és szerkesztette: [Sree Veturi](https://www.drupal.org/u/sree), [Boris Doesborg](https://www.drupal.org/u/batigolix), és [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/))
