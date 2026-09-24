---
title: "Modul- és sminkfájlok kézi letöltése"
description: "Hogyan lehet kézzel, azaz automatizált eszközök használata nélkül beszerezni a modulok és sminkek forráskódját?"
id: "extend-manual-install"
translation_key: "extend-manual-install"
source_locale: "hu"
---
## Célkitűzés { #extend-manual-install }

Ahogy a korábbi részeknél már említettük, néha előfordulhat olyan eset, amikor az automatizált eszközök, mint a Drush vagy a Composer nem használhatóak valamilyen oknál fogva (például amikor egyedileg fejlesztett modult vagy sminket telepítenénk a webhelyünkre).
## Szükséges előismeretek

* [understanding-modules](./understanding-modules.md)
* [extend-module-find](./extend-module-find.md)
* [understanding-themes](./understanding-themes.md)
* [extend-theme-find](./extend-theme-find.md)
## Webhely előfeltételei

Az itt leírt útmutatóra csak akkor van szükségünk, ha a korábbi részek során az alábbi akadályokba botlottunk a modulok vagy sminkek telepítése, frissítése során:

* Fájljogosultsági gondok
* FTP-hozzáférési probléma
* Csak a forráskódja van meg egy modulnak vagy sminknek
* Esetleg nehézségekbe ütköztünk az alábbiak egyikének végrehajtása során:
** [extend-module-install](./extend-module-install.md)
** [extend-theme-install](./extend-theme-install.md)
** [security-update-module](./security-update-module.md)
** [security-update-theme](./security-update-theme.md)

Ha a fenti esetek egyike sem áll fenn, akkor nyugodt szívvel átugorhatjuk ezt a szakaszt és folytathatjuk a következővel. Ha viszont használunk Composert a webhelyünkön, akkor az azt jelenti, hogy már automatizáltan kezeljük a szoftver (azaz a Drupal) forráskódjának fájlrendszerét, tehát nincs szükségünk az itt leírt lépéssor kézzel való elvégzésére. Ez esetben kövessük inkább a [install-composer](./install-composer.md) fejezet útmutatásait.
## Lépések

Ez a leírás két esetet fed le:

* _Közösségi_ modul/smink feltelepítése: ekkor Letöltés és Feltöltés-kicsomagolás is történik.
* _Egyedi_ modul/smink feltelepítése: ekkor csak Feltöltés-kicsomagolás történik.

Utóbbi esetben tehát átugorhatjuk a következő, _Letöltés_ részt (hiszen az egyedi modul/smink forráskódja már megvan, azt már nem szükséges beszereznünk).
### Letöltés

1. Nyissuk meg a modul vagy smink projektoldalát a Drupal.org webhelyen. Például az _Admin toolbar_ modulé a _https://www.drupal.org/project/admin_toolbar_ címen található.
1. Görgessünk le a _Downloads_ szakaszhoz egészen a lap alján:
    ![Közösségi modul forráskódjának letöltése](/images/extend-manual-install-download.webp)
1. Kattintsunk a _tar.gz_ hivatkozásra, így böngészőnk lementi a tömörített fájlt a számítógépünkre. Ha a távoli kiszolgálónk Linuxon fut, és van parancssori hozzáférésünk, akkor egyszerűen futtathatjuk az alábbi parancsot, természetesen a webcímet lecserélve:
    ```text
    wget https://ftp.drupal.org/files/projects/admin_toolbar-8.x-1.26.tar.gz
    ```
### Feltöltés és kicsomagolás

1. A modulok és sminkek a webhelyünk gyökerének legfelső szintű _/modules_ és _/themes_ könyvtáraiban találhatóak. (Fontos! *Nem* a _/core_ alattiakról van szó, azokhoz soha ne nyúljunk!) Az általánosan javasolt gyakorlat szerint ezeken belül is érdemes különválasztani őket forrásuk szerint közösségi (_/contrib_) és saját vagy egyedi (_/custom_) alkönyvtárakba. Ha ilyenek még nem léteznek a  _/modules_ és _/themes_ könyvtárainkban, akkor érdemes most létrehoznunk őket. Ezután az alábbihoz hasonló képet kapunk:
    <img src="/images/extend-manual-install-directories.webp" alt="Javasolt könyvtárszerkezet a modulokhoz" width="174px" />
