---
title: "Az interaktív telepítő futtatása"
description: "Az alaprendszer interaktív telepítőjének használata."
id: "install-run"
translation_key: "install-run"
source_locale: "hu"
---
## Célkitűzés { #install-run }

A Drupal beépített telepítőjének végigfuttatásával az alaprendszer feltelepítése és az Egyes számú felhasználói fiók létrehozása.
## Webhely előfeltételei

[install-prepare](./install-prepare.md)
## Lépések

1. Ha egy bemutató webhelyen (például a simplytest.me) telepítjük a Drupalt, akkor az alábbi képernyők egyikét látjuk magunk előtt. Ha azonban mi másoltuk fel a Drupal fájljait és könyvtárait a tárhelyünkre, vagy a Composer végezte ezt el nekünk, akkor először el kell indítanunk a telepítőt. Ehhez elég csupán meglátogatnunk egy webböngészőben a tárhelyünk webcímét, és máris az első lépés fogad.
1. Először válasszuk ki a magyar nyelvet. Természetesen bármelyik másikat is kiválaszthatjuk, de a Kézikönyvben a Drupal használatát magyar fordítással mutatjuk be. Az itt kiválasztott nyelv fordítási fájljai letöltődnek a tárhelyünkre, így a telepítés következő lépései már azon a nyelven jelennek meg. Miután kiválasztottuk a magyar nyelvet, kattintsunk az (ekkor még angol nyelvű) _Save and continue_ gombra.
    <img src="/images/install-run-1.webp" alt="Képernyőkép a nyelvválasztó lépésről" width="100%" />
1. A következő lépés a telepítési profil kiválasztása. A telepítési profilok az alaprendszer mellé csomagolva különböző modulokat és sminkeket tartalmaznak gyárilag, azokat már előre engedélyezve és beállítva telepítik fel a Drupalt, ezért nagyon hasznosak speciális célú webhelyek létrehozására. Az alaprendszer két telepítési profilt tartalmaz, mi most válasszuk az _Általános_ (korábbi fordításban _Szabványos_) profilt, majd kattintsunk a _Mentés és folytatás_ gombra.
    <img src="/images/install-run-2.webp" alt="Képernyőkép a telepítési profil kiválasztásáról" width="100%" />
1. A következő lépésben a telepítő ellenőrzi, hogy teljesülnek-e Drupal rendszerkövetelményei az adott tárhelyen, azaz lehetséges-e a telepítése? Ha esetleg a környezet nem minden szempontból felel meg a kívánalmaknak, akkor egy kivonatos listát kapunk, hogy min kell változtatnunk, mielőtt folytathatnánk a telepítést. Ha minden szempontból rendben vagyunk, akkor a telepítő automatikusan továbblép a következő pontra.
1. Most kell megadni a [install-prepare](./install-prepare.md) szakasznál létrehozott adatbázis kapcsolódási adatait.
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
          <td>Adatbázis neve</td>
          <td>Egy tetszőleges név, ahogy az adatbázisunkat elneveztük</td>
          <td>drupal9</td>
        </tr>
        <tr>
          <td>Adatbázis-felhasználó neve</td>
          <td>Az adatbázis használatára jogosult MySQL-felhasználó neve</td>
          <td>databaseUsername</td>
        </tr>
        <tr>
          <td>Adatbázis-felhasználó jelszava</td>
          <td>Az előbbi fiókhoz választott jelszó</td>
          <td>************</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/install-run-3.webp" alt="Képernyőkép az adatbázis-kapcsolat beállításairól" width="100%" />

    Kattintsunk a _Mentés és folytatás_ gombra.

1. A következő lépésnél megjelenik egy folyamatjelző sáv a _Drupal telepítése_ címsor alatt. Amint ez végigfutott, a telepítő automatikusan továbbugrik a következő lépésre.
    <img src="/images/install-run-4.webp" alt="Képernyőkép a telepítő folyamatjelzőjéről" width="100%" />
