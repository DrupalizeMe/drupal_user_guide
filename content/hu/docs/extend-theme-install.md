---
title: "Sminkek letöltése a Drupal.org-ról és telepítésük"
description: "Hogyan tölthető le egy smink a központi Drupal.org webhelyről akár az adminfelületet, akár a Drush eszközt használva."
id: "extend-theme-install"
translation_key: "extend-theme-install"
source_locale: "hu"
---
## Célkitűzés { #extend-theme-install }

Letöltünk a Drupal.org-ról egy közösségi sminket, és telepítjük a saját webhelyünkre.
## Szükséges előismeretek

* [extend-theme-find](./extend-theme-find.md)
* [install-tools](./install-tools.md)
## Webhely előfeltételei

* Ha az adminfelületen keresztül szeretnénk elvégezni ezt a műveletet, akkor az alaprendszer _Update Manager_ moduljának engedélyezve kell lennie. Ennek módjáról a [config-install](./config-install.md) szakaszban már esett szó.
* Ha viszont úgy döntünk, hogy inkább a Drusht használnánk, akkor annak már telepítve kell lennie, melyhez további tudnivalót a [install-tools](./install-tools.md) szakaszban találunk.
## Lépések

Ahogy a bevezetőből már kiderült, egy közösségi smink webhelyünkhöz adására több lehetőség közül választhatunk. Itt most csak a két legegyszerűbb (ezért talán a leggyakrabban használt) módot ismertetjük, de más esetekben (például amikor egy egyedileg fejlesztett sminket telepítenénk, vagy FTP-hozzáférés hiányára utaló üzenetet kapunk, esetleg az alábbi lépések nem működnének) még mindig követhetjük a [extend-manual-install](./extend-manual-install.md) szakasz útmutatásait. Mivel néhány (manapság egyre több) közösségi smink már a Composer eszközzel kezeli a függőségeit, ezért lehet, hogy használunk Composert a webhelyünkön. Ez azt jelenti, hogy már automatizáltan kezeljük a szoftver (azaz a Drupal) forráskódjának fájlrendszerét, tehát nincs szükségünk az itt leírt lépéssor kézzel való elvégzésére. Ez esetben kövessük inkább a [install-composer](./install-composer.md) fejezet útmutatásait. Ha azzal végeztünk, visszatérhetünk ide, és telepíthetjük a sminket Drushsal vagy folytathatjuk a lenti 7. lépéstől tovább ugyanúgy.
### Az adminfelület használatával

1. Válasszunk ki egy sminket (lehet például a _https://www.drupal.org/project/mayo_) és a projektoldalán görgessünk le a _Downloads_ részhez a lap alján.
1. Másoljuk ki a _tar.gz_ hivatkozás webcímét. A legtöbb korszerű webböngészőben ez általában a jobb klikkre megnyíló helyi menüben a _Hivatkozás címének másolása_ (vagy hasonló) menüpont.
    ![A smink letöltési linkje](/images/extend-theme-install-download.png)
1. Webhelyünk _Kezelés_ adminisztrációs menüjében menjünk a _Megjelenés_ oldalra (vagy a címsorban adjuk meg az _admin/appearance_ útvonalat). A megjelenő oldal felsorolja a webhelyünkön pillanatnyilag elérhető valamennyi sminket.
1. Kattintsunk az _Új smink telepítése_ gombra, majd az azonos nevű oldalon két beviteli mezőt találunk:
    ![Sminktelepítési oldal az adminfelületen](/images/extend-theme-install-page.png)
1. A _Telepítés webcímről_ mezőbe illesszük be a tar.gz fájl előbb kimásolt webcímét, ami valami ehhez hasonló lesz: _https://ftp.drupal.org/files/projects/mayo-8.x-1.3.tar.gz_
1. Kattintsunk a _Telepítés_ gombra, ami letölti a Drupal.org fájlkiszolgálójáról a kért verziót, és felmásolja webhelyünk szerverére. Ezek a fájlok általában a _themes_ könyvtárban vannak tárolva.
1. Miután a következő képernyőn lefutott a folyamatjelző, „A telepítés sikeresen befejeződött” állapotüzenetet kell kapnunk. Ekkor az „Újonnan hozzáadott sminkek telepítése” hivatkozás közvetlenül visszavisz minket a _Megjelenés_ oldalra, ahonnan indultunk.
1. Keressük meg az oldalon az „Eltávolított sminkek” cím alatt a _Mayo_ nevűt, és az alatta lévő „Telepítés és beállítás alapértelmezettként” hivatkozásra kattintva engedélyezzük. Innentől a webhely minden, nem az adminfelülethez tartozó oldala ezzel a kinézettel fog megjelenni.
    <img src="/images/extend-theme-install-appearance-page.png" alt="Uninstalled themes on Appearance page" width="286px" />

### Telepítés a Drush használatával

1. Ehhez először is tudnunk kell a smink gépi nevét, amit legegyszerűbben a projektoldalának webcíméből találhatunk ki: a mi példánkban használt _https://www.drupal.org/project/mayo_ címből tudjuk tehát, hogy `mayo` a smink programok által használt neve.
1. Miután a [extend-manual-install](./extend-manual-install.md) vagy [install-composer](./install-composer.md) szakaszok egyikének lépéseit követve a letöltéssel megvagyunk, utána a következő Drush parancsok lefuttatásával először engedélyezzük (angolul „enable”, de véletlen egybeesésként magyarul is ugyanígy kezdődik, így könnyű megjegyezni), majd pedig beállítjuk alapértelmezettként. A parancsok paramétereként minden esetben meg kell adnunk a smink gépi nevét:
    ```text
    drush theme:enable mayo
    drush config:set system.theme default mayo
    ```
1. Ezután már csak kövessük a parancssorban megjelenő utasításokat.
## Az ismeretek elmélyítése

* Webhelyünk _Kezelés_ adminisztrációs menüjében menjünk a _Megjelenés_ oldalra (vagy a címsorban adjuk meg az _admin/appearance_ útvonalat) és tiltsunk le minden, használaton kívüli sminket.
* Ha sminkek mellett modulokat is keresünk, akkor a [extend-module-find](./extend-module-find.md) segíthet.
* Ha az így talált modulokat telepítenénk, akkor a [extend-module-install](./extend-module-install.md) rész lehet érdekes.
* Ha esetleg még nem látnánk azonnal a változást, akkor előfordulhat, hogy a gyorsítótárat ki kell ürítenünk, amihez előreugorhatunk a [prevent-cache-clear](./prevent-cache-clear.md) szakaszhoz.
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/UOYy9A_9_Lw" title="Sminkek letöltése a Drupal.org-ról és telepítésük" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta és szerkesztette: [Joe Shindelar](https://www.drupal.org/u/eojthebrave) ([Drupalize.Me](https://drupalize.me)) és [Boris Doesborgh](https://www.drupal.org/u/batigolix). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/)).
