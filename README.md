![BEDCA](http://img.imgur.com/nGR9U4c.png)

### Spanish Food Composition Database (Base de Datos Española de Composición de Alimentos)

PHP API wrapper to get foods from http://www.bedca.net/bdpub/ public database.

Modificación de statickidz/bedca-api añadiendo una nueva funcionalidad.

## Installation

Install this package via [Composer](https://getcomposer.org/).

```
composer require jmsc1991/bedca-api
```

Or edit your project's `composer.json` to require `statickidz/bedca-api` and then run `composer update`.

```json
"require": {
    "jmsc1991/bedca-api": "1.1.1"
}
```

## Usage

#### Init
```php
use jmsc1991\BedcaAPI\BedcaClient;

$client = new BedcaClient();
```

#### Get food groups
```php
$foodGroups = $client->getFoodGroups();
```

Example response:
```php
object(stdClass)#17 (1) {
  ["food"]=>
  array(13) {
    [0]=>
    object(stdClass)#18 (3) {
      ["fg_id"]=>
      string(1) "1"
      ["fg_ori_name"]=>
      string(20) "Lácteos y derivados"
      ["fg_eng_name"]=>
      string(22) "Milk and milk products"
    }
    [1]=>
    object(stdClass)#19 (3) {
      ["fg_id"]=>
      string(1) "2"
      ["fg_ori_name"]=>
      string(18) "Huevos y derivados"
      ["fg_eng_name"]=>
      string(21) "Eggs and egg products"
    }
    [2]=>
    object(stdClass)#20 (3) {
      ["fg_id"]=>
      string(1) "3"
      ["fg_ori_name"]=>
      string(21) "Cárnicos y derivados"
      ["fg_eng_name"]=>
      string(22) "Meat and meat products"
    }
    ..........
  }
}
```

#### Get foods in a food group
Knowing the food group ID, we can retrieve all foods in these group.
```php
$food = $client->getFoodsInGroup(3);
```

#### Get single food by ID
Same operation with previous data, knowing food ID we can retrieve all data.
```php
$food = $client->getFood(893);
```

#### Buscar alimentos
```php
$food = $client->getSearchFoods('huevo');
```
