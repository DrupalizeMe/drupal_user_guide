---
title: "Alapfogalom: a biztonsági mentések"
description: "Miként kell egy webhelyről biztonsági mentést készíteni, és annak milyen adatokat kell tartalmaznia."
id: "prevent-backups"
translation_key: "prevent-backups"
source_locale: "hu"
---
## Szükséges előismeretek { #prevent-backups }

* [understanding-drupal](./understanding-drupal.md)
* [install-prepare](./install-prepare.md)
## Biztonsági mentés a webhelyünkről?

Igen, hiszen éppúgy, ahogy például családi fotóinkról vagy cégünk hivatalos dokumentumairól is biztonsági másolatot készítünk időnként, úgy a webhelyünket működtető Drupal által kezelt adatokról is jó, ha van egy tartalék másolatunk vész esetére. A baj pedig sokféle formában, több okból kifolyólag is bekövetkezhet: meghibásodhatnak azok a számítógépek, melyeken a mi webhelyünk is el lett helyezve; akadozhat vagy megszűnhet a hozzáférésünk a szervereinkhez; rosszindulatú támadás célpontjává válhat a webhelyünk; vagy egyszerűen csak egy magas jogosultságú felhasználói fiókunkkal tévedésből törlünk valamit, amit nem kellett volna, de már nem lehet visszavonni. Az ilyen és ehhez hasonló élethelyzetek okozta súlyos veszteségek kivédése érdekében hasznos, ha rendszeres időközönként másolatot készítünk a webhelyünk adatairól, és azt az éles szervertől jól elkülönítetten tároljuk.

Azt, hogy milyen gyakorisággal készüljenek biztonsági mentések, és azokból hányat őrizzünk meg visszamenőleg, az alapján érdemes megfontolnunk, hogy milyen időközönként változik webhelyünk tartalma. Például egy naponta több új cikket közzétevő hírportálnak vagy egy élénk forgalmat lebonyolító közösségi fórumnak más mentési gyakoriságra van szüksége, mint egy legfeljebb havi rendszerességgel frissülő céges bemutatkozó webhelynek. Azt is érdemes figyelembe vennünk, hogy a tapasztalatok szerint általában bizonyos idő el szokott telni a működési zavar beállta és annak észlelése között. Ez azt jelenti, hogy nem érdemes csak egyetlen, utolsó másolatot megőrizni, és folyton azt felülírva rámenteni az újat, hanem helyette mentések egy adott időszakot lefedő sorozatát javasolt tárolni, hogy azokban vissza tudjuk keresni az utolsó, még éppen a hiba előtt készült, azaz jó változatot.

Bár természetesnek tűnik, de mégis meg kell róla győződnünk, hogy olyan formában készüljenek a biztonsági mentéseink, amiből vissza tudjuk állítani az eredeti állapotot. Például a fentebb említett különböző élethelyzeteket szimuláló „vészpróbát” eljátszva kipróbálható, hogy _mi történne, ha..._ és valóban vissza tudnánk-e állítani a webhely üzemszerű működését.

A következőket kell tartalmaznia egy Drupal-alapú webhely teljes biztonsági mentésének:

* Maga a _/sites_ könyvtár, különösen benne a _/sites/default/settings.php_ fájl.
* Egy másolat a teljes adatbázisról. Ha muszáj, bizonyos táblák (mint például az átmeneti gyorsítótáré vagy a bejelentkezési munkameneteké) csonkolhatóak, de mégis inkább az a biztos, ha a teljes adatbázis le van mentve.
* A feltöltött fájlok, mint például képek és csatolmányok. Ezeknek a fájloknak a helye a beállításoktól függően eltérő lehet, de az alapértelmezett helyük a _/sites/default/files_ könyvtár a webhely gyökerétől számítva. Kétely esetén az adminfelületen a _Kezelés_ » _Konfiguráció_ » _Média_ » _Fájlrendszer_ (címsorban _/admin/config/media/file-system_) útvonalon olvasható. (Módosítani azonban nem itt, hanem a settings.php fájlban kell.)
* Azok a modulok, sminkek és más szoftverfájlok, amiket mi magunk módosítottunk. Ezek a _/modules_ és _/themes_ könyvtárakban találhatóak értelemszerűen. Vannak azonban, akik szeretik inkább valamennyi szoftverfájlt (tehát beleértve magát a Drupal alaprendszert, a közösségi modulokat és sminkeket is) belefoglalni a biztonsági mentéseikbe, holott ezek bármikor újra beszerezhetőek a Drupal.org-ról.

A legegyszerűbben úgy győződhetünk meg róla, hogy vajon minden szükséges összetevőt belefoglaltunk-e a biztonsági mentésünkbe, hogy abból feltelepítünk egy fejlesztői változatot magunknak: [install-dev-making](./install-dev-making.md).
## Kapcsolódó témák

* [security-update-core](./security-update-core.md)
* [install-dev-making](./install-dev-making.md)
* [prevent-cache](./prevent-cache.md)
## Egyéb források

* [Backing up a site](https://www.drupal.org/docs/7/backing-up-and-migrating-a-site/backing-up-a-site) (azaz „Webhelyünk lementése”) című közösségi dokumentáció a Drupal.org-on.
* A [Backup and Migrate](https://www.drupal.org/project/backup_migrate) közösségi modul, ami beállítható többek között az adatbázis és a fájlok automatikus biztonsági mentésére is.

*Közreműködők*

Írta: [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
