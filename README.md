Hyperf var-dumper 适配包，用来将变量打印到浏览器

# 安装

```shell
composer require max/hyperf-var-dumper
```

# 使用

修改`app/config/autoload/exceptions.php`

```php
<?php

declare(strict_types=1);

return [
    'handler' => [
        'http' => [
            \Max\HyperfVarDumper\VarDumperAbortHandler::class,
            Hyperf\HttpServer\Exception\Handler\HttpExceptionHandler::class,
            App\Exception\Handler\AppExceptionHandler::class,
        ],
    ],
];

```

# 打印

```php
d($request);
```
