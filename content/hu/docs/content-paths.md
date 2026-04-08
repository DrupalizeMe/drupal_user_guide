---
title: "Alapfogalom: útvonalak és álnevek"
description: "Az útvonalak és azok álneveinek megismerése néhány példán keresztül."
id: "content-paths"
translation_key: "content-paths"
source_locale: "hu"
---
## Mit nevezünk URL-nek? { #content-paths }

Az interneten elérhető webhelyek minden egyes oldalának egyedi webcímét nevezzük URL-nek az angol Uniform Resource Locator, azaz „egységes erőforrás-azonosító” kifejezés nyomán. A webböngészők az URL alapján tudják egyértelműen beazonosítani, hogy a felhasználó pontosan melyik webhely melyik oldalát szeretné megtekinteni. A „Látogasson meg minket a pelda.hu honlapunkon!” felhívásban a _pelda.hu_ URL közvetlenül a webhely címlapjára vezet. Így tehát azt mondhatjuk, hogy az URL-ek a weben való eligazodás legfontosabb eszközei.
## De akkor mi az útvonal?

Az előbb tárgyalt URL-nek egy kisebb részét szoktuk _elérési útvonalnak_ is nevezni, ami egy webhelyen belül egy bizonyos funkcióra vagy tartalomra mutat. Például ha egy oldalunk teljes URL-je _http://pelda.hu/node/7_ lenne, akkor ebből az útvonal a _node/7_ rész.

Az alábbiak szintén érvényes útvonalak lehetnek egy webhelyen:

* _taxonomy/term/6_
* _admin/content/comment_
* _user/login_
* _user/3_
## És végül akkor az álnevek?

A Drupal az első CMS-ek között volt, amelyek alaprendszerük mély szintjén valósították meg az útvonalátírást. A könnyebben megjegyezhető álneveket a felhasználók hamar megkedvelték, ezért e funkciót sokan „szép URL”-ként szeretik említeni. Ha például webhelyünk bemutatkozó oldalának a „Rólunk” címet adtuk, és ez a tartalom elmentésekor a _node/7_ útvonalat kapja, akkor lehetőségünk van elfedni azt egy útvonalálnévvel, így látogatóink _http://pelda.hu/rolunk_ címet látnak majd a böngészőjük címsorában. Ezt a képességet az alaprendszer _Path_ modulja biztosítja.
## Kapcsolódó témák

* [content-create](./content-create.md)
* [content-edit](./content-edit.md)

*Közreműködők*

E témakör szövegét [Lakatos Diána](https://www.drupal.org/u/dianalakatos) ([Pronovix](https://pronovix.com/)) a Drupal közösségi [dokumentációjának](https://www.drupal.org/documentation)  [URL aliases](https://www.drupal.org/node/120631) (azaz „URL álnevek”) és [Understanding Drupal paths](https://www.drupal.org/node/31644) (azaz „A Drupal útvonalainak megértése”) című szócikkeiből vette át, melyek szerzői joga 2000–2026 között azok egyéni közreműködőié. Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
