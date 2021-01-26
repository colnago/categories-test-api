INSTALLATION
------------

~~~
composer install
php yii migrate
~~~


CONFIGURATION
-------------

### Database

Edit the file `config/main-local.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=127.0.0.1;dbname=currencies',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
```

USAGE
-------------

Parse currenies

~~~
php yii console/get-currencies
~~~

Get currencies

GET /currencies

~~~
curl -i "http://currencies-test-api/currencies" -H "Accept:application/json" -H "Authorization:Bearer admin"
~~~

Get currency

GET /currency/{id}

~~~
curl -i "http://currencies-test-api/currency/{id}" -H "Accept:application/json" -H "Authorization:Bearer admin"
~~~
