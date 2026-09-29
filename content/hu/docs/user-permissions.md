---
title: "Jogosultság adása egy szerepkörnek"
description: "Egy már meglévő szerepkör jogosultságainak a kezelése."
id: "user-permissions"
translation_key: "user-permissions"
source_locale: "hu"
---
## Célkitűzés { #user-permissions }

Megváltoztatjuk az _Árus_ szerepkör jogosultságait úgy, hogy az ebbe sorolt felhasználók képesek legyenek beküldeni új, illetve szerkeszteni és törölni már meglévő recepteket, valamint frissíteni a saját adatlapjukat. Mindehhez használhassanak szövegformázást, és üzenhessenek egymásnak.
## Szükséges előismeretek

* [user-concept](./user-concept.md)
## Webhely előfeltételei

Az _Árus_ szerepkört már létre kellett hozni, amit az előző, [user-new-role](./user-new-role.md) részben végeztünk el.
## Lépések

1. A _Kezelés_ adminisztrációs menüben menjünk a _Felhasználók_ > _Szerepkörök_ oldalra (vagy a címsorban adjuk meg az _admin/people/roles_ útvonalat). A megjelenő oldal felsorolja a webhelyünkön pillanatnyilag elérhető valamennyi szerepkört.
1. Válasszuk a _Jogosultságok szerkesztése_ lehetőséget a lenyíló gombról. Az ekkor megjelenő _Szerepkör szerkesztése_ oldal felsorolja a webhelyünkön létező valamennyi jogosultságot. Ha végigfutunk rajta a szemünkkel, olyasmiket fogunk látni, mint például _Hozzászólások beküldése_ vagy _Haladó keresés használata_. Megjegyzés: néhány jogosultságnak biztonsági következményei vannak, ezért tanácsos elővigyázatosnak lenni a tekintetben, hogy mely szerepköröknek adjuk meg őket. Mivel a jogosultságokat a webhelyen éppen engedélyezett modulok határozzák meg, ezért a könnyebb áttekintés kedvéért csoportosítva vannak az őket definiáló modulok szerint.
1. Jelöljük be az alább felsorolt jogosultságokat:
    <table>
      <thead>
        <tr>
          <th>Modul</th>
          <th>Jogosultság neve</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Contact</td>
          <td>Felhasználói szintű kapcsolatfelvételi űrlap használata</td>
        </tr>
        <tr>
          <td>Filter</td>
          <td>Korlátozott HTML-szövegformátum használata</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Recept: új tartalom létrehozása</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Recept: saját tartalom törlése</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Recept: saját tartalom szerkesztése</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Árus: saját tartalom szerkesztése</td>
        </tr>
        <tr>
          <td>Quick Edit</td>
          <td>Helybeni szerkesztés engedélyezett</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/user-permissions-check-permissions.png" alt="Receptek kezelésére vonatkozó jogosultságok megadása az Árus szerepkörű felhasználóknak" width="100%" />

1. Kattintsunk a _Jogosultságok mentése_ gombra, majd egy _A változások mentése megtörtént_ állapotüzenet tájékoztat róla, ha a mentés sikeres volt:
    ![Megerősítő üzenet a jogosultságok mentése után](/images/user-permissions-save-permissions.png)
## Az ismeretek elmélyítése

* Mivel emlékszünk a jelszavaikra, ezért ellenőrzésképpen be tudunk jelentkezni az előző, [user-new-user](./user-new-user.md) részben készített két Árus szerepkörű fiókkal, hogy megnézzük, milyen funkciókhoz férnek hozzá a jogosultságaik kibővítését követően.
* [user-roles](./user-roles.md)
## Kapcsolódó témák

[user-admin-account](./user-admin-account.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/IlVh9f4BHVw" title="Jogosultság adása egy szerepkörnek" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

[Managing Users](https://www.drupal.org/docs/7/managing-users) (azaz „Felhasználók kezelése”) című közösségi dokumentáció a Drupal.org-on angol nyelven.

*Közreműködők*

E témakör szövegét [Boris Doesborg](https://www.drupal.org/u/batigolix), [Brian Emery](https://www.drupal.org/u/bemery987) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)) a Drupal közösségi [dokumentációjának](https://www.drupal.org/documentation) [User Roles](https://www.drupal.org/node/1803614) (azaz „Felhasználói szerepkörök”) című szócikkéből vették át és szerkesztették, melynek szerzői joga 2000–2026 között azok egyéni közreműködőié. Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
