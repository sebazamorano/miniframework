<?php
include_once 'vendor/autoload.php';

use Illuminate\Container\Container;
use Mini\Application;
use Mini\Database\Connection;
use Mini\Database\QueryBuilder;

$app = new Application(new Container());
$app->run();
//
//$query = new QueryBuilder(Connection::run());
//$tasks = $query->getAll('tasks');

//include 'index.view.php';