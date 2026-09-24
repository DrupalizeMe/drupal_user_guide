---
title: "Felhasználói fiók létrehozása"
description: "Így hozhatunk létre új felhasználói fiókot a webhelyünkön."
id: "user-new-user"
translation_key: "user-new-user"
source_locale: "hu"
---
## Célkitűzés { #user-new-user }

Azért, hogy be tudjanak jelentkezni a webhelyre az adatlapjukat kitölteni, elkészítjük két árus, a _Csemege Méhészet_ és a _Víg Tanya_ felhasználói fiókját.
## Szükséges előismeretek

* [user-concept](./user-concept.md)
* [user-admin-account](./user-admin-account.md)
* [user-new-role](./user-new-role.md)
## Webhely előfeltételei

Az _Árus_ szerepkört már létre kellett hozni, amit az előző, [user-new-role](./user-new-role.md) részben végeztünk el.
## Lépések

1. A _Kezelés_ adminisztrációs menüben menjünk a _Felhasználók_ oldalra (vagy a címsorban adjuk meg az _admin/people_ útvonalat). A megjelenő oldal felsorolja a webhelyünkön pillanatnyilag elérhető valamennyi felhasználói fiókot.
1. Kattintsunk a _Felhasználó létrehozása_ gombra.
    <img src="/images/user-new-user_form.webp" alt="Az új felhasználói fiók létrehozása űrlap" width="100%" />
1. A megjelenő űrlapot töltsük ki az alábbiak szerint:
    <table>
      <thead>
        <tr>
          <th>Mező neve</th>
          <th>Magyarázat</th>
          <th>Javasolt kitöltés</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>E-mail cím</td>
          <td>Egy érvényes elektronikus levelezési címe az árusnak. A rendszer a felhasználó minden levelét erre a címre fogja küldeni. Az e-mail címet a rendszer soha nem hozza automatikusan nyilvánosságra.</td>
          <td>meheszet@pelda.hu</td>
        </tr>
        <tr>
          <td>Felhasználónév</td>
          <td>Ezt a nevet használva fog majd tudni bejelentkezni az árus, és az általa írt tartalmaknál (például beküldött recepteknél) is ez fog megjelenni szerzőként. A szóköz és néhány írásjel (a pont, a kötőjel, az aposztróf és az aláhúzás) megengedettek benne.</td>
          <td>Csemege Méhészet</td>
        </tr>
        <tr>
          <td>Jelszó</td>
          <td>Ezt a jelszót használva fog majd tudni bejelentkezni az árus. A _Jelszó erőssége_ kijelző mutatja, hogy az addig beírt szöveg mennyire lenne erős jelszóként. Ahogy elkezdünk gépelni, a _Javaslatok a jelszó erősségének növelésére_ keretben további tanácsokat is kapunk, hogyan tegyük még biztonságosabbá az addig beírt szöveget.</td>
          <td>Válasszunk egy megjegyezhető és biztonságos jelszót</td>
        </tr>
        <tr>
          <td>Jelszó megerősítése</td>
          <td>Pontosan ugyanazt a jelszót, ugyanúgy kell beírni még egyszer</td>
          <td></td>
        </tr>
        <tr>
          <td>Állapot</td>
          <td>Ha a felhasználói fiókot_Zárolt_ állapotúra állítanánk, akkor azzal nem lehetne bejelentkezni a webhelyre.</td>
          <td>Aktív</td>
        </tr>
        <tr>
          <td>Szerepkörök</td>
          <td>Adjuk meg, hogy melyik csoportba soroljuk az illetőt.</td>
          <td>Árus</td>
        </tr>
        <tr>
          <td>Új felhasználó értesítése e-mailben</td>
          <td>Küldjön-e a rendszer egy automatikus üdvözlő levelet a fent megadott e-mail címre, amikor itt a _Létrehozás_ gombra kattintunk?</td>
          <td>Bejelölve</td>
        </tr>
        <tr>
          <td>Kép</td>
          <td>A tallózás gombra kattintva keressük ki számítógépünkről az adott személyhez tartozó fotót vagy logót. Ügyeljünk a fájlméretbeli korlátozásokra.</td>
          <td>Egy képfájl</td>
        </tr>
        <tr>
          <td>Személyes kapcsolatfelvételi űrlap</td>
          <td>Engedélyezzük-e, hogy a webhely látogatói felvegyék a kapcsolatot ezzel a felhasználóval a profiloldalán megjelenő üzenetküldési lehetőségen keresztül?</td>
          <td>Bejelölve</td>
        </tr>
      </tbody>
    </table>
1. Kattintsunk az _Új fiók létrehozása_ gombra. Ezután egy _Csemege Méhészet új felhasználó számára el lett küldve egy további útmutatást tartalmazó üdvözlőüzenet_ állapotüzenet tájékoztat róla, ha a mentés sikeres volt:
    <img src="/images/user-new-user-created.webp" alt="Az új felhasználói fiók sikeresen létrejött" width="100%" />
1. Ugyanezeket a lépéseket megismételve készítsünk egy felhasználói fiókot a _Víg Tanya_ árus számára is.
## Az ismeretek elmélyítése

A Kézikönyv lépéssorainak végrehajtása során mindeddig valószínűleg a korábban a [install-run](./install-run.md) résznél létrehozott _Egyes számú felhasználói fiókot_ használtuk, amiről bővebben a [user-admin-account](./user-admin-account.md) résznél volt szó. Mivel ez egy különleges (angolul „superuser”) felhasználó, ezért biztonsági megfontolásból az általánosan javasolt gyakorlat az, hogy az _Egyes számú felhasználói fiók_ végig le van tiltva, és az adminisztrátorok saját, névre szóló felhasználói fiókjukba bejelentkezve tevékenykednek a webhelyen. Ez különösen akkor lesz hasznos, ha rajtunk kívül több adminisztrátor is kezeli a webhelyet, így a rendszernaplóban elkülöníthető lesz majd, hogy ki, mikor, mit csinált.

A fenti lépéssort követve tehát hozzunk létre magunknak is egy felhasználói fiókot, a szerepköröknél pedig ne felejtsük el bejelölni az _Adminisztrátor_ opciót.
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/2UtEtY9Cgaw" title="Felhasználói fiók létrehozása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta: [Diána Lakatos](https://www.drupal.org/u/dianalakatos) ([Pronovix](https://pronovix.com/)).  Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/)).
