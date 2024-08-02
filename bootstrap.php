<?php

require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Dotenv\Dotenv;
use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Initialize Eloquent ORM (Illuminate\Database)
$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => $_ENV['DB_HOST'],
    'database' => $_ENV['DB_NAME'],
    'username' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS'],
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

// Set up Whoops for error handling
$whoops = new Run();
$whoops->pushHandler(new PrettyPageHandler());
$whoops->register();
