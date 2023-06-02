# Преобразователь массива в строку

Краткое описание пакета.

## Требования
- PHP 7.0 и выше

## Установка

```bash
$ composer require evgeny-korovin/otus-composer-package
```

## Использование

```php
<?php
$arr = ['apple', 'banana', 'cucumber'];
$processor = new StringToArrayProcesor();
echo $processor->getStringFromArray($arr); // "apple banana cucumber"
```