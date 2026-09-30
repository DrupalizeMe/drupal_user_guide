---
title: "Alapfogalom: a blokkok"
description: "Ebben a témakörben röviden áttekintjük az oldalelrendezések fontos építőköveit jelentő blokkokat."
id: "block-concept"
translation_key: "block-concept"
source_locale: "hu"
---
## Mit nevezünk blokknak? { #block-concept }

Azokat a tartalmi egységeket hívjuk _blokknak_, amelyek a webhely oldalain egy-egy jól elkülöníthető részegységet képeznek. Mindegyik ilyen blokk kötelezően hozzá kell, hogy legyen rendelve az éppen használt smink által meghatározott számos régió (lásd: [block-regions](./block-regions.md)) egyikéhez. Létrehozni, átrendezni vagy eltávolítani pedig a _Blokk elrendezés_ (címsorban _admin/structure/block_) oldalon lehet őket. Tulajdonképpen minden blokkokban jelenik meg, például a „Jelen lévő felhasználók” lista, a fő navigáció vagy a kenyérmorzsamenü is egy-egy blokk. Sőt, még az oldal közepén a fő tartalom is egy blokk.

Vannak modulok, amelyek bekapcsolva további blokkokat biztosítanak számunkra, hogy elhelyezzük őket a szükséges oldalakon igény szerint. Ilyen például a _Search_ modul is, amit engedélyezve és megfelelően beállítva kapunk egy keresőmező blokkot, melyet kitehetünk abba a régióba, ahová szeretnénk. De mi magunk is elkészíthetjük saját blokkjainkat.

Minden egyes blokk egyedileg beállítható, testreszabhatjuk például, hogy a webhely melyik oldalain legyen látható vagy éppen rejtett. Még az is lehetséges, hogy ugyanannak a blokknak több példányát máshol és máshogy tegyük ki – miközben a tartalmát módosítani továbbra is csak egy helyen kell.
## Kapcsolódó témák

* [block-regions](./block-regions.md)
* [block-create-custom](./block-create-custom.md)
* [block-place](./block-place.md)

*Közreműködők*

E témakör szövegét [Les Lim](https://www.drupal.org/u/les-lim) a Drupal közösségi [dokumentációjának](https://www.drupal.org/documentation) [Block module](https://www.drupal.org/docs/8/core/modules/block) (azaz „Blokk modul”) című szócikkeiből vette át, melyek szerzői joga 2000–2026 között azok egyéni közreműködőié. Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
