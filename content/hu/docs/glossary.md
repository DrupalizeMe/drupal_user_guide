---
title: "Szójegyzék"
description: "Szójegyzék"
id: "glossary"
translation_key: "glossary"
source_locale: "hu"
---
[](){ #glossary }

## Ajax { #glossary-ajax }

A szerverrel való gyors adatcserére és egy, korábban már betöltött weboldal részeinek a teljes oldal újratöltése nélküli (azaz dinamikus) frissítésére használt webes technológia.

## Alkalmazkodó { #glossary-responsive }

Akkor mondjuk egy webhelyre (pontosabban az azon használt [sminkre](./glossary.md#glossary-theme)), hogy alkalmazkodó, ha a szélességét a pillanatnyi megjelenítéshez használt médiumtól (például képernyő, nyomtató) függően tudja változtatni. Lásd még a [töréspont](./glossary.md#glossary-breakpoint) kifejezést. Minderről további tudnivaló a [structure-image-responsive](./structure-image-responsive.md) témakörben található.

## Állapot { #glossary-state }

Ideiglenes információ a webhely pillanatnyi állapotáról, mint például az [időzítő](./glossary.md#glossary-cron) legutóbbi lefutásának időpontja. Lásd még a [tartalom](./glossary.md#glossary-content) és [konfiguráció](./glossary.md#glossary-configuration) kifejezéseket.  Minderről további tudnivaló az [understanding-data](./understanding-data.md) témakörben található.

## Álnév { #glossary-alias }

A rendszer által automatikusan egy oldalhoz rendelt, ám nem mindig könnyen megjegyezhető [webcímek](./glossary.md#glossary-path) elfedhetők másik, tetszőlegesen megadható, ezért felhasználóbarátabb álnevekkel. Például elfedhetjük webhelyünk _Rólunk_ oldalának automatikusan létrejövő _/node/5_ webcímét a könnyebben érthető _/rolunk_ álnévvel. Így a végső, felhasználók által látható webcím _http://pelda.hu/node/5_ helyett _http://pelda.hu/rolunk_ lesz. Minderről további tudnivaló az [content-paths](./content-paths.md) témakörben található.

## Biztonsági frissítés { #glossary-security-update }

Egy olyan [frissítés](./glossary.md#glossary-update), amit a webhely biztonságával kapcsolatos hiba (pl. egy biztonsági rés) javítására adtak ki. Minderről további tudnivaló a [security-concept](./security-concept.md) témakörben található.

## Blokk { #glossary-block }

Egy kisebb [tartalmi](./glossary.md#glossary-content) egység (például szöveg, kép, hivatkozások, bármi), ami megjeleníthető a webhely egyik oldalán. A blokkok [régiókban](./glossary.md#glossary-region) helyezhetők el. Minderről további tudnivaló a [block-concept](./block-concept.md) témakörben található.

## CMS { #glossary-cms }

A [tartalomkezelő rendszer](./glossary.md#glossary-content-management-system) mozaikszava.

## Drupal alaprendszer { #glossary-drupal-core }

A Drupal CMS szoftver általános kiépítésében letölthető moduljai, sminkjei, profiljai, valamint ezek összes fájlja együttesen jelentik az alaprendszert. Minderről további tudnivaló az [understanding-drupal](./understanding-drupal.md) témakörben található.

## Egyes számú felhasználó (User 1) { #glossary-user-one }

A webhely telepítése során létrejövő legeslegelső, ezáltal 1-es azonosítószámot kapó [felhasználói](./glossary.md#glossary-user) fiók. Ennek a felhasználónak mindig meglesz valamennyi [jogosultsága](./glossary.md#glossary-permission), még akkor is, ha nincs felruházva az Adminisztrátori [szerepkörrel](./glossary.md#glossary-role). Minderről további tudnivaló a [user-admin-account](./user-admin-account.md) témakörben található.

## Entitás { #glossary-entity }

Az _entitás_ fogalom a Drupal szaknyelvében az adat egy bizonyos formájára használatos. Alapvetően két fajtája lehet: vagy [tartalom](./glossary.md#glossary-content), vagy pedig [konfigurációs](./glossary.md#glossary-configuration) adat, bár az esetek többségében előbbit értjük alatta, azaz tartalmi entitásokról beszélünk amikor [tartalmi egységekről](./glossary.md#glossary-content-item), egyéni [blokkokról](./glossary.md#glossary-block) vagy [taxonómiakifejezésekről](./glossary.md#glossary-taxonomy-term) van szó. Utóbbira, a konfigurációs entitásokra pedig jó példa a [tartalomtípus](./glossary.md#glossary-content-type) fogalma, mely csak a webhely működését határozza meg, önmagában nem képvisel közzétehető információt. Az [entitástípus](./glossary.md#glossary-entity-type), [entitásaltípus](./glossary.md#glossary-entity-subtype) és [mező](./glossary.md#glossary-field) fogalmak elolvasása segíthet jobban megérteni a Drupal adatszervezési elveit. Minderről további tudnivaló a [planning-data-types](./planning-data-types.md) témakörben található.

## Entitásaltípus { #glossary-entity-subtype }

A [tartalom](./glossary.md#glossary-content) [entitástípuson](./glossary.md#glossary-entity-type) belül azokat az entitásokat csoportosítja, amik ugyanazokat a [mezőket](./glossary.md#glossary-field) használják. A [tartalmi egység](./glossary.md#glossary-content-item) entitástípus csak közzétételre szánt információkat takar. Ez azonban tovább osztható két alcsoportra attól függően, hogy az adott tartalmi egység milyen elemekből áll. Példának okáért egy termelői piac webhelyen az egyik fajta altípus csak sima szöveges aloldalakat tárol (mint például a _/rolunk_, _/nyitvatartas_ vagy _/elerhetosegeink_), míg a másik altípus a kereskedők bemutatkozó oldalait (például _/vig-tanya_ és _/csemege-meheszet_) tárolja. Fejlesztői dokumentációkban gyakran _mezőkötegként_ (angolul _field bundle_, vagy egyszerűen csak _bundle_) hivatkoznak az entitásaltípusra, de nagyjából ugyanazt jelenti: különböző mezők egy bizonyos szempont szerint összeválogatott gyűjteményét, ami adott típusú tartalmi egységek sablonjaként szolgál a jövőben. Minderről további tudnivaló a [planning-data-types](./planning-data-types.md) témakörben található.

## Entitáshivatkozás { #glossary-reference-field }

Egy olyan [mező](./glossary.md#glossary-field), ami kapcsolatot valósít meg egy [entitás](./glossary.md#glossary-entity) és egy vagy több másik entitás között, amik lehetnek vele azonos [típusúak](./glossary.md#glossary-entity-type), de akár tőle különbözőek is. Például egy termelői piac webhelyén egy recept tartalmi egység entitáshivatkozással mutathat az azt közzétevő árusra. Jó tudni, hogy a [taxonómiakifejezések](./glossary.md#glossary-taxonomy-term) ugyanúgy entitáshivatkozásoknak számítanak. Minderről további tudnivaló a [structure-reference-fields](./structure-reference-fields.md) témakörben található.

## Entitástípus { #glossary-entity-type }

Az [entitások](./glossary.md#glossary-entity) egy csoportja attól függően, hogy a webhely működését vezérlő adat (ez a [konfigurációs](./glossary.md#glossary-configuration) entitás), vagy pedig valamilyen közzétételre szánt adat (ez pedig a [tartalmi](./glossary.md#glossary-content) entitás). Általánosságban elmondható, hogy jóval gyakrabban ez utóbbit értjük alatta. Példaként említhetőek a [tartalmi egységek](./glossary.md#glossary-content-item), az egyéni [blokkok](./glossary.md#glossary-block), vagy a [taxonómiakifejezések](./glossary.md#glossary-taxonomy-term). Minderről további tudnivaló a [planning-data-types](./planning-data-types.md) témakörben található.

## Felhasználó { #glossary-user }

A webhelyet meglátogató személy, akár [névtelen](./glossary.md#glossary-anonymous), akár azonosított (bejelentkezett). Minderről további tudnivaló a [user-concept](./user-concept.md) témakörben található.

## Felhasználói felület { #glossary-user-interface }

Minden, ami látható a webhelyen, tulajdonképpen a felhasználói felület része. Szűkebben értelmezve minden, interakcióra képes elem (például gombok, linkek, beviteli mezők stb.) annak számít. Logikailag megkülönböztethető a nyilvános felület, amit a látogatók látnak, és az adminisztrációs felület, amit főképp csak az adminisztrátorok.

## Felületi elem { #glossary-widget }

Lásd a mező [felületi eleme](./glossary.md#glossary-field-widget) kifejezést.

## Formázó { #glossary-formatter }

Lásd a [mezőformázó](./glossary.md#glossary-field-formatter) kifejezést.

## FOSS { #glossary-foss }

Az angol _Free and Open Source Software_ (magyarul Ingyenes/Szabad Nyílt forráskódú Szoftver) kifejezés mozaikszava, amit olyan szoftverre használunk, melyet egy önkéntes közösség készít, és nem profitorientált céllal tesz közzé. Lásd még a [GPL](./glossary.md#glossary-gpl) kifejezést. Minderről további tudnivaló az [understanding-project](./understanding-project.md) témakörben található.

## Frissítés { #glossary-update }

A webhely szoftverének ([alaprendszer](./glossary.md#glossary-drupal-core), [modul](./glossary.md#glossary-module) vagy [smink](./glossary.md#glossary-theme)) egy újabb kiadása. Lásd még a [biztonsági frissítés](./glossary.md#glossary-security-update) kifejezést. Minderről további tudnivaló a [security-concept](./security-concept.md) témakörben található.

## GPL { #glossary-gpl }

Az angol _GNU General Public License_ (magyarul GNU Általános Közlicenc) kifejezés mozaikszava, ami a nem profitorientált célú szoftverekre használható licenc. A [Drupal.org](https://www.drupal.org) webhelyről letölthető valamennyi programkód a ["GNU Általános Közlicenc"](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html) 2. változata alatt lett közzétéve. Lásd még a [FOSS](./glossary.md#glossary-foss) kifejezést. Minderről további tudnivaló az [understanding-gpl](./understanding-gpl.md) témakörben található.

## Gyorsítótár { #glossary-cache }

A webhely belső gyorsítótára eltárolja a korábban már elvégzett, nagy számítási kapacitást igénylő műveletek (mint például a HTML-oldalak előállítása) eredményét, majd az időigényes újraszámítás helyett visszaadja őket, amikor újra kérés érkezik rájuk. Emellett a Drupalon kívül, a webszerveren is futhat külső gyorsítótár, ami segít tovább növelni a webhely betöltési sebességét. Minderről további tudnivaló a [prevent-cache](./prevent-cache.md) témakörben található.

## Időzítő { #glossary-cron }

Bizonyos operációs rendszereken a _cron_ egy parancsütemező alkalmazás, amely rendszeres időközönként lefuttatja az előre beállított szkripteket. A Drupal-alapú webhelyek is meghatároznak ilyen ismétlődő feladatokat, amelyeket újra és újra futtatni kell a helyes működéshez. Ez történhet akár az operációs rendszer által (ha van ilyen funkciója), vagy pedig belső módon. Minderről további tudnivaló a [security-cron-concept](./security-cron-concept.md) témakörben található.

## Jogosultság { #glossary-permission }

Képesség bizonyos műveletek elvégzésére a webhelyen. Ilyen például egy adott [tartalom](./glossary.md#glossary-content) szerkesztése, vagy a többi felhasználó adatlapjának megtekintése. Lásd még a [szerepkör](./glossary.md#glossary-role) kifejezést. Minderről további tudnivaló a [user-concept](./user-concept.md) témakörben található.

## Képstílus { #glossary-image-style }

Átalakító műveletek előre beállított sorozata, mely a kiinduló képből egy újat hoz létre. Leggyakoribb alkalmazása az átméretezés és kivágás. Minderről további tudnivaló a [structure-image-styles](./structure-image-styles.md) témakörben található.

## Konfiguráció { #glossary-configuration }

A webhely valamennyi olyan beállítását ideértjük, ami nem [tartalom](./glossary.md#glossary-content) és tartósabb, mint az [állapotinformáció](./glossary.md#glossary-state). Konfigurációnak számítanak például a webhely neve és jelmondata, a használt [tartalomtípusok](./glossary.md#glossary-content-type) és a beállított [nézetek](./glossary.md#glossary-view) stb. Minderről további tudnivaló az [understanding-data](./understanding-data.md) témakörben található.

## Közösségi { #glossary-contributed }

Azok a [modulok](./glossary.md#glossary-module), [sminkek](./glossary.md#glossary-theme) és [disztribúciók](./glossary.md#glossary-distribution), amik nem részei a Drupal [alaprendszernek](./glossary.md#glossary-drupal-core), külön tölthetőek le a [Drupal.org](https://www.drupal.org) webhelyről.

## LAMP { #glossary-lamp }

A _Linux, Apache, MySQL, és PHP_ nevek mozaikszava. Azt az esetet értjük alatta, amikor egy Linux operációs rendszeren egy Apache webszerver fut, amin a PHP végzi a parancsfájlok feldolgozását, amik pedig MySQL adatbázisokban tárolják az információt. Bár a leggyakoribb felállás a _LAMP_, az idők folyamán további variánsai is kialakultak. Ezeket az egyes szoftverösszetevőktől függően _MAMP_-ként (macOS) és _WAMP_-ként (Windows) is szokták emlegetni. Minderről további tudnivaló a [install-requirements](./install-requirements.md) témakörben található.

## Menü { #glossary-menu }

Hivatkozások olyan csoportja, mely a webhelyen való navigációt segíti, és alá-fölé rendelt hierarchiába szervezhető. Minderről további tudnivaló az [menu-concept](./menu-concept.md) témakörben található.

## Mező { #glossary-field }

Egy bizonyos fajtájú [tartalmi](./glossary.md#glossary-content) [entitáshoz](./glossary.md#glossary-entity) kapcsolt adat. A termelői piac példájánál maradva az _Árus_ tartalomtípusnak lehet egy kép típusú mezője a kereskedő fotójának, egy szöveg mezője a bemutatkozásának és egy [taxonómia kifejezéseket](./glossary.md#glossary-taxonomy-term) tároló mezője a bekategorizálásához (például, hogy miket árul: gyümölcs, zöldség, hús stb.). Minderről további tudnivaló a [planning-data-types](./planning-data-types.md) témakörben található.

## Mező felületi eleme { #glossary-field-widget }

Egy űrlap egy [mezőjébe](./glossary.md#glossary-field) az adatok bevitelének és szerkesztésének lehetőségeit meghatározó [konfiguráció](./glossary.md#glossary-configuration). Például egy szövegbeviteli mező lehet egy és több soros is, utóbbinak pedig állítható a sorainak száma is. Lásd még a [mező formázó](./glossary.md#glossary-field-formatter) kifejezést. Minderről további tudnivaló a [structure-widgets](./structure-widgets.md) témakörben található.

## Mezőformázó { #glossary-field-formatter }

Egy [mezőben](./glossary.md#glossary-field) tárolt adat megjelenítését szabályozó [konfiguráció](./glossary.md#glossary-configuration). Például egy szöveg típusú mező elé és után tetszőleges karakterek adhatóak, vagy beállítható, hogy ha HTML-formázást tartalmaz, akkor azt hagyja figyelmen kívül megjelenítéskor. Lásd még a [nézetmód](./glossary.md#glossary-view-mode) és [felületi elem](./glossary.md#glossary-field-widget) kifejezéseket. Minderről további tudnivaló a [structure-view-modes](./structure-view-modes.md) témakörben található.

## Mezőköteg { #glossary-bundle }

Az [entitásaltípus](./glossary.md#glossary-entity-subtype) rokonértelmű szava.

## Modul { #glossary-module }

Olyan PHP, JavaScript, és/vagy CSS programkód, ami kibővíti a webhely képességeit és további funkciókat ad hozzá. A Drupal szaknyelvében megkülönböztetünk [alaprendszeri](./glossary.md#glossary-drupal-core) és [közösségi](./glossary.md#glossary-contributed) modulokat. Minderről további tudnivaló az [understanding-modules](./understanding-modules.md) témakörben található.

## Napló { #glossary-log }

A webhely futása során az időben egymást követő események automatikusan feljegyzett sorozata. Információk a webhely használatáról, teljesítményéről, figyelmeztetések hibákról, valamint további adatok a működésről. Minderről további tudnivaló a [prevent-log](./prevent-log.md) témakörben található.

## Nézet { #glossary-view }

Adatok, leggyakrabban [tartalmi](./glossary.md#glossary-content) [entitások](./glossary.md#glossary-entity) valamilyen formázott listája. Példának okáért egy termelői piac webhelyen minden árus egy-egy [tartalmi egységként](./glossary.md#glossary-content-item) van jelen. Ekkor létre lehet hozni egy listázó oldalt, amin minden egyes árushoz megjelenik a kis bélyegképe és rövid bemutatkozószövege a saját sorában, mely a teljes önálló oldalára mutat. Ugyanazokból az adatokból építkezve ugyanígy egy „Új árusaink” című blokkot is lehet csinálni, ami a legutóbb regisztrált kereskedőket mutatja be, de nem az oldal fő tartalmaként, hanem egy bármely régióba elhelyezhető blokként. Minderről további tudnivaló a [planning-modular](./planning-modular.md) témakörben található.

## Nézetmód { #glossary-view-mode }

Egy [tartalom](./glossary.md#glossary-content) [entitás](./glossary.md#glossary-entity) valamennyi [mezőjének](./glossary.md#glossary-field) (a rejtetteké is) [formázója](./glossary.md#glossary-field-formatter) egyetlen [konfigurációban](./glossary.md#glossary-configuration). Minden [entitásaltípusnak](./glossary.md#glossary-entity-subtype) van legalább egy alapértelmezett nézetmódja, amiben a tartalomtípus valamennyi mezője egy beállítás szerint jelenik meg. Ezen felül viszont tetszőleges számú egyéni nézetmód is létrehozható: a [tartalomtípusoknak](./glossary.md#glossary-content-type) általában van egy _Teljes_ (ez a kötelező) és egy _Bevezető_ (ez pedig a törölhető) nézetmódja. Minderről további tudnivaló a [structure-view-modes](./structure-view-modes.md) témakörben található.

## Névtelen { #glossary-anonymous }

A webhelyet nem bejelentkezett [felhasználóként](./glossary.md#glossary-user) látogató személy. Minderről további tudnivaló a [user-concept](./user-concept.md) témakörben található.

## Régió { #glossary-region }

Egy oldal meghatározott területe, ahová [tartalom](./glossary.md#glossary-content) helyezhető el. A fejléc, lábléc, középső tartalmi hasáb és a bal oldalsáv pár példa a leggyakoribb régiókra. A [sminkek](./glossary.md#glossary-theme) határozzák meg a saját régióikat (ezért azok akár eltérőek is lehetnek két smink között), az elhelyezni kívánt tartalmat pedig [blokkokba](./glossary.md#glossary-block) kell tenni. Minderről további tudnivaló a [block-regions](./block-regions.md) témakörben található.

## Smink { #glossary-theme }

Olyan programkód (PHP, CSS, JS) és/vagy más elemek (képek, sablonok), amik a webhely kinézetét és oldalelrendezését határozzák meg. A Drupal szaknyelvében megkülönböztetünk [alaprendszeri](./glossary.md#glossary-drupal-core) és [közösségi](./glossary.md#glossary-contributed) sminkeket. Minderről további tudnivaló az [understanding-themes](./understanding-themes.md) témakörben található.

## Szerepkör { #glossary-role }

Bizonyos [jogosultságok](./glossary.md#glossary-permission) nevesített készlete, amit ezáltal egy [felhasználói fiókra](./glossary.md#glossary-user) alkalmazni lehet. Minderről további tudnivaló a [user-concept](./user-concept.md) témakörben található.

## Szótár { #glossary-vocabulary }

Azon [taxonómia kifejezések](./glossary.md#glossary-taxonomy-term) csoportja, amik közül választani lehet [tartalmak](./glossary.md#glossary-content) osztályozásakor egy adott szempont szerint. Például a termelői piac webhelyén az árusok bekategorizálhatók a „Forgalmazott termékek” szótár _gyümölcs_, _zöldség_ és _hús_ kifejezéseivel. Technikailag a szótárak a taxonómia kifejezés [entitástípus](./glossary.md#glossary-entity-type) [entitásaltípusai](./glossary.md#glossary-entity-subtype). Minderről további tudnivaló a [structure-taxonomy](./structure-taxonomy.md) témakörben található.

## Szövegformátum { #glossary-text-format }

Olyan [konfiguráció](./glossary.md#glossary-configuration), ami a felhasználók által bevitt szövegek feldolgozását szabályozza. Ilyen lehet például a beküldött szövegből a HTML-jelölők teljes vagy részleges kiszűrése, vagy a webcímek kattintható linkké alakítása. Minderről további tudnivaló a [structure-text-formats](./structure-text-formats.md) témakörben található.

## Szövegkörnyezeti hivatkozás { #glossary-contextual-link }

A webhely nyilvános felületén, egy funkció vagy tartalmi elem mellett (azaz annak _környezetében_), a kurzor közelítésére megjelenő hivatkozás, ami az adott beállítási oldalra mutat az adminisztrációs felületen. Például egy [menü](./glossary.md#glossary-menu) fölé vitt kurzor hatására megjelenik annak sarkában egy hivatkozás ikonja, amely az adott menü beállításaihoz vezet. Minderről további tudnivaló a [config-overview](./config-overview.md) témakörben található.

## Tartalmi egység { #glossary-content-item }

A webhely összes [tartalmának](./glossary.md#glossary-content) azon elemei, amik alapvetően nem blokként, hanem önálló oldalon, annak központi elemeként lesznek megjelenítve. A tartalmi egység az egyik [entitástípus](./glossary.md#glossary-entity-type) a sok közül. Minderről további tudnivaló a [planning-data-types](./planning-data-types.md) témakörben található.

## Tartalom { #glossary-content }

Minden olyan információ és adat a webhelyen, aminek a célja a közzététel: szövegek, képek, letölthető fájlok, stb. A tőlük való különbség megértéséhez lásd még a [Konfiguráció](./glossary.md#glossary-configuration) és [Állapot](./glossary.md#glossary-state) kifejezéseket. Minderről további tudnivaló az [understanding-data](./understanding-data.md) témakörben található.

## Tartalomkezelő rendszer (angolul Content Management System, röviden CMS) { #glossary-content-management-system }

Szoftveres eszközök tartalmak webhelyeken való létrehozását, módosítását, keresését, kiszolgálását és eltávolítását végző együttes rendszere. Minderről további tudnivaló az [understanding-drupal](./understanding-drupal.md) témakörben található.

## Tartalomtípus { #glossary-content-type }

Egy [entitásaltípus](./glossary.md#glossary-entity-subtype) a [tartalmi egység](./glossary.md#glossary-content-item) [entitástípushoz](./glossary.md#glossary-entity-type). Minden tartalomtípus különböző célt szolgál a webhelyen, ezért saját mezői és beállításai lehetnek. Például egy termelői piac webhelyén elég két tartalomtípus használata: egy _Egyszerű oldal_ az általános aloldalak létrehozásához és egy _Árus_ a regisztrált kereskedők nyilvántartására. Minderről további tudnivaló a [planning-data-types](./planning-data-types.md) témakörben található.

## Taxonómia { #glossary-taxonomy }

A [tartalmak](./glossary.md#glossary-content) osztályozásának folyamata. Minderről további tudnivaló a [structure-taxonomy](./structure-taxonomy.md) témakörben található.

## Taxonómia kifejezés { #glossary-taxonomy-term }

Egy [tartalomra](./glossary.md#glossary-content) használt kifejezés, mint például egy címke vagy kategória. Lásd még a [szótár](./glossary.md#glossary-vocabulary) kifejezést. Minderről további tudnivaló a [structure-taxonomy](./structure-taxonomy.md) témakörben található.

## Disztribúció (korábban _terjesztés_) { #glossary-distribution }

Egy adott célú webhely (például webáruház vagy szórakozóhely) igényeit kielégítő, egyetlen kattintással letölthető csomag. Ez a Drupal [alaprendszer](./glossary.md#glossary-drupal-core) mellett [közösségi](./glossary.md#glossary-contributed) [modulokat](./glossary.md#glossary-module) és/vagy [sminkeket](./glossary.md#glossary-theme) tartalmaz. Telepítéskor automatikusan elvégzi utóbbiak beállítását, de akár bemutató tartalmakat is létrehozhat az új webhely könnyebb használatba vételéhez. Minderről további tudnivaló az [understanding-distributions](./understanding-distributions.md) témakörben található.

## Töréspont { #glossary-breakpoint }

A különböző kimeneti eszközök (például képernyők, nyomtatók és más megjelenítők) nettó hasznos látómezejei töréspontokkal oszthatók fel több közre. Az [alkalmazkodó](./glossary.md#glossary-responsive) webhelyek ezen töréspontok figyelembe vételével állítják be a szélességüket megjelenítéskor. Minderről további tudnivaló a [structure-image-responsive](./structure-image-responsive.md) témakörben található.

## UI { #glossary-ui }

Az angol „User Interface” (magyarul [felhasználói felület](./glossary.md#glossary-user-interface)) kifejezés mozaikszava.

## Útvonal { #glossary-path }

A belső webcímek utolsó, egyedi szakasza, amit a rendszer az egyes (akár látogatók előtt nyilvános, akár csak adminisztrációs) oldalakhoz rendel hozzá. Például egy webhely _Rólunk_ oldalának a belső webcíme lehet _http://pelda.hu/node/5_, ebben az esetben az útvonal az a _/node/5_ rész. Lásd még az [Álnév](./glossary.md#glossary-alias) kifejezést. Minderről további tudnivaló az [content-paths](./content-paths.md) témakörben található.

## Változat { #glossary-revision }

Egy [tartalmi](./glossary.md#glossary-content) [entitás](./glossary.md#glossary-entity) múltbeli vagy jelenkori állapota, ahogyan az idők folyamán szerkesztve volt. Minderről további tudnivaló a [planning-workflow](./planning-workflow.md) témakörben található.

## Varázsló { #glossary-wizard }

Egy speciális űrlap, ami csupán pár bemeneti érték megadása alapján automatikusan létrehoz valamilyen értelmes kimenetet, például léteznek [nézetek](./glossary.md#glossary-view) előállítását részben elvégző, azok beállítását pedig segítő varázslók. Minderről további tudnivaló a [views-create](./views-create.md) témakörben található.

## WYSIWYG { #glossary-wysiwyg }

Az angol _What You See is What You Get_ (magyarul „Azt kapod, amit látsz”) kifejezés mozaikszava. A [tartalmak](./glossary.md#glossary-content) olyan szerkesztését teszi lehetővé, hogy a készülő munka vizuálisan már nagyon hasonlít a tervezett végső kimenetre. Minderről további tudnivaló a [structure-text-format-config](./structure-text-format-config.md) témakörben található.
