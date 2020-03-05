# yii2-component-formatter

Компонент для форматирования расширяющий стандартный датами в русском календаре

Пока реализована поддержка, если формат задается в стандарте `php:...`

Форматируется тип `date` и `datetime`.

Соответствует БОСТ 000006-7528 "О задании формата даты и времени в программном коде для русского календаря" http://avr3.ru/doHmJp 

## Инсталяция

Для инсталяции библиотеки используйте composer:

```json
{
    "require": {
        "i-avatar777/yii2-component-formatter": "*"
    }
}
```

Или через команду

```
composer require i-avatar777/yii2-component-formatter
```

## Как использовать

Пропиши в конфигурационном файле `main.php` или `main-local.php`:

```php
return [
    // ...
    'components' => [
        'formatter'       => [
            'class'          => '\iAvatar777\components\FormatterRus\FormatterRus',
            'dateFormat'     => 'php:d.m.b/Y',
            'datetimeFormat' => 'php:d.m.b/Y H:i',
            // ...
        ],
    ],
];
```

И все стандартные форматирования будут работать.

Например в GridView:

```php
<?= \yii\grid\GridView::widget([
    // ...
    'columns'      => [
        [
            'header'    => 'Дата',
            'format'    => ['date', 'php:d.m.b (Y)'],
            'attribute' => 'date1',
        ],
        [
            'header'    => 'Дата и время',
            'format'    => ['datetime', 'php:d.m.b (Y) H:i:s'],
            'attribute' => 'date2',
        ],
        // ...
    ],
]) ?>
```

Или прямо в коде

```php
echo \Yii::$app->formatter->asDate(time(), 'php:j K b (Y)');
echo '<br>';
echo \Yii::$app->formatter->asDatetime(time(), 'php:j k b (Y) H:i:s');
```


Выдаст на экран:
```
5 мар 7528 (2020)
5 марта 7528 (2020) 13:59:00
```

## Ссылки

БОСТ №000006-7528 О задании формата даты и времени в программном коде для русского календаря
https://github.com/i-avatar777/kon/blob/master/%D0%91%D0%9E%D0%A1%D0%A2/%D0%91%D0%9E%D0%A1%D0%A2000006-7528.md