---
title: "Az alaprendszer kézi letöltése"
description: "Lépéssor az alaprendszer vagy egy közösségi disztribúciónak a Drupal.org központi webhelyről való kézi letöltéséhez."
id: "install-manual"
translation_key: "install-manual"
source_locale: "hu"
---
## Célkitűzés { #install-manual }

Erre az útmutatóra csak akkor van szükségünk, ha úgy döntöttünk, hogy az alaprendszert vagy egy azt már előre tartalmazó disztribúciót automata eszközök nélkül, mi magunk töltünk le.
## Szükséges előismeretek

* [understanding-distributions](./understanding-distributions.md)
* [install-decide](./install-decide.md)
## Lépések

1. Nyissuk meg a _https://www.drupal.org_ oldalt és kattintsunk a _Build_ > _Download & Extend_ menüpontra a felső menüben.
    <img src="/images/install-prepare-downloads.png" alt="Letöltési oldal a Drupal.org-on" width="100%" />
1. Ha csak az alaprendszerre van szükségünk (nem egy disztribúcióra), akkor kattintsunk a _Download Drupal zip_ gombra vagy alatta a _download tar.gz_ hivatkozásra, és mentsük le a tömörített fájlt valahová a számítógépünkre.
1. Ha viszont egy egész disztribúciót szeretnénk letölteni, akkor lentebb ezen az oldalon a ládát szimbolizáló ikonra kattintva nyissuk meg a listájukat, válasszuk ki a szükségeset a nevére kattintva, majd szintén töltsük le a _zip_ vagy _tar.gz_ fájljukat a helyi gépünkre. Az ehhez hasonló hivatkozást keressük a projektoldaluk alján:
    ![Egy közösségi projekt letöltési linkje](/images/extend-module-install-download.png)
1. Töltsük fel a letöltött fájlt a tárhelyünkre. Ha tárhelyszolgáltatónk kínál valamilyen vezérlőpult eszközt (pl. cPanel) a tárhely kezelésére, akkor lépjünk az internetről kívülről látható gyökérkönyvtárba (ez lehet „HTML”, „public”, „www” vagy „web”), és válasszuk azt a feltöltés céljának.
1. Itt tömörítsük ki a _tar.gz_ (vagy _zip_) fájlt, ami egy új könyvtárat fog létrehozni. Ha nincs parancssori hozzáférésünk, vagy a tárhely nem Linux operációs rendszeren fut, akkor a szolgáltató vezérlőpultjának fájlkezelője általában biztosít kicsomagolási lehetőséget. Ha viszont van parancssori hozzáférésünk a távoli szerverhez (és az Linuxon fut), akkor a következő parancs kiadásával csomagolhatjuk ki a tömörített fájlt:
    ```text
    tar -xzf drupal-8.3.2.tar.gz
    ```
1. Ha a kitömörítési folyamat magától nem törölte volna a tömörített fájlt, akkor töröljük le mi magunk a szerverről.
1. Nevezzük át az imént létrejött új könyvtárat arra a névre, ahogy a webszerver keresni fogja a gyökérkönyvtárat (angolul „docroot”). Vagy ha úgy egyszerűbb, adjuk meg ezt a könyvtárnevet a tárhely beállításai között. Akárhogy is, a lényeg, hogy a webszerver lássa a Drupalt a gyökérkönyvtárban.
## Az ismeretek elmélyítése

Ha már helyére került Drupal szoftver kódbázisa, akkor akár azonnal be is indíthatjuk próbaképpen a parancssorban a gyökérkönyvtárban állva az alábbi utasítás kiadásával:

```text
php core/scripts/drupal quick-start standard
```

Egy folyamatjelző lefutását követően perceken belül visszajelzést kapunk. Sőt, szervertől függően akár a böngészőnkben azonnal meg is nyílhat ez az ideiglenes bemutató célú webhely. Ahogy a [install-decide](./install-decide.md) résznél írtuk, ez pusztán csak egy demó, még _nem_ a végleges webhelyünk – amint bezárjuk a parancssort, nyom nélkül megszűnik. Mégis motiváló lehet azonnal látni előrehaladáunkat, ezért hasznos lehet bővebben is olvasnunk e funkcióról a súgóját megnyitva (angol nyelven):

```text
php core/scripts/drupal quick-start --help
```

*Közreműködők*

Írta és szerkesztette: [Drew Gorton](https://www.drupal.org/u/dgorton), [Michael Lenahan](https://www.drupal.org/u/michaellenahan) ([erdfisch](https://erdfisch.de)), [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)). Fordította: [Pandelon](https://www.drupal.org/u/pandelon).
