---
title: "A tartalom lefordítása"
description: "Így hozzuk létre egy tartalomelem más nyelvre lefordított változatát."
id: "language-content-translate"
translation_key: "language-content-translate"
source_locale: "hu"
---
## Célkitűzés { #language-content-translate }

Ebben a részben lefordítjuk webhelyünk címlapját spanyolra.
## Szükséges előismeretek

[language-concept](./language-concept.md)
## Webhely előfeltételei

* Annak a tartalomelemnek, amely címlapként lesz kiválasztva, már léteznie kell. Ehhez lásd az [content-create](./content-create.md) szakaszt.

Az alaprendszer _Content Translation_ moduljának engedélyezve kell lennie, és a webhelyen legalább két nyelvnek telepítve kell lennie. Lásd a [language-add](./language-add.md) témakört.

* Az _Egyszerű oldal_ tartalomtípus beállításai között engedélyezve kell lennie a lefordíthatóságának. Ennek mikéntjét a [language-content-config](./language-content-config.md) témakör tartalmazza.
## Lépések

1. A _Kezelés_ adminisztrációs menüben menjünk a _Tartalom_ (_admin/content_) oldalra.
1. Keressük ki a címlapot jelentő tartalomelemet. Beírhatjuk a kereső Cím mezőjébe is.
1. Ha megtaláltuk, a sorának a jobb oldalán válasszuk a lenyíló gombon a _Fordítás_ lehetőséget. Ekkor megjelenik a _Címlap fordításai_ oldal.
1. Kattintsunk a _Hozzáadás_ gombra a _spanyol_ nyelv sorában.
    <img src="/images/language-content-translate-add.webp" alt="Egy tartalmi fordítás felvitele" width="100%" />
1. Ne lepődjünk meg, a következő oldalon az adminfelület nyelve automatikusan spanyolra vált. Ha szeretnénk átváltani egy másik nyelvre, egyszerűen csak írjuk át a böngésző címsorában az _es_ szócskát például _hu_-ra a magyar nyelvhez. Tehát ha ezt látjuk a címsorban: _pelda.hu/es/node/5/translations/add/en/es_, akkor a legelső _es_-t kell cserélni, ami rögtön a pelda.hu doménnév után következik.
1. Töltsünk ki minden mezőt a lent látható módon. Szükség lesz majd a jobb oldalpanelen az _Útvonal beállításai_ fülre kattintani, hogy elérhetővé váljon a _Webcímálnév_ feliratú beviteli mező.
    <table>
      <thead>
        <tr>
          <th>Mező felirata</th>
          <th>Magyarázat</th>
          <th>Javasolt kitöltés</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Cím</td>
          <td>Az adott oldalnak adott cím lefordítva</td>
          <td>Página principal</td>
        </tr>
        <tr>
          <td>Törzs</td>
          <td>Ugyanennek az oldalnak a szintén lefordított fő szövegrésze</td>
          <td>Bienvenido al mercado de la ciudad - ¡el mercado de agricultores de tu barrio! Horario: Domingos de 9:00 a 14:00. Desde Abril a Septiembre. Lugar: parking del Banco Trust número 1. En el centro de la ciudad</td>
        </tr>
        <tr>
          <td>Útvonal beállításai > Webcímálnév</td>
          <td>Az oldal eredeti nyelvétől eltérő, lefordított útvonalálnevet is megadhatunk.</td>
          <td>pagina-principal</td>
        </tr>
      </tbody>
    </table>
1. Kattintsunk a _Mentés és megtartás közzétettként (ez a fordítás)_ gombra.
1. Ha most a webhelyünk címlapját megnyitjuk, immár a spanyol nyelvű oldal fogad minket.
## Az ismeretek elmélyítése

* A fenti lépéseket követve fordítsuk le még több oldalunkat, így nagyobb gyakorlatot szerezhetünk.
* [language-config-translate](./language-config-translate.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/TOalcUYD5zM" title="A tartalom lefordítása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta: [Boris Doesborg](https://www.drupal.org/u/batigolix). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
