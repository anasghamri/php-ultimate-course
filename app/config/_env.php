<?php

require_once __DIR__.'/../../vendor/autoload.php';

define('BASE_PATH', realpath(__DIR__.'/../../'));

$dotEnv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotEnv->load();

?>