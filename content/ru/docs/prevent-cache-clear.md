---
title: "Очистка кэша"
description: "Как очистить кэш с помощью Drush или пользовательского интерфейса."
id: "prevent-cache-clear"
translation_key: "prevent-cache-clear"
source_locale: "ru"
---
## Цель { #prevent-cache-clear }

Очистить или перестроить внутренние кэши вашего сайта, чтобы они были актуальны и содержали самые последние данные, используя пользовательский интерфейс или Drush.
## Необходимые знания

* [prevent-cache](./prevent-cache.md)
* [install-tools](./install-tools.md)
## Требования к сайту

Если вы хотите использовать Drush для очистки кэша, Drush должен быть установлен. Смотрите [install-tools](./install-tools.md).
## Шаги

Вы можете использовать административный интерфейс или Drush для очистки кэша. Вы также можете воспользоваться rebuild-скриптом или Drush для более полного перестроения кэша.
### Использование административного интерфейса для очистки кэша

1. В _Управление_ административного меню перейдите в _Конфигурация_ > _Разработка_ > _Производительность_ (_admin/config/development/performance_). Если у вас нет доступа к этой странице, используйте один из других способов очистки или перестроения кэша.
1. Нажмите _Очистить все кэши_.
1. В верхней части страницы появится сообщение о том, что кэш был очищен.
1. Если это не решило проблему, из-за которой вы хотели очистить кэш, попробуйте вместо этого выполнить перестроение (rebuild).
### Использование скрипта перестроения

1. Откройте _settings.php_ (_/sites/default/settings.php_) в любом текстовом редакторе. Добавьте эту строку в конец файла и сохраните его:
    ```text
    $settings['rebuild_access'] = TRUE;
    ```
1. Перейдите по адресу _http://www.example.com/core/rebuild.php_ в вашем браузере (где _www.example.com_ — это URL вашего сайта). После небольшой паузы вы должны быть перенаправлены на главную страницу вашего сайта, и кэш должен быть перестроен.
1. Откройте _settings.php_ (_/sites/default/settings.php_) в текстовом редакторе. Найдите строку с _$settings['rebuild_access']_, удалите её и сохраните файл.
### Использование Drush для перестроения или очистки кэша

Вы можете использовать одну из двух команд:

* Используйте команду `drush cache:rebuild`, чтобы очистить и перестроить все кэшированные данные сайта. После выполнения этой команды вы увидите сообщение "Cache rebuild complete."
* Используйте команду `drush cache:clear`, чтобы увидеть список отдельных кэшей и выбрать, какой именно кэш вы хотите очистить. При выполнении команды будет такой вывод:
```text
> drush cache:clear
Enter a number to choose which cache to clear.
 [0]  :  Cancel
 [1]  :  drush
 [2]  :  theme-registry
 [3]  :  menu
 [4]  :  css-js
 [5]  :  block
 [6]  :  module-list
 [7]  :  theme-list
 [8]  :  render
 [9]  :  views
```

Выберите кэш для очистки, введя его номер. Нажмите "Enter" для продолжения.

Чтобы очистить конкретный тип кэша, укажите его в команде cache:clear.
Например, чтобы очистить render-кэш:
```text
drush cache:clear render
```
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/-evRieC6Y3U" title="Clearing the Cache" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные материалы

[_Drupal.org_ страница документации сообщества "Clearing or rebuilding Drupal's cache"](https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache)

*Авторы*

Адаптировано и отредактировано [Joe Shindelar](https://www.drupal.org/u/eojthebrave)
и [Jack Haas](https://www.drupal.org/u/jerseycheese) из
["Clearing or rebuilding Drupal's cache"](https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache),
авторские права 2000-2026 за отдельными участниками
[Drupal Community Documentation](https://www.drupal.org/documentation).

Переведено [Абраменко Иван](https://www.drupal.org/u/levmyshkin) из [DrupalBook](https://drupalbook.org/ru).
