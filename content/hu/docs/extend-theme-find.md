---
title: "Sminkek feltérképezése"
description: "A legjobb módja annak, hogy a Drupal.org-on közösségi sminkeket keressünk és válogassunk az elérhető kínálatból."
id: "extend-theme-find"
translation_key: "extend-theme-find"
source_locale: "hu"
---
## Célkitűzés { #extend-theme-find }

Ebben a részben hasznos szempontokat tekintünk át, amelyek mentén a Drupal.org-on közzétett sminkek alkalmasságát megvizsgálhatjuk.
## Szükséges előismeretek

* [understanding-drupal](./understanding-drupal.md)
* [understanding-themes](./understanding-themes.md)
## Lépések

1. Először is nyissuk meg a [Drupal.org](https://www.drupal.org) _Download & Extend_ > _Themes_ aloldalát. (https://www.drupal.org/project/project_theme). (Mivel ez a webhely a nemzetközi Drupal közösséget szolgálja, ezért minden oldala angol nyelvű, ezt nem tüntetjük fel a továbbiakban – _a ford._)
1. Ekkor még rengeteg, több tízezer találatot látunk felsorolva. A könnyebb átláthatóság kedvéért szűkítsük le a listát a keresési űrlap alábbiak szerinti kitöltésével:
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
          <td>Maintenance status</td>
          <td>Milyen gyakran van a smink karbantartva? Ha aktívan, akkor a hibajavítások rendszeres időközönként várhatóak.</td>
          <td>Actively maintained</td>
        </tr>
        <tr>
          <td>Development status</td>
          <td>Milyen mélységűek a sminket érintő fejlesztések? Az _Under active development_ kiválasztásával új funkciók jelenhetnek meg, míg mások módosulhatnak. A _Maintenance fixes only_ esetén viszont a smink viszonylag késznek tekinthető.</td>
          <td>Any</td>
        </tr>
        <tr>
          <td>Core compatibility</td>
          <td>Az alaprendszer melyik főverziójával kompatibilis a smink?</td>
          <td>8.x</td>
        </tr>
        <tr>
          <td>Status</td>
          <td>Míg a „Sandbox projects” csak kísérleti projektek, addig a „Full projects” alattiak már átestek az elfogadási folyamaton, de még fejlesztés alatt állhatnak.</td>
          <td>Full projects</td>
        </tr>
        <tr>
          <td>Stability</td>
          <td>A smink gazdája ajánlja-e azt éles webhelyen való használatra vagy még nem.</td>
          <td>Has a supported stable release</td>
        </tr>
        <tr>
          <td>Security advisory coverage</td>
          <td>Annak jelzése, hogy a _Drupal Security Team_ egyik tagja átvizsgálta-e már a sminket biztonsági szempontból.</td>
          <td>Has security advisory coverage</td>
        </tr>
        <tr>
          <td>Search themes</td>
          <td>A smink ismertető leírásában kereső szabadszavas beviteli mező, amibe bármit beírhatunk, ha tudjuk, mire keresünk. Ha nem, akkor üresen is hagyhatjuk.</td>
          <td>–</td>
        </tr>
        <tr>
          <td>Sort by</td>
          <td>Sorba rendezhetőek a keresési eredmények: például _Most installed_ (azaz „Legtöbbet telepített”) vagy _Last release_ (azaz „Legfrissebb kiadás”).</td>
          <td>Most installed</td>
        </tr>
      </tbody>
    </table>

    ![A Drupal.org sminklistájának szűrési lehetőségei](/images/extend-theme-find_theme_finder.webp)

1. A _Search_ gombra kattintva megjelennek a már csak a fenti feltételeknek megfelelő találatok.
    ![A Drupal.org sminklistájának keresési találatai](/images/extend-theme-find_search_results.webp)
1. Bár már így is nagyságrendekkel leszűkítettük a szóba jöhető sminkek listáját, az alaposabb átnézésükhöz nyissuk meg projektoldalaikat a nevükre kattintva.

    Íme néhány fontos szempont, ami segíthet értékelni és összehasonlítani őket, ezáltal könnyebben lehet eligazodni közöttük:

    * A smink leírása: ez az oldal fő hasábját legnagyobbrészt kitevő, a modul gazdája által szabadon megfogalmazott szöveg. Ezt mindig érdemes elolvasni, mert legtöbbször hasznos tudnivalókkal szolgál az adott smink céljáról, képességeiről és követelményeiről. Sokszor képernyőképek is segítenek elképzelni a kinézetüket.
    * _Project information_ szakasz: szintén az oldal középső hasábján, de lentebb találjuk ezt az egységes szerkezetű részt. A smink biztonsági vizsgálatán kívül itt néha figyelmeztetések is olvashatók, például ha a smink nincs többé karbantartva.

    ** Letöltési és használati statisztika: ebből nagyjából kiolvasható a smink népszerűsége. Ha azt látjuk, hogy viszonylag kevés webhelyen van használatban („... sites report using this theme”), akkor az vagy egy nagyon testreszabott kinézetű smink, vagy pedig egy intő jel, hogy valószínűleg nekünk sem kéne használnunk.

    * _Maintainers_ (azaz „karbantartók”): a smink gazdáit a jobb oldalsáv legtetején találjuk együtt olyan hasznos információkkal, mint például mikor módosította valamelyikőjük utoljára a kódját (másképpen „commit”).
    * _Issues_ (azaz „ügyek”): szintén érdemes összehasonlítani a fennálló megoldatlan ügyek számát a legújabb verzió kiadásával. Ha például csak kevés nyitott ügyet látunk, akkor nem feltétlenül gond, ha nincs túl friss verzió. Ha viszont sok a még megoldatlan feladat és hibajelzés, ám nem nagyon látszik mozgolódás a commitok terén, az az elhagyatottság egyik jele lehet. Vessünk egy pillantást az összefoglaló grafikonokra is, amelyek a karbantartók válaszkészségéről árulkodnak.
    * _Documentation_ és _Resources_ címek: fontos szempont tudnunk azt is, hogy mire készüljünk, ha esetleg elakadnánk a smink használatában. Itt tüntetnek fel általában olyan hasznos forrásokat, ahol további segítséget kaphatunk: például a README fájlt a smink forráskódjához mellékelve, vagy dokumentáció a telepítésről, beállításról és kipróbálásról.
## Az ismeretek elmélyítése

* [extend-theme-install](./extend-theme-install.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/M8LYX6K53jg" title="Sminkek feltérképezése" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta: [Diána Lakatos](https://www.drupal.org/u/dianalakatos) ([Pronovix](https://pronovix.com//)). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/))
