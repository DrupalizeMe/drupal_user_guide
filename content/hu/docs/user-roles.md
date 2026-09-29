---
title: "Felhasználók szerepköreinek megváltoztatása"
description: "Így változtathatjuk meg a felhasználók szerepköreit."
id: "user-roles"
translation_key: "user-roles"
source_locale: "hu"
---
## Célkitűzés { #user-roles }

Változtassuk meg adott felhasználók szerepköreit akár egyesével az adatlapjukat szerkesztve, akár csoportosan, tömeges műveletet alkalmazva.
## Szükséges előismeretek

[user-concept](./user-concept.md)
## Webhely előfeltételei

Talán szükségtelen mondani, hogy pár felhasználói fióknak, amit módosítani tervezünk, már léteznie kell. Ha csak véletlenül jutottunk ide, akkor az előző részek segítenek:

* [user-new-role](./user-new-role.md)
* [user-new-user](./user-new-user.md)
* [user-permissions](./user-permissions.md)
## Lépések
### Egyesével

1. A _Kezelés_ adminisztrációs menüben menjünk a _Felhasználók_ oldalra (vagy a címsorban adjuk meg az _admin/people_ útvonalat). A megjelenő oldal felsorolja a webhelyünkön pillanatnyilag létező valamennyi felhasználói fiókot.
1. Keressük meg a felsorolásban az _Egyes számú_ felhasználót. Ha éppen nem lenne látható, akkor leszűkíthetjük a találatokat, ha beírjuk a _Név vagy e-mail tartalmazza_ mezőbe a felhasználói nevét, ami „admin”.
1. Ha megvan, a sorának végén kattintsunk a _Szerkesztés_ gombra, hogy módosítsuk az adatlapját.
    <img src="/images/user-roles_people-list.png" alt="A felhasználók listája" width="100%" />
1. Az adatlapjának szerkesztőoldalán görgessünk le a _Szerepörök_ részhez, és jelöljük be az _Adminisztrátor_ lehetőséget.
    <img src="/images/user-roles_person-edit.png" alt="A szerepkörök rész a felhasználói adatlap szerkesztésekor" width="141px" />
1. Kattintsunk a _Mentés_ gombra a módosítások érvényesítéséhez. Visszajutunk a kiindulási _Felhasználók_ oldalra, ahol egy _A változások mentése megtörtént_ állapotüzenet tájékoztat róla, ha a mentés sikeres volt:
    ![Megerősítő állapotüzenet](/images/user-roles_message.png)
### Tömeges művelettel

1. Ha a _Csemege Méhészet_ és _Víg tanya_ felhasználóknak még nem lenne _Árus_ szerepkörük, akkor ezzel a módszerrel egyszerre tudjuk nekik megadni. Ha esetleg éppen nem ott állnánk, akkor a _Kezelés_ adminisztrációs menüben menjünk a _Felhasználók_ oldalra (vagy a címsorban adjuk meg az _admin/people_ útvonalat). A megjelenő oldal felsorolja a webhelyünkön pillanatnyilag létező valamennyi felhasználói fiókot.
1. Keressük meg kettejük felhasználói fiókjait a felsorolásban, és ha megvannak, jelöljük be mindkettőt a soruk elején.
1. A _Művelet_ legördülőből válasszuk a _Kiválasztott felhasználók felhatalmazása Árusok szerepkörrel_ lehetőséget:
    ![Felhasználók listája tömeges művelet végrehajtása előtt](/images/user-roles_bulk.png)
1. Kattintsunk az _Alkalmazás a kiválasztott elemekre_ gombra a tömeges művelet indításához.
1. Egy folyamatjelzőt fogunk látni a kérés végrehajtása közben, majd pedig egy _Kiválasztott felhasználók felhatalmazása Árusok szerepkörrel művelet 2 elemre lett alkalmazva_ állapotüzenet tájékoztat róla, ha a mentés sikeres volt:
    ![Megerősítő üzenet](/images/user-roles_message_bulk.png)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/hd7Sr3-n9ME" title="Felhasználók szerepköreinek megváltoztatása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta: [Chris Dart](https://www.drupal.org/u/chris-dart) és [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
