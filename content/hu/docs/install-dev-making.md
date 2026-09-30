---
title: "Fejlesztési célú webhelypéldány létrehozása"
description: "Így készíthetünk az éles webhelyünkről egy másolatot, amin szabadon kísérletezhetünk."
id: "install-dev-making"
translation_key: "install-dev-making"
source_locale: "hu"
---
## Célkitűzés { #install-dev-making }

Lemásoljuk a meglévő webhelyünket, hogy legyen belőle egy másik példányunk, amin szabadon, kockázat nélkül kísérletezhetünk új funkciók fejlesztésével, vagy ahol kipróbálhatjuk a frissítéseket.
## Szükséges előismeretek

[install-dev-sites](./install-dev-sites.md)
## Webhely előfeltételei

* Talán szükségtelen mondani, hogy mindenképpen léteznie kell már a webhelyünknek legalább egy példányban, amit klónozni tervezünk.
* Ha úgy döntünk, hogy a Drusht használnánk az alábbi lépések valamelyikéhez, akkor annak már telepítve kell lennie. Ehhez további tudnivalót a [install-tools](./install-tools.md) szakaszban találunk.
## Lépések

1. A korábbi [install-prepare](./install-prepare.md) részben leírt lépéseket követve már van rálátásunk a tárhelyünk működésére, így elő tudjuk készíteni a terepet az új webhelypéldány számára: a gyökérkönyvtárat a hozzá tartozó, külső internetről elérhető webcímmel, valamint az (egyelőre még üres) adatbázist a szintén hozzá tartozó adatbázis-felhasználóval együtt.
1. Készítsünk másolatot az éles webhely adatbázisáról az alábbi két mód valamelyikét választva:
    * Ha MySQL-t használunk adatbázisnak, és a távoli kiszolgálón telepítve van a _phpMyAdmin_ nevű eszköz (nagy valószínűséggel, ugyanis elég népszerű), akkor keressük meg annak _Export_ fülét a felső eszközsoron. Válasszuk az _SQL_ formátumot és engedélyezzük a kimenet _gzip_ fájllá való tömörítését.
    * Ha az előbb említett grafikus felület nem elérhető számunkra, de van parancssori hozzáférésünk, akkor küldhetjük az utasítást közvetlenül a MySQL kiszolgálónak is (természetesen behelyettesítve a webhelyünk adatbázisának nevét, felhasználóját és annak jelszavát):
    ```text
    mysqldump -u USERNAME -p 'PASSWORD' DATABASENAME > BACKUPFILE.sql
    ```
    * Ha inkább Drusht használnánk, akkor ezt a parancsot futtassuk:
    ```text
    drush sql:dump --result-file=BACKUPFILE.sql
    ```
    * Használhatjuk a [Backup and Migrate](https://www.drupal.org/project/backup_migrate) nevű közösségi modult is. A modulok webhelyünkre való feltelepítéséről a [extend-module-install](./extend-module-install.md) részben volt szó.
    Így tehát megvan a webhely adatbázisa elmentve egy _BACKUPFILE.sql_ (hacsak más nevet nem adtunk neki) fájlban. Le is menthetjük a helyi számítógépünkre, de tárolhatjuk a távoli gépen is. Utóbbi esetén viszont fontos biztonsági óvintézkedés, hogy a kiszolgálónak csak olyan könyvtárában tartsuk, ami nem érhető el kívülről az internetről. (Tehát ne a Drupal gyökérkönyvtárában vagy az alatt!)
1. Másoljunk át minden fájlt az éles webhely gyökérkönyvtárából a fejlesztési példányéba. Erre kiváló eszköz a Git verziókövető program: a [extend-git](./extend-git.md) részből megtudhatjuk, milyen egyszerű is ezt elvégezni vele.
1. Nyissuk meg a fejlesztési példány _sites/default/settings.php_ konfigurációs fájlját egy egyszerű szövegszerkesztőben. Keressük meg benne az adatbáziskapcsolatot leíró beállításokat (lehet, hogy a végefelé találjuk). Ehhez hasonlóan festenek:
    ```text
    $databases['default']['default'] = array (
      'database' => 'live_site_database_name',
      'username' => 'live_site_database_username',
      'password' => 'live_site_database_password',
    ```

    Ezeket írjuk át az éles webhely adatbázisa helyett az új, fejlesztési példány kapcsolódási adataira (pl. adatbázisfelhasználó neve, jelszava stb.).

1. Ugyanebben a _settings.php_ fájlban ellenőrizzük, hogy az alábbi beállítás érvényben van-e (nincs-e kikommentelve?). Ha igen, akkor módosítsuk az értékét a fejlesztési példányunk webcímére:
    ```text
    $settings['trusted_host_patterns']
    ```
1. Importáljuk be a korábban készített adatbázismentést a fejlesztési példány adatbázisába az alábbi módok egyikén:
    * Ha exportáláskor már használtuk a _PHPMyAdmin_ eszközt, akkor importáláshoz is használhatjuk ugyanúgy. Ennek _Import_ fülén tudjuk elindítani a folyamatot és ha nagy volt a mérete, akkor lehet, többször is el kell indítani ugyanannak a mentett fájlnak a beolvasását.
    * Ha viszont parancssoron keresztül exportáltuk fentebb, akkor az alábbi utasítást használhatjuk a MySQL kiszolgáló felé (a paramétereket ismét behelyettesítve persze):
    ```text
    mysql -u USERNAME -p PASSWORD  DATABASE_NAME < BACKUPFILE.sql
    ```
    * Drushsal is lehet importálni, mégpedig így:
    ```text
    drush sql:query --file=BACKUPFILE.sql
    ```
1. Ahogy fentebb már tapasztaltuk, két példány – bár ugyanannak az egy webhelynek a másolatai – eltérő beállításokat használhat a szétválasztott működésük érdekében. Az előbb átírt adatbáziskapcsolatokon kívül azonban számos további beállításuk különbözhet, amit ugyanúgy a _settings.php_ fájljaikban tárolnak. Lehetőség van azonban felülírást megvalósítani közöttük a `$config` változó segítségével. Például az éles webhely neve továbbra is maradjon „Bárkifalva Termelői Piac”, de a fejlesztési példányon ez inkább figyelmeztessen azzal, hogy átírjuk „DEV! – Bárkifalva Termelői Piac” címre. Ezt úgy érhetjük el, hogy mindkettő adatbázisában továbbra is meghagyjuk az éles szövegváltozatot, de a fejlesztési példány _settings.php_ fájljában elhelyezzük az alábbi kiegészítő sort:
    ```text
    $config['system.site']['name'] = "DEV! – Bárkifalva Termelői Piac";
    ```
## Az ismeretek elmélyítése

* Ellenőrizzük, hogy a fejlesztési példány jól működik-e – lehetőleg ugyanúgy (vagy jobban), mint az éles párja.
* Jelentkezzünk be a fejlesztési példányon is (adminisztrátori fiókunk megegyezik az élessel) és ürítsük ki a gyorsítótárat. Ehhez lásd a későbbi [prevent-cache-clear](./prevent-cache-clear.md) részt.
* [extend-deploy](./extend-deploy.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/FSBNm4oAkaA" title="Fejlesztési célú webhelypéldány létrehozása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

* [Backing up a site](https://www.drupal.org/docs/7/backing-up-and-migrating-a-site/backing-up-a-site) (azaz „Biztonsági mentés egy webhelyről”) című közösségi dokumentáció a Drupal.org-on angol nyelven.
* [Create a Test Site](https://www.drupal.org/docs/develop/local-server-setup/how-to-create-a-test-site) (azaz „Teszt webhely felállítása”) című közösségi dokumentáció a Drupal.org-on angol nyelven.

*Közreműködők*

Írta és szerkesztette: [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon), [Joe Shindelar](https://www.drupal.org/u/eojthebrave) ([Drupalize.Me](https://drupalize.me)) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
