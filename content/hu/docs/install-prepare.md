---
title: "Felkészülés a telepítésre"
description: "E szakaszban letöltjük az alaprendszer forráskódját és biztosítjuk a telepítés előfeltételeit."
id: "install-prepare"
translation_key: "install-prepare"
source_locale: "hu"
---
## Célkitűzés { #install-prepare }

Ebben a szakaszban letöltjük az alaprendszer forráskódját és biztosítjuk az ahhoz szükséges előfeltételeket.
## Szükséges előismeretek

* [install-requirements](./install-requirements.md)
* [install-tools](./install-tools.md)
* [install-decide](./install-decide.md)
* Hogyan kell szerverszoftvereket telepíteni a saját számítógépünkön
* Hogyan kell beállítani egy tárhelyet egy általános webhely számára
* Miként lehet adatbázist létrehozni
## Webhely előfeltételei

A számítógépen, ahol a webhelyünket tervezzük elhelyezni, bizonyos szerverszoftvereknek már telepítve kell lenniük. Ebben segíthet a [install-requirements](./install-requirements.md) leírás. Valamint attól függően, hogy az alaprendszer letöltésének melyik módját választottuk, szükségünk lehet további eszközökre is. A döntéshez lásd a [install-decide](./install-decide.md) részt, míg az eszközök beszerzéséhez pedig a [install-tools](./install-tools.md) szakaszt.
## Lépések

1. Válasszunk egy letöltési és telepítési módot a [install-decide](./install-decide.md) szakaszban felsoroltak közül. Az itt következő lépések a Composerre és kézi letöltésre, valamint az interaktív telepítő futtatására vonatkoznak. Más lehetőség esetén a szoftvernek már telepítve kell lennie.
1. Akár a távoli kiszolgálón állítsunk be egy doménnevet a tárhelyünkhöz. Egy egyszerű HTML fájlt téve a tárhely gyökérkönyvtárába, majd a webcímét megnyitva egy böngészőben ellenőrizzük, hogy az elérhető-e.
1. Ugyanekkor készítsük el az adatbázist is egy teljes hozzáférési joggal rendelkező adatbázis-felhasználóval együtt.
1. Gondoskodjunk az alaprendszer forráskódjának a tárhely gyökérkönyvtárába való helyezéséről a [install-decide](./install-decide.md) szakaszban választott mód lépéssorát követve.
## Az ismeretek elmélyítése

A [install-run](./install-run.md) szakasz bemutatja az interaktív webes telepítő végigkattintgatásának menetét.

Ha a vizuális felületnél jobban szeretjük a parancssoros hozzáférést, akkor az alábbi Drush parancs közel ugyanezt végzi el. Gépeljük a következő utasításokat a parancssorba, ahol  `example` annak a könyvtárnak a neve, ahova az alaprendszert letöltöttük, valamint a `DB_NAME`, `DB_USER` és `DB_PASS` az adatbázis hitelesítő adatai:

```text
drush site:install standard --db-url='mysql://DB_USER:DB_PASS@localhost/DB_NAME' --site-name=example
```
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/7Aib3y9DM80" title="Felkészülés a telepítésre" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

[Drush](http://www.drush.org)

*Közreműködők*

Írta és szerkesztette: [Drew Gorton](https://www.drupal.org/u/dgorton), [Michael Lenahan](https://www.drupal.org/u/michaellenahan) ([erdfisch](https://erdfisch.de)), [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)). Fordította: [Pandelon](https://www.drupal.org/u/pandelon).
