<?php
    require __DIR__ .'/../Common/backend/parseENV.php';
    require __DIR__ . '/connectdb.php';
    require_once __DIR__ . '/../vendor/autoload.php';
    (new DevCoder\DotEnv(__DIR__ . '/../private/.env'))->load();

    new DB_Manipulation();

    use HelloWorld\SayHello;

    // echo SayHello::world();