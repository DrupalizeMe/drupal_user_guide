---
title: "Nyelvek hozzáadása"
description: "Áttekintjük, hogyan lehet új nyelveket felvenni a webhelyre és kitenni a _Nyelvválasztó_ blokkot."
id: "language-add"
translation_key: "language-add"
source_locale: "hu"
---
## Célkitűzés { #language-add }

E leírás végére érve már érteni fogjuk, hogyan kell egy vagy több további nyelvet felvenni, és közülük az alapértelmezettet kiválasztani.
## Szükséges előismeretek

[language-concept](./language-concept.md)
## Lépések

1. A [config-install](./config-install.md) témakörnél ismertetett módon engedélyezzük az alaprendszer következő négy modulját: _Language_, _Interface Translation_, _Content Translation_ és _Configuration Translation_.
1. Ezután a _Kezelés_ adminisztrációs menüben menjünk a _Konfiguráció_ > _Helyek és nyelvek_ > _Nyelvek_ útvonalon az _admin/config/regional/language_ oldalra.
1. Kattintsunk a _Nyelv hozzáadása_ gombra.
1. Válasszuk ki a _Nyelv neve_ listából a hozzáadni kívánt nyelvet (például _Német_). Kattintsunk ismét a _Nyelv hozzáadása_ gombra. A következő oldalon automatikusan letöltődnek a kért nyelv felületfordítási fájljai a közösségi fordításkiszolgálóról webhelyünk tárhelyére, majd visszaérkezünk a korábbi _Nyelvek_ oldalra egy rendszerüzenettel, ami a letöltés eredményéről tájékoztat.
    <img src="/images/language-add-list.png" alt="Egy webhely telepített nyelveinek listája" width="100%" />
1. Ekkor azonban még csak a webcím átírásával lehet más nyelven megtekinteni oldalainkat. A [block-place](./block-place.md) témakörnél leírtakat követve viszont elhelyezhetünk egy _Nyelvválasztó_ blokkot valamelyik (például a _Második_) oldalsáv régiójába. Ennek segítségével a felhasználók már bármikor könnyen átválthatnak a webhelyen engedélyezett nyelvek között.
## Az ismeretek elmélyítése

* [language-content-config](./language-content-config.md)
* [language-content-translate](./language-content-translate.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/8Yu0G4gJ0f4" title="Nyelvek hozzáadása a webhelyhez" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

[Configuring a Multilingual Site](https://www.drupal.org/resource-guides/configuring-multilingual-site) (azaz „Egy többnyelvű webhely beállítása”) című összefoglaló oldal a Drupal.org-on.

*Közreműködők*

Írta és szerkesztette: [Leila Tite](https://www.drupal.org/u/yrvyn), [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) és [Boris Doesborg](https://www.drupal.org/u/batigolix). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/))