1. Az utolsó lépés az új webhely néhány alapinformációjának megadása. (Ha ekkor megjelenik egy biztonsági figyelmeztetés, akkor a teendők az utolsó lépésnél olvashatók.) Fontos tudni, hogy az itt létrehozott felhasználói fiók kiemelt szerepű lesz a későbbiekben. Ezt nevezzük ugyanis az Egyes számú felhasználónak, amelyről bővebben a [user-admin-account](./user-admin-account.md) témakörnél írunk. Most ezt nyugodtan elnevezhetjük „admin”-nak, de válasszunk hozzá egy biztonságos jelszót, amiben segítenek az alatta megjelenő tanácsok is.
    Töltsük ki az űrlapot a következő információkkal:
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
          <td>A webhely neve</td>
          <td>Az új webhely egy tetszőlegesen megválasztott elnevezése</td>
          <td>Bárkifalva Termelői Piac</td>
        </tr>
        <tr>
          <td>A webhely e-mail címe</td>
          <td>Az egész webhely nevében használatos e-mail fiók címe</td>
          <td>irj.nekunk@pelda.hu</td>
        </tr>
        <tr>
          <td>Felhasználónév</td>
          <td>Az Egyes számú felhasználó neve</td>
          <td>admin</td>
        </tr>
        <tr>
          <td>Jelszó</td>
          <td>Az Egyes számú felhasználói fiókhoz választott jelszó</td>
          <td>Válasszunk egy megjegyezhető és biztonságos jelszót</td>
        </tr>
        <tr>
          <td>Jelszó megerősítése</td>
          <td>Pontosan ugyanazt a jelszót, ugyanúgy kell beírni még egyszer</td>
          <td></td>
        </tr>
        <tr>
          <td>E-mail cím</td>
          <td>Az Egyes számú felhasználó élő, működő e-mail címe</td>
          <td>admin@pelda.hu</td>
        </tr>
      </tbody>
    </table>

    A többi mezőt akár üresen is hagyhatjuk, mivel nem kötelező őket kitölteni a telepítés befejezéséhez.
    <img src="/images/install-run-5.webp" alt="Képernyőkép a webhely-információk megadásáról" width="100%" />

    Kattintsunk a _Mentés és folytatás_ gombra.

1. Ha minden jól ment, akkor a telepítő a folyamat végén átirányít minket frissen elkészült webhelyünk címlapjára, ahol az _„A Drupal telepítése sikerült, gratulálunk!”_ üzenet fogad bennünket.
    <img src="/images/install-run-6.webp" alt="Képernyőkép a sikeresen feltelepített Drupalról" width="100%" />
1. Bizonyos tárhelyek esetén előfordulhat, hogy a telepítési folyamat során nem lehet automatikusan átállítani a _sites/default_ könyvtár és az abban lévő _settings.php_ fájl írási jogosultságait. Ilyenkor a kettővel ezelőtti lépésnél egy figyelmeztető üzenet jelenik meg, ami ugyan nem gátolja meg a sikeres telepítést, de a biztonsági kockázatok csökkentése érdekében mindenképp erősen javasolt e kettőt csak olvashatóra állítani a fájlrendszerben. Ha szükséges, ennek mikéntjéről érdemes egyeztetni a tárhelyszolgáltatóval.
## Az ismeretek elmélyítése

Telepítés után ellenőrizhetjük az _Állapotjelentést_, hogy meggyőződjünk róla, valóban minden szempontból készen áll-e az új webhely a használatra. Lásd: [prevent-status](./prevent-status.md).
## Kapcsolódó témák

* [install-dev-sites](./install-dev-sites.md)
* [install-tools](./install-tools.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/LGfRKKKDjv8" title="A telepítő futtatása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

Közösségi dokumentáció a Drupal.org-on: [Adatbázis létrehozása](https://www.drupal.org/docs/8/install/step-3-create-a-database)

*Közreműködők*

Írta és szerkesztette: [Joe Shindelar](https://www.drupal.org/u/eojthebrave) ([Drupalize.Me](https://drupalize.me)) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/)).
