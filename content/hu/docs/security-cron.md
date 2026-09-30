---
title: "Az időzített feladatok beállítása"
description: "Időzített feladatok beállítása vagy az alaprendszer Automated Cron moduljával vagy pedig a webhelyen kívülről indítva."
id: "security-cron"
translation_key: "security-cron"
source_locale: "hu"
---
## Célkitűzés { #security-cron }

Ellenőrizzük, hogy a webhely üzemszerű működésének szempontjából fontos időzített feladatok rendszeresen futnak-e. Ezenkívül gondoskodunk a megfelelő időközönként való meghívásukról vagy az alaprendszer _Automated cron_ moduljával vagy pedig a webhelyen kívülről indítva őket.
## Szükséges előismeretek

[security-cron-concept](./security-cron-concept.md)
## Lépések

1. Nyissuk meg webhelyünk _Állapotjelentését_ (lásd: [prevent-status](./prevent-status.md)), és keressük meg rajta az időzítő adatait, hogy mikor futott le utoljára.
    Ha a webhely annak idején a Standard (vagy magyarul Általános) profillal volt telepítve, akkor az időzített feladatok már valószínűleg megfelelően (alapértelmezés szerint háromóránként) futnak az _Automated Cron_ modulnak köszönhetően.
1. E ponton döntenünk kell, hogyan kívánjuk időzíteni ezen rendszerkritikus műveletek lefutását a jövőben. Alapvetően két lehetőségünk van:
      .. A webhelyet működtető Drupal saját magát hívja meg időnként,
      _vagy_
      .. Egy külső eszközt bízunk meg ugyanezzel a feladattal.
1. A megalapozott döntéshez tudnunk kell mindkét lehetőség előnyeit és hátrányait. Az alaprendszer _Automated cron_ modulja („A” opció) nem mindig alkalmas bizonyos webhelyek esetén:
    * A modul ugyanis annyit csinál, hogy valahányszor egy látogató lekér egy oldalt a webhelytől, akkor a kért oldal előállításán kívül ez a modul is lefut, és ellenőrzi, hogy mennyi ideje futottak le utoljára az időzített feladatok. Ha több, mint a beállított időköz, akkor meghívja őket automatikusan. Ebből az következik, hogy ha a webhelynek alacsony a látogatottsága (vagy egyáltalán nincs), akkor ez a folyamat ritkán (vagy akár soha) nem játszódik le.
    * A fent vázolt működési mód azt is jelenti, hogy az időzített feladatok végrehajtására csak azután kerülhet sor, hogy a látogató által kért oldal előállítása már megtörtént. Mivel a webkiszolgálók csak egy előre megadott időkeretet szánnak egy-egy kérés feldolgozására (pl. a PHP-szkriptek végrehajtására), ezért ha maga az oldalgenerálás sok időt vett igénybe, akkor előfordulhat, hogy az időzített feladatok elvégzésére már alig (vagy semmi) fennmaradó idő nem jut ebből az időkeretből. Ilyen esetben a rendszernapló (lásd: [prevent-log](./prevent-log.md)) hibákat fog tartalmazni, melyből értesülhetünk, hogy nem volt teljes az oldallekéréshez hozzáfűzött feladatok végrehajtása.
    * Bár elhanyagolható mértékben, de szintén hátrányosan érinti a [skálázhatóságot](https://hu.wikipedia.org/wiki/Sk%C3%A1l%C3%A1zhat%C3%B3s%C3%A1g), hogy a webkiszolgáló folyamatainak egyikét lefoglalja az időzített feladatok futtatása, és ezen idő alatt ez a folyamat nem tud látogatói kérésekre válaszolni.
1. A fent leírtak ellenére az _Automated cron_ modul által kínált funkcionalitás megfelelő lehet kis és közepes forgalmú webhelyeken, ezért ha a használata mellett döntünk, először is győződjünk meg róla, hogy telepítve van-e a webhelyünkön? (Az _Általános_ telepítési profillal biztosan engedélyezve lett, más esetben pedig a [config-install](./config-install.md) leírás segíthet.)
    Ezt követően állítsuk be, milyen gyakran futtassa az időzített feladatokat. Válasszuk ki a _Kezelés_ adminisztrátori menüben a _Konfiguráció_ > _Rendszer_ > _Időzítő_ menüpontot, vagy írjuk be a címsorba az _admin/config/system/cron_) útvonalat. A legördülő menüből válasszuk ki a kívánt értéket, majd kattintsunk a _Beállítások mentése_ gombra.
    ![Az alaprendszer Automated cron moduljának beállítása](/images/security-cron.png)
1. Ha azonban a fenti érveket megfontolva úgy döntünk, hogy az időzített feladatokat a webhelyen kívülről indíttatjuk („B” opció), akkor javasolt letiltani az _Automated cron_ modult, mivel nem lesz rá szükség (ehhez lásd a [config-uninstall](./config-uninstall.md) részt). Ezután keressük meg az időzített feladatok webcímét az előző lépésnél is megnyitott _Időzítő_ oldalon. Valószínűleg ehhez hasonlóan fog festeni: _http://pelda.hu/cron/0MgWtfB33FYbbQ5UAC3L0LL3RC0PT3RNUBZILLA0Nf1Re_
    Valahányszor ezt a speciális URL-t meghívják, a webhely időzített feladatai lefutnak. Így már könnyen be tudunk állítani valamilyen külső eszközt ennek kezelésére:
    * A [Cron daemon](https://www.drupal.org/node/23714) Linux, OS X, Solaris és BSD operációs rendszereken futó webkiszolgálókhoz (leírás angol nyelven).
    * A [Scheduled Tasks](https://www.drupal.org/node/31506) Windows operációs rendszereken futó webkiszolgálókhoz (leírás angol nyelven).
    * Fizetős szolgáltató SASS (software as a service, azaz „szoftver szolgáltatásként”) formában.
    * A tárhelyszolgáltató által nyújtott `cron` kezelő, aminek a tárhely dokumentációjában nézhetünk utána.
## Kapcsolódó témák

[security-concept](./security-concept.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/ts4g1jTEAt4" title="Az időzített feladatok beállítása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

* [Running Drupal cron tasks from Drush](http://docs.drush.org/en/master/cron/) (azaz „A Drupal időzített feladatainak futtatása Drushsal”) című dokumentáció angol nyelven.
* [Setting up cron](https://www.drupal.org/docs/7/setting-up-cron/overview) (azaz „A cron beállítása”) című közösségi dokumentáció a Drupal.org-on szintén angol nyelven.

*Közreműködők*

Írta és szerkesztette: [Dave Hansen-Lange](https://www.drupal.org/u/dalin) ([Advomatic](https://www.advomatic.com/)), [Boris Doesborg](https://www.drupal.org/u/batigolix) és [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
