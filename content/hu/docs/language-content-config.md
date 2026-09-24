---
title: "Tartalmak lefordításának beállítása"
description: "Miként tehetjük lefordíthatóvá az egyes tartalmi egységeinket (pl. cikkeket, blogbejegyzéseket stb.)."
id: "language-content-config"
translation_key: "language-content-config"
source_locale: "hu"
---
## Célkitűzés { #language-content-config }

E témakör végére az _Egyéni blokk_, az _Egyéni menühivatkozás_ és a _Tartalom_ entitástípusaink mind fel lesznek készítve arra, hogy egynél több nyelven is képesek legyenek tárolni változatokat. Egyes altípusaikat kiválasztva pedig eldönthetjük majd, hogy azok mely mezőit szeretnénk lefordíthatóvá tenni.
## Szükséges előismeretek

* [planning-data-types](./planning-data-types.md)
* [language-concept](./language-concept.md)
## Webhely előfeltételei

Az alaprendszer _Content Translation_ moduljának engedélyezve, a webhelyen legalább két nyelvnek pedig telepítve kell lennie. Lásd a [language-add](./language-add.md) témakört.
## Lépések

1. A _Kezelés_ adminisztrációs menüben menjünk a _Konfiguráció_ > _Helyek és nyelvek_ > _Tartalom nyelve és fordítás_ útvonalon az _admin/config/regional/content-language_ oldalra.
1. Az _Egyéni nyelvi beállítások_ listában jelöljük be a _Tartalom_, _Egyéni blokk_ és _Egyéni menühivatkozás_ elemeket, hogy ezáltal lefordíthatóvá váljanak.
    <img src="/images/language-content-config_custom.webp" alt="Az egyedi nyelvbeállítások listája" width="193px" />
1. Ekkor az oldal lentebbi részén további részletes beállítások tűnnek fel. Itt választhatjuk ki azokat az altípusokat, amelyeket külön-külön lefordíthatóvá szeretnénk tenni. Mi most ebben a példánkban a _Tartalom_ cím alatt az _Egyszerű oldalt_, az _Egyéni blokk_ cím alatt az _Egyszerű blokkot_, míg az _Egyéni menühivatkozás_ cím alatt az ugyanilyen nevű altípust tesszük lefordíthatóvá.
1. Ellenőrizzük az entitástípusok beállításait az alábbiak szerint:
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
          <td>Alapértelmezés szerinti nyelv</td>
          <td>A webhelyen engedélyezettek közül kiválasztható az a nyelv, amit az ilyen típusú entitások létrehozásukkor kapnak.</td>
          <td>Webhely alapértelmezett nyelve (Magyar)</td>
        </tr>
        <tr>
          <td>Nyelvkiválasztó mutatása a létrehozási és szerkesztési oldalakon</td>
          <td>Eldönthetjük, hogy szeretnénk-e, ha az ilyen típusú entitások létrehozásakor és későbbi módosításakor állítható lenne a nyelvük.</td>
          <td>Bejelölve</td>
        </tr>
      </tbody>
    </table>

    ![A tartalomtípusok első két nyelvi beállítási lehetősége](/images/language-content-config_content.webp)

1. Következő lépésként kiválasztjuk az _Egyszerű oldal_ altípus azon mezőit, amiket lefordíthatóvá szeretnénk tenni (ehhez segítségképpen lásd az alábbi táblázatot). Ha nincs rá szükségünk, hogy nyelvenként eltérő értéket tároljunk abban a mezőben (azaz nem akarjuk lefordíthatóvá tenni), hagyjuk a jelölőnégyzetét üresen. A nem szöveges mezők (például számok és dátumok) lefordításának is lehet jelentősége több szerkesztő és adminisztrátor közötti munkafolyamatok szabályozásának szempontjából.
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
          <td>A tartalomelemnek adott elnevezés.</td>
          <td>Bejelölve</td>
        </tr>
        <tr>
          <td>Szerző</td>
          <td>Az a felhasználó, aki a tartalomelemet létrehozta.</td>
          <td>Üresen hagyva</td>
        </tr>
        <tr>
          <td>Közzététel állapota</td>
          <td>Annak jelzése, hogy a tartalomelem nyilvános-e látogatók előtt vagy sem.</td>
          <td>Bejelölve</td>
        </tr>
        <tr>
          <td>Beküldés ideje</td>
          <td>Az az időpont, amikor a tartalomelem létrejött.</td>
          <td>Üresen hagyva</td>
        </tr>
        <tr>
          <td>Módosítva</td>
          <td>Az az időpont, amikor a tartalomelem utoljára megváltozott.</td>
          <td>Üresen hagyva</td>
        </tr>
        <tr>
          <td>Címlapra helyezve</td>
          <td>Annak jelzése, hogy a tartalomelemnek listázódnia kell-e a webhely címlapján vagy sem.</td>
          <td>Üresen hagyva</td>
        </tr>
        <tr>
          <td>Kiemelt, az oldal tetejére</td>
          <td>Annak jelzése, hogy a tartalomelemnek listázásakor mindig az oldal tetején kell-e megjelennie vagy sem.</td>
          <td>Üresen hagyva</td>
        </tr>
        <tr>
          <td>Webcímálnév</td>
          <td>A szép URL-ek megadása a tartalomelekhez.</td>
          <td>Bejelölve</td>
        </tr>
        <tr>
          <td>Törzs</td>
          <td>A tartalomelem legfőbb része.</td>
          <td>Bejelölve</td>
        </tr>
      </tbody>
    </table>

    ![A lefordíthatónak beállított entitásaltípusok kiválasztható mezői](/images/language-content-config_basic_page.webp)

1. Az előző lépésekben megismert módon válasszuk ki ugyanígy az _Egyszerű blokk_ és _Egyéni menühivatkozás_ entitásaltípusok lefordítani kívánt mezőit is.
1. Kattintsunk a _Beállítások mentése_ gombra.
## Az ismeretek elmélyítése

* [language-config-translate](./language-config-translate.md)
* [language-content-translate](./language-content-translate.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/b_w904_pcTY" title="Tartalmak lefordításának beállítása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

* [Multilingual Drupal 8 tidbits, part 5](http://hojtsy.hu/blog/2013-jun-21/drupal-8-multilingual-tidbits-5-almost-limitless-language-assignment) (azaz „Drupal 8 többnyelvűsítési csemegék, 5. rész”) blogbejegyzés Hojtsy Gábortól angol nyelven.
* [Multilingual Drupal 8 tidbits, part 17](http://hojtsy.hu/blog/2015-jan-27/drupal-8-multilingual-tidbits-17-content-translation-basics) (azaz „Drupal 8 többnyelvűsítési csemegék, 17. rész”) blogbejegyzés szintén Hojtsy Gábortól.

*Közreműködők*

Írta és szerkesztette: [Laura Vass](https://www.drupal.org/u/lolk) ([Pronovix](https://pronovix.com/)), [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)) és [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