1. Ha egy már létező modult vagy sminket cserélünk le a frissebb verziójával, akkor érdemes az éles webhelyet ideiglenesen elzárni a látogatók elől: [extend-maintenance](./extend-maintenance.md).
1. Ez azért javasolt, mert most töröljük a frissítendő modul/smink már létező könyvtárát. (Ha a látogató eközben épp olyan oldalt nyitna meg, amelyhez az ideiglenesen törölt modul/smink szükséges lenne, akkor hibát tapasztalna.)
1. Töltsük fel a _.tar.gz_ fájlt (lehet más kiterjesztése is a tömörített állománynak) a webhelyünk tárhelyére. A feltöltés célkönyvtárát válasszuk ki az alábbiak szerint:
    * Új modul/smink első telepítésekor a fentiekben létrehozott _/contrib_ vagy _/custom_ könyvtárak egyikét.
    * Már korábban létező modul/smink frissítésekor azt, ahonnan az imént letöröltük a régi verzióját.
1. Csomagoljuk ki a _.tar.gz_ (vagy más) tömörített állományt, ami így egy alkönyvtárat hoz létre a fájllal azonos szinten. Ha a távoli kiszolgálónk Linuxon fut, és van parancssori hozzáférésünk, akkor egyszerűen futtathatjuk az alábbi parancsot, természetesen a fájlnevet lecserélve:
    ```text
    tar -xzf admin_toolbar-8.x-1.17.tar.gz
    ```

    Ha nem Linuxon fut a kiszolgáló, vagy nem használhatjuk a parancssort, akkor a tárhelyszolgáltatónk valószínűleg kínál valamilyen grafikus felületet a kicsomagolás elvégzésére.

1. Ha a kicsomagolási művelet nem tette meg magától, akkor töröljük a tömörített állományt kézzel.
1. Innentől már visszatérhetünk a korábbi témakörökhöz, ahol elakadtunk, hogy befejezzük a lépéssorokat:
    * [extend-module-install](./extend-module-install.md)
    * [extend-theme-install](./extend-theme-install.md)
    * [security-update-module](./security-update-module.md)
    * [security-update-theme](./security-update-theme.md)
    Folytassuk attól a lépéstől, ahol az automatikus eszköz (adminfelület vagy Drush) használatával a feltöltés megtörtént.
## Az ismeretek elmélyítése

* Ha egy webhelynek több példányát tartjuk fenn (például egy helyi fejlesztői környezetet is az éles webhelyen kívül), akkor ezt a folyamatot mindegyiken el kell végeznünk, vagy újra kell klónoznunk az egyiket a már frissített másikból. Minderről bővebben lásd a [install-dev-making](./install-dev-making.md) szakaszt.
* Ha új sminket telepítettünk, és a régire már nincs szükségünk, akkor javasolt azt eltávolítani a _Kezelés_ adminisztrációs menüben a _Megjelenés_ oldalon (vagy a címsorban adjuk meg az _admin/appearance_ útvonalat).
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/kOzQz9q3Kf8" title="Modul- és sminkfájlok kézi letöltése" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

Az alább felsorolt közösségi dokumentációk a Drupal.org-on bár angol nyelvűek, de hasznosak lehetnek a téma alaposabb megértéséhez:

* [Updating modules](https://www.drupal.org/node/250790) (azaz „Modulok frissítése”)
* [Installing contributed modules](https://www.drupal.org/docs/8/extending-drupal-8/installing-drupal-8-modules) (azaz „Közösségi modulok telepítése”)
* [Installing themes](https://www.drupal.org/docs/8/extending-drupal-8/installing-themes) (azaz „Sminkek telepítése”)

*Közreműködők*

Írta és szerkesztette: [Boris Doesborg](https://www.drupal.org/u/batigolix), [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) és [Marc Isaacson](https://www.drupal.org/u/vegantriathlete). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/)).
