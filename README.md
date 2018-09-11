# Laravel Hello

Laravel Hello World simple package

## Installation
```shell
composer require swede2k/laravel-hello --dev
```

## Usage

```php
Hello::world();
```

Route Example: 
```php
Route::get('/', function () {
    return Hello::world();
});
```

Controller Example:

```php
public function index()
{
    return Hello::world();
}
```

:smile: :smile: :smile:
