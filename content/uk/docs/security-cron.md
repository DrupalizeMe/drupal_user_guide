---
title: "Налаштування завдань крона для обслуговування сайту"
description: "Як запускати завдання крона, використовуючи модуль ядра Automated Cron або запускаючи крон зовні сайту."
id: "security-cron"
translation_key: "security-cron"
source_locale: "uk"
---
## Мета { #security-cron }

Перевірити чи є завдання крона регулярними чи ні,
встановити модуль ядра Automated Cron або запустити завдання крона
зовні сайту.
## Необхідні знання

[security-cron-concept](./security-cron-concept.md)
## Кроки

1. Подивитися сторінку _Звіт про стан_ (дивіться [prevent-status](./prevent-status.md)), де написано коли крон
    запускався останній раз.
    Якщо ви встановили сайт використовуючи Стандартний інсталяційний профіль (або
    подібний), тоді крон вже буде запускатися через
    модуль ядра Automated Cron. За замовчуванням крон буде запускатися кожні три
    години.
1. Вибрати варто запускати крон використовуючи модуль ядра Automated Cron
    або використовувати інший шлях. Модуль ядра Automated Cron може не підійти
    для сайтів коли:
    * Кожен раз хтось заходить на сторінку сайту, модуль перевіряє як довго
      не запускався крон, і тоді запускає крон якщо це
      необхідно. Якщо ніхто не заходить на сайт довгий час, то крон
      НЕ буде запускатися.
    * Крон запускається після того як сторінка згенерована. Це означає,
      що залишиться менше часу для виконання крона перед тим як різні ліміти часу на сервері
      будуть перевищені (наприклад, час виконання PHP скрипта). Якщо це трапляється, то в логах (дивіться
      [prevent-log](./prevent-log.md)) буде показано повідомлення про помилки, про те що крон не міг здійснитися.
    * Крон слабо підтримує [Масштабування](https://ru.wikipedia.org/wiki/%D0%9C%D0%B0%D1%81%D1%88%D1%82%D0%B0%D0%B1%D0%B8%D1%80%D1%83%D0%B5%D0%BC%D0%BE%D1%81%D1%82%D1%8C)
      якщо працює на модулі ядра Automated Cron. Це відбувається тому що процес веб
      сервера зайнятий (і не може обслуговувати інші веб сторінки) поки
      крон виконується.
1. Якщо ви хочете використовувати модуль Automated Cron, спершу переконайтеся, що він
    встановлений (Модуль встановлюється разом зі Стандартним інсталяційних профілем; дивіться
    [config-install](./config-install.md) якщо модуль не встановлений).
    Далі, налаштуйте модуль, задавши частоту з якою крон буде
    виконуватися. В меню адміністратора _Керування_, перейдіть на _Конфігурація_ >
    _Система_ > _Крон_ (_admin/config/system/cron_). Виберіть бажаний інтервал в полі
    _Запускати крон кожні/кожен_ в розділі _Налаштування крону_, і натисніть _Зберегти конфігурацію_.
    ![Налаштування модуля ядра Automated Cron](/images/security-cron.png)
1. Якщо ви хочете запускати крон зовні сайту, видаліть
    модуль ядра Automated Cron (дивіться [config-uninstall](./config-uninstall.md)). Далі, знайдіть
    URL адресу крона. Цей URL показується на сторінці _Звіт про стан_ (дивіться [prevent-status](./prevent-status.md)) і
    на сторінці _Крон_ (дивіться попередній крок). Ця URL адреса виглядає
    приблизно ось так:
    _http: //www.example.com/cron/0MgWtfB33FYbbQ5UAC3L0LL3RC0PT3RNUBZILLA0Nf1Re_
    Кожен раз коли URL адреса крона відвідується, крон буде запускатися. Налаштуйте один з
    наступних планувальників відвідувати цю адресу URL регулярно:
    * [The Cron daemon](https://www.drupal.org/docs/7/setting-up-cron/configuring-cron-jobs-using-the-cron-command) (Linux, OS X, Solaris, BSD)
    * [Scheduled Tasks](https://www.drupal.org/docs/7/setting-up-cron-for-drupal/configuring-cron-jobs-with-windows) (Windows)
    * Сервіс SASS для крон (software as a service)
    * Крон менеджер надається вашим хостингом (дивіться документацію
      надану вашим хостинг провайдером)
## Пов'язані концепції

[security-concept](./security-concept.md)
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/ts4g1jTEAt4" title="Configuring Cron Maintenance Tasks" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Додаткові матеріали

* [Drush page "Running Drupal cron tasks from Drush"](http://docs.drush.org/en/master/cron/)
* [_Drupal.org_ сторінка документації спільноти "Setting up cron"](https://www.drupal.org/docs/7/setting-up-cron/overview)

*Автори*

Написано і змінено [Dave Hansen-Lange](https://www.drupal.org/u/dalin) із
[Advomatic](https://www.advomatic.com/),
[Boris Doesborg](https://www.drupal.org/u/batigolix),
і [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Переклав [Олексій Бондаренко](https://www.drupal.org/user/2914091) із [Mazaltov](https://drupal.org/mazaltov).
