# yii2-component-formatter

Компонент для форматирования расширяющий стандартный датами в русском календаре

Пока реализована поддержка, если формат задается в стандарте `php:...`

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

Пропиши в конфигурационном файле:
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
$d = \Yii::$app->formatter->asDate(time(), 'php:d.m.b (Y)');
$dt = \Yii::$app->formatter->asDatetime(time(), 'php:d.m.b (Y) H:i:s');
```

## Ссылки

БОСТ №000006-7528 О задании формата даты и времени в программном коде для русского календаря
https://github.com/i-avatar777/kon/blob/master/%D0%91%D0%9E%D0%A1%D0%A2/%D0%91%D0%9E%D0%A1%D0%A2000006-7528.md