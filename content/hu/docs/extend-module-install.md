---
title: "Modulok letöltése a Drupal.org-ról és telepítésük"
description: "Modul letöltése a központi Drupal.org webhelyről az adminfelületet vagy a Drush eszközt használva."
id: "extend-module-install"
translation_key: "extend-module-install"
source_locale: "hu"
---
## Célkitűzés { #extend-module-install }

Letöltjük és telepítjük az [Admin Toolbar](https://www.drupal.org/project/admin_toolbar) közösségi modult, ami nagyban megkönnyíti majd számunkra a webhelyünk adminfelületén való tájékozódást.
## Szükséges előismeretek

* [understanding-modules](./understanding-modules.md)
* [extend-module-find](./extend-module-find.md)
* [install-tools](./install-tools.md)
## Webhely előfeltételei

* Ha az adminfelületen keresztül szeretnénk elvégezni ezt a műveletet, akkor az alaprendszer _Update Manager_ moduljának engedélyezve kell lennie. Ennek módjáról a [config-install](./config-install.md) szakaszban már esett szó.
* Ha viszont úgy döntünk, hogy inkább a Drusht használnánk, akkor annak már telepítve kell lennie, melyhez további tudnivalót a [install-tools](./install-tools.md) szakaszban találunk.
## Lépések

Ahogy a bevezetőből már kiderült, egy közösségi modul webhelyünkhöz adására több lehetőség közül választhatunk. Itt most csak a két legegyszerűbb (ezért talán a leggyakrabban használt) módot ismertetjük, de más esetekben (például amikor egy egyedileg fejlesztett modult telepítenénk, vagy FTP-hozzáférés hiányára utaló üzenetet kapunk, esetleg az alábbi lépések nem működnének) még mindig követhetjük a [extend-manual-install](./extend-manual-install.md) szakasz útmutatásait. Mivel néhány (manapság egyre több) közösségi modul már a Composer eszközzel kezeli a függőségeit, ezért lehet, hogy használunk Composert a webhelyünkön. Ez azt jelenti, hogy már automatizáltan kezeljük a szoftver (azaz a Drupal) forráskódjának fájlrendszerét, tehát nincs szükségünk az itt leírt lépéssor kézzel való elvégzésére. Ez esetben kövessük inkább a [install-composer](./install-composer.md) fejezet útmutatásait. Ha azzal végeztünk, visszatérhetünk ide, és telepíthetjük a modult Drushsal vagy folytathatjuk a lenti 7. lépéstől tovább ugyanúgy.
### Az adminfelület használatával

1. Az _Admin toolbar_ modul projektoldalán (_https://www.drupal.org/project/admin_toolbar_) görgessünk le a _Downloads_ részhez a lap alján.
1. Másoljuk ki a _tar.gz_ hivatkozás webcímét. A legtöbb korszerű webböngészőben ez általában a jobbklikkre megnyíló helyi menüben a _Hivatkozás címének másolása_ (vagy hasonló) menüpont.
    ![A modul letöltési linkje](/images/extend-module-install-download.png)
1. Webhelyünk _Kezelés_ adminisztrációs menüjében menjünk a _Bővítés_ oldalra (vagy a címsorban adjuk meg az _admin/modules_ útvonalat). A megjelenő oldal felsorolja a webhelyünkön pillanatnyilag elérhető valamennyi modult.
1. Kattintsunk az _Új modul telepítése_ gombra, majd az azonos nevű oldalon két beviteli mezőt találunk:
    ![Modultelepítési oldal az adminfelületen](/images/extend-module-install-admin-toolbar-do.png)
1. A _Telepítés webcímről_ mezőbe illesszük be a tar.gz fájl előbb kimásolt webcímét, ami valami ehhez hasonló lesz: _https://ftp.drupal.org/files/projects/admin_toolbar-8.x-1.24.tar.gz_
1. Kattintsunk a _Telepítés_ gombra, ami letölti a Drupal.org fájlkiszolgálójáról a kért verziót, és felmásolja webhelyünk szerverére. Ezek a fájlok általában a _modules_ könyvtárban vannak tárolva.
1. Miután a következő képernyőn lefutott a folyamatjelző, „A telepítés sikeresen befejeződött” állapotüzenetet kell kapnunk. Ekkor az „Újonnan hozzáadott modulok engedélyezése” hivatkozás közvetlenül visszavisz minket a _Bővítés_ oldalra, ahonnan indultunk.
1. Keressük meg a listában az _Admin toolbar_ modult.
1. A neve előtti jelölőnégyzet bepipálásával engedélyezhetjük a modult.
### Telepítés a Drush használatával

1. Ehhez először is tudnunk kell a modul gépi nevét, amit legegyszerűbben a projektoldalának webcíméből találhatunk ki: a mi példánkban használt _https://www.drupal.org/project/admin_toolbar_ címből tudjuk tehát, hogy „admin_toolbar” a modul programok által használt neve.
1. Miután a [extend-manual-install](./extend-manual-install.md) vagy [install-composer](./install-composer.md) szakaszok egyikének lépéseit követve a letöltéssel megvagyunk, utána a következő Drush parancs lefuttatásával engedélyezzük (angolul „enable”, de véletlen egybeesésként magyarul is illik, így könnyű megjegyezni). A parancs paramétereként minden esetben meg kell adnunk a modul gépi nevét:
    ```text
    drush pm:enable admin_toolbar
    ```
1. Ezután már csak kövessük a parancssorban megjelenő utasításokat.
## Az ismeretek elmélyítése

* Ellenőrizhetjük, hogy az imént telepített és engedélyezett _Admin Toolbar_ modul megfelelően működik-e, ha egerünket végigmozgatjuk a felső eszközsor fehér sávján.
* Ha esetleg még nem látnánk azonnal a változást, akkor előfordulhat, hogy a gyorsítótárat ki kell ürítenünk, amihez előreugorhatunk a [prevent-cache-clear](./prevent-cache-clear.md) szakaszhoz.
* Ha szeretnénk újra gyakorolni a fenti lépéseket, akkor egy másik hasznos és ezért gyakran szükséges közösségi modul a [Pathauto](https://www.drupal.org/project/pathauto), mellyel a tartalmaink automatikusan jobban olvasható webcímeket kapnak. Erről bővebben lásd az [content-paths](./content-paths.md) szakaszt.
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/GJWS2TLtEpk" title="Modulok letöltése a Drupal.org-ról és telepítésük" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

* [Contributed modules](https://www.drupal.org/node/340271) (azaz „Közösségi modulok”) dokumentáció a Drupal.org-on angol nyelven.
* A Drupal.org [Download and Extend](https://www.drupal.org/download) (azaz „Letöltés és bővítés”) oldala (szintén angol nyelven).
* Maga az _Admin Toolbar_ modul [projektoldala](https://www.drupal.org/project/admin_toolbar) a Drupal.org-on.

*Közreműködők*

Írta és szerkesztette: [Boris Doesborg](https://www.drupal.org/u/batigolix) és [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/))
